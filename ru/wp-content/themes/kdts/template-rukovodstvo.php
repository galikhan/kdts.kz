<?php
 /*
 * Template name: rukovodstvo
 */
?>
<?php get_header(); ?>

<section class="page-hero">
	<div class="container">
		<div class="breadcrumb">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Главная</a>
			<span class="crumb-sep">/</span>
			<a href="<?php echo esc_url( home_url( '/o-kompanii' ) ); ?>">О компании</a>
			<span class="crumb-sep">/</span>
			<span class="crumb-current">Руководство</span>
		</div>
		<h1>Руководство</h1>
		<div class="subnav-pills">
			<a href="<?php echo esc_url( home_url( '/o-kompanii' ) ); ?>">О компании</a>
			<a href="<?php echo esc_url( home_url( '/rukovodstvo' ) ); ?>" class="is-active">Руководство</a>
			<a href="<?php echo esc_url( home_url( '/istoriya-kompanii' ) ); ?>">История компании</a>
			<a href="<?php echo esc_url( home_url( '/sovet-direktorov' ) ); ?>">Совет директоров</a>
			<a href="<?php echo esc_url( home_url( '/filialy-i-predstavitelstv' ) ); ?>">Филиалы и представительства</a>
			<a href="<?php echo esc_url( home_url( '/vakansii' ) ); ?>">Вакансии</a>
			<a href="<?php echo esc_url( home_url( '/razvitie-yazykov' ) ); ?>">Развитие языков</a>
		</div>
	</div>
</section>

