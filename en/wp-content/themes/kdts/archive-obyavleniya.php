<?php
 /*
 * Template name: obyavleniya
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
					<li class="yazyk-active"><a href="<? echo home_url('/obyavleniya/', 'https') ?>">Eng</a></li>
					<li><a href="https://www.kdts.kz/obyavleniya/"> Қаз</a></li>
					<li><a href="https://www.kdts.kz/ru/obyavleniya/">Рус</a></li>
				</ul>
			</div>
    	</div>

<style>
    .novosti-item {
        width: 100%;
        max-width: 100%;
        margin-bottom: 30px;
    }

    .novosti-item .novosti-data {
        font-weight: 600;
        font-size: 22px;
        line-height: 24.2px;
        color: #0B2335;
        margin-top: 10px;
        margin-right: 2rem;
        margin-bottom: 25px;
        min-width: 120px;
    }

    .novosti-item .novosti-data p{
        white-space: nowrap;
        text-align: right;
    }

    .novosti-item .novosti-head {
        font-weight: 600;
        font-size: 22px;
        line-height: 24.2px;
        color: #0B2335;
        margin-top: 10px;
        margin-bottom: 25px;

    }

    @media screen and (min-width: 768px) {
        .novosti-item {
            display: flex;
        }


    }

    .novosti-items {
        padding-top: 3rem;
    }
</style>
<!-- <main class="novosti">
    <div class="novosti-container">
        <h1 class="novosti-title">
            <img src="<?php echo get_template_directory_uri(); ?>/img/tLine.svg" class="novosti-title__line" alt="#" />
            Хабарландырулар
        </h1>-->


 		<main class="novosti">
            <div class="novosti-container">
                <h1 class="novosti-title">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/tLine.svg" class="novosti-title__line" alt="#" /> 
					Announcement
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
                <img src="https://www.kdts.kz/ru/wp-content/themes/kdts/img/ArrowNext.png" class="godovaya-next__icon" alt="#" />
            </div>
            <div class="godovaya-prev">
                <img src="https://www.kdts.kz/ru/wp-content/themes/kdts/img/ArrowPrev.png" class="godovaya-next__icon" alt="#" />
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