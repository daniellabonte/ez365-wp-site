<?php
  
  function load_stylesheets() {
    wp_register_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', array(), 1, 'all');
    wp_enqueue_style('fontawesome');
    wp_register_style('ezcss', get_template_directory_uri() . '/css/ez.css', array(), 1, 'all');
    wp_enqueue_style('ezcss');
  }
  add_action('wp_enqueue_scripts', 'load_stylesheets');
  

  function addjs() {
    wp_register_script('navbarontop', get_template_directory_uri() . '/js/navbar-ontop.js', array(), 1, 1, 1);
    wp_enqueue_script('navbarontop');
    wp_register_script('animatein', get_template_directory_uri() . '/js/animate-in.js', array(), 1, 1, 1);
    wp_enqueue_script('animatein');

    wp_register_script('jquery', 'https://code.jquery.com/jquery-3.3.1.min.js', array(), 1, 1, 1);
    wp_enqueue_script('jquery');
    wp_register_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array(), 1, 1, 1);
    wp_enqueue_script('popper');
    wp_register_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js', array(), 1, 1, 1);
    wp_enqueue_script('bootstrap');
    wp_register_script('ezjs', get_template_directory_uri() . '/ez.js', array(), 1, 1, 1);
    wp_enqueue_script('ezjs');
  }
  add_action('wp_enqueue_scripts', 'addjs');


  register_nav_menus(
    array(
      'mainnav' => 'Main Nav',
      'footerlinks' => 'Footer Links',
      'socialmediaicons' => 'Social Media Icons'
    )
  );
?>