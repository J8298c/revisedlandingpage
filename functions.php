<?php

//register Nav Walker class
require_once('wp-bootstrap-navwalker.php');

//Theme Nav Support

function landingpage_theme_setup(){
	add_theme_support('post-thumbnails');
	//Nav Menu
	register_nav_menus(array(
		'primary' => __('Primary Menu')
	));
}
add_action('after_setup_theme', 'landingpage_theme_setup');

function set_excerpt_length(){
	return 45;
}
add_filter('excerpt_length', 'set_excerpt_length');