<?php
 /*
 * Template name: godovoy-plan-zakupok
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
                <li class="yazyk-active"><a href="<? echo home_url('/zakupki/godovoy-plan-zakupok/', 'https') ?>"> Рус</a></li>
                <li><a href="https://www.kdts.kz/satyp-alul/zhyldyk-satyp-alu-zhospary/">Қаз</a></li>
                <li><a href="https://www.kdts.kz/en/zakupki/godovoy-plan-zakupok/">Eng</a></li>
            </ul>
		</div>
    </div>
	<main class="container-rukovodstvo">
		<section class="zakupki-navbar">
          	<?php include "zakup-menu.php" ?>
        </section> <!-- rukovodstvo-navbar / -->
                <section class="rukovodstvo-content">
                <h1 class="partnery-title">
                    <?php the_title(); ?>
                </h1>
               <div class="rukovodstvo-wrapper">
                    <div class="swiper-container gallery-otchetnost1">
                        <div class="swiper-wrapper">
							<?php
								$fields = CFS()->get('blok');
									if (!empty($fields)):
										foreach ($fields as $field) {
							?>
								<div class="swiper-slide">
									<div class="swiper-slide__godovaya">
										<p class="swiper-slide__godovaya-text"> <? echo $field["god"] ?> </p>
									</div> 
								</div>
							<?php 
								};
								endif; 
        					?>

                        </div>
               		</div> <!-- gallery-otchetnost1 / -->
                        <div class="godovaya-next">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/ArrowNext.png" class="godovaya-next__icon" alt="#" />
                        </div>
                        <div class="godovaya-prev">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/ArrowPrev.png" class="godovaya-next__icon" alt="#" />
                        </div>
                </div> <!-- rukovodstvo-wrapper / -->
				
 				<div class="swiper-container gallery-otchetnost2">
                    <div class="swiper-wrapper"  style="height: auto;">
                      	<?php
							$fields = CFS()->get('blok');
								if (!empty($fields)):
									foreach ($fields as $field) {
						?>
						
						<div class="swiper-slide"> 
                            <div class="godovaya-items">
								<?php
									$images = $field['kontent'];
									foreach ($images as $img) {
								?>
								<!---------------------->
                                <div class="godovaya-item">
									<a href="<? echo $img["dokument"] ?>" download>
										<div class="godovaya-item__photo">
											<img src="<?php echo get_template_directory_uri(); ?>/img/tipovye-dogovora__icon.png" alt="#"/>
										</div>
										<div class="godovaya-item__text">
											<? echo $img["tekst"] ?>
										</div>
									</a>
                                </div><br> <!-- godovaya-item / -->
                               <!-------------------->
								<?php }; ?>
							</div> 
							<!-- godovaya-items / -->
                        </div>
						<!-- swiper-slide / -->
					<?php 
						};
					endif; 
					?> 
                    </div>
						<br><h3 class="partnery-title">Обьявление</h3>
							<a href="#">   

АО «Кедентранссервис» (010000, г.Астана ул. Достык, 18, кабинет 1414)
объявляет о проведении закупок услуги по аудиту финансовой отчетности за
2025-2029 гг., согласно Приложения №13 к Порядку осуществления закупок
акционерным обществом «Фонд национального благосостояния «Самрук-
Қазына» и юридическими лицами, пятьдесят и более процентов голосующих
акций (долей участия) которых прямо или косвенно принадлежат АО «Самрук-
Қазына» на праве собственности или доверительного управления от 2 сентября
2024 г. (протокол №240).
Планируемая стоимость услуги по проведению аудита финансовой
отчетности за 2025, 2026, 2027, 2028 гг. без учета НДС 315 300 000 тенге.
Коммерческие предложения необходимо направить на электронный
адрес: moldakulova.s@kdts.kz
Окончательный срок представления коммерческих предложений -
до 10:00 часов «16» февраля 2025 г.
Дополнительную информацию можно получить по телефонам:
8 (7172) 64-88-88 (вн.9037), +7 701 110 3373</a><br><a style="color:blue;" href="https://www.kdts.kz/ru/wp-content/uploads/2025/02/ZAPROS-na-uchastie-v-protsedure-vybora-audit-org-izm.docx">(Скачать)</a>  <!-- swiper-wrapper / -->
                </div> <!-- gallery-otchetnost2 / -->
        </section> 
		<!-- rukovodstvo-content / -->    
	</main>
<?php get_footer(); ?>