<section class="page-content">
	<div class="container">
		<p class="page-lead">Информация о Генеральном директоре АО «Кедентранссервис» и его заместителях.</p>

		<?php
		$leaders = array(
			array(
				'photo' => 'zhumatayev.jpg',
				'name'  => 'Джуматаев Эльнар Эрикович',
				'role'  => 'Генеральный директор (Председатель Правления)',
				'intro' => 'С 17 октября 2024 года — Генеральный директор АО «Кедентранссервис». Более 15 лет опыта в транспортно-логистической отрасли.',
				'full'  => array(
					'Окончил Казахский экономический университет им. Т. Рыскулова (2008, «Финансы»), Казахскую академию транспорта и коммуникаций им. М. Тынышпаева (2017, «Логистика») и Российскую академию народного хозяйства и государственной службы при Президенте РФ (2018, MBA); в 2024 году получил степень магистра по специальности «Менеджмент» в Петербургском государственном университете путей сообщения имени Императора Александра I.',
					'С 2008 года работал в транспортно-логистических компаниях и АО «KTZ Express» на различных руководящих должностях, в 2019–2020 гг. — директор Департамента логистики АО «Қазтеміртранс», в 2020–2024 гг. — заместитель Генерального директора по логистике АО «Кедентранссервис». Решением Совета директоров АО «НК «Қазақстан темір жолы» от 17 октября 2024 года назначен Генеральным директором АО «Кедентранссервис».',
				),
			),
			array(
				'photo' => 'dyusembinov.jpg',
				'name'  => 'Дюсембинов Нуржан Шайкслямович',
				'role'  => 'Заместитель генерального директора по экономике и финансам',
				'intro' => 'С 2 сентября 2020 года — заместитель Генерального директора по экономике и финансам. Более 20 лет опыта в финансовой сфере.',
				'full'  => array(
					'В 1997 году окончил Акмолинский аграрный университет им. С. Сейфуллина («Бухгалтерский учёт и аудит»), в 2002 году — Казахский гуманитарно-юридический университет («Юриспруденция»), в 2018 году получил степень Executive MBA в Университете «КИМЭП».',
					'В 2002–2016 гг. занимал ряд руководящих должностей в области финансов и бюджетного планирования в АО «КазТрансОйл», АО «КазТрансГаз-Алматы» и АО «КазТрансГаз», в 2016–2020 гг. — заместитель Генерального директора АО «КазТрансГаз Аймак». С 2 сентября 2020 года — заместитель Генерального директора по экономике и финансам АО «Кедентранссервис».',
				),
			),
			array(
				'photo' => 'tsoi.jpg',
				'name'  => 'Цой Максим Тимофеевич',
				'role'  => 'Заместитель Генерального директора по логистике',
				'intro' => 'С 21 октября 2024 года — заместитель Генерального директора по логистике. В компании на руководящих должностях с 2020 года.',
				'full'  => array(
					'В 2014 году окончил Чанъаньский университет (г. Сиань, Китай, «Международная экономика и торговля»), в 2024 году получил степень магистра по специальности «Менеджмент» в Петербургском государственном университете путей сообщения имени Императора Александра I.',
					'В 2015–2020 гг. занимал менеджерские должности в АО «KTZ Express» в сферах обслуживания клиентов, корпоративного развития и внешних связей, в 2019–2020 гг. — представитель Генерального директора Актюбинского филиала АО «Қазтеміртранс». В 2020–2023 гг. — директор Департамента логистики и тарифной политики АО «Кедентранссервис», в 2023–2024 гг. — Управляющий директор по продажам. С 21 октября 2024 года — заместитель Генерального директора по логистике.',
				),
			),
			array(
				'photo' => 'kubenov.jpg',
				'name'  => 'Кубенов Куат Манапович',
				'role'  => 'Заместитель генерального директора по развитию',
				'intro' => 'С 23 октября 2024 года — заместитель Генерального директора по развитию. В компании работает с 2010 года.',
				'full'  => array(
					'В 2003 году окончил Омский государственный университет путей сообщения по специальности «Экономика».',
					'В 2001–2010 гг. работал специалистом в Управлении статистики Министерства финансов РК и в Департаменте экономики и бюджетного планирования Павлодарской области. С 2010 года занимал в АО «Кедентранссервис» должности главного специалиста по финансово-экономическим вопросам, начальника Управления по маркетингу и тарифной политике, Исполнительного директора по продажам и Управляющего директора – директора Департамента по обслуживанию клиентов. В 2023 году исполнял обязанности Управляющего директора по продажам АО «KTZ – Express», с 23 октября 2024 года — заместитель Генерального директора по развитию АО «Кедентранссервис».',
				),
			),
			array(
				'photo' => 'orynbasar.jpg',
				'name'  => 'Орынбасар Аскар Орынбасарулы',
				'role'  => 'Исполняющий обязанности главного инженера',
				'intro' => 'С октября 2024 года — исполняющий обязанности главного инженера. В компании с 2007 года на технических должностях.',
				'full'  => array(
					'В 2007 году окончил Казахскую академию транспорта и коммуникаций имени М. Тынышпаева (г. Алматы) по специальности «Инженер-механик-строитель».',
					'С 2007 года последовательно занимал должности эксперта, менеджера и начальника управления в сферах капитального строительства, технической эксплуатации и обеспечения основных средств АО «Кедентранссервис». В 2023–2024 гг. — директор Департамента технической политики АО «KTZ EXPRESS», с октября 2024 года — Главный инженер – директор Департамента технической политики и производственной безопасности АО «Кедентранссервис».',
				),
			),
			array(
				'photo' => 'kulakhmetov.jpg',
				'name'  => 'Кулахметов Ерден Абдумажитович',
				'role'  => 'Генеральный директор ТОО «Транспортный холдинг Казахстана»',
				'intro' => 'С ноября 2024 года — Генеральный директор ТОО «Транспортный холдинг Казахстана». В транспортной сфере с 2007 года.',
				'full'  => array(
					'В 2007 году окончил Казахстанский университет путей сообщения по специальности «Организация перевозок и управление», в 2021 году — Almaty Management University «AlmaU» по специальности «Деловое администрирование».',
					'С 2007 года занимал ряд должностей в АО «Казтранссервис» на агентском и филиальном уровне, в 2016–2020 гг. — Управляющий директор ТОО «TLG Company». В 2020–2022 гг. — заместитель Генерального директора по развитию деятельности терминалов АО «Кедентранссервис», в 2022–2024 гг. — Генеральный директор по операционной и логистической деятельности ТОО «Almaty Keden Auto», с ноября 2024 года — Генеральный директор ТОО «Транспортный холдинг Казахстана».',
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
						<button type="button" class="people-more">Подробнее<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg></button>
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
						<button type="button" class="people-more">Подробнее<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg></button>
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
				<p class="reception-banner-text"><span>График приёма</span> граждан</p>
				<a class="reception-download-btn" href="https://kdts.kz/wp-content/uploads/2021/04/kdts_schedule_of_reception-2-2.pdf" target="_blank" rel="noopener">Скачать</a>
			</div>
			<div class="reception-form-card">
				<p class="reception-form-title">Онлайн-заявка на приём:</p>
				<form id="receptionForm" class="reception-form">
					<div class="reception-form-fields">
						<select required>
							<?php foreach ( $leaders as $p ) : ?>
							<option><?php echo esc_html( $p['name'] ); ?></option>
							<?php endforeach; ?>
						</select>
						<input type="text" required placeholder="ФИО">
						<input type="tel" required placeholder="Телефон">
						<input type="email" required placeholder="E-mail">
						<input type="date" required placeholder="Дата">
						<input type="text" required placeholder="Цель визита">
						<button type="submit" class="reception-form-submit">Отправить</button>
					</div>
					<p class="reception-form-sent">Ваша заявка принята. Мы свяжемся с вами в ближайшее время.</p>
				</form>
			</div>
		</div>
	</div>
</section>

<section class="cta-banner">
	<div class="container cta-inner">
		<h2>ГОТОВЫ ДОСТАВИТЬ ВАШ ГРУЗ</h2>
		<p>
			<span>Оставьте заявку для расчёта тарифа или свяжитесь напрямую:</span>
			<span class="cta-phones"><?php echo esc_html( CFS()->get( 'telefon1', 606 ) ); ?></span>
		</p>
		<div class="cta-buttons">
			<a href="https://my.kdts.kz/" target="_blank" rel="noopener" class="btn btn-primary">РАССЧИТАТЬ ТАРИФ</a>
			<a href="<?php echo esc_url( get_permalink( 606 ) ); ?>" class="btn btn-outline-light">СВЯЗАТЬСЯ</a>
		</div>
	</div>
</section>

<?php get_footer(); ?>
