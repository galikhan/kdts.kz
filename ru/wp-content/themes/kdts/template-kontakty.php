
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
			<li class="yazyk-active"><a href="<?php echo home_url('/kontakty', 'https') ?>"> Рус</a></li>
			<li><a href="https://www.kdts.kz/bailanystar/">Қаз</a></li>
			<li><a href="https://www.kdts.kz/en/kontakty/">Eng</a></li>
		</ul>
	</div>
</div>
<main class="container-rukovodstvo">
	<section class="kontakty-navbar" style="display: none;">
		<div class="goryaschaya-leniya" >
			<center><p class="goryaschaya-leniya__head"> Горячая линия </p></center>
			<ul>
				<li class="goryaschaya-leniya__item">
					<img src="<?php echo get_template_directory_uri(); ?>/img/phone-call.png" class="goryaschaya-leniya__icon">
					<p class="goryaschaya-leniya__title">О любых фактах трудовых, коррупционных и иных правонарушений вы можете сообщить по любому из четерых каналов связи </p>
				</li>
				<li class="goryaschaya-leniya__item">
					<img src="<?php echo get_template_directory_uri(); ?>/img/warranty1.png" class="goryaschaya-leniya__icon">
					<p class="goryaschaya-leniya__title"> Конфиденциальность и анонимность </p>
				</li>
				<li class="goryaschaya-leniya__item">
					<img src="<?php echo get_template_directory_uri(); ?>/img/warranty.png" class="goryaschaya-leniya__icon">
					<p class="goryaschaya-leniya__title"> Рассмотрение 100% обращений </p>
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
	<section class="novosti-container" style="width: 100%">
		<h1 class="partnery-title">
			<?php the_title(); ?>
		</h1>
		<div class="kontakty">
			<div class="kontakty-block">
				<div class="kontakty-bloki">
					<span> Полное наименование: </span>
				</div>
				<div class="kontakty-bloki1">
					<?php echo CFS()->get('tekst1'); ?>
				</div>
			</div> <!-- kontakty-block / -->
			<div class="kontakty-block">
				<div class="kontakty-bloki">
					<span> Сокращенное наименование:  </span>
				</div>
				<div class="kontakty-bloki1">
					<?php echo CFS()->get('tekst2'); ?>
				</div>
			</div> <!-- kontakty-block / -->
			<div class="kontakty-block">
				<div class="kontakty-bloki">
					<span> Наименование на английском языке: </span>
				</div>
				<div class="kontakty-bloki1">
					<?php echo CFS()->get('tekst3'); ?>
				</div>
			</div> <!-- kontakty-block / -->
			<div class="kontakty-block">
				<div class="kontakty-bloki">
					<span> Юридический адрес: </span>
				</div>
				<div class="kontakty-bloki1">
					<?php echo CFS()->get('tekst4'); ?>
				</div>
			</div> <!-- kontakty-block / -->
			<div class="kontakty-block">
				<div class="kontakty-bloki">
					<span> Почтовый адрес: </span>
				</div>
				<div class="kontakty-bloki1">
					<?php echo CFS()->get('tekst5'); ?>
				</div>
			</div> <!-- kontakty-block / -->
			<div class="kontakty-block">
				<div class="kontakty-bloki">
					<span> Контакты филиалов АО&nbsp;«Кедентранссервис» </span>
				</div>
				<div class="kontakty-bloki1">
					<a href="<?php echo home_url('/o-kompanii/filialy-i-predstavitelstv/', 'https') ?>" class="godovoy-plan__nav-text"> Филиалы и представительства </a>
				</div>
			</div> <!-- kontakty-block / -->
			<div class="kontakty-block">
				<div class="kontakty-bloki">
					<span> Call center: </span>
				</div>
				<div class="kontakty-bloki1">
					<ul class="kontakty-tel__block" style="margin-top: 0;">

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
					<span> По вопросам СМИ: </span>
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
					<span> По вопросам отправки писем: </span>
				</div>
				<div class="kontakty-bloki1">
					<?php echo CFS()->get('tekst11'); ?>
				</div>
			</div> <!-- kontakty-block / -->
			<div class="kontakty-block">
				<div class="kontakty-bloki">
					<span> Часы работы: </span>
				</div>
				<div class="kontakty-bloki1">
					<ul class="kontakty-tel__block">
						<li><?php echo CFS()->get('tekst12'); ?></li>
						<li><?php echo CFS()->get('tekst13'); ?>(обед)</li>
					</ul>
				</div>
			</div> <!-- kontakty-block / -->
			<div class="kontakty-block">
				<div class="kontakty-bloki">
					<span> &nbsp; </span>
				</div>
				<div class="kontakty-bloki1">
					<ul class="kontakty-tel__block">
						<li style="margin-bottom:1rem"><img src="<?php echo get_template_directory_uri(); ?>/img/phone-call123.png" class="goryaschaya-leniya__icon" style="display:inline-block; vertical-align:middle">- Горячая линия: 8-800-080-47-47</li>
						<li style="margin-bottom:1rem"><img src="<?php echo get_template_directory_uri(); ?>/img/whatsapp.png" class="goryaschaya-leniya__icon" style="display:inline-block; vertical-align:middle">- Номер WhatsApp 8-771-191-88-16</li>
						<li style="margin-bottom:1rem"><img src="<?php echo get_template_directory_uri(); ?>/img/internet.png" class="goryaschaya-leniya__icon" style="display:inline-block; vertical-align:middle">- Интернет-портал: www.sk-hotline.kz </li>
						<li style="margin-bottom:1rem"><img src="<?php echo get_template_directory_uri(); ?>/img/email123.png" class="goryaschaya-leniya__icon" style="display:inline-block; vertical-align:middle">- Электронная почта: mail@sk-hotline.kz</li>
						<li>Мобильное приложение: KTZ HSE</li>
						<!--<li>- многоканальный телефон 8-800-080-30-30</li>
						<li>- WhatssApp 8-702-075-30-30</li>
						<li>- Веб-сайт nysana.cscc.kz </li>
						<li>- Электронная почта nysana@cscc.kz</li>
						<li>Колл-центр «Нысана» принимает бесплатные звонки по всем социально-трудовым нарушениям 24/7.</li>
						<li>&nbsp;</li>-->

					</ul>
				</div>
			</div> <!-- kontakty-block / -->
		</div> <!-- kontakty / -->
	</section> <!-- rukovodstvo-content / -->
</main>

<?php get_footer(); ?>




