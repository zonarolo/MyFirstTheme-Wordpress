<?php

  function apk_load_styles(){
  wp_register_style('theme_style', get_stylesheet_uri(), '', '1.0', 'all');
  wp_enqueue_style('theme_style');
  }
  add_action('wp_enqueue_scripts', 'apk_load_styles');
