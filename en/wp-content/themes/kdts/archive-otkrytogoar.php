<?php
/* Procurement list: otkrytogo (archive) */
get_header();
$tl = array( 'pills' => array( 305, 307, 309, 311 ), 'title_id' => 307, 'archive' => true );
include locate_template( 'template-parts/tender-list.php' );
get_footer();
