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
if ( ! function_exists( 'kdts_stavki_card' ) ) {
	function kdts_stavki_local_url( $live_url ) {
		if ( false !== ( $pos = strpos( $live_url, '/wp-content/uploads/' ) ) ) {
			$rel = substr( $live_url, $pos + strlen( '/wp-content/uploads/' ) );
			$u   = wp_upload_dir();
			if ( file_exists( $u['basedir'] . '/' . $rel ) ) {
				return $u['baseurl'] . '/' . $rel;
			}
		}
		return $live_url;
	}
	function kdts_stavki_card( $live_url, $title ) {
		$ext = strtoupper( pathinfo( parse_url( $live_url, PHP_URL_PATH ), PATHINFO_EXTENSION ) );
		if ( ! $live_url ) {
			echo '<div class="doc-card is-disabled"><div class="doc-card-top"><span class="doc-card-icon">' . esc_html( $ext ?: 'DOC' ) . '</span></div><p>' . esc_html( $title ) . '</p></div>';
			return;
		}
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
			<span class="crumb-current">Ставки и тарифы</span>
		</div>
		<h1>Ставки и тарифы</h1>
		<div class="subnav-pills">
			<a href="<?php echo esc_url( home_url( '/obyavleniya' ) ); ?>">Объявления</a>
			<a href="<?php echo esc_url( home_url( '/stavki-i-tarify' ) ); ?>" class="is-active">Ставки и тарифы</a>
			<a href="<?php echo esc_url( home_url( '/park-platform-i-konteynerov' ) ); ?>">Парк платформ</a>
			<a href="<?php echo esc_url( home_url( '/tipovye-dogovora' ) ); ?>">Типовые договора</a>
			<a href="<?php echo esc_url( home_url( '/uchreditelnye-dokumenty' ) ); ?>">Учредительные документы</a>
		</div>
	</div>
</section>

<section class="page-content">
	<div class="container">
		<p class="page-lead"><strong>Уведомление об изменении тарифов</strong></p>

		<div class="page-section">
			<p>Уважаемые партнеры!</p>
			<p>Акционерное общество «Кедентранссервис» (далее – Общество) выражает Вам благодарность за сотрудничество и настоящим уведомляет, что с <strong>1 сентября 2026</strong> года вводятся в действие дополнительные услуги по перегрузочной деятельности, оказываемые филиалами Общества по станциям Достык и Алтынколь.</p>
			<p>Мы рады расширять спектр предоставляемых услуг и надеемся, что данные изменения будут способствовать повышению удобства и эффективности Вашей работы с Обществом.</p>
			<p>В связи с введением дополнительных услуг просим учитывать указанные изменения при планировании перевозок и пользовании услугами Общества. С действующими тарифами на оказываемые услуги Вы можете ознакомиться в разделе «<strong>Ставки и Тарифы</strong>» на официальном сайте Общества.</p>
			<p>Настоящим извещаем Вас о ставках АО «Кедентрассервис» на услуги организации перевозок контейнеров в составе регулярных контейнерных поездов сообщение Казахстан – Китай, действующих с 01.09.2026г. до 30.09.2026г. включительно. Ставки размещены в разделе <strong>Ставки и Тарифы.</strong></p>
			<p>При возникновении дополнительных вопросов просим Вас отправить все письменные запросы на <a href="mailto:wagon@kdts.kz">wagon@kdts.kz</a></p>
			<p><a href="https://my.kdts.kz/login" target="_blank" rel="noopener" class="btn btn-primary">Рассчитать ставку и тарифы</a></p>
		</div>

		<div class="doc-card-grid cols-2">
			<?php
			kdts_stavki_card( 'https://www.kdts.kz/ru/wp-content/uploads/2026/08/KP-Klienty-SENTYABR-2026-selh-produ.pdf', 'АО "Кедентрассервис" оказывает сервис контейнерных поездов в экспортном сообщении Казахстан - Китай.' );
			kdts_stavki_card( 'https://www.kdts.kz/ru/wp-content/uploads/2026/05/KP-FTG-Almaty-NOD-GP-12-Mai.pdf', 'Организация экспортных зерновых перевозок с задействованием фитинговых платформ по направлению Алматы-1 – нод-2/нод-1 - кнр' );
			?>
		</div>

		<div class="page-section">
			<h2>Приложения к тарифам</h2>
			<ol class="tariff-steps">
				<li>
					<span class="goal-num">1</span>
					<div class="tariff-step-body">
						<p>Обращаем ваше внимание, что с <strong>1 января 2026 года</strong> обновлены приложения тарифов оператора вагона прейскурантом:</p>
						<div class="doc-card-grid">
							<?php
							kdts_stavki_card( 'https://www.kdts.kz/ru/wp-content/uploads/2026/01/1.-Tarify-operatora-vo-vnutrirespublikanskom-soobshhenii.xlsx', 'Приложение №1 — Внутриреспубликанское сообщение перевозок (за искл. станций Алматинского узла)' );
							kdts_stavki_card( 'https://www.kdts.kz/ru/wp-content/uploads/2026/01/2.-import-cherez-Dostyk-eksp.Altynkol-eksp.-na-KZH.xlsx', 'Приложение №2 — Импорт через ст. Достык/ Алтынколь' );
							kdts_stavki_card( 'https://www.kdts.kz/ru/wp-content/uploads/2026/01/3.-Alt-eksp.-na-UTJ-cherez-st.Saryagash-eksp.-za-isklyucheniem-st.Tashkentskogo-uzlaTashkentSergeliCHukursaj-1.xlsx', 'Приложение №3 — со станции Алтынколь эксп. назначением на Республику Узбекистан (через ст.Сарыагаш эксп.)' );
							kdts_stavki_card( 'https://www.kdts.kz/ru/wp-content/uploads/2026/01/4.-Dostyk-eksp.-na-UTJ-cherez-st.Saryagash-eksp.za-isklyucheniem-st.Tashkentskogo-uzlaTashkentSergeliCHukursaj.xlsx', 'Приложение №4 — со станции Достык эксп. назначением на Республику Узбекистан (через ст.Сарыагаш эксп.)' );
							kdts_stavki_card( 'https://www.kdts.kz/ru/wp-content/uploads/2026/01/5.-Altynkol-eksp.-na-KRG-cherez-st.Turksib-eksp..xlsx', 'Приложение №5 — со станции Алтынколь эксп. назначением на Кыргызскую Республику (через ст. Турксиб эксп.)' );
							kdts_stavki_card( 'https://www.kdts.kz/ru/wp-content/uploads/2026/01/6.-Dostyk-eksp.-na-KRG-cherez-st.Turksib-eksp..xlsx', 'Приложение №6 — со станции Достык эксп. назначением на Кыргызскую Республику (через ст. Турксиб эксп.)' );
							kdts_stavki_card( 'https://www.kdts.kz/ru/wp-content/uploads/2026/01/7.-Alt-eksp.-na-KRG-cherez-st.Saryagash-eksp..xlsx', 'Приложение №7 — со станции Алтынколь эксп. назначением на Кыргызскую Республику (через ст. Сарыагаш эксп.)' );
							kdts_stavki_card( 'https://www.kdts.kz/ru/wp-content/uploads/2026/01/8.-Dostyk-eksp.-na-KRG-cherez-st.Saryagash-eksp..xlsx', 'Приложение №8 — со станции Достык эксп. назначением на Кыргызскую Республику (через ст.Сарыагаш эксп.)' );
							kdts_stavki_card( 'https://www.kdts.kz/ru/wp-content/uploads/2026/01/9.-Altynkol-eksp.-na-Turkmenistan-cherez-st.Bolashak-eksp..xlsx', 'Приложение №9 — со станции Алтынколь эксп. назначением на Республику Туркменистан (через ст.Болашак эксп.)' );
							kdts_stavki_card( 'https://www.kdts.kz/ru/wp-content/uploads/2026/01/10.-Dostyk-eksp.-na-Turkmenistan-cherez-st.Bolashak-eksp..xlsx', 'Приложение №10 — со станции Достык эксп. назначением на Республику Туркменистан (через ст.Болашак эксп.)' );
							kdts_stavki_card( 'https://www.kdts.kz/ru/wp-content/uploads/2026/01/11.-Altynkol-eksp.-na-Turkmenistan-cherez-st.Saryagash-eksp..xlsx', 'Приложение №11 — со станции Алтынколь эксп. назначением на Республику Туркменистан (через ст.Сарыагаш эксп.)' );
							kdts_stavki_card( 'https://www.kdts.kz/ru/wp-content/uploads/2026/01/12.-Dostyk-eksp.-na-Turkmenistan-cherez-st.Saryagash-eksp.-1.xlsx', 'Приложение №12 — со станции Достык эксп. назначением на Республику Туркменистан (через ст.Сарыагаш эксп.)' );
							kdts_stavki_card( 'https://www.kdts.kz/ru/wp-content/uploads/2026/01/13.-Altynkol-eksp.-na-Tadzhikistan-cherez-st.Saryagash-eksp.-1.xlsx', 'Приложение №13 — со станции Алтынколь эксп. назначением на Республику Таджикистан (через ст.Сарыагаш эксп.)' );
							kdts_stavki_card( 'https://www.kdts.kz/ru/wp-content/uploads/2026/01/14.-Dostyk-eksp.-na-Tadzhikistan-cherez-st.Saryagash-eksp..xlsx', 'Приложение №14 — со станции Достык эксп. назначением на Республику Таджикистан (через ст.Сарыагаш эксп.)' );
							kdts_stavki_card( 'https://www.kdts.kz/ru/wp-content/uploads/2026/01/15.-So-stantsij-Almatinskogo-uzla-vo-vnutrirespublikanskom-soobshhenii.xlsx', 'Приложение №15 — Внутриреспубликанское сообщение перевозок со станций Алматинского узла' );
							?>
						</div>
					</div>
				</li>
				<li>
					<span class="goal-num">2</span>
					<div class="tariff-step-body">
						<p>Дополнительно Вы можете рассчитать тарифы оперирования и экспедирования, обратившись в АО «Кедентранссервис» на электронный адрес wagon@kdts.kz</p>
					</div>
				</li>
				<li>
					<span class="goal-num">3</span>
					<div class="tariff-step-body">
						<p>Форма заявки на расчет тарифа:</p>
						<div class="doc-card-grid"><?php kdts_stavki_card( 'https://www.kdts.kz/ru/wp-content/uploads/2022/01/Forma-zayavki-na-raschet-tarifa.xlsx', 'Форма заявки' ); ?></div>
					</div>
				</li>
				<li>
					<span class="goal-num">4</span>
					<div class="tariff-step-body">
						<p>Для сокращения времени на обработку ответа на запрос, ставки предоставляются на электронную почту. Обращаем Ваше внимание, официальные ставки направляются менеджерами АО «Кедентранссервис» только с электронных адресов корпоративного домена kdts.kz</p>
					</div>
				</li>
			</ol>
		</div>

		<div class="page-section">
			<h2>Тарифные условия</h2>
			<div class="doc-card-grid">
				<?php
				kdts_stavki_card( 'https://www.kdts.kz/ru/wp-content/uploads/2025/01/Uslugi-po-predostavleniyu-podezdnyh-putej-storonnih-organizatsij-AO-TSTS.pdf', 'Услуги по предоставлению подъездных путей сторонних организаций АО ЦТС' );
				kdts_stavki_card( 'https://www.kdts.kz/ru/wp-content/uploads/2025/09/Terminalnoe-obsluzhivanie-kontejnerov-po-kompleksnoj-stavke-na-2025-god.pdf', 'Терминальное обслуживание контейнеров по комплексной ставке на 2025 год' );
				kdts_stavki_card( 'https://www.kdts.kz/ru/wp-content/uploads/2025/09/Terminalnoe-obsluzhivanie-vagonov-po-kompleksnoj-stavke-na-2025-god.pdf', 'Терминальное обслуживание вагонов по комлексной ставке на 2025 год' );
				kdts_stavki_card( 'https://www.kdts.kz/ru/wp-content/uploads/2026/04/Terminalnoe-obsluzhivanie-vagonov-po-kompleksnoj-stavke-na-2026-god-1.pdf', 'Терминальное обслуживание вагонов по комплексной ставке на 2026 год' );
				kdts_stavki_card( 'https://www.kdts.kz/ru/wp-content/uploads/2026/04/Terminalnoe-obsluzhivanie-kontejnerov-po-kompleksnoj-stavke-na-2026-god-1.pdf', 'Терминальное обслуживание контейнеров по комплексной ставке на 2026 год' );
				kdts_stavki_card( 'https://www.kdts.kz/ru/wp-content/uploads/2025/12/Uslugi-po-predostavleniyu-podezdnyh-putej-storonnih-organizatsij-AO-TSTS-na-2026-god-1.pdf', 'Услуги по предоставлению подъездных путей сторонних организаций АО ЦТС на 2026 год' );
				kdts_stavki_card( 'https://www.kdts.kz/ru/wp-content/uploads/2026/10/Prilozhenie.docx', 'Тарифы по перегрузочной деятельности на станциях Достык и Алтынколь' );
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

<?php get_footer(); ?>
