<?php
 /*
 * Template name: dvukhetapnogo
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
                <li class="yazyk-active"><a href="<? echo home_url('/satyp-alul/tender/ashyk-eki-kezendi/', 'https') ?>">Қаз</a></li>
                <li><a href="<? echo home_url('/ru/zakupki/tenders/sposobom-otkrytogo-dvuhetapnogo-tendera/', 'https') ?>">Рус</a></li>
                <li><a href="<? echo home_url('/en/zakupki/tenders/sposobom-otkrytogo-dvuhetapnogo-tendera/', 'https') ?>">Eng</a></li>
            </ul>
		</div>
    </div>

<main class="container-rukovodstvo">
	<section class="zakupki-navbar">
   		<?php include "zakup-menu.php" ?>
   	</section> <!-- rukovodstvo-navbar / -->
     <section class="zakupki-content">
    	<h1 class="partnery-title">
                <? echo CFS()->get('zagolovka',297); ?>
       </h1>
		 <p>
			 Тендерлер жоқ
		 </p>
       		
                 
    </section> <!-- rukovodstvo-content / -->     
</main>