<?php
add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );



function register_theme_menus() {
         register_nav_menus(
		array(
               'primary-menu' => __( 'Primary Menu')
			)
	);
}
add_action( 'init', 'register_theme_menus');

function wpt_theme_styles() {

	wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/css/bootstrap.css' );
	wp_enqueue_style( 'google_font', 'http://fonts.googleapis.com/css?family=Tangerine' );
	wp_enqueue_style( 'google_font1', 'http://fonts.googleapis.com/css?family=Oswald:400,700' );
	wp_enqueue_style( 'google_font2', 'http://fonts.googleapis.com/css?family=Didact+Gothic' );
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'wpt_theme_styles' );

function wpt_theme_js() {
	wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'main_js', get_template_directory_uri() . '/js/app.js', array('jquery', 'bootstrap_js'), '', true );
}
add_action( 'wp_enqueue_scripts', 'wpt_theme_js' );

?>