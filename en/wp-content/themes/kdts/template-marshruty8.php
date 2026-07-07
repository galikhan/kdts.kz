<?php
 /*
 * Template name: marshruty8
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
                <li class="yazyk-active"><a href="<?php echo home_url('/klientam/marshruty-perevozok/suchzhou-varshava-polsha/', 'https') ?>">Eng</a></li>
                <li><a href="https://www.kdts.kz/klientterge/tasymaldaulardy-marshruttary/suchzhou-kytaj-varshava-polsha-2/">Қаз</a></li>
                <li><a href="https://www.kdts.kz/ru/klientam/marshruty-perevozok/suchzhou-varshava-polsha/">Рус</a></li>
            </ul>
		</div>
    </div>
     <main>
        <div class="marshruty-container">
            <div class="marshruty-head">
                <div class="marshruty-head__left">
                    <p class="marshruty-head__title">
                        Transportation routes
                    </p>
                </div>
                <div class="marshruty-head__right">
                    <div class="accordion"> <?php the_title(); ?> </div>
					<div class="panel">
                        <a href="<?php echo home_url('/klientam/marshruty-perevozok/evropa-rossiya-cherez-rigu', 'https') ?>"> 
                            Europe - Russia (via Riga)
                        </a> 
                        <a href="<?php echo home_url('/klientam/marshruty-perevozok/evropa-rossiya-cherez-brest', 'https') ?>"> 
                            Europe - Russia (via Brest)
                        </a> 
                        <a href="<?php echo home_url('/klientam/marshruty-perevozok/evropa-tsentr-aziya-cherez-rigu', 'https') ?>"> 
                            Europe-The Center Asia (via Riga)
                        </a>
                        <a href="<?php echo home_url('/klientam/marshruty-perevozok/evropa-tsentr-aziya-cherez-brest', 'https') ?>"> 
                           Europe-The Center Asia (via Brest) 
                        </a>
                        <a href="<?php echo home_url('/klientam/marshruty-perevozok/yoensuu-finlyandiya-korla-kitay', 'https') ?>">
                           Joensuu (Finland) - Korla (China)
                        </a> 
                        <a href="<?php echo home_url('/klientam/marshruty-perevozok/kitay-evropa', 'https') ?>"> 
                           China - Europe 
                        </a>
                        <a href="<?php echo home_url('/klientam/marshruty-perevozok/suchzhou-kitay-varshava-polsha', 'https') ?>"> 
                            Suzhou (China) - Warsaw (Poland)
                        </a>
                    </div> <!-- panel / -->
                </div>
            </div>
        </div>
        <section class="marshruty-inner">
			<img src="<?php echo get_template_directory_uri(); ?>/img/suchzhou-varshava-polshaBg.png" class="marshruty-bg" alt="#" />
            <img src="<?php echo get_template_directory_uri(); ?>/img/suchzhou-varshava-polshaBg1.png" class="marshruty-bg__pad" alt="#" />
            <div class="put">
                <img src="<?php echo get_template_directory_uri(); ?>/img/suchzhou-varshava-polshaBlock1.png" alt="#"/>
            </div>
        </section>
              <?php include "marshruty-text.php" ?>

    </main>
<?php get_footer(); ?>