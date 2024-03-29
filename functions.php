<?php
/**
 * Nebula Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Nebula_Theme
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
function nebula_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Nebula Theme, use a find and replace
		* to change 'nebula' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'nebula', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'nebula' ),
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
			'nebula_custom_background_args',
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
add_action( 'after_setup_theme', 'nebula_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function nebula_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'nebula_content_width', 640 );
}
add_action( 'after_setup_theme', 'nebula_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function nebula_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'nebula' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'nebula' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Newsletter Area', 'nebula' ),
			'id'            => 'newsletter-1',
			'description'   => esc_html__( 'Add widgets here.', 'nebula' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Social media sharing POST', 'nebula' ),
			'id'            => 'social-post',
			'description'   => esc_html__( 'Add widgets here.', 'nebula' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'nebula_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function nebula_scripts() {
	wp_enqueue_style( 'nebula-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'nebula-style', 'rtl', 'replace' );
	wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/all.min.css', array(), '', 'all');

	wp_enqueue_style('nebula', get_template_directory_uri() . '/assets/scss/nebula.css', array(), '1.0.0', 'all');

	wp_enqueue_script( 'nebula-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'bootstrap-scripts', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'highlight', get_template_directory_uri() . '/assets/js/highlight.pack.js', array(), '', true );
	wp_enqueue_script( 'nebula-scripts', get_template_directory_uri() . '/assets/js/scripts.js', array(), '', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'nebula_scripts' );

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

/*------------------------------------*\
	Login Admin
\*------------------------------------*/

function my_login_styles() { ?>
    <style type="text/css">
      #login h1 a, .login h1 a {
      background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icon-pixonauta.png);
        height: 115px;
        width: 115px;
        background-size: cover;
        background-repeat: no-repeat;
	  }
	  /*Hasta aqui se cambia el logo, lo demas es custom login*/
	  #wp-submit{
		background: #753BBD;
		background-color: #753BBD;
		text-shadow: 0 -1px 1px #753BBD, 1px 0 1px #753BBD, 0 1px 1px #753BBD, -1px 0 1px #753BBD;
		border-color: #753BBD #753BBD #753BBD;
		box-shadow: 0 1px 0 #753BBD;
	  }
	  body{
		background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bg-login.png) !important;
		background-repeat: no-repeat !important;
		background-size: cover !important;
	  }
	  .login #backtoblog a, .login #nav a{
		  color: white !important;
	  }
	  #login {
		width: 320px;
		padding: 5% 0 0 !important;
		margin: auto;
		}
    </style>
  <?php }//end my_login_styles()
  add_action( 'login_enqueue_scripts', 'my_login_styles' );
  function my_login_logo_url() {
    return home_url();
  }//end my_login_logo_url()
  add_filter( 'login_headerurl', 'my_login_logo_url' );
  function my_login_logo_url_title() {
    return 'Pixonauta';
  }//end my_login_logo_url_title()
  add_filter( 'login_headertitle', 'my_login_logo_url_title' );




/*=============================================
=            NavWalker ca			            =
=============================================*/
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'THEMENAME' ),
) );

add_filter( 'nav_menu_link_attributes', 'prefix_bs5_dropdown_data_attribute', 20, 3 );
/**
 * Use namespaced data attribute for Bootstrap's dropdown toggles.
 *
 * @param array    $atts HTML attributes applied to the item's `<a>` element.
 * @param WP_Post  $item The current menu item.
 * @param stdClass $args An object of wp_nav_menu() arguments.
 * @return array
 */
function prefix_bs5_dropdown_data_attribute( $atts, $item, $args ) {
    if ( is_a( $args->walker, 'WP_Bootstrap_Navwalker' ) ) {
        if ( array_key_exists( 'data-toggle', $atts ) ) {
            unset( $atts['data-toggle'] );
            $atts['data-bs-toggle'] = 'dropdown';
        }
    }
    return $atts;
}
/*=============================================
=            SyntaxHighlighter Evolved			            =
=============================================*/

function ntz_fix_syntax_highlighter($content)
{
	return preg_replace('/&amp;([^;]+;)/', '&$1', $content);
}

add_filter('content_save_pre', 'ntz_fix_syntax_highlighter');
add_filter('syntaxhighlighter_htmlresult', 'ntz_fix_syntax_highlighter');
add_filter('syntaxhighlighter_precode', 'ntz_fix_syntax_highlighter');

/*=============================================
=            Custom Size thubnail			            =
=============================================*/
add_image_size( 'medium-recentpost', 338, 225, true );
// This enables the function that lets you set new image sizes


/*=============================================
=            Custom Pagination			            =
=============================================*/
/*Pagination (Paginacion)*/ 

function bootstrap_pagination( $echo = true ) {
	global $wp_query;

	$big = 999999999; // need an unlikely integer

	$pages = paginate_links( array(
			'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
			'format' => '?paged=%#%',
			'current' => max( 1, get_query_var('paged') ),
			'total' => $wp_query->max_num_pages,
			'type'  => 'array',
			'prev_next'   => true,
			'prev_text'    => __('« Anterior'),
			'next_text'    => __('Siguiente »'),
		)
	);

	if( is_array( $pages ) ) {
		$paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');

		$pagination = '<ul class="pagination">';

		foreach ( $pages as $page ) {
			$pagination .= "<li class='page-item'>$page</li>";
		}

		$pagination .= '</ul>';

		if ( $echo ) {
			echo $pagination;
		} else {
			return $pagination;
		}
	}
}
