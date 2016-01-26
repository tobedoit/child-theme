<?php
/* Custom JS by Zmes
=============================================== */
function james_enqueue_scripts() {
    wp_register_script( 'zmes', get_stylesheet_directory_uri() . '/js/zmes.custom.js', array( 'jquery' ), false, true );
    wp_enqueue_script('zmes');
}
add_action( 'wp_enqueue_scripts', 'james_enqueue_scripts');
?>
