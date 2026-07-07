
<?php
 /*
 * Template name: novosti
 */
?>
<?php get_header(); ?>
    	<div class="pagination-block">
			<div class="sdfsdfjsdf">
				<div class="header-logo1"></div>
				<?php get_template_part('breadcrumbs') ?>
			</div>
			<div class="yazyk">
				<ul>
					<li class="yazyk-active"><a href="<?php echo home_url('/novosti/', 'https') ?>">Eng</a></li>
					<li><a href="https://www.kdts.kz/zhanalyktar/"> Қаз</a></li>
					<li><a href="https://www.kdts.kz/ru/novosti/">Рус</a></li>
				</ul>
			</div>
    	</div>

 		<main class="novosti">
            <div class="novosti-container">
                <h1 class="novosti-title">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/tLine.svg" class="novosti-title__line" alt="#" /> 
					news
                </h1>
                <div class="novosti-items">
					<?php if (have_posts()) : while ( have_posts() ) : the_post();  ?>
                    <div class="novosti-item">
                         <a href="<?php the_permalink(); ?>">
                            <div class="novosti-photo">
                                <?php the_post_thumbnail() ?>
                            </div>
                            <p class="novosti-head">
                                <?php the_title(); ?>
                            </p>
                            <p class="novosti-open">
                                >>>
                            </p>
                            <p class="novosti-data">
                                <?php echo get_the_date(); ?>
                            </p>
                        </a>
                    </div> <!-- novosti-item / -->
				
                        <?php endwhile; ?>
                        <div class="news-number">
							<span>
								page
							</span>
                                <?php
//global $wp_query;

                            $big = 999999999; // need an unlikely integer
                             
                            echo paginate_links( array(
                                'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                                'format' => '?paged=%#%',
                                'current' => max( 1, get_query_var('paged') ),
								'prev_text'    => __(''),
								'next_text'    => __(''),
                                'total' => $wp_query->max_num_pages
                            ) );
                            ?>
                        </div>
                        <?php else: ?>
                        <?php endif; ?>
                  </div>  
                
            </div>
        </main>
<?php get_footer(); ?>

