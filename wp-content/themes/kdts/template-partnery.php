<?php
 /*
 * Template name: partnery
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
                <li class="yazyk-active"><a href="<? echo home_url('/kompaniya-turaly/seriktester/', 'https') ?>">Қаз</a></li>
                <li><a href="<? echo home_url('/ru/o-kompanii/partnery', 'https') ?>">Рус</a></li>
                <li><a href="<? echo home_url('/en/o-kompanii/partnery/', 'https') ?>">Eng</a></li>
            </ul>
		</div>
    </div>
 	<main class="container-rukovodstvo">
        <section class="rukovodstvo-navbar">
            <a href="<? echo home_url('/kompaniya-turaly', 'https') ?>" class="rukovodstvo-navbar__title">
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
      	<section class="rukovodstvo-content">
       		<h1 class="partnery-title">
            	<?php the_title(); ?>
       		</h1>
           	<div class="partnery-items">
			
				<? $dokumentyi = CFS()->get('partnery');
							foreach ($dokumentyi as $dokumenty) {
								echo '
								<div class="partnery-item">
								   <div class="partnery-item__block">
										<div class="partnery-item__photo">
											<img src="'.$dokumenty["partnery-foto"].'" alt="#" class="partnery-item__icon" />
										</div>
										<p class="partnery-item__text">
											'.$dokumenty["partnery-tekst"].'
										</p>
									</div>
								</div> <!-- partnery-item /-->
								';
							 }
						?>
          	</div>
   		</section>
    </main>
 
<?php get_footer(); ?>