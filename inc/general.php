<?php

function add_theme_scripts()
{
    // enqueue jquery
    wp_enqueue_script('jquery');
    wp_enqueue_style('font', 'https://use.typekit.net/jhq1ana.css', false, time(), 'all');
    wp_enqueue_style('style', get_stylesheet_directory_uri() . '/style.css', false, time(), 'all');
    wp_enqueue_style('main', get_stylesheet_directory_uri() . '/assets/css/frontend.css', false, time(), 'all');
    wp_enqueue_script('main', get_stylesheet_directory_uri() . '/assets/js/frontend.js', array('jquery'), time(), true);
}

add_action('wp_enqueue_scripts', 'add_theme_scripts');
