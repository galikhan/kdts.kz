<?php
/*
 * Template name: filialy-i-predstavitelstv
 */
?>
<?php get_header(); ?>
<?php include "template-breadcrumbs.php" ?>
<main>
    <div class="filialy-container">
        <div class="rukovodstvo-top">
            <section class="rukovodstvo-navbar">
                <a href="<? echo home_url('/kompaniya-turaly', 'https') ?>" class="rukovodstvo-navbar__title">
                  Компания туралы
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
            <img src="<?php echo get_template_directory_uri(); ?>/img/mapsnoname.png" class="filMap" alt="#" />
        </section> <!-- rukovodstvo-content / -->
    </div>
</div>
<section class="filialy">
    <div class="dell-container">
        <div class="filialy-items">
            <div class="filialy-item">
                <p class="filialy-item__title">
                    <? echo CFS()->get('text1'); ?>
                </p>
                <div class="filialy-item__info">
                    <div class="filialy-item__inner">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/filialyAddress.svg" class="filialy-item__icon" alt="#" />
                        <p class="filialy-item__p">
                         <? echo CFS()->get('text2'); ?>
                     </p>
                 </div>
                 <div class="filialy-item__inner">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/filialyTel.svg" class="filialy-item__icon" alt="#" />
                    <p class="filialy-item__p">
                     <? echo CFS()->get('text3'); ?> <br />
                     <? echo CFS()->get('text4'); ?>
                 </p>
             </div>
             <div class="filialy-item__inner">
                <img src="<?php echo get_template_directory_uri(); ?>/img/filialyEmail.svg" class="filialy-item__icon" alt="#" />
                <p class="filialy-item__p">
                    <? echo CFS()->get('email1'); ?>
                </p>
            </div>
            <? if (CFS()->get('code1')!=''){ ?>
                <div class="filialy-item__inner">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/filialycode.png" class="filialy-item__icon" alt="#" />
                    <p class="filialy-item__p">
                        <? echo CFS()->get('code1'); ?>
                    </p>
                </div>
            <? } ?>
        </div>
    </div> <!-- filialy-item / -->
    <div class="filialy-item filialy-item__rigth">
        <p class="filialy-item__title">
            <? echo CFS()->get('text5'); ?>
        </p>
        <div class="filialy-item__info">
            <div class="filialy-item__inner">
                <img src="<?php echo get_template_directory_uri(); ?>/img/filialyAddress.svg" class="filialy-item__icon" alt="#" />
                <p class="filialy-item__p">
                 <? echo CFS()->get('text6'); ?>
             </p>
         </div>
         <div class="filialy-item__inner">
            <img src="<?php echo get_template_directory_uri(); ?>/img/filialyTel.svg" class="filialy-item__icon" alt="#" />
            <p class="filialy-item__p">
             <? echo CFS()->get('text7'); ?> <br />
             <? echo CFS()->get('text8'); ?>
         </p>
     </div>
     <div class="filialy-item__inner">
        <img src="<?php echo get_template_directory_uri(); ?>/img/filialyEmail.svg" class="filialy-item__icon" alt="#" />
        <p class="filialy-item__p">
            <? echo CFS()->get('email2'); ?>
        </p>
    </div>
    <? if (CFS()->get('code2')!=''){ ?>
        <div class="filialy-item__inner">
            <img src="<?php echo get_template_directory_uri(); ?>/img/filialycode.png" class="filialy-item__icon" alt="#" />
            <p class="filialy-item__p">
                <? echo CFS()->get('code2'); ?>
            </p>
        </div>
    <? } ?>
