
<?php
 /*
 * Template name: vakansii
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
                <li class="yazyk-active"><a href="<? echo home_url('/o-kompanii/vakansii/', 'https') ?>"> Eng</a></li>
                <li><a href="https://kdts.kz/kompaniya-turaly/bos-zhumys-oryndary/">Қаз</a></li>
                <li><a href="https://kdts.kz/ru/o-kompanii/vakansii/"> Рус</a></li>
            </ul>
		</div>
    </div>
	<main class="container-rukovodstvo">
        <section class="rukovodstvo-navbar">
            <a href="<? echo home_url('/o-kompanii', 'https') ?>" class="rukovodstvo-navbar__title">
               	About company
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
			<p>
				<?php the_post(); ?>
				<?php the_content() ?>   
			</p>
        </section> <!-- rukovodstvo-content / -->       
    </main>
 
<?php get_footer(); ?>