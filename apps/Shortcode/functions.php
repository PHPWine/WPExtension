<?php

// Shortcode: [wpextension_shortcode]
add_shortcode( 'wpextension_shortcode', 'create_wpextensionshortcode_shortcode' );
function create_wpextensionshortcode_shortcode() {
  
    return "This is shortcode demo in function";

}


// Shortcode: [wp_wine_open_and_close_shortcode wine="shortcode_wine"]Content[/wp_wine_open_and_close_shortcode]
add_shortcode( 'wp_wine_open_and_close_shortcode', 'create_wpwineopenandclo_shortcode' );

function create_wpwineopenandclo_shortcode($atts, $content = null) {

	$atts = shortcode_atts(
		array(
			'wine' => 'shortcode_wine',
		),
		$atts,
		'wp_wine_open_and_close_shortcode'
	);

	$wine = $atts['wine'];

    var_dump($wine);

}