</div>
</div>  <!-- filialy-item / -->
<div class="filialy-item">
    <p class="filialy-item__title">
        <? echo CFS()->get('text9'); ?>
    </p>
    <div class="filialy-item__info">
        <div class="filialy-item__inner">
            <img src="<?php echo get_template_directory_uri(); ?>/img/filialyAddress.svg" class="filialy-item__icon" alt="#" />
            <p class="filialy-item__p">
                <? echo CFS()->get('text10'); ?>
            </p>
        </div>
        <div class="filialy-item__inner">
            <img src="<?php echo get_template_directory_uri(); ?>/img/filialyTel.svg" class="filialy-item__icon" alt="#" />
            <p class="filialy-item__p">
             <? echo CFS()->get('text11'); ?> <br />
             <? echo CFS()->get('text12'); ?>
         </p>
     </div>
     <div class="filialy-item__inner">
        <img src="<?php echo get_template_directory_uri(); ?>/img/filialyEmail.svg" class="filialy-item__icon" alt="#" />
        <p class="filialy-item__p">
            <? echo CFS()->get('email3'); ?>
        </p>
    </div>
    <? if (CFS()->get('code3')!=''){ ?>
        <div class="filialy-item__inner">
            <img src="<?php echo get_template_directory_uri(); ?>/img/filialycode.png" class="filialy-item__icon" alt="#" />
            <p class="filialy-item__p">
                <? echo CFS()->get('code3'); ?>
            </p>
        </div>
    <? } ?>
</div>
</div> <!-- filialy-item / -->
<div class="filialy-item filialy-item__rigth">
    <p class="filialy-item__title">
     <? echo CFS()->get('text13'); ?>
 </p>
 <div class="filialy-item__info">
    <div class="filialy-item__inner">
        <img src="<?php echo get_template_directory_uri(); ?>/img/filialyAddress.svg" class="filialy-item__icon" alt="#" />
        <p class="filialy-item__p">
            <? echo CFS()->get('text14'); ?>
        </p>
    </div>


    <div class="filialy-item__inner">
        <img src="<?php echo get_template_directory_uri(); ?>/img/filialyTel.svg" class="filialy-item__icon" alt="#" />
        <p class="filialy-item__p">
           <?php
           $fields = CFS()->get('loop-tel4');
           if (!empty($fields)):
            foreach ($fields as $field) {
               ?>
               <? echo $field["nomer4"] ?> <br />
               <?php
           };
       endif;
       ?>
   </p>

</div>





<div class="filialy-item__inner">
    <img src="<?php echo get_template_directory_uri(); ?>/img/filialyEmail.svg" class="filialy-item__icon" alt="#" />
    <p class="filialy-item__p">
        <? echo CFS()->get('email4'); ?>
    </p>
</div>
<? if (CFS()->get('code4')!=''){ ?>
    <div class="filialy-item__inner">
        <img src="<?php echo get_template_directory_uri(); ?>/img/filialycode.png" class="filialy-item__icon" alt="#" />
        <p class="filialy-item__p">
            <? echo CFS()->get('code4'); ?>
        </p>
    </div>
<? } ?>
</div>
</div>  <!-- filialy-item / -->
<div class="filialy-item">
    <p class="filialy-item__title">
        <? echo CFS()->get('text17'); ?>
    </p>
    <div class="filialy-item__info">
        <div class="filialy-item__inner">
            <img src="<?php echo get_template_directory_uri(); ?>/img/filialyAddress.svg" class="filialy-item__icon" alt="#" />
            <p class="filialy-item__p">
                <? echo CFS()->get('text18'); ?>
            </p>
        </div>
        <div class="filialy-item__inner">
           <img src="<?php echo get_template_directory_uri(); ?>/img/filialyTel.svg" class="filialy-item__icon" alt="#" />
           <p class="filialy-item__p">
             <?php
             $fields = CFS()->get('loop-tel5');
             if (!empty($fields)):
               foreach ($fields as $field) {
                  ?>
                  <? echo $field["nomer5"] ?> <br />
                  <?php
              };
          endif;
          ?>
      </p>
  </div>
  <div class="filialy-item__inner">
    <img src="<?php echo get_template_directory_uri(); ?>/img/filialyEmail.svg" class="filialy-item__icon" alt="#" />
    <p class="filialy-item__p">
        <? echo CFS()->get('email5'); ?>
    </p>
