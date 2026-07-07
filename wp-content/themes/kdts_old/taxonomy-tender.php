<?php 
	get_header();
?>
<?php
$args = array(
	'post_type' => 'tenders',
	'posts_per_page' => 10,
	'tax_query' => array(
		array(
		'taxonomy' => 'tender',
		'field' => 'slug',
					'terms' => 'Способом запроса ценовых предложений'

		)
	)
);


$loop = new WP_Query( $args ); 

while ( $loop-> have_posts() ): $loop->the_post(); ?>
<a href="<? the_permalink(); ?>"> <?php the_title(); ?> </a>
<?php endwhile;?>

<?php
$big = 999999999; // need an unlikely integer
 echo paginate_links( array(
    'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
    'format' => '?paged=%#%',
    'current' => max( 1, get_query_var('paged') ),
    'total' => $the_query->max_num_pages
) );

?>

<?php 
	get_footer();
?>