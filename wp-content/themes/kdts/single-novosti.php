<?php
/* Single news article */
get_header();
the_post();
$months = array( '', 'ҚАҢТАР', 'АҚПАН', 'НАУРЫЗ', 'СӘУІР', 'МАМЫР', 'МАУСЫМ', 'ШІЛДЕ', 'ТАМЫЗ', 'ҚЫРКҮЙЕК', 'ҚАЗАН', 'ҚАРАША', 'ЖЕЛТОҚСАН' );
$archive_url = get_post_type_archive_link( 'novosti' ) ?: home_url( '/zhanalyktar/' );
$others = get_posts( array(
	'post_type'        => 'novosti',
	'post_status'      => 'publish',
	'numberposts'      => 5,
	'exclude'          => array( get_the_ID() ),
	'orderby'          => 'date',
	'order'            => 'DESC',
	'suppress_filters' => true,
) );
$thumb = get_the_post_thumbnail_url( get_the_ID(), 'full' );
?>
<section class="page-hero">
	<div class="container">
		<div class="breadcrumb">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Басты бет</a>
			<span class="crumb-sep">/</span>
			<a href="<?php echo esc_url( $archive_url ); ?>">Жаңалықтар</a>
			<span class="crumb-sep">/</span>
			<span class="crumb-current"><?php echo esc_html( get_the_date( 'd.m.Y' ) ); ?></span>
		</div>
		<h1>Жаңалықтар</h1>
	</div>
</section>

<section class="page-content is-wide">
	<div class="container">
		<div class="news-article-layout">
			<article class="news-article">
				<div class="news-article-date">
					<span class="d"><?php echo esc_html( get_the_date( 'd' ) ); ?></span>
					<span class="m"><?php echo esc_html( $months[ (int) get_the_date( 'n' ) ] ); ?></span>
					<span class="y"><?php echo esc_html( get_the_date( 'Y' ) ); ?></span>
				</div>
				<h2 class="news-article-title"><?php echo esc_html( html_entity_decode( get_the_title(), ENT_QUOTES ) ); ?></h2>
				<?php if ( $thumb ) : ?>
					<img class="news-article-img" src="<?php echo esc_url( $thumb ); ?>" alt="">
				<?php endif; ?>
				<div class="news-article-body">
					<?php the_content(); ?>
				</div>
				<p><a class="tariff-form-link" href="<?php echo esc_url( $archive_url ); ?>">‹ Барлық жаңалықтар</a></p>
			</article>

			<?php if ( $others ) : ?>
				<aside class="news-aside">
					<h3>Басқа жаңалықтар</h3>
					<?php foreach ( $others as $o ) :
						$ot = get_the_post_thumbnail_url( $o->ID, 'medium' );
						?>
						<a class="news-aside-item" href="<?php echo esc_url( get_permalink( $o ) ); ?>">
							<?php if ( $ot ) : ?><img src="<?php echo esc_url( $ot ); ?>" alt=""><?php endif; ?>
							<span class="t"><?php echo esc_html( html_entity_decode( get_the_title( $o ), ENT_QUOTES ) ); ?></span>
							<span class="dt"><?php echo esc_html( get_the_date( 'd.m.Y', $o ) ); ?></span>
						</a>
					<?php endforeach; ?>
				</aside>
			<?php endif; ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>