</div>
<? if (CFS()->get('code5')!=''){ ?>
    <div class="filialy-item__inner">
        <img src="<?php echo get_template_directory_uri(); ?>/img/filialycode.png" class="filialy-item__icon" alt="#" />
        <p class="filialy-item__p">
            <? echo CFS()->get('code5'); ?>
        </p>
    </div>
<? } ?>
</div>
</div>  <!-- filialy-item / -->
<div class="filialy-item filialy-item__rigth">
    <p class="filialy-item__title">
        <? echo CFS()->get('text21'); ?>
    </p>
    <div class="filialy-item__info">
        <div class="filialy-item__inner">
            <img src="<?php echo get_template_directory_uri(); ?>/img/filialyAddress.svg" class="filialy-item__icon" alt="#" />
            <p class="filialy-item__p">
                <? echo CFS()->get('text22'); ?>
            </p>
        </div>
        <div class="filialy-item__inner">
            <img src="<?php echo get_template_directory_uri(); ?>/img/filialyTel.svg" class="filialy-item__icon" alt="#" />
            <p class="filialy-item__p">
             <? echo CFS()->get('text23'); ?> <br />
             <? echo CFS()->get('text24'); ?>
         </p>
     </div>
     <div class="filialy-item__inner">
        <img src="<?php echo get_template_directory_uri(); ?>/img/filialyEmail.svg" class="filialy-item__icon" alt="#" />
        <p class="filialy-item__p">
            <? echo CFS()->get('email6'); ?>
        </p>
    </div>
    <? if (CFS()->get('code6')!=''){ ?>
        <div class="filialy-item__inner">
            <img src="<?php echo get_template_directory_uri(); ?>/img/filialycode.png" class="filialy-item__icon" alt="#" />
            <p class="filialy-item__p">
                <? echo CFS()->get('code6'); ?>
            </p>
        </div>
    <? } ?>
</div>
</div>  <!-- filialy-item / -->

<div class="filialy-item">
    <p class="filialy-item__title">
        <? echo CFS()->get('text25'); ?>
    </p>
    <div class="filialy-item__info">
        <div class="filialy-item__inner">
            <img src="<?php echo get_template_directory_uri(); ?>/img/filialyAddress.svg" class="filialy-item__icon" alt="#" />
            <p class="filialy-item__p">
                <? echo CFS()->get('text26'); ?>
            </p>
        </div>
        <div class="filialy-item__inner">
            <img src="<?php echo get_template_directory_uri(); ?>/img/filialyTel.svg" class="filialy-item__icon" alt="#" />
            <p class="filialy-item__p">
             <? echo CFS()->get('text27'); ?> <br />
             <? echo CFS()->get('text28'); ?>
         </p>
     </div>
     <div class="filialy-item__inner">
        <img src="<?php echo get_template_directory_uri(); ?>/img/filialyEmail.svg" class="filialy-item__icon" alt="#" />
        <p class="filialy-item__p">
            <? echo CFS()->get('email7'); ?>
        </p>
    </div>
    <? if (CFS()->get('code7')!=''){ ?>
        <div class="filialy-item__inner">
            <img src="<?php echo get_template_directory_uri(); ?>/img/filialycode.png" class="filialy-item__icon" alt="#" />
            <p class="filialy-item__p">
                <? echo CFS()->get('code7'); ?>
            </p>
        </div>
    <? } ?>
</div>
</div>  <!-- filialy-item / -->

<div class="filialy-item filialy-item__rigth">
    <p class="filialy-item__title">
     <? echo CFS()->get('text29'); ?>
 </p>
 <div class="filialy-item__info">
    <div class="filialy-item__inner">
        <img src="<?php echo get_template_directory_uri(); ?>/img/filialyAddress.svg" class="filialy-item__icon" alt="#" />
        <p class="filialy-item__p">
            <? echo CFS()->get('text30'); ?>
        </p>
    </div>
    <div class="filialy-item__inner">
        <img src="<?php echo get_template_directory_uri(); ?>/img/filialyTel.svg" class="filialy-item__icon" alt="#" />
        <p class="filialy-item__p">
         <? echo CFS()->get('text31'); ?> <br />
         <? echo CFS()->get('text32'); ?>
     </p>
 </div>
 <div class="filialy-item__inner">
    <img src="<?php echo get_template_directory_uri(); ?>/img/filialyEmail.svg" class="filialy-item__icon" alt="#" />
    <p class="filialy-item__p">
        <? echo CFS()->get('email8'); ?>
    </p>
