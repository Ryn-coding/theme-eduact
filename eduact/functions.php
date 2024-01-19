<?php
/**
 * eduAct functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package eduAct
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
function eduact_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on eduAct, use a find and replace
		* to change 'eduact' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'eduact', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'eduact' ),
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
			'eduact_custom_background_args',
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
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'eduact_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function eduact_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'eduact_content_width', 640 );
}
add_action( 'after_setup_theme', 'eduact_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function eduact_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'eduact' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'eduact' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'eduact_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function eduact_scripts() {
	wp_enqueue_style( 'eduact-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'eduact-style', 'rtl', 'replace' );

	wp_enqueue_script( 'eduact-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'eduact_scripts' );

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
 * Customizer theme.
 */
require get_template_directory() . '/inc/custom_enque_script.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

function enqueue_custom_scripts() {
    $script_files = array(
        'vendors/jquery/jquery-3.5.1.min.js',
		'vendors/bootstrap/js/bootstrap.bundle.min.js',
		'vendors/bootstrap-select/bootstrap-select.min.js',
		'vendors/jquery-ui/jquery-ui.js',
		'vendors/jarallax/jarallax.min.js',
		'vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js',
		'vendors/jquery-appear/jquery.appear.min.js',
		'vendors/jquery-circle-progress/jquery.circle-progress.min.js',
		'vendors/jquery-magnific-popup/jquery.magnific-popup.min.js',
		'vendors/jquery-validate/jquery.validate.min.js',
		'vendors/nouislider/nouislider.min.js',
		'vendors/odometer/odometer.min.js',
		'vendors/tiny-slider/tiny-slider.min.js',
		'vendors/owl-carousel/owl.carousel.min.js',
		'vendors/wnumb/wNumb.min.js',
		'vendors/jquery-circleType/jquery.circleType.js',
		'vendors/jquery-lettering/jquery.lettering.min.js',
		'vendors/tilt/tilt.jquery.js',
		'vendors/wow/wow.js',
		'vendors/isotope/isotope.js',
		'vendors/countdown/countdown.min.js',
		'js/eduact.js',
    );

    foreach ($script_files as $script_file) {
        wp_enqueue_script(
            sanitize_title($script_file),
            get_template_directory_uri() . '/assets/' . $script_file,
            array('jquery'), // Add any dependencies here
            filemtime(get_template_directory() . '/assets/' . $script_file),
            true
        );
    }
}

add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');