<?php
/**
 * Single procurement (current / archive) — shared by the single-*.php templates.
 * Expects $ts = array( 'method_id' => page ID of the method list, 'archive' => bool ).
 */
$archive_parent = 303;
$group_label   = ! empty( $ts['archive'] ) ? 'Archive' : 'Purchases';

if ( ! function_exists( 'kdts_tender_file_card' ) ) {
	function kdts_tender_file_card( $live_url, $title, $date, $posted ) {
		if ( ! $live_url ) {
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
		echo '<a class="doc-card" href="' . esc_url( $url ) . '" target="_blank" rel="noopener"><div class="doc-card-top"><span class="doc-card-icon">' . esc_html( $ext ?: 'DOC' ) . '</span><span class="doc-card-size">' . esc_html( $size ) . '</span></div><p>' . esc_html( $title ) . '</p>';
		if ( $date ) {
			echo '<span class="doc-card-date">' . esc_html( $posted . ': ' . $date ) . '</span>';
		}
		echo '</a>';
	}
}

the_post();
$start = CFS()->get( 'data-nachalo' );
$end   = CFS()->get( 'data-okonchanie' );
$groups = array(
	array( 'fayly1', 'dokument', 'text1', 'data1', 'Files to download' ),
	array( 'fayly2', 'dokument1', 'text2', 'data2', 'Minutes and results' ),
	array( 'fayly3', 'dokument3', 'text3', 'data3', 'Additional' ),
);
?>
<section class="page-hero page-hero-zakupki">
	<div class="container">
		<div class="breadcrumb">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
			<span class="crumb-sep">/</span>
			<span><?php echo esc_html( $group_label ); ?></span>
			<span class="crumb-sep">/</span>
			<a href="<?php echo esc_url( get_permalink( $ts['method_id'] ) ); ?>"><?php echo esc_html( get_the_title( $ts['method_id'] ) ); ?></a>
		</div>
		<h1><?php echo esc_html( $group_label ); ?></h1>
	</div>
</section>

<section class="page-content">
	<div class="container">
		<?php $zs_active = $ts['method_id']; ?>
		<div class="zakupki-layout">
			<?php include locate_template( 'template-parts/zakupki-sidebar.php' ); ?>
			<div class="zakupki-main">
		<h2 class="tender-single-title"><?php echo esc_html( html_entity_decode( get_the_title(), ENT_QUOTES ) ); ?></h2>

		<div class="tender-meta">
			<div><span>Organizer</span><strong>Kedentransservice JSC</strong></div>
			<div><span>Method</span><strong><?php echo esc_html( get_the_title( $ts['method_id'] ) ); ?></strong></div>
			<div><span>Start</span><strong><?php echo $start ? esc_html( date_i18n( 'd.m.Y', strtotime( $start ) ) ) : '—'; ?></strong></div>
			<div><span>End</span><strong><?php echo $end ? esc_html( date_i18n( 'd.m.Y', strtotime( $end ) ) ) : '—'; ?></strong></div>
		</div>

		<div class="page-section tender-single-text">
			<?php the_content(); ?>
		</div>

		<?php foreach ( $groups as $g ) :
			$rows = CFS()->get( $g[0] );
			if ( empty( $rows ) ) {
				continue;
			}
			?>
			<div class="page-section">
				<h2><?php echo esc_html( $g[4] ); ?></h2>
				<div class="doc-card-grid">
					<?php foreach ( $rows as $row ) {
						kdts_tender_file_card( $row[ $g[1] ], $row[ $g[2] ], isset( $row[ $g[3] ] ) ? $row[ $g[3] ] : '', 'Posted' );
					} ?>
				</div>
			</div>
		<?php endforeach; ?>

		<p><a class="tariff-form-link" href="<?php echo esc_url( get_permalink( $ts['method_id'] ) ); ?>">‹ Back to the list</a></p>
			</div>
		</div>
	</div>
</section>
