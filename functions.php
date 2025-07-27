<?php
function register_my_menus() {
    register_nav_menus(
        array(
            'main-menu' => __('Main Menu'),
            'footer-menu' => __('Footer Menu') 
        )
    );
}
add_action('after_setup_theme', 'register_my_menus');

// register_post_type('product', [
//     'label' => 'Products',
//     'public' => true,
//     'menu_position' => 5,
//     'supports' => ['title', 'editor', 'thumbnail'], // <- important
//     'has_archive' => true,
//     'rewrite' => ['slug' => 'products'],
// ]);

add_theme_support('post-thumbnails'); // Globally enables featured images
add_theme_support('title-tag');
add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
add_theme_support('automatic-feed-links');
