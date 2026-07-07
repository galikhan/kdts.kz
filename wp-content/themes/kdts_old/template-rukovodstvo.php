
<?php
 /*
 * Template name: rukovodstvo
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
                <li class="yazyk-active"><a href="<? echo home_url('/kompaniya-turaly/basshyly/', 'https') ?>">Қаз</a></li>
                <li><a href="<? echo home_url('/ru/o-kompanii/rukovodstvo/', 'https') ?>">Рус</a></li>
                <li><a href="<? echo home_url('/en/o-kompanii/rukovodstvo/', 'https') ?>">Eng</a></li>
            </ul>
		</div>
    </div>   
<main>
        <div class="container-rukovodstvo">
            <section class="rukovodstvo-navbar">
                	<a href="<? echo home_url('/kompaniya-turaly', 'https') ?>" class="rukovodstvo-navbar__title">
                       КОМПАНИЯ ТУРАЛЫ
                    </a>
                    <div class="rukovodstvo-navbar__block">
                        <?php wp_nav_menu ( array (
								'theme_location' => 'okompanii-menu',
								'container' => false,
								'menu_class'      => '', 
							  )) ?>
                    </div>    
            </section>
            <section class="rukovodstvo-content">
                <h1 class="partnery-title">
                    <?php the_title(); ?>
                </h1>
                <div class="rukovodstvo-wrapper">
                    <div class="swiper-container gallery-thumbs">
                        <div class="swiper-wrapper">

							<? $sotrudniki = CFS()->get('sotrudniki');
								foreach ($sotrudniki as $sotrudnik) {
									echo '
									 <div class="swiper-slide swiper-slide__width">
										<div class="rukovodstvo-block__top">
											<div class="rukovodstvo-photo">
												<img src="'.$sotrudnik["foto-sotrudnik"].'" class="rukovodstvo-img" alt="#" />
											</div>
											<div class="rukovodstvo-name">
												<p class="rukovodstvo-im">'.$sotrudnik["imya-sotrudnik"].'</p>
												<p class="rukovodstvo-fam">'.$sotrudnik["familiya-sotrudnik"].'</p>
											</div>
										</div>
									</div>
									';
								 }
							?>
					
                        </div>
                        <div class="rukovodstvo-pagination"></div>
                       
                    </div>
					 <div class="rukovodstvo-prev"></div>
                     <div class="rukovodstvo-next"></div>
                </div> <!-- rukovodstvo-wrapper / -->
                <div class="rukovodstvo-wrapper__bottom">
                    <div class="swiper-container gallery-top">
                        <div class="swiper-wrapper">
							
							<? $sotrudnikTexti = CFS()->get('sotrudniki',17);
								foreach ($sotrudnikTexti as $sotrudnikText) {
									echo '
									 <div class="swiper-slide"> 
										<div class="rukovodstvo-block__bottom">
											<div class="user-name">
											'.$sotrudnikText["imya-sotrudnik"].' '.$sotrudnikText["familiya-sotrudnik"].'
											</div>
											<div class="user-dolzhnost">
												'.$sotrudnikText["dolzhnost-sotrudnik"].'
											</div>
											<div class="user-info">
												<p class="user-path__rukovodstvo">
													'.$sotrudnikText["text955"].'
												</p>
												<p class="user-text__rukovodstvo">
													'.$sotrudnikText["text999"].'
												</p>
											</div>
											<div class="user-info">
												<p class="user-path">
													Кәсіби тәжірибе:
												</p>
												<p class="user-text">
													'.$sotrudnikText["text"].'
												</p>
											</div>
										</div>
									</div>
									';
								 }
							?>
							

                        </div> <!-- swiper-wrapper / -->
                        
                    </div>
                </div> <!-- rukovodstvo-wrapper__bottom / -->
            </section> <!-- rukovodstvo-content / -->
        </div>
        <section class="container-rukovodstvo__two">
            <article class="rukovodstvo-navbar">
                <div class="rukovodstvo-navbar__banner">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/banner.png" class="rukovodstvo-navbar__banner-photo" alt="#"/>
                    <div class="rukovodstvo-navbar__banner-text">
                        <span> Азаматтарды </span> қабылдау кестесі
                    </div>
					
                    <a href="<? echo CFS()->get('qwe'); ?>" download class="rukovodstvo-navbar__banner-btn">
                        Жүктеу        
					</a>
                </div>      
            </article>
            <article class="rukovodstvo-content">
                <div class="rukovodstvo-onlayn">
                    <div class="rukovodstvo-onlayn__block">
                        <p class="rukovodstvo-onlayn__title"> Қабылдауға онлайн-өтінім: </p>
						<?php echo do_shortcode('[contact-form-7 id="930" title="rukovodstvo"]'); ?>
                    </div>
                </div>
            </article>
        </section>
    </main>
<?php get_footer(); ?>