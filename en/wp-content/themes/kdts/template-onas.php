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
                <li class="yazyk-active"><a href="<?php echo home_url('/o-kompanii/', 'https') ?>"> Eng </a></li>
                <li><a href="https://www.kdts.kz/kompaniya-turaly/">Қаз</a></li>
                <li><a href="https://www.kdts.kz/ru/o-kompanii/">Рус</a></li>
            </ul>
		</div>
    </div>
   <main>
        <div class="container-rukovodstvo">
            <div class="rukovodstvo-top">
                <section class="rukovodstvo-navbar">
                    <a href="<?php echo home_url('/o-kompanii', 'https') ?>" class="rukovodstvo-navbar__title">
                        About company
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
                    <div class="years">
                      	 Over  <span class="years-number"> 25 </span> years on the market
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
			<img src="<?php echo get_template_directory_uri(); ?>/img/map2.png" alt="#" class="abount-missiya__map1" style="position: absolute; z-index: 5; width:40%; margin-letf: 111px;"/>
			<div class="abount-map__container">
				<div class="abount-map__text">
					 <?php echo CFS()->get('tekst1'); ?> 
				</div>
			</div>
			<div class="abount-missiya__container" style="margin-top:300px">
				<div class="abount-missiya__block">
					<div class="aktsioneram-text" style="text-indent: 0px;">
					
						
						<p class="abount-otnosheniya__p"><strong> Our mission: </strong></p>
												<p class="abount-otnosheniya__p">«As a systemically important transport company of Kazakhstan, we meet the needs of the national economy and society in terminal infrastructure management».</p>
						<!-- <img src="https://www.kdts.kz/ru/wp-content/uploads/2024/05/GS3A1618-1-1.jpg" width="100%" >-->
												<p class="abount-otnosheniya__p"> <strong> Our vision: </strong> </p>
												<p class="abount-otnosheniya__p">
We are a leading company providing terminal infrastructure services that are based on the principles of economic efficiency, safety, social and environmental responsibility. 
</p>
												<p class="abount-otnosheniya__p">Strategic Goal - «Increase capitalization through growth of business scale and increase in operational efficiency».
