<?php
 /*
 * Template name: godovoy-plan
 */
?>
<?php get_header(); ?>
<?php
// Pages of the "annual procurement plan" group (parent page 270 + its sub-pages).
$plan_pages = array( 270, 276, 274, 272 );

/* Documents: [ year => [ [ file url, title ], ... ] ]. Local copy of a file is used when it exists. */
$lists = array(
	'2026' => array(
		array( 'https://www.kdts.kz/ru/wp-content/uploads/2026/02/Plan-zakupok-tovarov-rabot-i-uslug-na-2026-god-po-sostoyaniyu-na-05.02.2026-1.xlsx', 'План закупок товаров, работ и услуг на 2026 год по состоянию на 05.02.2026' ),
	),
	'2025' => array(
		array( 'https://www.kdts.kz/ru/wp-content/uploads/2026/02/Plan-zakupok-na-2025-god-ot-13-fevralya-2026-goda-2.xlsx', 'План закупок на 2025 год от 13 февраля 2026 года' ),
	),
	'2024' => array(
		array( 'https://www.kdts.kz/ru/wp-content/uploads/2024/03/Plan-zakupok-ot-4-marta-2024-goda.xlsx', 'План закупок от 4 марта 2024 года' ),
	),
	'2022' => array(
		array( 'https://www.kdts.kz/ru/wp-content/uploads/2022/12/Plan-zakupok-ot-28-noyabrya-2022-goda.xlsx', 'План закупок от 28 ноября 2022 года' ),
		array( 'https://www.kdts.kz/ru/wp-content/uploads/2022/12/Predvaritelnyj-PZ-2023-ot-19-oktyabrya-2022-goda.xlsx', 'Предварительный ПЗ 2023 от 19 октября 2022 года' ),
		array( 'https://www.kdts.kz/ru/wp-content/uploads/2021/12/Plan-zakupok-ot-15-dekabrya-2021-goda-3.xlsx', 'План закупок товаров, работ и услуг на 2022 год' ),
		array( 'https://www.kdts.kz/ru/wp-content/uploads/2022/04/Informatsiya-o-planiruemyh-zakupkah-provodimyh-s-primeneniem-osobogo-poryadka.xlsx', 'Информация о планируемых закупках проводимых с применением особого порядка' ),
	),
	'2021' => array(
		array( 'https://www.kdts.kz/ru/wp-content/uploads/2021/08/yeartender_02.12.2020_3033-1-1.xlsx', 'Перечень первоочередных закупок на 2021 год' ),
		array( 'https://www.kdts.kz/ru/wp-content/uploads/2021/08/yeartender_29.01.2021_19516-2.xlsx', 'План закупок товаров, работ и услуг-29.01.2021' ),
		array( 'https://www.kdts.kz/ru/wp-content/uploads/2021/08/yeartender_19.02.2021_17156.xlsx', 'План закупок товаров, работ и услуг-19.02.2021' ),
		array( 'https://www.kdts.kz/ru/wp-content/uploads/2021/08/Plan-zakupok-ot-26-iyulya-2021-goda.xlsx', 'План закупок товаров, работ и услуг-26.07.2021' ),
		array( 'https://www.kdts.kz/ru/wp-content/uploads/2021/08/PDZ-ot-6-avgusta-2021-goda.xlsx', 'План закупок товаров, работ и услуг-06.08.2021' ),
	),
	'2020' => array(
		array( 'https://www.kdts.kz/ru/wp-content/uploads/2021/04/yeartender_18.06.2020_49100.xlsx', 'План закупок товаров, работ и услуг-18.06.2020' ),
		array( 'https://www.kdts.kz/ru/wp-content/uploads/2021/04/yeartender_22.10.2020_60241.xlsx', 'План закупок товаров, работ и услуг-22.10.2020' ),
	),
	'2017' => array(
		array( 'https://www.kdts.kz/ru/wp-content/uploads/2021/04/yeartender_06.11.2017_40497.xlsx', 'План закупок АО "КДТС" 06.11.2017 года с изменениями' ),
		array( 'https://www.kdts.kz/ru/wp-content/uploads/2021/04/yeartender_24.11.2017_76753.xlsx', 'План закупок АО "КДТС" 24.11.2017 года с изменениями' ),
		array( 'https://www.kdts.kz/ru/wp-content/uploads/2021/04/yeartender_30.11.2017_90403.xlsx', 'План закупок АО "КДТС" 30.11.2017 года с изменениями' ),
		array( 'https://www.kdts.kz/ru/wp-content/uploads/2021/04/yeartender_15.12.2017_40825.xlsx', 'План закупок АО "КДТС" 15.12.2017 года с изменениями' ),
		array( 'https://www.kdts.kz/ru/wp-content/uploads/2021/04/yeartender_21.12.2017_73444.xlsx', 'План закупок АО "КДТС" 21.12.2017 года с изменениями' ),
	),
	'2016' => array(
		array( 'https://www.kdts.kz/ru/wp-content/uploads/2021/04/yeartender_21.10.2016_55775.xlsx', 'План закупок АО "КДТС" 21.10.2016 года с изменениями' ),
		array( 'https://www.kdts.kz/ru/wp-content/uploads/2021/04/yeartender_10.11.2016_97142.xlsx', 'План закупок АО "КДТС" 10.11.2016 года с изменениями' ),
		array( 'https://www.kdts.kz/ru/wp-content/uploads/2021/04/yeartender_09.12.2016_38854.xlsx', 'План закупок АО "КДТС" 09.12.2016 года с изменениями' ),
	),
	'2015' => array(
		array( 'https://www.kdts.kz/ru/wp-content/uploads/2021/04/plan_zakupok_ao_kdts_2015_goda_s_izmeneniyami_91657.xlsx', 'План закупок АО "КДТС" 17.11.2015 года с изменениями' ),
		array( 'https://www.kdts.kz/ru/wp-content/uploads/2021/04/plan_zakupok_ao_kdts_2015_goda_s_izmeneniyami_80651.xlsx', 'План закупок АО "КДТС" 04.12.2015 года с изменениями' ),
		array( 'https://www.kdts.kz/ru/wp-content/uploads/2021/04/yeartender_28.12.2015_66536.xlsx', 'План закупок АО "КДТС" 28.12.2015 года с изменениями' ),
	),
	'2014' => array(
		array( 'https://www.kdts.kz/ru/wp-content/uploads/2026/02/Plan-zakupok-tovarov-rabot-i-uslug-na-2026-god-po-sostoyaniyu-na-05.02.2026.xlsx', 'План закупок товаров, работ и услуг на 2026 год по состоянию на 05.02.2026' ),
		array( 'https://www.kdts.kz/ru/wp-content/uploads/2021/04/plan_zakupok_tovarov_rabot_i_uslug_ao_kdts_na_2014_god_81260.xlsx', 'План закупок товаров, работ и услуг АО "КДТС" на 03.12.2014 год' ),
		array( 'https://www.kdts.kz/ru/wp-content/uploads/2021/04/plan_zakupok_tovarov_rabot_i_uslug_ao_kdts_na_2014_god_18984.xlsx', 'План закупок товаров, работ и услуг АО "КДТС" на 22.12.2014 год' ),
	),
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
		<div class="ann-filter" role="tablist">
			<?php $first = true; foreach ( array_keys( $lists ) as $year ) : ?>
				<button type="button" class="ann-filter-btn<?php echo $first ? ' is-active' : ''; ?>" data-year="<?php echo esc_attr( $year ); ?>"><?php echo esc_html( $year ); ?></button>
			<?php $first = false; endforeach; ?>
		</div>
		<?php $first = true; foreach ( $lists as $year => $files ) : ?>
			<div class="fin-panel" data-year="<?php echo esc_attr( $year ); ?>"<?php echo $first ? '' : ' hidden'; ?>>
				<div class="doc-card-grid">
					<?php foreach ( $files as $f ) { kdts_fin_card( $f[0], $f[1] ); } ?>
				</div>
			</div>
		<?php $first = false; endforeach; ?>
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

<script>
(function () {
	var buttons = document.querySelectorAll('.ann-filter-btn');
	var panels = document.querySelectorAll('.fin-panel');
	Array.prototype.forEach.call(buttons, function (b) {
		b.addEventListener('click', function () {
			var y = b.getAttribute('data-year');
			Array.prototype.forEach.call(buttons, function (x) { x.classList.toggle('is-active', x === b); });
			Array.prototype.forEach.call(panels, function (p) { p.hidden = p.getAttribute('data-year') !== y; });
		});
	});
})();
</script>

<?php get_footer(); ?>
