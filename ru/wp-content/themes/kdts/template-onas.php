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
                <li class="yazyk-active"><a href="<?php echo home_url('/o-kompanii/', 'https') ?>"> Рус</a></li>
                <li><a href="https://www.kdts.kz/kompaniya-turaly/">Қаз</a></li>
                <li><a href="https://www.kdts.kz/en/o-kompanii/">Eng</a></li>
            </ul>
		</div>
    </div>
   <main>
        <div class="container-rukovodstvo">
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
                </section>
                <section class="rukovodstvo-content">
                    <h1 class="partnery-title">
                        <?php the_title(); ?>
                    </h1>
                    <div class="years">
                      	 Наша компания более<span class="years-number"> 25 </span>лет на рынке 
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
			<div class="abount-missiya__container" style="margin-top:300px">
				<div class="abount-missiya__block">
					<div class="aktsioneram-text" style="text-indent: 0px;">
					
						
						<p class="abount-otnosheniya__p"><strong> Наша миссия: </strong></p>
												<p class="abount-otnosheniya__p">«Как системообразующая транспортная компания Казахстана, мы удовлетворяем потребности национальной экономики и общества в управлении терминальной инфраструктуры».</p>
						<!-- <img src="https://www.kdts.kz/ru/wp-content/uploads/2024/05/GS3A1618-1-1.jpg" width="100%" > -->
												<p class="abount-otnosheniya__p"> <strong> Наше видение: </strong> </p>
												<p class="abount-otnosheniya__p">
Мы ведущая компания, предоставляющая услуги терминальной инфраструктуры, которые основаны на принципах экономической эффективности, безопасности, социальной и экологической ответственности. 
</p>
												<p class="abount-otnosheniya__p">Стратегическая цель – «Увеличение капитализации за счет роста масштабов бизнеса и увеличения эффективности деятельности».
