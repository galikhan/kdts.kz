<?php
/*
 * Template name: uslugi
 */
?>
<?php get_header(); ?>

<section class="page-hero">
	<div class="container">
		<div class="breadcrumb">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
			<span class="crumb-sep">/</span>
			<span class="crumb-current"><?php the_title(); ?></span>
		</div>
		<h1><?php the_title(); ?></h1>
	</div>
</section>

<section class="page-content is-wide">
	<div class="container">
		<?php get_template_part( 'template-parts/service-cards' ); ?>

		<div class="eco-block">
			<h2>KDTS unified logistics ecosystem</h2>
			<p>Kedentransservice JSC brings together terminal handling, transshipment at border crossings, freight forwarding support and road transportation within comprehensive logistics solutions. This allows clients to receive the full set of services in a single chain — from acceptance and handling of cargo to its delivery to the final consignee.</p>
			<p class="eco-quote">Kedentransservice is a single partner for terminal, rail, road and multimodal logistics.</p>
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
