# Homepage redesign — what was done and why

This documents the work done to fix and redesign the KDTS homepage
(`wp-content/themes/kdts/template-home.php`) so the same steps can be
reproduced on another copy of the old site (e.g. the `en/` or `ru/`
installs, which are separate WordPress installs with their own copies
of this theme).

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
| News grid | Real `WP_Query` on post type `novosti`, latest 3 |
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

## 4. File-by-file changes

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
- No changes to `functions.php`, `header.php`, or `footer.php` — they
  were already correct.

## 5. How to reproduce on the old copy

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
   described in section 2, rather than assuming only the homepage
   needs work.

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
