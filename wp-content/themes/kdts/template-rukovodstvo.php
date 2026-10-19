<?php
 /*
 * Template name: rukovodstvo
 */
?>
<?php get_header(); ?>

<section class="page-hero">
	<div class="container">
		<div class="breadcrumb">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Басты бет</a>
			<span class="crumb-sep">/</span>
			<a href="<?php echo esc_url( home_url( '/kompaniya-turaly' ) ); ?>">Компания туралы</a>
			<span class="crumb-sep">/</span>
			<span class="crumb-current">Басшылық</span>
		</div>
		<h1>Басшылық</h1>
		<div class="subnav-pills">
			<a href="<?php echo esc_url( home_url( '/kompaniya-turaly' ) ); ?>">Компания туралы</a>
			<a href="<?php echo esc_url( home_url( '/basshyly' ) ); ?>" class="is-active">Басшылық</a>
			<a href="<?php echo esc_url( home_url( '/kompaniyanyn-tarihy' ) ); ?>">Компанияның тарихы</a>
			<a href="<?php echo esc_url( home_url( '/direktorlar-kenesi' ) ); ?>">Директорлар кеңесі</a>
			<a href="<?php echo esc_url( home_url( '/filialdar-zh-ne-kildikter' ) ); ?>">Филиалдар және өкілдіктер</a>
			<a href="<?php echo esc_url( home_url( '/bos-zhumys-oryndary' ) ); ?>">Бос жұмыс орындары</a>
			<a href="<?php echo esc_url( home_url( '/tilderdi-damytu' ) ); ?>">Тілдерді дамыту</a>
		</div>
	</div>
</section>

