<?php

/**
  *  Dequeues other Google Maps JS from the Widgets page
  *  and the New/Edit Post page (for shortcode builder)
  *
  */
  
add_action( 'admin_enqueue_scripts', 'wordimpress_deenqueue_gmaps_widgets', 100 );

function wordimpress_deenqueue_gmaps_widgets($hook){
    
    if( $hook == 'widgets.php' || $hook == 'edit.php' || $hook == 'post-new.php' ) {
        wp_dequeue_script( 'admin-google-maps-script' );
    }
}