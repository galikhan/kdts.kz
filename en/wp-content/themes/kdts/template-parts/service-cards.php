<?php
/**
 * The four core service cards (home page "services" section and the Services page).
 * Cards are the published child pages of the Services page (ID 139), in menu order.
 */
$service_icons = array(
	'<path d="M6 10h52M14 10v40M50 10v40M28 10v12M36 10v12"/><rect x="24" y="22" width="16" height="12" rx="1.5" fill="currentColor" fill-opacity=".16"/><path d="M29 22v12M35 22v12"/><path d="M4 50h56M10 56h44"/><path d="M20 56l-3-3M44 56l3-3" />',
	'<rect x="6" y="36" width="24" height="16" rx="1.5"/><rect x="34" y="36" width="24" height="16" rx="1.5"/><rect x="20" y="18" width="24" height="16" rx="1.5" fill="currentColor" fill-opacity=".16"/><path d="M13 36v16M23 36v16M41 36v16M51 36v16M27 18v16M37 18v16"/><path d="M4 56h56"/>',
	'<path d="M46 6a10 10 0 0110 10c0 8-10 19-10 19S36 24 36 16A10 10 0 0146 6z" fill="currentColor" fill-opacity=".16"/><circle cx="46" cy="16" r="3.5"/><circle cx="12" cy="52" r="5" fill="currentColor" fill-opacity=".16"/><path d="M17 52h14c8 0 8-10 0-10H22c-8 0-8-9 0-9h8" stroke-dasharray="3 4.5"/>',
	'<rect x="3" y="12" width="38" height="30" rx="2" fill="currentColor" fill-opacity=".16"/><path d="M12 12v30M22 12v30M32 12v30"/><path d="M45 22h9.5c1.4 0 2.6.7 3.4 1.9L61 31v11H45z"/><path d="M49 26h5.2l3.3 5.5H49z" fill="currentColor" fill-opacity=".16"/><path d="M3 46h58"/><circle cx="13" cy="51" r="5"/><circle cx="29" cy="51" r="5"/><circle cx="52" cy="51" r="5"/><circle cx="13" cy="51" r="1" fill="currentColor"/><circle cx="29" cy="51" r="1" fill="currentColor"/><circle cx="52" cy="51" r="1" fill="currentColor"/>',
);
$service_pages = get_posts( array(
	'post_type'      => 'page',
	'post_parent'    => 139,
	'post_status'    => 'publish',
	'post__not_in'   => array( 470 ),
	'orderby'        => 'menu_order',
	'order'          => 'ASC',
	'posts_per_page' => 8,
) );
?>
<div class="services-grid">
	<?php foreach ( $service_pages as $i => $service_page ) : ?>
		<a href="<?php echo esc_url( get_permalink( $service_page ) ); ?>" class="service-card">
			<div class="s-icon">
				<svg viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><?php echo isset( $service_icons[ $i ] ) ? $service_icons[ $i ] : $service_icons[0]; ?></svg>
			</div>
			<h3><?php echo esc_html( get_the_title( $service_page ) ); ?></h3>
			<svg class="s-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 17L17 7M9 7h8v8"/></svg>
		</a>
	<?php endforeach; ?>
</div>
