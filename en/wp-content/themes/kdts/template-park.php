<?php
 /*
 * Template name: park-platform-i-konteynerov
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
                <li class="yazyk-active"><a href="<? echo home_url('/klientam/park-platform-i-konteynerov/', 'https') ?>">Eng</a></li>
                <li><a href="https://www.kdts.kz/klientterge/platformalar-parki/">Қаз</a></li>
                <li><a href="https://www.kdts.kz/ru/klientam/park-platform-i-konteynerov/">Рус</a></li>
            </ul>
		</div>
    </div>
 	<main>
        <div class="container-rukovodstvo">
            <section class="rukovodstvo-navbar">
                <a href="<? echo home_url('/klientam/stavki-i-tarify', 'https') ?>" class="rukovodstvo-navbar__title">
         			КЛИЕНТАМ
             	</a>
			   <div class="rukovodstvo-navbar__block">
					<?php wp_nav_menu ( array (
						'theme_location' => 'klientam-menu',
						'container' => false,
						'menu_class'      => '', 
					)) ?>
				</div> 
            </section> <!-- rukovodstvo-navbar / -->
            <section class="rukovodstvo-content">
                <h1 class="partnery-title">
                    <?php the_title(); ?>
                </h1>
			  <article class="konteynerov-items">
				  	<div class="konteynerov-item">
						<div class="konteynerov-item__footer">
							<?php the_post(); ?>
							<?php the_content() ?>  
						</div>
					</div>
					<div class="konteynerov-item">
                         <img src="<?php echo get_template_directory_uri(); ?>/img/konteynerov3.png" alt="#" class="konteynerov-item__icon" />
					</div>
				  
                </article>
			
            </section> <!-- rukovodstvo-content / --> 
        </div>
        <div class="konteynerov-photo">
            <img src="<?php echo get_template_directory_uri(); ?>/img/konteynerovBg.png"  class="konteynerov-photo__icon" />
        </div> 
    </main>	
<?php get_footer(); ?>