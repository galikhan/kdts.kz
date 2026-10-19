<?php
/*
 * Template name: uslugi
 */
?>
<?php get_header(); ?>

<section class="page-hero">
	<div class="container">
		<div class="breadcrumb">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Главная</a>
			<span class="crumb-sep">/</span>
			<span class="crumb-current"><?php the_title(); ?></span>
		</div>
		<h1><?php the_title(); ?></h1>
	</div>
</section>

<section class="page-content is-wide">
	<div class="container">
		<?php get_template_part( 'template-parts/service-cards' ); ?>

		<div class="eco-block">
			<h2>Единая логистическая экосистема КДТС</h2>
			<p>АО «Кедентранссервис» объединяет терминальную обработку, перегруз на пограничных переходах, транспортно-экспедиторское сопровождение и автомобильные перевозки в рамках комплексных логистических решений. Это позволяет клиентам получать необходимый набор услуг в единой цепочке — от приема и обработки груза до его доставки конечному получателю.</p>
			<p class="eco-quote">Кедентранссервис — единый партнер для терминальной, железнодорожной, автомобильной и мультимодальной логистики.</p>
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
