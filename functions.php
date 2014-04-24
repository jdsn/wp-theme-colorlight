<?php
add_theme_support( 'custom-background', array(
	'default-color' => 'E6E6E6',
) );

function mytheme_dequeue_fonts() {
    wp_dequeue_style( 'twentytwelve-fonts' );
}
add_action( 'wp_enqueue_scripts', 'mytheme_dequeue_fonts', 11 );

?>
