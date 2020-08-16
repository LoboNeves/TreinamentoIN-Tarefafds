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

function custom_post_type(){
    register_post_type(
        'noticia',
        array('label'=>'Noticias',
        'description' => 'Noticias',
        'menu_position'=> 2,
        'public'=>true,
        'show_ui'=>true,
        'show_in_menu'=>true,
        'capability_type'=>'post',
        'map_meta_cap'=>true,
        'hierarchical'=>false,
        'query_var'=>true,
        'supports'=>array('title', 'editor'),
        'labels'=> array('name'=>'Noticia',
        'singular_name'=>'Noticia',
        'menu_name'=>'Noticias',
        'add_new'=>'Nova Noticia',
        'add_new_item'=>'Adcionar Nova Noticia',
        'edit'=>'Editar Noticia',
        'new_item'=>'Nova Noticia',
        'view'=>'Ver Noticia',
        'view_item'=>'Ver Noticia',
        'search_items'=>'Procurar Noticias',
        'not_found'=>'Nenhuma Noticia Encontrada',
        'not_found_in_trash'=>'Nenhuma Noticia encontrada no lixo'        
        ))
    );
}
add_action('init','custom_post_type');



function custom_post_type2(){
    register_post_type(
        'produto',
        array('label'=>'Produtos',
        'description' => 'Produtos',
        'menu_position'=> 2,
        'public'=>true,
        'show_ui'=>true,
        'show_in_menu'=>true,
        'capability_type'=>'post',
        'map_meta_cap'=>true,
        'hierarchical'=>false,
        'query_var'=>true,
        'supports'=>array('title', 'editor'),
        'labels'=> array('name'=>'Produtos',
        'singular_name'=>'Produto',
        'menu_name'=>'Produtos',
        'add_new'=>'Novo Produto',
        'add_new_item'=>'Adcionar Novo Produto',
        'edit'=>'Editar Produto',
        'new_item'=>'Novo Produto',
        'view'=>'Ver Produto',
        'view_item'=>'Ver Produto',
        'search_items'=>'Procurar Produto',
        'not_found'=>'Nenhuma Produto Encontrado',
        'not_found_in_trash'=>'Nenhum Produto encontrado no lixo'        
        ))
    );
}
add_action('init','custom_post_type2');
?>

