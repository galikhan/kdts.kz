<?php
 /*
 * Template name: plan-dolgosrochnykh-zakupok
 */
?>
<?php get_header(); ?>
<?php
// Pages of the "annual procurement plan" group (parent page 270 + its sub-pages).
$plan_pages = array( 270, 276, 274, 272 );

/* Documents: [ [ file url, title ], ... ]. Local copy of a file is used when it exists. */
$lists = array(
	array( 'https://www.kdts.kz/ru/wp-content/uploads/2021/04/plan_dolgosrochnyh_zakupok_tovarov_rabot_i_uslug_89103.xlsx', 'План долгосрочных закупок товаров, работ и услуг 2020г.' ),
	array( 'https://www.kdts.kz/ru/wp-content/uploads/2021/04/plan_dolgosrochnyh_zakupok_tru_ao_kdts_s_izmeneniyami_19931.xlsx', 'План долгосрочных закупок ТРУ АО "КДТС" с изменениями 2017г.' ),
	array( 'https://www.kdts.kz/ru/wp-content/uploads/2021/04/plan_dolgosrochnyh_zakupok_tru_ao_kdts_2015-2018_gody_s_izmeneniyami_79470.xlsx', 'План долгосрочных закупок ТРУ АО "КДТС" с изменениями' ),
	array( 'https://www.kdts.kz/ru/wp-content/uploads/2021/04/plan_dolgosrochnyh_zakupok_tru_ao_kdts_2015-2018_gody_s_izmeneniyami_64649.xlsx', 'План долгосрочных закупок ТРУ АО "КДТС" 2015-2018 гг. с изменениями' ),
	array( 'https://www.kdts.kz/ru/wp-content/uploads/2021/04/plan_dolgosrochnyh_zakupok_tru_ao_kdts_2015-2018_gody_s_izmeneniyami_75360.xlsx', 'План долгосрочных закупок ТРУ АО "КДТС" 2015-2018 гг. с изменениями' ),
	array( 'https://www.kdts.kz/ru/wp-content/uploads/2021/04/plan_dolgosrochnyh_zakupok_tru_ao_kdts_na_2015-2018_gody_s_izmeneniyami_65196.xlsx', 'План долгосрочных закупок ТРУ АО "Кедентранссервис" на 2015-2018 гг.' ),
	array( 'https://www.kdts.kz/ru/wp-content/uploads/2021/04/plan_dolgosrochnyh_zakupok_tru_ao_kedentransservis_na_2015-2018_gody_75038.xlsx', 'План долгосрочных закупок ТРУ АО "Кедентранссервис" на 2015-2018 гг.' ),
	array( 'https://www.kdts.kz/ru/wp-content/uploads/2026/02/Plan-dolgosrochnyh-zakupok-TRU-na-2023-2025-gg.-po-sostoyaniyu-na-13.02.2026-goda.xlsx', 'План долгосрочных закупок ТРУ на 2023 - 2025 гг. по состоянию на 13.02.2026 года' ),
	array( 'https://www.kdts.kz/ru/wp-content/uploads/2026/02/Plan-dolgosrochnyh-zakupok-TRU-na-2024-2027-gg.-po-sostoyaniyu-na-05.02.2026-goda.xlsx', 'План долгосрочных закупок ТРУ на 2024 - 2027 гг. по состоянию на 05.02.2026 года' ),
	array( 'https://www.kdts.kz/ru/wp-content/uploads/2026/02/Plan-dolgosrochnyh-zakupok-TRU-na-2025-2028-gg.-po-sostoyaniyu-na-13.02.2026-goda.xlsx', 'План долгосрочных закупок ТРУ на 2025 - 2028 гг. по состоянию на 13.02.2026 года' ),
	array( 'https://www.kdts.kz/ru/wp-content/uploads/2026/02/Plan-zakupok-tovarov-rabot-i-uslug-na-2026-god-po-sostoyaniyu-na-17.02.2026-2.xlsx', 'План закупок товаров, работ и услуг на 2026 год по состоянию на 17.02.2026' ),
);

if ( ! function_exists( 'kdts_fin_card' ) ) {
	function kdts_fin_card( $live_url, $title ) {
		if ( ! $live_url ) {
			echo '<div class="doc-card is-disabled"><div class="doc-card-top"><span class="doc-card-icon">DOC</span></div><p>' . esc_html( $title ) . '</p></div>';
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

<section class="page-hero page-hero-zakupki">
	<div class="container">
		<div class="breadcrumb">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Главная</a>
			<span class="crumb-sep">/</span>
			<span><?php echo esc_html( get_the_title( 263 ) ); ?></span>
			<span class="crumb-sep">/</span>
			<span class="crumb-current"><?php the_title(); ?></span>
		</div>
		<h1><?php the_title(); ?></h1>
	</div>
</section>

<section class="page-content">
	<div class="container">
		<?php $zs_active = get_the_ID(); ?>
		<div class="zakupki-layout">
			<?php include locate_template( 'template-parts/zakupki-sidebar.php' ); ?>
			<div class="zakupki-main">
		<div class="doc-card-grid">
			<?php foreach ( $lists as $doc ) { kdts_fin_card( $doc[0], $doc[1] ); } ?>
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
