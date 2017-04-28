<?php

/**
  *  Enqueues our Google Places Styles Globally
  *  This is because of a problem with how we enqueue styles currently
  *
  */
  
function wpdocs_theme_name_scripts() {
	wp_enqueue_style( 'gpr_widget' );

	wp_enqueue_script( 'gpr_reviews_main_scripts' );
	wp_enqueue_script( 'gpr_reviews_readmore' );

	// Localize the script with new data
	$translation_array = array(
		'read_more' => __( 'Read More &raquo;', 'google-places-reviews' ),
		'read_less' => __( 'Close', 'google-places-reviews' ),
	);
	wp_localize_script( 'gpr_reviews_readmore', 'gpr_vars', $translation_array );

}

add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts', 999 );