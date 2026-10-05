<?php
/*
 * Template name: home
 */
?>
<?php get_header(); ?>


<section class="hero hero-slider" id="heroSlider">
	<div class="hero-slides">
		<div class="hero-slide is-active" data-slide="0">
	<div class="hero-bg">
		<video class="hero-video" autoplay muted playsinline webkit-playsinline poster="<?php echo esc_url( get_template_directory_uri() . '/img/hero-railyard.jpg?v=' . filemtime( get_template_directory() . '/img/hero-railyard.jpg' ) ); ?>">
			<source src="<?php echo esc_url( get_template_directory_uri() . '/img/hero-bg.mp4?v=' . filemtime( get_template_directory() . '/img/hero-bg.mp4' ) ); ?>" type="video/mp4">
		</video>
		<img class="hero-fallback-img" src="<?php echo esc_url( get_template_directory_uri() . '/img/hero-railyard.jpg?v=' . filemtime( get_template_directory() . '/img/hero-railyard.jpg' ) ); ?>" alt="">
		<div class="hero-overlay"></div>
	</div>

	<div class="hero-content">
		<div class="hero-text">
			<p class="badge">1997 ЖЫЛДАН БЕРІ НАРЫҚТА</p>
			<h1>
				<span class="hl-line">ҚАЗАҚСТАНДАҒЫ ЖЕТЕКШІ</span>
				<span class="hl-line">КЕДЕН-ҚОЙМАЛЫҚ</span>
				<span class="hl-line">ЛОГИСТИКА ОПЕРАТОРЫ</span>
			</h1>
			<p class="hero-sub">Компания жүктердің терминалдық өңделуі саласында айрықша активтерге ие болып, «Достық» және «Алтынкөл» шекаралық станцияларында Қытайдан әкелінетін жүктерді ауыстырып тиеу бойынша көшбасшы орынды иеленеді.</p>

			<div class="hero-stats">
				<div class="hero-stat">
					<span class="num">25+</span>
					<span>жыл нарықтағы тәжірибе</span>
				</div>
				<div class="hero-stat">
					<span class="num">№1</span>
					<span>Достық және Алтынкөлде</span>
				</div>
				<div class="hero-stat hero-stat-wide">
					<span class="num">Барлық аймақтар</span>
					<span>мен ірі қалаларда терминалдар</span>
				</div>
			</div>
		</div>
	</div>
		</div>

			<div class="hero-slide" data-slide="1" aria-hidden="true">
	<div class="hero-bg">
		<video class="hero-video" muted playsinline preload="auto" webkit-playsinline poster="<?php echo esc_url( get_template_directory_uri() . '/img/hero-poster-2.jpg?v=' . filemtime( get_template_directory() . '/img/hero-poster-2.jpg' ) ); ?>">
			<source src="<?php echo esc_url( get_template_directory_uri() . '/img/hero-bg-2.mp4?v=' . filemtime( get_template_directory() . '/img/hero-bg-2.mp4' ) ); ?>" type="video/mp4">
		</video>
		<img class="hero-fallback-img" src="<?php echo esc_url( get_template_directory_uri() . '/img/hero-poster-2.jpg?v=' . filemtime( get_template_directory() . '/img/hero-poster-2.jpg' ) ); ?>" alt="">
		<div class="hero-overlay"></div>
	</div>

				<div class="hero-content">
					<div class="hero-text">
						<h2 class="hero-slide-title">КОМПАНИЯ ТУРАЛЫ</h2>
						<p class="hero-sub hero-sub-lg"><?php echo esc_html( wp_strip_all_tags( trim( CFS()->get( 'tekst1' ) ) ) ); ?></p>
					</div>
				</div>
			</div>
	</div>

	<div class="hero-controls">
		<div class="hero-dots" role="tablist">
			<button type="button" class="hero-dot is-active" data-goto="0" aria-label="1"></button>
			<button type="button" class="hero-dot" data-goto="1" aria-label="2"></button>
		</div>
		<div class="hero-arrows">
			<button type="button" class="hero-arrow hero-arrow-prev" aria-label="Previous"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M15 6l-6 6 6 6"/></svg></button>
			<button type="button" class="hero-arrow hero-arrow-next" aria-label="Next"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 6l6 6-6 6"/></svg></button>
		</div>
	</div>

</section>

<section class="services" id="services">
	<div class="container">
		<h2><?php echo esc_html( CFS()->get( 'zagolovka1' ) ?: 'Негізгі қызмет бағыттары' ); ?></h2>
		<?php get_template_part( 'template-parts/service-cards' ); ?>
	</div>
</section>

<?php if ( kdts_show_routes() ) { get_template_part( 'template-parts/routes' ); } ?>

