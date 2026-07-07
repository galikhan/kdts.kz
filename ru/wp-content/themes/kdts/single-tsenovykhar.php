<?php get_header(); ?>
<!--
	<div class="pagination-block">
  		<div class="sdfsdfjsdf">
      		<div class="header-logo1"></div>
        </div>
		<div class="yazyk">
			<?php wp_nav_menu ( array (
						'theme_location' => 'yazyk-menu',
						'container' => false,
						'menu_class'      => '', 
					)) ?>
		</div>
    </div>
-->
<main class="container-rukovodstvo">
	<section class="zakupki-navbar">
   		<?php include "zakup-menu.php" ?>
   	</section> <!-- rukovodstvo-navbar / -->
       <section class="zakupki-content">
            <h1 class="partnery-title">
                Информация о закупках
            </h1>
            <h2 class="zakupki-list__title">
                <?php the_title(); ?>
            </h2>
            <div class="zakupki-list__org">
                <p><span>Организатор:</span>  АО «Кедентранссервис» </p>
                <p><span>Способ:</span> Способом запроса ценовых предложений </p>
                <p class="zakupki-list__start"><span>Начало:</span> <? echo CFS()->get('data-nachalo'); ?> </p>
                <p class="zakupki-list__end"><span>Окончание:</span> <? echo CFS()->get('data-okonchanie'); ?> </p>
            </div>
            <div class="zakupki-list__text">
                <?php the_post(); ?>
				<?php the_content() ?>   
            </div>
		   <?php $fields = CFS()->get('fayly1');
					if (!empty($fields)):
			?>
				<div class="skachivaniya">
					<h2 class="skachivaniya-title"> Файлы для скачивания: </h2>
					<div class="skachivaniya-download__items">
						<?php foreach ($fields as $field) { ?>
							<div class="anti-download__item">
								<a href="<? echo $field["dokument"] ?>" download>
									<img src="<?php echo get_template_directory_uri(); ?>/img/tipovye-dogovora__icon.png" alt="#" class="anti-download__item-icon"/>
								</a>
								<div class="anti-download__item-text">
									<p> <? echo $field["text1"] ?> </p>
									<p> (Выставлен: <? echo $field["data1"] ?>) </p>
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
					<h2 class="skachivaniya-title"> Протоколы и итоги: </h2>
					<div class="skachivaniya-download__items">
						<?php foreach ($fields as $field) { ?>
							<div class="anti-download__item">
								<a href="<? echo $field["dokument1"] ?>" download>
									<img src="<?php echo get_template_directory_uri(); ?>/img/tipovye-dogovora__icon.png" alt="#" class="anti-download__item-icon"/>
								</a>
								<div class="anti-download__item-text">
									<p> <? echo $field["text2"] ?> </p>
									<p> (Выставлен: <? echo $field["data2"] ?>) </p>
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
					<h2 class="skachivaniya-title"> Дополнительно: </h2>
					<div class="skachivaniya-download__items">
						<?php foreach ($fields as $field) { ?>
							<div class="anti-download__item">
								<a href="<? echo $field["dokument3"] ?>" download>
									<img src="<?php echo get_template_directory_uri(); ?>/img/tipovye-dogovora__icon.png" alt="#" class="anti-download__item-icon"/>
								</a>
								<div class="anti-download__item-text">
									<p> <? echo $field["text3"] ?> </p>
									<p> (Выставлен: <? echo $field["data3"] ?>) </p>
								</div>
							</div>
						<?php }; ?>
					</div>
				</div>
		 	<?php endif; ?>
		    
        </section> <!-- rukovodstvo-content / -->    
</main>
<?php get_footer(); ?>
