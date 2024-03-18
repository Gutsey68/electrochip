<?php

	function custom_script()
	{

		wp_enqueue_script('bootstrap', 'js/bootstrap.js', array(), false, true);
		wp_enqueue_script('jquery-js', 'js/jquery-3.4.1.min.js', array(), false, true);
	}

	add_action('wp_enqueue_scripts', 'custom_script');

	function custom_style()
	{
		wp_enqueue_style('googlefont-css', 'https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap', array(), null);
		wp_enqueue_style('themestyle-css', get_template_directory_uri() . '/css/style.css', array(), null);
		wp_enqueue_style('themestyle-responsive-css', get_template_directory_uri() . '/css/responsive.css', array(), null);
		wp_enqueue_style('themestyle-bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), null);
		wp_enqueue_style('themestyle-carousel', get_template_directory_uri() . 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css', array(), null);
	}

	add_action('wp_enqueue_scripts', 'custom_style');

	add_theme_support('post-thumbnails');

	add_theme_support('title-tag');

	function longueurExtrait() {
		return 20;
	}
	add_filter('excerpt_length', 'longueurExtrait');

	function customLireLaSuite() {
		return '&nbsp; -> ... <-';
	}
	add_filter('excerpt_more', 'customLireLaSuite');
	
	function api_post_type() 
	{
		register_post_type(
			
			'service', array
			(
				'label' => 'service',
				'labels' => array
				(
					'name' => 'Services',
					'singular_name' => 'Service'
				),
				'public' => true,
				'supports' => array('title', 'editor', 'thumbnail'),
				'has_archive' => false,
				'menu_icon' => 'dashicons-format-status',
				'show_in_rest' => true
			)
		);
	}
	add_action('init', 'api_post_type');

