<?php
/*
 * Template name: zakupki_new
 */
?>
<?php get_header(); ?>
<div class="pagination-block">
    <div class="sdfsdfjsdf">
        <?php get_template_part('breadcrumbs') ?>
    </div>
    <div class="yazyk">
        <ul>
            <li class="yazyk-active"><a href="<?php echo home_url('/zakupki/tenders/', 'https') ?>">Рус</a></li>
            <li><a href="https://www.kdts.kz/satyp-alul/tender/">Қаз</a></li>
            <li><a href="https://www.kdts.kz/en/zakupki/tenders/">Eng</a></li>
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
        <div class="aktsioneram-text" style="text-indent: 0px;">
            <?php the_post(); ?>
            <?php the_content() ?>

            <?php if (strstr($_SERVER['REQUEST_URI'], '/zakupki-po-realizatsii-investitsionnyh-proektov/')) { ?>
                <div class="rukovodstvo-wrapper">
                    <div class="swiper-container istoriya-thumbs">
                        <div class="swiper-wrapper">


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
                                    <a href="https://www.kdts.kz/ru/wp-content/uploads/2022/04/Zakupki-po-realizatsii-investitsionnyh-proektov-za-2021g.xlsx" download="">
                                        <div class="godovaya-item__photo">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/tipovye-dogovora__icon.png" alt="#">
                                        </div>
                                        <div class="godovaya-item__text">
                                            Закупки по реализации инвестиционных проектов за 2021г.</div>
                                    </a>
                                </div> <!-- godovaya-item / -->


                                <!-------------------->
                            </div> <!-- swiper-slide / -->
                        </div>

                    </div>
                <?php } ?>
                <?php if (strstr($_SERVER['REQUEST_URI'], '/poryadok-osushhestvleniya-zakupok/')) { ?>
                    <div class="rukovodstvo-wrapper">
                        <div class="swiper-container istoriya-thumbs">
                            <div class="swiper-wrapper">


                                <div class="swiper-slide">
                                    <div class="swiper-slide__godovaya">
                                        <p class="swiper-slide__godovaya-text"> 2022 </p>
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
                                        <a href="https://www.kdts.kz/ru/wp-content/uploads/2022/09/Poryadok_zakupok_s_izmeneniyami_i_dopolneniyami_26-avg-2022-goda.doc" download="">
                                            <div class="godovaya-item__photo">
                                                <img src="<?php echo get_template_directory_uri(); ?>/img/tipovye-dogovora__icon.png" alt="#">
                                            </div>
                                            <div class="godovaya-item__text">
                                                Порядок осуществления закупок акционерным обществом «Фонд национального благосостояния «Самрук-Қазына»
                                            </div>
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