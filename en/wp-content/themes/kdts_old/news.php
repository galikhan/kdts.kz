		<div class="news">
			<div class="news-container">
				<div class="title">
					<img src="<?php echo get_template_directory_uri(); ?>/img/uslugiPP.svg" alt="#" class="title-icon"/> News
				</div>
				<div class="news-bottom">
					<img src="<?php echo get_template_directory_uri(); ?>/img/news-bottom.png" class="news-bottom__img"/>
				</div>	
							<div class="news-items">
									<?php
										$args = array('post_type' => 'novosti', 'posts_per_page' => 100);
											$loop = new WP_Query($args);
												while ($loop->have_posts()) : $loop->the_post(); ?>

												
														<div class="news-item">
															<a href="<?php the_permalink(); ?>">

															<div class="news-item__head">
																<p class="news-index__date"><?php echo get_the_date(); ?></p>
																<p class="news-item__title"> <?php the_title(); ?> </p>

															</div>

															<?php the_post_thumbnail() ?>
															</a>
														</div>
												
									<?php endwhile; ?>
							</div>

			</div>
			<div class="language">
				<div class="language-block">
					<div class="language-line">

					</div>
					<?php wp_nav_menu ( array (
						'theme_location' => 'yazyk-menu',
						'container' => false,
						'menu_class'      => 'language-list', 
					)) ?>
					<div class="language-icon">
														<a href="https://www.facebook.com/Kedentransservice.kz" target="_blank">

						<img src="<?php echo get_template_directory_uri(); ?>/img/iconFacebook.svg" class="language-img" alt="#" />
						</a>
					</div>
				</div>
			</div>
		</div>