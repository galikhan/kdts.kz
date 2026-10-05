<?php
 /*
 * Template name: uchreditelnye
 */
?>
<?php get_header(); ?>
<?php
/* Constituent documents: [ file url, title ]. Local copy of a file is used when it exists. */
$documents = array(
	array( 'https://www.kdts.kz/wp-content/uploads/2026/04/Dopolneniya-v-Ustav-ot-16.03.2026-g.-gos.yaz..pdf', 'Қоғамның жарғысына толықтырулар 16.03.2026 г.' ),
	array( 'https://www.kdts.kz/wp-content/uploads/2026/04/Izmenenie-i-dopolnenie-v-Ustav-ot-19.01.2026-g..pdf', 'Өзгерістер мен толықтырулар қоғамның жарғысына 19.01.2026 г.' ),
	array( 'https://www.kdts.kz/wp-content/uploads/2026/02/Izmeneniya-v-Ustav-ot-20.10.2025-g.-kaz.pdf', 'Өзгерістер мен толықтырулар қоғамның жарғысына 20.10.2025 ж.' ),
	array( 'https://www.kdts.kz/wp-content/uploads/2022/06/Ustav-AO-Kedentransservis-ot-10.06.2022-g.pdf', '«Кедентранссервис» АҚ Жарғысының жаңа редакциясы КДТС Жалғыз акционерінің 2022 жылғы 10 маусымдағы шешімімен бекітілген (№02/21 хаттама)' ),
	array( 'https://www.kdts.kz/wp-content/uploads/2021/04/Izm-i-dop-v-Ustav-ot-18.08.2020g.-1.pdf', 'Өзгерістер мен толықтырулар қоғамның жарғысына 18.08.2020 ж.' ),
	array( 'https://www.kdts.kz/wp-content/uploads/2021/04/0b50e305f2dbb5743ac534a9a085470a-3.pdf', 'Өзгерістер мен толықтырулар қоғамның жарғысына 26.07.2017 ж.' ),
	array( 'https://www.kdts.kz/wp-content/uploads/2021/04/3add23a0cd4dc3055edbab93657465b0-2.pdf', '"Кедентранссервис" АҚ Жарғысы' ),
);

if ( ! function_exists( 'kdts_fin_card' ) ) {
	function kdts_fin_card( $live_url, $title ) {
		if ( ! $live_url ) {
			echo '<div class="doc-card is-disabled"><div class="doc-card-top"><span class="doc-card-icon">PDF</span></div><p>' . esc_html( $title ) . '</p></div>';
			return;
		}
		$ext   = strtoupper( pathinfo( parse_url( $live_url, PHP_URL_PATH ), PATHINFO_EXTENSION ) );
		$url   = $live_url;
		$bytes = 0;
		if ( false !== ( $pos = strpos( $live_url, '/wp-content/uploads/' ) ) ) {
			$rel = substr( $live_url, $pos + strlen( '/wp-content/uploads/' ) );
			$u   = wp_upload_dir();
			if ( file_exists( $u['basedir'] . '/' . $rel ) ) {
				$url   = $u['baseurl'] . '/' . $rel;
				$bytes = filesize( $u['basedir'] . '/' . $rel );
			}
		}
		$size = $bytes ? ( $bytes >= 1048576 ? round( $bytes / 1048576, 1 ) . ' MB' : round( $bytes / 1024 ) . ' KB' ) : '';
		echo '<a class="doc-card" href="' . esc_url( $url ) . '" target="_blank" rel="noopener"><div class="doc-card-top"><span class="doc-card-icon">' . esc_html( $ext ) . '</span><span class="doc-card-size">' . esc_html( $size ) . '</span></div><p>' . esc_html( $title ) . '</p></a>';
	}
}
?>

<section class="page-hero">
	<div class="container">
		<div class="breadcrumb">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Басты бет</a>
			<span class="crumb-sep">/</span>
			<span class="crumb-current"><?php the_title(); ?></span>
		</div>
		<h1><?php the_title(); ?></h1>
		<div class="subnav-pills">
			<a href="<?php echo esc_url( home_url( '/obyavleniya' ) ); ?>">Хабарландырулар</a>
			<a href="<?php echo esc_url( home_url( '/molsherlemeler-zhane-tarifter' ) ); ?>">Мөлшерлемелер және тарифтер</a>
			<a href="<?php echo esc_url( home_url( '/platformalar-parki' ) ); ?>">Платформалар паркі</a>
			<a href="<?php echo esc_url( home_url( '/ulgilik-sharttar' ) ); ?>">Үлгілік шарттар</a>
			<a href="<?php echo esc_url( home_url( '/kryltajshylyk-sharttar' ) ); ?>" class="is-active">Құрылтайшылық шарттар</a>
		</div>
	</div>
</section>

<section class="page-content is-wide">
	<div class="container">
		<div class="doc-card-grid">
			<?php foreach ( $documents as $doc ) { kdts_fin_card( $doc[0], $doc[1] ); } ?>
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
