<?php
 /*
 * Template name: otchetnost
 */
?>
<?php get_header(); ?>
<?php
// Sub-pages of the "Shareholders" section come from the admin-editable menu.
$sub_pages = array();
$locations = get_nav_menu_locations();
if ( ! empty( $locations['aktsioneram-menu'] ) ) {
	$sub_pages = wp_get_nav_menu_items( $locations['aktsioneram-menu'] ) ?: array();
}

/* Reports by year: [ year => [ [ file url, title ], ... ] ]. Local copy of a file is used when it exists. */
$reports = array(
	'2024' => array(
		array( 'https://www.kdts.kz/ru/wp-content/uploads/2025/12/Keden_rus_08.12.2025.pdf', 'ГОДОВОЙ ОТЧЕТ 2024' ),
	),
	'2023' => array(
		array( 'https://www.kdts.kz/ru/wp-content/uploads/2024/10/Godovoj-otchet-AO-Kedentransservis-za-2023-god-1-1.pdf', 'Годовой отчет АО «Кедентранссервис» за 2023 год' ),
		array( 'https://www.kdts.kz/ru/wp-content/uploads/2024/10/Otdelnaya-finansovaya-otchetnost-AO-Kedentransservis-za-2023-god-v-sootvetstvii-s-Mezhdunar-sta-1.pdf', 'Отдельная финансовая отчетность АО Кедентранссервис за 2023 год' ),
	),
	'2022' => array(
		array( 'https://www.kdts.kz/ru/wp-content/uploads/2023/12/Godovoi-otchet-AO-Kedentransservis-za-2022-god.pdf', 'Годовой отчет АО «Кедентранссервис» за 2022 год' ),
		array( 'https://www.kdts.kz/ru/wp-content/uploads/2023/11/Konsolidirovannaya-FO-KDTS-po-IS-2022_s-zaklyuch-auditora.pdf', 'Консолидированная финансовая отчетность АО «Кедентранссервис» за 2022 год в соответствии с Международными стандартами финансовой отчетности и Аудиторское заключение' ),
		array( 'https://www.kdts.kz/ru/wp-content/uploads/2023/11/Otdelnaya-FO-po-IS-2022_KDTS-s-zaklyuch-auditora.pdf', 'Отдельная финансовая отчетность АО «Кедентренссервис» за 2022 год в соответствии с Международными стандартами финансовой отчетности и Аудиторское заключение' ),
		array( 'https://www.kdts.kz/ru/wp-content/uploads/2023/11/Formy-konsolidirovannoi-godovoi-FO-KDTS-2022-god.pdf', 'Формы консолидированной годовой финансовой отчетности АО «Кедентранссервис» за 2022 год' ),
		array( 'https://www.kdts.kz/ru/wp-content/uploads/2023/11/Formy-otdelnoi-godovoi-FO-KDTS-2022-god.pdf', 'Формы отдельной годовой финансовой отчетности АО «Кедентранссервис» за 2022 год' ),
	),
	'2021' => array(
		array( 'https://www.kdts.kz/ru/wp-content/uploads/2024/11/KDTS_AR-2021-Web-Pages_RU.pdf', 'Годовой отчет АО «Кедентранссервис» за 2021 год' ),
		array( 'https://www.kdts.kz/ru/wp-content/uploads/2022/08/FO-konsolid-2021.pdf', 'Консолидированная финансовая отчетность АО «Кедентранссервис» за 2021 год в соответствии с Международными стандартами финансовой отчетности и Аудиторское заключение' ),
		array( 'https://www.kdts.kz/ru/wp-content/uploads/2022/08/FO-otdelnaya-2021.pdf', 'Отдельная финансовая отчетность АО «Кедентранссервис» за 2021 год в соответствии с Международными стандартами финансовой отчетности и Аудиторское заключение' ),
	),
	'2020' => array(
		array( 'https://www.kdts.kz/ru/wp-content/uploads/2021/09/Konsolidirovannyj-godovoj-otchet-za-2020-god-1.pdf', 'Консолидированная финансовая отчетность в соответствии с Международными стандартами финансовой отчетности и Аудиторское заключение' ),
		array( 'https://www.kdts.kz/ru/wp-content/uploads/2021/09/Otdelnaya-godovaya-otchetnost-za-2020-god-1.pdf', 'Отдельная финансовая отчетность в соответствии с Международными стандартами финансовой отчетности и Аудиторское заключение' ),
		array( 'https://www.kdts.kz/ru/wp-content/uploads/2021/12/Godovoj-otchet-KDTS-za-2020-god.pdf', 'Годовой отчет АО «Кедентранссервис» за 2020 год' ),
	),
	'2019' => array(
		array( 'https://www.kdts.kz/ru/wp-content/uploads/2021/03/2019-1-fai-l-1.pdf', 'Отдельная годовая отчетность 2019 год' ),
		array( 'https://www.kdts.kz/ru/wp-content/uploads/2021/03/2019-2.pdf', 'Консолидированная годовая отчетность за 2019 год' ),
	),
	'2018' => array(
		array( 'https://www.kdts.kz/ru/wp-content/uploads/2021/03/2018-1-1.pdf', 'Консолидированная годовая отчетность за 2018 год' ),
		array( 'https://www.kdts.kz/ru/wp-content/uploads/2021/03/2018-2.pdf', 'Отдельная годовая отчетность за 2018 год' ),
	),
	'2017' => array(
		array( 'https://www.kdts.kz/ru/wp-content/uploads/2021/03/2017-1.pdf', 'Консолидированная годовая отчетность за 2017 год' ),
		array( 'https://www.kdts.kz/ru/wp-content/uploads/2021/03/2017-2.pdf', 'Отдельная годовая отчетность за 2017 год' ),
	),
	'2016' => array(
		array( 'https://www.kdts.kz/ru/wp-content/uploads/2021/03/2016-1.pdf', 'Годовой отчет за 2016 год' ),
		array( 'https://www.kdts.kz/ru/wp-content/uploads/2021/03/2016-2.pdf', 'Годовой отчет за 2016 год' ),
	),
	'2015' => array(
		array( 'https://www.kdts.kz/ru/wp-content/uploads/2021/03/2015-1.pdf', 'Годовой отчет за 2015 год' ),
	),
	'2010' => array(
		array( 'https://www.kdts.kz/ru/wp-content/uploads/2021/03/2010.pdf', 'Годовой отчет за 2010 год' ),
	),
	'Прочее' => array(
		array( 'https://www.kdts.kz/ru/wp-content/uploads/2021/09/Otdelnaya-godovaya-otchetnost-za-2020-god.pdf', 'Отдельная годовая отчетность 2020 год' ),
		array( 'https://www.kdts.kz/ru/wp-content/uploads/2021/09/Konsolidirovannyj-godovoj-otchet-za-2020-god.pdf', 'Консолидированная годовая отчетность за 2020 год' ),
		array( 'https://www.kdts.kz/ru/wp-content/uploads/2023/01/publikatsiya-na-sajte_KDTS_AR-2021-Web-Pages_RU.pdf', 'Годовой отчет. Расширение масштабов бизнеса' ),
		array( '', 'Отдельная финансовая отчетность АО Кедентранссервис за 2023 год' ),
	),
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
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Главная</a>
			<span class="crumb-sep">/</span>
			<a href="<?php echo esc_url( get_permalink( 29 ) ); ?>"><?php echo esc_html( get_the_title( 29 ) ); ?></a>
			<span class="crumb-sep">/</span>
			<span class="crumb-current"><?php the_title(); ?></span>
		</div>
		<h1><?php the_title(); ?></h1>
		<?php if ( $sub_pages ) : ?>
			<div class="subnav-pills">
				<?php foreach ( $sub_pages as $sub ) : ?>
					<a href="<?php echo esc_url( $sub->url ); ?>"<?php echo ( (int) $sub->object_id === get_the_ID() ) ? ' class="is-active"' : ''; ?>><?php echo esc_html( $sub->title ); ?></a>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>
	</div>
</section>

<section class="page-content">
	<div class="container">
		<div class="ann-filter" role="tablist">
			<?php $first = true; foreach ( array_keys( $reports ) as $year ) : ?>
				<button type="button" class="ann-filter-btn<?php echo $first ? ' is-active' : ''; ?>" data-year="<?php echo esc_attr( $year ); ?>"><?php echo esc_html( $year ); ?></button>
			<?php $first = false; endforeach; ?>
		</div>

		<?php $first = true; foreach ( $reports as $year => $files ) : ?>
			<div class="fin-panel" data-year="<?php echo esc_attr( $year ); ?>"<?php echo $first ? '' : ' hidden'; ?>>
				<div class="doc-card-grid">
					<?php foreach ( $files as $f ) { kdts_fin_card( $f[0], $f[1] ); } ?>
				</div>
			</div>
		<?php $first = false; endforeach; ?>
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
