<?php
 /*
 * Template name: sovet-direktorov
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
                <li class="yazyk-active"><a href="<?php echo home_url('/o-kompanii/sovet-direktorov/', 'https') ?>">  Eng</a></li>
                <li><a href="https://www.kdts.kz/kompaniya-turaly/direktorlar-kenesi/">Қаз</a></li>
                <li><a href="https://www.kdts.kz/ru/o-kompanii/sovet-direktorov/">Рус</a></li>
            </ul>
		</div>
    </div>
  	<main>
        <div class="container-rukovodstvo">
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
            </section>
            <section class="rukovodstvo-content">
                <h1 class="partnery-title">
					<?php the_title(); ?>
                </h1>
                <div class="rukovodstvo-wrapper">
                    <div class="swiper-container gallery-thumbs">
                        <div class="swiper-wrapper">

							<?php $sotrudniki = CFS()->get('sotrudniki');
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
                     <div class="rukovodstvo-next"></div>
                    <div class="rukovodstvo-prev"></div>
                </div> <!-- rukovodstvo-wrapper / -->
                <div class="rukovodstvo-wrapper__bottom">
                    <div class="swiper-container gallery-top">
                        <div class="swiper-wrapper">
							
							<?php $sotrudnikTexti = CFS()->get('sotrudniki');
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
												<p class="user-text__rukovodstvo" style="margin-top:-25px;">
													'.$sotrudnikText["text999"].'
												</p>
											</div>
											<div class="user-info">
												<p class="user-path__rukovodstvo">
													Professional experience:
												</p>
												<p class="user-text__rukovodstvo" style="margin-top:-25px;">
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
    </main>
<?php get_footer(); ?>