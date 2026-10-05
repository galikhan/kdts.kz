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
	array( 'https://www.kdts.kz/ru/wp-content/uploads/2022/08/Dividendnaya-politika-KTZH-s-DO.doc', 'Дивидендная политика АО «НК «Қазақстан темір жолы» по отношению к дочерним организациям' ),
	array( 'https://www.kdts.kz/ru/wp-content/uploads/2022/08/Divid.politika-Samruk-Kazyna-ot-02.10.2012g.pdf', 'Дивидендная политика АО «Самрук-Казына» по отношению к дочерним организациям' ),
	array( 'https://www.kdts.kz/ru/wp-content/uploads/2022/06/Politika-konfidents-informirrovaniya.pdf', 'Политика конфиденциального информирования в АО «Кедентранссервис»' ),
	array( 'https://www.kdts.kz/ru/wp-content/uploads/2022/06/Politika-protivodejstviya-korruptsii.pdf', 'Политика противодействия коррупции в АО «Кедентранссервис»' ),
	array( 'https://www.kdts.kz/ru/wp-content/uploads/2022/06/Politika-po-predotvrashheniyu-KI.pdf', 'Политика по предотвращению и урегулированию конфликта интересов должностных лиц и работников АО «Кедентранссервис»' ),
	array( 'https://www.kdts.kz/ru/wp-content/uploads/2022/11/Polozhenie-o-Komitete-po-auditu-AO-Kedentransservis.pdf', 'Положение о комитете по аудиту АО «Кедентранссервис»' ),
	array( 'https://www.kdts.kz/ru/wp-content/uploads/2022/11/Polozhenie-o-Korporativnom-sekretare-AO-Kedentransservis.pdf', 'Положение о Корпоративном секретаре АО «Кедентранссервис»' ),
	array( 'https://www.kdts.kz/ru/wp-content/uploads/2021/04/ba263ca0888c60657066887f82326a29.pdf', 'Положение о раскрытии информации АО «Кедентранссервис»' ),
	array( 'https://www.kdts.kz/ru/wp-content/uploads/2023/01/Polozhenie-o-Pravlenii-AO-Kedentransservis.pdf', 'Положение о Правлении АО «Кедентранссервис»' ),
	array( 'https://www.kdts.kz/ru/wp-content/uploads/2022/11/Polozhenie-o-Komitete-po-kadram-voznagrazhdeniyam-i-sotsialnym-voprosam-AO-Kedentransservis.pdf', 'Положение о Комитете по кадрам, вознаграждениям и социальным вопросам АО «Кедентранссервис»' ),
	array( 'https://www.kdts.kz/ru/wp-content/uploads/2022/11/Polozhenie-o-Komitete-po-strategicheskomu-planirovaniyu-AO-Kedentransservis.pdf', 'Положение о комитете по стратегическому планированию АО «Кедентранссервис»' ),
	array( 'https://www.kdts.kz/ru/wp-content/uploads/2022/10/Polozhenie-o-Sovete-direktorov-Kedentransservis_2022g.pdf', 'Положение о Совете директоров АО «Кедентранссервис»' ),
	array( 'https://www.kdts.kz/ru/wp-content/uploads/2022/01/Pravila-ins-inf-RP.pdf', 'Правила внутреннего контроля за распоряжением и использованием инсайдерской информации акционерного общества «Национальная компания «Қазақстан темір жолы»' ),
	array( 'https://www.kdts.kz/ru/wp-content/uploads/2024/10/Polozhenie-o-komplaens-kontrolere-AO-Kedentransservis.pdf', 'Положение о Комплаенс-контролере АО «Кедентранссервис»' ),
	array( 'https://www.kdts.kz/ru/wp-content/uploads/2022/09/Politika-KSUR-KDTS-2021-g..pdf', 'Политика по управлению рисками и внутреннему контролю АО «Кедентранссервис»' ),
	array( 'https://www.kdts.kz/ru/wp-content/uploads/2024/10/Standart-ST-A-02.01-2023.pdf', 'Стандарт СТ А' ),
	array( 'https://www.kdts.kz/ru/wp-content/uploads/2024/10/Standart-UBPO.pdf', 'Стандарт УБПО' ),
	array( 'https://www.kdts.kz/ru/wp-content/uploads/2024/10/Standart-organizatsii-podgotovki-i-raboty-v-zimnij-period.pdf', 'Стандарт организации подготовки и работы в зимний период' ),
	array( 'https://www.kdts.kz/ru/wp-content/uploads/2024/10/Standart-KTZH-Vnutrennij-kontrol.pdf', 'Стандарт КТЖ Внутренний контроль' ),
	array( 'https://www.kdts.kz/ru/wp-content/uploads/2024/10/Rukovodstvo-OZiOBT.pdf', 'Руководство ОЗиОБТ' ),
	array( 'https://www.kdts.kz/ru/wp-content/uploads/2024/10/Standart-organizatsii-ST-A-02.02.pdf', 'Стандарт организации СТ А 02.02' ),
	array( 'https://www.kdts.kz/ru/wp-content/uploads/2024/10/Pravila-planirovaniya-razrabotki-i-monitoriga.pdf', 'Правила планирования, разработки и мониторига' ),
	array( 'https://www.kdts.kz/ru/wp-content/uploads/2024/10/Pravila-PDB-.pdf', 'Правила ПДБ' ),
	array( 'https://www.kdts.kz/ru/wp-content/uploads/2024/10/Identifikatsiya-opasnostej-614-prikaz-ot-01.09.2023-g.pdf', 'Идентификация опасностей 614 приказ от 01.09.2023 г' ),
	array( 'https://www.kdts.kz/ru/wp-content/uploads/2024/10/Polozhenie-o-komplaens-kontrolere-AO-Kedentransservis-1.pdf', 'Положение о комплаенс-контролере АО Кедентранссервис' ),
	array( 'https://www.kdts.kz/ru/wp-content/uploads/2025/05/Izmeneniya-i-dopolneniya-v-Politiku-protivodejstviya-korruptsii.pdf', 'Изменения и дополнения в Политику противодействия коррупции' ),
	array( 'https://www.kdts.kz/ru/wp-content/uploads/2025/05/Izmeneniya-i-dopolneniya-v-Politiku-po-predotvrashheniyu-i-uregulirovaniyu-konflikta-interesov.pdf', 'Изменения и дополнения в Политику по предотвращению и урегулированию конфликта интересов' ),
	array( 'https://www.kdts.kz/ru/wp-content/uploads/2025/05/Izmeneniya-i-dopolneniya-v-Politiku-konfidentsialnogo-informirovaniya.pdf', 'Изменения и дополнения в Политику конфиденциального информирования' ),
	array( 'https://www.kdts.kz/ru/wp-content/uploads/2025/09/Politika-v-oblasti-kachestva2.pdf', 'Политика в области качества' ),
	array( 'https://www.kdts.kz/ru/wp-content/uploads/2025/09/Ekologicheskaya-politika2.pdf', 'Экологическая политика' ),
	array( 'https://www.kdts.kz/ru/wp-content/uploads/2025/09/Politika-v-oblasti-OZiOBT2.pdf', 'Политика в области ОЗиОБТ' ),
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
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Главная</a>
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
