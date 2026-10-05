<?php
 /*
 * Template name: aktsioneram
 */
?>
<?php get_header(); ?>
<?php
// Sub-pages of the "Shareholders" section come from the admin-editable menu.
$sub_pages = array();
$locations = get_nav_menu_locations();
if ( ! empty( $locations['aktsioneram-menu'] ) ) {
	$sub_pages = wp_get_nav_menu_items( $locations['aktsioneram-menu'] ) ?: array();
}
$registrar_title = CFS()->get( 'svedeniya' );
$registrar_items = CFS()->get( 'svedeniya-danniy' );
?>

<section class="page-hero">
	<div class="container">
		<div class="breadcrumb">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Главная</a>
			<span class="crumb-sep">/</span>
			<span class="crumb-current"><?php the_title(); ?></span>
		</div>
		<h1><?php the_title(); ?></h1>
		<?php if ( $sub_pages ) : ?>
			<div class="subnav-pills">
				<?php foreach ( $sub_pages as $sub ) : ?>
					<a href="<?php echo esc_url( $sub->url ); ?>"><?php echo esc_html( $sub->title ); ?></a>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>
	</div>
</section>

<section class="page-content">
	<div class="container">
		<?php the_post(); ?>
		<div class="page-section">
			<?php the_content(); ?>
		</div>

		<?php if ( $registrar_title || $registrar_items ) : ?>
			<div class="info-grid cols-1">
				<div class="info-card">
					<?php if ( $registrar_title ) : ?><h3><?php echo esc_html( trim( $registrar_title ) ); ?></h3><?php endif; ?>
					<?php if ( $registrar_items ) : ?>
						<ul class="service-detail-list">
							<?php foreach ( $registrar_items as $item ) : ?>
								<li><?php echo esc_html( trim( $item['tekst'] ) ); ?></li>
							<?php endforeach; ?>
						</ul>
					<?php endif; ?>
				</div>
			</div>
		<?php endif; ?>
	</div>
</section>

<section class="cta-banner">
	<div class="container cta-inner">
		<h2>ГОТОВЫ ДОСТАВИТЬ ВАШ ГРУЗ</h2>
		<p>
			<span>Оставьте заявку для расчёта тарифа или свяжитесь напрямую:</span>
			<span class="cta-phones"><?php echo esc_html( CFS()->get( 'telefon1', 606 ) ); ?></span>
		</p>
		<div class="cta-buttons">
			<a href="https://my.kdts.kz/" target="_blank" rel="noopener" class="btn btn-primary">РАССЧИТАТЬ ТАРИФ</a>
			<a href="<?php echo esc_url( get_permalink( 606 ) ); ?>" class="btn btn-outline-light">СВЯЗАТЬСЯ</a>
		</div>
	</div>
</section>

<?php get_footer(); ?>
