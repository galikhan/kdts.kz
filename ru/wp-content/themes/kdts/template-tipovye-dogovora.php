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
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Главная</a>
			<span class="crumb-sep">/</span>
			<span class="crumb-current">Типовые договора</span>
		</div>
		<h1>Типовые договора</h1>
		<div class="subnav-pills">
			<a href="<?php echo esc_url( home_url( '/obyavleniya' ) ); ?>">Объявления</a>
			<a href="<?php echo esc_url( home_url( '/stavki-i-tarify' ) ); ?>">Ставки и тарифы</a>
			<a href="<?php echo esc_url( home_url( '/park-platform-i-konteynerov' ) ); ?>">Парк платформ</a>
			<a href="<?php echo esc_url( home_url( '/tipovye-dogovora' ) ); ?>" class="is-active">Типовые договора</a>
			<a href="<?php echo esc_url( home_url( '/uchreditelnye-dokumenty' ) ); ?>">Учредительные документы</a>
		</div>
	</div>
</section>

<section class="page-content">
	<div class="container">
		<p class="page-lead"><strong>Уважаемые Клиенты и Партнеры!</strong></p>
		<div class="page-section">
			<p><a class="btn btn-primary" href="https://www.kdts.kz/ru/wp-content/uploads/2021/03/zayavka.docx" target="_blank" rel="noopener">Письмо-заявку</a></p>
		</div>

		<div class="page-section">
			<div class="info-grid is-balanced">
				<div class="info-card">
					<h3>Для резидентов РК:</h3>
					<p>Предоставлена возможность заключения договоров на оказание услуг акционерного общества «Кедентранссервис» через личный кабинет</p>
					<p><strong><a href="https://my.kdts.kz/login" target="_blank" rel="noopener">my.kdts.kz/login </a></strong>с применением ЭЦП (НУЦ РК).</p>
				</div>
				<div class="info-card">
					<h3>Для нерезидентов РК:</h3>
					<p>Для заключения договоров на оказание услуг акционерного общества «Кедентранссервис» необходимо предоставить в канцелярию <strong><a href="mailto:kense@kdts.kz" >kense@kdts.kz </a></strong>:</p>
					<p>1. <strong><a href="https://www.kdts.kz/ru/wp-content/uploads/2022/12/Pismo-zayavka.docx" target="_blank" rel="noopener">Письмо-заявка для заключения договора;</a></strong></p>
					<p>2. Выписка из единого государственного реестра юридических лиц;</p>
					<p>3. ИНН;</p>
					<p>4. ОГРН;</p>
					<p>5. Справка с банка о наличии текущих счетов (оригинал на текущую дату);</p>
					<p>6. Устав (в полном объеме);</p>
					<p>7. Решение учредителя о назначении Исполнительного органа, Приказ о назначении (Директора, Генерального директора).</p>
				</div>
			</div>
		</div>

		<div class="page-section">
			<p class="pull-quote">Все заявки рассматриваются только при наличии полного пакета документов, в случае отсутствия каких либо документов заявка будет отклонена.</p>
			<p>Договоры ТЭУ, ОВ - Департамента продаж +7 (7172) 648-888, вн. 9032 Договор ПРР, ПР - Департамент обслуживания клиентов по терминальным и перегрузочным услугам +7 (7172) 648-888, вн. 9073</p>
		</div>

		<div class="page-section">
			<h2>Образцы договоров</h2>
			<div class="doc-card-grid">
				<?php
				kdts_doc_card_url( 'https://www.kdts.kz/ru/wp-content/uploads/2026/04/Tipovoj-dogovor-OV.docx', 'Типовой договор ОВ' );
				kdts_doc_card_url( 'https://www.kdts.kz/ru/wp-content/uploads/2024/04/2.-Tipovoi-Dogovor-OPP.docx', 'Типовой Договор ОПП' );
				kdts_doc_card_url( 'https://www.kdts.kz/ru/wp-content/uploads/2026/07/1.-Tipovoi-dogovor-PR-ot-19.06.2026-g.-Rus.docx', 'Типовой договор ПР' );
				kdts_doc_card_url( 'https://www.kdts.kz/ru/wp-content/uploads/2024/04/4.-Tipovoi-proekt-Dogovora-PRR.docx', 'Типовой проект Договора ПРР' );
				kdts_doc_card_url( 'https://www.kdts.kz/ru/wp-content/uploads/2026/04/Tipovoj-dogovor-TEU.docx', 'Типовой договор ТЭУ' );
				kdts_doc_card_url( 'https://www.kdts.kz/ru/wp-content/uploads/2025/12/Uvedomlenie-o-zaklyuchenii-dogovorov-PR-i-PRR.docx', 'Уведомление о заключении договоров ПР и ПРР' );
				?>
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
