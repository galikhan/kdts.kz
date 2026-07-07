<?php
 /*
 * Template name: informatsiya
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
                <li class="yazyk-active"><a href="<? echo home_url('/aktsioneram/informatsiya-o-korporativnykh-sobytiyakh/', 'https') ?>"> Рус</a></li>
                <li><a href="https://www.kdts.kz/aktsionerlerge/korporativtik-origalar-turaly-akparat/">Қаз</a></li>
                <li><a href="https://www.kdts.kz/en/aktsioneram/informatsiya-o-korporativnykh-sobytiyakh/">Eng</a></li>
            </ul>
		</div>
    </div>
 <main>
       <div class="container-rukovodstvo">
       		<section class="rukovodstvo-navbar">
           		<a href="<? echo home_url('/aktsioneram', 'https') ?>" class="rukovodstvo-navbar__title">
                    АКЦИОНЕРАМ
                </a>
                        <div class="rukovodstvo-navbar__block">
							<?php wp_nav_menu ( array (
								'theme_location' => 'aktsioneram-menu',
								'container' => false,
								'menu_class'      => '', 
							  )) ?>
						</div>    
            </section> <!-- rukovodstvo-navbar / -->

            <section class="rukovodstvo-content">
                <h1 class="partnery-title">
                    <?php the_title(); ?>
                </h1>
				<div class="rukovodstvo-wrapper">
                    <div class="swiper-container istoriya-thumbs">
                        <div class="swiper-wrapper">
							
							<?php
								$fields = CFS()->get('blok');
									if (!empty($fields)):
										foreach ($fields as $field) {
							?>
								<div class="swiper-slide">
									<div class="swiper-slide__godovaya">
										<p class="swiper-slide__godovaya-text"> <? echo $field["god"] ?> </p>
									</div> 
								</div>
							<?php 
								};
								endif; 
        					?>
							
                        </div>
                 	</div> <!-- istoriya-thumbs / -->
                        <div class="godovaya-next">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/ArrowNext.png" class="godovaya-next__icon" alt="#" />
                        </div>
                        <div class="godovaya-prev">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/ArrowPrev.png" class="godovaya-next__icon" alt="#" />
                        </div>
                	</div> <!-- rukovodstvo-wrapper / -->
				<div class="swiper-container istoriya-top">
                    <div class="swiper-wrapper" style="height: auto;">
                      	<?php
							$fields = CFS()->get('blok');
								if (!empty($fields)):
									foreach ($fields as $field) {
						?>
						
						<div class="swiper-slide"> 
                            <div class="godovaya-items">
								<?php
									$images = $field['informatsiya'];
									foreach ($images as $img) {
								?>
								
								<!---------------------->
                               
								 <div class="istoriya-items">
									<div class="istoriya-godovaya">
											<? echo $img["kontent-god"] ?>
									</div>  
									<div class="istoriya-content">
											<? echo $img["kontent-text"] ?>
									</div>
								</div>
                                
                               <!-------------------->
								
								<?php }; ?>
							</div> <!-- godovaya-items / -->
                        </div> <!-- swiper-slide / -->
					<?php 
						};
					endif; 
					?> 
						
                    </div> <!-- swiper-wrapper / -->
                </div> <!-- gallery-otchetnost2 / -->
				  
				
				
            </section> <!-- rukovodstvo-content / -->
        </div>

        <div class="istoriya-photo__bg">
            <img src="<?php echo get_template_directory_uri(); ?>/img/istoriya-stanovleniya1.png" class="istoriya-photo__img" alt="#" />
        </div>
                    
    </main>
   
<?php get_footer(); ?>