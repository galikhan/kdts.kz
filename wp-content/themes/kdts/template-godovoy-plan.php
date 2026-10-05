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
	'2021' => array(
		array( '', '2021 жылға арналған бірінші кезектегі сатып алу тізбесі' ),
		array( 'https://www.kdts.kz/wp-content/uploads/2021/08/yeartender_29.01.2021_19516-2.xlsx', 'Тауарларды, жұмыстарды және қызметтерді сатып алу жоспары-29.01.2021' ),
		array( 'https://www.kdts.kz/wp-content/uploads/2021/08/yeartender_19.02.2021_17156.xlsx', 'Тауарларды, жұмыстарды және қызметтерді сатып алу жоспары-19.02.2021' ),
		array( 'https://www.kdts.kz/wp-content/uploads/2021/08/Plan-zakupok-ot-26-iyulya-2021-goda.xlsx', 'Тауарларды, жұмыстарды және қызметтерді сатып алу жоспары-26.07.2021' ),
		array( 'https://www.kdts.kz/wp-content/uploads/2021/08/PDZ-ot-6-avgusta-2021-goda.xlsx', 'Тауарларды, жұмыстарды және қызметтерді сатып алу жоспары-06.08.2021' ),
	),
	'2020' => array(
		array( 'https://www.kdts.kz/wp-content/uploads/2021/04/yeartender_18.06.2020_49100.xlsx', 'Тауарларды, жұмыстарды және қызметтерді сатып алу жоспары-18.06.2020' ),
		array( 'https://www.kdts.kz/wp-content/uploads/2021/04/yeartender_22.10.2020_60241.xlsx', 'Тауарларды, жұмыстарды және қызметтерді сатып алу жоспары-22.10.2020' ),
	),
	'2017' => array(
		array( 'https://www.kdts.kz/wp-content/uploads/2021/04/yeartender_06.11.2017_40497.xlsx', '"КДТС" АҚ сатып алу жоспары 06.11.2017 ж. өзгерістермен' ),
		array( 'https://www.kdts.kz/wp-content/uploads/2021/04/yeartender_24.11.2017_76753-1.xlsx', '"КДТС" АҚ сатып алу жоспары 24.11.2017 ж. өзгерістермен' ),
		array( 'https://www.kdts.kz/wp-content/uploads/2021/04/yeartender_30.11.2017_90403.xlsx', '"КДТС" АҚ сатып алу жоспары 30.11.2017 ж. өзгерістермен' ),
		array( 'https://www.kdts.kz/wp-content/uploads/2021/04/yeartender_15.12.2017_40825.xlsx', '"КДТС" АҚ сатып алу жоспары 15.12.2017 ж. өзгерістермен' ),
	),
	'2016' => array(
		array( 'https://www.kdts.kz/wp-content/uploads/2021/04/yeartender_21.10.2016_55775.xlsx', '"КДТС" АҚ сатып алу жоспары 21.10.2016 ж. өзгерістермен' ),
		array( 'https://www.kdts.kz/wp-content/uploads/2021/04/yeartender_10.11.2016_97142.xlsx', '"КДТС" АҚ сатып алу жоспары 10.11.2016 ж. өзгерістермен' ),
		array( 'https://www.kdts.kz/wp-content/uploads/2021/04/yeartender_09.12.2016_38854.xlsx', '"КДТС" АҚ сатып алу жоспары 09.12.2016 ж. өзгерістермен' ),
	),
	'2015' => array(
		array( 'https://www.kdts.kz/wp-content/uploads/2021/04/plan_zakupok_ao_kdts_2015_goda_s_izmeneniyami_91657.xlsx', '"КДТС" АҚ сатып алу жоспары 17.11.2015 ж. өзгерістермен' ),
		array( 'https://www.kdts.kz/wp-content/uploads/2021/04/plan_zakupok_ao_kdts_2015_goda_s_izmeneniyami_80651.xlsx', '"КДТС" АҚ сатып алу жоспары 04.12.2015 ж. өзгерістермен' ),
		array( 'https://www.kdts.kz/wp-content/uploads/2021/04/yeartender_28.12.2015_66536.xlsx', '"КДТС" АҚ сатып алу жоспары 28.12.2015 ж. өзгерістермен' ),
	),
	'2014' => array(
		array( 'https://www.kdts.kz/wp-content/uploads/2021/04/plan_zakupok_tovarov_rabot_i_uslug_ao_kdts_na_2014_god_51472.xlsx', '"КДТС" АҚ сатып алу жоспары 24.11.2014 ж. өзгерістермен' ),
		array( 'https://www.kdts.kz/wp-content/uploads/2021/04/plan_zakupok_tovarov_rabot_i_uslug_ao_kdts_na_2014_god_81260.xlsx', '"КДТС" АҚ сатып алу жоспары 03.12.2014 ж. өзгерістермен' ),
		array( 'https://www.kdts.kz/wp-content/uploads/2021/04/plan_zakupok_tovarov_rabot_i_uslug_ao_kdts_na_2014_god_18984.xlsx', '"КДТС" АҚ сатып алу жоспары 22.12.2014 ж. өзгерістермен' ),
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
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Басты бет</a>
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