</p>
												<p class="abount-otnosheniya__p"> <strong> Наши стратегические цели: </strong> </p>
												<p class="abount-otnosheniya__p">1)	повышение эффективности управления терминальной инфраструктурой;</p>
												<p class="abount-otnosheniya__p">2)	содействие развитию транзитных перевозок;</p>
												<p class="abount-otnosheniya__p">3)	повышение удовлетворенности клиентов;</p>
																		<p class="abount-otnosheniya__p">4)	цифровизация;</p>
																		<p class="abount-otnosheniya__p">5)	внедрение принципов ESG;</p>
																		<p class="abount-otnosheniya__p">6)	гарантирование безопасности производственной деятельности.</p>
						<br><br>
						<!--<div class="container" style="display: flex; background:#e4e4e4; border-radius: 5px;">
							<div class="certificate" >
						  	<a href="https://www.kdts.kz/ru/wp-content/uploads/2024/11/Sertifikat-ISO-9001-RUSyaz.pdf"><img src="https://www.kdts.kz/ru/wp-content/uploads/2024/11/9001rus.png" alt="Сертификат" style="width:250%; max-width:none;"></a>
							</div>
							<div class="text" style="padding:10px 15px 15px 131px;">
						  <p style="font-size:20px;">Мы нацелены постоянно развивать наши услуги и при оказании услуг соответствовать высоким стандартам в области качества, экологии, охраны здоровья и обеспечения безопасности труда.</p>
								<p style="font-size:20px;">В 2021 году по результатам сертификационного аудита Компания подтвердила соответствие систем управления (системы менеджмента качества (СМК), системы менеджмента охраны окружающей среды (СМОС), системы менеджмента охраны здоровья и обеспечения безопасности труда (СМОЗиБТ) требованиям международных стандартов.</p>
								<p style="font-size:20px;">В 2024 году Компания в очередной успешно прошла наблюдательный аудит, проведенный ТОО TÜV Rheinland Kazakhstan, являющимся эксклюзивным представителем TÜV Rheinland в странах Евразийского экономического союза. По результатам аудита подтверждено соответствие интегрированной системы управления Компании требованиям международных стандартов ISO 9001:2015, ISO 14001:2015, ISO 45001:2018. Результативность систем управления проверяется внешними аудиторами ежегодно в обязательном порядке в центральном аппарате и выборочно на одной из производственных площадок Компании.</p>
							</div>
					  	</div>
						<hr>
						<div class="container" style="display: flex; background:#e4e4e4; border-radius: 5px;">
							<div class="certificate" >
						  	<a href="https://www.kdts.kz/ru/wp-content/uploads/2024/11/Sertifikat-ISO-14001-RUSyaz.pdf"><img src="https://www.kdts.kz/ru/wp-content/uploads/2024/11/14001rus.png" alt="Сертификат" style="width:250%; max-width:none;"></a>
							</div>
							<div class="text" style="padding:10px 15px 15px 131px;">
						  <p style="font-size:20px;">Мы нацелены постоянно развивать наши услуги и при оказании услуг соответствовать высоким стандартам в области качества, экологии, охраны здоровья и обеспечения безопасности труда.</p>
								<p style="font-size:20px;">В 2021 году по результатам сертификационного аудита Компания подтвердила соответствие систем управления (системы менеджмента качества (СМК), системы менеджмента охраны окружающей среды (СМОС), системы менеджмента охраны здоровья и обеспечения безопасности труда (СМОЗиБТ) требованиям международных стандартов.</p>
								<p style="font-size:20px;">В 2024 году Компания в очередной успешно прошла наблюдательный аудит, проведенный ТОО TÜV Rheinland Kazakhstan, являющимся эксклюзивным представителем TÜV Rheinland в странах Евразийского экономического союза. По результатам аудита подтверждено соответствие интегрированной системы управления Компании требованиям международных стандартов ISO 9001:2015, ISO 14001:2015, ISO 45001:2018. Результативность систем управления проверяется внешними аудиторами ежегодно в обязательном порядке в центральном аппарате и выборочно на одной из производственных площадок Компании.</p>
							</div>
					  	</div>-->
						<hr>
						<div class="container" style="display: flex; background:#e4e4e4; border-radius: 5px;">
							<div class="certificate" >
							<a href="https://www.kdts.kz/ru/wp-content/uploads/2024/11/Sertifikat-ISO-9001-RUSyaz.pdf"><img src="https://www.kdts.kz/ru/wp-content/uploads/2024/11/9001rus.png" alt="Сертификат" style="width:280%; max-width:none;"></a><br>
							<a href="https://www.kdts.kz/ru/wp-content/uploads/2024/11/Sertifikat-ISO-14001-RUSyaz.pdf"><img src="https://www.kdts.kz/ru/wp-content/uploads/2024/11/14001rus.png" alt="Сертификат" style="width:280%; max-width:none;"></a><br>
						  	<a href="https://www.kdts.kz/ru/wp-content/uploads/2024/11/Sertifikat-ISO-45001-RUSyaz.pdf"><img src="https://www.kdts.kz/ru/wp-content/uploads/2024/11/45001rus.png" alt="Сертификат" style="width:280%; max-width:none;"></a>
							</div>
							<div class="text" style="padding:10px 15px 15px 131px;">
						  <p style="font-size:20px;">Мы нацелены постоянно развивать наши услуги и при оказании услуг соответствовать высоким стандартам в области качества, экологии, охраны здоровья и обеспечения безопасности труда.</p>
								<p style="font-size:20px; padding-top:210px;">В 2021 году по результатам сертификационного аудита Компания подтвердила соответствие систем управления (системы менеджмента качества (СМК), системы менеджмента охраны окружающей среды (СМОС), системы менеджмента охраны здоровья и обеспечения безопасности труда (СМОЗиБТ) требованиям международных стандартов.</p>
								<p style="font-size:20px; padding-top:150px;">В 2024 году Компания в очередной успешно прошла наблюдательный аудит, проведенный ТОО TÜV Rheinland Kazakhstan, являющимся эксклюзивным представителем TÜV Rheinland в странах Евразийского экономического союза. По результатам аудита подтверждено соответствие интегрированной системы управления Компании требованиям международных стандартов ISO 9001:2015, ISO 14001:2015, ISO 45001:2018. Результативность систем управления проверяется внешними аудиторами ежегодно в обязательном порядке в центральном аппарате и выборочно на одной из производственных площадок Компании.</p>
							</div>
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
