<?php

/* 어드민 페이지 파비콘 등록
=============================================== */
function admin_favicon() {
    if(is_admin()) {  
        echo '<link rel="shortcut icon" href="'.get_bloginfo('stylesheet_directory').'/images/your-favicon-admin.png" />';  
    }  
}  
add_action('admin_head','admin_favicon');

?>