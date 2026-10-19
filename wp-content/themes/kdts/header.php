<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php include get_template_directory() . '/icons/sprite.svg'; ?>

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
    m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
    (window,document,"script","https://mc.yandex.ru/metrika/tag.js","ym");
    ym(79124866,"init",{clickmap:true,trackLinks:true,accurateTrackBounce:true,webvisor:true});
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/79124866" style="position:absolute;left:-9999px;" alt=""/></div></noscript>
<!-- /Yandex.Metrika counter -->

<?php
/**
 * Header Menu — real, admin-editable WP menu (Appearance → Menus → Header Menu).
 * Top-level items WITHOUT children render in the always-visible main-nav strip;
 * top-level items WITH children become the mega-menu columns (in menu order),
 * matching the site's own design (see redesign_kdts.html).
 */
$header_flat_items   = array();
$header_column_items = array();
$header_menu_locations = get_nav_menu_locations();
if ( ! empty( $header_menu_locations['header-menu'] ) ) {
	$header_menu_items = wp_get_nav_menu_items( $header_menu_locations['header-menu'] );
	if ( $header_menu_items ) {
		$header_children = array();
		$header_top      = array();
		foreach ( $header_menu_items as $item ) {
			if ( (int) $item->menu_item_parent === 0 ) {
				$header_top[] = $item;
			} else {
				$header_children[ $item->menu_item_parent ][] = $item;
			}
		}
		usort( $header_top, function ( $a, $b ) { return $a->menu_order <=> $b->menu_order; } );
		foreach ( $header_children as &$kids ) {
			usort( $kids, function ( $a, $b ) { return $a->menu_order <=> $b->menu_order; } );
		}
		unset( $kids );
		foreach ( $header_top as $item ) {
			if ( ! empty( $header_children[ $item->ID ] ) ) {
				$header_column_items[] = array( 'item' => $item, 'children' => $header_children[ $item->ID ] );
			} else {
				$header_flat_items[] = $item;
			}
		}
	}
}
$phone     = CFS()->get( 'telefon1', 606 );
$phones    = $phone ? array_map( 'trim', explode( ',', $phone ) ) : array();
$address   = CFS()->get( 'adres1', 606 );
?>

<header class="site-header" id="header">
	<div class="header-inner">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">
			<?php
			$custom_logo_id = get_theme_mod( 'custom_logo' );
			if ( $custom_logo_id ) {
				echo wp_get_attachment_image( $custom_logo_id, 'full', false, array( 'class' => 'custom-logo' ) );
			} else {
				echo '<img src="' . esc_url( get_template_directory_uri() . '/img/logo.png' ) . '" alt="' . esc_attr( get_bloginfo( 'name' ) ) . '" class="custom-logo">';
			}
			?>
			<span class="logo-text">
				<strong>KDTS</strong>
				<em>Кедентранссервис</em>
			</span>
		</a>

		<button class="burger" id="burgerBtn" aria-label="Мәзір">
			<span></span><span></span><span></span>
		</button>

		<nav class="main-nav" id="mainNav">
			<?php /* first two flat items (Закупки, Устойчивое развитие) live only in the burger menu's quicklinks */ foreach ( array_slice( $header_flat_items, 2 ) as $item ) : ?>
				<?php $item_url = $item->url; ?>
				<a href="<?php echo esc_url( $item_url ); ?>"><?php echo esc_html( $item->title ); ?></a>
			<?php endforeach; ?>
		</nav>

		<div class="header-actions">
			<?php if ( $phones ) : ?>
				<a class="phone" href="tel:<?php echo esc_attr( preg_replace( '/\s+/', '', $phones[0] ) ); ?>"><?php echo esc_html( $phones[0] ); ?></a>
			<?php endif; ?>

			<div class="lang-switch" id="langSwitch">
				<?php wp_nav_menu( array(
					'theme_location' => 'yazyk-menu',
					'container'      => false,
					'menu_class'     => '',
					'items_wrap'     => '%3$s',
					'walker'         => new Kdts_Lang_Switch_Walker(),
				) ); ?>
			</div>

			<a class="btn btn-outline cabinet-btn" href="https://my.kdts.kz/" target="_blank" rel="noopener">Жеке кабинет</a>
		</div>
	</div>
	<div class="header-line" aria-hidden="true"></div>

	<!-- ============ MEGA MENU ============ -->
	<div class="mega-menu" id="megaMenu">
		<div class="mega-menu-inner">
			<div class="mega-col mega-col-contact">
				<div class="mega-contacts">
					<?php foreach ( $phones as $p ) : if ( ! $p ) continue; ?>
						<a href="tel:<?php echo esc_attr( preg_replace( '/\s+/', '', $p ) ); ?>"><?php echo esc_html( $p ); ?></a>
					<?php endforeach; ?>
					<a href="mailto:kense@kdts.kz">kense@kdts.kz</a>
				</div>
				<?php if ( $address ) : ?>
					<p class="mega-address"><?php echo esc_html( trim( $address ) ); ?></p>
				<?php endif; ?>
				<div class="mega-social">
					<a href="https://t.me/ao_kdts_bot" target="_blank" rel="noopener" aria-label="Telegram">
						<svg viewBox="0 0 24 24" fill="currentColor"><path d="M21.9 4.2L2.9 11.6c-1.2.5-1.2 1.2-.2 1.5l4.9 1.5 1.9 5.8c.2.6.4.9.9.9.4 0 .6-.2.9-.5l2.2-2.1 4.6 3.4c.8.5 1.4.2 1.6-.8l3-14.1c.3-1.2-.4-1.7-1.4-1.4zM8.4 13.6l9.3-5.9c.5-.3.9-.1.5.2l-7.7 7-0.3 3.2-1.6-4.5z"/></svg>
					</a>
					<a href="https://www.facebook.com/Kedentransservice.kz" target="_blank" rel="noopener" aria-label="Facebook">
						<svg viewBox="0 0 24 24" fill="currentColor"><path d="M13.5 21v-7.5h2.5l.5-3h-3V8.5c0-.9.4-1.5 1.6-1.5H16.5V4.3c-.3 0-1.2-.1-2.3-.1-2.3 0-3.9 1.4-3.9 4V10.5H8v3h2.3V21h3.2z"/></svg>
					</a>
				</div>
				<div class="mega-quicklinks">
					<?php foreach ( array_slice( $header_flat_items, 0, 2 ) as $item ) : ?>
						<a href="<?php echo esc_url( $item->url ); ?>"><?php echo esc_html( $item->title ); ?></a>
					<?php endforeach; ?>
				</div>
			</div>

			<?php foreach ( $header_column_items as $col ) : ?>
				<div class="mega-col">
					<?php if ( (int) $col['item']->object_id === 176 ) : /* "Клиенттерге" is a heading only — not clickable */ ?>
						<span class="mega-col-title"><?php echo esc_html( $col['item']->title ); ?></span>
					<?php else : ?>
						<a class="mega-col-title" href="<?php echo esc_url( $col['item']->url ); ?>"><?php echo esc_html( $col['item']->title ); ?></a>
					<?php endif; ?>
					<?php foreach ( $col['children'] as $child ) : ?>
						<?php if ( (int) $child->object_id === 183 ) : /* routes page is not published yet — show as plain text */ ?>
							<span class="mega-link-static"><?php echo esc_html( $child->title ); ?></span>
						<?php else : ?>
							<a href="<?php echo esc_url( $child->url ); ?>"><?php echo esc_html( $child->title ); ?></a>
						<?php endif; ?>
					<?php endforeach; ?>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</header>
<div class="mega-menu-backdrop" id="megaBackdrop"></div>
