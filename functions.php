<?php

function ralph_script_enqueue(){
	wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/task.css', array(), '1.0.0', 'all' );
	wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '1.0.0', 'all' );
	wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '1.0.0', 'all' );
	wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/nprogress.css', array(), '1.0.0', 'all' );
	wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/green.css', array(), '1.0.0', 'all' );
	wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/bootstrap-progressbar-3.3.4.min.css', array(), '1.0.0', 'all' );
	wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/jqvmap.min.css', array(), '1.0.0', 'all' );
	wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/daterangepicker.css', array(), '1.0.0', 'all' );
	wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/custom.min.css', array(), '1.0.0', 'all' );



	wp_enqueue_script('customjs', get_template_directory_uri() . '/js/task.js', array(), '1.0.0', true);
	wp_enqueue_script('customjs', get_template_directory_uri() . '/js/jquery.min.js', array(), '1.0.0', true);
/*
function custom_theme_script(){
	wp_enqueue_script('custom-theme', get_template_directory_uri() . '/js/custom.min.js');
}
*/


add_action('wp_enqueue_scripts', 'custom_theme_script');





}
	

add_action('wp_enqueue_scripts', 'ralph_script_enqueue');



/*
}
add_action('init', 'custom_theme_setup');
*/




