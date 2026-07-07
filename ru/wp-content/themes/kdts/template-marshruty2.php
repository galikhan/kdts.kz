<?php
 /*
 * Template name: marshruty2
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
                <li class="yazyk-active"><a href="<?php echo home_url('/klientam/marshruty-perevozok/evropa-rossiya-cherez-rigu/', 'https') ?>"> Рус</a></li>
                <li><a href="<?php echo home_url('/klientterge/tasymaldaulardy-marshruttary/europa-resej-riga-arkyly/', 'https') ?>">Қаз</a></li>
                <li><a href="<?php echo home_url('/en/klientam/marshruty-perevozok/evropa-rossiya-cherez-rigu/', 'https') ?>">Eng</a></li>
            </ul>
		</div>
    </div>
   <main>
        <div class="marshruty-container">
            <div class="marshruty-head">
                <div class="marshruty-head__left">
                    <p class="marshruty-head__title">
                        Маршруты перевозок
                    </p>
                </div>
                <div class="marshruty-head__right">
                    <div class="accordion"> <?php the_title(); ?> </div>
					  <div class="panel">
                        <a href="<?php echo home_url('/klientam/marshruty-perevozok/suchzhou-kitay-varshava-polsha', 'https') ?>"> 
                             Сучжоу (Китай) - Варшава (Польша) 
                        </a> 
                        <a href="<?php echo home_url('/klientam/marshruty-perevozok/evropa-rossiya-cherez-brest', 'https') ?>"> 
                            Европа - Россия (через Брест)
                        </a> 
                        <a href="<?php echo home_url('/klientam/marshruty-perevozok/evropa-tsentr-aziya-cherez-rigu', 'https') ?>"> 
                            Европа - Центральная Азия (через Ригу) 
                        </a>
                        <a href="<?php echo home_url('/klientam/marshruty-perevozok/evropa-tsentr-aziya-cherez-brest', 'https') ?>"> 
                            Европа - Центральная Азия (через Брест)
                        </a>
                        <a href="<?php echo home_url('/klientam/marshruty-perevozok/yoensuu-finlyandiya-korla-kitay', 'https') ?>">
                             Йоэнсуу (Финляндия) - Корла (Китай) 
                        </a> 
                        <a href="<?php echo home_url('/klientam/marshruty-perevozok/kitay-evropa', 'https') ?>"> 
                            Китай - Европа 
                        </a>
                        <a href="<?php echo home_url('/klientam/marshruty-perevozok/suchzhou-varshava-polsha', 'https') ?>"> 
                            Сучжоу (Китай) - Варшава (Польша)
                        </a>
                    </div> <!-- panel / -->
                </div>
            </div>
        </div>
        <section class="marshruty-inner">			
			<img src="<?php echo get_template_directory_uri(); ?>/img/cherez-riguMap.png" class="marshruty-bg" alt="#" />
            <img src="<?php echo get_template_directory_uri(); ?>/img/cherez-riguMap1.png" class="marshruty-bg__pad" alt="#" />
			
            <div class="put">
                <img src="<?php echo get_template_directory_uri(); ?>/img/rossiya-cherez-rigu.jpg" alt="#" />
            </div>
        </section>
       <?php include "marshruty-text.php" ?>

    </main>	
<?php get_footer(); ?>