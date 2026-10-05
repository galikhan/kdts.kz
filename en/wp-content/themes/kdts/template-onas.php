<?php
 /*
 * Template name: o-kompanii
 */
?>
<?php get_header(); ?>

<section class="page-hero">
	<div class="container">
		<div class="breadcrumb">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
			<span class="crumb-sep">/</span>
			<span class="crumb-current">About Company</span>
		</div>
		<h1>About Company</h1>
		<div class="subnav-pills">
			<a href="<?php echo esc_url( home_url( '/o-kompanii' ) ); ?>" class="is-active">About Company</a>
			<a href="<?php echo esc_url( home_url( '/rukovodstvo' ) ); ?>">Management</a>
			<a href="<?php echo esc_url( home_url( '/istoriya-kompanii' ) ); ?>">History</a>
			<a href="<?php echo esc_url( home_url( '/sovet-direktorov' ) ); ?>">Board of Directors</a>
			<a href="<?php echo esc_url( home_url( '/filialy-i-predstavitelstv' ) ); ?>">Branches</a>
			<a href="<?php echo esc_url( home_url( '/vakansii' ) ); ?>">Careers</a>
		</div>
	</div>
</section>

<section class="page-content">
	<div class="container">
		<p class="page-lead"><?php echo esc_html( wp_strip_all_tags( CFS()->get( 'tekst1' ) ?: 'Today our company is a full-fledged operator, providing transport and logistics services not only in Kazakhstan, but also outside it.' ) ); ?></p>

		<div class="page-section">
			<h2>Our mission</h2>
			<p class="pull-quote">«As a systemically important transport company of Kazakhstan, we meet the needs of the national economy and society in terminal infrastructure management».</p>

			<h2>Our vision</h2>
			<p>We are a leading company providing terminal infrastructure services that are based on the principles of economic efficiency, safety, social and environmental responsibility.</p>
			<p>Strategic Goal - «Increase capitalization through growth of business scale and increase in operational efficiency».</p>
		</div>

		<div class="page-section">
			<h2>Our strategic goals</h2>
			<ul class="goal-list">
				<li><span class="goal-num">1</span><span>Improving the efficiency of terminal infrastructure management</span></li>
				<li><span class="goal-num">2</span><span>Promotion of transit transportation</span></li>
				<li><span class="goal-num">3</span><span>Increased customer satisfaction</span></li>
				<li><span class="goal-num">4</span><span>Digitalization</span></li>
				<li><span class="goal-num">5</span><span>Implementation of ESG principles</span></li>
				<li><span class="goal-num">6</span><span>Guaranteeing the safety of production activities</span></li>
			</ul>
			<p>We aim to continually develop our services and to meet high standards of quality, environmental, health and safety in the delivery of our services.</p>
		</div>

		<div class="page-section">
			<h2>Management system certification</h2>
			<p>In 2021, based on the results of the certification audit, the Company confirmed the compliance of its management systems (Quality Management System (QMS), Environmental Management System (EMS), Occupational Health and Safety Management System (OHSMS)) with the requirements of international standards.</p>
			<p>In 2024, the Company once again successfully passed a surveillance audit conducted by TÜV Rheinland Kazakhstan LLP, which is the exclusive representative of TÜV Rheinland in the countries of the Eurasian Economic Union. The audit results confirmed the compliance of the Company's integrated management system with the requirements of international standards ISO 9001:2015, ISO 14001:2015, ISO 45001:2018.</p>
		</div>

		<div class="page-section">
			<h2>Partnerships</h2>
			<div class="stat-grid">
				<div class="stat-item">
					<div class="stat-num"><?php echo esc_html( CFS()->get( 'tsifr1' ) ?: '50' ); ?></div>
					<p>Transport and logistics and operator companies in Central and South-East Asia, China and Europe</p>
				</div>
				<div class="stat-item">
					<div class="stat-num">150+</div>
					<p>Freight forwarding companies are our clients</p>
				</div>
			</div>
			<p>Today, JSC Kedentransservice has established partnerships with 50 transport, logistics and operator companies in Central and Southeast Asia, China and Europe. In addition, more than 150 freight forwarding companies are our clients. As a bridge between Europe and Asia, in cooperation with our partners, we strive to become a center of transport competence and the development of universal logistics.</p>
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
