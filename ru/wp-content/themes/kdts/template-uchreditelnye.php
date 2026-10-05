<?php
 /*
 * Template name: uchreditelnye
 */
?>
<?php get_header(); ?>
<?php
/* Constituent documents: [ file url, title ]. Local copy of a file is used when it exists. */
$documents = array(
	array( 'https://www.kdts.kz/ru/wp-content/uploads/2026/04/Dopolneniya-v-Ustav-ot-16.03.2026-g..pdf', 'Дополнения в Устав от 16.03.2026 г.' ),
	array( 'https://www.kdts.kz/ru/wp-content/uploads/2026/04/Izmenenie-i-dopolnenie-v-Ustav-ot-19.01.2026-g..pdf', 'Изменение и дополнение в Устав от 19.01.2026 г.' ),
	array( 'https://www.kdts.kz/ru/wp-content/uploads/2026/02/Izmeneniya-v-Ustav-ot-20.10.2025-g..pdf', 'Изменения в Устав от 20.10.2025 г.' ),
	array( 'https://www.kdts.kz/ru/wp-content/uploads/2022/06/Ustav-AO-Kedentransservis-ot-10.06.2022-g.pdf', 'Устав АО «Кедентранссервис» в новой редакции утвержден решением Единственного акционера КДТС от 10 июня 2022 года (протокол №02/21)' ),
	array( 'https://www.kdts.kz/ru/wp-content/uploads/2021/04/Izm-i-dop-v-Ustav-ot-18.08.2020g..pdf', 'Изменения и дополнения в Устав Общества от 18.08.2020 г.' ),
	array( 'https://www.kdts.kz/ru/wp-content/uploads/2021/04/0b50e305f2dbb5743ac534a9a085470a.pdf', 'Изменения и дополнения в Устав Общества от 26.07.2017 г.' ),
	array( 'https://www.kdts.kz/ru/wp-content/uploads/2021/04/3add23a0cd4dc3055edbab93657465b0.pdf', 'Устав АО «Кедентранссервис»' ),
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
			<span class="crumb-current"><?php the_title(); ?></span>
		</div>
		<h1><?php the_title(); ?></h1>
		<div class="subnav-pills">
			<a href="<?php echo esc_url( home_url( '/obyavleniya' ) ); ?>">Объявления</a>
			<a href="<?php echo esc_url( home_url( '/stavki-i-tarify' ) ); ?>">Ставки и тарифы</a>
			<a href="<?php echo esc_url( home_url( '/park-platform-i-konteynerov' ) ); ?>">Парк платформ</a>
			<a href="<?php echo esc_url( home_url( '/tipovye-dogovora' ) ); ?>">Типовые договора</a>
			<a href="<?php echo esc_url( home_url( '/uchreditelnye-dokumenty' ) ); ?>" class="is-active">Учредительные документы</a>
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
