<?php
function websiteFiles() {
  wp_enqueue_style( "google-fonts", "https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=PT+Serif:wght@400;700&display=swap" );
  wp_enqueue_style( "stylesheet", get_stylesheet_uri() );
  wp_enqueue_style( "owl-carousel", get_theme_file_uri("/assets/css/owl.carousel.min.css") );
  wp_enqueue_style( "owl-carousel-default", get_theme_file_uri("/assets/css/owl.theme.default.min.css") );
  wp_enqueue_style( "main-stylesheet", get_theme_file_uri("/assets/css/main.css") );
  wp_enqueue_script( "font-awesome-icons", "https://kit.fontawesome.com/3566f86d6d.js", NULL, "5.13.0", true );
  wp_enqueue_script( "owl-carousel", get_theme_file_uri("/assets/js/owl.carousel.min.js"), array('jquery'), null, true );
  wp_enqueue_script( "carousel", get_theme_file_uri("/assets/js/carousel.js"), array('jquery'), null, true );
} 
add_action("wp_enqueue_scripts", "websiteFiles");

function features() {
  add_theme_support( "title-tag" );
}
add_action( "after_setup_theme", "features" );

// Excerpt

function custom_excerpt_length( $length ) {
  return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

// Excerpt Read More
function wpdocs_excerpt_more( $more ) {
  return '...';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

// Post View

function gt_get_post_view() {
  $count = get_post_meta( get_the_ID(), 'post_views_count', true );
  return "$count views";
}
function gt_set_post_view() {
  $key = 'post_views_count';
  $post_id = get_the_ID();
  $count = (int) get_post_meta( $post_id, $key, true );
  $count++;
  update_post_meta( $post_id, $key, $count );
}
function gt_posts_column_views( $columns ) {
  $columns['post_views'] = 'Views';
  return $columns;
}
function gt_posts_custom_column_views( $column ) {
  if ( $column === 'post_views') {
      echo gt_get_post_view();
  }
}
add_filter( 'manage_posts_columns', 'gt_posts_column_views' );
add_action( 'manage_posts_custom_column', 'gt_posts_custom_column_views' );

// Enable Featured Images
add_theme_support( 'post-thumbnails' );
add_theme_support( 'html5', array('search-form') );

//Exclude pages from WordPress Search
if (!is_admin()) {
  function wpb_search_filter($query) {
  if ($query->is_search) {
    $query->set('post_type', 'post');
  }
  return $query;
  }
  add_filter('pre_get_posts','wpb_search_filter');
}