
<?php
 /*
 * Template name: osobomu
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
                <li class="yazyk-active"><a href="<? echo home_url('/zakupki/tenders/osobomu/', 'https') ?>"> Рус</a></li>
                <li><a href="https://www.kdts.kz/satyp-alul/tender/baga-usynystary/">Қаз</a></li>
                <li><a href="https://www.kdts.kz/en/zakupki/tenders/osobomu/">Eng</a></li>
            </ul>
		</div>
    </div>
	<main class="container-rukovodstvo">
		<section class="zakupki-navbar">
			<?php include "zakup-menu.php" ?>
		</section> <!-- rukovodstvo-navbar / -->
		 <section class="zakupki-content">
				<h1 class="partnery-title">
				Закупки по особому порядку

				</h1>
				<div class="zakupki-items">

					<div class="zakupki-item">
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
						$post_id = 263;
							$posts = get_posts( array(
							'numberposts' => 60,
							'order'       => 'DESC',
							'include'     => array(),
							'exclude'     => array(),
							'meta_key'    => '',
							'meta_value'  =>'',
							'post_type'   => 'osobomu',
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

							<?php } ?>
							
						
					</div>
				</div>



			</section> <!-- rukovodstvo-content / -->     
	</main>
 		
<?php get_footer(); ?>