<section class="partners-strip" id="partners">
	<div class="container">
		<h2>БІЗДІҢ СЕРІКТЕСТЕРІМІЗ</h2>
		<div class="partners-grid">
			<?php
			$partners = CFS()->get( 'partnery-blok' );
			if ( $partners ) :
				foreach ( $partners as $partner ) :
					if ( empty( $partner['foto1'] ) ) {
						continue;
					}
					?>
					<div class="partner-cell">
							<img src="<?php echo esc_url( $partner['foto1'] ); ?>" class="partner-logo" alt="Серіктес">
						</div>
						<?php
				endforeach;
			endif;
			?>
		</div>
	</div>
</section>

<section class="cabinet">
	<div class="container">
		<h2 class="h-light">ЖЕКЕ КАБИНЕТ АРҚЫЛЫ ЖҰМЫС ІСТЕУ ЫҢҒАЙЛЫРАҚ</h2>
		<p class="cabinet-sub">Тапсырыстарыңызды бақылап, құжаттармен және өтінімдермен онлайн жұмыс жасаңыз.</p>

		<div class="cabinet-grid">
			<div class="cabinet-item">
				<svg viewBox="0 0 40 40" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="6" y="8" width="28" height="24" rx="2"/><path d="M12 16h16M12 22h10"/></svg>
				<h4>Тапсырыстарды бақылау</h4>
				<p>Жүктің мәртебесін нақты уақытта қадағалаңыз.</p>
			</div>
			<div class="cabinet-item">
				<svg viewBox="0 0 40 40" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M11 5h13l6 6v22a2 2 0 01-2 2H11a2 2 0 01-2-2V7a2 2 0 012-2z"/><path d="M24 5v6h6"/></svg>
				<h4>Электрондық құжаттар</h4>
				<p>Шарттар мен актілерге онлайн қолжетімділік.</p>
			</div>
			<div class="cabinet-item">
				<svg viewBox="0 0 40 40" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M20 6l4 8 9 1-6.5 6.5L28 30l-8-4-8 4 1.5-8.5L6 15l9-1z"/></svg>
				<h4>Өтінім қалдыру</h4>
				<p>Жаңа тапсырысты бірнеше минутта ресімдеңіз.</p>
			</div>
			<div class="cabinet-item">
				<svg viewBox="0 0 40 40" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="20" cy="20" r="15"/><path d="M20 11v9l6 4"/></svg>
				<h4>24/7 қолжетімділік</h4>
				<p>Кез келген уақытта, кез келген құрылғыдан.</p>
			</div>
		</div>

		<a href="https://my.kdts.kz/" target="_blank" rel="noopener" class="btn btn-primary btn-lg">ЖЕКЕ КАБИНЕТКЕ КІРУ</a>
	</div>
</section>

<?php
$novosti_query = new WP_Query( array( 'post_type' => 'novosti', 'posts_per_page' => 4 ) );
if ( $novosti_query->have_posts() ) :
	$kk_months = array( '', 'ҚАҢТАР', 'АҚПАН', 'НАУРЫЗ', 'СӘУІР', 'МАМЫР', 'МАУСЫМ', 'ШІЛДЕ', 'ТАМЫЗ', 'ҚЫРКҮЙЕК', 'ҚАЗАН', 'ҚАРАША', 'ЖЕЛТОҚСАН' );
	?>
	<section class="news" id="news">
		<div class="container">
			<div class="news-head">
				<h2>ЖАҢАЛЫҚТАР</h2>
				<a class="news-head-link" href="<?php echo esc_url( get_post_type_archive_link( 'novosti' ) ?: home_url( '/zhanalyktar/' ) ); ?>">Барлық жаңалықтар</a>
			</div>
			<div class="news-grid">
				<?php
				while ( $novosti_query->have_posts() ) :
					$novosti_query->the_post();
					$thumb = get_the_post_thumbnail_url( get_the_ID(), 'large' );
					?>
					<a class="news-card" href="<?php the_permalink(); ?>">
						<?php if ( $thumb ) : ?>
							<img class="news-img" src="<?php echo esc_url( $thumb ); ?>" alt="">
						<?php else : ?>
							<img class="news-img" src="<?php echo esc_url( get_template_directory_uri() . '/img/hero-railyard.jpg?v=' . filemtime( get_template_directory() . '/img/hero-railyard.jpg' ) ); ?>" alt="">
						<?php endif; ?>
						<div class="news-body">
							<p><?php the_title(); ?></p>
							<div class="news-date">
								<span class="d"><?php echo esc_html( get_the_date( 'd' ) ); ?></span>
								<span class="m"><?php echo esc_html( $kk_months[ (int) get_the_date( 'n' ) ] ); ?></span>
								<span class="y"><?php echo esc_html( get_the_date( 'Y' ) ); ?></span>
							</div>
						</div>
					</a>
					<?php
				endwhile;
				wp_reset_postdata();
				?>
			</div>
		</div>
	</section>
	<?php
endif;
?>

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
