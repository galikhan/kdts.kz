<?php
 /*
 * Template name: o-kompanii
 */
?>
<?php get_header(); ?>

<section class="page-hero">
	<div class="container">
		<div class="breadcrumb">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Главная</a>
			<span class="crumb-sep">/</span>
			<span class="crumb-current">О компании</span>
		</div>
		<h1>О компании</h1>
		<div class="subnav-pills">
			<a href="<?php echo esc_url( home_url( '/o-kompanii' ) ); ?>" class="is-active">О компании</a>
			<a href="<?php echo esc_url( home_url( '/rukovodstvo' ) ); ?>">Руководство</a>
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
		<p class="page-lead"><?php echo esc_html( wp_strip_all_tags( CFS()->get( 'tekst1' ) ?: 'На сегодняшний день наша компания является полноценным терминальным оператором, оказывающим транспортно-логистические услуги не только в Казахстане, но и за его пределами.' ) ); ?></p>

		<div class="page-section">
			<h2>Наша миссия</h2>
			<p class="pull-quote">«Как системообразующая транспортная компания Казахстана, мы удовлетворяем потребности национальной экономики и общества в управлении терминальной инфраструктуры».</p>

			<h2>Наше видение</h2>
			<p>Мы ведущая компания, предоставляющая услуги терминальной инфраструктуры, которые основаны на принципах экономической эффективности, безопасности, социальной и экологической ответственности.</p>
			<p>Стратегическая цель – «Увеличение капитализации за счет роста масштабов бизнеса и увеличения эффективности деятельности».</p>
		</div>

		<div class="page-section">
			<h2>Наши стратегические цели</h2>
			<ul class="goal-list">
				<li><span class="goal-num">1</span><span>Повышение эффективности управления терминальной инфраструктурой</span></li>
				<li><span class="goal-num">2</span><span>Содействие развитию транзитных перевозок</span></li>
				<li><span class="goal-num">3</span><span>Повышение удовлетворенности клиентов</span></li>
				<li><span class="goal-num">4</span><span>Цифровизация</span></li>
				<li><span class="goal-num">5</span><span>Внедрение принципов ESG</span></li>
				<li><span class="goal-num">6</span><span>Гарантирование безопасности производственной деятельности</span></li>
			</ul>
			<p>Мы нацелены постоянно развивать наши услуги и при оказании услуг соответствовать высоким стандартам в области качества, экологии, охраны здоровья и обеспечения безопасности труда.</p>
		</div>

		<div class="page-section">
			<h2>Сертификация систем менеджмента</h2>
			<p>В 2021 году по результатам сертификационного аудита Компания подтвердила соответствие систем управления (системы менеджмента качества (СМК), системы менеджмента охраны окружающей среды (СМОС), системы менеджмента охраны здоровья и обеспечения безопасности труда (СМОЗиБТ)) требованиям международных стандартов.</p>
			<p>В 2024 году Компания в очередной раз успешно прошла наблюдательный аудит, проведённый ТОО TÜV Rheinland Kazakhstan, являющимся эксклюзивным представителем TÜV Rheinland в странах Евразийского экономического союза. По результатам аудита подтверждено соответствие интегрированной системы управления Компании требованиям международных стандартов ISO 9001:2015, ISO 14001:2015, ISO 45001:2018.</p>
		</div>

		<div class="page-section">
			<h2>Партнёрские отношения</h2>
			<div class="stat-grid">
				<div class="stat-item">
					<div class="stat-num"><?php echo esc_html( CFS()->get( 'tsifr1' ) ?: '50' ); ?></div>
					<p>Транспортно-логистических и операторских компаний Средней и Юго-Восточной Азии, КНР и Европы</p>
				</div>
				<div class="stat-item">
					<div class="stat-num">150+</div>
					<p>Транспортно-экспедиторских компаний являются нашими клиентами</p>
				</div>
			</div>
			<p>Сегодня АО «Кедентранссервис» установило партнёрские отношения с 50 транспортно-логистическими и операторскими компаниями Средней и Юго-Восточной Азии, КНР и Европы. Кроме того, более 150 транспортно-экспедиторских компаний являются нашими клиентами. Являясь мостом между Европой и Азией, в сотрудничестве с нашими партнёрами, мы стремимся стать центром транспортной компетенции и составления универсальной логистики.</p>
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
