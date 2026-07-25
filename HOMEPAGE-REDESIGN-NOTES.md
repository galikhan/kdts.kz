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
  `icon-connect-hr` (envelope + person, for an HR-contact use case).
  Stroke-based ones follow the existing style: `viewBox="0 0 24 24"
  fill="none" stroke="currentColor" stroke-width="2"
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
- Currently wired up in `header.php` (phone, cabinet/user icons) and
  `footer.php` (phone ×2, mail, map-pin, facebook, telegram). Plenty of
  inline SVGs elsewhere (`template-home.php` calc swap/check, services
  arrow, cabinet feature icons) were **not** migrated yet — same
  pattern applies whenever it's worth consolidating them.
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
