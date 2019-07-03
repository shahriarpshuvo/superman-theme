<?php
function sps_scripts_load(){
  wp_enqueue_script( 'sps-scripts', get_stylesheet_directory_uri(  ).'/assets/js/sps-scripts.js',[], time(), true);
  wp_enqueue_style('sps-stylesheet', get_stylesheet_directory_uri(  ).'/assets/css/sps-style.css',[], time(), 'all');
}
add_action( 'wp_enqueue_scripts', 'sps_scripts_load' );

function sps_theme_features(){
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'title-tag' );
}

add_action('after_setup_theme', 'sps_theme_features' );
