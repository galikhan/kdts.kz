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
	array( 'https://www.kdts.kz/wp-content/uploads/2024/11/Informatsiya-o-planiruemyh-zakupkah-provodimyh-s-primeneniem-osobogo-poryadka-aprel-2024-goda.xlsx', '2024 жылға арналған "Кедентранссервис" АҚ тауарларды, жұмыстар мен қызметтерді бірінші кезектегі сатып алу тізбесі' ),
	array( 'https://www.kdts.kz/wp-content/uploads/2021/04/perechen_pervoocherednyh_zakupok_tovarov_rabot_i_uslug_ao_kedentransservis_na_2014_god_67538-1.xlsx', '2014 жылға арналған "Кедентранссервис" АҚ тауарларды, жұмыстар мен қызметтерді бірінші кезектегі сатып алу тізбесі' ),
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
		<div class="doc-card-grid">
			<?php foreach ( $lists as $doc ) { kdts_fin_card( $doc[0], $doc[1] ); } ?>
		</div>
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


<?php get_footer(); ?>
