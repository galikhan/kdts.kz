<?php
 /*
 * Template name: uslugi
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
                <li class="yazyk-active"><a href="<?php echo home_url('/o-kompanii/uslugi/', 'https') ?>"> Eng</a></li>
                <li><a href="https://kdts.kz/kompaniya-turaly/kyzmetter/">Қаз</a></li>
                <li><a href="https://kdts.kz/ru/o-kompanii/uslugi/">Рус</a></li>
            </ul>
		</div>
    </div>
 	<main class="container-rukovodstvo">
        <section class="rukovodstvo-navbar">
             <a href="<?php echo home_url('/o-kompanii', 'https') ?>" class="rukovodstvo-navbar__title">
                 About company
             </a>
                    <div class="rukovodstvo-navbar__block">
                        <?php wp_nav_menu ( array (
								'theme_location' => 'okompanii-menu',
								'container' => false,
								'menu_class'      => '', 
							  )) ?>
                    </div>              
        </section> <!-- rukovodstvo-navbar / -->
       	<section class="rukovodstvo-content">
           <h1 class="partnery-title">
        		<?php the_title(); ?>
           </h1>
                    <div class="uslugiPage-items">
                        <div class="uslugiPage-item">
							<a href="<?php echo home_url('/o-kompanii/uslugi/fitingovykh-platform', 'https') ?>">
								<img src="<?php echo get_template_directory_uri(); ?>/img/19.png" alt="#" class="uslugiPage-item__img" />
								<div class="uslugiPage-block">
									<div class="uslugiPage-item__photo">
										<img src="<?php echo get_template_directory_uri(); ?>/img/uslugiPage1.png" />
									</div>
									<p class="uslugiPage-item__text">
										Providing fitting platforms (operating)
									</p>
								</div>
							</a>
                        </div> <!-- uslugiPage-item / -->

                        <div class="uslugiPage-item">
                            <a href="<?php echo home_url('/o-kompanii/uslugi/dostyk-i-altynkol', 'https') ?>">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/34.png" alt="#" class="uslugiPage-item__img" />
                                <div class="uslugiPage-block">
                                    <div class="uslugiPage-item__photo">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/uslugiPage2.png" />
                                    </div>
                                    <p class="uslugiPage-item__text">
                                        Transshipment services (Dostyk and Altynkol)
                                    </p>
                                </div>
                            </a>
                        </div> <!-- uslugiPage-item / -->

                        <div class="uslugiPage-item">
							<a href="<?php echo home_url('/o-kompanii/uslugi/gruzovykh-terminalov', 'https') ?>">
								<img src="<?php echo get_template_directory_uri(); ?>/img/8.png" alt="#" class="uslugiPage-item__img" />
								<div class="uslugiPage-block">
									<div class="uslugiPage-item__photo">
										<img src="<?php echo get_template_directory_uri(); ?>/img/uslugiPage3.png" />
									</div>
									<p class="uslugiPage-item__text">
										Terminal services (containers)
									</p>
								</div>
							</a>
                        </div> <!-- uslugiPage-item / -->

                        <div class="uslugiPage-item">
							<a href="<?php echo home_url('/o-kompanii/uslugi/zheleznodorozhnyh-perevozok', 'https') ?>">
								<img src="<?php echo get_template_directory_uri(); ?>/img/66.png" alt="#" class="uslugiPage-item__img" />
								<div class="uslugiPage-block">
									<div class="uslugiPage-item__photo">
										<img src="<?php echo get_template_directory_uri(); ?>/img/uslugiPage4.png" />
									</div>
									<p class="uslugiPage-item__text">
										Container transportation service (forwarding)
									</p>
								</div>
							</a>
                        </div> <!-- uslugiPage-item / -->
                    </div>
                </section> <!-- rukovodstvo-content / -->  
</main>
   <img src="<?php echo get_template_directory_uri(); ?>/img/uslugBg.png" alt="#" class="uslug-bg" /> 
<?php get_footer(); ?>