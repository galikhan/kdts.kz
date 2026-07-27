# KDTS site — post-redesign fixes & restorations (KZ version)

This log covers everything fixed/added on top of the visual redesign in this
session, on the **KZ** (`kdts` theme, `kz` / `kz_fix_yazik` branches) version
of the site. Purpose: apply the same changes to the **RU** and **EN**
versions of the site (separate theme copies / installs at `kdts.kz/ru`,
`kdts.kz/en`).

Files referenced below are all in `wp-content/themes/kdts/` unless noted.
Two stylesheets are in play — **`style.css`** is the real, actively
maintained redesign stylesheet (loaded first); **`css/main.min.css`** is the
legacy pre-redesign file, still loaded (after `style.css`) and still used
for a handful of scoped/page-specific overrides, but not where new
components should be styled by default.

---

## 1. Swiper-container 9000px height bug

**Symptom:** `/aktsionerlerge/korporativtik-origalar-turaly-akparat/`
(template `template-informatsiya.php`) rendered at 9000px+ tall.

**Root cause:** CSS meant to collapse inactive Swiper slides to `height: 0`
and only show the active one was scoped with `.page35 .istoriya-top
.swiper-slide`. WordPress's real `body_class()` output is `page-id-35`, not
`page35` — so the rule never matched, and every year's worth of content
rendered stacked and visible at once.

**Fix (`css/main.min.css`):** renamed the dead selectors to the real body
class:
```css
.page-id-35 .istoriya-top .swiper-slide { height: 0 !important }
.page-id-35 .istoriya-top .swiper-slide-active { height: auto !important }
.page-id-35 .godovaya-items { margin-top: 30px; }
```

**⚠️ Known wider issue, not fixed:** the same `.pageNN` (no hyphen) dead-selector
pattern appears **72 times** in `main.min.css` across many page IDs (7, 13,
17, 23, 29, 32, 35, 38, 40, 48, 141, 470, 475, 477, 479, 606, 765). Only page
35 was fixed. Worth a full sweep (`.pageNN` → `.page-id-NN`) on each
language version, and re-checking pages 17/141 which use the same
"collapse inactive swiper-slide" pattern.

---

## 2. Default body/content font-size → 16px

Goal: menu sidebar text and page body copy should default to **16px**,
without touching `<h1>`–`<h6>` or things that function as visual headings
(bold card titles, person names/job titles, year badges, numbered labels).

### Shared sidebar menu (all 3 variants)
`.rukovodstvo-navbar__block` (main.min.css) — the shared wrapper class used
by **all three** section sidebars (`okompanii-menu`, `aktsioneram-menu`,
`klientam-menu`): `font-size: 14px` → `16px`.

Also the separate procurement sidebar (`zakup-menu.php`, shared by every
`satyp-alul/*` template): `.godovoy-plan__nav` and `.godovoy-plan__nav-gody
li a`, `14px` → `16px` (main.min.css).

### Per-template content copy (main.min.css unless noted)
| Template(s) | Class(es) changed to 16px |
|---|---|
| template-istoriya-kompanii.php | `.istoriya-lead`, `.istoriya-text`, `.istoriya-info__text` |
| template-filialy.php | `.filialy-item__p` (base + mobile) |
| template-rukovodstvo.php | inline `style="font-size:20px"` on 2 bio `<p class="user-text">` blocks → `16px` |
| template-stavki.php | `.stavki-text`, `.tarify-text`, `.tarify-tabel__left` |
| template-park.php | `.konteynerov-item__footer` (base + 3 mobile breakpoints) |
| template-tipovye-dogovora.php | `.tipovye-dogovora__head-text`, `.tipovye-dogovora__head-color`, `.tipovye-dogovora__head-italic`, `.rezidentov-item__body`, `.tipovye-dogovora__zayavki-text` |
| template-informatsiya.php | `.istoriya-content` (base + mobile) |
| template-vakansii.php | `.aktsioneram-text` — **shared class**, scoped via `.page-id-133 .aktsioneram-text { font-size: 16px }` instead of editing the global rule |
| template-o-sayte.php | `.uslugi-peregruza__text` — **shared class**, scoped via `.page-id-2077 .uslugi-peregruza__text { font-size: 16px }` |
| all `satyp-alul/*` procurement templates | `.zakupki-body` (the tender/archive listing rows) — ended up at 16px because an *external* edit to `main.min.css` (not by me) removed its explicit `font-size: 14px` entirely, so it now inherits the 16px default. Worth double-checking this landed correctly on ru/en. |

