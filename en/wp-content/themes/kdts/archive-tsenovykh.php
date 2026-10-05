<?php
/* Procurement list: tsenovykh */
get_header();
$tl = array( 'pills' => array( 291, 293, 295, 297 ), 'title_id' => 291, 'archive' => false );
include locate_template( 'template-parts/tender-list.php' );
get_footer();
