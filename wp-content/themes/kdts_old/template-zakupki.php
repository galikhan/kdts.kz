<?php
 /*
 * Template name: zakupki
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
                <li class="yazyk-active"><a href="<? echo home_url('/satyp-alul/tender/', 'https') ?>">Қаз</a></li>
                <li><a href="<? echo home_url('/ru/zakupki/tenders/', 'https') ?>">Рус</a></li>
                <li><a href="<? echo home_url('/en/zakupki/tenders/', 'https') ?>">Eng</a></li>
            </ul>
		</div>
    </div>
 	<main class="container-rukovodstvo">
        <section class="zakupki-navbar">
          	<?php include "zakup-menu.php" ?>
        </section> <!-- rukovodstvo-navbar / -->
          <section class="zakupki-content">
            <h1 class="partnery-title">
                <?php the_title(); ?>
            </h1>
            <div class="zakupki-items">
				
				  <div class="zakupki-item">
                    <h2 class="zakupki-item__title"> Баға ұсыныстарын сұрату тәсілімен </h2>
               
                    <div class="zakupki-head">
                        <div class="zakupki-name">
                            Атауы
                        </div>
                        <div class="zakupki-nachalo">
                            Басталуы
                        </div>
                        <div class="zakupki-okonchanie">
                            Аяқталуы
                        </div>
                    </div> <!-- zakupki-head / -->
                        <?
						$post_id = get_the_ID();
							$posts = get_posts( array(
							'numberposts' => 6,
							'category'    => -$post_id,
							'order'       => 'DESC',
							'include'     => array(),
							'exclude'     => array(),
							'meta_key'    => '',
							'meta_value'  =>'',
							'post_type'   => 'tsenovykh',
							'suppress_filters' => true, 
							)); 
						?>
				<?
					foreach( $posts as $post ){
						setup_postdata($post); ?>
				
         				<div class="zakupki-body">
							 <a href="<?php the_permalink(); ?>">
							<div class="zakupki-body__name">
								<?php the_title(); ?>
							</div>
							<div class="zakupki-body__nachalo">
								<? echo CFS()->get('data-nachalo'); ?>
							</div>
							<div class="zakupki-body__okonchanie">
								<? echo CFS()->get('data-okonchanie'); ?>
							</div>
							 </a>		 
						</div> <!-- zakupki-body / -->
       <? } ?>
        
                    
                    <p class="vse-zakupki">
						<a href="<? echo home_url('/satyp-alul/tender/baga-usynystary', 'https') ?>"> 
							Барлық сатып алуларды көрсету
						</a>
                    </p>
                </div>
              
                <div class="zakupki-item">
                    <h2 class="zakupki-item__title"> Бір көзден алу тәсілімен </h2>
               
                    <div class="zakupki-head">
                        <div class="zakupki-name">
                            Атауы
                        </div>
                        <div class="zakupki-nachalo">
                            Басталуы
                        </div>
                        <div class="zakupki-okonchanie">
                            Аяқталуы
                        </div>
                    </div> <!-- zakupki-head / -->
		
                   <?
						$post_id = get_the_ID();
							$posts = get_posts( array(
							'numberposts' => 6,
							'category'    => -$post_id,
							'order'       => 'DESC',
							'include'     => array(),
							'exclude'     => array(),
							'meta_key'    => '',
							'meta_value'  =>'',
							'post_type'   => 'odnogo',
							'suppress_filters' => true, 
							)); 
						?>
				<?
					foreach( $posts as $post ){
						setup_postdata($post); ?>
				
         				<div class="zakupki-body">
							 <a href="<?php the_permalink(); ?>">
							<div class="zakupki-body__name">
								<?php the_title(); ?>
							</div>
							<div class="zakupki-body__nachalo">
								<? echo CFS()->get('data-nachalo'); ?>
							</div>
							<div class="zakupki-body__okonchanie">
								<? echo CFS()->get('data-okonchanie'); ?>
							</div>
							 </a>		 
						</div> <!-- zakupki-body / -->
       <? } ?>
        
                    
                    <p class="vse-zakupki">
						<a href="<? echo home_url('/satyp-alul/tender/bir-kozden-alu', 'https') ?>"> 
							Барлық сатып алуларды көрсету
						</a>
                    </p>
                </div>
                
                <div class="zakupki-item">
                    <h2 class="zakupki-item__title">Ашық тендер тәсілімен</h2>
               
                    <div class="zakupki-head">
                        <div class="zakupki-name">
                            Атауы
                        </div>
                        <div class="zakupki-nachalo">
                            Басталуы
                        </div>
                        <div class="zakupki-okonchanie">
                            Аяқталуы
                        </div>
                    </div> <!-- zakupki-head / -->
                   
					<?
						$post_id = get_the_ID();
							$posts = get_posts( array(
							'numberposts' => 6,
							'category'    => -$post_id,
							'order'       => 'DESC',
							'include'     => array(),
							'exclude'     => array(),
							'meta_key'    => '',
							'meta_value'  =>'',
							'post_type'   => 'otkrytogo',
							'suppress_filters' => true, 
							)); 
						?>
				<?
					foreach( $posts as $post ){
						setup_postdata($post); ?>
				
         				<div class="zakupki-body">
							 <a href="<?php the_permalink(); ?>">
							<div class="zakupki-body__name">
								<?php the_title(); ?>
							</div>
							<div class="zakupki-body__nachalo">
								<? echo CFS()->get('data-nachalo'); ?>
							</div>
							<div class="zakupki-body__okonchanie">
								<? echo CFS()->get('data-okonchanie'); ?>
							</div>
							 </a>		 
						</div> <!-- zakupki-body / -->
       <? } ?>
					
					
                    <p class="vse-zakupki">
                       <a href="<? echo home_url('/satyp-alul/tender/ashyk-tender-tasilimen', 'https') ?>"> 
							Барлық сатып алуларды көрсету
						</a>
                    </p>
                </div>
            </div>
        </section> <!-- rukovodstvo-content / -->  
    </main>
<?php get_footer(); ?>