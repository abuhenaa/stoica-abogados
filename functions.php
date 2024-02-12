<?php
/**
 * STOICA ABOGADOS functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package STOICA_ABOGADOS
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function stoica_abogados_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on STOICA ABOGADOS, use a find and replace
		* to change 'stoica-abogados' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'stoica-abogados', get_template_directory() . '/languages' );

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
	register_nav_menus(
		array(
			'main-menu' => esc_html__( 'Primary', 'stoica-abogados' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'stoica_abogados_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 60,
			'width'       => 320,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'stoica_abogados_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function stoica_abogados_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'stoica_abogados_content_width', 640 );
}
add_action( 'after_setup_theme', 'stoica_abogados_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function stoica_abogados_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'stoica-abogados' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'stoica-abogados' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'stoica_abogados_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function stoica_abogados_scripts() {
	wp_enqueue_style( 'Montserrat', '//fonts.googleapis.com/css?family=Montserrat:700,400', array(), _S_VERSION );
	wp_enqueue_style( 'Playfair Display', '//fonts.googleapis.com/css?family=Playfair+Display:400,700,900,400italic,700italic,900italic&amp;subset=latin,latin-ext,cyrillic', array(), _S_VERSION );
	wp_enqueue_style( 'Raleway', '//fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900', array(), _S_VERSION );
	wp_enqueue_style( 'animateCSS', get_template_directory_uri() .'assets/vendors/animate.css/animate.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'stoica-abogados-font', get_template_directory_uri() . '/assets/fonts/styles.css', array(), _S_VERSION );
	wp_enqueue_style( 'stoica-abogados-style', get_template_directory_uri() . '/assets/css/main.css', array(), _S_VERSION );
	//wp_style_add_data( 'stoica-abogados-style', 'rtl', 'replace' );

	wp_enqueue_script( 'stoica-abogados-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/vendors/jquery/dist/jquery.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/vendors/bootstrap/dist/js/bootstrap.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'waypoint', get_template_directory_uri() . '/assets/vendors/waypoints/lib/jquery.waypoints.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'sticky', get_template_directory_uri() . '/assets/vendors/waypoints/lib/shortcuts/sticky.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'smoothScroll', get_template_directory_uri() . '/assets/vendors/smoothscroll/SmoothScroll.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'wow', get_template_directory_uri() . '/assets/vendors/wow/dist/wow.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'parallax', get_template_directory_uri() . '/assets/vendors/parallax.js/parallax.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'jquery-ui', get_template_directory_uri() . '/assets/vendors/jquery-ui/jquery-ui.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'jquery-countTo', get_template_directory_uri() . '/assets/vendors/jquery-countTo/jquery.countTo.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'slick-carousel', get_template_directory_uri() . '/assets/vendors/slick-carousel/slick/slick.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'magnific-popup', get_template_directory_uri() . '/assets/vendors/magnific-popup/dist/jquery.magnific-popup.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'jquery-modal', get_template_directory_uri() . '/assets/vendors/jquery-modal/jquery.modal.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/main.js', array('jquery'), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'stoica_abogados_scripts' );

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

