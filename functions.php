<?php

	require_once get_template_directory() . '/wp-bootstrap-navwalker/class-wp-bootstrap-navwalker.php';

	// Je crée une fonction PHP pour le chargement des scripts
	function custom_script()
	{

		wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array(), false, true);
		wp_enqueue_script('jquery-js', get_template_directory_uri() . '/js/jquery-3.4.1.min.js', array(), false, true);
	}

	add_action('wp_enqueue_scripts', 'custom_script');

	
	// Je crée une fonction pour charger tous les fichiers CSS
	function custom_style()
	{
		wp_enqueue_style('googlefont-css', 'https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap', array(), null);
		wp_enqueue_style('themestyle-css', get_template_directory_uri() . '/css/style.css', array(), null);
		wp_enqueue_style('themestyle-responsive-css', get_template_directory_uri() . '/css/responsive.css', array(), null);
		wp_enqueue_style('themestyle-bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), null);
		wp_enqueue_style('themestyle-carousel', get_template_directory_uri() . 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css', array(), null);
	}
	
	//3. J'accroche ma fonction api_styles à l'action wp_enqueue_scripts
	add_action('wp_enqueue_scripts', 'custom_style');
	
	// Activer le support par le thème des images de mise en avant
	add_theme_support('post-thumbnails');
	
	// Activer le support par le thème de la génération automatique de balise title
	add_theme_support('title-tag');

	
	// Filtre pour modifier la longueur de l'extrait pour les articles
	function longueurExtrait() {
		return 20;
	}
	add_filter('excerpt_length', 'longueurExtrait');

	
	// Filtre pour modifier le "lire la suite" en fin d'extrait
	function customLireLaSuite() {
		return '&nbsp;...';
	}
	add_filter('excerpt_more', 'customLireLaSuite');
	
	// Déclaration des menus du thème
	register_nav_menus( array(
		// ID du menu, Nom affiché dans le back-office, identifiant du thème
		'Header' => __( 'Menu principal', 'themecustom'),
		'Footer' => __( 'Menu bas de page', 'themecustom'),
	) );
	
	// Création d'une ou plusieurs zones de widgets / sidebars
	function electrochip_widgets_init() {
		register_sidebar( array(
			'name'          => 'Test',
			'id'            => 'test',
			'before_widget' => '<div>',
			'after_widget'  => '</div>',
			'before_title'  => '<h5>',
			'after_title'   => '</h5>'
		) 
		);
	}
	add_action( 'widgets_init', 'electrochip_widgets_init' );

	// Création d'un nouveau type de contenu
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

	// Création de catégories pour les services
	function serviceTaxonomie() {
		$labels = array(
			'name'              => _x( 'Types', 'taxonomy general name', 'themecustom' ),
			'singular_name'     => _x( 'Type', 'taxonomy singular name', 'themecustom' ),
			'search_items'      => __( 'Rechercher les types', 'themecustom' ),
			'all_items'         => __( 'Tous les types', 'themecustom' ),
			'parent_item'       => __( 'Type parent', 'themecustom' ),
			'parent_item_colon' => __( 'Type parent:', 'themecustom' ),
			'edit_item'         => __( 'Editer le type', 'themecustom' ),
			'update_item'       => __( 'Mettre à jour le type', 'themecustom' ),
			'add_new_item'      => __( 'Ajouter un type', 'themecustom' ),
			'new_item_name'     => __( 'Nouveau nom du type', 'themecustom' ),
			'menu_name'         => __( 'Types', 'themecustom' ),
		);
	 
		$args = array(
			'hierarchical'      => true,
			'labels'            => $labels,
			'show_ui'           => true,
			'show_admin_column' => true,
			'query_var'         => true,
			'show_in_rest'      => true,
			'rest_base'         => 'typage',
			'rewrite'           => array( 'slug' => 'type' ),
		);
	
		register_taxonomy( 'type', array( 'service' ), $args );
		
	}
		
	add_action( 'init', 'serviceTaxonomie', 0 );

	if( function_exists('acf_add_options_page') ) {
		acf_add_options_page(array(
			'page_title' 	=> 'Options',
			'menu_title'	=> 'Options',
			'menu_slug' 	=> 'config-theme',
			'capability'	=> 'edit_posts',
			'redirect'		=> true
		));
		
		acf_add_options_sub_page(array(
			'page_title' 	=> 'Coordonnées',
			'menu_title'	=> 'Coordonnées',
			'parent_slug'	=> 'config-theme',
		));
		
		acf_add_options_sub_page(array(
			'page_title' 	=> 'Réseaux sociaux',
			'menu_title'	=> 'Réseaux sociaux',
			'parent_slug'	=> 'config-theme',
		));

		acf_add_options_sub_page(array(
			'page_title' 	=> 'Logo',
			'menu_title'	=> 'Logo',
			'parent_slug'	=> 'config-theme',
		));

	}
	
	