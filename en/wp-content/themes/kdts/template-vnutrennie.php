<?php
 /*
 * Template name: vnutrennie-dokumenty
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
					<li class="yazyk-active"><a href="<? echo home_url('/aktsioneram/vnutrennie-dokumenty/', 'https') ?>">Eng</a></li>
					<li><a href="https://www.kdts.kz/aktsionerlerge/ishki-zhattar/">Қаз</a></li>
					<li><a href="https://www.kdts.kz/ru/aktsioneram/vnutrennie-dokumenty/">Рус</a></li>
				</ul>
			</div>
    	</div>
	   <main class="container-rukovodstvo">
       		<section class="rukovodstvo-navbar">
                    <div class="rukovodstvo-navbar__top">
                        <a href="<? echo home_url('/aktsioneram', 'https') ?>" class="rukovodstvo-navbar__title">
                            Shareholders
                        </a>
                        <div class="rukovodstvo-navbar__block">
							<?php wp_nav_menu ( array (
								'theme_location' => 'aktsioneram-menu',
								'container' => false,
								'menu_class'      => '', 
							  )) ?>
						</div>
                    </div>
                    <div class="rukovodstvo-navbar__bottom">
                        <div class="rukovodstvo-navber__baner">
                            
                        </div>
                    </div>
                </section> <!-- rukovodstvo-navbar / -->
                <section class="rukovodstvo-content">
                    <h1 class="partnery-title">
                        <?php the_title(); ?>
                    </h1>

                    <div class="vnutrennie-items">			
						<? $dokumentyi = CFS()->get('vnutrennie-dokumenty');
							foreach ($dokumentyi as $dokumenty) {
								echo '
								 <div class="vnutrennie-item">
									<a href="'.$dokumenty["dokumenty"].'" download>
										<div class="vnutrennie-item__photo">
											<img src="https://work.almazvoda.kz/wp-content/themes/kdts/img/tipovye-dogovora__icon.png" alt="#" class="vnutrennie-item__img" />
										</div>
										<div class="vnutrennie-item__text">
											'.$dokumenty["tekst"].'
										</div>
									</a>
								</div>
								';
							 }
						?>
                    </div> <!-- vnutrennie-items / -->
                </section> <!-- rukovodstvo-content / -->
       
    </main>
<?php get_footer(); ?>