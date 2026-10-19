<?php
 /*
 * Template name: o-kompanii
 */
?>
<?php get_header(); ?>

<section class="page-hero">
	<div class="container">
		<div class="breadcrumb">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Басты бет</a>
			<span class="crumb-sep">/</span>
			<span class="crumb-current">Компания туралы</span>
		</div>
		<h1>Компания туралы</h1>
		<div class="subnav-pills">
			<a href="<?php echo esc_url( home_url( '/kompaniya-turaly' ) ); ?>" class="is-active">Компания туралы</a>
			<a href="<?php echo esc_url( home_url( '/basshyly' ) ); ?>">Басшылық</a>
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
		<p class="page-lead"><?php echo esc_html( wp_strip_all_tags( CFS()->get( 'tekst1' ) ?: 'Бүгінгі таңда біздің компания Қазақстанда ғана емес, сонымен қатар одан тыс жерлерде де көлік-логистикалық қызметтер көрсететін толыққанды оператор болып табылады.' ) ); ?></p>

		<div class="page-section">
			<h2>Біздің мақсат</h2>
			<p class="pull-quote">«Қазақстанның жүйе құраушы көлік компаниясы ретінде біз Ұлттық экономика мен қоғамның терминалдық инфрақұрылымды басқарудағы қажеттіліктерін қанағаттандырамыз».</p>

			<h2>Біздің көзқарас</h2>
			<p>Біз экономикалық тиімділік, қауіпсіздік, әлеуметтік және экологиялық жауапкершілік қағидаттарына негізделген терминалдық инфрақұрылым қызметтерін ұсынатын жетекші компаниямыз.</p>
			<p>Стратегиялық мақсат – «Бизнес ауқымын ұлғайту және қызмет тиімділігін арттыру есебінен капиталдандыруды ұлғайту».</p>
		</div>

		<div class="page-section">
			<h2>Біздің стратегиялық мақсаттар</h2>
			<ul class="goal-list">
				<li><span class="goal-num">1</span><span>Терминалдық инфрақұрылымды басқару тиімділігін арттыру</span></li>
				<li><span class="goal-num">2</span><span>Транзиттік тасымалдарды дамытуға жәрдемдесу</span></li>
				<li><span class="goal-num">3</span><span>Клиенттердің қанағаттануын арттыру</span></li>
				<li><span class="goal-num">4</span><span>Цифрландыру</span></li>
				<li><span class="goal-num">5</span><span>ESG принциптерін енгізу</span></li>
				<li><span class="goal-num">6</span><span>Өндірістік қызметтің қауіпсіздігіне кепілдік беру</span></li>
			</ul>
			<p>Біз қызметтерімізді ұдайы дамытуға және қызмет көрсету барысында сапа, экология, денсаулық сақтау және еңбек қауіпсіздігін қамтамасыз ету саласындағы жоғары стандарттарға сай болуға бағытталғанбыз.</p>
		</div>

		<div class="page-section">
			<h2>Сапа менеджменті сертификаттары</h2>
			<p>2021 жылы сертификаттық аудит нәтижелері бойынша Компания басқару жүйелерінің (сапа менеджменті жүйесі (СМЖ), қоршаған ортаны қорғау менеджменті жүйесі (ҚҚМЖ), денсаулық сақтау және еңбек қауіпсіздігін қамтамасыз ету менеджмент жүйесі (ДСЕҚМЖ)) халықаралық стандарттар талаптарына сәйкестігін растады.</p>
			<p>2024 жылы Компания Еуразиялық экономикалық одақ елдеріндегі TÜV Rheinland эксклюзивті өкілі болып табылатын TÜV Rheinland Kazakhstan ЖШС өткізген кезекті бақылау аудитінен сәтті өтті. Аудит нәтижелері бойынша Компанияның интеграцияланған басқару жүйесінің ISO 9001:2015, ISO 14001:2015, ISO 45001:2018 халықаралық стандарттарының талаптарына сәйкестігі расталды.</p>
		</div>

		<div class="page-section">
			<h2>Серіктестік қарым-қатынастар</h2>
			<div class="stat-grid">
				<div class="stat-item">
					<div class="stat-num"><?php echo esc_html( CFS()->get( 'tsifr1' ) ?: '50' ); ?></div>
					<p>Орта және Оңтүстік-Шығыс Азия, ҚХР мен Еуропаның көліктік-логистикалық және операторлық компаниялары</p>
				</div>
				<div class="stat-item">
					<div class="stat-num">150+</div>
					<p>Көліктік-экспедиторлық компания — біздің клиенттеріміз</p>
				</div>
			</div>
			<p>Бүгінгі таңда «Кедентранссервис» АҚ Орта және Оңтүстік-Шығыс Азия, ҚХР және Еуропаның 50 көліктік-логистикалық және операторлық компанияларымен серіктестік қарым-қатынастарды орнатып отыр. Бұған қоса, клиенттеріміздің қатарында 150-ден астам көліктік-экспедиторлық компания бар. Біздің серіктестерімізбен қызметтестікте Еуропа мен Азия аралығындағы көпір бола отырып, біз көліктік құзыреттілік пен әмбебап логистиканы құрастырудың орталығы атануға ұмтыламыз.</p>
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
