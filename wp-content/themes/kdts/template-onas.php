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
                <li class="yazyk-active"><a href="<?php echo home_url('/kompaniya-turaly', 'https') ?>">Қаз</a></li>
                <li><a href="<?php echo home_url('ru/o-kompanii/', 'https') ?>">Рус</a></li>
                <li><a href="<?php echo home_url('en/o-kompanii/', 'https') ?>">Eng</a></li>
            </ul>
		</div>
    </div>
    <main>
        <div class="container-rukovodstvo">
            <div class="rukovodstvo-top">
                <section class="rukovodstvo-navbar">
                    <a href="<?php echo home_url('/kompaniya-turaly', 'https') ?>" class="rukovodstvo-navbar__title">
                        КОМПАНИЯ ТУРАЛЫ
                    </a>
                    <div class="rukovodstvo-navbar__block">
                        <?php wp_nav_menu ( array (
								'theme_location' => 'okompanii-menu',
								'container' => false,
								'menu_class'      => '', 
							  )) ?>
                    </div>  
                </section>
                <section class="rukovodstvo-content" style="width: auto;">
                    <h1 class="partnery-title">
                        <?php the_title(); ?>
                    </h1>
                    <div class="years">		
						Нарықта <span class="years-number"> 25 </span> жылдан астам
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
			<img src="<?php echo get_template_directory_uri(); ?>/img/map2.png" alt="#" class="abount-missiya__map" style="position: absolute; z-index: 5; /* max-width: 100%; */ margin-letf:111px;"/>
			<div class="abount-map__container">
				<div class="abount-map__text">
					 <?php echo CFS()->get('tekst1'); ?> 
				</div>
			</div>
			<div class="abount-missiya__container" style="margin-top:300px">
				<div class="abount-missiya__block">
					<div class="aktsioneram-text" style="text-indent: 0px;">
					
						
						<p class="abount-otnosheniya__p"><strong> Біздің мақсат: </strong></p>
												<p class="abount-otnosheniya__p">«Қазақстанның жүйе құраушы көлік компаниясы ретінде біз Ұлттық экономика мен қоғамның терминалдық инфрақұрылымды басқарудағы қажеттіліктерін қанағаттандырамыз».</p>
						<!-- <img src="https://www.kdts.kz/ru/wp-content/uploads/2024/05/GS3A1618-1-1.jpg" width="100%" >-->
												<p class="abount-otnosheniya__p"> <strong> Біздің көз-қарас: </strong> </p>
												<p class="abount-otnosheniya__p">
Біз экономикалық тиімділік, қауіпсіздік, Әлеуметтік және экологиялық жауапкершілік қағидаттарына негізделген терминалдық инфрақұрылым қызметтерін ұсынатын жетекші компаниямыз. 
</p>
												<p class="abount-otnosheniya__p">Стратегиялық мақсат – «Бизнес ауқымын ұлғайту және қызмет тиімділігін арттыру есебінен капиталдандыруды ұлғайту».
