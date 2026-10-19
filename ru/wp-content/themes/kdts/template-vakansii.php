<?php
/*
 * Template name: vakansii
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
			<span class="crumb-current">Вакансии</span>
		</div>
		<h1>Вакансии</h1>
		<div class="subnav-pills">
			<a href="<?php echo esc_url( home_url( '/o-kompanii' ) ); ?>">О компании</a>
			<a href="<?php echo esc_url( home_url( '/rukovodstvo' ) ); ?>">Руководство</a>
			<a href="<?php echo esc_url( home_url( '/istoriya-kompanii' ) ); ?>">История компании</a>
			<a href="<?php echo esc_url( home_url( '/sovet-direktorov' ) ); ?>">Совет директоров</a>
			<a href="<?php echo esc_url( home_url( '/filialy-i-predstavitelstv' ) ); ?>">Филиалы и представительства</a>
			<a href="<?php echo esc_url( home_url( '/vakansii' ) ); ?>" class="is-active">Вакансии</a>
			<a href="<?php echo esc_url( home_url( '/razvitie-yazykov' ) ); ?>">Развитие языков</a>
		</div>
	</div>
</section>

<section class="page-content">
	<div class="container">
		<p class="page-lead">С актуальными вакансиями АО «Кедентранссервис» можно ознакомиться здесь.</p>

		<div class="page-section">
			<p>Полную информацию об открытых вакансиях АО «Кедентранссервис» можно найти на едином портале трудоустройства АО «НК «Қазақстан темір жолы». В настоящее время отдельного списка вакансий на официальном сайте компании не публикуется — все актуальные вакансии размещаются на указанном портале.</p>

			<div class="doc-list">
				<div class="doc-item">
					<span>Вакансии на едином портале трудоустройства АО «НК «Қазақстан темір жолы»</span>
					<a href="https://job.railways.kz/kz/vacancy" target="_blank" rel="noopener">СМОТРЕТЬ</a>
				</div>
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
