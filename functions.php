<?php 


	//add theme support
function ft_coffee_setup_function(){

		add_theme_support( 'title-tag' );//use for get the dynamic title
		add_theme_support( 'menus' );//use for get the menus option in the appearance
		add_theme_support( 'widgets' );//use for get the widget option in the appearance
		add_theme_support( 'post-thumbnails' );//use for get the featured image in posts field
		load_theme_textdomain('ft_coffee');
	}

	// menu registration 
	register_nav_menus([

		'primary_menu'  => 'Primary Menu',

	] );
	add_action( 'after_setup_theme','ft_coffee_setup_function' );

	//file enqueue 
	function ft_coffee_file_enqueue(){
		//css file link the enqueue function
		wp_enqueue_style( 'bootstrap', get_theme_file_uri().'/css/bootstrap.css', null, false, 'all' );
		wp_enqueue_style( 'style', get_theme_file_uri().'/css/style.css', null, '1.3.0', 'all' );
		wp_enqueue_style( 'chocolat', get_theme_file_uri().'/css/chocolat.css', null, '2.0', 'all' );
		wp_enqueue_style( 'main', get_stylesheet_uri() );

		//js file link the enqueue function

		wp_enqueue_script('move-top', get_theme_file_uri().'/js/move-top.js', array('jquery'),true, true);//last e true dewar mane hocche etaki html er niche hobe naki upore false dile upore jabe tai true hoise
		wp_enqueue_script('easing', get_theme_file_uri().'/js/easing.js', array('jquery'),true, true);//last e true dewar mane hocche etaki html er niche hobe naki upore false dile upore jabe tai true hoise
		wp_enqueue_script('modernizr', get_theme_file_uri().'/js/modernizr.custom.97074.js', array('jquery'),true, true);//last e true dewar mane hocche etaki html er niche hobe naki upore false dile upore jabe tai true hoise
		wp_enqueue_script('chocolat', get_theme_file_uri().'/js/jquery.chocolat.js', array('jquery'),true, true);//last e true dewar mane hocche etaki html er niche hobe naki upore false dile upore jabe tai true hoise
		wp_enqueue_script('hoverdir', get_theme_file_uri().'/js/jquery.hoverdir.js', array('jquery'),true, true);//last e true dewar mane hocche etaki html er niche hobe naki upore false dile upore jabe tai true hoise
		wp_enqueue_script('flexisel', get_theme_file_uri().'/js/jquery.flexisel.js', array('jquery'),true, true);//last e true dewar mane hocche etaki html er niche hobe naki upore false dile upore jabe tai true hoise
		wp_enqueue_script('main', get_theme_file_uri().'/js/main.js', array('jquery'),true, true);//last e true dewar mane hocche etaki html er niche hobe naki upore false dile upore jabe tai true hoise

		//ei logical comment ta underscore theke newa hoise
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}


	}
	add_action( 'wp_enqueue_scripts','ft_coffee_file_enqueue' );

	//Redux framework installation 
	require_once("inc/redux/ReduxCore/framework.php");
	require_once("inc/redux/sample/config.php");

	//team member creation eta plugin er maddhomeo sohoje kora jay
	// function ft_coffee_team_member(){
	// 	register_post_type('team',[

	// 		'public' 		=> true,
	// 		'labels' 		=> [
	// 							'name'      => 'Team',
	// 							'all_items' => 'Members',
	// 							'add_new'   => 'Add New',
	// 						],
	// 		'menu_icon'		=> 'dashicons-groups',
	// 		'menu_position' => 5,
	// 	]);
	// }
	// add_action('init','ft_coffee_team_member');




// <?php
// /**
//  * ft_coffee functions and definitions
//  *
//  * @link https://developer.wordpress.org/themes/basics/theme-functions/
//  *
//  * @package ft_coffee
//  */

// if ( ! defined( '_S_VERSION' ) ) {
// 	// Replace the version number of the theme on each release.
// 	define( '_S_VERSION', '1.0.0' );
// }

// if ( ! function_exists( 'ft_coffee_setup' ) ) :
// 	/**
// 	 * Sets up theme defaults and registers support for various WordPress features.
// 	 *
// 	 * Note that this function is hooked into the after_setup_theme hook, which
// 	 * runs before the init hook. The init hook is too late for some features, such
// 	 * as indicating support for post thumbnails.
// 	 */
// 	function ft_coffee_setup() {
// 		/*
// 		 * Make theme available for translation.
// 		 * Translations can be filed in the /languages/ directory.
// 		 * If you're building a theme based on ft_coffee, use a find and replace
// 		 * to change 'ft_coffee' to the name of your theme in all the template files.
// 		 */
// 		load_theme_textdomain( 'ft_coffee' );

