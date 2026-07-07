<?php
 /*
 * Template name: otkrytogoAr
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
                <li class="yazyk-active"><a href="<?php echo home_url('/zakupki/arkhivy/otkrytogo-tendera/', 'https') ?>">Eng </a></li>
                <li><a href="https://kdts.kz/satyp-alul/muragat/ashyk-tender-tasilimen/">Қаз</a></li>
                <li><a href="https://kdts.kz/ru/zakupki/arkhivy/otkrytogo-tendera/">Рус</a></li>
            </ul>
		</div>
    </div>

<main class="container-rukovodstvo">
	<section class="zakupki-navbar">
   		<?php include "zakup-menu.php" ?>
   	</section> <!-- rukovodstvo-navbar / -->
     <section class="zakupki-content">
            <h1 class="partnery-title">
            	<?php echo CFS()->get('zagolovka',307); ?>
            </h1>
            <div class="zakupki-items">
              
                <div class="zakupki-item">
                    <div class="zakupki-head">
                        <div class="zakupki-name">
                            Title
                        </div>
                        <div class="zakupki-nachalo">
                            Beginning
                        </div>
                        <div class="zakupki-okonchanie">
                            Ending
                        </div>
                    </div> <!-- zakupki-head / -->
                
                  <?php if (have_posts()) : while ( have_posts() ) : the_post();  ?>
                     <div class="zakupki-body">
						 <a href="<?php the_permalink(); ?>">
                        <div class="zakupki-body__name">
                            <?php the_title(); ?>
                        </div>
                        <div class="zakupki-body__nachalo">
                            <?php echo CFS()->get('data-nachalo'); ?>
                        </div>
                        <div class="zakupki-body__okonchanie">
                            <?php echo CFS()->get('data-okonchanie'); ?>
                        </div>
						 </a>		 
                    </div> <!-- zakupki-body / -->
				
                        <?php endwhile; ?>
                        <div class="zakupki-number">
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
	
			
                 
        </section> <!-- rukovodstvo-content / -->     
</main>
 		
<?php get_footer(); ?>





