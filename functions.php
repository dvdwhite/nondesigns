<?php
/**
 * nondesigns functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package nondesigns
 */

if ( ! function_exists( 'nondesigns_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function nondesigns_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on nondesigns, use a find and replace
	 * to change 'nondesigns' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'nondesigns', get_template_directory() . '/languages' );

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
		'primary' => esc_html__( 'Primary', 'nondesigns' ),
        'projects' => esc_html__( 'Projects', 'nondesigns' ),
        'products' => esc_html__( 'Products', 'nondesigns' ),
        'info' => esc_html__( 'Info', 'nondesigns' ),
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
	add_theme_support( 'custom-background', apply_filters( 'nondesigns_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'nondesigns_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function nondesigns_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'nondesigns_content_width', 640 );
}
add_action( 'after_setup_theme', 'nondesigns_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function nondesigns_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'nondesigns' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'nondesigns' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'nondesigns_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function nondesigns_scripts() {
	wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css' );

	wp_enqueue_style( 'nondesigns-style', get_stylesheet_uri() );

	wp_enqueue_style( 'MyFontsWebfontsKit', get_template_directory_uri() . '/css/MyFontsWebfontsKit.css' );

	wp_enqueue_style( 'jquery-modal-css', get_template_directory_uri() . '/css/jquery.modal.css' );

	// deregister default jQuery included with Wordpress
    wp_deregister_script( 'jquery' );
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-2.1.1.min.js', array(), '20150705', false );
    
    wp_enqueue_script( 'jquery-cycle2', get_template_directory_uri() . '/js/jquery.cycle2.js', array(), '20150705', false );

	wp_enqueue_script( 'jquery-cycle2-swipe', get_template_directory_uri() . '/js/jquery.cycle2.swipe.min.js', array(), '20150705', false );

	wp_enqueue_script( 'jquery-cycle2-scrollVert', get_template_directory_uri() . '/js/jquery.cycle2.scrollVert.js', array(), '20150705', false );

	wp_enqueue_script( 'jquery-cycle2-video', get_template_directory_uri() . '/js/jquery.cycle2.video.min.js', array(), '20170518', false );	

	wp_enqueue_script( 'jquery-modal', get_template_directory_uri() . '/js/jquery.modal.min.js', array(), '20170526', false );	

	wp_enqueue_script( 'nondesigns-javascript', get_template_directory_uri() . '/js/global.js', array(), '20150705', false );

    wp_enqueue_script( 'nondesigns-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', false );

	wp_enqueue_script( 'nondesigns-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', false );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'nondesigns_scripts' );

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

include 'metabox.php';