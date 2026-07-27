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

### 3d. Language switcher in the breadcrumb bar — explored, not applied
There was back-and-forth on restoring a `.yazyk` language-switcher block
next to the breadcrumbs on inner pages (matching the old theme's
`pagination-block` layout, which had breadcrumbs + `.yazyk` as siblings).
**Current state: not present** — `breadcrumbs.php` only contains the plain
`.pagination` block. If this is wanted on ru/en, decide fresh rather than
porting an in-between state.

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

## Files touched this session
- `wp-content/themes/kdts/css/main.min.css` — height-bug fix, font-size rollout, `.godovoy-plan__nav*`, scoped page-id overrides
- `wp-content/themes/kdts/style.css` — breadcrumb bar styling, `.utility-links`/`.sr-only`, `.float-btn.hotline`/`.eotinish`
- `wp-content/themes/kdts/functions.php` — `dimox_bc_trim()` + 5 call sites in `dimox_breadcrumbs()`
- `wp-content/themes/kdts/breadcrumbs.php` — no net change (explored a `.yazyk` addition, reverted)
- `wp-content/themes/kdts/header.php` — `.utility-links` (BVI only)
- `wp-content/themes/kdts/footer.php` — `.float-actions` gained `.hotline`/`.eotinish` buttons
- `wp-content/themes/kdts/single-odnogo.php`, `single-otkrytogo.php`, `single-tsenovykh.php` — breadcrumbs restored
- `wp-content/themes/kdts/img/hot.jpg` — new asset, copied from production
- WordPress admin (DB content, not files): 3 new children under the "Сатып алулар" header menu item
