<?php

/*
 * A local translation snippet.
 */

function my_gmb_text_switcher( $translations, $text, $domain ) {

	// changes the "Visit Website" text on the infobubble for Google places inserted in maps
	if ($domain == 'google-maps-builder' && $text =='Visit Website') {
		return __( 'YOUR TEXT HERE', 'google-maps-builder');
	}
	// changes the "Get Directions" text on the infobubble for Google places inserted in maps
	if ($domain == 'google-maps-builder' && $translations =='Get Directions') {
		return __( 'YOUR TEXT HERE', 'google-maps-builder');
	}

	return $translations;
}

add_filter ('gettext', 'my_gmb_text_switcher', 10, 3 );