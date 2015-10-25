<?php

add_theme_support( 'menus' );

function register_theme_menus() {
  register_nav_menus(
    array(
      'primary-menu' => __( 'Primary Menu' )
    )
  );
}
add_action( 'init', 'register_theme_menus' );


  function jb_theme_styles() {
    wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css' );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'blueimp-css', '//blueimp.github.io/Gallery/css/blueimp-gallery.min.css' );
    wp_enqueue_style( 'gallery', get_template_directory_uri() . '/css/bootstrap-image-gallery.min.css' );
    wp_enqueue_style( 'font-awesome', 'http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'badges', get_template_directory_uri() . '/css/badges.css' );
    wp_enqueue_style( 'google-font', 'https://fonts.googleapis.com/css?family=Oswald:400,300,700' );

  }
  add_action( 'wp_enqueue_scripts', 'jb_theme_styles' );


  function jb_theme_js() {
    wp_enqueue_script( 'blueimp-js', '//blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js', array('jquery'), '', true );
    wp_enqueue_script( 'image-gallery-js', get_template_directory_uri() . '/js/bootstrap-image-gallery.min.js', array('jquery'), '', true );
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true );
    wp_enqueue_script( 'reportcard-js', get_template_directory_uri() . '/js/reportcard.min.js', array('jquery', '/js/bootstrap.min.js'), '', true );
    wp_enqueue_script( 'app-js', get_template_directory_uri() . '/js/app.js', array('jquery', '/js/reportcard.min.js'), '', true );
  }
  add_action( 'wp_enqueue_scripts', 'jb_theme_js' );

 ?>
