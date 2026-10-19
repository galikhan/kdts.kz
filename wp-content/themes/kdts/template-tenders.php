<?php
 /*
 * Template name: tenders
 */
?>
<?php get_header(); ?>
<?php $only_archive = ( 303 === get_the_ID() ); // the "Archive" page shows only the archive lists ?>

<?php
$zakupki_types = array(
	'tsenovykh'    => array( 'current' => 'tsenovykh', 'archive' => 'tsenovykhar' ),
	'odnogo'       => array( 'current' => 'odnogo', 'archive' => 'odnogoar' ),
	'otkrytogo'    => array( 'current' => 'otkrytogo', 'archive' => 'otkrytogoar' ),
	'dvukhetapnye' => array( 'current' => 'dvukhetapnogo', 'archive' => 'dvukhetapnogoar' ),
);

function kdts_zakupki_fetch( $post_type ) {
	$posts = get_posts( array(
		'post_type'      => $post_type,
		'post_status'    => 'publish',
		'numberposts'    => -1,
		'orderby'        => 'date',
		'order'          => 'DESC',
		'suppress_filters' => true,
	) );
	$out = array();
	foreach ( $posts as $p ) {
		$start = CFS()->get( 'data-nachalo', $p->ID );
		$end   = CFS()->get( 'data-okonchanie', $p->ID );
		$out[] = array(
			't' => html_entity_decode( get_the_title( $p->ID ), ENT_QUOTES ),
			's' => $start ? date_i18n( 'd.m.Y', strtotime( $start ) ) : '',
			'e' => $end ? date_i18n( 'd.m.Y', strtotime( $end ) ) : '',
			'u' => get_permalink( $p->ID ),
		);
	}
	return $out;
}

$zakupki_data = array();
foreach ( $zakupki_types as $key => $pair ) {
	$zakupki_data[ $key ] = array(
		'current' => kdts_zakupki_fetch( $pair['current'] ),
		'archive' => kdts_zakupki_fetch( $pair['archive'] ),
	);
}
?>

<section class="page-hero page-hero-zakupki">
	<div class="container">
		<div class="breadcrumb">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Басты бет</a>
			<span class="crumb-sep">/</span>
			<span class="crumb-current"><?php the_title(); ?></span>
		</div>
		<h1><?php the_title(); ?></h1>
	</div>
</section>

