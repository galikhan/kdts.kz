<?php
/*
 * Template name: park-platform-i-konteynerov
 */
?>
<?php get_header(); ?>

<section class="page-hero">
	<div class="container">
		<div class="breadcrumb">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Главная</a>
			<span class="crumb-sep">/</span>
			<span class="crumb-current">Парк платформ</span>
		</div>
		<h1>Парк платформ</h1>
		<div class="subnav-pills">
			<a href="<?php echo esc_url( home_url( '/obyavleniya' ) ); ?>">Объявления</a>
			<a href="<?php echo esc_url( home_url( '/stavki-i-tarify' ) ); ?>">Ставки и тарифы</a>
			<a href="<?php echo esc_url( home_url( '/park-platform-i-konteynerov' ) ); ?>" class="is-active">Парк платформ</a>
			<a href="<?php echo esc_url( home_url( '/tipovye-dogovora' ) ); ?>">Типовые договора</a>
			<a href="<?php echo esc_url( home_url( '/uchreditelnye-dokumenty' ) ); ?>">Учредительные документы</a>
		</div>
	</div>
</section>

<section class="page-content">
	<div class="container">
		<p class="page-lead">Фитинговая платформа — специализированная платформа, предназначенная для перевозки крупнотоннажных контейнеров и оборудованная специализированными узлами для их крепления.</p>

		<div class="page-section">
			<h2>Используемые типы контейнеров</h2>
			<p>Фитинговые платформы АО «Кедентранссервис» использует для перевозки крупнотонажных контейнеров 40 футов типа 1А, 1АА, 1АХ, 1ААА ISO и 20 футов типа 1С, 1СС, 1СХ ISO.</p>
			<div class="info-grid">
				<div class="info-card">
					<h3>40-футовые контейнеры</h3>
					<p class="info-role">Типы ISO</p>
					<p>1А, 1АА, 1АХ, 1ААА</p>
				</div>
				<div class="info-card">
					<h3>20-футовые контейнеры</h3>
					<p class="info-role">Типы ISO</p>
					<p>1С, 1СС, 1СХ</p>
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
