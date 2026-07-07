<?php
 /*
 * Template name: marshruty6
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
                <li class="yazyk-active"><a href="<? echo home_url('/klientterge/tasymaldaulardy-marshruttary/kytai-europa/', 'https') ?>">Қаз</a></li>
                <li><a href="<? echo home_url('/ru/klientam/marshruty-perevozok/kitay-evropa/', 'https') ?>">Рус</a></li>
                <li><a href="<? echo home_url('/en/klientam/marshruty-perevozok/kitay-evropa/', 'https') ?>">Eng</a></li>
            </ul>
		</div>
    </div>
       <main>
        <div class="marshruty-container">
            <div class="marshruty-head">
                <div class="marshruty-head__left">
                    <p class="marshruty-head__title">
                        Тасымалдау бағыттары
                    </p>
                </div>
                <div class="marshruty-head__right">
                    <div class="accordion"> <?php the_title(); ?> </div>
					<div class="panel">
                        <a href="<? echo home_url('/klientterge/tasymaldaulardy-marshruttary/europa-resej-riga-arkyly', 'https') ?>"> 
                            Еуропа-Ресей (Рига арқылы)
                        </a> 
                        <a href="<? echo home_url('/klientterge/tasymaldaulardy-marshruttary/europa-resej-brest-arkyly', 'https') ?>"> 
                            Еуропа-Ресей (Брест арқылы)
                        </a> 
                        <a href="<? echo home_url('/klientterge/tasymaldaulardy-marshruttary/europa-ortalyk-aziya-riga-arkyly', 'https') ?>"> 
                            Еуропа-Орталық Азия (Рига арқылы)
                        </a>
                        <a href="<? echo home_url('/klientterge/tasymaldaulardy-marshruttary/europa-ortalyk-aziya-brest-arkyly', 'https') ?>"> 
                           Еуропа-Орталық Азия (Брест арқылы)
                        </a>
                        <a href="<? echo home_url('/klientterge/tasymaldaulardy-marshruttary/joensuu-finlyandiya-korla-kytaj', 'https') ?>">
                            Йоэнсуу (Финляндия) - Корла (Қытай)
                        </a> 
                        <a href="<? echo home_url('/klientterge/tasymaldaulardy-marshruttary/suchzhou-kytaj-varshava-polsha', 'https') ?>"> 
                            Сучжоу (Китай) - Варшава (Польша)
                        </a>
                        <a href="<? echo home_url('/klientterge/tasymaldaulardy-marshruttary/suchzhou-kytaj-varshava-polsha-2', 'https') ?>"> 
                           Сучжоу (Қытай) - Варшава (Польша)
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <section class="marshruty-inner">
			<img src="<?php echo get_template_directory_uri(); ?>/img/kitay-evropaBg.png" class="marshruty-bg" alt="#" />
            <img src="<?php echo get_template_directory_uri(); ?>/img/kitay-evropaBg1.png" class="marshruty-bg__pad" alt="#" />
            <div class="put">
                <img src="<?php echo get_template_directory_uri(); ?>/img/kitay-evropaBlock1.png" alt="#" />
            </div>
        </section>
        <?php include "marshruty-text.php" ?>

    </main>	
<?php get_footer(); ?>