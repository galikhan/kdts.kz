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
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Басты бет</a>
			<span class="crumb-sep">/</span>
			<span class="crumb-current">Үлгілік шарттар</span>
		</div>
		<h1>Үлгілік шарттар</h1>
		<div class="subnav-pills">
			<a href="<?php echo esc_url( home_url( '/obyavleniya' ) ); ?>">Хабарландырулар</a>
			<a href="<?php echo esc_url( home_url( '/molsherlemeler-zhane-tarifter' ) ); ?>">Мөлшерлемелер және тарифтер</a>
			<a href="<?php echo esc_url( home_url( '/platformalar-parki' ) ); ?>">Платформалар паркі</a>
			<a href="<?php echo esc_url( home_url( '/ulgilik-sharttar' ) ); ?>" class="is-active">Үлгілік шарттар</a>
			<a href="<?php echo esc_url( home_url( '/kryltajshylyk-sharttar' ) ); ?>">Құрылтайшылық шарттар</a>
		</div>
	</div>
</section>

<section class="page-content">
	<div class="container">
		<p class="page-lead"><strong>Құрметті клиенттер және серіктестер!</strong></p>
		<div class="page-section">
			<p>«Кедентранссервис» акционерлік қоғамының қызметтер көрсетуіне арналған Шарттарды жасау үшін Мәлімдеме-хатын ұсыну қажет болады:</p>
			<p><a class="btn btn-primary" href="https://my.kdts.kz/login" target="_blank" rel="noopener">Резиденттерге арналған өтініш хат</a></p>
			<p><em>Хатта шарттың атауы, нақты заңды әрі пошта мекенжайы, анықтама телефондары мен факстердің нөмірлері, ұйым басшысы ұялы телефонының нөмірі, электрондық поштаның мекенжайы көрсетілуі тиіс.</em></p>
		</div>

		<div class="page-section">
			<h2>Хатқа міндетті түрде қосарланады:</h2>
			<div class="info-grid is-balanced">
				<div class="info-card">
					<h3>Резиденттер үшін:</h3>
					<p>1. Шарт жасау туралы өтініш хаты;</p>
					<p>2. Ағымдағы шоттардың бар болуына байланысты банк анықтамасы (ағымдағы күннің түпнұсқасы);</p>
					<p>3. Қазақстан Республикасы салық төлеушісі куәлігінің көшірмесі/бизнес сәйкестендіру нөмірі — БСН (заңды тұлғалар үшін);</p>
					<p>4. Қазақстан Республикасы салық төлеушісі куәлігінің көшірмесі/жеке сәйкестендіру нөмірі — ЖСН (жеке тұлғалар үшін);</p>
					<p>5. Құрылтайшылық құжаттардың нотариалдық расталған көшірмелері — Жарғы, БСН;</p>
					<p>6. Құрылтайшының хаттамалық шешімінің көшірмелері, тағайындау туралы бұйрығы, жетекшінің жеке куәлігі;</p>
				</div>
				<div class="info-card">
					<h3>ҚР резиденттері емес тұлғалар үшін:</h3>
					<p>1. Шарт жасау туралы өтініш хаты;</p>
					<p>2. Заңды тұлғалардың бірыңғай мемлекеттік тізілімінен көшірме;</p>
					<p>3. СЖН;</p>
					<p>4. НМТН;</p>
					<p>5. Ағымдағы шоттардың бар болуына байланысты банк анықтамасы (ағымдағы күннің түпнұсқасы);</p>
					<p>6. Жарғы (толық көлемде);</p>
					<p>7. Құрылтайшының Атқарушы органын тағайындау жөніндегі шешімі, тағайындау туралы бұйрығы (Директорды, Бас директорды).</p>
				</div>
			</div>
		</div>

		<div class="page-section">
			<p class="pull-quote">Барлық мәлімдемелер құжаттардың толық пакетінің бар болуы жағдайында ғана қарастырылатын болады. Қандай да бір құжат болмаса, мәлімдеме қарастырылмайды.</p>
			<p>Құжаттардың түпнұсқаларын мына мекенжайға жіберуге болады: Астана қ., Достық к-сі, 18.</p>
			<p>Сатулар басқармасының анықтама телефоны мен байланыс тұлғалары: +7 (7172) 94-26-26</p>
		</div>

		<div class="page-section">
			<h2>Шарт үлгілері</h2>
			<div class="doc-card-grid">
				<?php
				kdts_doc_card_url( 'https://www.kdts.kz/wp-content/uploads/2022/12/Terminaldy-yzmetterdi-k-rsetuge-arnal-an-kelisim-shart-lgisi-za-dy-t-l-alar-shin.doc', 'Терминалдық қызметтерді көрсетуге арналған келісім-шарт үлгісі (заңды тұлғалар үшін)' );
				kdts_doc_card_url( 'https://www.kdts.kz/wp-content/uploads/2022/12/K-lik-ekspeditsiyasy-kelisim-shartyny-lgisi.doc', 'Көлік экспедициясы келісім-шартының үлгісі' );
				kdts_doc_card_url( 'https://www.kdts.kz/wp-content/uploads/2026/07/1.-Tipovoi-dogovor-PR-ot-19.06.2026-g.-Kaz.docx', 'Достық және Алтынкөл станцияларында жүктерді қайта тиеу бойынша қызметтер кешенін көрсету келісім-шарты' );
				?>
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
