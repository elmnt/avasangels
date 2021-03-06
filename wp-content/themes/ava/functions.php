<?php
/**
 * ava functions and definitions
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * @package ava
 */

if ( ! function_exists( 'ava_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */

function ava_setup() {
	/**
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on ava, use a find and replace
	 * to change 'ava' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'ava', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/**
	 * Enable support for Post Thumbnails on posts and pages.
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	/**
	 * Reset thumbnail size
	 */
	function wpdocs_setup_theme() {
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 300, 300 );
	}
	add_action( 'after_setup_theme', 'wpdocs_setup_theme' );

	/**
	 * Add a custom image size for the home page featured post image
	 */
	add_image_size( 'home-featured-post', 600, 300, array( 'center', 'center' ) );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'ava' ),
	) );

	/**
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
	add_theme_support( 'custom-background', apply_filters( 'ava_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}

endif;
add_action( 'after_setup_theme', 'ava_setup' );


/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 * Priority 0 to make it available to lower priority callbacks.
 * @global int $content_width
 */
function ava_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'ava_content_width', 640 );
}
add_action( 'after_setup_theme', 'ava_content_width', 0 );


/**
 * Register widget area
 */
function ava_widgets_init() {

	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'ava' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'ava' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h5 class="widget-title">',
		'after_title'   => '</h5>',
	));

	register_sidebar( array(
		'name'          => esc_html__( 'Contact Info', 'ava' ),
		'id'            => 'sidebar-contact-info',
		'description'   => esc_html__( 'Drag the "Contact Info" widget here, from "Available Widgets" on the left.', 'ava' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h5 class="widget-title">',
		'after_title'   => '</h5>',
	));

}
add_action( 'widgets_init', 'ava_widgets_init' );


/**
 * Enqueue scripts and styles.
 */
function ava_scripts() {
	wp_enqueue_style( 'ava-style', get_stylesheet_uri() );

	// Loads Google Fonts
	$query_args = array(
		'family' => 'Quicksand:400,500'
	);
	wp_register_style('ava-fonts', add_query_arg($query_args, 'https://fonts.googleapis.com/css'), array(), null);
	wp_enqueue_style('ava-fonts');

	// Native _s navigation script not in use
	// wp_enqueue_script( 'ava-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	// Added in ava.min.js
	// wp_enqueue_script( 'ava-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_script('jquery');
	wp_enqueue_script('ava-jsmin', get_template_directory_uri() . '/js/ava.min.js', array('jquery'), '1.0', 'in-footer');

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'ava_scripts' );


/**
 * Custom Walker Nav
 */
require get_template_directory() . '/inc/ava-nav.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Contact Info Widget
 */
require get_template_directory() . '/inc/contact-info.php';

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
//require get_template_directory() . '/inc/jetpack.php';
