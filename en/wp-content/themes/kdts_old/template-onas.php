<?php
 /*
 * Template name: o-kompanii
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
                <li class="yazyk-active"><a href="<?php echo home_url('/o-kompanii/', 'https') ?>"> Eng </a></li>
                <li><a href="https://kdts.kz/kompaniya-turaly/">Қаз</a></li>
                <li><a href="https://kdts.kz/ru/o-kompanii/">Рус</a></li>
            </ul>
		</div>
    </div>
   <main>
        <div class="container-rukovodstvo">
            <div class="rukovodstvo-top">
                <section class="rukovodstvo-navbar">
                    <a href="<?php echo home_url('/o-kompanii', 'https') ?>" class="rukovodstvo-navbar__title">
                        About company
                    </a>
                    <div class="rukovodstvo-navbar__block">
                        <?php wp_nav_menu ( array (
								'theme_location' => 'okompanii-menu',
								'container' => false,
								'menu_class'      => '', 
							  )) ?>
                    </div>  
                </section>
                <section class="rukovodstvo-content">
                    <h1 class="partnery-title">
                        <?php the_title(); ?>
                    </h1>
                    <div class="years">
                      	 Over  <span class="years-number"> 20 </span> years on the market
                    </div>
                    <div class="onas-operator">
                        <?php the_post(); ?>
						<?php the_content() ?> 
                    </div>
                    <div class="onas-active">
                        <div class="onas-active__left">
                            <span><?php echo CFS()->get('tsifrff'); ?></span>
                            <p class="onas-active__number">
                                <?php echo CFS()->get('text10'); ?>
                            </p>
                        </div>
                        <div class="onas-active__right">
                            <p class="onas-active__text">
                               <?php echo CFS()->get('text11'); ?>
                            </p>
                        </div>
                    </div>  
                </section>
            </div>
        </div>
		<section class="abount-missiya">
			<img src="<?php echo get_template_directory_uri(); ?>/img/map2.png" alt="#" class="abount-missiya__map" />
			<div class="abount-map__container">
				<div class="abount-map__text">
					 <?php echo CFS()->get('tekst1'); ?> 
				</div>
			</div>
			<div class="abount-missiya__container">
				<div class="abount-missiya__block">
					<div class="abount-missiya__left">
						<div class="abount-missiya__p">
							<p class="abount-missiya__title">
								<?php echo CFS()->get('zagolovok1'); ?>
							</p>
							<p class="abount-missiya__text">
								<?php echo CFS()->get('text2'); ?>
							</p>
						</div>
					</div>
					<div class="abount-missiya__right">
						<div class="abount-missiya__p">
							<p class="abount-missiya__title">
								<?php echo CFS()->get('zagolovok2'); ?>
							</p>
							<p class="abount-missiya__text">
								<?php echo CFS()->get('text3'); ?>
							</p>
						</div>
					</div>
				</div>
				<div class="abount-missiya__bottom">
					<p class="abount-missiya__bottom-text">
						<?php echo CFS()->get('text4'); ?>
					</p>
				</div>
			</div>
		</section>
        <section class="abount-predstavitelstva">
			<div class="abount-missiya__container">
				<div class="abount-predstavitelstva__block">
					<div class="abount-predstavitelstva__block-head">
						<img src="<?php echo get_template_directory_uri(); ?>/img/predstavitelstvaYellow.png" alt="#" class="abount-predstavitelstva__icon" /> 
						<p> Representative offices </p> 
					</div>
					<div class="abount-predstavitelstva__block_items">
						
						<?php $predstavitelstva = CFS()->get('predstavitelstva-loop');
							foreach ($predstavitelstva as $predstavitelstv) {
								echo '<div class="abount-predstavitelstva__block-item">
										<div class="abount-predstavitelstva__block-photo">
											<img src="https://work.almazvoda.kz/wp-content/themes/kdts/img/predstavitelstva1.png" alt="#" />
										</div>
										<p class="abount-predstavitelstva__block-title">
											'.$predstavitelstv["predstavitelstva-god"].' <br> '.$predstavitelstv["predstavitelstva-strana"].' <br> '.$predstavitelstv["predstavitelstva-gorod"].'
										</p>
									</div>';
							}
						?>
						
					</div>
				</div> <!-- abount-predstavitelstva__block / -->
				<p class="abount-missiya__bottom-text">
					<?php echo CFS()->get('text8'); ?>
				</p>
				<p class="abount-predstavitelstva__bottom">
					<?php echo CFS()->get('text9'); ?>
				</p>
			</div>
		</section>
	<section class="abount-otnosheniya">
		<div class="abount-missiya__container">
			<div class="abount-missiya__block">
				<div class="abount-missiya__left">
					<div class="abount-missiya__p">
						<p class="abount-missiya__title">
							<?php echo CFS()->get('zagolovok3'); ?>
						</p>
						<p class="abount-missiya__number">
							<?php echo CFS()->get('tsifr1'); ?>
						</p>
						<p class="abount-missiya__textare">
							<?php echo CFS()->get('tekst5'); ?>
						</p>
					</div>
				</div>
				<div class="abount-missiya__right">
					<div class="abount-missiya__p">
						<p class="abount-missiya__title">
							<?php echo CFS()->get('zagolovok4'); ?>
						</p>
						<p class="abount-missiya__number">
							<?php echo CFS()->get('tsifr2'); ?>
						</p>
						<p class="abount-missiya__textare">
							<?php echo CFS()->get('tekst6'); ?>
						</p>
					</div>
				</div>
			</div> <!-- abount-missiya__block / -->

			<div class="abount-otnosheniya__text">
				
				<?php $teksty = CFS()->get('teksty');
				foreach ($teksty as $tekst) {
					echo '<p class="abount-otnosheniya__p">
							'.$tekst["text7"].'
						</p>';
					}
				?>
				
			</div>

			<div class="abount-otnosheniya__text-color">
				<?php echo CFS()->get('textBold1'); ?>
			</div>

		</div>
	</section>
 </main> 

<?php get_footer(); ?>