</div>
<? if (CFS()->get('code8')!=''){ ?>
    <div class="filialy-item__inner">
        <img src="<?php echo get_template_directory_uri(); ?>/img/filialycode.png" class="filialy-item__icon" alt="#" />
        <p class="filialy-item__p">
            <? echo CFS()->get('code8'); ?>
        </p>
    </div>
<? } ?>
</div>
</div>  <!-- filialy-item / -->
<div class="filialy-item">
    <p class="filialy-item__title">
        <? echo CFS()->get('text33'); ?>
    </p>
    <div class="filialy-item__info">
        <div class="filialy-item__inner">
            <img src="<?php echo get_template_directory_uri(); ?>/img/filialyAddress.svg" class="filialy-item__icon" alt="#" />
            <p class="filialy-item__p">
                <? echo CFS()->get('text34'); ?>
            </p>
        </div>
        <div class="filialy-item__inner">
            <img src="<?php echo get_template_directory_uri(); ?>/img/filialyTel.svg" class="filialy-item__icon" alt="#" />
            <p class="filialy-item__p">
             <? echo CFS()->get('text35'); ?> <br />
             <? echo CFS()->get('text36'); ?>
         </p>
     </div>
     <div class="filialy-item__inner">
        <img src="<?php echo get_template_directory_uri(); ?>/img/filialyEmail.svg" class="filialy-item__icon" alt="#" />
        <p class="filialy-item__p">
            <? echo CFS()->get('email9'); ?>
        </p>
    </div>
    <? if (CFS()->get('code9')!=''){ ?>
        <div class="filialy-item__inner">
            <img src="<?php echo get_template_directory_uri(); ?>/img/filialycode.png" class="filialy-item__icon" alt="#" />
            <p class="filialy-item__p">
                <? echo CFS()->get('code9'); ?>
            </p>
        </div>
    <? } ?>
</div>
</div>  <!-- filialy-item / -->
<div class="filialy-item filialy-item__rigth">
    <p class="filialy-item__title">
        <? echo CFS()->get('text37'); ?>
    </p>
    <div class="filialy-item__info">
        <div class="filialy-item__inner">
            <img src="<?php echo get_template_directory_uri(); ?>/img/filialyAddress.svg" class="filialy-item__icon" alt="#" />
            <p class="filialy-item__p">
             <? echo CFS()->get('text40'); ?>
         </p>
     </div>
     <div class="filialy-item__inner">
        <img src="<?php echo get_template_directory_uri(); ?>/img/filialyTel.svg" class="filialy-item__icon" alt="#" />
        <p class="filialy-item__p">
         <? echo CFS()->get('text38'); ?> <br />
         <? echo CFS()->get('text39'); ?>
     </p>
 </div>
 <div class="filialy-item__inner">
    <img src="<?php echo get_template_directory_uri(); ?>/img/filialyEmail.svg" class="filialy-item__icon" alt="#" />
    <p class="filialy-item__p">
     <? echo CFS()->get('email10'); ?>
 </p>
