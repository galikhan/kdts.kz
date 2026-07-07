<?php
 /*
 * Template name: uslugi-peregruza4
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
                <li class="yazyk-active"><a href="<?php echo home_url('o-kompanii/uslugi/fitingovykh-platform/', 'https') ?>">Eng</a></li>
                <li><a href="https://www.kdts.kz/kompaniya-turaly/kyzmetter/fitingtik-platformalar/">Қаз</a></li>
                <li><a href="https://www.kdts.kz/ru/o-kompanii/uslugi/fitingovykh-platform/">Рус</a></li>
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
				<div class="peregruz-dostyk__content">
					<div class="peregruz-dostyk__block">
						<img src="<?php echo CFS()->get('foto'); ?>" alt="#" class="peregruz-dostyk__block-img" />		        
					</div>
					<div class="uslugi-peregruza__text">
						<?php the_post(); ?>
			<?php the_content() ?>
					</div>	
				</div> <!-- peregruz-dostyk__content / -->
		    </div> <!-- dell-container / -->
		</section>
    </main>
    <img src="<?php echo get_template_directory_uri(); ?>/img/uslugi-peregruza.png" alt="#" class="uslugi-peregruza__bg" />
<?php get_footer(); ?>







