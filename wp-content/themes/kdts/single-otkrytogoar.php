<?php
/* Single procurement: otkrytogo (archive) */
get_header();
$ts = array( 'method_id' => 307, 'archive' => true );
include locate_template( 'template-parts/tender-single.php' );
get_footer();
