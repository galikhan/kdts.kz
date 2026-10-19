<?php
 /*
 * Template name: dopolnitelnaya-informatsiya
 */
?>
<?php get_header(); ?>
<?php
// Pages of the "annual procurement plan" group (parent page 270 + its sub-pages).
$plan_pages = array( 270, 276, 274, 272 );

/* Documents: [ [ file url, title ], ... ]. Local copy of a file is used when it exists. */
$lists = array(
	'2026' => array(
		array( 'https://www.kdts.kz/ru/wp-content/uploads/2026/06/Informatsiya-o-planiruemyh-zakupkah-provodimyh-s-primeneniem-osobogo-poryadka-na-2026-god.xlsx', 'Информация о планируемых закупках, проводимых с применением особого порядка на 2026 год' ),
	),
	'2025' => array(
		array( 'https://www.kdts.kz/ru/wp-content/uploads/2024/12/Informatsiya-o-planiruemyh-zakupkah-provodimyh-s-primeneniem-osobogo-poryadka-2025-goda.xlsx', 'Информация о планируемых закупках, проводимых с применением особого порядка на 2025 год по АО «Кедентранссервис»' ),
	),
	'2024' => array(
		array( 'https://www.kdts.kz/ru/wp-content/uploads/2024/02/Informatsiya-o-planiruemyh-zakupkah-provodimyh-s-primeneniem-osobogo-poryadka-aprel-2024-goda.xlsx', 'Информация о планируемых закупках, проводимых с применением особого порядка апрель 2024 года' ),
		array( 'https://www.kdts.kz/ru/wp-content/uploads/2024/06/Informatsiya-o-planiruemyh-zakupkah-provodimyh-s-primeneniem-osobogo-poryadka-may-2024-goda-1.xlsx', 'Информация о планируемых закупках, проводимых с применением особого порядка на 2024 год по Акционерному обществу «Кедентранссервис» от 13 мая' ),
		array( 'https://www.kdts.kz/ru/wp-content/uploads/2024/12/ZAPROS-na-uchastie-v-protsedure-vybora-audit-org-1.docx', 'АО «Кедентранссервис» (010000, г.Астана ул. Достык, 18, кабинет 1414)' ),
	),
	'2023' => array(
		array( 'https://www.kdts.kz/ru/wp-content/uploads/2023/01/Informatsiya-o-planiruemyh-zakupkah-provodimyh-s-primeneniem-osobogo-poryadka.xlsx', 'Информация о планируемых закупках, проводимых с применением особого порядка' ),
		array( 'https://www.kdts.kz/ru/wp-content/uploads/2023/02/Informatsiya-o-planiruemyh-zakupkah-provodimyh-s-primeneniem-osobogo-poryadka-1.xlsx', 'Информация о планируемых закупках, проводимых с применением особого порядка' ),
		array( 'https://www.kdts.kz/ru/wp-content/uploads/2023/06/Informatsiya-o-planiruemyh-zakupkah-provodimyh-s-primeneniem-osobogo-poryadka-iyun-2023-goda_.xlsx', 'Информация о планируемых закупках, проводимых с применением особого порядка июнь 2023 года' ),
	),
	'2022' => array(
		array( 'https://www.kdts.kz/ru/wp-content/uploads/2023/01/perechen_pervoocherednyh_zakupok_tovarov_rabot_i_uslug_ao_kedentransservis_na_2014_god_67538-1.xlsx', 'Перечень первоочередных закупок товаров, работ и услуг АО «Кедентранссервис» на 2014 год' ),
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
