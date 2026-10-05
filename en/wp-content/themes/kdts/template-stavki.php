<?php
 /*
 * Template name: stavki-i-tarify
 */
?>
<?php get_header(); ?>
<?php
/*
 * Files on the original site live under /wp-content/uploads/. Use the local copy when it
 * exists (so the page works from this server), otherwise point to the original file.
 */
if ( ! function_exists( 'kdts_stavki_card' ) ) {
	function kdts_stavki_local_url( $live_url ) {
		if ( false !== ( $pos = strpos( $live_url, '/wp-content/uploads/' ) ) ) {
			$rel = substr( $live_url, $pos + strlen( '/wp-content/uploads/' ) );
			$u   = wp_upload_dir();
			if ( file_exists( $u['basedir'] . '/' . $rel ) ) {
				return $u['baseurl'] . '/' . $rel;
			}
		}
		return $live_url;
	}
	function kdts_stavki_card( $live_url, $title ) {
		$ext = strtoupper( pathinfo( parse_url( $live_url, PHP_URL_PATH ), PATHINFO_EXTENSION ) );
		if ( ! $live_url ) {
			echo '<div class="doc-card is-disabled"><div class="doc-card-top"><span class="doc-card-icon">' . esc_html( $ext ?: 'DOC' ) . '</span></div><p>' . esc_html( $title ) . '</p></div>';
			return;
		}
		$url   = $live_url;
		$bytes = 0;
		if ( false !== ( $pos = strpos( $live_url, '/wp-content/uploads/' ) ) ) {
			$rel = substr( $live_url, $pos + strlen( '/wp-content/uploads/' ) );
			$u   = wp_upload_dir();
			if ( file_exists( $u['basedir'] . '/' . $rel ) ) {
				$url   = $u['baseurl'] . '/' . $rel;
				$bytes = filesize( $u['basedir'] . '/' . $rel );
			}
		}
		$size = $bytes ? ( $bytes >= 1048576 ? round( $bytes / 1048576, 1 ) . ' MB' : round( $bytes / 1024 ) . ' KB' ) : '';
		echo '<a class="doc-card" href="' . esc_url( $url ) . '" target="_blank" rel="noopener"><div class="doc-card-top"><span class="doc-card-icon">' . esc_html( $ext ) . '</span><span class="doc-card-size">' . esc_html( $size ) . '</span></div><p>' . esc_html( $title ) . '</p></a>';
	}
}
?>

<section class="page-hero">
	<div class="container">
		<div class="breadcrumb">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
			<span class="crumb-sep">/</span>
			<span class="crumb-current">Rates and Tariffs</span>
		</div>
		<h1>Rates and Tariffs</h1>
		<div class="subnav-pills">
			<a href="<?php echo esc_url( home_url( '/obyavleniya' ) ); ?>">Announcements</a>
			<a href="<?php echo esc_url( home_url( '/stavki-i-tarify' ) ); ?>" class="is-active">Rates and Tariffs</a>
			<a href="<?php echo esc_url( home_url( '/park-platform-i-konteynerov' ) ); ?>">Park of platforms</a>
			<a href="<?php echo esc_url( home_url( '/tipovye-dogovora' ) ); ?>">Standard contracts</a>
			<a href="<?php echo esc_url( home_url( '/uchreditelnye-dokumenty' ) ); ?>">Constituent documents</a>
		</div>
	</div>
</section>

