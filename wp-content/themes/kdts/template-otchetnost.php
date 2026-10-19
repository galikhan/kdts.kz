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
		array( 'https://www.kdts.kz/wp-content/uploads/2025/12/Keden_kaz_08.12.2025.pdf', 'Жылдық есеп 2024' ),
		array( '', 'Список аффилированных лиц по состоянию на 01.01.2020 г.' ),
	),
	'2023' => array(
		array( 'https://www.kdts.kz/wp-content/uploads/2024/11/GO_qaz-1.pdf', '«Кедентранссервис» АҚ 2023 жылдық есебі' ),
	),
	'2022' => array(
		array( 'https://www.kdts.kz/wp-content/uploads/2023/12/Kedentransservis-A-2022-zhyldy-esebi.pdf', '«Кедентранссервис» АҚ 2022 жылдық есебі' ),
		array( 'https://www.kdts.kz/wp-content/uploads/2023/11/Konsolidirovannaya-FO-KDTS-po-IS-2022_s-zaklyuch-auditora.pdf', 'Халықаралық қаржылық есептілік стандарттарына сәйкес шоғырландырылған «Кедентранссервис» АҚ 2022 жылғы қаржылық есептілігі және Аудиторлық қорытынды' ),
		array( 'https://www.kdts.kz/wp-content/uploads/2023/11/Otdelnaya-FO-po-IS-2022_KDTS-s-zaklyuch-auditora.pdf', 'Халықаралық қаржылық есептілік стандарттарына сәйкес «Кедентранссервис» АҚ 2022 жылғы бөлек жеке қаржылық есептілігі және Аудиторлық қорытынды' ),
		array( 'https://www.kdts.kz/wp-content/uploads/2023/11/Formy-konsolidirovannoi-godovoi-FO-KDTS-2022-god-1.pdf', '«Кедентранссервис» АҚ 2022 жылғы шоғырландырылған қаржылық есептілігінің формасы' ),
		array( 'https://www.kdts.kz/wp-content/uploads/2023/11/Formy-otdelnoi-godovoi-FO-KDTS-2022-god.pdf', '«Кедентранссервис» АҚ 2022 жылғы бөлек жеке қаржылық есептілігінің формасы' ),
	),
	'2021' => array(
		array( 'https://www.kdts.kz/wp-content/uploads/2024/11/29.11.22-na-kaz-yaz_Godovoj-otchet-final-1.pdf', '«Кедентранссервис» АҚ 2021 жылдық есебі' ),
		array( 'https://www.kdts.kz/wp-content/uploads/2022/08/FO-konsolid-2021.pdf', 'Халықаралық қаржылық есептілік стандарттарына сәйкес шоғырландырылған қаржылық есептілік және Аудиторлық қорытынды' ),
		array( 'https://www.kdts.kz/wp-content/uploads/2024/11/29.11.22-na-kaz-yaz_Godovoj-otchet-final.pdf', 'Список аффилированных лиц по состоянию на 01.01.2020 г.' ),
		array( 'https://www.kdts.kz/wp-content/uploads/2022/08/FO-otdelnaya-2021.pdf', 'Халықаралық қаржылық есептілік стандарттарына сәйкес бөлек жеке қаржылық есептілік және Аудиторлық қорытынды' ),
	),
	'2020' => array(
		array( 'https://www.kdts.kz/wp-content/uploads/2021/09/Otdelnaya-godovaya-otchetnost-za-2020-god-1-1.pdf', 'Халықаралық қаржылық есептілік стандарттарына сәйкес бөлек жеке қаржылық есептілік және Аудиторлық қорытынды' ),
		array( 'https://www.kdts.kz/wp-content/uploads/2021/09/Konsolidirovannyj-godovoj-otchet-za-2020-god-1-1.pdf', 'Халықаралық қаржылық есептілік стандарттарына сәйкес шоғырландырылған қаржылық есептілік және Аудиторлық қорытынды' ),
		array( 'https://www.kdts.kz/wp-content/uploads/2021/12/Godovoj-otchet-KDTS-za-2020-god.pdf', '«Кедентранссервис» АҚ 2020 жылдық есебі' ),
	),
	'2019' => array(
		array( 'https://www.kdts.kz/wp-content/uploads/2021/04/5089250cdf795252a9d204af1c5890fc.pdf', '2019 ж. бойынша шоғырланған қаржылық есеп' ),
		array( 'https://www.kdts.kz/wp-content/uploads/2021/04/dfa4344c94c6ee74df5360598c08f5fc.pdf', '2019 ж. бойынша жекелеген қаржылық есеп' ),
	),
	'2018' => array(
		array( 'https://www.kdts.kz/wp-content/uploads/2021/04/d3a103347a47c7c40b15e51ab2e4bcd8.pdf', '2018 ж. бойынша шоғырланған қаржылық есеп' ),
		array( 'https://www.kdts.kz/wp-content/uploads/2021/04/9e3707ea5d4348f738f4775fffd78fce.pdf', '2018 ж. бойынша жекелеген қаржылық есеп' ),
	),
	'2017' => array(
		array( 'https://www.kdts.kz/wp-content/uploads/2021/04/351fcce4cb7a4ecd6c342fb1724fa94f.pdf', '2017 ж. бойынша шоғырланған қаржылық есеп' ),
		array( 'https://www.kdts.kz/wp-content/uploads/2021/04/ff2088806649d23eaa139ee7ed3ab0a6.pdf', '2017 ж. бойынша жекелеген қаржылық есеп' ),
		array( 'https://www.kdts.kz/wp-content/uploads/2021/04/4830f8523c537c910866f7341ee5f835.pdf', '2017 жылға арналған жылдық есеп' ),
	),
	'2016' => array(
		array( 'https://www.kdts.kz/wp-content/uploads/2021/04/2016-1-1.pdf', '2016 жылға арналған жылдық есеп' ),
		array( 'https://www.kdts.kz/wp-content/uploads/2021/04/2016-2-1.pdf', '2016 жылға арналған жылдық есеп' ),
	),
	'2015' => array(
		array( 'https://www.kdts.kz/wp-content/uploads/2021/04/4830f8523c537c910866f7341ee5f835-1.pdf', '2015 жылға арналған жылдық есеп' ),
	),
	'2010' => array(
		array( 'https://www.kdts.kz/wp-content/uploads/2021/04/0d638c8d80e2785aba9f2de555ce7f96.pdf', '2010 жылға арналған жылдық есеп' ),
	),
	'Басқа' => array(
		array( 'https://www.kdts.kz/wp-content/uploads/2021/09/Otdelnaya-godovaya-otchetnost-za-2020-god-1.pdf', '2020 жыл бойынша жекелеген қаржылық есеп' ),
		array( '', 'Халықаралық қаржылық есептілік стандарттарына сәйкес «Кедентранссервис» АҚ 2022 жылғы бөлек жеке қаржылық есептілігі және Аудиторлық қорытынды' ),
		array( '', '«Кедентранссервис» АҚ 2022 жылғы шоғырландырылған қаржылық есептілігінің формасы' ),
		array( '', '«Кедентранссервис» АҚ 2022 жылғы бөлек жеке қаржылық есептілігінің формасы' ),
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
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Басты бет</a>
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
