<?php

/* Styles
	=============================================================== */

function nm_child_theme_styles()
{
	// Enqueue child theme styles
	wp_enqueue_style('nm-child-theme', get_stylesheet_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'nm_child_theme_styles', 1000); // Note: Use priority "1000" to include the stylesheet after the parent theme stylesheets

function nm_child_theme_jss()
{
	// Enqueue child theme styles
	wp_enqueue_script(
		'your-script', // name your script so that you can attach other scripts and de-register, etc.
		get_stylesheet_directory_uri() . '/assets/js/jquery.min.js', // this is the location of your script file
		array('jquery') // this array lists the scripts upon which your script depends
	);
}
add_action('wp_enqueue_scripts', 'nm_child_theme_jss');

function your_script_enqueue()
{
	wp_enqueue_script('custom_js', get_stylesheet_directory_uri() . '/assets/js/custom-js.js');
}
add_action('wp_enqueue_scripts', 'your_script_enqueue');
