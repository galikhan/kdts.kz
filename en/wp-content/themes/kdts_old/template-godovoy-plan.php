<?php
 /*
 * Template name: godovoy-plan-zakupok
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
                <li class="yazyk-active"><a href="<?php echo home_url('/zakupki/godovoy-plan-zakupok/', 'https') ?>">Eng</a></li>
                <li><a href="https://kdts.kz/satyp-alul/zhyldyk-satyp-alu-zhospary/">Қаз</a></li>
                <li><a href="https://kdts.kz/ru/zakupki/godovoy-plan-zakupok/">Рус</a></li>
            </ul>
		</div>
    </div>
	<main class="container-rukovodstvo">
		<section class="zakupki-navbar">
          	<?php include "zakup-menu.php" ?>
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
										<p class="swiper-slide__godovaya-text"> <?php echo $field["god"] ?> </p>
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
                    <div class="swiper-wrapper"  style="height: auto;">
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
									<a href="<?php echo $img["dokument"] ?>" download>
										<div class="godovaya-item__photo">
											<img src="<?php echo get_template_directory_uri(); ?>/img/tipovye-dogovora__icon.png" alt="#"/>
										</div>
										<div class="godovaya-item__text">
											<?php echo $img["tekst"] ?>
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