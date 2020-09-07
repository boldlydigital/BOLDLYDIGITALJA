<?php
/**
 * business-plan functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Business_Plan 
 */

if ( ! function_exists( 'business_plan_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function business_plan_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on business-plan, use a find and replace
	 * to change 'business-plan' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'business-plan', get_template_directory() . '/languages' );

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
	add_image_size( 'business-plan-slider', 1351, 600, true);
	add_image_size( 'business-plan-service', 74, 53, true);
	add_image_size( 'business-plan-blog', 565, 349, true);
	add_image_size( 'business-plan-work', 360, 252, true);
	add_image_size( 'business-plan-archive', 295, 245, true);

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'business-plan' ),
		'social-menu' => esc_html__( 'Social Menu', 'business-plan' ),
		'top-menu' => esc_html__( 'Top Menu', 'business-plan' ),
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
	add_theme_support( 'custom-background', apply_filters( 'business_plan_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	add_theme_support( 'custom-header',array(
	    'width'         => 1351,
	    'height'        => 416,	    
		)
	);

	add_theme_support( 'custom-logo' );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
	
	// Add Support for full and wide align image
	add_theme_support( 'align-wide');

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );	
}
endif;
add_action( 'after_setup_theme', 'business_plan_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function business_plan_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'business_plan_content_width', 640 );
}
add_action( 'after_setup_theme', 'business_plan_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function business_plan_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'business-plan' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'business-plan' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => sprintf( esc_html__( 'Footer %d', 'business-plan' ), 1 ),
		'id'            => 'footer-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => sprintf( esc_html__( 'Footer %d', 'business-plan' ), 2 ),
		'id'            => 'footer-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => sprintf( esc_html__( 'Footer %d', 'business-plan' ), 3 ),
		'id'            => 'footer-3',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'business_plan_widgets_init' );


if ( ! function_exists( 'business_plan_fonts_url' ) ) :

    /**
     * Return fonts URL.
     *
     * @since 1.0.0
     * @return string Font URL.
     */
    function business_plan_fonts_url() {

    $fonts_url = '';

    /**
     * Translators: If there are characters in your language that are not
     * supported by Libre Franklin, translate this to 'off'. Do not translate
     * into your own language.
     */
    $roboto = _x( 'on', 'Open Sans font: on or off', 'business-plan' );

    if ( 'off' !== $roboto ) {
        $font_families = array();

        $font_families[] = 'Open Sans:300,300i,400,400i,600,600i,700,700i,800,800i';

        $query_args = array(
            'family' => urlencode( implode( '|', $font_families ) ),
            'subset' => urlencode( 'latin,latin-ext' ),
            );

        $fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
    }

    return esc_url_raw( $fonts_url );
}

endif;


/**
 * Enqueue scripts and styles.
 */
function business_plan_scripts() {

	$fonts_url = business_plan_fonts_url();	

	if ( ! empty( $fonts_url ) ) {
		wp_enqueue_style( 'business-plan-google-fonts', $fonts_url, array(), null );
	}

	// Load fontawesome
	wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/assest/css/font-awesome.min.css', array(), '4.7.0' );

	// Load owl carousel
	wp_enqueue_script( 'owl-carousel', get_template_directory_uri().'/assest/js/owl.carousel.js', array('jquery'), false, true );
		
	// Load jquery-meanmenu js
	wp_enqueue_script( 'jquery-meanmenu', get_template_directory_uri().'/assest/js/jquery.meanmenu.js', array('jquery'), false, true );	

	wp_enqueue_script( 'jquery-mixitup-js', get_template_directory_uri() . '/assest/js/jquery.mixitup.js', array('jquery'), '2017417', true );

	wp_enqueue_style( 'business-plan-style', get_stylesheet_uri() );
		add_editor_style( 'business-plan-style', get_stylesheet_uri());
	

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	// Load owl-carousel css
	wp_enqueue_style( 'owl-carousel', get_template_directory_uri().'/assest/css/owl.carousel.css', array(), '1.0.0' );

	// Load owl-theme css
	wp_enqueue_style( 'owl-theme', get_template_directory_uri().'/assest/css/owl.theme.css', array(), '1.0.0' );

	// Load meanmenu css
	wp_enqueue_style( 'meanmenu', get_template_directory_uri().'/assest/css/meanmenu.css', array(), '1.0.0' );

	wp_enqueue_script( 'business-plan-custom', get_template_directory_uri() . '/assest/js/custom.js', array('jquery'), false, true );
}
add_action( 'wp_enqueue_scripts', 'business_plan_scripts' );

/**
 * Load init.
 */
require_once get_template_directory() . '/inc/init.php';
