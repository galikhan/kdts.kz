<?php
 /*
 * Template name: spisok-affilirovannykh-lits
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
                <li class="yazyk-active"><a href="<? echo home_url('/aktsionerlerge/kosylma-tylgalar-tizimi/', 'https') ?>">Қаз</a></li>
                <li><a href="<? echo home_url('/ru/aktsioneram/spisok-affilirovannykh-lits/', 'https') ?>">Рус</a></li>
                <li><a href="<? echo home_url('/en/aktsioneram/spisok-affilirovannykh-lits/', 'https') ?>">Eng</a></li>
            </ul>
		</div>
    </div>
 <main class="container-rukovodstvo">
    
            <section class="rukovodstvo-navbar">
                <a href="<? echo home_url('/aktsionerlerge', 'https') ?>" class="rukovodstvo-navbar__title">
                    Акционерлерге
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
                    <div class="swiper-container gallery-otchetnost1">
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
               		</div> <!-- gallery-otchetnost1 / -->
                        <div class="godovaya-next">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/ArrowNext.png" class="godovaya-next__icon" alt="#" />
                        </div>
                        <div class="godovaya-prev">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/ArrowPrev.png" class="godovaya-next__icon" alt="#" />
                        </div>
                </div> <!-- rukovodstvo-wrapper / -->
				
 				<div class="swiper-container gallery-otchetnost2">
                    <div class="swiper-wrapper" style="height: auto;">
                      	<?php
							$fields = CFS()->get('blok');
								if (!empty($fields)):
									foreach ($fields as $field) {
						?>
						
						<div class="swiper-slide"> 
                            <div class="godovaya-items">
								<?php
									$images = $field['kontent'];
									foreach ($images as $img) {
								?>
								
								<!---------------------->
                                <div class="godovaya-item">
									<a href="<? echo $img["dokument"] ?>" download>
										<div class="godovaya-item__photo">
											<img src="<?php echo get_template_directory_uri(); ?>/img/tipovye-dogovora__icon.png" alt="#"/>
										</div>
										<div class="godovaya-item__text">
											<? echo $img["tekst"] ?>
										</div>
									</a>
                                </div> <!-- godovaya-item / -->
                                
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
                  
    </main>
<?php get_footer(); ?>