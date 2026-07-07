<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kdts
 */

?>

<article id="post-<?php the_ID(); ?>" class="search-item__content">
	<div>
		<a href="<?php the_permalink(); ?>">
			<div class="search-block">
				<div class="search-block__title">
					<?php the_title(); ?>:
				</div>
            </div>
		</a>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
