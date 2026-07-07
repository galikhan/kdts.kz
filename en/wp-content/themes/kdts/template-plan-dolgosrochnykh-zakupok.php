<?php
 /*
 * Template name: plan-dolgosrochnykh-zakupok
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
                <li class="yazyk-active"><a href="<? echo home_url('/zakupki/plan-dolgosrochnykh-zakupok/', 'https') ?>">Eng</a></li>
                <li><a href="https://www.kdts.kz/satyp-alul/uzak-merzimdi-satyp-alu-zhospary/">Қаз</a></li>
                <li><a href="https://www.kdts.kz/ru/zakupki/plan-dolgosrochnykh-zakupok/">Рус</a></li>
            </ul>
		</div>
    </div>
	<main class="container-rukovodstvo">
		<section class="zakupki-navbar">
          	<?php include "zakup-menu.php" ?>
        </section> <!-- rukovodstvo-navbar / -->
        <section class="zakupki-content">
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