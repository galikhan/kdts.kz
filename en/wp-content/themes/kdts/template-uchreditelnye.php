<?php
 /*
 * Template name: uchreditelnye
 */
?>
<?php get_header(); ?>
<?php
/* Constituent documents: [ file url, title ]. Local copy of a file is used when it exists. */
$documents = array(
	array( 'https://www.kdts.kz/en/wp-content/uploads/2022/06/Ustav-AO-Kedentransservis-ot-10.06.2022-g.pdf', 'The Charter of JSC "Kedentransservice" in a new edition was approved by the decision of the Sole Shareholder of KDTS dated June 10, 2022 (Minutes No. 02/21)' ),
	array( 'https://www.kdts.kz/en/wp-content/uploads/2021/04/Izm-i-dop-v-Ustav-ot-18.08.2020g..pdf', 'Changes and additions to the Company\'s Charter dated 18.08.2020' ),
	array( 'https://www.kdts.kz/en/wp-content/uploads/2021/04/0b50e305f2dbb5743ac534a9a085470a-1.pdf', 'Changes and additions to the Company\'s Charter dated 26.07.2017' ),
	array( 'https://www.kdts.kz/en/wp-content/uploads/2021/03/ustav_kompanii.pdf', 'Charter of JSC "Kedentransservice"' ),
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
			<span class="crumb-current"><?php the_title(); ?></span>
		</div>
		<h1><?php the_title(); ?></h1>
		<div class="subnav-pills">
			<a href="<?php echo esc_url( home_url( '/obyavleniya' ) ); ?>">Announcements</a>
			<a href="<?php echo esc_url( home_url( '/stavki-i-tarify' ) ); ?>">Rates and Tariffs</a>
			<a href="<?php echo esc_url( home_url( '/park-platform-i-konteynerov' ) ); ?>">Park of platforms</a>
			<a href="<?php echo esc_url( home_url( '/tipovye-dogovora' ) ); ?>">Standard contracts</a>
			<a href="<?php echo esc_url( home_url( '/uchreditelnye-dokumenty' ) ); ?>" class="is-active">Constituent documents</a>
		</div>
	</div>
</section>

<section class="page-content is-wide">
	<div class="container">
		<div class="doc-card-grid">
			<?php foreach ( $documents as $doc ) { kdts_fin_card( $doc[0], $doc[1] ); } ?>
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
