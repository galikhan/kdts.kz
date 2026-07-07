<?php
 /*
 * Template name: antikorruptsionnaya
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
                <li class="yazyk-active"><a href="<?php echo home_url('', 'https') ?>"> Рус</a></li>
                <li><a href="">Қаз</a></li>
                <li><a href="">Eng</a></li>
            </ul>
		</div>
    </div>
  	<main class="container-rukovodstvo">
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
        </section> <!-- rukovodstvo-navbar / -->
        <section class="rukovodstvo-content">
			<h1 class="partnery-title">
			  	<?php the_title(); ?>
			</h1>
			<div class="anti-text">
            	<?php the_post(); ?>
            	<?php the_content() ?>
           	</div>

                    <div class="anti-tabli">
                        <table class="iksweb">
                            <tbody>
                                <tr>
                                    <th style="width: 7%"> №
                                            <br />
                                         п.п. 
                                    </th>
                                    <th style="width: 43%"> Наименование мероприятия </th>
                                    <th style="width: 25%"> Форма завершения </th>
                                    <th style="width: 25%"> Сроки  исполнения</th>
                                </tr>
                            </tbody>
                        </table>
                        <table class="antiTabel1">
                            <tbody>
                              <?php $sotrudniki = CFS()->get('tablitsa');
								foreach ($sotrudniki as $sotrudnik) {
									echo '
									 <tr>
                                    <th style="width: 7%"> 
                                        '.$sotrudnik["nomer"].'
                                    </th>
                                    <th style="width: 43%; padding: 10px 12px;" class="antiTabel-text"> 
                                       '.$sotrudnik["naimenovanie-meropriyatiya"].'
                                    </th>
                                    <th style="width: 25%"> 
                                        '.$sotrudnik["forma-zaversheniya"].'
                                    </th>
                                    <th style="width: 25%">
                                         '.$sotrudnik["sroki-ispolneniya"].'
                                    </th>
                                </tr>
									';
								 }
							?>
                            </tbody>
                        </table>
                    </div>
                    <section class="anti-download">
                        <div class="anti-download__items">
                            
							
                        <?php $dokumentyi = CFS()->get('blok');
							foreach ($dokumentyi as $dokumenty) {
								echo '
									<div class="anti-download__item">
										<a href="'.$dokumenty["dokument"].'" download>
											<img src="https://work.almazvoda.kz/wp-content/themes/kdts/img/tipovye-dogovora__icon.png" alt="#" class="anti-download__item-icon"/>
										</a>
										<p class="anti-download__item-text">
											'.$dokumenty["tekst"].'
										</p>
									</div>
								';
							 }
						?>
                        </div>
                    </section>
                </section> <!-- rukovodstvo-content / -->    
    </main>
 
<?php get_footer(); ?>