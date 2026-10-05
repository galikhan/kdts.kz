<?php
/**
 * Procurement list (current / archive) — shared by the archive-*.php templates.
 * Expects $tl = array( 'pills' => page IDs, 'title_id' => page ID, 'archive' => bool ).
 */
$archive_parent = 303;
$group_label   = ! empty( $tl['archive'] ) ? 'Мұрағат' : 'Сатып алу'; // section name stays in the page title
?>
<section class="page-hero page-hero-zakupki">
	<div class="container">
		<div class="breadcrumb">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Басты бет</a>
			<span class="crumb-sep">/</span>
			<span><?php echo esc_html( $group_label ); ?></span>
			<span class="crumb-sep">/</span>
			<span class="crumb-current"><?php echo esc_html( get_the_title( $tl['title_id'] ) ); ?></span>
		</div>
		<h1><?php echo esc_html( $group_label ); ?></h1>
	</div>
</section>

<section class="page-content">
	<div class="container">
		<?php $zs_active = $tl['title_id']; ?>
		<div class="zakupki-layout">
			<?php include locate_template( 'template-parts/zakupki-sidebar.php' ); ?>
			<div class="zakupki-main">
		<h2 class="tender-list-title"><?php echo esc_html( get_the_title( $tl['title_id'] ) ); ?></h2>
		<?php if ( have_posts() ) : ?>
			<div class="tender-table">
				<div class="tender-row tender-row-head"><span>Атауы</span><span>Басталуы</span><span>Аяқталуы</span></div>
				<?php while ( have_posts() ) : the_post();
					$start = CFS()->get( 'data-nachalo' );
					$end   = CFS()->get( 'data-okonchanie' );
					?>
					<div class="tender-row">
						<a class="tender-row-title" href="<?php the_permalink(); ?>"><?php echo esc_html( html_entity_decode( get_the_title(), ENT_QUOTES ) ); ?></a>
						<span class="tender-row-date" data-label="Басталуы"><?php echo $start ? esc_html( date_i18n( 'd.m.Y', strtotime( $start ) ) ) : ''; ?></span>
						<span class="tender-row-date" data-label="Аяқталуы"><?php echo $end ? esc_html( date_i18n( 'd.m.Y', strtotime( $end ) ) ) : ''; ?></span>
					</div>
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
			<p class="tender-empty">Бұл бөлімде жарияланған сатып алулар жоқ.</p>
		<?php endif; ?>
			</div>
		</div>
	</div>
</section>
