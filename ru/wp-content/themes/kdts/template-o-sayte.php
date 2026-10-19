<?php
 /*
 * Template name: o-sayte
 */
?>
<?php get_header(); ?>

<section class="page-hero">
	<div class="container">
		<div class="breadcrumb">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Главная</a>
			<span class="crumb-sep">/</span>
			<span class="crumb-current">Развитие языков</span>
		</div>
		<h1>Развитие языков</h1>
		<div class="subnav-pills">
			<a href="<?php echo esc_url( home_url( '/o-kompanii' ) ); ?>">О компании</a>
			<a href="<?php echo esc_url( home_url( '/rukovodstvo' ) ); ?>">Руководство</a>
			<a href="<?php echo esc_url( home_url( '/istoriya-kompanii' ) ); ?>">История компании</a>
			<a href="<?php echo esc_url( home_url( '/sovet-direktorov' ) ); ?>">Совет директоров</a>
			<a href="<?php echo esc_url( home_url( '/filialy-i-predstavitelstv' ) ); ?>">Филиалы и представительства</a>
			<a href="<?php echo esc_url( home_url( '/vakansii' ) ); ?>">Вакансии</a>
			<a href="<?php echo esc_url( home_url( '/razvitie-yazykov' ) ); ?>" class="is-active">Развитие языков</a>
		</div>
	</div>
</section>

<section class="page-content">
	<div class="container">
		<p class="page-lead">Раздел о развитии языков в АО «Кедентранссервис».</p>
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
