
<?php
/*
 * Template name: simplepage
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
        <li class="yazyk-active"><a href="<?php echo home_url('/ustojchivoe-razvitie/', 'https') ?>"> Рус</a></li>
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
        <a href="<?php echo home_url('/o-kompanii', 'https') ?>" class="rukovodstvo-navbar__title">
            О КОМПАНИИ
        </a>
        <div class="rukovodstvo-navbar__block">
            <?php wp_nav_menu ( array (
                'theme_location' => 'okompanii-menu',
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
        </div>
    </section> <!-- rukovodstvo-content / -->
</main>

<?php get_footer(); ?>