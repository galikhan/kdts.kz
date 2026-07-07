<?php
 /*
 * Template name: arkhivy
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
                <li class="yazyk-active"><a href="<?php echo home_url('/zakupki/arkhivy/', 'https') ?>">Eng</a></li>
                <li><a href="https://kdts.kz/satyp-alul/muragat/">Қаз</a></li>
                <li><a href="https://kdts.kz/ru/zakupki/arkhivy/">Рус</a></li>
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
                    <h2 class="zakupki-item__title"> Способом запроса ценовых предложений </h2>
               
                    <div class="zakupki-head">
                        <div class="zakupki-name">
                            Название
                        </div>
                        <div class="zakupki-nachalo">
                            Начало
                        </div>
                        <div class="zakupki-okonchanie">
                            Окончание
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
							'post_type'   => 'tsenovykhar',
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
								<?php echo CFS()->get('data-nachalo'); ?>
							</div>
							<div class="zakupki-body__okonchanie">
								<?php echo CFS()->get('data-okonchanie'); ?>
							</div>
							 </a>		 
						</div> <!-- zakupki-body / -->
       <?php } ?>
        
                    
                    <p class="vse-zakupki">
						<a href="<?php echo home_url('/zakupki/arkhivy/tsenovykh', 'https') ?>"> 
							Показать все закупки 
						</a>
                    </p>
                </div>
              
                <div class="zakupki-item">
                    <h2 class="zakupki-item__title">Способом из одного источника</h2>
               
                    <div class="zakupki-head">
                        <div class="zakupki-name">
                            Название
                        </div>
                        <div class="zakupki-nachalo">
                            Начало
                        </div>
                        <div class="zakupki-okonchanie">
                            Окончание
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
							'post_type'   => 'odnogoar',
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
								<?php echo CFS()->get('data-nachalo'); ?>
							</div>
							<div class="zakupki-body__okonchanie">
								<?php echo CFS()->get('data-okonchanie'); ?>
							</div>
							 </a>		 
						</div> <!-- zakupki-body / -->
       <?php } ?>
        
                    
                    <p class="vse-zakupki">
						<a href="<?php echo home_url('/zakupki/arkhivy/odnogo-istochnika', 'https') ?>"> 
							Показать все закупки 
						</a>
                    </p>
                </div>
                
                <div class="zakupki-item">
                    <h2 class="zakupki-item__title">Способом открытого тендера</h2>
               
                    <div class="zakupki-head">
                        <div class="zakupki-name">
                            Название
                        </div>
                        <div class="zakupki-nachalo">
                            Начало
                        </div>
                        <div class="zakupki-okonchanie">
                            Окончание
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
							'post_type'   => 'otkrytogoar',
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
								<?php echo CFS()->get('data-nachalo'); ?>
							</div>
							<div class="zakupki-body__okonchanie">
								<?php echo CFS()->get('data-okonchanie'); ?>
							</div>
							 </a>		 
						</div> <!-- zakupki-body / -->
       <?php } ?>
					
					
                    <p class="vse-zakupki">
                       <a href="<?php echo home_url('/zakupki/arkhivy/otkrytogo-tendera', 'https') ?>"> 
							Показать все закупки 
						</a>
                    </p>
                </div>
            </div>
        </section> <!-- rukovodstvo-content / -->   
</main>
 		
<?php get_footer(); ?>