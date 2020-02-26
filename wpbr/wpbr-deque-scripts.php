<?php

/**
 *  Dequeue The WPBR style on a single admin page. 
 *  This snippet specifically removes it from the WPML String Translation admin pages, where it causes a conflict. 
 *
 **/
 
function wpbr_dequeue_style() {
	global $pagenow;
	
	// uncomment the next line during testing to see the value of the current page
	// var_dump($_GET['page']);
	
	if( in_array( $pagenow, array('admin.php') ) && ( $_GET['page'] == 'wpml-string-translation/menu/string-translation.php' ) ) {
    	wp_dequeue_style( 'wpbr-admin-main-styles' );
    }
}
add_action( 'admin_enqueue_scripts', 'wpbr_dequeue_style', 100 );
