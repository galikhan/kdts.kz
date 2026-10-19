<?php
 /*
 * Template name: o-sayte
 */
?>
<?php get_header(); ?>

<section class="page-hero">
	<div class="container">
		<div class="breadcrumb">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Басты бет</a>
			<span class="crumb-sep">/</span>
			<span class="crumb-current">Тілдерді дамыту</span>
		</div>
		<h1>Тілдерді дамыту</h1>
		<div class="subnav-pills">
			<a href="<?php echo esc_url( home_url( '/kompaniya-turaly' ) ); ?>">Компания туралы</a>
			<a href="<?php echo esc_url( home_url( '/basshyly' ) ); ?>">Басшылық</a>
			<a href="<?php echo esc_url( home_url( '/kompaniyanyn-tarihy' ) ); ?>">Компанияның тарихы</a>
			<a href="<?php echo esc_url( home_url( '/direktorlar-kenesi' ) ); ?>">Директорлар кеңесі</a>
			<a href="<?php echo esc_url( home_url( '/filialdar-zh-ne-kildikter' ) ); ?>">Филиалдар және өкілдіктер</a>
			<a href="<?php echo esc_url( home_url( '/bos-zhumys-oryndary' ) ); ?>">Бос жұмыс орындары</a>
			<a href="<?php echo esc_url( home_url( '/tilderdi-damytu' ) ); ?>" class="is-active">Тілдерді дамыту</a>
		</div>
	</div>
</section>

<section class="page-content">
	<div class="container">
		<p class="page-lead">«Кедентранссервис» АҚ-ның тілдерді дамыту бөлімі.</p>
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
