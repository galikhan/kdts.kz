# Redesign notes — what was done and why

This documents the work done to fix and redesign the KDTS site
(`wp-content/themes/kdts`) so the same steps can be reproduced on
another copy of the old site (e.g. the `en/` or `ru/` installs, which
are separate WordPress installs with their own copies of this theme).

## 1. The bug that started this

The homepage rendered almost blank (just the logo + phone numbers, no
scrolling, no styling). Root cause:

- The site had already been through a partial redesign: `header.php`,
  `footer.php`, and `style.css` (bumped to "Version: 2.0.0 — Redesigned
  KDTS theme") were rewritten with a new class system (`.hero`,
  `.services`, `.news`, `.container`, etc., all built on CSS variables
  like `--c-dark`, `--c-line`).
- **`template-home.php` was never migrated.** It was a 1680-line,
  fully self-contained file (its own `<head>`/`<body>`, not using
  `get_header()`/`get_footer()`) built around a legacy one-page-scroll
  design (UIkit `data-uk-height-viewport` sections + the
  `jquery.onepage-scroll.js` plugin).
- That legacy template injected `body,html { overflow:hidden }` for
  viewports ≥640px (part of the old onepage-scroll harness). With the
  new CSS in place but none of the old page's classes defined in it,
  the page had no real layout — combined with `overflow:hidden`, only
  the first bit of content was visible and the page couldn't scroll.

**Lesson for the old copy:** before touching content, check whether
`header.php`/`footer.php`/`style.css` were already redesigned there
too, and whether `template-home.php` (or any other page) still has a
standalone `<head>/<body>` instead of calling `get_header()` /
`get_footer()`. Run:
```
grep -L "get_header()" wp-content/themes/kdts/template-*.php wp-content/themes/kdts/*.php
```
to find any other templates with the same problem.

## 2. Important, easy-to-miss finding

Grepping `style.css` for the class names used by other already-"fixed"
templates (`template-onas.php`, `archive-novosti.php`,
`template-kontakty.php`, `template-marshruty1.php`, etc.) turned up
**zero matches** (`rukovodstvo-*`, `novosti-item`, `kontakty-block`,
`marshruty-container`, `abount-missiya`, …). Those templates were only
updated with `<?php ?>` → `<?php ?>` short-tag fixes and a switch to
`get_header()`/`get_footer()` — their body markup is still the old
theme's classes, which don't exist in the new stylesheet. **They are
likely still visually broken/unstyled**, same root cause as the
homepage, just not yet reported. Worth auditing before assuming the
redesign is further along than it is.

This turned out to be exactly right — see section 8, the sidebar nav
and breadcrumb bar used by ~50 legacy templates were still using the
*old* theme's bare, unstyled markup until this pass.

## 3. What the new `template-home.php` does

Rebuilt from scratch using `get_header()` / `get_footer()` and the
existing (already-defined, previously-unused) homepage components in
`style.css`: `.hero`, `.calc-widget`, `.about-section`, `.services`,
`.partners-strip` (added, see below), `.news`, `.cta`, `.float-actions`.

All real content was pulled from the live DB (CFS custom fields on
post ID 7, the front page) rather than guessed — dumped once via a
temporary debug template printing `var_export(CFS()->get(...))`,
inspected, then removed. Sections and their real data source:

| Section | Source |
|---|---|
| Hero headline/lead | Written new (short, factual — reuses the real tagline already in `footer.php` and the "1997" founding year from the footer copyright line) |
| Hero calculator | `.calc-widget` / `js/new-design.js` `showCalcResult()` — **explicitly a fake/illustrative estimate** (`15000 + weight×180` KZT), per user's decision. Not wired to real rates. |
| "Компания туралы" text block | CFS `zagolovka` + `tekst1` on post 7 (real, unmodified copy) |
| Services grid | CFS `slayder-loop` repeater on post 7 (6 slides) — the `#operation` "calculate reload cost" slide was dropped since the hero calculator now covers that; the other 5 real service links/photos are shown. `blok-usluga` (a second, overlapping repeater with the same 3 services in text form) was **not** used, to avoid literal duplicate text on the page. |
| Partners strip | CFS `partnery-blok` repeater on post 7 (16 logos). New section/CSS — didn't exist in old design. |
| News grid | Real `WP_Query` on post type `novosti`, latest 3. Grayscale-until-hover treatment added later (section 7). |
| Bottom CTA | Personal cabinet (`https://my.kdts.kz/`) promo — kept deliberately generic (no invented feature list) since no real feature copy existed for it |
| Floating action buttons | Real Telegram bot link (`https://t.me/ao_kdts_bot`) + the real callback-request modal |

### Real functionality preserved (not decorative)

The old homepage had a genuine, working "request a rate" flow that
posts to `/send.php`. This was kept **exactly** (same field `name`s,
`id`s, and `do=` values) so the backend keeps working, just restyled:

- `#order-form` — the full quote-request modal (BIN, company, contact
  info, from/to station with live autocomplete, cargo type via ETSNG/
  GNG autocomplete, shipment type, container type, etc.), submitted
  via AJAX (`FormData` → `/send.php`).
- `#phone-form` — "request a callback" modal, same AJAX pattern.
- Station/cargo autocomplete: jQuery UI Autocomplete hitting
  `/send.php` with `do: 'station'` / `do: 'cargo1'` / `do: 'cargo2'`
  (JSONP).
- Phone input mask via `/ru/js/jquery.maskedinput-1.2.2.js` (same
  absolute path the old site already used cross-language-folder).

The old inline modal-toggle script (`.BtnModal` / `.arPortfolioModal`
/ `.modal-overlay`) was generalized and moved into
`js/new-design.js` so any future page can reuse the same modal
pattern instead of copy-pasting the script per template.

## 4. File-by-file changes (homepage pass)

- **`wp-content/themes/kdts/template-home.php`** — fully rewritten
  (see above). Old version was a legacy standalone one-page-scroll
  file; back it up before reproducing if you want a reference.
- **`wp-content/themes/kdts/js/new-design.js`**:
  - `showCalcResult()` changed to read `#calc-from` / `#calc-to` /
    `#calc-weight` (by id) instead of generic `[name="from"]` etc., to
    avoid colliding with the real quote-request form's own `from`/`to`
    fields on the same page.
  - Added `swapCalcFields()` for the calculator's swap button.
  - Added a generic, page-agnostic `.BtnModal` / `.arPortfolioModal` /
    `.modal-overlay` open/close handler (`DOMContentLoaded`).
- **`wp-content/themes/kdts/style.css`** — appended (did not touch
  existing rules):
  - `.partners-strip` / `.partners-grid` / `.partner-logo` — new,
    grayscale-on-hover logo strip, using the existing design tokens.
  - `.modal-overlay` / `.arPortfolioModal` / `.arPortfolioModal-title`
    / `.modalBtn` — modal chrome, since the redesign had no modal
    component yet. Form fields inside reuse the **existing**
    `.form-row-2` / `.form-fld` / `.form-row-1` / `.form-foot` classes
    (already defined for the contacts page) rather than inventing new
    ones.
  - `.ui-autocomplete` / `.ui-menu-item` / `.ui-menu-item-wrapper` —
    restyled jQuery UI's default autocomplete dropdown to match the
    new design tokens (white card, `--c-line` border, `--shadow-md`)
    instead of the default browser-native jQuery UI theme look.

## 5. How to reproduce the homepage pass on another copy

