<?php
 /*
 * Template name: istoriya-kompanii
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
                <li class="yazyk-active"><a href="<?php echo home_url('/o-kompanii/istoriya-kompanii/', 'https') ?>"> Рус</a></li>
                <li><a href="https://www.kdts.kz/kompaniya-turaly/kompaniyanyn-tarihy/">Қаз</a></li>
                <li><a href="https://www.kdts.kz/en/o-kompanii/istoriya-kompanii/">Eng</a></li>
            </ul>
		</div>
    </div>
 <main>
       <div class="container-rukovodstvo">
       		<section class="rukovodstvo-navbar">
            	<a href="<?php echo home_url('/o-kompanii', 'https') ?>" class="rukovodstvo-navbar__title">
               		О КОМПАНИИ
               	</a>
                    <div class="rukovodstvo-navbar__block">
                        <?php wp_nav_menu ( array (
								'theme_location' => 'okompanii-menu',
								'container' => false,
								'menu_class'      => '', 
							  )) ?>
                    </div>      
            </section> <!-- rukovodstvo-navbar / -->

            <section class="rukovodstvo-content">
                <h1 class="partnery-title">
                    <?php the_post(); ?>
                    <?php the_content() ?>
                </h1>
                
                  <div class="rukovodstvo-container">
                    <div class="istoriya-lain">
    
                    </div>
                    <div class="rukovodstvo-wrapper" >
                       
                        <div class="swiper-container istoriya">
                            <div class="swiper-wrapper">
                              
								
							<?php
								$fields = CFS()->get('gody');
									if (!empty($fields)):
										foreach ($fields as $field) {
							?>
								<div class="swiper-slide" style="display:block;">
                                    <p class="istoriya-god"> <?php echo $field["god"] ?> </p>
                                    <span class="istoriya-elips">
                                    </span>
                                    <p class="istoriya-text">
                                        <?php echo $field["text4"] ?>
                                    </p>
                                </div>
							<?php 
								};
								endif; 
        					?>
								
                            </div>
                        </div>
                       
                    </div>
                    <div class="godovaya-next" style="top: 135px; transform: translateY(-100px); left: 0;">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/ArrowNext.png" class="godovaya-next__icon" alt="#" />
                    </div>
                    <div class="godovaya-prev" style="top: 135px; transform: translateY(-100px); right: 0;">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/ArrowPrev.png" class="godovaya-next__icon" alt="#" />
                    </div>
                </div>
             

                <div class="istoriya-info">
                    <div class="istoriya-info__title">
<?php echo CFS()->get('zagolovka'); ?>
                    </div>
                    <div class="istoriya-info__text">
                     	<?php
								$fields = CFS()->get('teksti1');
									if (!empty($fields)):
										foreach ($fields as $field) {
							?>
								<p>
                           			<?php echo $field["text1"] ?>
                        		</p>
							<?php 
								};
								endif; 
        					?>
                    </div>
                </div>
                <div class="istoriya-info">
                    <div class="istoriya-info__title">
<?php echo CFS()->get('zagolovka2'); ?>
                    </div>
                    <div class="istoriya-info__text">
						<?php
								$fields = CFS()->get('teksti2');
									if (!empty($fields)):
										foreach ($fields as $field) {
							?>
								<p>
                           			<?php echo $field["text2"] ?>
                        		</p>
							<?php 
								};
								endif; 
        					?>
                    </div>
                </div>
                <div class="istoriya-info">
                    <div class="istoriya-info__title">
<?php echo CFS()->get('zagolovka3'); ?>
                    </div>
                    <div class="istoriya-info__text">
                        <?php
								$fields = CFS()->get('teksti3');
									if (!empty($fields)):
										foreach ($fields as $field) {
							?>
								<p>
                           			<?php echo $field["text3"] ?>
                        		</p>
							<?php 
								};
								endif; 
        					?>
                    </div>
                </div>

            </section> <!-- rukovodstvo-content / -->
        </div>

        <div class="istoriya-photo__bg">
            <img src="<?php echo get_template_directory_uri(); ?>/img/istoriya-stanovleniya1.png" class="istoriya-photo__img" alt="#" />
        </div>
                    
    </main>
<?php get_footer(); ?>