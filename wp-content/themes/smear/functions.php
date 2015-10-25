<?php

  function jb_theme_styles() {
    wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css' );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'blueimp', '//blueimp.github.io/Gallery/css/blueimp-gallery.min.css' );
    wp_enqueue_style( 'gallery', get_template_directory_uri() . '/css/bootstrap-image-gallery.min.css' );
    wp_enqueue_style( 'blueimp', 'http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' );
    wp_enqueue_style( 'badges', get_template_directory_uri() . '/badges.css' );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' );
  }
  add_action( 'wp_enqueue_scripts', 'jb_theme_styles' );

 ?>
