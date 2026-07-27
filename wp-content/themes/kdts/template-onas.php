<?php
 /*
 * Template name: o-kompanii
 */
?>
<?php get_header(); ?>
	<div class="pagination-block">
  		<div class="sdfsdfjsdf">
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
                    <div class="onas-years">
                        <svg class="icon"><use href="#icon-clock"></use></svg>
                        <span class="onas-years__text">Нарықта <strong class="onas-years__number">25</strong> жылдан астам</span>
                    </div>
                    <div class="onas-lead">
                        <?php the_post(); ?>
						<?php the_content() ?>
                    </div>
                    <?php
                        $onas_stat_num   = CFS()->get('tsifrff');
                        $onas_stat_label = CFS()->get('text10');
                        $onas_stat_text  = CFS()->get('text11');
                        if ( $onas_stat_num || $onas_stat_text ):
                    ?>
                    <div class="onas-active">
                        <div class="onas-active__left">
                            <span><?php echo $onas_stat_num; ?></span>
                            <p class="onas-active__number">
                                <?php echo $onas_stat_label; ?>
                            </p>
                        </div>
                        <div class="onas-active__right">
                            <p class="onas-active__text">
                               <?php echo $onas_stat_text; ?>
                            </p>
                        </div>
                    </div>
                    <?php endif; ?>
                </section>
            </div>
        </div>
		
		<section class="abount-missiya">
			<div class="abount-map__container">
				<img src="<?php echo get_template_directory_uri(); ?>/img/map2.png" alt="#" class="abount-missiya__map"/>
				<div class="abount-map__text">
					 <?php echo CFS()->get('tekst1'); ?>
				</div>
			</div>
			<div class="abount-missiya__container abount-missiya__container--goals">

				<div class="onas-goals">
					<div class="onas-goals__item">
						<h3>Біздің мақсат</h3>
						<p>«Қазақстанның жүйе құраушы көлік компаниясы ретінде біз Ұлттық экономика мен қоғамның терминалдық инфрақұрылымды басқарудағы қажеттіліктерін қанағаттандырамыз».</p>
					</div>
					<div class="onas-goals__item">
						<h3>Біздің көз-қарас</h3>
						<p>Біз экономикалық тиімділік, қауіпсіздік, Әлеуметтік және экологиялық жауапкершілік қағидаттарына негізделген терминалдық инфрақұрылым қызметтерін ұсынатын жетекші компаниямыз.</p>
						<p>Стратегиялық мақсат – «Бизнес ауқымын ұлғайту және қызмет тиімділігін арттыру есебінен капиталдандыруды ұлғайту».</p>
					</div>
					<div class="onas-goals__item">
						<h3>Біздің стратегиялық мақсат</h3>
						<ul class="onas-goals__list">
							<li>терминалдық инфрақұрылымды басқару тиімділігін арттыру</li>
							<li>транзиттік тасымалдарды дамытуға жәрдемдесу</li>
							<li>клиенттердің қанағаттануын арттыру</li>
							<li>цифрландыру</li>
							<li>ESG принциптерін енгізу</li>
							<li>өндірістік қызметтің қауіпсіздігіне кепілдік беру</li>
						</ul>
					</div>
				</div>

				<div class="cert-block">
					<div class="certificate" >
					  	<a href="https://www.kdts.kz/wp-content/uploads/2024/11/Sertifikat-ISO-9001-KAZyaz.pdf"><img src="https://www.kdts.kz/wp-content/uploads/2024/11/9001kaz.png" alt="Сертификат ISO 9001"></a>
						<a href="https://www.kdts.kz/wp-content/uploads/2024/11/Sertifikat-ISO-14001-KAZyaz.pdf"><img src="https://www.kdts.kz/wp-content/uploads/2024/11/14001.png" alt="Сертификат ISO 14001"></a>
						<a href="https://www.kdts.kz/wp-content/uploads/2024/11/Sertifikat-ISO-45001-KAZyaz.pdf"><img src="https://www.kdts.kz/wp-content/uploads/2024/11/45001.png" alt="Сертификат ISO 45001"></a>
					</div>
					<div class="text">
				 		<p>Біз қызметтерімізді ұдайы дамытуға және қызмет көрсету барысында сапа, экология, денсаулық сақтау және еңбек қауіпсіздігін қамтамасыз ету саласындағы жоғары стандарттарға сай болуға бағытталғанбыз.</p>
						<p>2021 жылы сертификаттық аудит нәтижелері бойынша Компания басқару жүйелерінің (сапа менеджменті жүйесі (СМЖ), қоршаған ортаны қорғау менеджменті жүйесі (ҚҚМЖ), Денсаулық сақтау және еңбек қауіпсіздігін қамтамасыз ету менеджмент жүйесі (ДСЕҚМЖ) халықаралық стандарттар талаптарына сәйкестігін растады.</p>
						<p>2024 жылы Компания Еуразиялық экономикалық одақ елдеріндегі TÜV Rheinland эксклюзивті өкілі болып табылатын TÜV Rheinland Kazakhstan ЖШС өткізген кезекті бақылау аудитінен сәтті өтті. Аудит нәтижелері бойынша Компанияның интеграцияланған басқару жүйесінің ISO 9001:2015, ISO 14001:2015, ISO 45001:2018 халықаралық стандарттарының талаптарына сәйкестігі расталды. Басқару жүйелерінің нәтижелілігін сыртқы аудиторлар жыл сайын міндетті түрде Компанияның орталық аппаратында және өндірістік алаңдарының бірінде іріктеп тексереді.</p>
					</div>
				</div>

			</div>
			<?php $onas_missiya_bottom = CFS()->get('text4'); if ( $onas_missiya_bottom ): ?>
			<div class="abount-missiya__bottom">
				<p class="abount-missiya__bottom-text">
					<?php echo $onas_missiya_bottom; ?>
				</p>
			</div>
			<?php endif; ?>
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