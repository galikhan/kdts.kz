<?php
 /*
 * Template name: filialy-i-predstavitelstv
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
                <li class="yazyk-active"><a href="<?php echo home_url('/o-kompanii/filialy-i-predstavitelstv/', 'https') ?>"> Рус</a></li>
                <li><a href="https://kdts.kz/kompaniya-turaly/filialdar-zh-ne-kildikter/">Қаз</a></li>
                <li><a href="https://kdts.kz/en/o-kompanii/filialy-i-predstavitelstv/">Eng</a></li>
            </ul>
		</div>
    </div>
	 <main>
        <div class="filialy-container">
            <div class="rukovodstvo-top">
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
                        <?php the_title(); ?>
                    </h1>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Untitled-47897erer.png" class="filMap" alt="#" />
                </section> <!-- rukovodstvo-content / -->
            </div>
        </div>
        <section class="filialy">
            <div class="dell-container">
                <div class="filialy-items">
                    <div class="filialy-item">
                        <p class="filialy-item__title">
                            <?php echo CFS()->get('text1'); ?>
                        </p>
                        <div class="filialy-item__info">
                                <div class="filialy-item__inner">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/filialyAddress.svg" class="filialy-item__icon" alt="#" />
                                    <p class="filialy-item__p">
                            			<?php echo CFS()->get('text2'); ?>
                                    </p>
                                </div>
                                <div class="filialy-item__inner">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/filialyTel.svg" class="filialy-item__icon" alt="#" />
                                    <p class="filialy-item__p">
                                      	<?php echo CFS()->get('text3'); ?> <br /> 
                            			<?php echo CFS()->get('text4'); ?>
                                    </p>
                                </div>
                                <div class="filialy-item__inner">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/filialyEmail.svg" class="filialy-item__icon" alt="#" />
                                    <p class="filialy-item__p">
                                        <?php echo CFS()->get('email1'); ?> 
                                    </p>
                                </div>                            
                        </div>
                    </div> <!-- filialy-item / -->
                    <div class="filialy-item filialy-item__rigth">
                        <p class="filialy-item__title">
                            <?php echo CFS()->get('text5'); ?>
                        </p>
                        <div class="filialy-item__info">
                                <div class="filialy-item__inner">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/filialyAddress.svg" class="filialy-item__icon" alt="#" />
                                    <p class="filialy-item__p">
                                       <?php echo CFS()->get('text6'); ?>
                                    </p>
                                </div>
                                <div class="filialy-item__inner">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/filialyTel.svg" class="filialy-item__icon" alt="#" />
                                    <p class="filialy-item__p">
                                      	<?php echo CFS()->get('text7'); ?> <br /> 
                            			<?php echo CFS()->get('text8'); ?>
                                    </p>
                                </div>
							 <div class="filialy-item__inner">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/filialyEmail.svg" class="filialy-item__icon" alt="#" />
                                    <p class="filialy-item__p">
                                        <?php echo CFS()->get('email2'); ?> 
                                    </p>
                                </div> 
                        </div>
                    </div>  <!-- filialy-item / -->
                    <div class="filialy-item">
                        <p class="filialy-item__title">
                            <?php echo CFS()->get('text9'); ?>
                        </p>
                        <div class="filialy-item__info">
                            <div class="filialy-item__inner">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/filialyAddress.svg" class="filialy-item__icon" alt="#" />
                                <p class="filialy-item__p">
                                    <?php echo CFS()->get('text10'); ?> 
                                </p>
                            </div>
                            <div class="filialy-item__inner">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/filialyTel.svg" class="filialy-item__icon" alt="#" />
                                <p class="filialy-item__p">
                                      	<?php echo CFS()->get('text11'); ?> <br /> 
                            			<?php echo CFS()->get('text12'); ?>
                                    </p>
                            </div>
                            <div class="filialy-item__inner">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/filialyEmail.svg" class="filialy-item__icon" alt="#" />
                                <p class="filialy-item__p">                                        
                                    <?php echo CFS()->get('email3'); ?>
                                </p>
                            </div>
                        </div>
                    </div> <!-- filialy-item / -->
                    <div class="filialy-item filialy-item__rigth">
                        <p class="filialy-item__title">
                           <?php echo CFS()->get('text13'); ?>
                        </p>
                        <div class="filialy-item__info">
                            <div class="filialy-item__inner">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/filialyAddress.svg" class="filialy-item__icon" alt="#" />
                                <p class="filialy-item__p">
                                    <?php echo CFS()->get('text14'); ?>
                                </p>
                            </div>   
							
						
                            <div class="filialy-item__inner">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/filialyTel.svg" class="filialy-item__icon" alt="#" />
                                <p class="filialy-item__p">
									 <?php
										$fields = CFS()->get('loop-tel4');
											if (!empty($fields)):
												foreach ($fields as $field) {
									?>
										 <?php echo $field["nomer4"] ?> <br /> 
									<?php 
										};
										endif; 
									?>
                                </p>
							</div>
                            <div class="filialy-item__inner">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/filialyEmail.svg" class="filialy-item__icon" alt="#" />
                                <p class="filialy-item__p">
                                    <?php echo CFS()->get('email4'); ?>
                                </p>
                            </div>
                        </div>
                    </div>  <!-- filialy-item / -->
                    <div class="filialy-item">
                        <p class="filialy-item__title">
                            <?php echo CFS()->get('text17'); ?>
                        </p>
                        <div class="filialy-item__info">
                            <div class="filialy-item__inner">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/filialyAddress.svg" class="filialy-item__icon" alt="#" />
                                <p class="filialy-item__p">
                                    <?php echo CFS()->get('text18'); ?>
                                </p>
                            </div> 
                            <div class="filialy-item__inner">
                            	<img src="<?php echo get_template_directory_uri(); ?>/img/filialyTel.svg" class="filialy-item__icon" alt="#" />
                                <p class="filialy-item__p">
										 <?php
											$fields = CFS()->get('loop-tel5');
												if (!empty($fields)):
													foreach ($fields as $field) {
										?>
											 <?php echo $field["nomer5"] ?> <br /> 
										<?php 
											};
											endif; 
										?>
                               	</p>
                            </div>
                            <div class="filialy-item__inner">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/filialyEmail.svg" class="filialy-item__icon" alt="#" />
                                <p class="filialy-item__p">
                                    <?php echo CFS()->get('email5'); ?>
                                </p>
                            </div>
                        </div>
                    </div>  <!-- filialy-item / -->
                    <div class="filialy-item filialy-item__rigth">
                        <p class="filialy-item__title">
                            <?php echo CFS()->get('text21'); ?>
                        </p>
                        <div class="filialy-item__info">
                            <div class="filialy-item__inner">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/filialyAddress.svg" class="filialy-item__icon" alt="#" />
                                <p class="filialy-item__p">
                                    <?php echo CFS()->get('text22'); ?>
                                </p>
                            </div> 
                            <div class="filialy-item__inner">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/filialyTel.svg" class="filialy-item__icon" alt="#" />
                                <p class="filialy-item__p">
                                      	<?php echo CFS()->get('text23'); ?> <br /> 
                            			<?php echo CFS()->get('text24'); ?>
                                    </p>
                            </div>
                            <div class="filialy-item__inner">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/filialyEmail.svg" class="filialy-item__icon" alt="#" />
                                <p class="filialy-item__p">
                                    <?php echo CFS()->get('email6'); ?>
                                </p>
                            </div>
                        </div>
                    </div>  <!-- filialy-item / -->

                    <div class="filialy-item">
                        <p class="filialy-item__title">
                            <?php echo CFS()->get('text25'); ?>
                        </p>
                        <div class="filialy-item__info">
                            <div class="filialy-item__inner">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/filialyAddress.svg" class="filialy-item__icon" alt="#" />
                                <p class="filialy-item__p">
                                    <?php echo CFS()->get('text26'); ?>
                                </p>
                            </div>                        
                            <div class="filialy-item__inner">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/filialyTel.svg" class="filialy-item__icon" alt="#" />
                                <p class="filialy-item__p">
                                      	<?php echo CFS()->get('text27'); ?> <br /> 
                            			<?php echo CFS()->get('text28'); ?>
                                </p>
                            </div>
                            <div class="filialy-item__inner">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/filialyEmail.svg" class="filialy-item__icon" alt="#" />
                                <p class="filialy-item__p">
                                    <?php echo CFS()->get('email7'); ?>
                                </p>
                            </div>
                        </div>
                    </div>  <!-- filialy-item / -->

                    <div class="filialy-item filialy-item__rigth">
                        <p class="filialy-item__title">
                           <?php echo CFS()->get('text29'); ?>
                        </p>
                        <div class="filialy-item__info">
                            <div class="filialy-item__inner">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/filialyAddress.svg" class="filialy-item__icon" alt="#" />
                                <p class="filialy-item__p">
                                    <?php echo CFS()->get('text30'); ?>
                                </p>
                            </div>                  
                            <div class="filialy-item__inner">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/filialyTel.svg" class="filialy-item__icon" alt="#" />
                                <p class="filialy-item__p">
                                      	<?php echo CFS()->get('text31'); ?> <br /> 
                            			<?php echo CFS()->get('text32'); ?>
                                    </p>
                            </div>
                            <div class="filialy-item__inner">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/filialyEmail.svg" class="filialy-item__icon" alt="#" />
                                <p class="filialy-item__p">
                                    <?php echo CFS()->get('email8'); ?>
                                </p>
                            </div>                  
                        </div>
                    </div>  <!-- filialy-item / -->
                    <div class="filialy-item">
                        <p class="filialy-item__title">
                            <?php echo CFS()->get('text33'); ?>
                        </p>
                        <div class="filialy-item__info">
                            <div class="filialy-item__inner">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/filialyAddress.svg" class="filialy-item__icon" alt="#" />
                                <p class="filialy-item__p">
                                    <?php echo CFS()->get('text34'); ?>
                                </p>
                            </div>                        
                            <div class="filialy-item__inner">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/filialyTel.svg" class="filialy-item__icon" alt="#" />
                                <p class="filialy-item__p">
                                      	<?php echo CFS()->get('text35'); ?> <br /> 
                            			<?php echo CFS()->get('text36'); ?>
                                    </p>
                            </div>
                            <div class="filialy-item__inner">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/filialyEmail.svg" class="filialy-item__icon" alt="#" />
                                <p class="filialy-item__p">
                                    <?php echo CFS()->get('email9'); ?>
                                </p>
                            </div>            
                        </div>
                    </div>  <!-- filialy-item / -->
                    <div class="filialy-item filialy-item__rigth">
                        <p class="filialy-item__title">
                            <?php echo CFS()->get('text37'); ?>
                        </p>
                        <div class="filialy-item__info">
                            <div class="filialy-item__inner">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/filialyAddress.svg" class="filialy-item__icon" alt="#" />
                                <p class="filialy-item__p">
                                   <?php echo CFS()->get('text40'); ?>
                                </p>
                            </div>                        
                            <div class="filialy-item__inner">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/filialyTel.svg" class="filialy-item__icon" alt="#" />
                                <p class="filialy-item__p">
                                      	<?php echo CFS()->get('text38'); ?> <br /> 
                            			<?php echo CFS()->get('text39'); ?>
                                    </p>
                            </div>
                            <div class="filialy-item__inner">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/filialyEmail.svg" class="filialy-item__icon" alt="#" />
                                <p class="filialy-item__p">
                                   <?php echo CFS()->get('email10'); ?>
                                </p>
                            </div>
                        </div>
                    </div>  <!-- filialy-item / -->
                    <div class="filialy-item">
                        <p class="filialy-item__title">
                            <?php echo CFS()->get('text41'); ?>
                        </p>
                        <div class="filialy-item__info">
                            <div class="filialy-item__inner">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/filialyAddress.svg" class="filialy-item__icon" alt="#" />
                                <p class="filialy-item__p">
                                    <?php echo CFS()->get('text42'); ?>
                                </p>
                            </div>                        
                            <div class="filialy-item__inner">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/filialyTel.svg" class="filialy-item__icon" alt="#" />
                                <p class="filialy-item__p">
                                      	<?php echo CFS()->get('text43'); ?> <br /> 
                            			<?php echo CFS()->get('text44'); ?>
                                    </p>
                            </div>
                            <div class="filialy-item__inner">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/filialyEmail.svg" class="filialy-item__icon" alt="#" />
                                <p class="filialy-item__p">
                                    <?php echo CFS()->get('email11'); ?>
                                </p>
                            </div>
                        </div>
                    </div>  <!-- filialy-item / -->
                    <div class="filialy-item filialy-item__rigth">
                        <p class="filialy-item__title">
                            <?php echo CFS()->get('text45'); ?>
                        </p>
                        <div class="filialy-item__info">
                            <div class="filialy-item__inner">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/filialyAddress.svg" class="filialy-item__icon" alt="#" />
                                <p class="filialy-item__p">
                                    <?php echo CFS()->get('text46'); ?>
                                </p>
                            </div>                        
                            <div class="filialy-item__inner">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/filialyTel.svg" class="filialy-item__icon" alt="#" />
                                <p class="filialy-item__p">
                                      	<?php echo CFS()->get('text47'); ?> <br /> 
                            			<?php echo CFS()->get('text48'); ?>
                                    </p>
                            </div>
                            <div class="filialy-item__inner">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/filialyEmail.svg" class="filialy-item__icon" alt="#" />
                                <p class="filialy-item__p">
                                    <?php echo CFS()->get('email12'); ?>
                                </p>
                            </div>
                        </div>
                    </div>  <!-- filialy-item / -->
                    <div class="filialy-item">
                        <p class="filialy-item__title">
                            <?php echo CFS()->get('text49'); ?>
                        </p>
                        <div class="filialy-item__info">
                            <div class="filialy-item__inner">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/filialyAddress.svg" class="filialy-item__icon" alt="#" />
                                <p class="filialy-item__p">
                                    <?php echo CFS()->get('text50'); ?>
                                </p>
                            </div>                        
                            <div class="filialy-item__inner">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/filialyTel.svg" class="filialy-item__icon" alt="#" />
                                <p class="filialy-item__p">
                                      	<?php echo CFS()->get('text51'); ?> <br /> 
                            			<?php echo CFS()->get('text52'); ?>
                                    </p>
                            </div>
                            <div class="filialy-item__inner">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/filialyEmail.svg" class="filialy-item__icon" alt="#" />
                                <p class="filialy-item__p">
                                    <?php echo CFS()->get('email13'); ?>
                                </p>
                            </div>
                        </div>
                    </div>  <!-- filialy-item / -->
                    <div class="filialy-item filialy-item__rigth">
                        <p class="filialy-item__title">
                            <?php echo CFS()->get('text53'); ?>
                        </p>
                        <div class="filialy-item__info">
                            <div class="filialy-item__inner">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/filialyAddress.svg" class="filialy-item__icon" alt="#" />
                                <p class="filialy-item__p">
                                    <?php echo CFS()->get('text54'); ?>
                                </p>
                            </div>                        
                            <div class="filialy-item__inner">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/filialyTel.svg" class="filialy-item__icon" alt="#" />
                                <p class="filialy-item__p">
                                      	<?php echo CFS()->get('text55'); ?> <br /> 
                            			<?php echo CFS()->get('text56'); ?>
                                    </p>
                            </div>
							 <div class="filialy-item__inner">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/filialyEmail.svg" class="filialy-item__icon" alt="#" />
                                <p class="filialy-item__p">
                                    <?php echo CFS()->get('email14'); ?>
                                </p>
                            </div>
                        </div>
                    </div>  <!-- filialy-item / -->
                    <div class="filialy-item">
                        <p class="filialy-item__title">
                            <?php echo CFS()->get('text57'); ?>
                        </p>
                        <div class="filialy-item__info">
                            <div class="filialy-item__inner">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/filialyAddress.svg" class="filialy-item__icon" alt="#" />
                                <p class="filialy-item__p">
                                   <?php echo CFS()->get('text58'); ?>
                                </p>
                            </div>                        
                            <div class="filialy-item__inner">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/filialyTel.svg" class="filialy-item__icon" alt="#" />
                                <p class="filialy-item__p">
                                      	<?php echo CFS()->get('text59'); ?> <br /> 
                            			<?php echo CFS()->get('text60'); ?>
                                    </p>
                            </div>
							 <div class="filialy-item__inner">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/filialyEmail.svg" class="filialy-item__icon" alt="#" />
                                    <p class="filialy-item__p">
                                        <?php echo CFS()->get('email15'); ?> 
                                    </p>
                                </div> 
                        </div>
                    </div>  <!-- filialy-item / -->
                  <div class="filialy-item filialy-item__rigth">
                      <!--    <p class="filialy-item__title">
                            <?php echo CFS()->get('text61'); ?>
                        </p>
                        <div class="filialy-item__info">
                            <div class="filialy-item__inner">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/filialyAddress.svg" class="filialy-item__icon" alt="#" />
                                <p class="filialy-item__p">
                                    <?php echo CFS()->get('text62'); ?>
                                </p>
                            </div> 
                            <div class="filialy-item__inner">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/filialyTel.svg" class="filialy-item__icon" alt="#" />
                                <p class="filialy-item__p">
                                      	<?php echo CFS()->get('text63'); ?> <br /> 
                            			<?php echo CFS()->get('text64'); ?>
                                    </p>
                            </div>
                            <div class="filialy-item__inner">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/filialyEmail.svg" class="filialy-item__icon" alt="#" />
                                <p class="filialy-item__p">
                                    <?php echo CFS()->get('email16'); ?>
                                </p>
                            </div>
                        </div> -->
                    </div>  <!-- filialy-item / -->
                </div>
            </div>
        </section>
       
    </main>
 
<?php get_footer(); ?>