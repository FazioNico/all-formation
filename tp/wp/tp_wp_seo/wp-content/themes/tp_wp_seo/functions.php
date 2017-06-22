<?php
# @Author: Nicolas Fazio <webmaster-fazio>
# @Date:   22-06-2017
# @Email:  contact@nicolasfazio.ch
# @Last modified by:   webmaster-fazio
# @Last modified time: 22-06-2017

/**
 * tp_wp_seo functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package tp_wp_seo
 */

if ( ! function_exists( 'tp_wp_seo_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function tp_wp_seo_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on tp_wp_seo, use a find and replace
	 * to change 'tp_wp_seo' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'tp_wp_seo', get_template_directory() . '/languages' );

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
		'menu-1' => esc_html__( 'Primary', 'tp_wp_seo' ),
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
	add_theme_support( 'custom-background', apply_filters( 'tp_wp_seo_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'tp_wp_seo_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function tp_wp_seo_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'tp_wp_seo_content_width', 640 );
}
add_action( 'after_setup_theme', 'tp_wp_seo_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function tp_wp_seo_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'tp_wp_seo' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'tp_wp_seo' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'tp_wp_seo_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
 function tp_wp_seo_scripts_custom_theme() {
 	wp_enqueue_style( 'tp_wp_seo-style-materialize', get_template_directory_uri(). '/css/materialize.css', array(), '20151216' );
 	wp_enqueue_script( 'tp_wp_seo-materialize', get_template_directory_uri() . '/js/materialize.min.js', array(), '20151215', true );
 }
 add_action( 'wp_enqueue_scripts', 'tp_wp_seo_scripts_custom_theme' );

function tp_wp_seo_scripts() {
	wp_enqueue_style( 'tp_wp_seo-style', get_stylesheet_uri() );

	wp_enqueue_script( 'tp_wp_seo-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'tp_wp_seo-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'tp_wp_seo_scripts' );


// add_action( 'admin_enqueue_scripts', 'my_enqueue' ); // pour ajouter uniquement sur l'admin

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Additional features to allow styling of the templates.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

// Register wp-materialize-navwalker
 require_once get_template_directory() . '/wp_materialize_navwalker.php';
 register_nav_menus(
     array(
         'Primary'   =>  __( 'Primary Menu', 'tp_wp_seo' ),
         // Register the Primary menu and Drawer menu
         // Theme uses wp_nav_menu() in TWO locations.
         // Copy and paste the line above right here if you want to make another menu,
         // just change the 'primary' to another name
     )
 );
