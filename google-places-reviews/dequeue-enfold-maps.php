<?php
/*
 *  GOOGLE PLACES REVIEWS
 *  Dequeues the Enfold Theme's Google Maps Script
 *  but ONLY on the Widget and Edit/New Post screens
 *
 *  Having both scripts enqueued breaks our Autocomplete.
 *
 */

add_action( 'admin_enqueue_scripts', 'wordimpress_deenqueue_gmaps_widgets', 100 );

function wordimpress_deenqueue_gmaps_widgets($hook){

    if( $hook == 'widgets.php' || $hook == 'edit.php' || $hook == 'post-new.php' ) {

        wp_dequeue_script( 'avia-google-maps-api' );
        wp_deregister_script( 'avia-google-maps-api' );

    }
}