
<?php
 /*
 * Template name: aktsioneram
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
                <li class="yazyk-active"><a href="<?php echo home_url('/aktsionerlerge/', 'https') ?>">Қаз</a></li>
                <li><a href="<?php echo home_url('/ru/aktsioneram/', 'https') ?>">Рус</a></li>
                <li><a href="<?php echo home_url('/en/aktsioneram/', 'https') ?>">Eng</a></li>
            </ul>
		</div>
    </div>
	 <main>
        <div class="container-rukovodstvo">
            <section class="rukovodstvo-navbar">
                <div class="rukovodstvo-navbar__top">
                    <a href="<?php echo home_url('/aktsionerlerge', 'https') ?>" class="rukovodstvo-navbar__title">
                        <?php the_title(); ?>
                    </a>
                    <div class="rukovodstvo-navbar__block">
						<?php wp_nav_menu ( array (
							'theme_location' => 'aktsioneram-menu',
							'container' => false,
							'menu_class'      => '', 
						  )) ?>
					</div>
                </div>
            </section> <!-- rukovodstvo-navbar / -->
            <section class="rukovodstvo-content">
                <h1 class="partnery-title">
                    <?php the_title(); ?>
                </h1>
				
                <div class="aktsioneram-title">
                    <?php echo CFS()->get('text1'); ?>
                </div>
                <div class="aktsioneram-text">
                    <?php the_post(); ?>
					<?php the_content() ?>   
                </div>
                <div class="aktsioneram-svedeniya">
                    <div class="aktsioneram-svedeniya__title">
                        <?php echo CFS()->get('svedeniya'); ?>
                    </div>
                    <ul class="aktsioneram-svedeniya__text">
						<?php $svedeniya = CFS()->get('svedeniya-danniy');
							foreach ($svedeniya as $svedeni) {
								echo '
									<li> '.$svedeni["tekst"].' </li>
								';
							}
						?>
                    </ul>
                </div>       
            </section> <!-- rukovodstvo-content / -->
        </div>
        <div class="konteynerov-photo">
            <img src="<?php echo get_template_directory_uri(); ?>/img/aktsioneramBg.png"  class="konteynerov-photo__icon" />
        </div> 
    </main>
   
<?php get_footer(); ?>