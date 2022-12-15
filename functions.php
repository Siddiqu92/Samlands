<?php
function add_css()
{
   wp_register_style('first', get_template_directory_uri() . '/assets/css/style.css', false,'1.1','all');
   wp_enqueue_style( 'first');
   wp_register_style('Second', get_template_directory_uri() . '/assets/lib/bootstrap/css/bootstrap.min.css', false,'1.1','all');
   wp_enqueue_style( 'Second');
   wp_register_style('third', get_template_directory_uri() . '/assets/lib/font-awesome/css/font-awesome.min.css', false,'1.1','all');
   wp_enqueue_style( 'third');
   wp_register_style('fourth', get_template_directory_uri() . '/assets/lib/animate/animate.min.css', false,'1.1','all');
   wp_enqueue_style( 'fourth');
   wp_register_style('five', get_template_directory_uri() . '/assets/lib/animate/animate.min.css', false,'1.1','all');
   wp_enqueue_style( 'five');
   wp_register_style('six', get_template_directory_uri() . '/assets/lib/ionicons/css/ionicons.min.css', false,'1.1','all');
   wp_enqueue_style( 'six');
   wp_register_style('seven', get_template_directory_uri() . '/assets/lib/owlcarousel/assets/owl.carousel.min.css', false,'1.1','all');
   wp_enqueue_style( 'seven');
}




add_action('wp_enqueue_scripts', 'add_css');

function add_script()
{
   wp_register_script('js-script', get_template_directory_uri() . '/assets/js/jquery-3.3.1.min.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'js-script');
   wp_register_script('change', get_template_directory_uri() . '/assets/js/theme-change.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'change');
   wp_register_script('popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'popup');
   wp_register_script('carousel', get_template_directory_uri() . '/assets/js/owl.carousel.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'carousel');
   wp_register_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'bootstrap');
}
add_action('wp_enqueue_scripts', 'add_script');

add_theme_support( 'menus' );

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}
