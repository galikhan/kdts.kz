<?php
 /*
 * Template name: vnutrennie
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

/* Internal documents: [ file url, title ]. Local copy of a file is used when it exists. */
$documents = array(
	array( 'https://www.kdts.kz/en/wp-content/uploads/2021/09/Ekologicheskaya-politika.pdf', 'Environmental policy of JSC "Kedentransservice"' ),
	array( 'https://www.kdts.kz/en/wp-content/uploads/2021/09/Politka-v-oblasti-OZ-i-OBT.pdf', 'Policy of JSC "Kedentransservice" in the field of occupational health and ensuring workplace safety' ),
	array( 'https://www.kdts.kz/en/wp-content/uploads/2021/09/Politika-v-oblasti-kachestva-1.pdf', 'Quality policy of JSC "Kedentransservice"' ),
	array( 'https://www.kdts.kz/en/wp-content/uploads/2021/04/fb4866d4669197eb34e16b537d495f57-2.pdf', 'Regulations on the Audit Committee of JSC "Kedentransservice"' ),
	array( 'https://www.kdts.kz/en/wp-content/uploads/2021/04/dfc188c76f8cacb5dda2c5ae074d3675-4.pdf', 'Regulation on the dividend policy of JSC "Kedentransservice"' ),
	array( 'https://www.kdts.kz/en/wp-content/uploads/2021/04/Polozhenie-Korporativnom-sekretare-KDTS-1.pdf', 'Regulations on the Corporate Secretary of JSC "Kedentransservice"' ),
	array( 'https://www.kdts.kz/en/wp-content/uploads/2021/04/ba263ca0888c60657066887f82326a29.pdf', 'Regulation on disclosure of information of JSC "Kedentransservice»' ),
	array( 'https://www.kdts.kz/en/wp-content/uploads/2021/04/66d0921a85ca5a091e1cbb16bfad635b-1.pdf', 'Regulations on the Management Board of JSC "Kedentransservice"' ),
	array( 'https://www.kdts.kz/en/wp-content/uploads/2021/04/a30392296d74f27aa2b45bf5ccf11fd2-2.pdf', 'Regulations on the Personnel and Remuneration Committee of JSC "Kedentransservice"' ),
	array( 'https://www.kdts.kz/en/wp-content/uploads/2021/04/44638bda283430de1e386720baeb763e-1.pdf', 'Changes and additions to the Regulations on the Personnel and Remuneration Committee of JSC "Kedentransservice"' ),
	array( 'https://www.kdts.kz/en/wp-content/uploads/2021/04/0f4d7ee4ee91a76858bbc7255878b405-1.pdf', 'Regulations on the Strategic Planning Committee of JSC "Kedentransservice"' ),
	array( 'https://www.kdts.kz/en/wp-content/uploads/2022/10/Polozhenie-o-Sovete-direktorov-Kedentransservis_2022g.pdf', 'Regulations on the Board of Directors of JSC "Kedentransservice"' ),
	array( 'https://www.kdts.kz/en/wp-content/uploads/2021/04/Polozhenie-o-Prezidente-AO-KDTS-2.pdf', 'Regulations on the President of JSC "Kedentransservice»' ),
	array( 'https://www.kdts.kz/en/wp-content/uploads/2021/04/Izm.-i-dop.-v-Polozhenie-o-Korporativnom-sekretare-1.pdf', 'Changes and additions to the Regulations on the Corporate Secretary of JSC "Kedentransservice"' ),
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
