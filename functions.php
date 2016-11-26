<?php
/**
 * moudod functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package moudod
 */

if ( ! function_exists( 'moudod_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function moudod_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on moudod, use a find and replace
	 * to change 'moudod' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'moudod', get_template_directory() . '/languages' );

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
		'primary' => esc_html__( 'Primary', 'moudod' ),
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

}
endif;
add_action( 'after_setup_theme', 'moudod_setup' );


/**
 * Enqueue scripts and styles.
 */
function moudod_scripts() {

	wp_enqueue_style( 'moudod-style-libs', get_template_directory_uri() . '/css/libs.min.css');
	wp_enqueue_style( 'moudod-style-fa', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css');
	wp_enqueue_style( 'moudod-style', get_template_directory_uri() . '/css/styles.min.css');

	wp_enqueue_script( 'moudod-script-jq', get_template_directory_uri() . '/js/jquery-2.1.3.min.js', array(), '', true );
	wp_enqueue_script( 'moudod-script-bs', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '', true );
	wp_enqueue_script( 'moudod-script-ya', 'https://api-maps.yandex.ru/2.0-stable/?load=package.standard&lang=ru-RU', array(), '', true );
	wp_enqueue_script( 'moudod-script-owl', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), '', true );
	wp_enqueue_script( 'moudod-script', get_template_directory_uri() . '/js/script.min.js', array(), '', true );
}
add_action( 'wp_enqueue_scripts', 'moudod_scripts' );
/**
 * Load custom post types.
 */
require get_template_directory() . '/inc/post.php';