</p>
												<p class="abount-otnosheniya__p"> <strong> Біздің стратегиялық мақсат: </strong> </p>
												<p class="abount-otnosheniya__p">1)	терминалдық инфрақұрылымды басқару тиімділігін арттыру;</p>
												<p class="abount-otnosheniya__p">2)	транзиттік тасымалдарды дамытуға жәрдемдесу;</p>
												<p class="abount-otnosheniya__p">3)	клиенттердің қанағаттануын арттыру;</p>
																		<p class="abount-otnosheniya__p">4)	цифрландыру;</p>
																		<p class="abount-otnosheniya__p">5)	ESG принциптерін енгізу;</p>
																		<p class="abount-otnosheniya__p">6)	өндірістік қызметтің қауіпсіздігіне кепілдік беру.</p>
						<br><br>
						<!--<div class="container" style="display: flex; background:#e4e4e4; border-radius: 5px;">
							<div class="certificate" >
						  	<a href="https://www.kdts.kz/wp-content/uploads/2024/11/Sertifikat-ISO-9001-KAZyaz.pdf"><img src="https://www.kdts.kz/wp-content/uploads/2024/11/9001kaz.png" alt="Сертификат" style="width:250%; max-width:none;"></a>
							</div>
							<div class="text" style="padding:10px 15px 15px 131px;">
						 		<p style="font-size:20px;">Біз қызметтерімізді ұдайы дамытуға және қызмет көрсету барысында сапа, экология, денсаулық сақтау және еңбек қауіпсіздігін қамтамасыз ету саласындағы жоғары стандарттарға сай болуға бағытталғанбыз.</p>
								<p style="font-size:20px;">2021 жылы сертификаттық аудит нәтижелері бойынша Компания басқару жүйелерінің (сапа менеджменті жүйесі (СМЖ), қоршаған ортаны қорғау менеджменті жүйесі (ҚҚМЖ), Денсаулық сақтау және еңбек қауіпсіздігін қамтамасыз ету менеджмент жүйесі (ДСЕҚМЖ) халықаралық стандарттар талаптарына сәйкестігін растады.</p>
								<p style="font-size:20px;">2024 жылы Компания Еуразиялық экономикалық одақ елдеріндегі TÜV Rheinland эксклюзивті өкілі болып табылатын TÜV Rheinland Kazakhstan ЖШС өткізген кезекті бақылау аудитінен сәтті өтті. Аудит нәтижелері бойынша Компанияның интеграцияланған басқару жүйесінің ISO 9001:2015, ISO 14001:2015, ISO 45001:2018 халықаралық стандарттарының талаптарына сәйкестігі расталды. Басқару жүйелерінің нәтижелілігін сыртқы аудиторлар жыл сайын міндетті түрде Компанияның орталық аппаратында және өндірістік алаңдарының бірінде іріктеп тексереді.</p>
							</div>
					  	</div>
						<hr>
						<div class="container" style="display: flex; background:#e4e4e4; border-radius: 5px;">
							<div class="certificate" >
						  		<a href="https://www.kdts.kz/wp-content/uploads/2024/11/Sertifikat-ISO-14001-KAZyaz.pdf"><img src="https://www.kdts.kz/wp-content/uploads/2024/11/14001.png" alt="Сертификат" style="width:250%; max-width:none;"></a>
							</div>
							<div class="text" style="padding:10px 15px 15px 131px;">
						 		<p style="font-size:20px;">Біз қызметтерімізді ұдайы дамытуға және қызмет көрсету барысында сапа, экология, денсаулық сақтау және еңбек қауіпсіздігін қамтамасыз ету саласындағы жоғары стандарттарға сай болуға бағытталғанбыз.</p>
								<p style="font-size:20px;">2021 жылы сертификаттық аудит нәтижелері бойынша Компания басқару жүйелерінің (сапа менеджменті жүйесі (СМЖ), қоршаған ортаны қорғау менеджменті жүйесі (ҚҚМЖ), Денсаулық сақтау және еңбек қауіпсіздігін қамтамасыз ету менеджмент жүйесі (ДСЕҚМЖ) халықаралық стандарттар талаптарына сәйкестігін растады.</p>
								<p style="font-size:20px;">2024 жылы Компания Еуразиялық экономикалық одақ елдеріндегі TÜV Rheinland эксклюзивті өкілі болып табылатын TÜV Rheinland Kazakhstan ЖШС өткізген кезекті бақылау аудитінен сәтті өтті. Аудит нәтижелері бойынша Компанияның интеграцияланған басқару жүйесінің ISO 9001:2015, ISO 14001:2015, ISO 45001:2018 халықаралық стандарттарының талаптарына сәйкестігі расталды. Басқару жүйелерінің нәтижелілігін сыртқы аудиторлар жыл сайын міндетті түрде Компанияның орталық аппаратында және өндірістік алаңдарының бірінде іріктеп тексереді.</p>
							</div>
					  	</div> -->
						<hr>
						<div class="container" style="display: flex; background:#e4e4e4; border-radius: 5px;">
							<div class="certificate" >
						  	<a href="https://www.kdts.kz/wp-content/uploads/2024/11/Sertifikat-ISO-9001-KAZyaz.pdf"><img src="https://www.kdts.kz/wp-content/uploads/2024/11/9001kaz.png" alt="Сертификат" style="width:250%; max-width:none;"></a><br>
								<a href="https://www.kdts.kz/wp-content/uploads/2024/11/Sertifikat-ISO-14001-KAZyaz.pdf"><img src="https://www.kdts.kz/wp-content/uploads/2024/11/14001.png" alt="Сертификат" style="width:250%; max-width:none;"></a><br>
								<a href="https://www.kdts.kz/wp-content/uploads/2024/11/Sertifikat-ISO-45001-KAZyaz.pdf"><img src="https://www.kdts.kz/wp-content/uploads/2024/11/45001.png" alt="Сертификат"  style="width:250%; max-width:none;"></a>
							</div>
							<div class="text" style="padding:10px 15px 15px 131px;">
						 		<p style="font-size:20px;">Біз қызметтерімізді ұдайы дамытуға және қызмет көрсету барысында сапа, экология, денсаулық сақтау және еңбек қауіпсіздігін қамтамасыз ету саласындағы жоғары стандарттарға сай болуға бағытталғанбыз.</p>
								<p style="font-size:20px; padding-top:210px;">2021 жылы сертификаттық аудит нәтижелері бойынша Компания басқару жүйелерінің (сапа менеджменті жүйесі (СМЖ), қоршаған ортаны қорғау менеджменті жүйесі (ҚҚМЖ), Денсаулық сақтау және еңбек қауіпсіздігін қамтамасыз ету менеджмент жүйесі (ДСЕҚМЖ) халықаралық стандарттар талаптарына сәйкестігін растады.</p>
								<p style="font-size:20px; padding-top:150px;">2024 жылы Компания Еуразиялық экономикалық одақ елдеріндегі TÜV Rheinland эксклюзивті өкілі болып табылатын TÜV Rheinland Kazakhstan ЖШС өткізген кезекті бақылау аудитінен сәтті өтті. Аудит нәтижелері бойынша Компанияның интеграцияланған басқару жүйесінің ISO 9001:2015, ISO 14001:2015, ISO 45001:2018 халықаралық стандарттарының талаптарына сәйкестігі расталды. Басқару жүйелерінің нәтижелілігін сыртқы аудиторлар жыл сайын міндетті түрде Компанияның орталық аппаратында және өндірістік алаңдарының бірінде іріктеп тексереді.</p>
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
		
		<section class="abount-missiya">
			<!-- <img src="<?php echo get_template_directory_uri(); ?>/img/map2.png" alt="#" class="abount-missiya__map" />
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
		</section> -->
        
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