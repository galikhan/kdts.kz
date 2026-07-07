<?php
 /*
 * Template name: tipovye-dogovora
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
                <li class="yazyk-active"><a href="<?php echo home_url('/klientam/tipovye-dogovora/', 'https') ?>">Eng</a></li>
                <li><a href="/klientterge/ulgilik-sharttar/">Қаз</a></li>
                <li><a href="https://kdts.kz/ru/klientam/tipovye-dogovora/">Рус</a></li>
            </ul>
		</div>
    </div>
	<main>
        <div class="container-rukovodstvo">
            <section class="rukovodstvo-navbar">
                <a href="<?php echo home_url('/klientam/stavki-i-tarify', 'https') ?>" class="rukovodstvo-navbar__title">
         			Customers
             	</a>
			   <div class="rukovodstvo-navbar__block">
					<?php wp_nav_menu ( array (
						'theme_location' => 'klientam-menu',
						'container' => false,
						'menu_class'      => '', 
					)) ?>
				</div> 
            </section> <!-- rukovodstvo-navbar / -->
            <section class="rukovodstvo-content">
                <h1 class="partnery-title">
                    <?php the_title(); ?>
                </h1>
                <article class="tipovye-dogovora__head">
                    <p class="tipovye-dogovora__head-bold"> 
                        <?php echo CFS()->get('tekst4'); ?> 
                    </p>
                    <p class="tipovye-dogovora__head-text">
                        <?php echo CFS()->get('tekst5'); ?>
                    </p>
                    <p class="tipovye-dogovora__head-color">
                       <a href="<?php echo CFS()->get('dokument1'); ?>" download > application letter </a>
                    </p>
                    <p class="tipovye-dogovora__head-italic">
                        <?php echo CFS()->get('tekst6'); ?>
                    </p>
                </article>
            </section> <!-- rukovodstvo-content / -->  
        </div>
         
        <section class="rezidentov">
            <h1 class="rezidentov-title">
               <?php echo CFS()->get('zagolovka1'); ?>
            </h1>
           
            <div class="rezidentov-items">
                <div class="rezidentov-item">
                    <div class="rezidentov-item__head">
                        <?php echo CFS()->get('zagolovka2'); ?>
                    </div>
                    <div class="rezidentov-item__body">
                        
						<?php $teksty = CFS()->get('teksty1');
							foreach ($teksty as $tekst) {
								echo '<p> '.$tekst["text1"].' </p>';
							}
						?>
						
                    </div>
                </div>
                <div class="rezidentov-item">
                    <div class="rezidentov-item__head">
                        <?php echo CFS()->get('zagolovka3'); ?>
                    </div>
                    <div class="rezidentov-item__body">
                        <?php $teksty = CFS()->get('teksty2');
							foreach ($teksty as $tekst) {
								echo '<p> '.$tekst["text2"].' </p>';
							}
						?>
                    </div>
                </div>
            </div>
        </section>  
		
		
        <section class="tipovye-dogovora__zayavki">
            <div class="tipovye-dogovora__wrapper">
                <p class="tipovye-dogovora__zayavki-color">
                    <?php echo CFS()->get('tekst7'); ?>
                </p>
                <p class="tipovye-dogovora__zayavki-text">
                    <?php echo CFS()->get('tekst8'); ?>
                </p>
                <p class="tipovye-dogovora__zayavki-text">
                    <?php echo CFS()->get('tekst9'); ?>
                </p>
            </div>
        </section>
        <section>
            <div class="tipovye-dogovora__items">
				
				<?php $dogovory = CFS()->get('dogovor-loop');
					foreach ($dogovory as $dogovor) {
						echo '<div class="tipovye-dogovora__item">
							<a href="'.$dogovor["dokument"].'" download>
								<div class="tipovye-dogovora__photo">
									<img src="https://work.almazvoda.kz/wp-content/themes/kdts/img/tipovye-dogovora__icon.png" alt="#"/>
								</div>
								<div class="tipovye-dogovora__text">
									'.$dogovor["tekst3"].'
								</div>
							</a>
						</div>';
					}
				?>
           
            </div>
        </section>
    </main>
 	
<?php get_footer(); ?>