<section class="page-content">
	<div class="container">
		<p class="page-lead"><strong>Dear Partners!</strong></p>

		<div class="page-section">
			<p>Kedentransservice Joint-Stock Company (hereinafter referred to as the Company) expresses its gratitude for your cooperation and hereby notifies you that, effective <strong>September 1, 2026</strong>, additional transshipment services will be introduced by the Company’s branches at the Dostyk and Altynkol stations.</p>
			<p>We are pleased to expand the range of services provided and hope that these changes will enhance the convenience and efficiency of your interactions with the Company.</p>
			<p>In connection with the introduction of these additional services, please take these changes into account when planning your shipments and using the Company’s services.</p>
			<p>You can find the current rates for these services in the «<strong>Rates and Tariffs</strong>» section on the Company’s official website.</p>
			<p>We hereby inform you about the rates of JSC «Kedentraservice» for the services of organizing container transportation as part of regular container trains from Kazakhstan to China, operating from 01.04.2026 to 30.04.2026 inclusive. The bets are placed in the Bets and Tariffs section.</p>
			<p>If you have any additional questions, please send all written requests to wagon@kdts.kz</p>
			<p><a href="https://my.kdts.kz/login" target="_blank" rel="noopener" class="btn btn-primary">Calculate the rate and tariffs</a></p>
		</div>

		<div class="doc-card-grid cols-2">
			<?php
			kdts_stavki_card( 'https://www.kdts.kz/en/wp-content/uploads/2026/07/KP-Klienty-avgust-2026-selh-produ.pdf', 'Kedentrasservice JSC provides a new container train service in the Kazakhstan-China export service.' );
			kdts_stavki_card( 'https://www.kdts.kz/en/wp-content/uploads/2026/02/KP-FTG-Almaty-NOD-GP-12-Aprel.pdf', 'Organization of export grines transport with poluwagons on Almaty-1 - nod-2/nod-1 - prc.' );
			?>
		</div>

		<div class="page-section">
			<h2>Tariff appendices</h2>
			<ol class="tariff-steps">
				<li>
					<span class="goal-num">1</span>
					<div class="tariff-step-body">
						<p>The operator's tariffs in the national communication are set by the Price List</p>
						<div class="doc-card-grid">
							<?php
							kdts_stavki_card( 'https://www.kdts.kz/en/wp-content/uploads/2021/03/Prejskurant-KDTS-Prilozhenie-1-4.xlsx', 'application 1' );
							?>
						</div>
					</div>
				</li>
				<li>
					<span class="goal-num">2</span>
					<div class="tariff-step-body">
						<p>The operator's tariffs in international communication (import) through the frontier junction station Dostyk Exp., Altynkol Exp. are set by the Price List</p>
						<div class="doc-card-grid">
							<?php
							kdts_stavki_card( 'https://www.kdts.kz/en/wp-content/uploads/2021/03/Prejskurant-KDTS-Prilozhenie-2-1.xlsx', 'application 2' );
							?>
						</div>
					</div>
				</li>
				<li>
					<span class="goal-num">3</span>
					<div class="tariff-step-body">
						<p>The operator's tariffs in international communication (transit) through the frontier junction stations Dostyk Exp. and Altynkol Exp. are set by the Price List:</p>
						<div class="doc-card-grid">
							<?php
							kdts_stavki_card( 'https://www.kdts.kz/en/wp-content/uploads/2021/03/Prejskurant-KDTS-Prilozhenie-3-1-1.xlsx', 'Appendix 3 — from Altynkol station as an export destination to the Republic of Uzbekistan.' );
							kdts_stavki_card( 'https://www.kdts.kz/en/wp-content/uploads/2021/03/Prejskurant-KDTS-Prilozhenie-4.xlsx', 'Appendix 4 — from Dostyk station as an export destination to the Republic of Uzbekistan.' );
							kdts_stavki_card( 'https://www.kdts.kz/en/wp-content/uploads/2021/03/Prejskurant-KDTS-Prilozhenie-5.xlsx', 'Appendix 5 — from Altynkol station as an export destination in the Kyrgyz Republic.' );
							kdts_stavki_card( 'https://www.kdts.kz/en/wp-content/uploads/2021/03/Prejskurant-KDTS-Prilozhenie-6.xlsx', 'Appendix 6 — from Dostyk station as an export destination in the Kyrgyz Republic.' );
							kdts_stavki_card( '', 'Appendix 7 — from the Altynkol station with an express destination to the Kyrgyz Republic (via the Saryagash exp.)' );
							kdts_stavki_card( '', 'Appendix 8 — from the Dostyk express station to the Kyrgyz Republic (via the Saryagash exp.)' );
							kdts_stavki_card( '', 'Appendix 9 — from Altynkol express station to the Republic of Turkmenistan (via the Bolashak exp.)' );
							kdts_stavki_card( '', 'Appendix 10 — from the Dostyk express station to the Republic of Turkmenistan (via the Bolashak exp.)' );
							kdts_stavki_card( '', 'Appendix 11 — from Altynkol express station to the Republic of Turkmenistan (via the Saryagash exp)' );
							kdts_stavki_card( '', 'Appendix 12 — from Altynkol Express station to the Republic of Turkmenistan (via the Saryagash express station).)' );
							kdts_stavki_card( '', 'Appendix 13 — from Altynkol express station to the Republic of Tajikistan (via the Saryagash exp.)' );
							kdts_stavki_card( '', 'Appendix 14 — from the Dostyk express station to the Republic of Tajikistan (via the Saryagash exp.)' );
							?>
						</div>
					</div>
				</li>
				<li>
					<span class="goal-num">4</span>
					<div class="tariff-step-body">
						<p>In addition, you can calculate operating and forwarding tariffs by contacting Kedentransservice JSC via wagon@kdts.kz</p>
					</div>
				</li>
				<li>
					<span class="goal-num">5</span>
					<div class="tariff-step-body">
						<p>Tariff calculation application form:</p>
						<div class="doc-card-grid"><?php kdts_stavki_card( 'https://www.kdts.kz/en/wp-content/uploads/2021/03/Forma-zayavki-na-raschet-tarifa-4.xlsx', 'Application form' ); ?></div>
					</div>
				</li>
				<li>
					<span class="goal-num">6</span>
					<div class="tariff-step-body">
						<p>In order to reduce the time required to process a response to an enquiry, the rates are provided by e-mail. Please note that the official rates are sent by the managers of Kedentransservice JSC only from the email addresses of the corporate domain kdts.kz</p>
					</div>
				</li>
			</ol>
		</div>

		<div class="page-section">
			<h2>Tariff conditions</h2>
			<div class="doc-card-grid">
				<?php
				kdts_stavki_card( 'https://www.kdts.kz/en/wp-content/uploads/2021/04/58fff6cf4e0ccccc2422d8e8da5a960d-10-2.doc', 'JSC "Kedentransservice" announces tariff conditions for the transportation of goods for a single shipment of wagons. The rates are valid from December 1 to December 31, 2020 and include 5 services' );
				kdts_stavki_card( 'https://www.kdts.kz/en/wp-content/uploads/2021/04/5690bb137b5cbd2c5c8a2eda601773cf-3-1.pdf', 'Notification of changes in the rates for the services of the car operator in international and domestic transport from December 1, 2020' );
				kdts_stavki_card( 'https://www.kdts.kz/en/wp-content/uploads/2021/04/1b802209aa3ca9a5f1aca1ae02ee9ccb-11.docx', 'In response to changes in the conditions for calculating tariffs for the services of the operator of wagons owned by JSC "Kedentransservice" on the property rights or other grounds, the tariffs for 2020 have been revised downward, in particular, on the route Altynkol-Tashkent junction. These tariffs will be applied from June 01, 2020. These tariffs will be applied from June 01, 2020:' );
				kdts_stavki_card( 'https://www.kdts.kz/en/wp-content/uploads/2021/04/ceb984c7e11eb33215eb9529045d26f5-1-9.pdf', 'In response to changes in the conditions for calculating tariffs for the services of the operator of wagons owned by JSC "Kedentransservice" on the property rights or other grounds, the tariffs for 2020 have been revised downward, in particular, on the route Altynkol-Tashkent junction. These tariffs will be applied from June 01, 2020. Notification to customers on OPP dated 27.05.2020' );
				kdts_stavki_card( 'https://www.kdts.kz/en/wp-content/uploads/2021/04/1c8bae8f0c76b476f8bc73baaa2298e6-8.docx', 'The tariff of the wagon operator from May 01, 2020.' );
				kdts_stavki_card( '', 'Wagon operator\'s tariff' );
				kdts_stavki_card( 'https://www.kdts.kz/en/wp-content/uploads/2021/04/01be64f5c3fc2da872b18b0b5052c949-14.pdf', 'Notification of changes in rates from to OP via Dostyk/Altynkol from January 1, 2020.' );
				kdts_stavki_card( 'https://www.kdts.kz/en/wp-content/uploads/2026/04/Terminalnoe-obsluzhivanie-vagonov-po-kompleksnoj-stavke-na-2026-god-1.pdf', 'Terminal service of wagons at a comprehensive rate from December 27, 2023' );
				kdts_stavki_card( 'https://www.kdts.kz/en/wp-content/uploads/2026/04/Terminalnoe-obsluzhivanie-kontejnerov-po-kompleksnoj-stavke-na-2026-god-1.pdf', 'Terminal services for containers at a comprehensive rate from December 27, 2023' );
				?>
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