</div>
<? if (CFS()->get('code10')!=''){ ?>
    <div class="filialy-item__inner">
        <img src="<?php echo get_template_directory_uri(); ?>/img/filialycode.png" class="filialy-item__icon" alt="#" />
        <p class="filialy-item__p">
            <? echo CFS()->get('code10'); ?>
        </p>
    </div>
<? } ?>
</div>
</div>  <!-- filialy-item / -->
<div class="filialy-item">
    <p class="filialy-item__title">
        <? echo CFS()->get('text41'); ?>
    </p>
    <div class="filialy-item__info">
        <div class="filialy-item__inner">
            <img src="<?php echo get_template_directory_uri(); ?>/img/filialyAddress.svg" class="filialy-item__icon" alt="#" />
            <p class="filialy-item__p">
                <? echo CFS()->get('text42'); ?>
            </p>
        </div>
        <div class="filialy-item__inner">
            <img src="<?php echo get_template_directory_uri(); ?>/img/filialyTel.svg" class="filialy-item__icon" alt="#" />
            <p class="filialy-item__p">
             <? echo CFS()->get('text43'); ?> <br />
             <? echo CFS()->get('text44'); ?>
         </p>
     </div>
     <div class="filialy-item__inner">
        <img src="<?php echo get_template_directory_uri(); ?>/img/filialyEmail.svg" class="filialy-item__icon" alt="#" />
        <p class="filialy-item__p">
            <? echo CFS()->get('email11'); ?>
        </p>
    </div>
    <? if (CFS()->get('code11')!=''){ ?>
        <div class="filialy-item__inner">
            <img src="<?php echo get_template_directory_uri(); ?>/img/filialycode.png" class="filialy-item__icon" alt="#" />
            <p class="filialy-item__p">
                <? echo CFS()->get('code11'); ?>
            </p>
        </div>
    <? } ?>
</div>
</div>  <!-- filialy-item / -->
<div class="filialy-item filialy-item__rigth">
    <p class="filialy-item__title">
        <? echo CFS()->get('text45'); ?>
    </p>
    <div class="filialy-item__info">
        <div class="filialy-item__inner">
            <img src="<?php echo get_template_directory_uri(); ?>/img/filialyAddress.svg" class="filialy-item__icon" alt="#" />
            <p class="filialy-item__p">
                <? echo CFS()->get('text46'); ?>
            </p>
        </div>
        <div class="filialy-item__inner">
            <img src="<?php echo get_template_directory_uri(); ?>/img/filialyTel.svg" class="filialy-item__icon" alt="#" />
            <p class="filialy-item__p">
             <? echo CFS()->get('text47'); ?> <br />
             <? echo CFS()->get('text48'); ?>
         </p>
     </div>
     <div class="filialy-item__inner">
        <img src="<?php echo get_template_directory_uri(); ?>/img/filialyEmail.svg" class="filialy-item__icon" alt="#" />
        <p class="filialy-item__p">
            <? echo CFS()->get('email12'); ?>
        </p>
    </div>
    <? if (CFS()->get('code12')!=''){ ?>
        <div class="filialy-item__inner">
            <img src="<?php echo get_template_directory_uri(); ?>/img/filialycode.png" class="filialy-item__icon" alt="#" />
            <p class="filialy-item__p">
                <? echo CFS()->get('code12'); ?>
            </p>
        </div>
    <? } ?>
</div>
</div>  <!-- filialy-item / -->
<div class="filialy-item">
    <p class="filialy-item__title">
        <? echo CFS()->get('text49'); ?>
    </p>
    <div class="filialy-item__info">
        <div class="filialy-item__inner">
            <img src="<?php echo get_template_directory_uri(); ?>/img/filialyAddress.svg" class="filialy-item__icon" alt="#" />
            <p class="filialy-item__p">
                <? echo CFS()->get('text50'); ?>
            </p>
        </div>
        <div class="filialy-item__inner">
            <img src="<?php echo get_template_directory_uri(); ?>/img/filialyTel.svg" class="filialy-item__icon" alt="#" />
            <p class="filialy-item__p">
             <? echo CFS()->get('text51'); ?> <br />
             <? echo CFS()->get('text52'); ?>
         </p>
     </div>
     <div class="filialy-item__inner">
        <img src="<?php echo get_template_directory_uri(); ?>/img/filialyEmail.svg" class="filialy-item__icon" alt="#" />
        <p class="filialy-item__p">
            <? echo CFS()->get('email13'); ?>
        </p>
    </div>
    <? if (CFS()->get('code13')!=''){ ?>
        <div class="filialy-item__inner">
            <img src="<?php echo get_template_directory_uri(); ?>/img/filialycode.png" class="filialy-item__icon" alt="#" />
            <p class="filialy-item__p">
                <? echo CFS()->get('code13'); ?>
            </p>
        </div>
    <? } ?>