### Deliberately left unchanged (heading-like, not body copy)
Bold/large labels that act as visual headings even though they aren't
`<h*>` tags: card titles (`.filialy-item__title`, `.zakupki-item__title` —
actually a real `<h2>`), person names/job titles (`.user-name`,
`.user-dolzhnost`), year badges (`.istoriya-god`, `.istoriya-godovaya`,
`.swiper-slide__godovaya`), section titles (`.istoriya-info__title`,
`.rezidentov-item__head`, `.tipovye-dogovora__zayavki-color`), and icon+caption
download-link labels (`.tarify-item__text`, `.vnutrennie-item__text`,
`.godovaya-item__text`, `.tipovye-dogovora__text`, etc.) — all untouched.

---

## 3. Breadcrumbs

### 3a. Missing entirely on 3 procurement single-post templates
`single-odnogo.php`, `single-otkrytogo.php` were missing the breadcrumbs
block outright. `single-tsenovykh.php` had it commented out (with the
`get_template_part('breadcrumbs')` call itself deleted from inside the
comment). All three now start with:
```php
<div class="pagination-block">
    <div class="sdfsdfjsdf">
<?php get_template_part('breadcrumbs') ?>
    </div>
</div>
```
Same gap likely exists on other `single-*.php` templates that were **not**
touched this round (novosti, obyavleniya, dvukhetapnogo, and the `ar`
archived variants) — worth checking on ru/en too.

### 3b. Long titles blew out the breadcrumb bar
Added a small helper in `functions.php`, right before `dimox_breadcrumbs()`:
```php
function dimox_bc_trim( $text, $length = 30 ) {
	$text = wp_strip_all_tags( $text );
	if ( mb_strlen( $text ) > $length ) {
		$text = mb_substr( $text, 0, $length ) . '…';
	}
	return $text;
}
```
Wired into all 5 spots inside `dimox_breadcrumbs()` where the **current**
(non-link) breadcrumb crumb is printed — i.e. every
`$before . get_the_title() . $after` became
`$before . dimox_bc_trim( get_the_title() ) . $after`. This is a single
shared function, so it applies to every post type/page sitewide
automatically once ported.

### 3c. Breadcrumb bar itself had no CSS
`.pagination-block` / `.sdfsdfjsdf` / `.pagination` had **zero** styling in
the redesign (rendered as a default unstyled bullet list). Proper styling
now lives in `style.css` under `BREADCRUMB BAR (legacy page templates:
.pagination-block)`: flex row, `/`-less arrow-style separators, grey link
color, bold dark "current page" crumb.

### 3d. Language switcher next to the breadcrumb bar — restored, styled
`.yazyk` (hardcoded Қаз/Рус/Eng links, **not** the dynamic `yazyk-menu` nav
menu) is a sibling of `.sdfsdfjsdf` inside `.pagination-block`, hardcoded
into nearly every inner-page template (`grep -rl 'class="yazyk"'` matches
~50 files) — it was never removed, just never styled, so it rendered as a
default stacked bullet list. Added to `style.css` right after the
`.pagination` rules:
```css
.yazyk ul { display: flex; list-style: none; margin: 0; padding: 0; flex-shrink: 0; }
.yazyk ul li { padding: 5px; }
.yazyk ul li a { font-size: 13px; font-weight: 600; text-transform: uppercase; color: var(--c-grey); text-decoration: none; transition: color var(--tr); }
.yazyk ul li a:hover { color: var(--c-dark); }
.yazyk ul li.yazyk-active a { color: var(--c-dark); }
```
Since it's a fixed 3-word row (~111px wide), no mobile-specific override
was needed — fits fine down to 375px viewports. Note: an *earlier* attempt
to also add a language switcher **inside `breadcrumbs.php` itself** (as a
`.lang-switch` + dynamic `yazyk-menu` `wp_nav_menu()` call) was tried and
reverted — `breadcrumbs.php` stayed as just the plain `.pagination` block.
The `.yazyk` component described here is the separate, already-existing,
per-template one — don't reintroduce the breadcrumbs.php version on top of
it, that would duplicate the switcher.

---

## 4. Header "Сатып алулар" dropdown had no children

**Symptom:** hovering/clicking "Сатып алулар" in the main header nav did
nothing — it just navigated straight to `/satyp-alul/tender/` instead of
showing a dropdown like its sibling top-level items.

**Root cause:** `Law_Header_Menu.php` (the nav walker) only renders the
`dropbtn` class / `href="#"` / nested `<ul class="dropdown-content">` for
menu items that actually **have children** in the WP menu. "Сатып алулар"
had zero children assigned in *Appearance → Menus → Header Menu*, unlike
"Компания туралы" / "Клиенттерге" / "Акционерлерге".

**Fix:** this is a **content change in the WordPress menu**, not a code
change — added 3 child menu items under "Сатып алулар" (менu item ID 455 on
this KZ install) pointing at the 3 procurement landing pages: **Жылдық
сатып алу жоспары**, **Сатып алулар** (same target as the parent), and
**Мұрағат**. On ru/en, this needs to be redone by hand in
*Appearance → Menus* for their respective Header Menu — there are no post
IDs to reuse across sites.

