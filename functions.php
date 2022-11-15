<?php

add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('style-slick', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
    wp_enqueue_style('fonts', 'https://fonts.googleapis.com');
    wp_enqueue_style('fonts-gstatic', 'https://fonts.gstatic.com');
    wp_enqueue_style('fonts-googleapis_russo', "https://fonts.googleapis.com/css2?family=Russo+One&display=swap");
    wp_enqueue_style('fonts-googleapis_sans', "https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700");
    wp_deregister_script('jquery');
    wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js');
    wp_enqueue_script('jquery');
    wp_enqueue_script('script-name', get_template_directory_uri() . '/script.js', array('jquery', 'script-slick'), 'null', true);
    wp_enqueue_script('script-slick', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array(), 'null', true);
    //      <link rel="preconnect" href="https://fonts.googleapis.com">
    //     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    //     <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&family=Russo+One&display=swap" rel="stylesheet">
    //     <link rel="stylesheet" href="./style.css" /> 
    // <script src="./script.js"></script>
});
// add_filter('style_loader_tag', 'add_attribute', 10, 2);
// add_filter('style_loader_tag', 'add_attribute_fonts', 10, 2);
// function add_attribute($link, $handle)
// {
//     if ($handle == 'fonts-gstatic') {
//         $link = str_replace('/>', 'rel="preconnect" crossorigin />', $link);
//     }
//     return $link;
// }
// function add_attribute_fonts($link, $handle)
// {
//     if ($handle == 'fonts') {
//         $link = str_replace('/>', 'rel="preconnect" />', $link);
//     }
//     return $link;
// }

add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');
