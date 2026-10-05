<?php
/*
 * Template name: vakansii
 */
?>
<?php get_header(); ?>

<section class="page-hero">
	<div class="container">
		<div class="breadcrumb">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
			<span class="crumb-sep">/</span>
			<a href="<?php echo esc_url( home_url( '/o-kompanii' ) ); ?>">About Company</a>
			<span class="crumb-sep">/</span>
			<span class="crumb-current">Careers</span>
		</div>
		<h1>Careers</h1>
		<div class="subnav-pills">
			<a href="<?php echo esc_url( home_url( '/o-kompanii' ) ); ?>">About Company</a>
			<a href="<?php echo esc_url( home_url( '/rukovodstvo' ) ); ?>">Management</a>
			<a href="<?php echo esc_url( home_url( '/istoriya-kompanii' ) ); ?>">History</a>
			<a href="<?php echo esc_url( home_url( '/sovet-direktorov' ) ); ?>">Board of Directors</a>
			<a href="<?php echo esc_url( home_url( '/filialy-i-predstavitelstv' ) ); ?>">Branches</a>
			<a href="<?php echo esc_url( home_url( '/vakansii' ) ); ?>" class="is-active">Careers</a>
		</div>
	</div>
</section>

<section class="page-content">
	<div class="container">
		<p class="page-lead">Current vacancies at Kedentransservice JSC can be found here.</p>

		<div class="page-section">
			<p>Full information on open positions at Kedentransservice JSC is available on the unified recruitment portal of NC Kazakhstan Temir Zholy JSC. At present, no separate list of vacancies is published on the company's official website — all current openings are posted on the portal below.</p>

			<div class="doc-list">
				<div class="doc-item">
					<span>Vacancies on the unified recruitment portal of NC Kazakhstan Temir Zholy JSC</span>
					<a href="https://job.railways.kz/kz/vacancy" target="_blank" rel="noopener">VIEW</a>
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
