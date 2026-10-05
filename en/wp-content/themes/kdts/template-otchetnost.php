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
		array( 'https://www.kdts.kz/en/wp-content/uploads/2025/12/Keden_eng_08.12.2025.pdf', 'ANNUAL REPORT 2024' ),
		array( '', 'Список аффилированных лиц по состоянию на 01.01.2020 г.' ),
		array( 'https://www.kdts.kz/en/wp-content/uploads/2024/02/Informatsiya-o-planiruemyh-zakupkah-provodimyh-s-primeneniem-osobogo-poryadka-aprel-2024-goda.xlsx', 'Information on planned special procedure procurement April 2024' ),
	),
	'2023' => array(
		array( 'https://www.kdts.kz/en/wp-content/uploads/2024/11/GO_eng.pdf', 'Annual report of Kedentransservice JSC for 2023' ),
	),
	'2022' => array(
		array( 'https://www.kdts.kz/en/wp-content/uploads/2023/12/Annual-report-of-Kedentransservice-JSC-for-2022.pdf', 'Annual report of Kedentransservice JSC for 2022' ),
		array( 'https://www.kdts.kz/en/wp-content/uploads/2023/11/Konsolidirovannaya-FO-KDTS-po-IS-2022_s-zaklyuch-auditora_english-1.pdf', 'Kedentransservice JSC Consolidated financial statements for 2022 in accordance with International Financial Reporting Standards and Independent auditor’s report' ),
		array( 'https://www.kdts.kz/en/wp-content/uploads/2023/11/Otdelnaya-FO-po-IS-2022_KDTS-s-zaklyuch-auditora.pdf', 'Separate Financial statements for 2022 in accordance with International Financial Reporting Standards and Independent auditor’s report' ),
		array( 'https://www.kdts.kz/en/wp-content/uploads/2023/11/Formy-konsolidirovannoi-godovoi-FO-KDTS-2022-god-1.pdf', 'Forms of consolidated financial statements Kedentransservice JSC for 2022' ),
		array( 'https://www.kdts.kz/en/wp-content/uploads/2023/11/Formy-otdelnoi-godovoi-FO-KDTS-2022-god-1.pdf', 'Forms of Separate Financial statements of Kedentransservice JSC for 2022' ),
	),
	'2021' => array(
		array( 'https://www.kdts.kz/en/wp-content/uploads/2024/11/KEDENTRANCESERVICE_AR-2112_21_Eng-1.pdf', 'Annual report of Kedentransservice JSC for 2021' ),
		array( 'https://www.kdts.kz/en/wp-content/uploads/2022/08/Consolidated-Financial-Statements_2021.pdf', 'Kedentransservice JSC International Financial Reporting Standards Consolidated Financial Statements and Independent Auditor’s Report' ),
		array( 'https://www.kdts.kz/en/wp-content/uploads/2022/08/FO-otdelnaya-2021.pdf', 'Separate financial statements in accordance with International Financial Reporting Standards and Auditor\'s Report' ),
	),
	'2020' => array(
		array( 'https://www.kdts.kz/en/wp-content/uploads/2021/09/Consolidated-annual-statements-2020-1.pdf', 'Consolidated financial statements in accordance with International Financial Reporting Standards and Auditor\'s Report' ),
		array( 'https://www.kdts.kz/en/wp-content/uploads/2021/12/Godovoj-otchet-KDTS-za-2020-god.pdf', 'Annual report of JSC "Kedentransservice" for 2020' ),
		array( 'https://www.kdts.kz/en/wp-content/uploads/2021/12/Otdelnaya-godovaya-otchetnost-za-2020-god-1.pdf', 'Separate financial statements in accordance with International Financial Reporting Standards and Auditor\'s Report' ),
	),
	'2019' => array(
		array( 'https://www.kdts.kz/en/wp-content/uploads/2022/04/Consolidated-financial-statements-2019.pdf', 'Consolidated financial statements in accordance with International Financial Reporting Standards and Auditor’s Report' ),
		array( 'https://www.kdts.kz/en/wp-content/uploads/2021/03/otdelniy_fin_otchet_2019.pdf', 'Separate annual statements 2019' ),
	),
	'2018' => array(
		array( 'https://www.kdts.kz/en/wp-content/uploads/2021/03/fin_otchet_2018.pdf', 'Consolidated financial statements in accordance with International Financial Reporting Standards and Auditor’s Report' ),
		array( 'https://www.kdts.kz/en/wp-content/uploads/2021/03/otdelniy_fin_otchet_2018.pdf', 'Separate annual statements 2018' ),
	),
	'2017' => array(
		array( 'https://www.kdts.kz/en/wp-content/uploads/2021/03/fin_otchet_2017.pdf', 'Consolidated financial statements in accordance with International Financial Reporting Standards and Auditor’s Report' ),
		array( 'https://www.kdts.kz/en/wp-content/uploads/2021/03/otdelniy_fin_otchet_2017.pdf', 'Separate annual statements 2017' ),
	),
	'2016' => array(
		array( 'https://www.kdts.kz/en/wp-content/uploads/2021/04/2016-1.pdf', 'Annual report for 2016' ),
	),
	'2015' => array(
		array( 'https://www.kdts.kz/en/wp-content/uploads/2021/03/annual-report_2015.pdf', 'Annual report for 2015' ),
	),
	'2010' => array(
		array( 'https://www.kdts.kz/en/wp-content/uploads/2022/08/Consolidated-Financial-Statements_2021.pdf', 'Kedentransservice JSC International Financial Reporting Standards Consolidated Financial Statements and Independent Auditor’s Report' ),
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
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
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
		<h2>READY TO DELIVER YOUR CARGO</h2>
		<p>
			<span>Submit a request to calculate the tariff or contact us directly:</span>
			<span class="cta-phones"><?php echo esc_html( CFS()->get( 'telefon1', 606 ) ); ?></span>
		</p>
		<div class="cta-buttons">
			<a href="https://my.kdts.kz/" target="_blank" rel="noopener" class="btn btn-primary">CALCULATE TARIFF</a>
			<a href="<?php echo esc_url( get_permalink( 606 ) ); ?>" class="btn btn-outline-light">CONTACT US</a>
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
