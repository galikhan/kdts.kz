<?php
 /*
 * Template name: obyavleniya
 */
?>
<?php get_header(); ?>
<?php
$announcements = get_posts( array(
	'post_type'      => 'obyavleniya',
	'post_status'    => 'publish',
	'posts_per_page' => -1,
	'orderby'        => 'date',
	'order'          => 'DESC',
) );
$ann_years = array();
foreach ( $announcements as $a ) {
	$ann_years[ get_the_date( 'Y', $a ) ] = true;
}
$ann_years = array_keys( $ann_years );
?>

<section class="page-hero">
	<div class="container">
		<div class="breadcrumb">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
			<span class="crumb-sep">/</span>
			<span class="crumb-current">Announcements</span>
		</div>
		<h1>Announcements</h1>
		<div class="subnav-pills">
			<a href="<?php echo esc_url( home_url( '/obyavleniya' ) ); ?>" class="is-active">Announcements</a>
			<a href="<?php echo esc_url( home_url( '/stavki-i-tarify' ) ); ?>">Rates and Tariffs</a>
			<a href="<?php echo esc_url( home_url( '/park-platform-i-konteynerov' ) ); ?>">Park of platforms</a>
			<a href="<?php echo esc_url( home_url( '/tipovye-dogovora' ) ); ?>">Standard contracts</a>
			<a href="<?php echo esc_url( home_url( '/uchreditelnye-dokumenty' ) ); ?>">Constituent documents</a>
		</div>
	</div>
</section>

<section class="page-content">
	<div class="container">
		<?php if ( $announcements ) : ?>
			<div class="ann-filter" role="tablist">
				<button type="button" class="ann-filter-btn is-active" data-year="all">All</button>
				<?php foreach ( $ann_years as $y ) : ?>
					<button type="button" class="ann-filter-btn" data-year="<?php echo esc_attr( $y ); ?>"><?php echo esc_html( $y ); ?></button>
				<?php endforeach; ?>
			</div>

			<div class="ann-list" id="annList">
				<?php foreach ( $announcements as $a ) : ?>
					<article class="ann-item" data-year="<?php echo esc_attr( get_the_date( 'Y', $a ) ); ?>">
						<div class="ann-date">
							<span class="ann-date-day"><?php echo esc_html( get_the_date( 'd.m', $a ) ); ?></span>
							<span class="ann-date-year"><?php echo esc_html( get_the_date( 'Y', $a ) ); ?></span>
						</div>
						<div class="ann-body">
							<h3><?php echo esc_html( get_the_title( $a ) ); ?></h3>
							<?php echo apply_filters( 'the_content', $a->post_content ); ?>
						</div>
					</article>
				<?php endforeach; ?>
			</div>

			<div class="ann-more">
				<button type="button" class="btn btn-outline" id="annMore" hidden>Show more</button>
			</div>
		<?php else : ?>
			<p class="page-lead">No announcements.</p>
		<?php endif; ?>
	</div>
</section>

<section class="cta-banner">
	<div class="container cta-inner">
		<h2>READY TO DELIVER YOUR CARGO</h2>
		<p>
			<span>Submit a request to calculate the tariff or contact us directly:</span>
			<span class="cta-phones"><?php echo esc_html( CFS()->get( 'telefon1', 606 ) ); ?></span>
		</p>
		<div class="cta-buttons">
			<a href="https://my.kdts.kz/" target="_blank" rel="noopener" class="btn btn-primary">CALCULATE TARIFF</a>
			<a href="<?php echo esc_url( get_permalink( 606 ) ); ?>" class="btn btn-outline-light">CONTACT US</a>
		</div>
	</div>
</section>

<script>
(function () {
	var STEP = 10;
	var items = Array.prototype.slice.call(document.querySelectorAll('#annList .ann-item'));
	var buttons = document.querySelectorAll('.ann-filter-btn');
	var more = document.getElementById('annMore');
	if (!items.length || !more) return;
	var year = 'all', shown = STEP;
	function render() {
		var matching = items.filter(function (el) { return year === 'all' || el.getAttribute('data-year') === year; });
		items.forEach(function (el) { el.hidden = true; });
		matching.forEach(function (el, i) { el.hidden = i >= shown; });
		more.hidden = matching.length <= shown;
	}
	Array.prototype.forEach.call(buttons, function (b) {
		b.addEventListener('click', function () {
			Array.prototype.forEach.call(buttons, function (x) { x.classList.toggle('is-active', x === b); });
			year = b.getAttribute('data-year'); shown = STEP; render();
		});
	});
	more.addEventListener('click', function () { shown += STEP; render(); });
	render();
})();
</script>

<?php get_footer(); ?>
