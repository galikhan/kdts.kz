<?php
/*
 * Template name: zakupki_new
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
            <li class="yazyk-active"><a href="<? echo home_url('/zakupki/tenders/', 'https') ?>">Рус</a></li>
            <li><a href="https://www.kdts.kz/satyp-alul/tender/">Қаз</a></li>
            <li><a href="https://www.kdts.kz/en/zakupki/tenders/">Eng</a></li>
        </ul>
    </div>
</div>
<main class="container-rukovodstvo">
    <section class="zakupki-navbar">
        <?php include "zakup-menu.php" ?>
    </section> <!-- rukovodstvo-navbar / -->
    <style type="text/css">
        .card {
            border: 1px solid #717171;
            padding: 25px;
        }

        .card h2 {
            font-size: 26px;
            margin-bottom: 1rem;
            text-align: left;
        }

        .card .row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 3rem
        }

        @media screen and (max-width: 767px) {
            .card .row {
                flex-wrap: wrap;

            }

            .card .data {

                margin-bottom: 3rem
            }
        }

        .card .btn-primary {
            display: block;
            width: 100%;
            height: 45px;
            line-height: 45px;
            color: #fff;
            text-decoration: none;
            background: #107bc3;
            text-align: center;
            min-width: 200px;
        }

        .card .info {
            color: #000;
            margin-bottom: 1.5rem
        }

        .aktsioneram-text a:hover {
            color: #54b2ff;
        }
    </style>


    <section class="rukovodstvo-content">
        <h1 class="partnery-title">
            <?php the_title(); ?>
        </h1>
        <div class="aktsioneram-text" style="text-indent: 0px;">
            <?php the_post(); ?>
            <?php the_content() ?>

            <? if (strstr($_SERVER['REQUEST_URI'], '/zakupki-po-realizatsii-investitsionnyh-proektov/')) { ?>
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
                        <img src="https://www.kdts.kz/ru/wp-content/themes/kdts/img/ArrowNext.png" class="godovaya-next__icon" alt="#" />
                    </div>
                    <div class="godovaya-prev">
                        <img src="https://www.kdts.kz/ru/wp-content/themes/kdts/img/ArrowPrev.png" class="godovaya-next__icon" alt="#" />
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
                                            <img src="https://www.kdts.kz/ru/wp-content/themes/kdts/img/tipovye-dogovora__icon.png" alt="#">
                                        </div>
                                        <div class="godovaya-item__text">
                                            Закупки по реализации инвестиционных проектов за 2021г.</div>
                                    </a>
                                </div> <!-- godovaya-item / -->


                                <!-------------------->
                            </div> <!-- swiper-slide / -->
                        </div>

                    </div>
                <? } ?>
                <? if (strstr($_SERVER['REQUEST_URI'], '/poryadok-osushhestvleniya-zakupok/')) { ?>
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
                            <img src="https://www.kdts.kz/ru/wp-content/themes/kdts/img/ArrowNext.png" class="godovaya-next__icon" alt="#" />
                        </div>
                        <div class="godovaya-prev">
                            <img src="https://www.kdts.kz/ru/wp-content/themes/kdts/img/ArrowPrev.png" class="godovaya-next__icon" alt="#" />
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
                                                <img src="https://www.kdts.kz/ru/wp-content/themes/kdts/img/tipovye-dogovora__icon.png" alt="#">
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
                    <? } ?>

                    </div>
    </section> <!-- rukovodstvo-content / -->
</main>

<?php get_footer(); ?>