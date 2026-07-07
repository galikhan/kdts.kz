
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
                <li class="yazyk-active"><a href="<? echo home_url('/kontakty', 'https') ?>">  Eng</a></li>
                <li><a href="https://kdts.kz/bailanystar/">Қаз</a></li>
                <li><a href="https://kdts.kz/ru/kontakty/">Рус</a></li>
            </ul>
		</div>
    </div>
	<main class="container-rukovodstvo">
            <section class="kontakty-navbar" style="display: none;">
            	<div class="goryaschaya-leniya">
					<center><p class="goryaschaya-leniya__head"> Hot line </p></center>
					<ul>
						<li class="goryaschaya-leniya__item">
							<img src="<?php echo get_template_directory_uri(); ?>/img/phone-call.png" class="goryaschaya-leniya__icon">
							<p class="goryaschaya-leniya__title"> You can report any facts of labor, corruption and other offenses via any of the four communication channels </p>
						</li>
						<li class="goryaschaya-leniya__item">
							<img src="<?php echo get_template_directory_uri(); ?>/img/warranty1.png" class="goryaschaya-leniya__icon">
							<p class="goryaschaya-leniya__title"> Privacy and anonymity </p>
						</li>
						<li class="goryaschaya-leniya__item">
							<img src="<?php echo get_template_directory_uri(); ?>/img/warranty.png" class="goryaschaya-leniya__icon">
							<p class="goryaschaya-leniya__title"> Consideration of 100% of requests </p>
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
							<span> Full name: </span>
						</div>
						<div class="kontakty-bloki1">
							<? echo CFS()->get('tekst1'); ?>
						</div>
					</div> <!-- kontakty-block / -->
					<div class="kontakty-block">
						<div class="kontakty-bloki">
							<span> Short name: </span>
						</div>
						<div class="kontakty-bloki1">
							<? echo CFS()->get('tekst2'); ?>
						</div>
					</div> <!-- kontakty-block / -->
					<div class="kontakty-block">
						<div class="kontakty-bloki">
							<span> Name in English: </span>
						</div>
						<div class="kontakty-bloki1">
							<? echo CFS()->get('tekst3'); ?>
						</div>
					</div> <!-- kontakty-block / -->
					<div class="kontakty-block">
						<div class="kontakty-bloki">
							<span> Legal address: </span>
						</div>
						<div class="kontakty-bloki1">
							<? echo CFS()->get('tekst4'); ?>
						</div>
					</div> <!-- kontakty-block / -->
					<div class="kontakty-block">
						<div class="kontakty-bloki">
							<span> Mailing address: </span>
						</div>
						<div class="kontakty-bloki1">
							 <? echo CFS()->get('tekst5'); ?>
						</div>
					</div> <!-- kontakty-block / -->
					<div class="kontakty-block">
						<div class="kontakty-bloki">
							<span> Appeal: </span>
						</div>
						<div class="kontakty-bloki1">
							<a href="<? echo home_url('/kontakty/virtualnaya-priemnaya/', 'https') ?>" class="godovoy-plan__nav-text"> Ask a question, leave a complaint or suggestion </a>
						</div>
					</div> <!-- kontakty-block / -->
					<div class="kontakty-block">
						<div class="kontakty-bloki">
							<span> Call center: </span>
						</div>
						<div class="kontakty-bloki1">
							 <ul class="kontakty-tel__block">

								<? $teli = CFS()->get('tel');
									foreach ($teli as $te) {
										echo '
											<li>'.$te["tekst7"].'</li>
										';
									 }
								?>
                            </ul>
						</div>
					</div> <!-- kontakty-block / -->
					<div class="kontakty-block">
						<div class="kontakty-bloki">
							<span> For media inquiries: </span>
						</div>
						<div class="kontakty-bloki1">
							<ul class="kontakty-tel__block">
                                <li><? echo CFS()->get('tekst9'); ?></li>
                                <li><? echo CFS()->get('tekst10'); ?></li>
                            </ul>
						</div>
					</div> <!-- kontakty-block / -->
					<div class="kontakty-block">
						<div class="kontakty-bloki">
							<span> For questions about sending letters: </span>
						</div>
						<div class="kontakty-bloki1">
							<? echo CFS()->get('tekst11'); ?>
						</div>
					</div> <!-- kontakty-block / -->
					<div class="kontakty-block">
						<div class="kontakty-bloki">
							<span> Opening hours: </span>
						</div>
						<div class="kontakty-bloki1">
							<ul class="kontakty-tel__block">
                                <li><? echo CFS()->get('tekst12'); ?></li>
                                <li><? echo CFS()->get('tekst13'); ?> (dinner)</li>
                            </ul>
						</div>
					</div> <!-- kontakty-block / -->
                </div> <!-- kontakty / -->
            </section> <!-- rukovodstvo-content / -->
    </main>
<?php get_footer(); ?>