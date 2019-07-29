<?php
/**
 * WJ Roofing functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WJ_Roofing
 */

if ( ! function_exists( 'wj_roofing_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function wj_roofing_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on WJ Roofing, use a find and replace
		 * to change 'wj-roofing' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'wj-roofing', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'wj-roofing' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'wj_roofing_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'wj_roofing_setup' );


//Add Open Graph Meta Info 

function meta_data() {

    echo '<!--og tag-->';
    echo '<meta property="og:type" content="business.business">';
    echo '<meta property="og:title" content="W.J. Roofing Ltd.">';
    echo '<meta property="og:url" content="https://www.wjroofing.com/">';
    echo '<meta property="og:image" content="https://www.wjroofing.com/wp-content/uploads/2019/06/contact.jpg">';
    echo '<meta property="business:contact_data:street_address" content="9177 Plank Road">';
    echo '<meta property="business:contact_data:locality" content="Straffordville">';
    echo '<meta property="business:contact_data:region" content="Ontario">';
    echo '<meta property="business:contact_data:postal_code" content="N0J 1Y0">';
    echo '<meta property="business:contact_data:country_name" content="Canada">';

    echo '<!-- Global site tag (gtag.js) - Google Analytics -->';
    echo '<script async src="https://www.googletagmanager.com/gtag/js?id=UA-48328590-4"></script>';
    echo '<script>';
    echo 'window.dataLayer = window.dataLayer || [];';
    echo 'function gtag(){dataLayer.push(arguments);}';
    echo "gtag('js', new Date());";
    echo "gtag('config', 'UA-48328590-4');";
    echo '</script>';
    echo " ";
}
add_action( 'wp_head', 'meta_data', 5 );

/**
 * CUSTOM PRODUCTS POST TYPE
 */

function product_init() {
    // set up product labels
    $labels = array(
        'name' => 'Products',
        'singular_name' => 'Products',
        'add_new' => 'Add New Product',
        'add_new_item' => 'New Product',
        'edit_item' => 'Edit Product',
        'new_item' => 'New Product',
        'all_items' => 'All Products',
        'view_item' => 'View Product',
        'search_items' => 'Search Products',
        'not_found' =>  'No Product Found',
        'not_found_in_trash' => 'No Product found in Trash', 
        'parent_item_colon' => '',
        'menu_name' => 'Products',
    );
    
    // register post type
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'product'),
        'query_var' => true,
        'menu_icon' => 'dashicons-admin-multisite',
        'supports' => array(
			'title',
            'custom-fields'
        )
    );
    register_post_type( 'products', $args );
    
}
add_action( 'init', 'product_init' );

/**
 * CUSTOM SERVICES POST TYPE
 */

function service_init() {
    // set up service labels
    $labels = array(
        'name' => 'Services',
        'singular_name' => 'Services',
        'add_new' => 'Add New Service',
        'add_new_item' => 'New Service',
        'edit_item' => 'Edit Service',
        'new_item' => 'New Service',
        'all_items' => 'All Services',
        'view_item' => 'View Service',
        'search_items' => 'Search Services',
        'not_found' =>  'No Service Found',
        'not_found_in_trash' => 'No Service found in Trash', 
        'parent_item_colon' => '',
        'menu_name' => 'Services',
    );
    
    // register post type
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'service'),
        'query_var' => true,
        'menu_icon' => 'dashicons-hammer',
        'supports' => array(
			'title',
            'custom-fields'
        )
	);
    register_post_type( 'services', $args );
    
}
add_action( 'init', 'service_init' );

/**
 * CUSTOM GALLERY POST TYPE
 */

function gallery_init() {
    // set up gallery labels
    $labels = array(
        'name' => 'Gallery',
        'singular_name' => 'Gallery',
        'add_new' => 'Add New Image',
        'add_new_item' => 'New Image',
        'edit_item' => 'Edit Image',
        'new_item' => 'New Image',
        'all_items' => 'All Images',
        'view_item' => 'View Image',
        'search_items' => 'Search Images',
        'not_found' =>  'No Images Found',
        'not_found_in_trash' => 'No Images found in Trash', 
        'parent_item_colon' => '',
        'menu_name' => 'Gallery',
    );
    
    // register post type
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'gallery'),
        'query_var' => true,
        'menu_icon' => 'dashicons-images-alt2',
        'supports' => array(
			'title',
            'custom-fields'
        )
	);
    register_post_type( 'Gallery', $args );
    
}
add_action( 'init', 'gallery_init' );



/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wj_roofing_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'wj_roofing_content_width', 640 );
}
add_action( 'after_setup_theme', 'wj_roofing_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function wj_roofing_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'wj-roofing' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'wj-roofing' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'wj_roofing_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function wj_roofing_scripts() {
	wp_enqueue_style( 'wj-roofing-style', get_stylesheet_uri() );

	wp_enqueue_script( 'wj-roofing-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'wj-roofing-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_script('my-script', get_template_directory_uri() . '/js/myscript.js', array('jquery'), '' , true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'wj_roofing_scripts' );


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

