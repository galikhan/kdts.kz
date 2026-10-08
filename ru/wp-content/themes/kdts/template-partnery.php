<?php
 /*
 * Template name: partnery
 */
?>
<?php get_header(); ?>
<?php $partners = (array) CFS()->get( 'partnery' ); ?>

<section class="page-hero">
	<div class="container">
		<div class="breadcrumb">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Главная</a>
			<span class="crumb-sep">/</span>
			<span class="crumb-current"><?php the_title(); ?></span>
		</div>
		<h1><?php the_title(); ?></h1>
	</div>
</section>

<section class="page-content is-wide">
	<div class="container">
		<div class="partner-cards">
			<?php foreach ( $partners as $p ) :
				$logo = isset( $p['partnery-foto'] ) ? $p['partnery-foto'] : '';
				$name = isset( $p['partnery-tekst'] ) ? trim( wp_strip_all_tags( $p['partnery-tekst'] ) ) : '';
				if ( ! $logo && ! $name ) { continue; }
				?>
				<div class="partner-card">
					<div class="partner-card-logo">
						<?php if ( $logo ) : ?><img src="<?php echo esc_url( $logo ); ?>" alt="<?php echo esc_attr( $name ); ?>" loading="lazy"><?php endif; ?>
					</div>
					<p><?php echo esc_html( $name ); ?></p>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>
