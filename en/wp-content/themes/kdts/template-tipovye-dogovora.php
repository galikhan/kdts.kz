<?php
 /*
 * Template name: tipovye-dogovora
 */
?>
<?php get_header(); ?>
<?php
/* Use the local copy of a file when it exists, otherwise the original site's file. */
if ( ! function_exists( 'kdts_doc_card_url' ) ) {
	function kdts_doc_card_url( $live_url, $title ) {
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
			<span class="crumb-current">Standard contracts</span>
		</div>
		<h1>Standard contracts</h1>
		<div class="subnav-pills">
			<a href="<?php echo esc_url( home_url( '/obyavleniya' ) ); ?>">Announcements</a>
			<a href="<?php echo esc_url( home_url( '/stavki-i-tarify' ) ); ?>">Rates and Tariffs</a>
			<a href="<?php echo esc_url( home_url( '/park-platform-i-konteynerov' ) ); ?>">Park of platforms</a>
			<a href="<?php echo esc_url( home_url( '/tipovye-dogovora' ) ); ?>" class="is-active">Standard contracts</a>
			<a href="<?php echo esc_url( home_url( '/uchreditelnye-dokumenty' ) ); ?>">Constituent documents</a>
		</div>
	</div>
</section>

<section class="page-content">
	<div class="container">
		<p class="page-lead"><strong>Dear Clients and Partners!</strong></p>
		<div class="page-section">
			<p>For a conclusion of “Kedentransservice” JSC service Contracts, it is necessary to provide letter of enquiry.</p>
			<p><a class="btn btn-primary" href="https://my.kdts.kz/login" target="_blank" rel="noopener">Application letter for residents</a></p>
			<p><em>The letter is required to have specified title of a contract, exact legal and postal address, fax and phone numbers, mobile number of the head of organization and e-mail address.</em></p>
		</div>

		<div class="page-section">
			<h2>In a mandatory manner attach these documents to the letter:</h2>
			<div class="info-grid is-balanced">
				<div class="info-card">
					<h3>For citizens:</h3>
					<p>1. Application for concluding a contract;</p>
					<p>2. Statement from bank about the existence of current accounts (an original statement on the current date);</p>
					<p>3. Copy of taxpayer certificate of the Republic of Kazakhstan/business identification number — BIN (for legal entities);</p>
					<p>4. Copy of taxpayer certificate of the Republic of Kazakhstan/individual identification number — IIN (for individuals);</p>
					<p>5. Notarized copies of the constituent documents-Charter, BIN;</p>
					<p>6. Copies of protocol resolution of shareholders, the letter of appointment, ID of the company’s chief executive.</p>
				</div>
				<div class="info-card">
					<h3>For non-residents of the RK:</h3>
					<p>1. Application for concluding a contract;</p>
					<p>2. Extract from Unified State Register of Legal Entities;</p>
					<p>3. IIN;</p>
					<p>4. OGRN;</p>
					<p>5. Statement from bank about the existence of current accounts (an original statement on the current date);</p>
					<p>6. Article of Association (in a full form);</p>
					<p>7. Resolution of a shareholder of executive board appointment, Order of appointment (Director, General Director).</p>
				</div>
			</div>
		</div>

		<div class="page-section">
			<p class="pull-quote">All applications are considered only with full package of documents. If there are some documents missing, the application will be denied.</p>
			<p>Send original documents to this address: 18 Dostyk st, Astana</p>
			<p>Phone number and contacts of the Department of sales: +7 (7172) 94-26-26</p>
		</div>

		<div class="page-section">
			<h2>Contract templates</h2>
			<div class="doc-card-grid">
				<?php
				kdts_doc_card_url( 'https://www.kdts.kz/en/wp-content/uploads/2022/12/Standard-contract-for-the-provision-of-terminal-services-for-legal-entities.doc', 'Standard contract for the provision of terminal services (for legal entities)' );
				kdts_doc_card_url( 'https://www.kdts.kz/en/wp-content/uploads/2022/12/Standard-contract-of-a-transport-expedition.doc', 'Standard contract of a transport expedition' );
				kdts_doc_card_url( 'https://www.kdts.kz/en/wp-content/uploads/2022/12/Contract-for-the-provision-of-a-range-of-cargo-transshipment-services-at-Dostyk-and-Altynkol-stations.doc', 'Contract for the provision of a range of cargo transshipment services at Dostyk and Altynkol stations' );
				?>
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

<script>
/* Split the two requirement cards so the text in both ends at the same height. */
(function () {
	var grid = document.querySelector('.info-grid.is-balanced');
	if (!grid || grid.children.length !== 2) return;
	var a = grid.children[0], b = grid.children[1];
	function balance() {
		if (window.innerWidth <= 720) { grid.style.gridTemplateColumns = ''; return; }
		grid.style.alignItems = 'start';
		var best = 50, bestDiff = Infinity;
		for (var r = 30; r <= 70; r++) {
			grid.style.gridTemplateColumns = r + 'fr ' + (100 - r) + 'fr';
			var diff = Math.abs(a.offsetHeight - b.offsetHeight);
			if (diff < bestDiff) { bestDiff = diff; best = r; }
		}
		grid.style.gridTemplateColumns = best + 'fr ' + (100 - best) + 'fr';
		grid.style.alignItems = 'stretch';
	}
	balance();
	window.addEventListener('resize', balance);
	if (document.fonts && document.fonts.ready) document.fonts.ready.then(balance);
})();
</script>

<?php get_footer(); ?>
