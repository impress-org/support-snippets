<?php

/**
 *  Translate the "Read more" string 
 *
 **/
 
 function my_prefix_wpbr_text_switcher( $translations, $text, $domain ) {
    // changes the "Donations" text in multiple places
    if ( $domain == 'wp-business-reviews' && $text == 'Read more' ) {
        $translations = __( 'YOUR TEXT HERE', 'give' );
    }

    return $translations;
}
add_filter( 'gettext', 'my_prefix_wpbr_text_switcher', 10, 3 );