<section class="page-content">
	<div class="container">
		<p class="page-lead">«Кедентранссервис» АҚ бас директоры және оның орынбасарлары туралы ақпарат.</p>

		<?php
		$leaders = array(
			array(
				'photo' => 'zhumatayev.jpg',
				'name'  => 'Жұматаев Елнар Ерікұлы',
				'role'  => 'Бас директор (Басқарма төрағасы)',
				'intro' => '2024 жылдың 17 қазанынан бастап «Кедентранссервис» АҚ бас директоры. Көлік-логистика саласында 15 жылдан астам тәжірибелі.',
				'full'  => array(
					'Т.Рысқұлов атындағы Қазақ экономикалық университетін (2008, «Қаржы»), М.Тынышпаев атындағы Қазақ көлік және коммуникациялар академиясын (2017, «Логистика») және Ресей халық шаруашылығы және мемлекеттік қызмет академиясын (2018, MBA) бітірген, 2024 жылы Санкт-Петербург мемлекеттік көлік университетінде «Менеджмент» мамандығы бойынша магистр дәрежесін алған.',
					'2008 жылдан бастап көлік-логистикалық компанияларда, «KTZ Express» АҚ-та әртүрлі басшылық қызметтерде, 2019-2020 жж. «Қазтеміртранс» АҚ Логистика департаментінің директоры, 2020-2024 жж. «Кедентранссервис» АҚ бас директорының логистика жөніндегі орынбасары қызметтерін атқарған. «Қазақстан темір жолы» ҰК» АҚ Директорлар кеңесінің 2024 жылғы 17 қазандағы шешімімен «Кедентранссервис» АҚ бас директоры қызметіне тағайындалды.',
				),
			),
			array(
				'photo' => 'dyusembinov.jpg',
				'name'  => 'Дюсембинов Нұржан Шайқслямұлы',
				'role'  => 'Бас директордың экономика және қаржы жөніндегі орынбасары',
				'intro' => '2020 жылғы 2 қыркүйектен бастап бас директордың экономика және қаржы жөніндегі орынбасары. Қаржы саласында 20 жылдан астам тәжірибелі.',
				'full'  => array(
					'1997 жылы С.Сейфуллин атындағы Ақмола аграрлық университетін («Бухгалтерлік есеп және аудит»), 2002 жылы Қазақ гуманитарлық-заң университетін («Құқықтану»), 2018 жылы КИМЭП Университетінде Executive MBA дәрежесін алған.',
					'2002-2016 жж. «ҚазТрансОйл», «ҚазТрансГаз-Алматы» және «ҚазТрансГаз» АҚ-ларында қаржы және бюджеттік жоспарлау бағытында әртүрлі басшылық қызметтер атқарған, 2016-2020 жж. «ҚазТрансАймақ» АҚ бас директорының орынбасары болған. 2020 жылғы 2 қыркүйектен бастап «Кедентранссервис» АҚ бас директорының экономика және қаржы жөніндегі орынбасары қызметін атқарады.',
				),
			),
			array(
				'photo' => 'tsoi.jpg',
				'name'  => 'Цой Максим Тимофеевич',
				'role'  => 'Бас директордың логистика жөніндегі орынбасары',
				'intro' => '2024 жылғы 21 қазаннан бастап бас директордың логистика жөніндегі орынбасары. Компанияда 2020 жылдан бастап басшылық қызметтер атқарған.',
				'full'  => array(
					'2014 жылы Чанъань университетін (Сиань қ., ҚХР, «Халықаралық экономика және сауда»), 2024 жылы Санкт-Петербург мемлекеттік көлік университетінде «Менеджмент» мамандығы бойынша магистр дәрежесін алған.',
					'2015-2020 жж. «KTZ Express» АҚ-та тұтынушыларға қызмет көрсету, корпоративтік даму және сыртқы байланыстар бағыттарында менеджерлік қызметтер, 2019-2020 жж. «Қазтеміртранс» АҚ Ақтөбе филиалы бас директорының өкілі болған. 2020-2023 жж. «Кедентранссервис» АҚ Логистика және тарифтік саясат департаментінің директоры, 2023-2024 жж. сату жөніндегі басқарушы директоры қызметін атқарған. 2024 жылғы 21 қазаннан бастап бас директордың логистика жөніндегі орынбасары.',
				),
			),
			array(
				'photo' => 'kubenov.jpg',
				'name'  => 'Көбенов Қуат Манапұлы',
				'role'  => 'Бас директордың даму жөніндегі орынбасары',
				'intro' => '2024 жылғы 23 қазаннан бастап бас директордың даму жөніндегі орынбасары. Компанияда 2010 жылдан бері жұмыс істейді.',
				'full'  => array(
					'2003 жылы Омбы мемлекеттік қатынас жолдары университетін «Экономика» мамандығы бойынша бітірген.',
					'2001-2010 жж. Қазақстан Республикасы Қаржы министрлігі Статистика басқармасында және Павлодар облысы Экономика және бюджеттік жоспарлау департаментінде әртүрлі маман қызметтерін атқарған. 2010 жылдан бастап «Кедентранссервис» АҚ-та қаржы-экономикалық мәселелер жөніндегі бас маман, маркетинг және тарифтік саясат басқармасының бастығы, сату жөніндегі атқарушы директор және клиенттерге қызмет көрсету департаментінің басқарушы директоры қызметтерін атқарған. 2023 жылы «KTZ-Express» АҚ сату жөніндегі басқарушы директорының міндетін атқарушы болған, 2024 жылғы 23 қазаннан бастап «Кедентранссервис» АҚ бас директорының даму жөніндегі орынбасары.',
				),
			),
			array(
				'photo' => 'orynbasar.jpg',
				'name'  => 'Орынбасар Асқар Орынбасарұлы',
				'role'  => 'Бас инженердің міндетін атқарушы',
				'intro' => '2024 жылдың қазанынан бастап бас инженердің міндетін атқарушы. Компанияда 2007 жылдан бері техникалық бағытта жұмыс істейді.',
				'full'  => array(
					'2007 жылы М.Тынышпаев атындағы Қазақ көлік және коммуникациялар академиясын (Алматы қ.) «Инженер-механик-құрылысшы» мамандығы бойынша бітірген.',
					'2007 жылдан бастап «Кедентранссервис» АҚ-ның капиталды құрылыс, техникалық басқару және негізгі құралдарды пайдалану бағыттарында сарапшы, менеджер және басқарма/департамент басшысы қызметтерін кезең-кезеңімен атқарған. 2023-2024 жж. «KTZ EXPRESS» АҚ техникалық саясат департаментінің директоры болған. 2024 жылдың қазанынан бастап «Кедентранссервис» АҚ-ның техникалық саясат және өндірістік қауіпсіздік департаментінің бас инженері - директоры.',
				),
			),
			array(
				'photo' => 'kulakhmetov.jpg',
				'name'  => 'Құлахметов Ерден Әбдімажитұлы',
				'role'  => '«Қазақстан көлік холдингі» ЖШС-нің бас директоры',
				'intro' => '2024 жылдың қарашасынан бастап «Қазақстан көлік холдингі» ЖШС бас директоры. Көлік саласында 2007 жылдан бері жұмыс істейді.',
				'full'  => array(
					'2007 жылы Қазақстандық жолдар және хабарламалар университетін «Тасымалдауды ұйымдастыру және басқару» мамандығы бойынша, 2021 жылы Almaty Management University «AlmaU»-ды «Іскерлік әкімшілендіру» мамандығы бойынша бітірген.',
					'2007 жылдан бастап «Қазтранссервис» АҚ-та агенттік және филиал деңгейінде әртүрлі басшы қызметтерін атқарған, 2016-2020 жж. «TLG Company» ЖШС басқарушы директоры болған. 2020-2022 жж. «Кедентранссервис» АҚ терминалдар қызметін дамыту жөніндегі бас директордың орынбасары, 2022-2024 жж. «Almaty Keden Auto» ЖШС операциялық және логистикалық қызмет бойынша бас директоры қызметтерін атқарған. 2024 жылдың қарашасынан бастап «Қазақстан көлік холдингі» ЖШС бас директоры.',
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
						<button type="button" class="people-more">Толығырақ<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg></button>
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
						<button type="button" class="people-more">Толығырақ<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg></button>
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
				<p class="reception-banner-text"><span>Азаматтарды</span> қабылдау кестесі</p>
				<a class="reception-download-btn" href="https://kdts.kz/wp-content/uploads/2021/04/kdts_schedule_of_reception-2-2.pdf" target="_blank" rel="noopener">Жүктеу</a>
			</div>
			<div class="reception-form-card">
				<p class="reception-form-title">Қабылдауға онлайн-өтінім:</p>
				<form id="receptionForm" class="reception-form">
					<div class="reception-form-fields">
						<select required>
							<?php foreach ( $leaders as $p ) : ?>
							<option><?php echo esc_html( $p['name'] ); ?></option>
							<?php endforeach; ?>
						</select>
						<input type="text" required placeholder="Аты-жөні">
						<input type="tel" required placeholder="Телефон">
						<input type="email" required placeholder="E-mail">
						<input type="date" required placeholder="Күні">
						<input type="text" required placeholder="Сапардың мақсаты">
						<button type="submit" class="reception-form-submit">Жазылу</button>
					</div>
					<p class="reception-form-sent">Өтінішіңіз қабылданды. Жақын арада хабарласамыз.</p>
				</form>
			</div>
		</div>
	</div>
</section>

<section class="cta-banner">
	<div class="container cta-inner">
		<h2>ЖҮКТЕРІҢІЗДІ ЖЕТКІЗУГЕ ДАЙЫНБЫЗ</h2>
		<p>
			<span>Тарифті есептеу үшін өтінім қалдырыңыз немесе тікелей байланысыңыз:</span>
			<span class="cta-phones"><?php echo esc_html( CFS()->get( 'telefon1', 606 ) ); ?></span>
		</p>
		<div class="cta-buttons">
			<a href="https://my.kdts.kz/" target="_blank" rel="noopener" class="btn btn-primary">ТАРИФТІ ЕСЕПТЕУ</a>
			<a href="<?php echo esc_url( get_permalink( 606 ) ); ?>" class="btn btn-outline-light">БАЙЛАНЫСУ</a>
		</div>
	</div>
</section>

<?php get_footer(); ?>
