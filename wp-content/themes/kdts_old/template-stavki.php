<?php
 /*
 * Template name: stavki-i-tarify
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
                <li class="yazyk-active"><a href="<?php echo home_url('/klientterge/molsherlemeler-zhane-tarifter/', 'https') ?>">Қаз</a></li>
                <li><a href="<?php echo home_url('/ru/klientam/stavki-i-tarify/', 'https') ?>">Рус</a></li>
                <li><a href="<?php echo home_url('/en/klientam/stavki-i-tarify/', 'https') ?>">Eng</a></li>
            </ul>
		</div>
    </div>
		<main>
            <img src="<?php echo get_template_directory_uri(); ?>/img/tarifyBg.png" class="tarify-bg" />
            <div class="container-rukovodstvo">
                <section class="rukovodstvo-navbar">
                     <a href="<?php echo home_url('/klientterge/molsherlemeler-zhane-tarifter', 'https') ?>" class="rukovodstvo-navbar__title">
         				Клиенттерге
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
                    <div class="stavki-text">
                        <?php the_post(); ?>
						<?php the_content() ?>  
                    </div>
                    <div class="stavki-title">
                        <?php echo CFS()->get('tekst1'); ?>
                    </div>
                </section> <!-- rukovodstvo-content / -->
            </div>

                <div class="tarify-content">
                    <div class="tarify-text"> 
                        <span class="tarify-number"> 1. </span> 
                        	<?php echo CFS()->get('tekst2'); ?>
						   <p class="tarify-prilozhenie"> 
								<a href="<?php echo CFS()->get('dokumenеt1'); ?>" download > 1-қосымша </a>
							</p>

                    </div>
                    <div class="tarify-text">
                        <span class="tarify-number"> 2. </span> 
							 <?php echo CFS()->get('tekst3'); ?>
							<p class="tarify-prilozhenie"> 
								<a href="<?php echo CFS()->get('dokumenеt2'); ?>" download > 2-қосымша </a>
							</p>                    
					</div>  
                    <div class="tarify-text">
                        <span class="tarify-number"> 3. </span> 
                        <?php echo CFS()->get('tekst4'); ?>
                    </div>  
                    <div class="tarify-items">
						
						<?php $bloki = CFS()->get('blok1-loop');
							foreach ($bloki as $blok) {
								echo '<div class="tarify-item">
										<a href="'.$blok["dokumenеt3"].'" download>
											<div class="tarify-item__photo">
												<img src="https://work.almazvoda.kz/wp-content/themes/kdts/img/tipovye-dogovora__icon.png"/>
												<p>'.$blok["tekst5"].'</p>
											</div>
											<div class="tarify-item__text">
												'.$blok["tekst6"].'
											</div>
										</a>
									</div>';
							}
						?>
                        
                    </div>

                    <div class="tarify-text"> 
                        <span class="tarify-number"> 4. </span> 
                        	<?php echo CFS()->get('tekst7'); ?>
                        <p class="tarify-prilozhenie"> 
						</p> 
                    </div>
                    <div class="tarify-text"> 
                        <span class="tarify-number"> 5. </span> 
                           <?php echo CFS()->get('tekst8'); ?>
						<p class="tarify-prilozhenie"> 
							<a href="<?php echo CFS()->get('dokumenеt5'); ?>" download > Өтініш формасы>>> </a>
						</p> 
                        <div>
                            <table class="tarify-tabel">
                                <tbody>
									
									<?php $tablitsy = CFS()->get('Tablitsy');
										foreach ($tablitsy as $tablit) {
											echo '<tr>
													<td class="tarify-tabel__left"> '.$tablit["tekst9"].' </td>
													<td class="tarify-tabel__right" style="width: 30%;"> '.$tablit["tekst10"].' </td>
												</tr>';
										}
									?>
                                  
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tarify-text"> 
                        <span class="tarify-number"> 6. </span> 
                         <?php echo CFS()->get('tekst11'); ?>
                    </div>
            </div> <!-- tarify-content / -->
            <div class="tarifnye-usloviya">
				
					<?php $bloki = CFS()->get('blok2-loop');
							foreach ($bloki as $blok) {
								echo '<div class="tarifnye-usloviya__item">
										<a href="'.$blok["dokumenеt6"].'" download>
											<div class="tarifnye-usloviya__photo">
												<img src="https://work.almazvoda.kz/wp-content/themes/kdts/img/tarifnye-usloviya__icon.png" alt="#"/>
											</div>
											<div class="tarifnye-usloviya__text">
												'.$blok["tekst12"].'
											</div>
										</a>
									</div>';
							}
						?>
				
            </div> <!-- tarifnye-usloviya -->
        </main>
 	
<?php get_footer(); ?>