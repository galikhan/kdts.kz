<?php
 /*
 * Template name: novosti
 */
?>
<?php get_header(); ?>
<?php $months = array( '', 'JANUARY', 'FEBRUARY', 'MARCH', 'APRIL', 'MAY', 'JUNE', 'JULY', 'AUGUST', 'SEPTEMBER', 'OCTOBER', 'NOVEMBER', 'DECEMBER' ); ?>

<section class="page-hero">
	<div class="container">
		<div class="breadcrumb">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
			<span class="crumb-sep">/</span>
			<span class="crumb-current">News</span>
		</div>
		<h1>News</h1>
	</div>
</section>

<section class="page-content is-wide">
	<div class="container">
		<?php if ( have_posts() ) : ?>
			<div class="news-grid cols-3">
				<?php while ( have_posts() ) : the_post();
					$thumb = get_the_post_thumbnail_url( get_the_ID(), 'large' );
					?>
					<a class="news-card" href="<?php the_permalink(); ?>">
						<img class="news-img" src="<?php echo esc_url( $thumb ? $thumb : get_template_directory_uri() . '/img/hero-railyard.jpg' ); ?>" alt="">
						<div class="news-body">
							<p><?php echo esc_html( html_entity_decode( get_the_title(), ENT_QUOTES ) ); ?></p>
							<div class="news-date">
								<span class="d"><?php echo esc_html( get_the_date( 'd' ) ); ?></span>
								<span class="m"><?php echo esc_html( $months[ (int) get_the_date( 'n' ) ] ); ?></span>
								<span class="y"><?php echo esc_html( get_the_date( 'Y' ) ); ?></span>
							</div>
						</div>
					</a>
				<?php endwhile; ?>
			</div>
			<?php
			global $wp_query;
			$links = paginate_links( array(
				'base'      => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
				'format'    => '?paged=%#%',
				'current'   => max( 1, get_query_var( 'paged' ) ),
				'total'     => $wp_query->max_num_pages,
				'prev_text' => '‹',
				'next_text' => '›',
			) );
			if ( $links ) {
				echo '<nav class="tender-pagination">' . $links . '</nav>';
			}
			?>
		<?php else : ?>
			<p class="page-lead">No news yet.</p>
		<?php endif; ?>
	</div>
</section>

<?php get_footer(); ?>
