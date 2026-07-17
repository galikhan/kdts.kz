<?php
 /*
 * Template name: obyavleniya
 */
?>
<?php get_header(); ?>
<div class="pagination-block">
    <div class="sdfsdfjsdf">
<?php get_template_part('breadcrumbs') ?>
    </div>
    <div class="yazyk">
        <ul>
            <li class="yazyk-active"><a href="<?php echo home_url('/obyavleniya/', 'https') ?>">Қаз</a></li>
            <li><a href="https://www.kdts.kz/ru/obyavleniya/"> Рус</a></li>
            <li><a href="https://www.kdts.kz/en/obyavleniya/">Eng</a></li>
        </ul>
    </div>
</div>

 		<main class="novosti obyavleniya-page">
            <div class="novosti-container">
                <h1 class="novosti-title">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/tLine.svg" class="novosti-title__line" alt="#" /> 
					Хабарландырулар
                </h1>
				
				<div class="rukovodstvo-wrapper">
            <div class="swiper-container gallery-otchetnost1">
                <div class="swiper-wrapper">
					<div class="swiper-slide">
                        <div class="swiper-slide__godovaya">
                            <p class="swiper-slide__godovaya-text"> 2024 </p>
                        </div>
                    </div>
                	<div class="swiper-slide">
                        <div class="swiper-slide__godovaya">
                            <p class="swiper-slide__godovaya-text"> 2023 </p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-slide__godovaya">
                            <p class="swiper-slide__godovaya-text"> 2022 </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="godovaya-next">
                <svg class="icon" style="width:12px;height:12px;color:#fff;"><use href="#icon-chevron-right"></use></svg>
            </div>
            <div class="godovaya-prev">
                <svg class="icon" style="width:12px;height:12px;color:#fff;transform:rotate(180deg);"><use href="#icon-chevron-right"></use></svg>
            </div>
        </div>
				
		 <div class="swiper-container gallery-otchetnost2">
            <div class="swiper-wrapper" style="height: auto;">
			<div class="swiper-slide" style="display:block">
                    <div class="tarify-content novosti-items">
                        <?php if (have_posts()) : while (have_posts()) : the_post();  ?>
                        <?php if (get_the_id()<=2322){ ?>
                                <div class="novosti-item">
                                    <div class="data">
                                        <div class="novosti-data">
                                            <?php echo the_excerpt(); ?>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="novosti-head">
                                            <?php the_title(); ?>
                                        </p>
                                        <?php the_content() ?>
                                    </div>
                                </div> <!-- novosti-item / -->
                                <?php } ?>
                            <?php endwhile; ?>
                        <?php else : ?>
                        <?php endif; ?>
                    </div>
                </div> <!-- swiper-slide / -->
			<div class="swiper-slide" style="display:block">
                    <div class="tarify-content novosti-items">
                        <?php if (have_posts()) : while (have_posts()) : the_post();  ?>
                        <?php if (get_the_id() >= 2759){ ?>
                                <div class="novosti-item">
                                    <div class="data">
                                        <div class="novosti-data">
                                            <?php echo the_excerpt(); ?>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="novosti-head">                                       
                                            <?php the_title(); ?>
                                        </p>
                                        <?php the_content() ?>
                                    </div>
                                </div> <!-- novosti-item / -->
                                <?php } ?>
                            <?php endwhile; ?>

                        <?php else : ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="swiper-slide" style="display:block">
                    <div class="tarify-content novosti-items">
                        <?php if (have_posts()) : while (have_posts()) : the_post();  ?>
                        <?php if (get_the_id()>2322 && get_the_id() < 2758){ ?>
                                <div class="novosti-item">
                                    <div class="data">
                                        <div class="novosti-data">
                                            <?php echo the_excerpt(); ?>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="novosti-head">                                       
                                            <?php the_title(); ?>
                                        </p>
                                        <?php the_content() ?>
                                    </div>
                                </div> <!-- novosti-item / -->
                                <?php } ?>
                            <?php endwhile; ?>
                        <?php else : ?>
                        <?php endif; ?>
                    </div>
                </div> <!-- swiper-slide / -->
                
            </div>
        </div>              
            </div>
        </main>
<?php get_footer(); ?>