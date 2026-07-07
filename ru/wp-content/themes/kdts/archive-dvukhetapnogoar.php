<?php
 /*
 * Template name: dvukhetapnogoAr
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
                <li class="yazyk-active"><a href="<? echo home_url('/zakupki/arkhivy/dvukhetapnogo-tendera/', 'https') ?>">Рус </a></li>
                <li><a href="<? echo home_url('https://www.kdts.kz/satyp-alul/muragat/ashyk-eki-kezendi/', 'https') ?>">Қаз</a></li>
                <li><a href="<? echo home_url('https://www.kdts.kz/en/zakupki/arkhivy/dvukhetapnogo-tendera/', 'https') ?>">Eng</a></li>
            </ul>
		</div>
    </div>
<main class="container-rukovodstvo">
	<section class="zakupki-navbar">
   		<?php include "zakup-menu.php" ?>
   	</section> <!-- rukovodstvo-navbar / -->
     <section class="zakupki-content">
            <h1 class="partnery-title">
                <? echo CFS()->get('zagolovka',311); ?>
            </h1>
             <p>
				 Тендеры не найдены
			 </p>
	
        </section> <!-- rukovodstvo-content / -->     
</main>
 		
<?php get_footer(); ?>





