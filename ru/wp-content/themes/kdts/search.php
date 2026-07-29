<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package kdts
 */

get_header();
?>
	<?php include "template-breadcrumbs.php" ?>
	<main id="primary" class="site-main">
        <div class="dell-container">

		<?php if ( have_posts() ) : ?>

			<section class="page-header">
				<h1 class="page-title">
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Результаты поиска для: %s', 'kdts' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h1>
			</section><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;
			the_posts_pagination(); 

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
		</div>
	</main><!-- #main -->

<?php get_footer(); ?>