</p>
												<p class="abount-otnosheniya__p"> <strong> Our strategic goals: </strong> </p>
												<p class="abount-otnosheniya__p">1)	Improving the efficiency of terminal infrastructure management;</p>
												<p class="abount-otnosheniya__p">2)	promotion of transit transportation;</p>
												<p class="abount-otnosheniya__p">3)	increased customer satisfaction;</p>
																		<p class="abount-otnosheniya__p">4)	digitalization;</p>
																		<p class="abount-otnosheniya__p">5)	implementation of ESG principles;</p>
																		<p class="abount-otnosheniya__p">6)	Guaranteeing the safety of production activities.</p>
						<br><br>
						
						<!--<div class="container" style="display: flex; background:#e4e4e4; border-radius: 5px;">
							<div class="certificate" >
						  	<a href="https://www.kdts.kz/en/wp-content/uploads/2024/11/Sertifikat-ISO-9001-ANGLyaz.pdf"><img src="https://www.kdts.kz/en/wp-content/uploads/2024/11/9007en.png" alt="Сертификат" style="width:250%; max-width:none;"></a>
							</div>
							<div class="text" style="padding:10px 15px 15px 131px;">
								<p style="font-size:20px;"> We aim to continually develop our services and to meet high standards of quality, environmental, health and safety in the delivery of our services.</p>	
								<p style="font-size:20px;"> In 2021, based on the results of the certification audit, the Company confirmed the compliance of its management systems (Quality Management System (QMS), Environmental Management System (EMS), Occupational Health and Safety Management System (OHSMS) with the requirements of international standards.</p>	
								<p style="font-size:20px;"> In 2024, the Company once again successfully passed a surveillance audit conducted by TÜV Rheinland Kazakhstan LLP, which is the exclusive representative of TÜV Rheinland in the countries of the Eurasian Economic Union. The audit results confirmed the compliance of the Company's integrated management system with the requirements of international standards ISO 9001:2015, ISO 14001:2015, ISO 45001:2018. The effectiveness of management systems is audited by external auditors annually on a mandatory basis at the central office and selectively at one of the Company's production sites.</p>	
							</div>
					  	</div>
						<hr>
						<div class="container" style="display: flex; background:#e4e4e4; border-radius: 5px;">
							<div class="certificate" >
						  	<a href="https://www.kdts.kz/en/wp-content/uploads/2024/11/Sertifikat-ISO-14001-ANGLyaz.pdf"><img src="https://www.kdts.kz/en/wp-content/uploads/2024/11/14001en.png" alt="Сертификат" style="width:250%; max-width:none;"></a>
							</div>
							<div class="text" style="padding:10px 15px 15px 131px;">
								<p style="font-size:20px;"> We aim to continually develop our services and to meet high standards of quality, environmental, health and safety in the delivery of our services.</p>	
								<p style="font-size:20px;"> In 2021, based on the results of the certification audit, the Company confirmed the compliance of its management systems (Quality Management System (QMS), Environmental Management System (EMS), Occupational Health and Safety Management System (OHSMS) with the requirements of international standards.</p>	
								<p style="font-size:20px;"> In 2024, the Company once again successfully passed a surveillance audit conducted by TÜV Rheinland Kazakhstan LLP, which is the exclusive representative of TÜV Rheinland in the countries of the Eurasian Economic Union. The audit results confirmed the compliance of the Company's integrated management system with the requirements of international standards ISO 9001:2015, ISO 14001:2015, ISO 45001:2018. The effectiveness of management systems is audited by external auditors annually on a mandatory basis at the central office and selectively at one of the Company's production sites.</p>	
							</div>
					  	</div>
						<hr>-->
						<div class="container" style="display: flex; background:#e4e4e4; border-radius: 5px;">
							<div class="certificate" >
							<a href="https://www.kdts.kz/en/wp-content/uploads/2024/11/Sertifikat-ISO-9001-ANGLyaz.pdf"><img src="https://www.kdts.kz/en/wp-content/uploads/2024/11/9007en.png" alt="Сертификат" style="width:270%; max-width:none;"></a><br>
							<a href="https://www.kdts.kz/en/wp-content/uploads/2024/11/Sertifikat-ISO-14001-ANGLyaz.pdf"><img src="https://www.kdts.kz/en/wp-content/uploads/2024/11/14001en.png" alt="Сертификат" style="width:270%; max-width:none;"></a><br>
						  	<a href="https://www.kdts.kz/en/wp-content/uploads/2024/11/Sertifikat-ISO-45001-ANGLyaz.pdf"><img src="https://www.kdts.kz/en/wp-content/uploads/2024/11/45001en.png" alt="Сертификат" style="width:270%; max-width:none;"></a>
							</div>
							<div class="text" style="padding:10px 15px 15px 131px;">
								<p style="font-size:20px;"> We aim to continually develop our services and to meet high standards of quality, environmental, health and safety in the delivery of our services.</p>	
								<p style="font-size:20px; padding-top:230px;"> In 2021, based on the results of the certification audit, the Company confirmed the compliance of its management systems (Quality Management System (QMS), Environmental Management System (EMS), Occupational Health and Safety Management System (OHSMS) with the requirements of international standards.</p>	
								<p style="font-size:20px; padding-top:190px;"> In 2024, the Company once again successfully passed a surveillance audit conducted by TÜV Rheinland Kazakhstan LLP, which is the exclusive representative of TÜV Rheinland in the countries of the Eurasian Economic Union. The audit results confirmed the compliance of the Company's integrated management system with the requirements of international standards ISO 9001:2015, ISO 14001:2015, ISO 45001:2018. The effectiveness of management systems is audited by external auditors annually on a mandatory basis at the central office and selectively at one of the Company's production sites.</p>	
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
