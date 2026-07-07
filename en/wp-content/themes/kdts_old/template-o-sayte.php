<?php
 /*
 * Template name: o-sayte
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
                <li class="yazyk-active"><a href="<? echo home_url('/o-sajte/', 'https') ?>">Eng </a></li>
                <li><a href="https://kdts.kz/sajt-turaly/">Қаз</a></li>
                <li><a href="https://kdts.kz/ru/o-sajte/">Рус</a></li>
            </ul>
		</div>
    </div>

	<main>
        <div class="dell-container">
            <div class="uslugi-peregruza__h1">
                <h1>
                    <?php the_title(); ?>
                </h1>
            </div>
			 <section class="uslugi-peregruza__text">
			   	<?php the_post(); ?>
				<?php the_content() ?>      
			</section>
        </div>
    </main>
<?php get_footer(); ?>







