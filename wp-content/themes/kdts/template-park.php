<?php
 /*
 * Template name: park-platform-i-konteynerov
 */
?>
<?php get_header(); ?>

<section class="page-hero">
	<div class="container">
		<div class="breadcrumb">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Басты бет</a>
			<span class="crumb-sep">/</span>
			<span class="crumb-current">Платформалар паркі</span>
		</div>
		<h1>Платформалар паркі</h1>
		<div class="subnav-pills">
			<a href="<?php echo esc_url( home_url( '/obyavleniya' ) ); ?>">Хабарландырулар</a>
			<a href="<?php echo esc_url( home_url( '/molsherlemeler-zhane-tarifter' ) ); ?>">Мөлшерлемелер және тарифтер</a>
			<a href="<?php echo esc_url( home_url( '/platformalar-parki' ) ); ?>" class="is-active">Платформалар паркі</a>
			<a href="<?php echo esc_url( home_url( '/ulgilik-sharttar' ) ); ?>">Үлгілік шарттар</a>
			<a href="<?php echo esc_url( home_url( '/kryltajshylyk-sharttar' ) ); ?>">Құрылтайшылық шарттар</a>
		</div>
	</div>
</section>

<section class="page-content">
	<div class="container">
		<p class="page-lead">Фитингтік платформа — ірі тоннажды контейнерлерді тасымалдауға арналған және оларды бекіту үшін арнайы тораптармен жабдықталған мамандандырылған платформа.</p>

		<div class="page-section">
			<h2>Пайдаланылатын контейнер түрлері</h2>
			<p>«Кедентранссервис» АҚ фитингтік платформаларын тасымалдау үшін 1А, 1АА, 1АХ, 1ААА ISO типті 40 фут және 1С, 1СС, 1СХ ISO типті 20 фут ірі тоннажды контейнерлерді пайдаланады.</p>
			<div class="info-grid">
				<div class="info-card">
					<h3>40 фут контейнерлер</h3>
					<p class="info-role">ISO типтері</p>
					<p>1А, 1АА, 1АХ, 1ААА</p>
				</div>
				<div class="info-card">
					<h3>20 фут контейнерлер</h3>
					<p class="info-role">ISO типтері</p>
					<p>1С, 1СС, 1СХ</p>
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
