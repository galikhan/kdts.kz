<?php
/*
 * Template name: vakansii
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
			<span class="crumb-current">Бос жұмыс орындары</span>
		</div>
		<h1>Бос жұмыс орындары</h1>
		<div class="subnav-pills">
			<a href="<?php echo esc_url( home_url( '/kompaniya-turaly' ) ); ?>">Компания туралы</a>
			<a href="<?php echo esc_url( home_url( '/basshyly' ) ); ?>">Басшылық</a>
			<a href="<?php echo esc_url( home_url( '/kompaniyanyn-tarihy' ) ); ?>">Компанияның тарихы</a>
			<a href="<?php echo esc_url( home_url( '/direktorlar-kenesi' ) ); ?>">Директорлар кеңесі</a>
			<a href="<?php echo esc_url( home_url( '/filialdar-zh-ne-kildikter' ) ); ?>">Филиалдар және өкілдіктер</a>
			<a href="<?php echo esc_url( home_url( '/bos-zhumys-oryndary' ) ); ?>" class="is-active">Бос жұмыс орындары</a>
			<a href="<?php echo esc_url( home_url( '/tilderdi-damytu' ) ); ?>">Тілдерді дамыту</a>
		</div>
	</div>
</section>

<section class="page-content">
	<div class="container">
		<p class="page-lead">Ағымдағы бос жұмыс орындарымен мына жерден таныса аласыз.</p>

		<div class="page-section">
			<p>«Кедентранссервис» АҚ-ның ағымдағы бос жұмыс орындары туралы толық ақпаратты «Қазақстан темір жолы» ҰК» АҚ-ның бірыңғай жұмысқа орналастыру порталынан таба аласыз. Қазіргі уақытта компанияның ресми сайтында жеке жарияланған бос орындар тізімі жоқ — барлық ағымдағы бос орындар аталған портал арқылы жарияланады.</p>

			<div class="doc-list">
				<div class="doc-item">
					<span>«Қазақстан темір жолы» ҰК» АҚ бірыңғай жұмысқа орналастыру порталындағы бос орындар</span>
					<a href="https://job.railways.kz/kz/vacancy" target="_blank" rel="noopener">ҚАРАУ</a>
				</div>
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
