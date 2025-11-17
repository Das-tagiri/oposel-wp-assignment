<?php
// Theme setup
function toposel_theme_support() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'toposel_theme_support');

// Enqueue styles & scripts
function toposel_enqueue_files() {
    wp_enqueue_style('toposel-style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0');
    wp_enqueue_script('toposel-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'toposel_enqueue_files');
?>