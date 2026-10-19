<?php
 /*
 * Template name: park-platform-i-konteynerov
 */
?>
<?php get_header(); ?>

<section class="page-hero">
	<div class="container">
		<div class="breadcrumb">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
			<span class="crumb-sep">/</span>
			<span class="crumb-current">Park of Platforms</span>
		</div>
		<h1>Park of Platforms</h1>
		<div class="subnav-pills">
			<a href="<?php echo esc_url( home_url( '/obyavleniya' ) ); ?>">Announcements</a>
			<a href="<?php echo esc_url( home_url( '/stavki-i-tarify' ) ); ?>">Rates and Tariffs</a>
			<a href="<?php echo esc_url( home_url( '/park-platform-i-konteynerov' ) ); ?>" class="is-active">Park of platforms</a>
			<a href="<?php echo esc_url( home_url( '/tipovye-dogovora' ) ); ?>">Standard contracts</a>
			<a href="<?php echo esc_url( home_url( '/uchreditelnye-dokumenty' ) ); ?>">Constituent documents</a>
		</div>
	</div>
</section>

<section class="page-content">
	<div class="container">
		<p class="page-lead">A fitting platform is a specialized platform designed for the transportation of large-capacity containers and equipped with specialized assemblies for their fastening.</p>

		<div class="page-section">
			<h2>Container Types Used</h2>
			<p>The fitting platforms of Kedentransservice JSC are used to transport large-tonnage containers of 40 feet type 1A, 1AA, 1AX, 1AAA ISO and 20 feet of type 1C, 1CC, 1CX ISO.</p>
			<div class="info-grid">
				<div class="info-card">
					<h3>40-foot Containers</h3>
					<p class="info-role">ISO Types</p>
					<p>1A, 1AA, 1AX, 1AAA</p>
				</div>
				<div class="info-card">
					<h3>20-foot Containers</h3>
					<p class="info-role">ISO Types</p>
					<p>1C, 1CC, 1CX</p>
				</div>
			</div>
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
