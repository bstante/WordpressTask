<?php

function ralph_script_enqueue(){
	wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/task.css', array(), '1.0.0', 'all' );
	wp_enqueue_script('customjs', get_template_directory_uri() . '/js/task.js', array(), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'ralph_script_enqueue');

function ralph_theme_setup(){
add_theme_support('menus');
}

add_action('init', 'ralph_theme_setup');