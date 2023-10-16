<?php
function  bookland_theme_support()
{
    //adds dynamic title tag support
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
    add_image_size('smallest',300,300,true);
}
add_action('after_setup_theme','bookland_theme_support');


function bookland_menus(){
    $locations = array(
        'primary' => 'Desktop Primary Top NavBar',
        'footer' => 'Footer Menu Items'
    );
    register_nav_menus($locations);
}

add_action('init','bookland_menus');

function bookland_register_styles()
{
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('bookland-style', get_template_directory_uri() . "/style.css", array('bookland-bootstrap'), $version, 'all');
    wp_enqueue_style('bookland-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css', array(), '5.0.2', 'all');
    wp_enqueue_style('bookland-fontawesome', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css', array(), '1.11.1', 'all');
}

add_action('wp_enqueue_scripts', 'bookland_register_styles');

function bookland_register_scripts()
{
    wp_enqueue_script('bookland-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js', array(), '5.0.2', true);
}

add_action('wp_enqueue_scripts', 'bookland_register_scripts');


// function my_first_post_type(){
//      $args = array(
//         'labels' => array(
//             'name' => 'books',
//             'singular_name' => 'book',
//         ),
//         'hierarchical' =>true,
//         'public' => true,
//         'has_archive' => true,
//         'supports' => array('title' ,'editor','thumbnail'),
//         // 'rewrite' => array('slug' =>'books'),
//      );
//     register_post_type( 'books', $args );
// }
// add_action('init', 'my_first_post_type');