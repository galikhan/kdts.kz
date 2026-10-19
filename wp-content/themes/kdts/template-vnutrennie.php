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
	array( 'https://www.kdts.kz/wp-content/uploads/2021/09/Ekologicheskaya-politika.pdf', '«Кеденатранссервис» АҚ Экологиялық саясат' ),
	array( 'https://www.kdts.kz/wp-content/uploads/2021/09/Politka-v-oblasti-OZ-i-OBT.pdf', '«Кеденатранссервис» АҚ Еңбек қауіпсіздігі мен денсаулықты қорғау саласындағы саясаты' ),
	array( 'https://www.kdts.kz/wp-content/uploads/2021/09/Politika-v-oblasti-kachestva-1.pdf', '«Кеденатранссервис» АҚ Сапа саласындағы саясаты' ),
	array( 'https://www.kdts.kz/wp-content/uploads/2021/04/0bf178a43745cb818096223d0d8de657.pdf', '«Кеденатранссервис» АҚ Корпоративтік басқару кодексі' ),
	array( 'https://www.kdts.kz/wp-content/uploads/2021/04/83bd0461445880b01b5e38536fdc5487.pdf', '«Кеденатранссервис» АҚ Акционерлерінің жалпы жиналысын дайындау және өткізу тәртібі жөніндегі ережесіне өзгертулер' ),
	array( 'https://www.kdts.kz/wp-content/uploads/2021/04/0a8a2c6005e8931688b4b727299754bf.pdf', '«Кеденатранссервис» АҚ Акционерлерінің жалпы жиналысын дайындау және өткізу тәртібі жөніндегі ережесі' ),
	array( 'https://www.kdts.kz/wp-content/uploads/2021/04/4815167def0a718be16de9aaf0052843.pdf', '«Кеденатранссервис» АҚ Аудит жөніндегі комитет ережесі' ),
	array( 'https://www.kdts.kz/wp-content/uploads/2021/04/c7736d51082a5581615958522509be3b.pdf', '«Кеденатранссервис» АҚ Дивидендттік саясат жөніндегі комитет ережесі' ),
	array( 'https://www.kdts.kz/wp-content/uploads/2021/04/Polozhenie-Korporativnom-sekretare-KDTS.pdf', '«Кеденатранссервис» АҚ Корпоративтік хатшы жөніндегі ережесі' ),
	array( 'https://www.kdts.kz/wp-content/uploads/2021/04/4ca1aacda15423d3c4fe5c18b096f4b1.pdf', '«Кеденатранссервис» АҚ Ақпаратын ашу жөніндегі ережесі' ),
	array( 'https://www.kdts.kz/wp-content/uploads/2021/04/4e3f8442c547f6b8d5e41251f2a46e1d.pdf', '«Кеденатранссервис» АҚ Басқармасы жайлы ережесі' ),
	array( 'https://www.kdts.kz/wp-content/uploads/2021/04/3c16c43cc8fb8ab8f4f55278f3badc17.pdf', '«Кеденатранссервис» АҚ Кадрлар және сыйақылар жөніндегі комитет ережесі' ),
	array( 'https://www.kdts.kz/wp-content/uploads/2021/04/13b05d90e44a53ad0f808a947586f1c9.pdf', '«Кеденатранссервис» АҚ Кадрлар және сыйақылар жөніндегі комитет ережесіне өзгертулер және толықтырулар' ),
	array( 'https://www.kdts.kz/wp-content/uploads/2021/04/80def04cb5ea0c29556ab968b5904307.pdf', '«Кеденатранссервис» АҚ Стратегиялық жоспарлау жөніндегі комитет ережесі' ),
	array( 'https://www.kdts.kz/wp-content/uploads/2022/10/Polozhenie-o-Sovete-direktorov-Kedentransservis_2022g.pdf', '«Кеденатранссервис» АҚ Директорлар кеңесі жөніндегі ережесі' ),
	array( 'https://www.kdts.kz/wp-content/uploads/2021/04/Polozhenie-o-Prezidente-AO-KDTS.pdf', '«Кеденатранссервис» АҚ Президенті жөніндегі ережесі' ),
	array( 'https://www.kdts.kz/wp-content/uploads/2021/04/Izm.-i-dop.-v-Polozhenie-o-Korporativnom-sekretare.pdf', '«Кеденатранссервис» АҚ Корпоративтік хатшы жөніндегі ережесіне өзгертулер' ),
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
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Басты бет</a>
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