1. Confirm the target copy actually has the same redesigned
   `header.php` / `footer.php` / `style.css` (check for `Version:
   2.0.0` in `style.css`'s header comment and `.hero` class in it). If
   it's still on the fully old design, none of this applies —
   redesigning is a different, larger task there.
2. Diff its `template-home.php` against this one to port the same
   `get_header()`/`get_footer()` + section structure. Pull the copy's
   own CFS field values for post ID = its `page_on_front` option
   (don't assume field values match — dump them the same way: a
   temporary `var_export(CFS()->get(...))` block, curl it, delete it).
3. Copy the `new-design.js` additions (`showCalcResult` id-based
   fields, `swapCalcFields`, the generic modal handler) — these are
   template-agnostic.
4. Copy the `style.css` additions (`.partners-strip`, modal CSS,
   `.ui-autocomplete` styling) — also template-agnostic.
5. Re-check the real business form: field `name`/`id` attributes and
   the `do=` values must match whatever `send.php` (or equivalent) on
   that copy actually expects — don't assume it's identical, verify
   against that copy's own `send.php`.
6. After porting, audit the other templates on that copy for the same
   "still using old classes not in the new stylesheet" problem
   described in section 2 — see section 8 for what that turned into.

## 6. Known trade-offs / things flagged but not changed

- The hero "cost calculator" shows a **made-up instant price**
  (`15000 + weight×180` KZT). This was an explicit user decision, not
  a bug — but it means the widget doesn't reflect real tariffs. The
  real quote request (with actual staff review) is the "Нақты құнын
  сұрату" link next to it and the modal it opens.
- `.routes-block` and `.stats-strip` (departure-board / numeric trust
  stats) components exist in `style.css` but were **not** used on the
  homepage — there was no real live route/departure data or verified
  statistics to back them, and fabricating "on time / boarding"
  statuses or numbers felt too close to presenting fake data as real
  (as opposed to the calculator, which is clearly labeled as an
  estimate).

## 7. Header / nav / footer pass (after the homepage)

Once the homepage worked, the same `header.php`/`footer.php` are
shared by **every** page (`get_header()`/`get_footer()`), so these
changes apply site-wide automatically — nothing template-specific to
re-port here except icons used elsewhere (section 9).

- **Phone numbers, two rows** (`header.php` + `style.css`): the header
  phone field (CFS `telefon1` on post 606) can contain two comma-
  separated numbers in one string. Changed `.phone-link` from a single
  `<a>` to a `<div class="phone-link"><svg icon><span class="phone-numbers">`
  wrapping one real `<a href="tel:...">` per number (split on `,`),
  instead of one broken combined `tel:` link.
- **Nav dropdown on touch devices** (`js/new-design.js`): CSS
  `:hover`-only dropdowns are unreliable on touchscreens — first tap
  opens it, but the tap meant for a submenu link can register as
  "outside" and close it first. Fix: on `hover: none` devices only, the
  first tap on a parent `li.dropbtn > a` is intercepted
  (`preventDefault` + toggle an `.open` class); a second tap, or any
  tap on an actual submenu link, goes through normally. Mouse/hover
  users and the mobile hamburger menu (which already force-shows
  submenus) are untouched. CSS: `.nav > ul > li.open > .dropdown-content`
  shows the menu the same way `:hover` does.
- **Language switcher** (`header.php` + `style.css` `.lang-switch`):
  went through a few iterations, final state is a small pill flush
  against the header's right edge, straddling the border
  (`position:absolute; right:0; top:100%; margin-top:-14px;`
  `border-radius` only on the left side), showing all languages
  stacked vertically with the current one highlighted
  (`li.current-menu-item a`). **It is now wrapped in
  `<?php if ( is_front_page() ) : ?>`, i.e. it only renders on the
  homepage** — this was an explicit request, not a bug. Other pages
  currently have no language switcher in the header at all (see the
  `.yazyk` removal in section 8 — they used to have a second, broken
  one in the breadcrumb bar, which was removed rather than fixed).
- **Hero calculator type tabs** (`template-home.php` + `style.css` +
  `js/new-design.js`): added a segmented control — Контейнер / Вагон /
  Себілмелі жүк — above the from/to fields (`.calc-type-switch` /
  `.calc-type`). `setCalcType()` just toggles which button is
  `.active`; it does **not** change any fields below yet (the calc is
  still the same single weight-based estimate for all three types). If
  the ru/en copy's calculator differs, decide whether per-type fields
  are actually wanted before porting this as-is.
- **News grid grayscale-until-hover** (`style.css` `.news-img`): a
  `::after` overlay (`background:var(--c-dark); mix-blend-mode:color;`)
  tints each card's image toward the brand navy at rest, fading to
  full color on `.news-card:hover` via opacity transition. Plain CSS
  `filter:grayscale()` was tried first and rejected — it desaturates to
  neutral gray, not a brand-colored duotone; `mix-blend-mode:color` on
  an overlay was used instead to get an exact color match.

## 8. Critical, recurring bug pattern: the legacy `main.min.css` fights the new design

This is the single most important thing to check on the ru/en copies.
`functions.php` still conditionally enqueues the **old**, pre-redesign
stylesheet:

```php
if ( ! is_front_page() ) {
    wp_enqueue_style( 'mtk-normalize', get_template_directory_uri(). '/css/main.min.css');
}
```

i.e. **every page except the homepage** also loads the entire old
theme's CSS. Where the old theme happens to reuse a class name the new
redesign also uses, the old file's rules can win (later in cascade
order, or via `!important`), and the bug **only shows up on non-front
pages** — which is exactly why several of these went unnoticed for a
while (the homepage looked fine; everything else was silently broken
in a way that only showed once you actually looked, e.g. hovering a
menu on a subpage).

Concrete bugs found this way, all with the same shape:

- **`.dropdown-content` (nav submenus)** — old CSS had
  `.dropdown-content{display:block!important;opacity:0;transform:scaleY(0);...}`
  revealed only by `.menu li:hover .dropdown-content{opacity:1}` — a
  selector that can never match the new nav markup (`<ul>` has no
  `.menu` class). Net effect: the dropdown was *always* rendered
  (`display:block`, forced by `!important`) but invisible
  (`opacity:0`) on every page except the homepage. First fix pass
  added `opacity:1`/`!important` overrides in `style.css`; once that
  exposed that literally **every** dropdown was permanently "open"
  (just invisible before), the real fix was deleting the dead rules
  from `main.min.css` entirely (8 rules: `.dropdown-content`,
  `.dropdown-content li`, `.dropdown-content li a`,
  `.dropdown-content li:last-child`, `.menu li:hover .dropdown-content`
  ×2, `.dropdown-content a:hover`) — after which the `!important`
  overrides in `style.css` were no longer needed and were removed too.
- **`.header-*` legacy classes** — `main.min.css` had ~30 rules for the
  *old* header's BEM-ish classes (`.header-menu__wrapper`,
  `.header-top__wrapper`, `.header-left`, `.header-right`,
  `.headerV-top`, `.header-phone`, `.header-phone1`, `.header-search`,
  `.header-language`, `.header-block__item`, `.header .header-top`,
  etc.). None of these exist in the new `header.php` — confirmed via
  `grep -rn "header-menu__wrapper\|header-top__wrapper\|..." *.php`
  returning nothing — so they were all dead weight, removed. The one
  class that looked similar but is **not** dead: `.header-logo1`, a
  breadcrumb-bar logo placeholder used in ~53 templates (see section
  9) — don't touch that one when doing this cleanup elsewhere.
- **`color: #676767`** — 35 occurrences across `main.min.css`,
  replaced with `color: var(--c-dark)` so old-theme text picks up the
  new palette instead of a flat unrelated gray. (Left `background:
  #676767` and `border-bottom: ... #676767` alone — only the `color:`
  property was in scope.)

**How to redo this safely (regex-based bulk edits on a 130k+ char
minified/semi-formatted file), learned the hard way:**

1. Mask out `/\*.*?\*/` comment spans first. A naive "does this match
   touch a comment" check is *not enough* — a rule can **fully
   contain** a harmless inline comment (e.g.
   `.pagination-block{width:100%;/* padding: 0 15px */}`) and is safe
   to edit; only **partial overlap** (a match starting/ending inside a
   comment, or spanning across one) is dangerous. The first attempt
   here used "any overlap = skip", which silently skipped several
   rules that were actually fine, and the fix was checking
   `not (comment_start >= match_start and comment_end <= match_end)`.
2. A truly dangerous case that *did* cause real corruption once: a
   commented-out legacy rule sitting directly after a real one with no
   blank line, e.g. `...}\n/*\n.old-rule { color: red; }\n*/`. A
   naive `[^{}]+\{[^{}]*\}` regex can match starting **before** the
   `/*` (selector text = everything back to the previous `}`,
   including the `/*` itself) through to the commented rule's own `}`
   — deleting the `/*` but leaving the trailing `*/` dangling,
   corrupting every rule after it. Always re-verify after
   find/replace: comment marker counts balanced (`content.count('/*')
   == content.count('*/')`), brace counts balanced, and a full
   `difflib` diff of old vs. new showing **only** intended text
   removed (used every time in this pass — caught the corruption
   before it was ever written to the real file).
