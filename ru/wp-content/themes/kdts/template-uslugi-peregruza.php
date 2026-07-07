<?php
 /*
 * Template name: uslugi-peregruza
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
                <li class="yazyk-active"><a href="<?php echo home_url('/o-kompanii/uslugi/dostyk-i-altynkol/"', 'https') ?>"> Рус</a></li>
                <li><a href="https://www.kdts.kz/kompaniya-turaly/kyzmetter/dostyk-i-altynkol/">Қаз</a></li>
                <li><a href="https://www.kdts.kz/en/o-kompanii/uslugi/dostyk-i-altynkol/">Eng</a></li>
            </ul>
		</div>
    </div>
	<main>
        <div class="dell-container">
            <div class="uslugi-peregruza__h1">
                <h1>
                    <?php the_title(); ?>
                </h1>
            </div>
        </div>
        <section class="peregruz-dostyk">
		    <div class="dell-container">
		        
		        <div class="peregruz-dostyk__block1">
		            <img src="<?php echo get_template_directory_uri(); ?>/img/uslugBBlog.png" alt="#" class="peregruz-dostyk__block-img" />
		            <h2 class="peregruz-dostyk__title"> <?php echo CFS()->get('zagolovka1'); ?> </h2>
		            <div class="peregruz-dostyk__items">
		         
		             <?php
						  $blokLoopi = CFS()->get('blok-loop');
							  if (!empty($blokLoopi)):
								 foreach ($blokLoopi as $blokLoop) {
					?>
						 		<div class="peregruz-dostyk__item">
									<div class="peregruz-dostyk__item-photo">
										<img src="<?php echo $blokLoop["foto1"] ?>" alt="#" class="peregruz-dostyk__item-icon" />
									</div>     
									<div class="peregruz-dostyk__item-number">
										<span>
											<?php echo $blokLoop["tsifr"] ?>
										</span>
										вагонов /
										сутки
									</div>
									<p class="peregruz-dostyk__item-title">
										<?php echo $blokLoop["zagolovka2"] ?>
									</p>
										
									<ul class="peregruz-dostyk__item-text">
										<?php
											$teksty = $blokLoop['teksty'];
											foreach ($teksty as $tekst) {
										?>
											<li> <?php echo $tekst["text1"] ?> </li> 
									  	<?php }; ?>
									</ul>
								</div> <!-- peregruz-dostyk__item / -->

						<?php
						};
					endif; 
					?>
						
		            </div>
		        </div>
		    </div>
		</section>
        <section class="uslugi-peregruza__text1">
           <?php the_post(); ?>
			<?php the_content() ?>      
        </section>
       <!-- <section class="uslugi-vklyuchayut">
		    <div class="dell-container">
		        <div class="uslugi-vklyuchayut__block">
		            <h3 class="uslugi-vklyuchayut__title">
						<?php echo CFS()->get('zagolovka3'); ?>
					</h3>
		            <div class="uslugi-vklyuchayut__items">
		            	
		                 <?php $blokloopi = CFS()->get('blok1-loop');
							foreach ($blokloopi as $blokloop) {
								echo '<div class="uslugi-vklyuchayut__item">
										<div class="uslugi-vklyuchayut__item-line">

										</div>
										<p class="uslugi-vklyuchayut__item-text">
											'.$blokloop["text2"].'
										</p>
									</div>';
								}
						?>
		          
		            </div>
		        </div>
		    </div>
		</section> -->
    </main>
    <img src="<?php echo get_template_directory_uri(); ?>/img/uslugi-peregruza.png" alt="#" class="uslugi-peregruza__bg" />
<?php get_footer(); ?>







