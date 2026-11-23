<?php
 /*
 * Template name: stavki-i-tarify
 */
?>
<?php get_header(); ?>
<?php
/*
 * All page content comes from the database (edit the page in wp-admin):
 *   - intro text            → page editor (the_content)
 *   - numbered tariff steps → CFS group "Ставки и тарифы" (tekst2…tekst11, files, blok1-loop, Tablitsy)
 *   - tariff conditions     → CFS loop blok2-loop
 *
 * NB: the CFS file-field names contain a CYRILLIC "е" (dokumenеt1 …), hence "\u{0435}" below.
 */
if ( ! function_exists( 'kdts_stavki_card' ) ) {
	/* Prefer the local copy of an uploaded file (so the page works on any server), else keep the stored URL. */
	function kdts_stavki_file( $url ) {
		$u = wp_upload_dir();
		if ( preg_match( '#/wp-content/uploads/(.+)$#', (string) $url, $m ) ) {
			$path = rawurldecode( $m[1] );
			if ( file_exists( $u['basedir'] . '/' . $path ) ) {
				return array( $u['baseurl'] . '/' . $path, filesize( $u['basedir'] . '/' . $path ) );
			}
		}
		return array( $url, 0 );
	}
	function kdts_stavki_card( $url, $title ) {
		if ( ! $url ) {
			return;
		}
		list( $href, $bytes ) = kdts_stavki_file( $url );
		$ext  = strtoupper( pathinfo( wp_parse_url( $href, PHP_URL_PATH ), PATHINFO_EXTENSION ) );
		$size = $bytes ? ( $bytes >= 1048576 ? round( $bytes / 1048576, 1 ) . ' MB' : round( $bytes / 1024 ) . ' KB' ) : '';
		echo '<a class="doc-card" href="' . esc_url( $href ) . '" target="_blank" rel="noopener"><div class="doc-card-top"><span class="doc-card-icon">' . esc_html( $ext ) . '</span><span class="doc-card-size">' . esc_html( $size ) . '</span></div><p>' . esc_html( wp_strip_all_tags( $title ) ) . '</p></a>';
	}
}

the_post();

$doc  = function ( $n ) { return CFS()->get( 'dokumen' . "\u{0435}" . 't' . $n ); };
$txt  = function ( $key ) { return trim( (string) CFS()->get( $key ) ); };
$rows = function ( $key ) { $v = CFS()->get( $key ); return is_array( $v ) ? $v : array(); };

/* Numbered steps — each is [text, [ [file url, card title], … ] ]; empty steps are skipped. */
$blok1 = array();
foreach ( $rows( 'blok1-loop' ) as $r ) {
	$title   = trim( ( $r['tekst5'] ?? '' ) . ( ! empty( $r['tekst6'] ) ? ' — ' . $r['tekst6'] : '' ) );
	$blok1[] = array( $r[ 'dokumen' . "\u{0435}" . 't3' ] ?? '', $title );
}
$steps = array(
	array( $txt( 'tekst2' ), array( array( $doc( 1 ), '1-қосымша' ) ) ),
	array( $txt( 'tekst3' ), array( array( $doc( 2 ), '2-қосымша' ) ) ),
	array( $txt( 'tekst4' ), $blok1 ),
	array( $txt( 'tekst7' ), array() ),
	/* request form: dokumenеt5 is the intended field, but on the site the file sits in dokumenеt4 */
	array( $txt( 'tekst8' ), array( array( $doc( 5 ) ?: $doc( 4 ), 'Өтініш формасы' ) ), 'form' ),
	array( $txt( 'tekst11' ), array() ),
);
$steps = array_values( array_filter( $steps, function ( $s ) { return '' !== $s[0]; } ) );

$form_rows = array_filter( $rows( 'Tablitsy' ), function ( $r ) { return '' !== trim( (string) ( $r['tekst9'] ?? '' ) ); } );
$blok2     = array_filter( $rows( 'blok2-loop' ), function ( $r ) { return ! empty( $r[ 'dokumen' . "\u{0435}" . 't6' ] ); } );
?>

<section class="page-hero">
	<div class="container">
		<div class="breadcrumb">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Басты бет</a>
			<span class="crumb-sep">/</span>
			<span class="crumb-current"><?php the_title(); ?></span>
		</div>
		<h1><?php the_title(); ?></h1>
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
		<?php if ( $txt( 'tekst1' ) ) : ?>
			<p class="page-lead"><?php echo wp_kses_post( $txt( 'tekst1' ) ); ?></p>
		<?php endif; ?>

		<?php if ( trim( get_the_content() ) ) : ?>
			<div class="page-section stavki-intro">
				<?php the_content(); ?>
			</div>
		<?php endif; ?>

		<?php
		/*
		 * These two documents were hardcoded in the template even before the redesign — there is
		 * no DB field for them. TODO: move them into the page editor content so they can be edited.
		 */
		?>
		<div class="doc-card-grid cols-2">
			<?php
			kdts_stavki_card( 'https://www.kdts.kz/wp-content/uploads/2026/08/KP-Klientam-KAZ-SENTYABR2026-selh-produ.pdf', '«Кедентрассервис» АҚ Қазақстан – Қытай экспорттық қатынасында контейнерлік пойыздардың сервисін көрсетеді.' );
			kdts_stavki_card( 'https://www.kdts.kz/wp-content/uploads/2026/02/K-FTG-Almaty-NOD-GP-12-SAUIR.pdf', 'Алматы-1 – нод-2/түйінді-1 – ҚХР бағыты бойынша контейнерлік платформаларды пайдалана отырып, экспорттық астық тасымалдауды ұйымдастыру' );
			?>
		</div>

		<?php if ( $steps ) : ?>
			<div class="page-section">
				<h2>Тариф қосымшалары</h2>
				<ol class="tariff-steps">
					<?php foreach ( $steps as $i => $s ) : ?>
						<li>
							<span class="goal-num"><?php echo (int) $i + 1; ?></span>
							<div class="tariff-step-body">
								<p><?php echo wp_kses_post( make_clickable( $s[0] ) ); ?></p>
								<?php
								$cards = array_filter( $s[1], function ( $c ) { return ! empty( $c[0] ); } );
								if ( $cards ) :
									?>
									<div class="doc-card-grid">
										<?php foreach ( $cards as $c ) { kdts_stavki_card( $c[0], $c[1] ); } ?>
									</div>
								<?php endif; ?>
								<?php if ( isset( $s[2] ) && 'form' === $s[2] && $form_rows ) : ?>
									<table class="tariff-form" style="margin-top:18px">
										<tbody>
											<?php foreach ( $form_rows as $r ) : ?>
												<tr>
													<th><?php echo esc_html( $r['tekst9'] ); ?></th>
													<td><?php echo esc_html( $r['tekst10'] ?? '' ); ?></td>
												</tr>
											<?php endforeach; ?>
										</tbody>
									</table>
								<?php endif; ?>
							</div>
						</li>
					<?php endforeach; ?>
				</ol>
			</div>
		<?php endif; ?>

		<?php if ( $blok2 ) : ?>
			<div class="page-section">
				<h2>Тарифтік шарттар</h2>
				<div class="doc-card-grid">
					<?php foreach ( $blok2 as $r ) { kdts_stavki_card( $r[ 'dokumen' . "\u{0435}" . 't6' ], $r['tekst12'] ?? '' ); } ?>
				</div>
			</div>
		<?php endif; ?>
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
