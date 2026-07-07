<?php get_header(); ?>
<main class="container-rukovodstvo">
	<section class="zakupki-navbar">
   		<?php include "zakup-menu.php" ?>
   	</section> <!-- rukovodstvo-navbar / -->
       <section class="zakupki-content">
            <h1 class="partnery-title">
                Сатып алу туралы ақпарат
            </h1>
            <h2 class="zakupki-list__title">
                <?php the_title(); ?>
            </h2>
            <div class="zakupki-list__org">
                <p><span>Ұйымдастырушы:</span>  АО "Кедентранссервис" </p>
                <p><span>Тәсілі:</span> Баға ұсыныстарын сұрату тәсілі бойынша </p>
                <p class="zakupki-list__start"><span>Басталуы:</span> <?php echo CFS()->get('data-nachalo'); ?> </p>
                <p class="zakupki-list__end"><span>Аяқталуы:</span> <?php echo CFS()->get('data-okonchanie'); ?> </p>
            </div>
            <div class="zakupki-list__text">
                <?php the_post(); ?>
				<?php the_content() ?>   
            </div>
		   <?php $fields = CFS()->get('fayly1');
					if (!empty($fields)):
			?>
				<div class="skachivaniya">
					<h2 class="skachivaniya-title"> Жүктеуге арналған файлдар: </h2>
					<div class="skachivaniya-download__items">
						<?php foreach ($fields as $field) { ?>
							<div class="anti-download__item">
								<a href="<?php echo $field["dokument"] ?>" download>
									<img src="<?php echo get_template_directory_uri(); ?>/img/tipovye-dogovora__icon.png" alt="#" class="anti-download__item-icon"/>
								</a>
								<div class="anti-download__item-text">
									<p> <?php echo $field["text1"] ?> </p>
									<p> (Қойылған: <?php echo $field["data1"] ?>) </p>
								</div>
							</div>
						<?php }; ?>
					</div>
				</div>
		 	<?php endif; ?>
          
		     <?php $fields = CFS()->get('fayly2');
					if (!empty($fields)):
			?>
				<div class="skachivaniya">
					<h2 class="skachivaniya-title"> Хаттама және нәтижелер: </h2>
					<div class="skachivaniya-download__items">
						<?php foreach ($fields as $field) { ?>
							<div class="anti-download__item">
								<a href="<?php echo $field["dokument1"] ?>" download>
									<img src="<?php echo get_template_directory_uri(); ?>/img/tipovye-dogovora__icon.png" alt="#" class="anti-download__item-icon"/>
								</a>
								<div class="anti-download__item-text">
									<p> <?php echo $field["text2"] ?> </p>
									<p> (Қойылған: <?php echo $field["data2"] ?>) </p>
								</div>
							</div>
						<?php }; ?>
					</div>
				</div>
		 	<?php endif; ?>
		   
		   <?php $fields = CFS()->get('fayly3');
					if (!empty($fields)):
			?>
				<div class="skachivaniya">
					<h2 class="skachivaniya-title"> Қосымша: </h2>
					<div class="skachivaniya-download__items">
						<?php foreach ($fields as $field) { ?>
							<div class="anti-download__item">
								<a href="<?php echo $field["dokument3"] ?>" download>
									<img src="<?php echo get_template_directory_uri(); ?>/img/tipovye-dogovora__icon.png" alt="#" class="anti-download__item-icon"/>
								</a>
								<div class="anti-download__item-text">
									<p> <?php echo $field["text3"] ?> </p>
									<p> (Қойылған: <?php echo $field["data3"] ?>) </p>
								</div>
							</div>
						<?php }; ?>
					</div>
				</div>
		 	<?php endif; ?>
		    
        </section> <!-- rukovodstvo-content / -->    
</main>
<?php get_footer(); ?>