---

## 5. Restored 3 header utility buttons from the live production site

Live `kdts.kz` has 3 buttons (hotline / e-Otinish / accessibility toggle)
that the redesign dropped. Restored them, split across two locations:

### 5a. BVI "version for the visually impaired" toggle — stayed in header
In `header.php`, inside `.header-actions`:
```php
<div class="utility-links">
    <?php echo do_shortcode( '[bvi text="<span class=\'sr-only\'>Нашар көретіндерге арналған нұсқа</span>"]' ); ?>
</div>
```
Requires the **`button-visually-impaired`** plugin active (it already is on
this install — confirm it's active on ru/en too, or the shortcode no-ops).

Styled as an icon-only circular button (visible text moved to an
`.sr-only` span for accessibility, per your request to show an icon instead
of the text label). Two non-obvious gotchas, both handled in `style.css`
(`HEADER UTILITY LINKS` section):
- The plugin's own **inline** `<style>` forces `color`/`background` via
  `!important` on `a.bvi-link-shortcode` — our override needs ≥2 classes of
  specificity to win (`.utility-links .bvi-link-shortcode`), which it has.
- The plugin's **actual shipped CSS** (`bvi.min.css`, *not* the unminified
  `bvi.css` sitting next to it — they differ!) sets
  `.bvi-svg-eye { display: none }` by default; it only ever showed via the
  visible text label before. Had to force it back with a selector matching
  or exceeding the plugin's own specificity:
  ```css
  html body .utility-links a.bvi-link-shortcode .bvi-svg-eye,
  html body .utility-links a.bvi-link-widget .bvi-svg-eye {
    display: inline-block !important; width: 16px !important; height: 16px !important;
  }
  ```

### 5b. Hotline + e-Otinish — moved to the floating action stack
Initially added next to BVI in the header, then moved (per your request)
into the existing bottom-right `.float-actions` stack in `footer.php`,
above the Telegram/call buttons:
```php
<a href="https://sk-hotline.kz" target="_blank" rel="noopener" class="float-btn hotline" title="Жедел желі">
    <img src="<?php echo get_template_directory_uri(); ?>/img/hot.jpg" alt="Самрұқ-Қазына" />
</a>
<a href="https://eotinish.kz/kk" target="_blank" rel="noopener" class="float-btn eotinish" title="e-Otinish">
    <img src="https://www.kdts.kz/ru/wp-content/uploads/2024/02/logo-light.png" alt="e-Otinish" />
</a>
```
- `img/hot.jpg` (the round Samruk-Kazyna hotline seal, 28×30) was pulled
  from live `kdts.kz/wp-content/themes/kdts/img/hot.jpg` and copied into
  this theme's `img/` folder — needs copying into the ru/en theme's `img/`
  folder too (or point at a shared CDN/URL instead).
- The e-Otinish logo is referenced directly from the **live production**
  URL (`www.kdts.kz/ru/wp-content/uploads/...`), not a local copy — fine to
  reuse as-is on ru/en since it's the same external asset either way.
- **Live site's hotline link had `href=""`** (non-functional even in
  production) — decided to point it at `https://sk-hotline.kz` (the real
  Samruk-Kazyna hotline domain, already referenced in
  `template-kontakty.php`) instead of reproducing the dead link.
- New CSS in `style.css` (`FLOATING ACTIONS` section):
  `.float-btn.hotline`, `.float-btn.eotinish`.

---

## 6. "Компания туралы" page (`template-onas.php`) redesign

Fixed three real bugs, not just a visual refresh — all content (CFS calls,
hardcoded KZ mission/vision/strategy wording) preserved exactly, only
markup/CSS changed:

1. **Map/text overlap.** `.abount-missiya__map` was `position: absolute`
   with no width/containment, so it rendered directly on top of the
   mission-statement text instead of beside it. Rebuilt `.abount-map__container`
   as a normal flex row (map `position: static`, capped width) — map and
   text now sit side by side, wrapping to a stacked column under 900px.
2. **Stats box rendering as an empty box.** `.onas-active`'s CFS fields
   (`tsifrff`/`text10`/`text11`) are blank on this page — the block still
   rendered its border/card shell with nothing inside. Now conditionally
   rendered in PHP (`if ($onas_stat_num || $onas_stat_text): ... endif;`).
   Same treatment for `.abount-missiya__bottom` (`text4` is also blank
   here) — wrapped in `if ($onas_missiya_bottom): ... endif;`. **If porting
   to ru/en: check whether their CFS fields for this page are actually
   filled in — if so, the content will show automatically; if also blank,
   this conditional prevents the empty-box artifact.**
