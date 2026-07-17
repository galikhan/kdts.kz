
<?php
/*
 * Template name: vakansii
 */
?>
<?php get_header(); ?>
<div class="pagination-block">
    <div class="sdfsdfjsdf">
<?php get_template_part('breadcrumbs') ?>
    </div>
    <div class="yazyk">
     <ul>
        <li class="yazyk-active"><a href="<?php echo home_url('/kompaniya-turaly/bos-zhumys-oryndary/', 'https') ?>">Қаз</a></li>
        <li><a href="<?php echo home_url('/ru/o-kompanii/vakansii/', 'https') ?>">Рус</a></li>
        <li><a href="<?php echo home_url('/en/o-kompanii/vakansii/', 'https') ?>">Eng</a></li>
    </ul>
</div>
</div>
<style type="text/css">
    .card{
        border: 1px solid var(--c-line);
        border-radius: 16px;
        padding: 32px;
        background: var(--c-bg-card);
        box-shadow: var(--shadow-sm);
    }

    .card h2{
        font-size: 26px;
        margin-bottom: 1rem;
        text-align: left;
        color: var(--c-dark);
    }

    .card .row{
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 24px;
        margin-bottom: 0;
    }

    @media screen and (max-width: 767px){
        .card .row{
            flex-wrap: wrap;

        }
        .card .data{

            margin-bottom: 3rem
        }
    }

    .card .info{
            color: var(--c-grey);
            margin-bottom: 0;
        }

</style>
<main class="container-rukovodstvo">
    <section class="rukovodstvo-navbar">
        <a href="<?php echo home_url('/kompaniya-turaly', 'https') ?>" class="rukovodstvo-navbar__title">
            КОМПАНИЯ ТУРАЛЫ
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