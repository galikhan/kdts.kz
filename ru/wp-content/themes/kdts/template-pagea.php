
<?php
/*
 * Template name: simplepagea
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
        <li class="yazyk-active"><a href="<? echo home_url('/ustojchivoe-razvitie/', 'https') ?>"> Рус</a></li>
        <li><a href="https://www.kdts.kz/ustojchivoe-razvitie/">Қаз</a></li>
        <li><a href="https://www.kdts.kz/en/ustojchivoe-razvitie/">Eng</a></li>
    </ul>
</div>
</div>
<style type="text/css">
    .card{
        border: 1px solid #717171;
        padding: 25px;
    }

    .card h2{
        font-size: 26px;
        margin-bottom: 1rem;
        text-align: left;
    }

    .card .row{
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 3rem
    }

    @media screen and (max-width: 767px){
        .card .row{
            flex-wrap: wrap;

        }
        .card .data{

            margin-bottom: 3rem
        }
    }

    .card .btn-primary{
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

    .card .info{
            color: #000;
            margin-bottom: 1.5rem
        }
        .aktsioneram-text a:hover{
            color: #54b2ff;
        }



</style>
<main class="container-rukovodstvo">
    <section class="rukovodstvo-navbar">
        <a href="<? echo home_url('/o-kompanii', 'https') ?>" class="rukovodstvo-navbar__title">
            О КОМПАНИИ
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
        <div class="aktsioneram-text" style="text-indent: 0px;">
            <?php the_post(); ?>
            <?php the_content() ?>

            <? if (strstr($_SERVER['REQUEST_URI'], '/kalendar-korporativnyh-sobytij/')){ ?>
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
                                    <a href="https://www.kdts.kz/ru/wp-content/uploads/2022/01/Kalendar_korporativnykh_sobytiy_na_2022g.pdf" download="">
                                        <div class="godovaya-item__photo">
                                            <img src="https://www.kdts.kz/ru/wp-content/themes/kdts/img/tipovye-dogovora__icon.png" alt="#">
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
                                            <img src="https://www.kdts.kz/ru/wp-content/themes/kdts/img/tipovye-dogovora__icon.png" alt="#">
                                        </div>
                                        <div class="godovaya-item__text">
                                            Календарь корпоративных событий на 2021г.</div>
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