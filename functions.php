<?php
/**
 * Bizlight functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Bizlight
 */

if ( ! function_exists( 'bizlight_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function bizlight_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Bizlight, use a find and replace
	 * to change 'bizlight' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'bizlight', get_template_directory() . '/languages' );

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
		'primary' => esc_html__( 'Primary Menu', 'bizlight' ),
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

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'bizlight_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // bizlight_setup
add_action( 'after_setup_theme', 'bizlight_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function bizlight_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'bizlight_content_width', 640 );
}
add_action( 'after_setup_theme', 'bizlight_content_width', 0 );


/**
 * Enqueue scripts and styles.
 */
function bizlight_scripts() {

	/*Bootstrap css*/
    wp_enqueue_style( 'bizlight-bootstrap-css', get_template_directory_uri() . '/assets/frameworks/bootstrap/css/bootstrap.css', array(), '3.3.4' );/*added*/

	/*google font*/
    wp_enqueue_style( 'bizlight-googleapis', '//fonts.googleapis.com/css?family=Raleway:400,300,600,700', array(), '' );/*added*/

	/*Font-Awesome-master*/
    wp_enqueue_style( 'bizlight-fontawesome', get_template_directory_uri() . '/assets/frameworks/Font-Awesome/css/font-awesome.min.css', array(), '4.4.0' );/*added*/

    /*bxslider css*/
    wp_enqueue_style( 'bizlight-bxslider-css', get_template_directory_uri() . '/assets/frameworks/bxslider/css/jquery.bxslider.css', array(), '4.0' );/*added*/

    /*main style*/
    wp_enqueue_style( 'bizlight-style', get_stylesheet_uri() );

    /*jquery start*/
    wp_register_script('bizlight-easing-js', get_template_directory_uri() . '/assets/frameworks/jquery.easing/jquery.easing.js', array('jquery'), '0.3.6', 1);
    wp_register_script('bizlight-bootstrap-js', get_template_directory_uri() . '/assets/frameworks/bootstrap/js/bootstrap.min.js', array('jquery'), '3.3.5', 1);
    wp_register_script('bizlight-bxslider-js', get_template_directory_uri() . '/assets/frameworks/bxslider/js/jquery.bxslider.js', array('jquery'), '4.0', 1);
    wp_register_script('bizlight-custom', get_template_directory_uri() . '/assets/js/bizlight-custom.js', array('jquery'), '4.0', 1);

    wp_enqueue_script('bizlight-easing-js');
    wp_enqueue_script('bizlight-bootstrap-js');
    wp_enqueue_script('bizlight-bxslider-js');

    
    wp_localize_script( 'bizlight-custom', 'bizlight_main', $translation_array );
    wp_enqueue_script( 'bizlight-custom' );

    wp_enqueue_script( 'bizlight-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '20120206', true );

    wp_enqueue_script( 'bizlight-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20130115', true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) && !(is_front_page()) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'bizlight_scripts' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function bizlight_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'bizlight' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'bizlight_widgets_init' );


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
