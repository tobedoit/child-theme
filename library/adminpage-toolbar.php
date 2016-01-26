<?php

/* Customize Toolbar **************************************************************************
** http://www.sitepoint.com/change-wordpress-33-toolbar/ *********************************** */
/* !어드민 툴바 커스트마이징 ******************************************************************** */
add_action('admin_bar_menu', 'change_toolbar', 999);
function change_toolbar($wp_toolbar) {  
    $wp_toolbar->remove_node('wp-logo'); // 로고
    //$wp_toolbar->remove_node('my-account'); // 계정
    //$wp_toolbar->remove_node('comments'); // 댓글
    //$wp_toolbar->remove_node('new-post'); // 글
    //$wp_toolbar->remove_node('new-user'); // 사용자
    //$wp_toolbar->remove_node('new-media'); // 미디어
    //$wp_toolbar->remove_node('w3tc'); // W3 Total Cache
    //$wp_toolbar->remove_node('avia'); // Avia Theme Options
}

?>