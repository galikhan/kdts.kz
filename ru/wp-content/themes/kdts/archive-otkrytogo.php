<?php
/* Procurement list: otkrytogo */
get_header();
$tl = array( 'pills' => array( 291, 293, 295, 297, 2394 ), 'title_id' => 293, 'archive' => false );
include locate_template( 'template-parts/tender-list.php' );
get_footer();
