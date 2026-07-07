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
                <li class="yazyk-active"><a href="<?php echo home_url('zakupki/tenders/sposobom-otkrytogo-dvuhetapnogo-tendera/', 'https') ?>">Eng </a></li>
                <li><a href="https://kdts.kz/satyp-alul/tender/ashyk-eki-kezendi/"> Қаз</a></li>
                <li><a href="https://kdts.kz/ru/zakupki/tenders/sposobom-otkrytogo-dvuhetapnogo-tendera/">Рус</a></li>
            </ul>
		</div>
    </div>
<main class="container-rukovodstvo">
	<section class="zakupki-navbar">
   		<?php include "zakup-menu.php" ?>
   	</section> <!-- rukovodstvo-navbar / -->
     <section class="zakupki-content">
    	<h1 class="partnery-title">
        	<?php the_title(); ?>
       </h1>
		 <p>
			 No tenders found
		 </p>
       		
                 
    </section> <!-- rukovodstvo-content / -->     
</main>