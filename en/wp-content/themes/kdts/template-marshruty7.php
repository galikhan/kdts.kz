<?php
 /*
 * Template name: marshruty7
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
                <li class="yazyk-active"><a href="<? echo home_url('/klientam/marshruty-perevozok/yoensuu-finlyandiya-korla-kitay/', 'https') ?>">Eng</a></li>
                <li><a href="https://www.kdts.kz/klientterge/tasymaldaulardy-marshruttary/joensuu-finlyandiya-korla-kytaj/">Қаз</a></li>
                <li><a href="https://www.kdts.kz/ru/klientam/marshruty-perevozok/yoensuu-finlyandiya-korla-kitay/">Рус</a></li>
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
                        <a href="<? echo home_url('/klientam/marshruty-perevozok/evropa-rossiya-cherez-rigu', 'https') ?>"> 
                            Europe - Russia (via Riga)
                        </a> 
                        <a href="<? echo home_url('/klientam/marshruty-perevozok/evropa-rossiya-cherez-brest', 'https') ?>"> 
                            Europe - Russia (via Brest)
                        </a> 
                        <a href="<? echo home_url('/klientam/marshruty-perevozok/evropa-tsentr-aziya-cherez-rigu', 'https') ?>"> 
                            Europe-The Center Asia (via Riga)
                        </a>
                        <a href="<? echo home_url('/klientam/marshruty-perevozok/evropa-tsentr-aziya-cherez-brest', 'https') ?>"> 
                            Europe-The Center Asia (via Brest)
                        </a>
                        <a href="<? echo home_url('/klientam/marshruty-perevozok/suchzhou-kitay-varshava-polsha', 'https') ?>">
                             Сучжоу (Китай) - Варшава (Польша)
                        </a> 
                        <a href="<? echo home_url('/klientam/marshruty-perevozok/kitay-evropa', 'https') ?>"> 
                           China - Europe
                        </a>
                        <a href="<? echo home_url('/klientam/marshruty-perevozok/suchzhou-varshava-polsha', 'https') ?>"> 
                            Suzhou (China) - Warsaw (Poland)
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <section class="marshruty-inner">			
			<img src="<?php echo get_template_directory_uri(); ?>/img/yoensuu-finlyandiya-korla-kitayBg.png" class="marshruty-bg" alt="#" />
            <img src="<?php echo get_template_directory_uri(); ?>/img/yoensuu-finlyandiya-korla-kitayBg1.png" class="marshruty-bg__pad" alt="#" />
            <div class="put">
                <img src="<?php echo get_template_directory_uri(); ?>/img/yoensuu-finlyandiya-korla-kitayBlock1.png" alt="#" />
            </div>
        </section>
       	<?php include "marshruty-text.php" ?>
    </main>
<?php get_footer(); ?>