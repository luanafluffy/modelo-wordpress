<?php

// ***** Função que remove a margem superior do menu, problema de css ****
// function remove_css_admin_line() {
//     if (has_filter('wp_heade','admin_bar_cb')) {
//         remove_filter('wp_heade', '_admin_bar_bump_cb');
//     }
// }
// add_filter( 'wp_head', 'remove_css_admin_line', 1 );

// Definindo suporte e dimensões das imagens do posts 
add_theme_support( 'post-thumbnails');
set_post_thumbnail_size(387, 151);

// Sidebar
if (function_exists('register_sidebar')) {
    register_sidebar(array(
        'name'              => 'Sidebar',
        'before_widget'     => '<div class="thumbnail"><div class="caption">',
        'after_widget'      => '</div></div>',
        'before_title'      => '<h3>',
        'after_title'       => '<h3>',
    ));
}