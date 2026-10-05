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
	array( 'https://www.kdts.kz/en/wp-content/uploads/2021/03/Prejskurant-KDTS-Prilozhenie-3-1.xlsx', 'Long-term procurement plan for TRU JSC "KDTS" with amendments' ),
	array( 'https://www.kdts.kz/en/wp-content/uploads/2021/03/Prejskurant-KDTS-Prilozhenie-3-1.xlsx', 'Long-term procurement plan for TRU JSC "KDTS" 2015-2018 with amendments' ),
	array( 'https://www.kdts.kz/en/wp-content/uploads/2021/03/Prejskurant-KDTS-Prilozhenie-3-1.xlsx', 'Long-term procurement plan for TRU JSC "KDTS" 2015-2018 with amendments' ),
	array( 'https://www.kdts.kz/en/wp-content/uploads/2021/03/Prejskurant-KDTS-Prilozhenie-3-1.xlsx', 'Long-term procurement plan for TRU JSC "KDTS" 2015-2018 with amendments' ),
	array( 'https://www.kdts.kz/en/wp-content/uploads/2021/03/Prejskurant-KDTS-Prilozhenie-3-1.xlsx', 'Long-term procurement plan for TRU JSC "KDTS" for 2015-2018 with amendments' ),
	array( 'https://www.kdts.kz/en/wp-content/uploads/2021/03/Prejskurant-KDTS-Prilozhenie-3-1.xlsx', 'Long-term procurement plan for TRU JSC "Kedentransservice" for 2015-2018' ),
	array( 'https://www.kdts.kz/en/wp-content/uploads/2021/03/Prejskurant-KDTS-Prilozhenie-3-1.xlsx', 'Long-term procurement plan for goods, works and services' ),
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
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
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


<?php get_footer(); ?>
