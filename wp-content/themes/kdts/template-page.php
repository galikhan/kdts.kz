
<?php
/*
 * Template name: simplepage
 */
?>
<?php get_header(); ?>
<div class="pagination-block">
    <div class="sdfsdfjsdf">
<?php get_template_part('breadcrumbs') ?>
    </div>
    <div class="yazyk">
       <ul>
        <li class="yazyk-active"><a href="https://www.kdts.kz/ru/ustojchivoe-razvitie/"> Рус</a></li>
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
        </div>
    </section> <!-- rukovodstvo-content / -->
</main>

<?php get_footer(); ?>