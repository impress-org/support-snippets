<?php
/*
 *  MAPS BUILDER FREE SNIPPET
 *  Dequeues all scripts/styles
 *  Then enqueues them only on "google_maps" CPTs
 *  and per post ID.
 * 
 */

/*
 *   Dequeues all Maps Builder Free Scripts Throughout the whole site
 */

add_action( 'wp_enqueue_scripts', 'wordimpress_dequeue_mapsbuilder_scripts', 99 );

function wordimpress_dequeue_mapsbuilder_scripts() {
    wp_dequeue_script( 'google-maps-builder-gmaps' );
    wp_dequeue_script('google-maps-builder-infowindows');
    wp_dequeue_script('google-maps-builder-plugin-script');
    wp_dequeue_script('google-maps-builder-maps-icons');
}

/*
 *   Dequeues all Maps Builder Free Styles Throughout the whole site
 */

add_action( 'wp_enqueue_styles', 'wordimpress_dequeue_mapsbuilder_styles', 99 );

function wordimpress_dequeue_mapsbuilder_styles() {
    wp_dequeue_style('google-maps-builder-plugin-styles');
    wp_dequeue_style('google-maps-builder-map-icons');
}

/*
 *   Conditionally Enqueues all Maps Builder Free Scripts
 *   if it's a Google Maps Page, or is a certain page/post ID
 */


add_action( 'wp_print_scripts', 'wordimpress_conditional_enqueue_mapsbuilder_scripts', 100 );

function wordimpress_conditional_enqueue_mapsbuilder_scripts() {

    // Add page/post IDs separated by commas here
    $pages = array( 338,341 );

    if ( is_singular('google_maps') || is_page( $pages ) ) {
        wp_enqueue_script('google-maps-builder-gmaps');
        wp_enqueue_script('google-maps-builder-infowindows');
        wp_enqueue_script('google-maps-builder-plugin-script');
        wp_enqueue_script('google-maps-builder-maps-icons');
    }
}

/*
 *   Conditionally Enqueues all Maps Builder Free Styles
 *   if it's a Google Maps Page, or is a certain page/post ID
 */


add_action( 'wp_print_scripts', 'wordimpress_conditional_enqueue_mapsbuilder_styles', 100 );

function wordimpress_conditional_enqueue_mapsbuilder_styles() {

    // Add page/post IDs separated by commas here
    $pages = array(338,341);

    if ( is_singular('google_maps') || is_page($pages) ) {
        wp_enqueue_style('google-maps-builder-plugin-styles');
        wp_enqueue_style('google-maps-builder-map-icons');
    }
}