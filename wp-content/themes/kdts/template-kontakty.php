
<?php
 /*
 * Template name: kontakty
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
                <li class="yazyk-active"><a href="<?php echo home_url('/bailanystar/', 'https') ?>">Қаз</a></li>
                <li><a href="<?php echo home_url('/ru/kontakty/', 'https') ?>">Рус</a></li>
                <li><a href="<?php echo home_url('/en/kontakty/', 'https') ?>">Eng</a></li>
            </ul>
		</div>
    </div>
	<main class="container-rukovodstvo">
            <section class="kontakty-navbar" style="display: none;">
            	<div class="goryaschaya-leniya">
					<center><p class="goryaschaya-leniya__head"> Жедел желі </p></center>
					<ul>
						<li class="goryaschaya-leniya__item">
							<img src="<?php echo get_template_directory_uri(); ?>/img/phone-call.png" class="goryaschaya-leniya__icon">
							<p class="goryaschaya-leniya__title"> Еңбек, жемқорлық және басқа да құқық бұзүшылық фактілері туралы сіз ұсынылған төрт байланыс арнасы арқылы хабарлай аласыз </p>
						</li>
						<li class="goryaschaya-leniya__item">
							<img src="<?php echo get_template_directory_uri(); ?>/img/warranty1.png" class="goryaschaya-leniya__icon">
							<p class="goryaschaya-leniya__title"> Құпиялылық және анонимдік </p>
						</li>
						<li class="goryaschaya-leniya__item">
							<img src="<?php echo get_template_directory_uri(); ?>/img/warranty.png" class="goryaschaya-leniya__icon">
							<p class="goryaschaya-leniya__title"> Өтініштер 100% қаралады </p>
						</li>
					</ul>
					<ul class="goryaschaya-leniya__call">
						<li class="goryaschaya-leniya__item">
							<img src="<?php echo get_template_directory_uri(); ?>/img/phone-call123.png" class="goryaschaya-leniya__icon">
							<p class="goryaschaya-leniya__title1"> 8 800 080 30 30</p>
						</li>
						<li class="goryaschaya-leniya__item">
							<img src="<?php echo get_template_directory_uri(); ?>/img/whatsapp.png" class="goryaschaya-leniya__icon">
							<p class="goryaschaya-leniya__title1"> 8 702 075 30 30</p>
						</li>
						<li class="goryaschaya-leniya__item">
							<img src="<?php echo get_template_directory_uri(); ?>/img/email123.png" class="goryaschaya-leniya__icon">
							<p class="goryaschaya-leniya__title1">nysana@cscc.kz</p>
						</li>
						<li class="goryaschaya-leniya__item">
							<img src="<?php echo get_template_directory_uri(); ?>/img/internet.png" class="goryaschaya-leniya__icon">
							<p class="goryaschaya-leniya__title1"> nysana.cscc.kz </p>
						</li>
					</ul>
				</div>
            </section> <!-- rukovodstvo-navbar / -->
            <section class="novosti-container">
                <h1 class="partnery-title">
                    <?php the_title(); ?>
                </h1>
                <div class="kontakty">
					<div class="kontakty-block">
						<div class="kontakty-bloki">
							<span> Толық атауы: </span>
						</div>
						<div class="kontakty-bloki1">
							<?php echo CFS()->get('tekst1'); ?>
						</div>
					</div> <!-- kontakty-block / -->
					<div class="kontakty-block">
						<div class="kontakty-bloki">
							<span> Қысқартылған атауы: </span>
						</div>
						<div class="kontakty-bloki1">
							<?php echo CFS()->get('tekst2'); ?>
						</div>
					</div> <!-- kontakty-block / -->
					<div class="kontakty-block">
						<div class="kontakty-bloki">
							<span> Ағылшын тіліндегі атауы </span>
						</div>
						<div class="kontakty-bloki1">
							<?php echo CFS()->get('tekst3'); ?>
						</div>
					</div> <!-- kontakty-block / -->
					<div class="kontakty-block">
						<div class="kontakty-bloki">
							<span> Заңды мекен-жайы: </span>
						</div>
						<div class="kontakty-bloki1">
							<?php echo CFS()->get('tekst4'); ?>
						</div>
					</div> <!-- kontakty-block / -->
					<div class="kontakty-block">
						<div class="kontakty-bloki">
							<span> Пошталық мекенжайы: </span>
						</div>
						<div class="kontakty-bloki1">
							 <?php echo CFS()->get('tekst5'); ?>
						</div>
					</div> <!-- kontakty-block / -->
					<div class="kontakty-block">
						<div class="kontakty-bloki">
							<span> «Кедентранссервис» АҚ филиалдарының&nbsp;байланыстары: </span>
						</div>
						<div class="kontakty-bloki1">
							<a href="<?php echo home_url('/kompaniya-turaly/filialdar-zh-ne-kildikter/', 'https') ?>" class="godovoy-plan__nav-text"> Филиалдар және өкілдіктер </a>

						</div>
					</div> <!-- kontakty-block / -->
					<div class="kontakty-block">
						<div class="kontakty-bloki">
							<span> Call center: </span>
						</div>
						<div class="kontakty-bloki1">
							 <ul class="kontakty-tel__block">

								<?php $teli = CFS()->get('tel');
									foreach ($teli as $te) {
										echo '
											<li>'.$te["tekst7"].'</li>
										';
									 }
								?>
								<li>+7 778 097 91 87</li>
                            </ul>
						</div>
					</div> <!-- kontakty-block / -->
					<div class="kontakty-block">
						<div class="kontakty-bloki">
							<span> БАҚ мәселелері бойынша: </span>
						</div>
						<div class="kontakty-bloki1">
							<ul class="kontakty-tel__block">
                                <li><?php echo CFS()->get('tekst9'); ?></li>
                                <li><?php echo CFS()->get('tekst10'); ?></li>
                            </ul>
						</div>
					</div> <!-- kontakty-block / -->
					<div class="kontakty-block">
						<div class="kontakty-bloki">
							<span> Хат жолдау сұрақтары бойынша: </span>
						</div>
						<div class="kontakty-bloki1">
							<?php echo CFS()->get('tekst11'); ?>
						</div>
					</div> <!-- kontakty-block / -->
					<div class="kontakty-block">
						<div class="kontakty-bloki">
							<span> Жұмыс уақыты: </span>
						</div>
						<div class="kontakty-bloki1">
							<ul class="kontakty-tel__block">
                                <li><?php echo CFS()->get('tekst12'); ?></li>
                                <li><?php echo CFS()->get('tekst13'); ?></li>
                            </ul>
						</div>
					</div> <!-- kontakty-block / -->
					<div class="kontakty-block">
						<div class="kontakty-bloki">
							<span> &nbsp; </span>
						</div>
						<div class="kontakty-bloki1">
							<ul class="kontakty-tel__block">
								<li style="margin-bottom:1rem"><img src="<?php echo get_template_directory_uri(); ?>/img/phone-call123.png" class="goryaschaya-leniya__icon" style="display:inline-block; vertical-align:middle">- Жедел байланыс желісі: 8-800-080-47-47</li>
								<li style="margin-bottom:1rem"><img src="<?php echo get_template_directory_uri(); ?>/img/whatsapp.png" class="goryaschaya-leniya__icon" style="display:inline-block; vertical-align:middle">- WhatsApp мобильді қосыша: 8-771-191-88-16</li>
								<li style="margin-bottom:1rem"><img src="<?php echo get_template_directory_uri(); ?>/img/internet.png" class="goryaschaya-leniya__icon" style="display:inline-block; vertical-align:middle">- Интернет-портал: www.sk-hotline.kz </li>
								<li style="margin-bottom:1rem"><img src="<?php echo get_template_directory_uri(); ?>/img/email123.png" class="goryaschaya-leniya__icon" style="display:inline-block; vertical-align:middle">- Электрондық пошта: mail@sk-hotline.kz</li>
								<li>Мобильдік қосымша: KTZ HSE</li>
								<!--<li>- көпарналы телефон 8-800-080-30-30</li>
								<li>- WhatssApp 8-702-075-30-30</li>
								<li>- Веб-сайт nysana.cscc.kz </li>
								<li>- Электрондық пошта  nysana@cscc.kz</li>
								<li>"Нысана" Колл-орталығы 24/7 бойы барлық әлеуметтік-еңбек бұзушылықтар бойынша тегін қоңыраулар қабылдайды.</li>
								<li>&nbsp;</li>-->

							</ul>
						</div>
					</div> <!-- kontakty-block / -->
                </div> <!-- kontakty / -->
            </section> <!-- rukovodstvo-content / -->
    </main>
<?php get_footer(); ?>