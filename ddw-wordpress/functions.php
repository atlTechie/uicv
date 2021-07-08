<?php
function ddwthemesupport(){
	//adds dynamic title tag support
add_theme_support('title-tag');
	add_theme_support('custom-logo');
	add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', "ddwthemesupport");

//Register menus
function ddwmenus(){
	$locations = array(
	'primary' => "Primary Top",
		"footer"=> "Footer Menu"
	);
	
	register_nav_menus($locations);
	
}

add_action('init','ddwmenus');


//Register styles
$version = wp_get_theme()->get('Version');
	function ddw_register_styles(){
    wp_enqueue_style('ddwstyle', get_template_directory_uri()."/style.css", array('ddwbootstrap'), $version, "all");
    wp_enqueue_style('ddwbootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css", array(), "1.0", "all");
    wp_enqueue_style('ddwfontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css", array(), "5.15.3", "all");
}

add_action('wp_enqueue_scripts', 'ddw_register_styles');

//Register all scripts
function ddw_register_scripts(){
 wp_enqueue_script('ddwbootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js', array(), "5.0.2", true);
	
	wp_enqueue_script('ddwgsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.0/gsap.min.js', array(), "3.7.0", true);
	
	wp_enqueue_script('ddwjs', get_template_directory_uri()."assets/js/app.js", array(), "1.0", true);
	
}

add_action('wp_enqueue_scripts', 'ddw_register_scripts');




?>