<?php
define( 'TEMPPATH', get_bloginfo('stylesheet_directory'));
define( 'IMAGES', TEMPPATH. "/images"); 

add_theme_support( 'nav-menus' );

if ( function_exists( 'register_nav_menus' ) ) {
	register_nav_menus(
		array(
		  'main' => 'Main Nav'
		)
	);
}


function enqueue_scripts () {
	wp_deregister_script('slider');
	wp_register_script('slider', get_bloginfo('template_directory').'/js/ism-2.2.min.js');
	wp_enqueue_script('slider');
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');

?>