</div>
</div>  <!-- filialy-item / -->
<div class="filialy-item filialy-item__rigth">
    <p class="filialy-item__title">
        <? echo CFS()->get('text53'); ?>
    </p>
    <div class="filialy-item__info">
        <div class="filialy-item__inner">
            <img src="<?php echo get_template_directory_uri(); ?>/img/filialyAddress.svg" class="filialy-item__icon" alt="#" />
            <p class="filialy-item__p">
                <? echo CFS()->get('text54'); ?>
            </p>
        </div>
        <div class="filialy-item__inner">
            <img src="<?php echo get_template_directory_uri(); ?>/img/filialyTel.svg" class="filialy-item__icon" alt="#" />
            <p class="filialy-item__p">
             <? echo CFS()->get('text55'); ?> <br />
             <? echo CFS()->get('text56'); ?>
         </p>
     </div>
     <div class="filialy-item__inner">
        <img src="<?php echo get_template_directory_uri(); ?>/img/filialyEmail.svg" class="filialy-item__icon" alt="#" />
        <p class="filialy-item__p">
            <? echo CFS()->get('email14'); ?>
        </p>
    </div>
    <? if (CFS()->get('code14')!=''){ ?>
        <div class="filialy-item__inner">
            <img src="<?php echo get_template_directory_uri(); ?>/img/filialycode.png" class="filialy-item__icon" alt="#" />
            <p class="filialy-item__p">
                <? echo CFS()->get('code14'); ?>
            </p>
        </div>
    <? } ?>
</div>
</div>  <!-- filialy-item / -->
<div class="filialy-item">
    <p class="filialy-item__title">
        <? echo CFS()->get('text57'); ?>
    </p>
    <div class="filialy-item__info">
        <div class="filialy-item__inner">
            <img src="<?php echo get_template_directory_uri(); ?>/img/filialyAddress.svg" class="filialy-item__icon" alt="#" />
            <p class="filialy-item__p">
             <? echo CFS()->get('text58'); ?>
         </p>
     </div>
     <div class="filialy-item__inner">
        <img src="<?php echo get_template_directory_uri(); ?>/img/filialyTel.svg" class="filialy-item__icon" alt="#" />
        <p class="filialy-item__p">
         <? echo CFS()->get('text59'); ?> <br />
         <? echo CFS()->get('text60'); ?>
     </p>
 </div>
 <div class="filialy-item__inner">
    <img src="<?php echo get_template_directory_uri(); ?>/img/filialyEmail.svg" class="filialy-item__icon" alt="#" />
    <p class="filialy-item__p">
        <? echo CFS()->get('email15'); ?>
    </p>
</div>
<? if (CFS()->get('code15')!=''){ ?>
    <div class="filialy-item__inner">
        <img src="<?php echo get_template_directory_uri(); ?>/img/filialycode.png" class="filialy-item__icon" alt="#" />
        <p class="filialy-item__p">
            <? echo CFS()->get('code15'); ?>
        </p>
    </div>
<? } ?>
</div>
</div>  <!-- filialy-item / -->
<div class="filialy-item filialy-item__rigth">
   <p class="filialy-item__title">
    <? echo CFS()->get('text61'); ?>
