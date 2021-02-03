<?php 
 
function kc_setup(){
    wp_enqueue_style('google-fonts', "//fonts.googleapis.com/css2?family=Poppins:wght@200;400&display=swap");
    wp_enqueue_style('style', get_stylesheet_uri(), NULL, '1.0', 'all');
    wp_enqueue_style('header', get_template_directory_uri() . '/css/header.css', NULL, '1.0', 'all');
    wp_enqueue_style('contact', get_template_directory_uri() . '/css/contact.css', NULL, '1.0', 'all');
    wp_enqueue_style('galleries', get_template_directory_uri() . '/css/galleries.css', NULL, '1.0', 'all');
    wp_enqueue_script('links', get_theme_file_uri('/js/links.js'), NULL, '1.0', true);
    wp_enqueue_script('main', get_theme_file_uri('/js/main.js'), NULL, '1.0', true);
    wp_enqueue_script('form', get_theme_file_uri('/js/form.js'), NULL, '1.0', true);
    wp_enqueue_script('fontawesome', '//kit.fontawesome.com/3c4cd4bae6.js'); 
    wp_enqueue_script('axios', get_theme_file_uri('/js/axios.js'), NULL, '1.0', true);
    
}

add_action('wp_enqueue_scripts', 'kc_setup'); 

add_theme_support( 'post-thumbnails' );