3. **Off-brand styling.** The years-in-business badge and the
   mission/vision/strategy text were using an orange accent (`#d39c00`,
   not part of the `--c-*` palette) and a wall of `<strong>`+`<p>` tags.
   Restyled: `.onas-years` (pill badge with clock icon), `.onas-goals`
   (3-card grid: Мақсат / Көз-қарас / Стратегиялық мақсат, the 6 strategic
   goals as a real checklist instead of manually-numbered paragraphs).
4. Deleted a dead, fully HTML-commented-out duplicate `<section
   class="abount-missiya">` block (zagolovok1/zagolovok2/text2/text3 —
   superseded by the live mission/vision text, was never rendering).

Left alone (already fine): the certificate block (`.cert-block`) and the
two dark partnership-stat cards (`.abount-otnosheniya`) — just added
`border-radius: 20px` to the latter for consistency.

All new CSS in `css/main.min.css` (in-place edit of the old `.years`,
`.onas-active`, `.abount-missiya*` rules — same file/pattern as the rest of
this page's pre-existing styling, not `style.css`).

---

## 7. Mobile nav menu — bottom items unreachable

**Symptom:** opening the hamburger menu on mobile, the list was taller
than the screen and there was no way to scroll down to the last items
(Сатып алулар and its children, Тұрақты даму, Байланыстар).

**Two compounding bugs**, both in `style.css`, `@media (max-width: 1024px)
{ .nav { ... } }`:
1. No `max-height`/`overflow` on `.nav` at all — it just grew past the
   viewport with nothing to scroll it.
2. The actual cause of "can't reach the bottom": `.nav` silently inherited
   `justify-content: center` from the **desktop** rule (used to center the
   horizontal top-level menu), never reset on mobile. With
   `flex-direction: column` and content taller than the box, that centered
   the oversized menu — pushing the first items up **off-screen above the
   header** while the last ones spilled off the bottom. There was no
   scroll position that could show both ends.

**Fix** — added to the mobile `.nav` rule:
```css
max-height: calc(100dvh - 70px);
overflow-y: auto;
-webkit-overflow-scrolling: touch;
justify-content: flex-start;
align-items: stretch;
```
Verified with a real 375×667 viewport (Playwright): menu now starts flush
at the top and scrolls to every item. **This bug will resurface on ru/en
too** since it's the same base `.nav` desktop rule (`justify-content:
center`) being silently inherited — check their mobile nav the same way.

---

## 8. `.kontakty-container` width not applying — media-query lesson

Not a redesign item, but worth keeping as a reference: a `width: 1280px`
rule was added for `.kontakty-container` but nested inside an *existing*
`@media (max-width: 576px) { ... }` block in `main.min.css` — so on normal
desktop screens it never applied, and on an actual small phone it would
have forced 1280px width (horizontal overflow), the opposite of intent.

**Fix:** moved it to a plain top-level rule (next to the other
`.kontakty-*` selectors) and changed `width: 1280px` to `max-width: 1280px;
width: 100%; margin: 0 auto;` so it shrinks gracefully instead of
overflowing on narrower screens.

**Takeaway for editing `main.min.css` on any language version:** anything
meant to apply on normal desktop screens must sit **outside** any `@media
(max-width: ...) { }` block. This file has scattered `@media` blocks
throughout (not batched at the end), so always check whether the insertion
point is already inside an unclosed one before adding a rule.

---

## Files touched this session
- `wp-content/themes/kdts/css/main.min.css` — height-bug fix, font-size rollout, `.godovoy-plan__nav*`, scoped page-id overrides, `template-onas.php` redesign (`.onas-*`, `.abount-missiya*`), `.kontakty-container`
- `wp-content/themes/kdts/style.css` — breadcrumb bar styling, `.yazyk` styling, `.utility-links`/`.sr-only`, `.float-btn.hotline`/`.eotinish`, mobile `.nav` scroll/centering fix
- `wp-content/themes/kdts/functions.php` — `dimox_bc_trim()` + 5 call sites in `dimox_breadcrumbs()`
- `wp-content/themes/kdts/breadcrumbs.php` — no net change (explored a `.lang-switch` addition, reverted; see §3d — the separate pre-existing `.yazyk` component is what actually got styled)
- `wp-content/themes/kdts/header.php` — `.utility-links` (BVI only)
- `wp-content/themes/kdts/footer.php` — `.float-actions` gained `.hotline`/`.eotinish` buttons
- `wp-content/themes/kdts/single-odnogo.php`, `single-otkrytogo.php`, `single-tsenovykh.php` — breadcrumbs restored
- `wp-content/themes/kdts/template-onas.php` — hero stat + map/mission section restructured, dead commented section removed (see §6)
- `wp-content/themes/kdts/img/hot.jpg` — new asset, copied from production
- WordPress admin (DB content, not files): 3 new children under the "Сатып алулар" header menu item
