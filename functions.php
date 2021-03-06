<?php
//add_theme_support('title-tag');

function montheme_supports() {
  add_theme_support('title-tag');
}

register_sidebar( array(
'id' => 'blog-sidebar',
'name' => 'Blog',
'before_widget' => '<div class="site__sidebar__widget %2$s">',
'after_widget' => '</div>',
'before_title' => '<p class="site__sidebar__widget__title">',
'after_title' => '</p>',
) ) ;

register_sidebar( array(
'id' => 'footer-sidebar',
'name' => 'Footer',
'before_widget' => '<div class="site__sidebar__widget %2$s">',
'after_widget' => '</div>',
'before_title' => '<p class="site__sidebar__widget__title">',
'after_title' => '</p>',
) );
function themename_custom_header_setup() {
$args = array(
'default-image' => get_template_directory_uri() . 'img/bg.png',
'width' => 2000,
'height' => 500,
'flex-width' => true,
'flex-height' => true,
);
add_theme_support( 'custom-header', $args );
}
add_action( 'after_setup_theme', 'themename_custom_header_setup' );

function montheme_register_assets(){
  wp_register_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css');
  wp_register_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js', ['popper', 'jquery'], false, true);
  wp_deregister_script('jquery');
  wp_register_script('popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js', [], false, true);
  wp_register_script('jquery', 'https://code.jquery.com/jquery-3.5.1.slim.min.js', [], false, true);
  wp_enqueue_style('bootstrap');
  wp_enqueue_script('bootstrap');
}

function montheme_document_title_parts($title) {
  unset($title['tagline']);
  return $title;
}

function register_my_menu() {
register_nav_menu('header-menu',__( 'Header Menu' ));
register_nav_menu('footer-menu',__( 'Footer Menu' ));
}
add_action( 'init', 'register_my_menu' );

register_nav_menus( array(
'main' => 'Menu Principal',
'footer' => 'Bas de page',
) );

add_action('after_setup_theme', 'montheme_supports');
add_action('wp_enqueue_scripts', 'montheme_register_assets');
add_filter('document_title_parts', 'montheme_document_title_parts');

add_theme_support('post-thumbnails');
function wpm_enqueue_styles(){
wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'wpm_enqueue_styles' );

?>
