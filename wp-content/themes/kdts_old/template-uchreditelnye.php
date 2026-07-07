<?php
 /*
 * Template name: uchreditelnye-dokumenty
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
                <li class="yazyk-active"><a href="<?php echo home_url('/klientterge/kryltajshylyk-sharttar/', 'https') ?>">Қаз</a></li>
                <li><a href="<?php echo home_url('/ru/klientam/uchreditelnye-dokumenty/', 'https') ?>">Рус</a></li>
                <li><a href="<?php echo home_url('/en/klientam/uchreditelnye-dokumenty/', 'https') ?>">Eng</a></li>
            </ul>
		</div>
    </div>
	<main class="container-rukovodstvo">
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
            <article class="uchreditelnye-dokumenty__items">
				
				<?php $dokumenty = CFS()->get('dokumenty');
				foreach ($dokumenty as $dokument) {
					echo '<div class="uchreditelnye-dokumenty__item">
							<a href="'.$dokument["fayl"].'" download>
								<div class="uchreditelnye-dokumenty__photo">
									<img src="https://work.almazvoda.kz/wp-content/themes/kdts/img/tipovye-dogovora__icon.png" alt="'.$dokument["tekst"].'" />
								</div>
								<div class="uchreditelnye-dokumenty__text">
									'.$dokument["tekst"].'
								</div>
							</a>
						</div>';
					}
				?>
                
            </article>
        </section> <!-- rukovodstvo-content / -->  
    </main>
 	
<?php get_footer(); ?>