3. Many old rules share one comma-separated selector list with classes
   that are still very much alive (e.g.
   `.abount-map__container,.container-fluid,...,.header-menu__wrapper{max-width:540px}`).
   Never delete a whole rule just because *one* of several
   comma-separated selectors is dead — split the selector list, drop
   only the dead parts, keep the rule (with the live selectors) if
   anything survives.
4. Confirm a class is actually dead by grepping every `*.php` in the
   theme, not just the templates you're currently looking at —
   `.header-logo1` looked identical in shape to the other dead
   `.header-*` classes but is used in ~53 files.

## 9. Icon system

Added a small self-hosted SVG sprite instead of a webfont/icon-font
CDN (no build step in this theme, and CDN fonts wouldn't match the
existing hand-drawn stroke-style icons already in `header.php`/
`footer.php`/`template-home.php`):

- **`wp-content/themes/kdts/icons/sprite.svg`** — a hidden `<svg
  style="display:none">` containing named `<symbol>`s: `icon-phone`,
  `icon-mail`, `icon-map-pin`, `icon-user`, `icon-swap`, `icon-check`,
  `icon-chevron-right`, `icon-clock`, `icon-file`, `icon-edit`,
  `icon-list`, `icon-facebook`, `icon-telegram`, `icon-whatsapp`,
  `icon-connect-hr` (envelope + person, for an HR-contact use case),
  `icon-globe` (added in section 16, for a "website/portal" contact
  line). Stroke-based ones follow the existing style: `viewBox="0 0 24
  24" fill="none" stroke="currentColor" stroke-width="2"
  stroke-linecap="round" stroke-linejoin="round"`; brand marks
  (facebook/telegram/whatsapp) are filled, `fill="currentColor"`.
- **`wp-content/themes/kdts/icons/preview.html`** — a standalone page
  (not part of the live site) that `fetch()`es `sprite.svg` and lists
  every `<symbol>` with its name; click a tile to copy the
  `<svg class="icon"><use href="#icon-x"></use></svg>` usage snippet.
  Stays in sync automatically as icons are added — open it directly in
  a browser any time to see what's available.
- **`header.php`** — the sprite file is inlined once right after
  `<body>` via `<?php include get_template_directory() . '/icons/sprite.svg'; ?>`.
  Inlining (rather than `<img>`/external `<use xlink:href="file.svg#id">`)
  avoids cross-browser quirks with referencing symbols in an external
  SVG file. Existing sizing/color CSS (`.phone-link svg { width:14px;
  height:14px }` etc.) needed **no changes** — it targets the `svg`
  element itself regardless of whether it contains raw paths or a
  `<use>`.
- Currently wired up in `header.php` (phone, cabinet/user icons),
  `footer.php` (phone ×2, mail, map-pin, facebook, telegram),
  `template-filialy.php` (72 icons across 18 branch cards — see
  section 15), and `template-kontakty.php` (branch-directory link +
  hotline list — see section 16). Plenty of inline SVGs elsewhere
  (`template-home.php` calc swap/check, services arrow, cabinet
  feature icons) were **not** migrated yet — same pattern applies
  whenever it's worth consolidating them.
- WhatsApp icon exists in the pack but is **not wired to a real link
  anywhere** — the only WhatsApp number found in the codebase
  (`template-kontakty.php`, `8 702 075 30 30`) turned out to be a
  third-party anti-corruption/complaints hotline number
  (`nysana@cscc.kz` / `nysana.cscc.kz`), not KDTS's own customer
  contact — using it on a general "chat with us" button would have
  misdirected customers. Don't reuse that number for a real WhatsApp
  button without confirming a real one first.

## 10. Breadcrumb bar + sidebar nav pass (legacy templates)

This directly followed up on the "likely still visually broken"
warning in section 2 — confirmed true, fixed.

- **`.pagination-block`** (the bar right under the header showing
  breadcrumbs) — used by ~53 templates via an identical markup block:
  ```php
  <div class="pagination-block">
      <div class="sdfsdfjsdf">
          <div class="header-logo1"></div>
          <?php get_template_part('breadcrumbs') ?>
      </div>
      <div class="yazyk"><ul>
          <li class="yazyk-active"><a href="...">Қаз</a></li>
          <li><a href="/ru/...">Рус</a></li>
          <li><a href="/en/...">Eng</a></li>
      </ul></div>
  </div>
  ```
  Two dead things removed from **all 53** template files (scripted,
  depth-aware removal, `php -l` verified on every file after): the
  invisible `.header-logo1` div (already `height:0 !important`, pure
  leftover), and the entire `.yazyk` block — 50 of the 53 had
  **hardcoded, dead links** to `/ru/...`/`/en/...` pages that no
  longer exist (the site is KZ-only now, per the `18b2f35 kz only,
  remove en,ru` commit); the rest used `wp_nav_menu('yazyk-menu')`
  (the same real menu as the header) but were still a redundant second
  language switcher on the same page. New CSS (`style.css`
  `.pagination-block`, `.pagination ul/li`, `.breadcrumbs__link`,
  `.pagination-last`): soft-background bar (`--c-bg-soft`), muted grey
  breadcrumb links with the current page bold in `--c-dark`, small
  CSS-drawn chevron separators (rotated-border trick) replacing an old
  external `paginationLine.svg` image dependency.
- **`.rukovodstvo-navbar`** (the left sidebar nav seen on most of those
  same ~53 pages, e.g. "КОМПАНИЯ ТУРАЛЫ" + Басшылық / Компанияның
  тарихы / …) — restyled **in place in `main.min.css`** (per explicit
  request — this component's CSS lives there, not in `style.css`),
  same selectors/markup, only new declarations:
  - `.rukovodstvo-navbar`: white card, `--c-line` border,
    `border-radius`, padding, `--shadow-sm` — added
    `box-sizing:border-box` so the existing fixed `width:295px` still
    matches the layout math in `.rukovodstvo-content { width: calc(100%
    - 400px) }` once padding was added.
  - `.rukovodstvo-navbar__title`: smaller, separated from the list by
    a bottom border, hover color transition.
  - `.rukovodstvo-navbar__block li a`: turned bare stacked text (30px
    `padding-bottom` on the `<li>`, no hover/active state at all) into
    padded rounded rows with a `--c-bg-soft` hover background and a
    solid `--c-dark` "pill" for `li.current-menu-item`/
    `li.current_page_item` — same active-state visual language as the
    top nav and footer.
  - Left the width-only, page-specific overrides scattered through
    `main.min.css` (media queries, `.filialy .rukovodstvo-navbar`,
    `.container-rukovodstvo__two .rukovodstvo-navbar`, etc.) alone —
    those are layout/responsive behavior, not look-and-feel, and were
    out of scope ("do not destroy structure").
- Still dead but **not yet removed** (lower priority, same shape as
  section 8): three compound old-CSS selectors in `main.min.css` —
  `.header-phone1 .yazyk`, `.header-phone1 .yazyk ul`, `.header
  .header-top__wrapper` — confirmed unused in any template, just
  hadn't been gotten to.

## 11. Bug pattern: leftover `<?` short tags cause full page crashes

Three templates (`template-tenders.php`, `template-arkhivy.php`,
`template-zakupki.php` — all copies of the same tender/procurement
listing) still had old `<?` short-open tags in a few spots, missed by
the earlier "move from `<?` to `<?php`" pass (commit `e03224b`). Short
tags are disabled in this PHP setup, so those blocks render as
**literal text** instead of executing — including a `foreach(...) {`
that never really opens as PHP, leaving a later, properly-tagged
`<?php } ?>` as an orphaned closing brace → **PHP fatal parse error →
whole page 500s, header/nav/everything included.**

Found via the PHP error log (`/Applications/MAMP/logs/php_error.log`)
and by actually requesting the URL, not just reading the source. If a
page seems to have "no header at all" (not just unstyled) on the ru/en
copies, check for a 500 first:
```
curl -s -o /dev/null -w "%{http_code}\n" http://your-copy/some-page/
```
and grep the theme for leftover short tags:
```
grep -n '<?[^p]' wp-content/themes/kdts/*.php
```
(Excludes `<?php`; matches bare `<?` followed by anything else.)

## 12. Updated checklist for the ru/en copies

In addition to the original section-5 checklist:

1. Check whether the target copy's `functions.php` has the same
   `if ( ! is_front_page() ) { wp_enqueue_style( 'mtk-normalize', ... ) }`
   pattern. If so, **assume every non-front page is fighting the old
   CSS** until proven otherwise — don't just eyeball the homepage.
2. Grep the whole theme for leftover `<?` short tags (section 11)
   before assuming a page is "unstyled" rather than actually crashing.
3. Port the `header.php`/`footer.php`/`js/new-design.js` changes from
   section 7 — phone-numbers markup, touch-dropdown JS, lang-switch
   `is_front_page()` gating, calc type tabs — adjusting real data
   (phone numbers, menu locations, CFS field IDs) for that copy.
4. Port the icon sprite (section 9) plus the `header.php` include line
   verbatim — it's template-agnostic.
5. If that copy also has the `.pagination-block` /
   `.rukovodstvo-navbar` legacy pattern (section 10), the CSS is
   directly portable (same class names), but **re-verify the file
   list** of which templates use it — don't assume it's the same 53
   files without grepping that copy directly.
6. Whatever legacy `main.min.css` (or equivalent) that copy loads,
   audit it the same way as section 8 for classes reused by the new
   design (`.dropdown-content`, `.header`, `color: #676767`-style flat
   colors, etc.) rather than assuming it's a clean, unrelated file.

## 13. 404 page

`404.php` used the same shared, unstyled legacy classes as many other
pages (`.dell-container`, `.uslugi-peregruza__h1`, `.uslugi-peregruza__text`
— also used by real "uslugi-peregruza" content pages). Rather than
restyle those shared classes, gave the 404 page its own markup/class
(`.error-404`, `.error-404__body`) so nothing else is affected:

- Reused the existing `.partnery-title` heading treatment (the small
  yellow "\\" accent mark) for consistency with every other content
  page's `<h1>`, instead of inventing a new heading style.
- Constrained body copy to `max-width:640px` for readability (was
  spanning the full page width before).
- Replaced the default `<ul>` bullets with a small dot-marker style.
- Added a real "Басты бетке оралу" (return home) button
  (`.btn.btn-primary`) — there wasn't one before.
- Verified the real `404` HTTP status still fires (`curl -o /dev/null
  -w "%{http_code}"`) — a template redesign like this doesn't touch
  WordPress's own 404 detection, but worth confirming since a wrong
  template hierarchy match could silently turn it into a 200.

## 14. Generic "simplepage" content pages (`template-page.php` /
    `.aktsioneram-text`)

