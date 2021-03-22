<?php

function load_stylesheets() {

wp_register_style('css', get_template_directory_uri() . '/css/phpStyles.css', array(), 1, 'all');

wp_enqueue_style('css');

}





add_action('wp_enqueue_scripts', 'load_stylesheets');





//load scripts
function addjs() {

		wp_register_script('swiper', get_template_directory_uri() . 'plugin-frameworks/swiper.js', array() , 1, 1, 1);
	    
	    wp_enqueue_script('swiper)');

		wp_register_script('common', get_template_directory_uri() . '/common/scripts.js', array() , 1, 1, 1);
	    wp_enqueue_script('common');
}


add_action('wp_enqueue_scripts', 'addjs');



function add_custom_query_var( $vars ){
  $vars[] = "n";
  return $vars;
}
// add_filter( 'query_vars', 'add_custom_query_var' );

add_theme_support( 'post-thumbnails' );


?>
