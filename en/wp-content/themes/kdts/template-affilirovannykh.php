<?php
 /*
 * Template name: affilirovannykh
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

/* Lists by year: [ year => [ [ file url, title ], ... ] ]. Local copy of a file is used when it exists. */
$reports = array(
	'2026' => array(
		array( 'https://www.kdts.kz/en/wp-content/uploads/2026/08/Spisok-affilirovannyh-lits-po-sostoyaniyu-na-01.07.2026-g.xlsx', 'List of affiliated persons as of 01.07.2026 г.' ),
		array( 'https://www.kdts.kz/en/wp-content/uploads/2026/06/Spisok-affilirovannyh-lits-po-sostoyaniyu-na-01.04.2026-god.xlsx', 'List of affiliated persons as of 01.04.2026 г.' ),
	),
	'2024' => array(
		array( 'https://www.kdts.kz/en/wp-content/uploads/2024/11/Spisok-affilirovannyh-lits-po-sostoyaniyu-na-01.10.2024.xlsx', 'List of affiliated persons as of 01.10.2020 y' ),
		array( 'https://www.kdts.kz/en/wp-content/uploads/2024/02/Spisok-affilirovannyh-lits-po-sostoyaniyu-na-01.01.2024g..xlsx', 'List of affiliated persons as of 01.01.2020 y' ),
	),
	'2023' => array(
		array( 'https://www.kdts.kz/en/wp-content/uploads/2023/11/01012023.pdf', 'List of affiliated persons as of 01.01.2023' ),
		array( 'https://www.kdts.kz/en/wp-content/uploads/2023/11/Spisok-affilirovannyh-lits-na-01.07.2023-g.-1.xlsx', 'List of affiliated persons as of 01.07.2023' ),
		array( 'https://www.kdts.kz/en/wp-content/uploads/2023/11/Spisok-affilirovannyh-lits-po-sostoyaniyu-na-01.10.2023-g.-1.xlsx', 'List of affiliated persons as of 01.10.2023' ),
	),
	'2022' => array(
		array( 'https://www.kdts.kz/en/wp-content/uploads/2022/02/Af.-litsa-KDTS-na-01.01.2022g..pdf', 'List of affiliated persons as of 01.01.2022' ),
		array( 'https://www.kdts.kz/en/wp-content/uploads/2023/11/Spisok-affilirovannyh-lits-na-01.07.2023-g..xlsx', 'List of affiliated persons as of 01.07.2022' ),
		array( 'https://www.kdts.kz/en/wp-content/uploads/2023/11/Spisok-affilirovannyh-lits-po-sostoyaniyu-na-01.10.2023-g..xlsx', 'List of affiliated persons as of 01.10.2022' ),
	),
	'2021' => array(
		array( 'https://www.kdts.kz/en/wp-content/uploads/2021/04/af.-litsa-KDTS-na-01.01.2021g..pdf', 'List of affiliated persons as of 01.01.2021' ),
		array( 'https://www.kdts.kz/en/wp-content/uploads/2021/04/Af.-litsa-KDTS-na-01.04.2021g..pdf', 'List of affiliated persons as of 01.04.2021' ),
		array( 'https://www.kdts.kz/en/wp-content/uploads/2021/08/af.-litsa-KDTS-na-01.07.2021g..pdf', 'List of affiliated persons as of 01.07.2021' ),
		array( 'https://www.kdts.kz/en/wp-content/uploads/2021/11/af.-litsa-KDTS-na-01.10.2021g..pdf', 'List of affiliated persons as of 01.10.2021' ),
	),
	'2020' => array(
		array( 'https://www.kdts.kz/en/wp-content/uploads/2021/03/af.-litsa-KDTS-na-01.07.2020g..pdf', 'List of affiliated persons as of 01.07.2020' ),
		array( 'https://www.kdts.kz/en/wp-content/uploads/2021/03/Spisok-affil.-lits-KDTS_01.04.2020g..pdf', 'List of affiliated persons as of 01.04.2020' ),
		array( 'https://www.kdts.kz/en/wp-content/uploads/2021/03/Spisok-affil.-lits-KDTS_01.01.2020g..pdf', 'List of affiliated persons as of 01.01.2020' ),
	),
	'2019' => array(
		array( 'https://www.kdts.kz/en/wp-content/uploads/2021/03/Spisok-affil.-lits-KDTS_01.10.2019g..pdf', 'List of affiliated persons as of 01.10.2019' ),
		array( 'https://www.kdts.kz/en/wp-content/uploads/2021/03/Spisok-affil.-lits-KDTS_01.07.2019g..pdf', 'List of affiliated persons as of 01.07.2019' ),
		array( 'https://www.kdts.kz/en/wp-content/uploads/2021/03/Spisok-affil.-lits-KDTS_01.04.2019g..pdf', 'List of affiliated persons as of 01.04.2019' ),
		array( 'https://www.kdts.kz/en/wp-content/uploads/2021/03/Spisok-affil.-lits-KDTS_01.01.2019g..pdf', 'List of affiliated persons as of 01.01.2019' ),
	),
	'2018' => array(
		array( 'https://www.kdts.kz/en/wp-content/uploads/2021/03/Spisok-affil.-lits-KDTS_01.10.2018g.-1.pdf', 'List of affiliated persons as of 01.10.2018' ),
		array( 'https://www.kdts.kz/en/wp-content/uploads/2021/03/Spisok-affil.-lits-KDTS_01.07.2018g..pdf', 'List of affiliated persons as of 01.07.2018' ),
		array( 'https://www.kdts.kz/en/wp-content/uploads/2021/03/Spisok-affil.-lits-KDTS_01.04.2018g..pdf', 'List of affiliated persons as of 01.04.2018' ),
		array( 'https://www.kdts.kz/en/wp-content/uploads/2021/03/Spisok-affil.-lits-KDTS_01.01.2018g..pdf', 'List of affiliated persons as of 01.01.2018' ),
	),
	'2017' => array(
		array( 'https://www.kdts.kz/en/wp-content/uploads/2021/03/Spisok-affil.-lits-KDTS_01.10.2017g..pdf', 'List of affiliated persons as of 01.10.2017' ),
		array( 'https://www.kdts.kz/en/wp-content/uploads/2021/03/list_affiliates-01.07.2017-new.pdf', 'List of affiliated persons as of 01.07.2017' ),
		array( 'https://www.kdts.kz/en/wp-content/uploads/2021/03/list_affiliates-01.04.2017.pdf', 'List of affiliated persons as of 01.04.2017' ),
		array( 'https://www.kdts.kz/en/wp-content/uploads/2021/03/list_affiliates-01.01.2017.pdf', 'List of affiliated persons as of 01.01.2017' ),
	),
	'2016' => array(
		array( 'https://www.kdts.kz/en/wp-content/uploads/2021/03/list_affiliates-01.04.2016_ur.pdf', 'List of affiliated persons as of 01.04.2016, entities' ),
		array( 'https://www.kdts.kz/en/wp-content/uploads/2021/03/list_affiliates-01.04.2016_fiz.pdf', 'List of affiliated persons as of 01.04.2016, individuals' ),
		array( 'https://www.kdts.kz/en/wp-content/uploads/2021/03/list_affiliates-01.01.2016.pdf', 'List of affiliated persons on 01.01.2016' ),
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