// 		// Add default posts and comments RSS feed links to head.
// 		add_theme_support( 'automatic-feed-links' );

// 		/*
// 		 * Let WordPress manage the document title.
// 		 * By adding theme support, we declare that this theme does not use a
// 		 * hard-coded <title> tag in the document head, and expect WordPress to
// 		 * provide it for us.
// 		 */
// 		add_theme_support( 'title-tag' );

// 		/*
// 		 * Enable support for Post Thumbnails on posts and pages.
// 		 *
// 		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
// 		 */
// 		add_theme_support( 'post-thumbnails' );

// 		// This theme uses wp_nav_menu() in one location.
// 		register_nav_menus(
// 			array(
// 				'menu-1' => esc_html__( 'Primary', 'ft_coffee' ),
// 			)
// 		);

// 		/*
// 		 * Switch default core markup for search form, comment form, and comments
// 		 * to output valid HTML5.
// 		 */
// 		add_theme_support(
// 			'html5',
// 			array(
// 				'search-form',
// 				'comment-form',
// 				'comment-list',
// 				'gallery',
// 				'caption',
// 				'style',
// 				'script',
// 			)
// 		);

// 		// Set up the WordPress core custom background feature.
// 		add_theme_support(
// 			'custom-background',
// 			apply_filters(
// 				'ft_coffee_custom_background_args',
// 				array(
// 					'default-color' => 'ffffff',
// 					'default-image' => '',
// 				)
// 			)
// 		);

// 		// Add theme support for selective refresh for widgets.
// 		add_theme_support( 'customize-selective-refresh-widgets' );

// 		*
// 		 * Add support for core custom logo.
// 		 *
// 		 * @link https://codex.wordpress.org/Theme_Logo

// 		add_theme_support(
// 			'custom-logo',
// 			array(
// 				'height'      => 250,
// 				'width'       => 250,
// 				'flex-width'  => true,
// 				'flex-height' => true,
// 			)
// 		);
// 	}
// endif;
// add_action( 'after_setup_theme', 'ft_coffee_setup' );

// /**
//  * Set the content width in pixels, based on the theme's design and stylesheet.
//  *
//  * Priority 0 to make it available to lower priority callbacks.
//  *
//  * @global int $content_width
//  */
// function ft_coffee_content_width() {
// 	$GLOBALS['content_width'] = apply_filters( 'ft_coffee_content_width', 640 );
// }
// add_action( 'after_setup_theme', 'ft_coffee_content_width', 0 );

// /**
//  * Register widget area.
//  *
//  * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
//  */
// function ft_coffee_widgets_init() {
// 	register_sidebar(
// 		array(
// 			'name'          => esc_html__( 'Sidebar', 'ft_coffee' ),
// 			'id'            => 'sidebar-1',
// 			'description'   => esc_html__( 'Add widgets here.', 'ft_coffee' ),
// 			'before_widget' => '<section id="%1$s" class="widget %2$s">',
// 			'after_widget'  => '</section>',
// 			'before_title'  => '<h2 class="widget-title">',
// 			'after_title'   => '</h2>',
// 		)
// 	);
// }
// add_action( 'widgets_init', 'ft_coffee_widgets_init' );

// /**
//  * Enqueue scripts and styles.
//  */
// function ft_coffee_scripts() {
// 	wp_enqueue_style( 'ft_coffee-style', get_stylesheet_uri(), array(), _S_VERSION );
// 	wp_style_add_data( 'ft_coffee-style', 'rtl', 'replace' );

// 	wp_enqueue_script( 'ft_coffee-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

// 	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
// 		wp_enqueue_script( 'comment-reply' );
// 	}
// }
// add_action( 'wp_enqueue_scripts', 'ft_coffee_scripts' );

// /**
//  * Implement the Custom Header feature.
//  */
// require get_template_directory() . '/inc/custom-header.php';

// /**
//  * Custom template tags for this theme.
//  */
// require get_template_directory() . '/inc/template-tags.php';

// /**
//  * Functions which enhance the theme by hooking into WordPress.
//  */
// require get_template_directory() . '/inc/template-functions.php';

// /**
//  * Customizer additions.
//  */
// require get_template_directory() . '/inc/customizer.php';

// /**
//  * Load Jetpack compatibility file.
//  */
// if ( defined( 'JETPACK__VERSION' ) ) {
// 	require get_template_directory() . '/inc/jetpack.php';
// }




