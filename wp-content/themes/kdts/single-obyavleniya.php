<?php
/* Single announcement */
get_header();
the_post();
$list_page = get_page_by_path( 'obyavleniya' );
?>
<section class="page-hero">
	<div class="container">
		<div class="breadcrumb">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Басты бет</a>
			<span class="crumb-sep">/</span>
			<?php if ( $list_page ) : ?>
				<a href="<?php echo esc_url( get_permalink( $list_page ) ); ?>"><?php echo esc_html( get_the_title( $list_page ) ); ?></a>
				<span class="crumb-sep">/</span>
			<?php endif; ?>
			<span class="crumb-current"><?php echo esc_html( get_the_date( 'd.m.Y' ) ); ?></span>
		</div>
		<h1><?php echo $list_page ? esc_html( get_the_title( $list_page ) ) : esc_html( get_the_title() ); ?></h1>
	</div>
</section>

<section class="page-content">
	<div class="container">
		<div class="ann-item">
			<div class="ann-date">
				<span class="ann-date-day"><?php echo esc_html( get_the_date( 'd.m' ) ); ?></span>
				<span class="ann-date-year"><?php echo esc_html( get_the_date( 'Y' ) ); ?></span>
			</div>
			<div class="ann-body">
				<h3><?php echo esc_html( get_the_title() ); ?></h3>
				<?php the_content(); ?>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