<section class="page-content">
	<div class="container">
		<div class="zakupki-layout">
			<?php $zs_active = get_the_ID(); include locate_template( 'template-parts/zakupki-sidebar.php' ); ?>

			<div class="zakupki-main">
				<?php if ( ! $only_archive ) : ?>
				<div class="zakupki-item" id="cur-tsenovykh">
					<h2 class="zakupki-item__title">Баға ұсыныстарын сұрату тәсілі бойынша</h2>
					<div class="tender-table">
						<div class="tender-row tender-row-head"><span>Атауы</span><span>Басталуы</span><span>Аяқталуы</span></div>
						<div id="rows-cur-tsenovykh"></div>
					</div>
					<div class="tender-more" id="more-wrap-cur-tsenovykh" hidden><a href="<?php echo esc_url( get_permalink( 291 ) ); ?>" class="tender-showall" id="more-btn-cur-tsenovykh">Барлық сатып алуларды көрсету</a></div>
				</div>

				<div class="zakupki-item" id="cur-odnogo">
					<h2 class="zakupki-item__title">Бір көзден алу тәсілімен</h2>
					<div class="tender-table">
						<div class="tender-row tender-row-head"><span>Атауы</span><span>Басталуы</span><span>Аяқталуы</span></div>
						<div id="rows-cur-odnogo"></div>
					</div>
					<div class="tender-more" id="more-wrap-cur-odnogo" hidden><a href="<?php echo esc_url( get_permalink( 295 ) ); ?>" class="tender-showall" id="more-btn-cur-odnogo">Барлық сатып алуларды көрсету</a></div>
				</div>

				<div class="zakupki-item" id="cur-otkrytogo">
					<h2 class="zakupki-item__title">Ашық тендер тәсілімен</h2>
					<div class="tender-table">
						<div class="tender-row tender-row-head"><span>Атауы</span><span>Басталуы</span><span>Аяқталуы</span></div>
						<div id="rows-cur-otkrytogo"></div>
					</div>
					<div class="tender-more" id="more-wrap-cur-otkrytogo" hidden><a href="<?php echo esc_url( get_permalink( 293 ) ); ?>" class="tender-showall" id="more-btn-cur-otkrytogo">Барлық сатып алуларды көрсету</a></div>
				</div>

				<div class="zakupki-item" id="cur-dvukhetapnye">
					<h2 class="zakupki-item__title">Ашық екі кезеңді тендер тәсілімен</h2>
					<div class="tender-table">
						<div class="tender-row tender-row-head"><span>Атауы</span><span>Басталуы</span><span>Аяқталуы</span></div>
						<div id="rows-cur-dvukhetapnye"></div>
					</div>
					<div class="tender-more" id="more-wrap-cur-dvukhetapnye" hidden><a href="<?php echo esc_url( get_permalink( 297 ) ); ?>" class="tender-showall" id="more-btn-cur-dvukhetapnye">Барлық сатып алуларды көрсету</a></div>
				</div>

				<?php endif; ?>
				<div class="zakupki-archive-block">
					<h2>Мұрағат</h2>
					<div class="zakupki-item" id="arc-tsenovykh">
						<h3 class="zakupki-item__title">Баға ұсыныстарын сұрату тәсілі бойынша</h3>
						<div class="tender-table">
							<div class="tender-row tender-row-head"><span>Атауы</span><span>Басталуы</span><span>Аяқталуы</span></div>
							<div id="rows-arc-tsenovykh"></div>
						</div>
						<div class="tender-more" id="more-wrap-arc-tsenovykh" hidden><a href="<?php echo esc_url( get_permalink( 305 ) ); ?>" class="tender-showall" id="more-btn-arc-tsenovykh">Барлық сатып алуларды көрсету</a></div>
					</div>

					<div class="zakupki-item" id="arc-odnogo">
						<h3 class="zakupki-item__title">Бір көзден алу тәсілімен</h3>
						<div class="tender-table">
							<div class="tender-row tender-row-head"><span>Атауы</span><span>Басталуы</span><span>Аяқталуы</span></div>
							<div id="rows-arc-odnogo"></div>
						</div>
						<div class="tender-more" id="more-wrap-arc-odnogo" hidden><a href="<?php echo esc_url( get_permalink( 309 ) ); ?>" class="tender-showall" id="more-btn-arc-odnogo">Барлық сатып алуларды көрсету</a></div>
					</div>

					<div class="zakupki-item" id="arc-otkrytogo">
						<h3 class="zakupki-item__title">Ашық тендер тәсілімен</h3>
						<div class="tender-table">
							<div class="tender-row tender-row-head"><span>Атауы</span><span>Басталуы</span><span>Аяқталуы</span></div>
							<div id="rows-arc-otkrytogo"></div>
						</div>
						<div class="tender-more" id="more-wrap-arc-otkrytogo" hidden><a href="<?php echo esc_url( get_permalink( 307 ) ); ?>" class="tender-showall" id="more-btn-arc-otkrytogo">Барлық сатып алуларды көрсету</a></div>
					</div>

					<div class="zakupki-item" id="arc-dvukhetapnye">
						<h3 class="zakupki-item__title">Ашық екі кезеңді тендер тәсілімен</h3>
						<div class="tender-table">
							<div class="tender-row tender-row-head"><span>Атауы</span><span>Басталуы</span><span>Аяқталуы</span></div>
							<div id="rows-arc-dvukhetapnye"></div>
						</div>
						<div class="tender-more" id="more-wrap-arc-dvukhetapnye" hidden><a href="<?php echo esc_url( get_permalink( 311 ) ); ?>" class="tender-showall" id="more-btn-arc-dvukhetapnye">Барлық сатып алуларды көрсету</a></div>
					</div>
				</div>
			</div>
		</div>

		<script type="application/json" id="tenderData"><?php echo wp_json_encode( $zakupki_data ); ?></script>
		<script>
		(function(){
			var DATA = JSON.parse(document.getElementById('tenderData').textContent);
			var PAGE = 6;
			var SECTIONS = [
				{key:"tsenovykh", state:"current", id:"cur-tsenovykh"},
				{key:"odnogo", state:"current", id:"cur-odnogo"},
				{key:"otkrytogo", state:"current", id:"cur-otkrytogo"},
				{key:"dvukhetapnye", state:"current", id:"cur-dvukhetapnye"},
				{key:"tsenovykh", state:"archive", id:"arc-tsenovykh"},
				{key:"odnogo", state:"archive", id:"arc-odnogo"},
				{key:"otkrytogo", state:"archive", id:"arc-otkrytogo"},
				{key:"dvukhetapnye", state:"archive", id:"arc-dvukhetapnye"}
			];
			var EMPTY_TEXT = 'Бұл тәсіл бойынша қазіргі уақытта жарияланған сатып алулар жоқ.';

			function renderSection(sec) {
				var list = (DATA[sec.key] && DATA[sec.key][sec.state]) || [];
				var rowsEl = document.getElementById('rows-' + sec.id);
				var moreWrap = document.getElementById('more-wrap-' + sec.id);
				if (!rowsEl) return;
				rowsEl.innerHTML = '';
				if (!list.length) {
					var empty = document.createElement('div');
					empty.className = 'tender-empty';
					empty.textContent = EMPTY_TEXT;
					rowsEl.appendChild(empty);
					if (moreWrap) moreWrap.hidden = true;
					return;
				}
				var slice = list.slice(0, sec.shown || PAGE);
				slice.forEach(function(item){
					var row = document.createElement('div');
					row.className = 'tender-row';
					var title = document.createElement('a');
					title.className = 'tender-row-title';
					title.textContent = item.t;
					if (item.u) { title.href = item.u; }
					var start = document.createElement('span');
					start.className = 'tender-row-date';
					start.setAttribute('data-label', 'Басталуы');
					start.textContent = item.s;
					var end = document.createElement('span');
					end.className = 'tender-row-date';
					end.setAttribute('data-label', 'Аяқталуы');
					end.textContent = item.e;
					row.appendChild(title); row.appendChild(start); row.appendChild(end);
					rowsEl.appendChild(row);
				});
				if (moreWrap) moreWrap.hidden = (sec.shown || PAGE) >= list.length;
			}

			SECTIONS.forEach(function(sec){
				sec.shown = PAGE;
				renderSection(sec);
			});

			// rows are drawn by this script, so jump to the requested section (#cur-… / #arc-…) once they exist
			if (location.hash) {
				var target = document.getElementById(location.hash.slice(1));
				if (target) { setTimeout(function(){ target.scrollIntoView(); }, 50); }
			}
		})();
		</script>

		<div class="page-section">
			<h2>Байланыс</h2>
			<p>Сатып алулар бойынша сұрақтар туындаған жағдайда «Кедентранссервис» АҚ-мен төмендегі байланыс арқылы хабарласуға болады.</p>
			<div class="info-grid cols-1">
				<div class="info-card">
					<p>Мекенжай: Қазақстан Республикасы, 010000, Астана қ., Достық к-сі, 18</p>
					<p><a href="tel:+77172648888">+7 (717) 264 88 88</a></p>
					<p><a href="mailto:kense@kdts.kz">kense@kdts.kz</a></p>
				</div>
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
