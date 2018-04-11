<?php
/* Custom JS by Zmes
=============================================== */
function james_enqueue_scripts() {
	wp_register_script( 'maskinput', get_stylesheet_directory_uri() . '/js/jquery.mask.min.js', array( 'jquery' ), false, true );
	wp_register_script( 'jq_mobile', get_stylesheet_directory_uri() . '/js/detectmobilebrowser.js', array( 'jquery' ), false, true );
	wp_register_script( 'zmes', get_stylesheet_directory_uri() . '/js/zmes.custom.js', array( 'jquery', 'maskinput', 'jq_mobile' ), false, true );

	wp_enqueue_script('zmes');
}
add_action( 'wp_enqueue_scripts', 'james_enqueue_scripts');
?>