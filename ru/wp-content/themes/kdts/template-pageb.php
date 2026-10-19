
<?php
/*
 * Template name: simplepageb
 */
?>
<?php get_header(); ?>
<div class="pagination-block">
    <div class="sdfsdfjsdf">
        <?php get_template_part('breadcrumbs') ?>
    </div>
    <div class="yazyk">
       <ul>
        <li class="yazyk-active"><a href="https://www.kdts.kz/ru/oprosy-i-ankety/"> Рус</a></li>
        <li><a href="https://www.kdts.kz/caualnamalar-men-saualnamalar/">Қаз</a></li>
        <li><a href="https://www.kdts.kz/en/surveys-and-questionnaires/">Eng</a></li>
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

                <div class="rukovodstvo-wrapper">
                    <div class="swiper-container istoriya-thumbs">
                        <div class="swiper-wrapper">

                            <div class="swiper-slide">
                                <div class="swiper-slide__godovaya">
                                    <p class="swiper-slide__godovaya-text"> 2023 </p>
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
                                    <a href="https://forms.gle/vSgGRdfJ238Gotv78"  target="_blank">
                                        <div class="godovaya-item__photo">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/tipovye-dogovora__icon.png" alt="#">
                                        </div>
                                        <div class="godovaya-item__text">
                                        Оценка уровня удовлетворенности клиентов услугами АО "Кедентранссервис" по итогам 2022 года</div>
                                    </a>
                                </div> <!-- godovaya-item / -->


                                <!-------------------->
                        </div> <!-- swiper-slide / -->
                  </div>

                  </div>
                </div>

        </div>
    </section> <!-- rukovodstvo-content / -->
</main>

<?php get_footer(); ?>
