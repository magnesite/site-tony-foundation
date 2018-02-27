<?php
/**
 * Tony Foundation functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Tony_Foundation
 */

if ( ! function_exists( 'tonyfoundation_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function tonyfoundation_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Tony Foundation, use a find and replace
		 * to change 'tonyfoundation' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'tonyfoundation', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'tonyfoundation' ),
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
		add_theme_support( 'custom-background', apply_filters( 'tonyfoundation_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for custom logo.
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );

		// Add support for specific post formats
		// for reference see https://developer.wordpress.org/themes/functionality/post-formats/
		add_theme_support( 'post-formats', array( 'gallery') );
	}
endif;
add_action( 'after_setup_theme', 'tonyfoundation_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function tonyfoundation_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'tonyfoundation_content_width', 640 );
}
add_action( 'after_setup_theme', 'tonyfoundation_content_width', 0 );

/**
 * Add preconnect for Google Fonts.
 * @param array  $urls           URLs to print for resource hints.
 * @param string $relation_type  The relation type the URLs are printed.
 * @return array $urls           URLs to print for resource hints.
 */
function tonyfoundation_resource_hints( $urls, $relation_type ) {
	if ( wp_style_is( 'tonyfoundation-fonts', 'queue' ) && 'preconnect' === $relation_type ) {
		$urls[] = array(
			'href' => 'https://fonts.gstatic.com',
			'crossorigin',
		);
	}

	return $urls;
}
add_filter( 'wp_resource_hints', 'tonyfoundation_resource_hints', 10, 2 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function tonyfoundation_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'tonyfoundation' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'tonyfoundation' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'tonyfoundation_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function tonyfoundation_scripts() {

        wp_enqueue_style('tonyfoundation-fonts', 'https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto+Slab:100,300,400,700');

        wp_enqueue_style( 'tonyfoundation-style', get_stylesheet_uri() );

				wp_enqueue_script( 'tonyfoundation-navigation', get_template_directory_uri() . '/js/navigation.js', array('jquery'), '20151215', true );

				wp_localize_script('tonyfoundation-navigation', 'tonyfoundationScreenReaderText', array (
            'expand' => __('Expand child menu', 'tonyfoundation'),
            'collapse' => __('Collapse child menu', 'tonyfoundation')
        ));

        wp_enqueue_script( 'tonyfoundation-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'tonyfoundation_scripts' );

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

/**
 * Load SVG icon functions.
 */
// require get_template_directory() . '/inc/icon-functions.php';

// Admin panel customization
// Change placeholder text in the post editor for the aboutsection post type
add_filter( 'enter_title_here', function( $title ) {
    $screen = get_current_screen();

    if  ( 'aboutsection' == $screen->post_type ) {
        $title = 'Enter section title here';
    }

    return $title;
} );

?>
