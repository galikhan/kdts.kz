<?php
 /*
 * Template name: sovet-direktorov
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
			<span class="crumb-current">The Board of Directors</span>
		</div>
		<h1>The Board of Directors</h1>
		<div class="subnav-pills">
			<a href="<?php echo esc_url( home_url( '/o-kompanii' ) ); ?>">About Company</a>
			<a href="<?php echo esc_url( home_url( '/rukovodstvo' ) ); ?>">Management</a>
			<a href="<?php echo esc_url( home_url( '/istoriya-kompanii' ) ); ?>">History</a>
			<a href="<?php echo esc_url( home_url( '/sovet-direktorov' ) ); ?>" class="is-active">Board of Directors</a>
			<a href="<?php echo esc_url( home_url( '/filialy-i-predstavitelstv' ) ); ?>">Branches</a>
			<a href="<?php echo esc_url( home_url( '/vakansii' ) ); ?>">Careers</a>
		</div>
	</div>
</section>

<section class="page-content">
	<div class="container">
		<p class="page-lead">Information about the composition of the Board of Directors of Kedentransservice JSC.</p>

		<?php
		$board = array(
			array(
				'photo' => 'koishibayev.jpg',
				'name'  => 'Yerlan Koishibayev',
				'role'  => 'Chairman of the Board of Directors',
				'intro' => 'Chairman of the Board of Directors. Deputy Chairman of the Management Board for Logistics of NC Kazakhstan Temir Zholy JSC since 2023.',
				'full'  => array(
					'In 2002–2007 he earned a Bachelor\'s degree in Finance and Banking from the American University in Dubai, in 2015–2017 a Master\'s degree in Logistics from the Kazakh Academy of Transport and Communications, and in 2016–2018 an MBA from the Russian Presidential Academy of National Economy and Public Administration.',
					'He began his career in 2007 as an assistant to the Minister of Finance of the Republic of Kazakhstan, holding management positions between 2010 and 2019 at Samruk-Kazyna Invest LLP, the National Center for Transport Logistics Development JSC, Center for Transport Services JSC, KTZ Express JSC and Kazakhstan Institute of Industry Development JSC. From 2019 to 2021 he was Deputy Akim of Kostanay region, from 2021 to 2023 Managing Director for Logistics of NC Kazakhstan Temir Zholy JSC, and since 2023 Deputy Chairman of the Board for Logistics.',
				),
			),
			array(
				'photo' => 'kusherov.jpg',
				'name'  => 'Dair Kusherov',
				'role'  => 'Member of the Board of Directors',
				'intro' => 'Member of the Board of Directors. Managing Director for Finance of NC Kazakhstan Temir Zholy JSC since December 2018.',
				'full'  => array(
					'In 1998 he earned a Bachelor of Finance from Indiana University, and in 2001 graduated from the Kazakh State Academy of Management majoring in international economics.',
					'Between 1998 and 2012 he held management positions in accounting, risk management and corporate finance at Ak-Niet Management Company, ABN AMRO Asset Management, Intergas Central Asia JSC, KazTransGas JSC and KazTransOil JSC. From 2012 to 2018 he was Deputy General Director for Economics and Finance of KazTransGas JSC, and since December 2018 Managing Director for Finance of NC Kazakhstan Temir Zholy JSC.',
				),
			),
			array(
				'photo' => 'smolina.jpg',
				'name'  => 'Alexandra Smolina',
				'role'  => 'Member of the Board of Directors',
				'intro' => 'Member of the Board of Directors. Member of the Management Board and Head of Legal Service of NC KTZ JSC since February 13, 2024.',
				'full'  => array(
					'In 2008 she graduated from Kazakh Humanitarian and Law University majoring in International Law, and in 2018 earned Executive MBA degrees from the Kazakh-British Technical University and the Russian State University of Oil and Gas named after I.M. Gubkin.',
					'Between 2008 and 2019 she held legal and international-contracts positions at NC KazMunayGas JSC, and from 2019 to 2020 was Executive Director – Director of the Legal Department of Passenger Transportation JSC. From 2020 to 2022 she was Director of the International Contracts Department of NC Kazakhstan Temir Zholy JSC, since 2022 Head of the Legal Service – Director of the Legal Support Department, and since February 13, 2024, a member of the Board of NC KTZ JSC.',
				),
			),
			array(
				'photo' => 'mukhamedrakhimova.jpg',
				'name'  => 'Aigerim Mukhamedrakhimova',
				'role'  => 'Member of the Board of Directors',
				'intro' => 'Member of the Board of Directors. Director of the Marketing and Transit Policy Department of NC KTZ JSC, with the company since 2005.',
				'full'  => array(
					'She graduated from Taraz State University named after M.Kh. Dulaty and the Humanitarian University of Transport and Law named after D.A. Kunaev.',
					'She began her career in 2005 as chief specialist in the Marketing Department of the Corporate Development Department of NC KTZ JSC, later working as head of department and division within the Marketing and Logistics Department. She currently holds the position of Director of the Marketing and Transit Policy Department of NC KTZ JSC.',
				),
			),
			array(
				'photo' => 'urazbekov.jpg',
				'name'  => 'Marat Urazbekov',
				'role'  => 'Independent Member of the Board of Directors',
				'intro' => 'Independent Member of the Board of Directors, with over 35 years in the transport sector, including senior roles at Samruk-Kazyna and the LRT project.',
				'full'  => array(
					'In 1986 he graduated from the Almaty Institute of Railway Transport Engineers majoring in electromechanical engineering, and in 2000 from the Academy of Public Administration under the President of the Republic of Kazakhstan majoring in State and Municipal Administration.',
					'Between 1986 and 1999 he held management positions at the locomotive depot of Arys and at the Ministry of Transport and Communications of the RK, and from 2006 to 2008 chaired the ministry\'s Railway Transport and Communications Committee. From 2008 to 2017 he was Director for Transport Asset Management of Samruk-Kazyna Holding JSC, concurrently serving as a member of the boards of directors of NC KTZ JSC and Air Astana JSC. From 2017 to 2022 he was Deputy General Director of the LRT Construction Directorate LLP.',
				),
			),
			array(
				'photo' => 'akhanzaripov.jpg',
				'name'  => 'Nurlan Akhanzaripov',
				'role'  => 'Independent Member of the Board of Directors',
				'intro' => 'Independent Member of the Board of Directors, with over 22 years in the oil and gas sector, including 12 years as CFO; a Cert IoD certified independent director.',
				'full'  => array(
					'He graduated from Semipalatinsk Technological University majoring in accounting, Kazakh National Technical University named after K.I. Satpayev majoring in Geophysics, earned an MBA from the Kazakhstan Institute of Management, Economics and Forecasting, and is a Certified Independent Director (Cert IoD) of the Institute of Directors, UK.',
					'He has more than 22 years of experience in senior positions in the oil and gas sector, including more than 12 years as Financial Director at Kazakhoil-Commerce LLP, Intergas Central Asia JSC, KazTransGas JSC, NC KazMunayGas JSC and Beineu-Shymkent Gas Pipeline LLP, plus two years of international experience at Shell in the Sultanate of Oman. He has experience with listed companies including Alfa-Bank Kazakhstan JSC, NC Kazakhstan Engineering JSC, Intergas Central Asia JSC, KEGOC JSC and NC QazaqGaz JSC.',
				),
			),
		);
		$photo_base = home_url( '/wp-content/uploads/leadership/' );
		?>

		<div class="people-grid">
			<div class="people-row">
				<?php foreach ( array_slice( $board, 0, 3 ) as $p ) : ?>
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
				<?php foreach ( array_slice( $board, 3, 3 ) as $p ) : ?>
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