</p>
<div class="filialy-item__info">
    <div class="filialy-item__inner">
        <img src="<?php echo get_template_directory_uri(); ?>/img/filialyAddress.svg" class="filialy-item__icon" alt="#" />
        <p class="filialy-item__p">
            <? echo CFS()->get('text62'); ?>
        </p>
    </div>
    <div class="filialy-item__inner">
        <img src="<?php echo get_template_directory_uri(); ?>/img/filialyTel.svg" class="filialy-item__icon" alt="#" />
        <p class="filialy-item__p">
         <? echo CFS()->get('text63'); ?> <br />
         <? echo CFS()->get('text64'); ?>
     </p>
 </div>
 <div class="filialy-item__inner">
    <img src="<?php echo get_template_directory_uri(); ?>/img/filialyEmail.svg" class="filialy-item__icon" alt="#" />
    <p class="filialy-item__p">
        <? echo CFS()->get('email16'); ?>
    </p>
</div>
<? if (CFS()->get('code16')!=''){ ?>
    <div class="filialy-item__inner">
        <img src="<?php echo get_template_directory_uri(); ?>/img/filialycode.png" class="filialy-item__icon" alt="#" />
        <p class="filialy-item__p">
            <? echo CFS()->get('code16'); ?>
        </p>
    </div>
<? } ?>
</div>
</div>  <!-- filialy-item / -->
<div class="filialy-item">
    <p class="filialy-item__title">
        <? echo CFS()->get('name17'); ?>
    </p>
    <div class="filialy-item__info">
        <div class="filialy-item__inner">
            <img src="<?php echo get_template_directory_uri(); ?>/img/filialyAddress.svg" class="filialy-item__icon" alt="#" />
            <p class="filialy-item__p">
             <? echo CFS()->get('adr17'); ?>
         </p>
     </div>
     <div class="filialy-item__inner">
        <img src="<?php echo get_template_directory_uri(); ?>/img/filialyTel.svg" class="filialy-item__icon" alt="#" />
        <p class="filialy-item__p">
            <? echo CFS()->get('phone17_1'); ?> <br />
            <? echo CFS()->get('phone17_2'); ?>
        </p>
    </div>
    <div class="filialy-item__inner">
        <img src="<?php echo get_template_directory_uri(); ?>/img/filialyEmail.svg" class="filialy-item__icon" alt="#" />
        <p class="filialy-item__p">
            <? echo CFS()->get('email17'); ?>
        </p>
    </div>
    <? if (CFS()->get('code17')!=''){ ?>
        <div class="filialy-item__inner">
            <img src="<?php echo get_template_directory_uri(); ?>/img/filialycode.png" class="filialy-item__icon" alt="#" />
            <p class="filialy-item__p">
                <? echo CFS()->get('code17'); ?>
            </p>
        </div>
    <? } ?>
</div>
</div>  <!-- filialy-item / -->
<div class="filialy-item filialy-item__rigth">
   <p class="filialy-item__title">
    <? echo CFS()->get('name18'); ?>
</p>
<div class="filialy-item__info">
    <div class="filialy-item__inner">
        <img src="<?php echo get_template_directory_uri(); ?>/img/filialyAddress.svg" class="filialy-item__icon" alt="#" />
        <p class="filialy-item__p">
            <? echo CFS()->get('adr18'); ?>
        </p>
    </div>
    <div class="filialy-item__inner">
        <img src="<?php echo get_template_directory_uri(); ?>/img/filialyTel.svg" class="filialy-item__icon" alt="#" />
        <p class="filialy-item__p">
            <? echo CFS()->get('phone18_1'); ?> <br />
            <? echo CFS()->get('phone18_2'); ?>
        </p>
    </div>
    <div class="filialy-item__inner">
        <img src="<?php echo get_template_directory_uri(); ?>/img/filialyEmail.svg" class="filialy-item__icon" alt="#" />
        <p class="filialy-item__p">
            <? echo CFS()->get('email18'); ?>
        </p>
    </div>
    <? if (CFS()->get('code18')!=''){ ?>
        <div class="filialy-item__inner">
            <img src="<?php echo get_template_directory_uri(); ?>/img/filialycode.png" class="filialy-item__icon" alt="#" />
            <p class="filialy-item__p">
                keden.uz@mail.ru
            </p>
        </div>
    <? } ?>
</div>
</div>  <!-- filialy-item / -->
</div>
</div>
</section>

</main>

<?php get_footer(); ?>