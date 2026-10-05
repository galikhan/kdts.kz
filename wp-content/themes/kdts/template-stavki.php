<?php
 /*
 * Template name: stavki-i-tarify
 */
?>
<?php get_header(); ?>
<?php
/*
 * Files on the original site live under /wp-content/uploads/. Use the local copy when it
 * exists (so the page works from this server), otherwise point to the original file.
 */
if ( ! function_exists( 'kdts_stavki_file' ) ) {
	function kdts_stavki_file( $path ) {
		$u = wp_upload_dir();
		if ( file_exists( $u['basedir'] . '/' . $path ) ) {
			return array( $u['baseurl'] . '/' . $path, filesize( $u['basedir'] . '/' . $path ) );
		}
		return array( 'https://www.kdts.kz/wp-content/uploads/' . $path, 0 );
	}
	function kdts_stavki_card( $path, $title ) {
		list( $url, $bytes ) = kdts_stavki_file( $path );
		$ext  = strtoupper( pathinfo( $path, PATHINFO_EXTENSION ) );
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
			<span class="crumb-current">Мөлшерлемелер және тарифтер</span>
		</div>
		<h1>Мөлшерлемелер және тарифтер</h1>
		<div class="subnav-pills">
			<a href="<?php echo esc_url( home_url( '/obyavleniya' ) ); ?>">Хабарландырулар</a>
			<a href="<?php echo esc_url( home_url( '/molsherlemeler-zhane-tarifter' ) ); ?>" class="is-active">Мөлшерлемелер және тарифтер</a>
			<a href="<?php echo esc_url( home_url( '/platformalar-parki' ) ); ?>">Платформалар паркі</a>
			<a href="<?php echo esc_url( home_url( '/ulgilik-sharttar' ) ); ?>">Үлгілік шарттар</a>
			<a href="<?php echo esc_url( home_url( '/kryltajshylyk-sharttar' ) ); ?>">Құрылтайшылық шарттар</a>
		</div>
	</div>
</section>

<section class="page-content">
	<div class="container">
		<p class="page-lead"><strong>Құрметті серіктестер!</strong></p>

		<div class="page-section">
			<p>«Кедентранссервис» акционерлік қоғамы (бұдан әрі – Компания) сіздің ынтымақтастығыңыз үшін алғысын білдіреді және осы арқылы <strong>2026 жылдың 1 қыркүйегінен</strong> бастап Достық және Алтынкөл станцияларындағы Компания филиалдары қосымша ауыстырып тиеу қызметтерін енгізетінін хабарлайды.</p>
			<p>Біз ұсынылатын қызметтер ауқымын кеңейтуге қуаныштымыз және бұл өзгерістер сіздің Компаниямен жұмыс істеу тәжірибеңіздің ыңғайлылығы мен тиімділігін арттырады деп үміттенеміз. Осы қосымша қызметтердің енгізілуіне байланысты, жөнелтімдеріңізді жоспарлау және Компания қызметтерін пайдалану кезінде осы өзгерістерді ескеруіңізді сұраймыз.</p>
			<p>Осы қызметтердің ағымдағы тарифтерін Компанияның ресми веб-сайтындағы «<strong>Мөлшерлемелер және тарифтер</strong>» бөлімінен таба аласыз.</p>
			<p>Осымен сіздерге 01.09.2026 ж. бастап 30.09.2026 ж. дейін қолданыста болатын Қазақстан – Қытай тұрақты контейнерлік поездарының құрамында контейнерлерді тасымалдауды ұйымдастыру қызметтеріне «Кедентрассервис» АҚ ставкалары туралы хабарлаймыз. Ставкалар «Мөлшерлемелер және тарифтер» бөлімінде орналастырылған.</p>
			<p>Қосымша сұрақтар туындаған кезде сізден барлық жазбаша сұрауларды жіберуіңізді сұраймыз: <a href="mailto:wagon@kdts.kz">wagon@kdts.kz</a></p>
			<p><a href="https://my.kdts.kz/login" target="_blank" rel="noopener" class="btn btn-primary">ТАРИФТІ ЕСЕПТЕУ</a></p>
		</div>

		<div class="doc-card-grid cols-2">
			<?php
			kdts_stavki_card( '2026/08/KP-Klientam-KAZ-SENTYABR2026-selh-produ.pdf', '«Кедентрассервис» АҚ Қазақстан – Қытай экспорттық қатынасында контейнерлік пойыздардың сервисін көрсетеді.' );
			kdts_stavki_card( '2026/02/K-FTG-Almaty-NOD-GP-12-SAUIR.pdf', 'Алматы-1 – нод-2/түйінді-1 – ҚХР бағыты бойынша контейнерлік платформаларды пайдалана отырып, экспорттық астық тасымалдауды ұйымдастыру' );
			?>
		</div>

		<div class="page-section">
			<h2>Тариф қосымшалары</h2>
			<ol class="tariff-steps">
				<li>
					<span class="goal-num">1</span>
					<div class="tariff-step-body">
						<p>2024 жылдың 1 қаңтарынан бастап вагон операторының тарифтік қосымшалары прейскурантпен жаңартылғанына назар аударамыз:</p>
						<div class="doc-card-grid"><?php kdts_stavki_card( '2021/04/Prejskurant-KDTS-Prilozhenie-1-1.xlsx', '1-қосымша' ); ?></div>
					</div>
				</li>
				<li>
					<span class="goal-num">2</span>
					<div class="tariff-step-body">
						<p>Оператордың Достық эксп., Алтынкөл эксп. шекаралық түйісу станциялары арқылы халықаралық қатынастағы (импорт) тарифтері Прейскурантпен белгіленген:</p>
						<div class="doc-card-grid"><?php kdts_stavki_card( '2021/04/Prejskurant-KDTS-Prilozhenie-2.xlsx', '2-қосымша' ); ?></div>
					</div>
				</li>
				<li>
					<span class="goal-num">3</span>
					<div class="tariff-step-body">
						<p>Оператордың Достық эксп., Алтынкөл эксп. шекаралық түйісу станциялары арқылы халықаралық қатынастағы (транзит) тарифтері Прейскурантпен белгіленген:</p>
						<div class="doc-card-grid">
							<?php
							kdts_stavki_card( '2021/04/Prejskurant-KDTS-Prilozhenie-3-1.xlsx', '3-қосымша — Алтынкөл эксп. станциясынан Өзбекстан Республикасына баратын' );
							kdts_stavki_card( '2021/04/Prejskurant-KDTS-Prilozhenie-4.xlsx', '4-қосымша — Достық эксп. станциясынан Өзбекстан Республикасына баратын' );
							kdts_stavki_card( '2021/04/Prejskurant-KDTS-Prilozhenie-5.xlsx', '5-қосымша — Алтынкөл эксп. станциясынан Қырғыз Республикасына баратын' );
							kdts_stavki_card( '2021/04/Prejskurant-KDTS-Prilozhenie-6.xlsx', '6-қосымша — Достық эксп. станциясынан Қырғыз Республикасына баратын' );
							?>
						</div>
					</div>
				</li>
				<li>
					<span class="goal-num">4</span>
					<div class="tariff-step-body">
						<p>Сонымен қатар, сіз «Кедентранссервис» АҚ-на <a href="mailto:wagon@kdts.kz">wagon@kdts.kz</a> электрондық мекенжайына жүгіну арқылы операция жасау және экспедициялау тарифтерін есептей аласыз.</p>
					</div>
				</li>
				<li>
					<span class="goal-num">5</span>
					<div class="tariff-step-body">
						<p>Тарифті есептеуге арналған өтінім нысаны:</p>
						<div class="doc-card-grid"><?php kdts_stavki_card( '2021/04/Forma-zayavki-na-raschet-tarifa-1.xlsx', 'Өтініш формасы' ); ?></div>
					</div>
				</li>
				<li>
					<span class="goal-num">6</span>
					<div class="tariff-step-body">
						<p>Сұратымға жауапты өңдеу уақытын қысқарту үшін мөлшемелер электронды поштаға ұсынылады. Ресми мөлшемелерді «Кедентранссервис» АҚ менеджерлері kdts.kz корпоративтік доменнің электрондық мекенжайларынан ғана жіберетініне назарыңызды аударамыз.</p>
					</div>
				</li>
			</ol>
		</div>

		<div class="page-section">
			<h2>Тарифтік шарттар</h2>
			<div class="doc-card-grid">
				<?php
				kdts_stavki_card( '2021/04/3224049ab492cc12c8f75e686e7d6644.pdf', 'Барлық экспедиторлық компаниялар үшін 2017 жылға арналған шарттарды жасау туралы хабарламасы!' );
				kdts_stavki_card( '2021/04/9ec850c26370333ec72ae27f73dcad29.docx', 'Достық ст. және Алтынкөл ст. бойынша 2017 жылға арналған мөлшерлемелер мен тарифтер (экспорт және импорт)' );
				kdts_stavki_card( '2021/04/0064bed4c7d7150025d39da3e5a2a171.docx', 'Достық ст. бойынша 2016 жылға арналған мөлшерлемелер мен тарифтер (экспорт және импорт)' );
				kdts_stavki_card( '2021/04/31c22d8e3dbd387bb0fc3533eefe38bc.docx', 'Алтынкөл ст. бойынша 2016 жылға арналған мөлшерлемелер мен тарифтер (экспорт және импорт)' );
				kdts_stavki_card( '2026/04/Terminalnoe-obsluzhivanie-vagonov-po-kompleksnoj-stavke-na-2026-god-1.pdf', '2023 жылғы 27 желтоқсаннан бастап кешенді тариф бойынша вагондарға терминалдық қызмет көрсету' );
				kdts_stavki_card( '2026/04/Terminalnoe-obsluzhivanie-kontejnerov-po-kompleksnoj-stavke-na-2026-god-1.pdf', '2023 жылдың 27 желтоқсанынан бастап кешенді тариф бойынша контейнерлерге терминал қызметтері' );
				kdts_stavki_card( '2026/10/Prilozhenie_-aza-sha.docx', '«Достық» және «Алтынкөл» станцияларындағы қайта тиеу операцияларына арналған тарифтер' );
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

<?php get_footer(); ?>
