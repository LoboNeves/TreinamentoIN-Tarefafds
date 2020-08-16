<?php 
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0 );
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

add_theme_support( "menus" );
function register_my_menu(){
    register_nav_menu('navegacao', __('Navegação'));
}
add_action( 'init', 'register_my_menu' );

function tarefafds_scripts(){
    wp_enqueue_style( "reset-sheet", get_stylesheet_directory_uri() . "/reset.css");
    wp_enqueue_style( "style-sheet", get_stylesheet_directory_uri() . "/style.css");
}
add_action( 'wp_enqueue_scripts', 'tarefafds_scripts' );
?>

