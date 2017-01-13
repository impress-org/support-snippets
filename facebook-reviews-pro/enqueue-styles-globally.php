<?php

/*
 *  FACEBOOK REVIEWS SNIPPET
 *  Enqueues FB Reviews Styles Globally
 *
 */

function wordimpress_global_enqueue_fbr_style() {
    wp_register_style( 'facebook-widget-css', FB_WIDGET_PRO_URL . '/assets/css/facebook-widget-pro.min.css' );
    wp_enqueue_style( 'facebook-widget-css' );
}
add_action( 'wp_print_styles', 'wordimpress_global_enqueue_fbr_style' );