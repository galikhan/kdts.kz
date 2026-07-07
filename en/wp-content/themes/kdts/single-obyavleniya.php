<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package created
 *
 */


?>
<?php get_header(); ?>
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
<main class="novosti">
    <div class="novosti-container">
        <p class="novosti-title">
            <img src="<?php echo get_template_directory_uri(); ?>/img/tLine.svg" class="novosti-title__line" alt="#" /> Announcement
        </p>

        <div class="novosti-wrapper">
            <div class="novosti-left" style="background-color: #fff;">
                <div class="novosti-block">

                   <div class="novosti-block__info">
                    <h1 class="novosti-block__title">
                        <?php the_title(); ?>
                    </h1>
                    <div class="novosti-block__date">
                        <?php echo get_the_date(); ?>
                    </div>
                    <div class="novostiItem-text">
                        <?php the_post(); ?>
                        <?php the_content() ?>
                    </div>
                </div> <!-- novosti-block__info / -->
            </div> <!-- novosti-block / -->
        </div> <!-- novosti-left / -->
        <div class="novosti-right">
           <? $post_id = get_the_ID();
           $posts = get_posts( array(
            'numberposts' => 5,
             'category'    => -$post_id,
             'orderby'     => 'date',
             'order'       => 'DESC',
             'include'     => array(),
             'exclude'     => array(),
             'meta_key'    => '',
             'meta_value'  =>'',
             'post_type'   => 'obyavleniya',
             'suppress_filters' => true,
         )); ?>
           <? foreach( $posts as $post ){
              setup_postdata($post); ?>
              <? if (get_the_ID()!=$post_id){ ?>
                 <div class="novosti-right__item">
                    <a href="<?php the_permalink(); ?>">

                      <p class="novosti-right__head">
                          <?php the_title(); ?>
                      </p>
                      <p style="margin-top: 10px;">
                          <?php the_excerpt(); ?>
                      </p>
                      <p class="novosti-right__open">
                          >>>
                      </p>
                      <p class="novosti-right__data">
                          <?php echo get_the_date(); ?>
                      </p>
                  </a>
              </div> <!-- novosti-item / -->
          <? } ?>
      <? } ?>


  </div> <!-- novosti-right / -->
</div> <!-- novosti-wrapper / -->




</div> <!-- novosti-container / -->
</main>

<?php get_footer(); ?>


