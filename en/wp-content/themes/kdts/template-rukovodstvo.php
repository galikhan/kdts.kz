<?php
 /*
 * Template name: rukovodstvo
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
			<span class="crumb-current">Management</span>
		</div>
		<h1>Management</h1>
		<div class="subnav-pills">
			<a href="<?php echo esc_url( home_url( '/o-kompanii' ) ); ?>">About Company</a>
			<a href="<?php echo esc_url( home_url( '/rukovodstvo' ) ); ?>" class="is-active">Management</a>
			<a href="<?php echo esc_url( home_url( '/istoriya-kompanii' ) ); ?>">History</a>
			<a href="<?php echo esc_url( home_url( '/sovet-direktorov' ) ); ?>">Board of Directors</a>
			<a href="<?php echo esc_url( home_url( '/filialy-i-predstavitelstv' ) ); ?>">Branches</a>
			<a href="<?php echo esc_url( home_url( '/vakansii' ) ); ?>">Careers</a>
		</div>
	</div>
</section>

<section class="page-content">
	<div class="container">
		<p class="page-lead">Information about the General Director of Kedentransservice JSC and his deputies.</p>

		<?php
		$leaders = array(
			array(
				'photo' => 'zhumatayev.jpg',
				'name'  => 'Elnar Jumatayev',
				'role'  => 'General Director (Chairman of the Management Board)',
				'intro' => 'General Director of Kedentransservice JSC since October 17, 2024, with over 15 years of experience in transport and logistics.',
				'full'  => array(
					'Graduated from T. Ryskulov Kazakh Economic University (2008, Finance), the M. Tynyshpayev Kazakh Academy of Transport and Communications (2017, Logistics) and the Russian Presidential Academy of National Economy and Public Administration (2018, MBA); in 2024 earned a Master\'s degree in Management from St. Petersburg State University of Railway Transport of Emperor Alexander I.',
					'Since 2008 he has worked in transport and logistics companies and at KTZ Express JSC in various management roles; from 2019 to 2020 he was Director of the Logistics Department of Kaztemirtrans JSC, and from 2020 to 2024, Deputy General Director for Logistics of Kedentransservice JSC. He was appointed General Director of Kedentransservice JSC by resolution of the Board of Directors of NC Kazakhstan Temir Zholy JSC dated October 17, 2024.',
				),
			),
			array(
				'photo' => 'dyusembinov.jpg',
				'name'  => 'Nurzhan Dyusembinov',
				'role'  => 'Deputy General Director for Economics and Finance',
				'intro' => 'Deputy General Director for Economics and Finance since September 2, 2020, with over 20 years of experience in finance.',
				'full'  => array(
					'In 1997 he graduated from Akmola Agrarian University after S. Seifullin (Accounting and Audit), in 2002 from Kazakh University of Humanities and Law (Law), and in 2018 earned an Executive MBA from KIMEP University.',
					'Between 2002 and 2016 he held a series of management positions in finance and budget planning at KazTransOil JSC, KazTransGas-Almaty JSC and KazTransGas JSC, and from 2016 to 2020 served as Deputy General Director of KazTransGas Aimak JSC. Since September 2, 2020, he has been Deputy General Director for Economics and Finance of Kedentransservice JSC.',
				),
			),
			array(
				'photo' => 'tsoi.jpg',
				'name'  => 'Maxim Tsoi',
				'role'  => 'Deputy General Director for Logistics',
				'intro' => 'Deputy General Director for Logistics since October 21, 2024, holding management positions at the company since 2020.',
				'full'  => array(
					'In 2014 he graduated from Chang\'an University (Xi\'an, China) with a degree in International Economics and Trade, and in 2024 earned a Master\'s degree in Management from St. Petersburg State University of Railway Transport of Emperor Alexander I.',
					'From 2015 to 2020 he held management positions at KTZ Express JSC in customer service, corporate development and external relations, and from 2019 to 2020 was representative of the General Director at the Aktobe branch of Kaztemirtrans JSC. From 2020 to 2023 he was Director of the Logistics and Tariff Policy Department of Kedentransservice JSC, and from 2023 to 2024 Managing Sales Director. Since October 21, 2024, he has been Deputy General Director for Logistics.',
				),
			),
			array(
				'photo' => 'kubenov.jpg',
				'name'  => 'Kuat Kubenov',
				'role'  => 'Deputy General Director for Development',
				'intro' => 'Deputy General Director for Development since October 23, 2024, working at the company since 2010.',
				'full'  => array(
					'In 2003 he graduated from Omsk State University of Railway Communications with a degree in Economics.',
					'Between 2001 and 2010 he worked as a specialist in the Statistics Department of the Ministry of Finance of the RK and in the Department of Economy and Budget Planning of Pavlodar region. Since 2010 he has held positions at Kedentransservice JSC including Chief Specialist for Financial and Economic Affairs, Head of the Marketing and Tariff Policy Department, Executive Director of Sales, and Managing Director – Director of the Customer Service Department. In 2023 he served as Acting Managing Director for Sales at KTZ – Express JSC, and since October 23, 2024, Deputy General Director for Development of Kedentransservice JSC.',
				),
			),
			array(
				'photo' => 'orynbasar.jpg',
				'name'  => 'Askar Orynbassar',
				'role'  => 'Acting Chief Engineer',
				'intro' => 'Acting Chief Engineer since October 2024, working at the company in technical roles since 2007.',
				'full'  => array(
					'In 2007 he graduated from the M. Tynyshpayev Kazakh Academy of Transport and Communications in Almaty, majoring in Mechanical Engineer-Constructor.',
					'Since 2007 he has successively held positions as expert, manager and head of department in capital construction, technical operation and fixed-asset maintenance at Kedentransservice JSC. In 2023–2024 he was Director of the Technical Policy Department of KTZ EXPRESS JSC, and since October 2024, Chief Engineer – Director of the Department of Technical Policy and Industrial Safety of Kedentransservice JSC.',
				),
			),
			array(
				'photo' => 'kulakhmetov.jpg',
				'name'  => 'Yerden Kulakhmetov',
				'role'  => 'General Director of Kazakhstan Transport Holding LLP',
				'intro' => 'General Director of Kazakhstan Transport Holding LLP since November 2024, working in the transport sector since 2007.',
				'full'  => array(
					'In 2007 he graduated from the Kazakhstan University of Transport and Communications majoring in Transportation Organization and Management, and in 2021 from Almaty Management University «AlmaU» majoring in Business Administration.',
					'Since 2007 he has held a series of positions at Kaztransservice JSC at agency and branch level, serving as Managing Director of TLG Company LLP from 2016 to 2020. From 2020 to 2022 he was Deputy General Director for Terminal Operations Development of Kedentransservice JSC, from 2022 to 2024 General Director for Operational and Logistics Activities of Almaty Keden Auto LLP, and since November 2024 General Director of Kazakhstan Transport Holding LLP.',
				),
			),
		);
		$photo_base = home_url( '/wp-content/uploads/leadership/' );
		?>

		<div class="people-grid">
			<div class="people-row">
				<?php foreach ( array_slice( $leaders, 0, 3 ) as $p ) : ?>
				<div class="people-card">
					<div class="people-card-photo-wrap">
						<img class="people-card-photo" src="<?php echo esc_url( $photo_base . $p['photo'] ); ?>" alt="<?php echo esc_attr( $p['name'] ); ?>" loading="lazy">
					</div>
					<div class="people-card-body">
						<h3><?php echo esc_html( $p['name'] ); ?></h3>
						<p class="info-role"><?php echo esc_html( $p['role'] ); ?></p>
						<p><?php echo esc_html( $p['intro'] ); ?></p>
						<button type="button" class="people-more">Read more<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg></button>
						<div class="people-full" hidden>
							<?php foreach ( $p['full'] as $para ) : ?>
							<p><?php echo esc_html( $para ); ?></p>
							<?php endforeach; ?>
						</div>
					</div>
				</div>
				<?php endforeach; ?>
			</div>
			<div class="people-row">
				<?php foreach ( array_slice( $leaders, 3, 3 ) as $p ) : ?>
				<div class="people-card">
					<div class="people-card-photo-wrap">
						<img class="people-card-photo" src="<?php echo esc_url( $photo_base . $p['photo'] ); ?>" alt="<?php echo esc_attr( $p['name'] ); ?>" loading="lazy">
					</div>
					<div class="people-card-body">
						<h3><?php echo esc_html( $p['name'] ); ?></h3>
						<p class="info-role"><?php echo esc_html( $p['role'] ); ?></p>
						<p><?php echo esc_html( $p['intro'] ); ?></p>
						<button type="button" class="people-more">Read more<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg></button>
						<div class="people-full" hidden>
							<?php foreach ( $p['full'] as $para ) : ?>
							<p><?php echo esc_html( $para ); ?></p>
							<?php endforeach; ?>
						</div>
					</div>
				</div>
				<?php endforeach; ?>
			</div>
		</div>

		<div class="reception-block">
			<div class="reception-banner">
				<img class="reception-banner-img" src="<?php echo esc_url( get_template_directory_uri() . '/img/banner.png' ); ?>" alt="" loading="lazy">
				<p class="reception-banner-text"><span>Citizens'</span> reception schedule</p>
				<a class="reception-download-btn" href="https://kdts.kz/wp-content/uploads/2021/04/kdts_schedule_of_reception-2-2.pdf" target="_blank" rel="noopener">Download</a>
			</div>
			<div class="reception-form-card">
				<p class="reception-form-title">Online appointment request:</p>
				<form id="receptionForm" class="reception-form">
					<div class="reception-form-fields">
						<select required>
							<?php foreach ( $leaders as $p ) : ?>
							<option><?php echo esc_html( $p['name'] ); ?></option>
							<?php endforeach; ?>
						</select>
						<input type="text" required placeholder="Full name">
						<input type="tel" required placeholder="Phone">
						<input type="email" required placeholder="E-mail">
						<input type="date" required placeholder="Date">
						<input type="text" required placeholder="Purpose of visit">
						<button type="submit" class="reception-form-submit">Submit</button>
					</div>
					<p class="reception-form-sent">Your request has been received. We will contact you shortly.</p>
				</form>
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
