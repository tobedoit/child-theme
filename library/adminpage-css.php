<?php
/* Parent theme style.css import
https://codex.wordpress.org/Child_Themes
=============================================== */
add_action( 'wp_enqueue_scripts', 'zmes_child_enqueue_styles',50);
function zmes_child_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
?>