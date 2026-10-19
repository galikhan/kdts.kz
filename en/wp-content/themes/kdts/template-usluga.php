<?php
/*
 * Template name: usluga
 */
?>
<?php get_header(); ?>
<?php
the_post();
$parent_id = wp_get_post_parent_id( get_the_ID() );
$img_rel   = '/img/services/' . get_the_ID() . '.jpg';
$img_file  = get_template_directory() . $img_rel;
?>

<section class="page-hero">
	<div class="container">
		<div class="breadcrumb">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
			<span class="crumb-sep">/</span>
			<a href="<?php echo esc_url( get_permalink( 139 ) ); ?>"><?php echo esc_html( get_the_title( 139 ) ); ?></a>
			<span class="crumb-sep">/</span>
			<span class="crumb-current"><?php the_title(); ?></span>
		</div>
		<h1><?php the_title(); ?></h1>
	</div>
</section>

<section class="page-content">
	<div class="container">
		<div class="service-detail">
			<?php if ( file_exists( $img_file ) ) : ?>
				<img class="article-hero-img" src="<?php echo esc_url( get_template_directory_uri() . $img_rel . '?v=' . filemtime( $img_file ) ); ?>" alt="">
			<?php endif; ?>
			<?php the_content(); ?>
		</div>
	</div>
</section>

<section class="cta-banner">
	<div class="container cta-inner">
		<h2>READY TO DELIVER YOUR CARGO</h2>
		<p>
			<span>Submit a request to calculate the tariff or contact us directly:</span>
			<span class="cta-phones"><?php echo esc_html( CFS()->get( 'telefon1', 606 ) ); ?></span>
		</p>
		<div class="cta-buttons">
			<a href="https://my.kdts.kz/" target="_blank" rel="noopener" class="btn btn-primary">CALCULATE TARIFF</a>
			<a href="<?php echo esc_url( get_permalink( 606 ) ); ?>" class="btn btn-outline-light">CONTACT US</a>
		</div>
	</div>
</section>

<?php get_footer(); ?>
