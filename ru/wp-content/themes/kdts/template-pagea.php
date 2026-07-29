
<?php
/*
 * Template name: simplepagea
 */
?>
<?php get_header(); ?>
<div class="pagination-block">
    <div class="sdfsdfjsdf">
        <?php get_template_part('breadcrumbs') ?>
    </div>
    <div class="yazyk">
       <ul>
        <li class="yazyk-active"><a href="<?php echo home_url('/ustojchivoe-razvitie/', 'https') ?>"> Рус</a></li>
        <li><a href="https://www.kdts.kz/ustojchivoe-razvitie/">Қаз</a></li>
        <li><a href="https://www.kdts.kz/en/ustojchivoe-razvitie/">Eng</a></li>
    </ul>
</div>
</div>
<main class="simplepage-container">
    <section class="rukovodstvo-content rukovodstvo-content--full">
        <h1 class="partnery-title">
            <?php the_title(); ?>
        </h1>
        <div class="aktsioneram-text" style="text-indent: 0px;">
            <?php the_post(); ?>
            <?php the_content() ?>

            <?php if (strstr($_SERVER['REQUEST_URI'], '/kalendar-korporativnyh-sobytij/')){ ?>
                <div class="rukovodstvo-wrapper">
                    <div class="swiper-container istoriya-thumbs">
                        <div class="swiper-wrapper">

                            <div class="swiper-slide">
                                <div class="swiper-slide__godovaya">
                                    <p class="swiper-slide__godovaya-text"> 2022 </p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="swiper-slide__godovaya">
                                    <p class="swiper-slide__godovaya-text"> 2021 </p>
                                </div>
                            </div>

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

                        <div class="swiper-slide">
                            <div class="godovaya-items">

                                <!---------------------->
                                <div class="godovaya-item">
                                    <a href="https://www.kdts.kz/ru/wp-content/uploads/2022/01/Kalendar_korporativnykh_sobytiy_na_2022g.pdf" download="">
                                        <div class="godovaya-item__photo">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/tipovye-dogovora__icon.png" alt="#">
                                        </div>
                                        <div class="godovaya-item__text">
                                            Календарь корпоративных событий на 2022г.</div>
                                    </a>
                                </div> <!-- godovaya-item / -->


                                <!-------------------->
                        </div> <!-- swiper-slide / -->
                  </div>
                        <div class="swiper-slide">
                            <div class="godovaya-items">



                                <!---------------------->
                                <div class="godovaya-item">
                                    <a href="https://www.kdts.kz/ru/wp-content/uploads/2022/01/Kalendar_korporativnykh_sobytiy_na_2021g.pdf" download="">
                                        <div class="godovaya-item__photo">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/tipovye-dogovora__icon.png" alt="#">
                                        </div>
                                        <div class="godovaya-item__text">
                                            Календарь корпоративных событий на 2021г.</div>
                                    </a>
                                </div> <!-- godovaya-item / -->

                                <!-------------------->
                        </div> <!-- swiper-slide / -->
                  </div>
                </div>
            <?php } ?>

        </div>
    </section> <!-- rukovodstvo-content / -->
</main>

<?php get_footer(); ?>