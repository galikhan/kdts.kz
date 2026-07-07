<?php
 /*
 * Template name: antikorruptsionnaya
 */
?>
<?php get_header(); ?>
	<?php include "template-breadcrumbs.php" ?>
  	<main class="container-rukovodstvo">
        <section class="rukovodstvo-navbar">
            <a href="<? echo home_url('/o-kompanii', 'https') ?>" class="rukovodstvo-navbar__title">
               	About company
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
                                <tr>
                                    <th style="width: 7%"> 
                                        1
                                    </th>
                                    <th style="width: 43%; padding: 10px 12px;" class="antiTabel-text"> 
                                        Размещение информации об итогах конкурсного отбора на замещение вакантных должнона официальном сайте АО «Кедентранссервис»
                                    </th>
                                    <th style="width: 25%"> 
                                        Информация на сайте 
                                    </th>
                                    <th style="width: 25%">
                                         постоянно
                                         </th>
                                </tr>

                                <tr>
                                    <th style="width: 7%"> 
                                        2
                                    </th>
                                    <th style="width: 43%; padding: 10px 12px;" class="antiTabel-text"> 
                                        Организация информационно-пропагандистской работы в целях формирования у персонала антикоррупционного сознания:
                                            <p>
                                                1. Организация проведения круглых столов, семинаров и других мероприятий с участием представителей антикоррупционных ведомств страны и неправительственных организаций;
                                            </p> 
                                            <p>
                                                2. Организация публикации в отраслевых СМИ специальных материалов о принимаемых Обществом мерах по противодействию коррупции;
                                            </p>
                                            <p>
                                                3. Обеспечение информирования населения о наличии телефона доверия и электронного почтового ящика для приема информации по нарушениям антикоррупционного законодательства РК
                                            </p>
                                    </th>
                                    <th style="width: 25%"> 
                                        Планы по организации информационно-пропагандистской работы, публикации в СМИ статей, отчет	 
                                    </th>
                                    <th style="width: 25%"> 
                                        ежегодно 
                                    </th>
                                </tr>

                                <tr>
                                    <th style="width: 7%"> 
                                        3
                                    </th>
                                    <th style="width: 43%; padding: 10px 12px;" class="antiTabel-text"> 
                                        Обеспечение функционирования специальных разделов на официальном сайте Общества о деятельности по противодействию коррупции
                                    </th>
                                    <th style="width: 25%"> Разделы на сайте </th>
                                    <th style="width: 25%"> постоянно </th>
                                </tr>

                                <tr>
                                    <th style="width: 7%"> 
                                        4
                                    </th>
                                    <th style="width: 43%; padding: 10px 12px;" class="antiTabel-text"> 
                                        Размещение на официальном сайте Общества ежегодного отчета об исполнении Плана
                                    </th>
                                    <th style="width: 25%"> 
                                        Информация на сайте	 
                                    </th>
                                    <th style="width: 25%"> 
                                        Ежегодно, по итогам года, не позднее 15 марта
                                    </th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <section class="anti-download">
                        <div class="anti-download__items">
                            
							
                        <? $dokumentyi = CFS()->get('blok');
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