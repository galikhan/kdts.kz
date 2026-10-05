<?php
/*
 * Template name: uslugi
 */
?>
<?php get_header(); ?>

<section class="page-hero">
	<div class="container">
		<div class="breadcrumb">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Басты бет</a>
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
			<h2>КДТС-тың бірыңғай логистикалық экожүйесі</h2>
			<p>«Кедентранссервис» АҚ терминалдық өңдеуді, шекаралық өткелдерде ауыстырып тиеуді, көлік-экспедиторлық алып жүруді және автомобиль тасымалдарын кешенді логистикалық шешімдер аясында біріктіреді. Бұл клиенттерге қажетті қызметтер жиынтығын бірыңғай тізбекте — жүкті қабылдау мен өңдеуден бастап оны соңғы алушыға жеткізуге дейін алуға мүмкіндік береді.</p>
			<p class="eco-quote">Кедентранссервис — терминалдық, темір жол, автомобиль және мультимодальды логистика үшін бірыңғай серіктес.</p>
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
