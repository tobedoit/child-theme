<?php

/* 로그인 & 회원가입 대시보드 수정
=============================================== */
function my_login_logo() {
    wp_register_style( 'dashboard' , get_bloginfo( 'stylesheet_directory' ) . "/dashboard.css");
	wp_enqueue_style( 'dashboard');
}
add_action( 'login_enqueue_scripts', 'my_login_logo' );
/* to change the URL */
function my_login_logo_url() {return get_bloginfo( 'url' );}
add_filter( 'login_headerurl', 'my_login_logo_url' );
/* to change the title */
function my_login_logo_url_title() {return get_option('blogname');}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );

?>