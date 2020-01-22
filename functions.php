<?php
function sps_scripts_load(){

  wp_enqueue_style('sps-fonts', "//fonts.googleapis.com/css?family=IBM+Plex+Sans:400,500,600|Leckerli+One&display=swap", array(), "1.0.1", 'all');
  wp_enqueue_style('sps-icons', "//unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css", array(), "1.0.1", 'all');
  wp_enqueue_style('sps-bootstrap', "//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css", array(), "1.0.1", 'all');
  wp_enqueue_style('sps-glide', get_stylesheet_directory_uri() . '/assets/css/glide.css', array(), "1.0.1", 'all');
  wp_enqueue_style('sps-stylesheet', get_stylesheet_directory_uri() . '/assets/css/sps-style.css', array('sps-fonts', 'sps-icons', 'sps-bootstrap', 'sps-glide'), "1.0.1", 'all');

  wp_enqueue_script('sps-jquery', '//code.jquery.com/jquery-3.3.1.slim.min.js', array(), "1.0.1", true);
  wp_enqueue_script('sps-popper', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', array(), "1.0.1", true);
  wp_enqueue_script('sps-bootstrapjs', '//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array('sps-jquery', 'sps-popper'), "1.0.1", true);
  wp_enqueue_script('sps-glidejs', '//cdn.jsdelivr.net/npm/@glidejs/glide', array(), "1.0.1", true);
  wp_enqueue_script('sps-script', get_stylesheet_directory_uri() . '/assets/js/sps-scripts.js', array('sps-jquery', 'sps-popper', 'sps-bootstrapjs', 'sps-glidejs'), "1.0.1", true);
}

add_action('wp_enqueue_scripts', 'sps_scripts_load');

function sps_theme_features() {
  add_theme_support('post-thumbnails');
  add_theme_support('title-tag');
}

add_action('after_setup_theme', 'sps_theme_features');