`template-page.php` (`Template name: simplepage`) is a shared template
used by an unknown number of plain content pages — some just prose
(e.g. the mission/vision paragraph on `template-onas.php` reuses the
same `.aktsioneram-text` wrapper class), others structured lists like
the "Тұрақты даму" (sustainable development) page, whose content is a
flat run of real document links separated by `<br>`:
```html
<a href="https://drive.google.com/.../view">1. Тұрақты даму саласындағы саясат</a><br>
<a href="/wp-content/uploads/.../file.pdf" target="_blank">2. Стейкхолдер ережелері мен картасы</a><br>
...
```
(this is raw post_content typed into the editor — not a repeater
field, don't go looking for one).

Because `.aktsioneram-text` is shared, **do not restyle it broadly** —
a link-list treatment would look wrong on pages that just have plain
paragraphs. Instead scope new rules to the specific page via
`body_class()`'s automatic `page-id-{N}` class (`page-id-1383` for
"Тұрақты даму" locally — **will be a different ID on another WP
install/DB, look it up again, don't hardcode 1383 elsewhere**):
- `.page-id-1383 .aktsioneram-text a` — turned each link into a
  card-style row (white bg, border, radius, padding) with a small
  left-side arrow icon (CSS `mask-image` of the chevron shape, colored
  `var(--c-dark)` — not the sprite `<use>`, since `content:` can't
  reference it) that nudges right on hover.
- `.page-id-1383 .aktsioneram-text br { display:none }` — hides the
  manual line breaks now that each link is its own block row (kept
  scoped to this page; `<br>` is far too generic a selector to touch
  globally).
- **Gotcha:** `template-page.php` has an inline `<style>` block placed
  in the document body with `.aktsioneram-text a:hover{color:#54b2ff}`
  (old bright blue). Because it's equally-specific to a same-specificity
  external rule and comes later in the DOM, it wins on equal
  specificity — the new `:hover` rule must **explicitly set `color`**
  (not just background/border) with a same-or-higher-specificity
  selector, or the old blue leaks through only on hover, which is easy
  to miss in a static screenshot and only shows up when you actually
  hover the element.

## 15. Branches / representative offices (`template-filialy.php`)

18 repeated `.filialy-item` blocks (office name, address, phone(s),
email, station code), each icon a raw `<img>` pointing at old asset
files (`img/filialyAddress.svg`, `img/filialyTel.svg`,
`img/filialyEmail.svg`, `img/filialycode.png`) with the icon's blue
circle baked into the image itself (not CSS-controlled). Replaced all
72 `<img>` tags (scripted regex substitution, `php -l` verified after)
with sprite icons: `icon-map-pin`, `icon-phone`, `icon-mail`,
`icon-file` (used for the station-code row — no dedicated "code" icon
existed or was worth adding for one field). Recolored the badge from
the old baked-in blue to `var(--c-dark)` on a `var(--c-bg-soft)` circle
for consistency with the rest of the icon system (see section 9)
rather than preserving old brand-less blue.

CSS (`main.min.css`, in place, same selectors):
- `.filialy-items`: was `display:flex` with per-side borders
  (`border-top`/`border-right` on the item, a `.filialy-item__rigth`
  modifier stripping the right border, a `.filialy-item__bottom`
  modifier for the bottom one) — a hand-rolled way of faking a table
  grid with flex-wrap. Replaced with `display:grid;
  grid-template-columns:repeat(2,1fr)` and gave each `.filialy-item` a
  full white card (border all sides, radius, shadow) instead — the
  `__rigth`/`__bottom` modifier classes are still in the markup (18
  items alternate them) so they were neutralized to match the new full
  border rather than removed, to avoid a bigger markup edit.
- **Found a pre-existing, unrelated container bug while doing this**:
  the shared `.dell-container` class (used by several other page
  sections too — `abount-map__container`, `marshruty-container`,
  `novosti-container`) has `width:100%; padding:0 15px` with **no
  max-width at all** outside its own responsive breakpoints — meaning
  at typical desktop widths it's genuinely full-viewport, just with a
  15px gutter. This made the branch cards sit almost flush against the
  browser edges while everything else on the page (header, sidebar)
  used the real `.container`'s 1280px/24px rhythm. Fixed by adding
  `max-width:1280px; margin:0 auto` to `.filialy-items` itself (my own
  grid container) rather than touching the shared `.dell-container` —
  if another page rendered via `.dell-container` looks flush-to-edge
  the same way, this is why; same fix (scope a max-width to that
  page's own inner wrapper) applies.
- Two mobile breakpoints (`max-width:768px`, `max-width:576px`) still
  had the old `border:2px solid #5F6366` per item and a `justify-content:
  center` on `.filialy-items` with **no** `grid-template-columns`
  override — meaning after switching the base rule to CSS Grid, mobile
  would have kept a 2-column *track* structure with narrow centered
  items inside each column instead of collapsing to one column (a flex
  container would have naturally wrapped; a grid container does not,
  since the column count is explicit). Both breakpoints needed
  `grid-template-columns:1fr` added explicitly, plus the old grey
  borders swapped for `var(--c-line)`/removed.

## 16. Contacts page (`template-kontakty.php`, `.kontakty`) and
    procurement tables (`.zakupki-*`)

- **`.kontakty`** (label/value contact info list): had an odd
  alternating grey/orange `border-bottom` per row (`#d39c00`, the same
  gold used in the `.partnery-title` accent mark elsewhere, next to
  plain `--c-line`-ish grey — inconsistent, looked accidental).
  Wrapped the whole thing in one white card and normalized every row
  to a single `--c-line` divider.
  - The "Филиалдар және өкілдіктер" (branches) link was reusing
    `.godovoy-plan__nav-text` — the procurement-sidebar **section
    heading** class from section 10/an earlier pass — which is why it
    rendered as a small bold uppercase grey label instead of looking
    like a clickable link. Gave it its own `.kontakty-link` class:
    inline-flex, `icon-chevron-right`, hover-gap animation, matching
    the pattern used in sections 10/14.
  - The real hotline/complaints list at the bottom (`8-800-080-47-47`,
    WhatsApp `8-771-191-88-16`, `www.sk-hotline.kz`,
    `mail@sk-hotline.kz`, "Мобильдік қосымша: KTZ HSE") is a **second,
    different** third-party anonymous-complaints channel from the one
    found in section 9 (`sk-hotline.kz` here vs. `nysana@cscc.kz`/
    `cscc.kz` in the other spot) — both are real, both are *not*
    KDTS's own support channel. Swapped the old `<img>` icons
    (`phone-call123.png`, `whatsapp.png`, `internet.png`,
    `email123.png`) for sprite icons (`icon-phone`, `icon-whatsapp`,
    the new `icon-globe`, `icon-mail`), recolored navy. Left the actual
    numbers/domains/copy completely untouched — only the icon
    presentation changed.
  - There's a second, *entirely separate* hotline block at the top of
    this same template (`<section class="kontakty-navbar" style="display:
    none;">`, mentioning `nysana@cscc.kz` again) that's already
    `display:none` inline — genuinely dead/invisible, left alone.
- **`.zakupki-head` / `.zakupki-body`** (procurement tables — dark
  header row + white body rows): added rounded corners top (`.zakupki-
  head`) and bottom (`.zakupki-body:last-of-type`), side borders so
  the whole thing reads as one contained card instead of a bare row
  list, and a `:hover` background on each `.zakupki-body` row (the row
  is a single big `<a>` already, so `:hover` on the row wrapper is
  enough — no JS needed).
- **`.vse-zakupki`** ("Барлық сатып алуларды көрсету" / show-all link):
  was plain 18px text with no visual indication it's a link. Same
  chevron-icon-via-CSS-mask + hover-gap pattern as sections 10/14.

## 17. Full site audit + remaining-templates pass (all 55 static pages)

Sections 1–16 had only covered the homepage, header/footer/nav,
breadcrumb+sidebar chrome, 404, one `simplepage` instance, filialy,
and kontakty. This pass audited **every** static page on the site
(enumerated from `wp_posts` — 55 published `page` rows, full
parent/child URL tree built from `post_parent`, not guessed) and
redesigned whichever ones were still on old markup.

### 17.1 Audit method

Per-page template comes from `_wp_page_template` in `wp_postmeta`, not
the visible URL — query it directly rather than guessing from the
slug:
```sql
SELECT p.ID, p.post_title, p.post_name, m.meta_value
FROM wp_posts p
LEFT JOIN wp_postmeta m ON m.post_id = p.ID AND m.meta_key = '_wp_page_template'
WHERE p.post_status='publish' AND p.post_type='page';
```
"Already redesigned" was **not** reliably detectable by grepping for
class names in `style.css` (old classes are just as findable in
`main.min.css`, which is loaded on every page — see section 8). The
real signal was cross-referencing `git log --oneline -- <file>`
against which commits were known redesign passes; a template only
touched by the section-10 breadcrumb/sidebar script (11-line diffs
across ~53 files) still had **unstyled body content**, even though it
looked "touched" in git blame.

Confirmed already done before this pass (skip list): `template-home.php`,
`template-filialy.php`, `template-kontakty.php` (section 16),
`template-page.php` **only for page-id-1383** (section 14), and the
entire tender/procurement family (`template-zakupki.php`,
`template-tenders.php`, `template-arkhivy.php`, and all 8
`archive-{odnogo,otkrytogo,tsenovykh,dvukhetapnogo}[ar].php` listing
templates) — these all share the already-redesigned `.zakupki-head`
`.zakupki-body` `.zakupki-navbar` component (section 16), so nothing
further was needed there beyond the bugs noted in 17.3.

Two pages (`klientterge`, `tasymaldaulardy-marshruttary`) turned out to
be pure `<meta http-equiv="refresh">` redirect stubs with no real body
— nothing to redesign, not a gap.

Everything else (~26 pages, ~30 unique template files) got a redesign
pass: `template-onas.php`, `template-rukovodstvo.php`,
`template-direktorov.php`, `template-istoriya-kompanii.php`,
`template-vakansii.php`, `template-partnery.php`, `template-uslugi.php`,
`template-uslugi-peregruza.php` (+2/3/4), `template-aktsioneram.php`,
`template-vnutrennie.php`, `template-otchetnost.php`,
`template-informatsiya.php`, `template-affilirovannykh.php`,
`template-stavki.php`, `template-park.php`, `template-marshruty1-8.php`,
`marshruty-text.php`, `template-uchreditelnye.php`,
`template-tipovye-dogovora.php`, `template-godovoy-plan.php`,
`template-grafik-provedeniya.php`, `template-dopolnitelnaya-informatsiya.php`,
`template-plan-dolgosrochnykh-zakupok.php`, `zakup-menu.php`,
`template-virtualnaya-priemnaya.php`, `archive-novosti.php`,
`archive-obyavleniya.php`, `template-o-sayte.php`, `template-page.php`
(the shared, un-scoped parts), `template-pageb.php`.

### 17.2 Approach: in-place polish, not per-page rebuilds

Given the volume (~30 files), most of these were **not** rebuilt from
scratch like `template-home.php` was. Reading the actual old CSS
showed it was usually already on-brand (`#0B2335` **is** `var(--c-dark)`
— the palette never changed, just the finish), so the pass was a
consistent "polish" applied per component family rather than novel
layouts:

- Card-ify flat/bare lists and grids: white/`--c-bg-card` background,
  `1px solid var(--c-line)` border, `border-radius` (14–20px),
  `var(--shadow-sm)` at rest / `var(--shadow-md)` + `translateY(-2px)`
  on hover. Applied to: `.vnutrennie-item` (shared by 4 templates —
  `vnutrennie`, `grafik-provedeniya`, `dopolnitelnaya-informatsiya`,
  `plan-dolgosrochnykh-zakupok`), `.godovaya-item` (shared by
  `otchetnost`, `affilirovannykh`, `godovoy-plan`, `pageb`),
  `.uchreditelnye-dokumenty__item`, `.tarify-item`,
  `.tipovye-dogovora__item`, `.rezidentov-item`, `.partnery-item__photo`,
  `.novosti-item` (grid on `archive-novosti.php`, row layout scoped
  under a new `.obyavleniya-page` wrapper on `archive-obyavleniya.php`
  since the two pages want different shapes from the same shared
  classes), `.virtualnaya-wrapper`/`.virtualnaya-input` (Contact Form 7
  page), `.cert-block` (new, `template-onas.php` certificate row).
- Swapped raster prev/next arrow PNGs (`ArrowNext.png`/`ArrowPrev.png`,
  `nextPartnery.png`/`prevPartnery.png`) for the existing icon sprite's
  `icon-chevron-right` (rotated 180° for "prev") across
  `template-rukovodstvo.php`, `template-direktorov.php` (shared CSS),
  `template-istoriya-kompanii.php`, `template-otchetnost.php`,
  `template-affilirovannykh.php`, `template-godovoy-plan.php`,
  `archive-obyavleniya.php` — same reasoning as section 9, one less
  external asset dependency per swap.
- All new/appended CSS went into `css/main.min.css` (appended at file
  end under a banner comment), **not** `style.css` — confirmed via
  `functions.php`'s `wp_enqueue_style()` call order that `kdts-style`
  (`style.css`) is enqueued **before** `mtk-normalize`
  (`main.min.css`), i.e. `main.min.css` wins the cascade on equal
  specificity. This is the opposite of what section 8 might suggest at
  a glance — rules added to `style.css` for these older templates were
  silently losing to `main.min.css` until this was checked. One
  exception: `.simplepage-container` (new, page-level container,
  see 17.4) went in `style.css` since nothing in `main.min.css` uses
  that class name to conflict with it; its full-width sibling rule
  `.rukovodstvo-content--full` still had to go in `main.min.css`
  because it overrides `.rukovodstvo-content`'s width, which **is**
  defined there.

### 17.3 Real bugs found and fixed (not just styling)

- **8 route pages (`tasymaldaulardy-marshruttary/*`) showed no real
  content at all.** The shared include `marshruty-text.php` (used by
  all of `template-marshruty1-8.php`) hardcoded a Russian
  "Раздел на реконструкции" ("section under reconstruction") message
  with the real `the_post()`/`the_content()` calls commented out.
  Checked `wp_posts.post_content` for all 8 route post IDs first —
  each had 1.3–1.5KB of real, real Kazakh route copy already using the
  existing `.marshruty-text__color` class (styled, unused). Uncommented
  the real calls, deleted the placeholder. Also added
  `.marshruty-text__wrapper ul/li` styling (dot-free bordered rows)
  since the real content's `<ul><li>` items already have a manual
  "- " text prefix — default bullets would have doubled up.
- **`/obyavleniya/` rendered a blank generic page.** Post 1500 has
  `_wp_page_template` unset (falls back to the theme's default
  `page.php`, which is unmodified `_s`/underscores boilerplate —
  no breadcrumb, no sidebar, no styling at all, and `post_content` is
  empty). The theme already has a fully-built, working listing
  template for this, `archive-obyavleniya.php` (`Template name:
  obyavleniya`, queries the real `obyavleniya` CPT, buckets 8 real
  posts into year-tab swiper slides by **hardcoded post-ID ranges** —
  fragile but functional and pre-existing, not something to rebuild) —
  it was simply never assigned. Fixed by inserting the
  `_wp_page_template` postmeta row for post 1500 pointing at it,
  confirmed via `curl` that real announcement content now renders
  where before there was none. (The CPT is registered with
  `has_archive => true` and default rewrite, which is why
  `archive-obyavleniya.php` exists as a file at all — but a static
  page at the same slug pre-empts the CPT archive URL in WP's routing,
  so the file was effectively orphaned until explicitly assigned.)
- **Wrong-domain hotlinked icons**, 8 occurrences across
  `template-grafik-provedeniya.php`, `template-antikorruptsionnaya.php`
  (unused by any live page, fixed anyway), `template-stavki.php` (×2),
  `template-dopolnitelnaya-informatsiya.php`, `template-vnutrennie.php`,
  `template-plan-dolgosrochnykh-zakupok.php`,
  `template-tipovye-dogovora.php`, plus 2 more in
  `template-uchreditelnye.php` and `template-pageb.php` — all pointed
  at `https://work.almazvoda.kz/...` or `https://www.kdts.kz/ru/...`
  (a different company's domain, and the removed `/ru/` install
  respectively) instead of `get_template_directory_uri()`. Fixed to
  local paths.
  - **Gotcha hit while fixing this via `sed` across files:** several of
    these `<img>` tags sit inside a single-quoted PHP `echo '...'`
    block (`echo '<img src="'.$var.'">'` string-concatenation style).
    A regex substitution that blindly inserts `<?php echo
    get_template_directory_uri(); ?>` works for tags in normal
    top-level HTML context, but **inside a single-quoted string that
    text is never parsed as PHP** — it prints literally, producing a
    permanently broken `<img>` src. Caught by checking 2–3 lines of
    context above every match for the `'.$var.'` concatenation pattern
    before deciding the fix form; the string-context occurrences
    needed `'.get_template_directory_uri().'` instead. One
    plain-HTML-context occurrence (`template-stavki.php`'s
    `tarifyBg.png`) got wrongly rewritten to the string-concat form by
    the same blind sed pass and had to be reverted to the `<?php echo
    ?>` form. Lesson: never blanket-regex a fix across files without
    checking, per match, whether it's landing inside a PHP string
    literal or real template HTML — the two need opposite syntax.
- **Broken link**: `template-informatsiya.php`'s sidebar linked
  `home_url('/aktsioneram')` (typo, 404) instead of
  `/aktsionerlerge/`. Confirmed the 404 with `curl` before and the fix
  after.
- **Nav label typo**: `zakup-menu.php`'s shared tender sidebar (used by
  11 pages) had "Сатып алуар" (missing "л") instead of "Сатып алулар".
- **Mislabeled cross-links in the route-switcher panel**
  (`template-marshruty2.php`/`3.php`): entries whose `href` didn't
  match their visible label — e.g. a link to
  `europa-resej-riga-arkyly` (the real "Europe–Russia via Riga" page)
  labeled "Еуропа-Орталық Азия (Рига арқылы)" ("Europe–Central Asia via
  Riga", a different real page). `marshruty3.php` had this **twice**
  plus a broken/mixed-language label "Сучжоу (Китай - Варшава (Польша)"
  (Russian "Китай" instead of Kazakh "Қытай", unbalanced parens) — same
  Russian-word typo also found and fixed in `marshruty4.php`/`6.php`.
  Fixed by matching each link's `href` against the real page
  slugs/titles from `wp_posts` and correcting whichever side (label or
  href) was wrong for that entry — verified against the DB, not
  guessed.
- **Wrong hardcoded sidebar on the shared "simplepage" family**:
  `template-page.php` (section 14) and `template-pageb.php` both
  unconditionally rendered a "Компания туралы" / "О КОМПАНИИ" sidebar
  box linking to the dead `/o-kompanii` slug (real slug is
  `/kompaniya-turaly/`), regardless of which unrelated standalone page
  used the template (confirmed live on `/ustojchivoe-razvitie/` via
  `curl` before touching anything). Since both templates are meant for
  **standalone, sectionless** pages (that's the whole point of a
  generic "simplepage"), the fix was to remove the two-column
  sidebar layout entirely rather than pick a "more correct" section
  for it — new `.simplepage-container` (plain `.container`-width
  wrapper, `style.css`) + `.rukovodstvo-content--full` (width:100%
  override, `main.min.css` — see 17.2 for why it had to live there)
  replace `.container-rukovodstvo` on both templates. Also removed
  both templates' near-identical inline `<style>` blocks (dead `.card`
  rules copy-pasted from `template-vakansii.php`'s own inline block,
  plus a `.aktsioneram-text a:hover{color:#54b2ff}` override already
  correctly beaten by the scoped `.page-id-1383` rule from section 14
  — see that section's "Gotcha" note, still valid, just no longer
  needs the workaround since the inline rule is gone). `template-pageb.php`
  additionally had a single-slide swiper "year" carousel showing "2023"
  next to its one real (2022) survey link — a carousel of one is
  functionally pointless and the year didn't match its own content, so
  it was replaced with a plain `.godovaya-item` card holding the exact
  same real link/text, unchanged.
- **`template-vakansii.php`**: its inline `<style>` block redefined
  `.card .btn-primary` (flat, `height:45px`, no radius) with **higher
  specificity than** the real `.btn.btn-primary` component from
  `style.css` that the same link already had both classes of — so the
  new pill-button design was silently losing to the old flat one on
  this page only. Removed the conflicting override so the real
  component wins; modernized the surrounding `.card` (border→
  `var(--c-line)`, added radius/shadow) instead of deleting it, since
  it's this template's only styling.
- Removed several blocks of genuinely dead, fully-superseded markup
  found along the way (not content decisions — verified each was an
  exact functional duplicate of live code immediately following it, or
  commented out with `<!-- -->`/`//` and never referenced): a
  duplicate certificate-download block in `template-onas.php`, an old
  pagination widget in `archive-novosti.php`, and the inline `<style>`
  + duplicate commented header block in `archive-obyavleniya.php`.
  Left one commented-out block in `template-onas.php` **alone**
  (a second `abount-missiya`-style section with its own real CFS
  fields `zagolovok1`/`text2`/`zagolovok2`/`text3`) since it was
  deliberately disabled rather than superseded by identical content —
  not this pass's call to silently resurrect or delete real,
  intentionally-hidden content.

### 17.4 Verification

Every touched template: `php -l` after editing, and every touched
**page URL** re-fetched with `curl -o /dev/null -w "%{http_code}"`
after its template's edits landed (not just once at the end) — same
discipline as sections 11/13. Final pass: all 55 page URLs curled in
one sweep with zero regressions (`glavnaya-stranitsa` alone 301s,
expected — WP redirects the front page's own slug to `/`).

### 17.5 Not touched / flagged, same spirit as section 6

- Contact Form 7 form **762** ("virtualnaya", the `/bailanystar/undeu/`
  appeal form) is invoked via shortcode `id="925"` in
  `template-virtualnaya-priemnaya.php` — doesn't match, but CF7 falls
  back to matching by slug/title and renders correctly anyway
  (confirmed via `curl`); left as-is rather than "fixing" a mismatch
  that isn't actually broken.
- That same CF7 form's own field markup (edited in wp-admin, not in
  theme files) has a few stray unmatched `</p>` tags — an HTML
  validity issue, but it's form-builder content in the DB, not
  template code, and out of scope for a template redesign pass.
- `.marshruty-table__header` / `.put` / `.accordion` /
  `.panel` on the route pages use a one-off blue (`#107bc3`) that
  isn't one of the `--c-*` design tokens. It appears 27 times and reads
  as a deliberate "route/map" accent rather than a mistake — left
  alone rather than bulk-replaced without visual confirmation.
- The inline `padding-top:210px/150px` fudge values next to the
  certificate images in `template-onas.php` (a manual alignment hack
  for the old `width:250%` image) were left alone even after removing
  that hack, since the correct new value can't be verified without a
  browser and a wrong guess would be worse than the old hack.

## 18. `ru` redesign complete — what it found, and the checklist for `en`

Sections 1–17 covered `kz` only. `ru` has since gone through the entire
pass (global chrome → homepage → every template) and is done as of
2026-07-29. `en` has **not been started at all**. This section records
what actually happened doing `ru` (new bug patterns, methodology that
worked) so `en` goes faster and doesn't repeat mistakes.

### 18.1 Structural facts, confirmed by direct inspection

- `en/` and `ru/` are **separate WordPress installs**, not a plugin/i18n
  layer — own `wp-config.php`, own DB (`en` → `p-319092_en`, `ru` →
  `p-319092_rus`, `kz` → `p-319092_kaz`), own copy of the `kdts` theme.
  Table prefix is `ZKN5mzvzJ_` on all three (confirmed), but don't assume
  that generalizes — check each install's own `wp-config.php`.
- `git diff`/patch-apply from the pre-redesign baseline (commit
  `18b2f35~1`) does **not** cleanly apply to `en` or `ru` — their theme
  copies drifted from what `kz` looked like at that point (still had bare
  `<?` short tags site-wide, different indentation). Confirmed
  independently for `ru`; `en`'s theme file listing is much closer to
  `kz`'s than `ru`'s was (no extra template files like `ru`'s
  `template-pagea.php`/`template-zakup.php`/`osobomu` family — `en`'s
  `diff <(ls en-theme) <(ls kz-theme)` shows **zero** extra/missing
  template files), but it still needs the full pass — file-list parity
  doesn't mean content parity.
- `en` **also** has the site-crippling short-tag bug: 67 files with bare
  `<?` under `short_open_tag=Off` (same shape as `ru`'s 72). Confirmed via
  `grep -rlE '<\?[^p=x]' en/wp-content/themes/kdts/*.php | wc -l`. Fix
  exactly like section 11/12 describes — do this **first**, before
  anything else, since half the "is this page broken" questions later
  are unanswerable until short tags are fixed.
- `en`'s `style.css` is still untouched `_s` boilerplate (same as `ru`
  was) — safe to replace wholesale with `kz`'s redesigned `style.css`,
  same as section 5 step 1 describes.
- `en`'s `functions.php` enqueues `mtk-normalize` (`main.min.css`)
  **unconditionally on every page including the homepage** (no
  `if (!is_front_page())` guard) — same gap `ru` had before the fix.
  Wrap it in the same conditional when porting `functions.php`'s
  `kdts_scripts()`, matching `kz`'s original logic.
- MAMP's MySQL only accepts `root`/`root` over the **Unix socket**, not
  TCP — `-h 127.0.0.1 -P 3306` gets "access denied" even with correct
  credentials. Use:
  `/Applications/MAMP/Library/bin/mysql80/bin/mysql -uroot -proot -S /Applications/MAMP/tmp/mysql/mysql.sock <dbname>`
  (no `-h`/`-P`). Needed constantly for DB audits (`_wp_page_template`
  queries) and pulling real CFS content.

### 18.2 New bug patterns found during the `ru` pass (check for these on `en` too)

These are **in addition to** the bug patterns in sections 8/11/17.3 above
— all confirmed present on `ru`, likely present on `en` too since it's
the same theme lineage:

1. **PHP tag typed literally inside a single-quoted `echo '...'` string.**
   Broader than the section 17.3 "wrong-domain icon" case — sometimes the
   `<?php echo get_template_directory_uri(); ?>` tag itself never
   executes at all (not just wrong URL), because it sits inside a
   single-quoted PHP string being built up via concatenation. Renders as
   **literally that text** as the `src=`, i.e. a fully broken image, not
   just a wrong one. Fix: `'.get_template_directory_uri().'` (string-
   concat form), not `<?php echo ?>`.

   **This one was under-caught the first time through `ru`.** The first
   pass only fixed occurrences the section-17.3 wrong-*domain* grep
   surfaced (`template-uchreditelnye.php`, `template-stavki.php` ×2) and
   incorrectly assumed every *other* `<?php echo
   get_template_directory_uri(); ?>` occurrence — same domain, "looks
   fine" — was safe. It wasn't: the exact same broken-string bug was still
   live in `template-vnutrennie.php`, `template-dopolnitelnaya-
   informatsiya.php`, `template-plan-dolgosrochnykh-zakupok.php`,
   `template-grafik-provedeniya.php` (all four share one repeated
   `.vnutrennie-item` CFS-repeater block), `template-antikorruptsionnaya.php`,
   and `template-tipovye-dogovora.php` — 4 of these were pointed out by
   the user comparing rendered DOM output side-by-side with `kz` (the
   `<img src="<?php echo get_template_directory_uri(); ?>/img/...">` was
   visibly rendering as *literal text* in the browser's element inspector,
   not as a resolved path) before they were caught here. **Checking the
   domain string is not sufficient** — a same-domain, correctly-spelled
   `get_template_directory_uri()` call can still be completely inert if
   it's sitting inside a string literal.

   **Do this instead — don't trust regex/grep for this check, use PHP's
   own tokenizer**, since only the language itself can reliably say
   whether a given span of text is "real code" or "string data":

   ```php
   <?php
   // find_broken_echo.php <theme-dir> — flags every <?php ...?> tag that
   // is actually string *data* (T_CONSTANT_ENCAPSED_STRING /
   // T_ENCAPSED_AND_WHITESPACE), not executable code.
   $dir = $argv[1];
   $files = array_merge(glob("$dir/*.php"), glob("$dir/template-parts/*.php"));
   foreach ($files as $file) {
       $tokens = @token_get_all(file_get_contents($file));
       if ($tokens === false) continue;
       foreach ($tokens as $tok) {
           if (!is_array($tok)) continue;
           [$id, $text, $line] = $tok;
           if (($id === T_CONSTANT_ENCAPSED_STRING || $id === T_ENCAPSED_AND_WHITESPACE)
               && strpos($text, '<?php') !== false) {
               echo "$file:$line: BROKEN — PHP tag is string data, not code\n";
           }
       }
   }
   ```
   Run with `php find_broken_echo.php path/to/theme` — it prints every
   real hit with zero false positives (confirmed: after fixing all 6
   files above, re-running it against the `ru` theme returned nothing).
   **Run this on `en`'s theme directory before starting the per-template
   pass**, fix every hit up front, and re-run it once more after the pass
   to confirm zero remain — don't rely on spotting these by reading diffs
   or grepping for domain strings, both already missed real instances.
2. **Stray literal `"` character inside a `home_url('...')` call**,
   breaking that one link (e.g. `home_url('/o-kompanii/partnery/"', 'https')`
   producing a URL-encoded quote in the href). Found twice on `ru`
   (`template-partnery.php`, `template-uslugi-peregruza.php`), both in
   the language-switcher block, both looked like a copy-paste slip.
   `grep -rn "home_url('[^']*/\"',"` across the theme catches this
   pattern.
3. **A component's CSS gets ported for one class in the family but not
   its siblings.** Porting `.foo-item` card styling isn't enough if
   `.foo-items` (the flex/grid container) or `.foo-text` (a child) still
   carry old fixed-width values sized for the *old* layout — the new
   narrower/wider card can overflow or leave gaps. Concretely:
   `.uchreditelnye-dokumenty__item` got the new 220px card treatment but
   `.uchreditelnye-dokumenty__text` still had `width:324px` (wider than
   the new card), causing a real 4-up grid overflow that wasn't visible
   until actually screenshotted at the right viewport — a `php -l` +
   curl-200 check would never catch this. **When porting one card
   component's CSS from `kz`'s `main.min.css`, grep for the *entire*
   selector family (`__items`, `__item`, `__title`, `__text`, `__photo`,
   `__icon`, hover states) and port the base rules for all of them, not
   just the one matching the bug report.**
4. **A wrapper element has a class that belongs to a different, wider-use
   component**, forcing that component's layout rules onto content that
   was never meant to receive them. Found in `template-rukovodstvo.php`:
   the citizen-reception banner `<article>` had a stray
   `class="rukovodstvo-navbar"` (the 295px white-card *sidebar*
   component) instead of being unclassed — this broke a **different**
   component (`.rukovodstvo-navbar__banner`, meant to be 373px with an
   absolute-positioned photo) nested inside it. Confirmed by md5-diffing
   the actual image file against `kz`'s copy first (identical) to rule
   out a missing-asset explanation before looking at markup. **This class
   of bug returns a clean 200 and passes every automated check — it is
   only visible by screenshotting the page and comparing against `kz`'s
   live equivalent.** This is likely the single best argument for why the
   diff-then-screenshot method (18.3) matters more than lint/curl alone.
5. **The "simplepage" template family**
   (`template-page.php`/`template-pageb.php`/`template-pagea.php` —
   `Template name: simplepage`/`simplepageb`/`simplepagea`) had the exact
   wrong-hardcoded-sidebar bug section 17.3 already documented for
   `template-page.php`/`template-pageb.php` on `kz` — but it was **still
   present, unfixed, on `ru`** for all three files (confirmed via
   `_wp_page_template` DB query that each is used by exactly one real
   standalone page, same as `kz`'s justification for removing the
   sidebar). Fix: `.simplepage-container` + `.rukovodstvo-content--full`
   wrapper (both already exist in `kz`'s `style.css`/`main.min.css` if
   ported per section 5), remove the two-column sidebar section, remove
   the conflicting inline `<style>` block (old `.card`/`.btn-primary`/
   `.aktsioneram-text a:hover` overrides — same shape as bug #6 below).
   **`en` almost certainly has this too** — check `template-page.php`/
   `template-pageb.php` first, they're guaranteed to exist; also check
   whether `en` has its own `template-pagea.php`-equivalent (it may not,
   since `en`'s file listing otherwise matches `kz` 1:1).
6. **Inline `<style>` blocks in individual templates that redeclare a
   shared component** (`.card .btn-primary`, `.card .info`, etc.) with
   *old* flat colors and higher-or-equal specificity than the real
   redesigned component, silently winning the cascade. This is the same
   root cause as the `template-vakansii.php` bug `kz`'s own section 17.3
   already documents, but it recurred **independently** in
   `template-page.php`, `template-pageb.php`, `template-pagea.php`, and
   `template-zakup.php` on `ru` — i.e. it looks like a copy-pasted
   boilerplate block that got pasted into many templates, not a one-off.
   **Grep the whole `en` theme for `.card .btn-primary` and
   `.card{border:1px solid #717171` up front** rather than waiting to
   trip over each occurrence individually — every match is this same bug.
7. **A shared component class is missing a width modifier for one
   specific template's layout context.** `template-o-sayte.php` uses
   `.uslugi-peregruza__text`, which is *normally* one column of a
   two-column image+text layout (50% width) — but this template has no
   image sibling, so without a `--full` modifier the real content column
   was stuck at half width. `kz`'s `main.min.css` already has
   `.uslugi-peregruza__text--full` with a comment explaining exactly this
   — the bug on `ru` was simply that the template's markup never got the
   modifier class added. Check `en`'s `template-o-sayte.php` for the same
   gap.
8. **`post_status` gaps are a real, separate thing to check for** — not
   a design bug, but worth doing the same DB audit for on `en`. `ru` has
   7 of its 8 `template-marshruty1-8.php` route pages sitting as
   `draft` (confirmed via direct `wp_posts` query) while `kz` has all 8
   `publish`ed. **Do not auto-publish drafts found on `en`** — flag them,
   same as was done for `ru`, since publishing is a content decision
   outside a redesign pass's scope and the draft content's accuracy can't
   be verified from a template-focused pass.

### 18.3 Methodology that worked for the `ru` pass — reuse it verbatim for `en`

1. Fix short tags site-wide first (section 18.1), then `style.css` swap,
   then `header.php`/`footer.php`/icon-sprite/`new-design.js` port
   (section 7/9/12), then the `main.min.css` legacy-conflict audit
   (section 8 — the `.dropdown-content` forced-open-but-invisible bug is
   near-guaranteed to exist on `en` too, same mechanism), **then and only
   then** the homepage rebuild, **then** the per-template pass. Doing
   template-level polish before the global chrome is solid wastes work —
   every template inherits header/footer/nav.
2. For the homepage rebuild: pull real content via a temporary
   `var_export(CFS()->get('field', $front_page_id))` debug script placed
   at install root (e.g. `en/cfs-debug-temp.php`), `curl` it once, **then
   delete the file immediately** — never leave it in place. Cross-check
   the real front-page post ID via
   `SELECT option_value FROM wp_options WHERE option_name='page_on_front'`
   — don't assume it matches `kz`'s or `ru`'s post ID even though both of
   those happened to both be `7`.
3. Before wiring up the homepage's quote-request modal
   (`<select name="typecalc">`/`<select name="type">`/`<select
   name="vagon">`/`country[]` checkboxes), **read that install's own
   `send.php`** and use its own `$type`/`$sended`/`$chei`/`$area` array
   keys as the `<option value="...">` strings — never copy another
   site's labels. Confirmed `en/send.php` has its own English-labeled
   arrays (`'Forwarding' => 'EXPEDITING'`, `'Single' => 'SINGLE'`,
   `'Own' => 'OWN'`, and a **mixed-language** `$area` array — some
   country names are already in English (`Kazakhstan`, `Russia`,
   `China`...) but others are still Cyrillic (`Азербайджан`,
   `Белоруссия`, `Латвия`, `Литва`, `Молдова`, `Украина`, `Эстония`) —
   **copy those exact strings verbatim into the checkbox `value=`
   attributes, do not translate them**, since `$area[$_POST['country'][]]`
   does an exact-string lookup and a translated value would silently fail
   to match, breaking that country's code in the CRM submission with no
   visible error). Same lesson as `ru`, but the concrete gotcha differs
   per install — always re-derive it from that install's own file, never
   assume.
4. For every template: `diff kz/theme/file.php en/theme/file.php` first.
   Real content differences (language, real URLs) and real bugs (stray
   classes, leftover raster icons, typos, wrong-domain links, dead divs)
   show up in the same diff — the diff output itself usually makes which
   is which obvious (a `home_url()` call with a stray `"` is never a
   content difference). Cross-reference the DB (`_wp_page_template`
   query, matching section 17.1's method) to build the full template
   list and confirm real page counts before assuming a diff's context
   (e.g. two files mapping to *different* real sub-pages between sites,
   as happened with `ru`'s `template-uslugi-peregruza2-4.php`, is not a
   bug — verify via the DB, don't guess from the diff alone).
5. **Follow every fix with an in-browser screenshot compared against
   `kz`'s live equivalent page — not just `php -l` and a curl status
   check.** Bug patterns #3 and #4 in section 18.2 both return a clean
   200 with no PHP errors and are only visible as a rendered mismatch.
   This turned out to be exactly what "the design doesn't match kz"
   feedback was pointing at during the `ru` pass — several real,
   user-visible bugs were otherwise invisible to every automated check
   used.
6. After each batch of fixes, re-run the full page sweep: `php -l` across
   the whole theme + `curl -L` every published page's URL (pull the list
   fresh from `wp_posts` each time, don't hardcode it) and confirm all
   200s before moving to the next batch. Catches regressions immediately
   instead of at the end.
