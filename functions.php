<?php
/**
 * XPRS functions and definitions
 *
 *
 * @package WordPress
 * @subpackage XPRS
 * @since 2018
 */

/**
 * Enqueue The Styles & Scripts To Use In The Theme
 */
function xprs_enqueue_styles(){
    wp_enqueue_script('webflow-js', get_template_directory_uri() . '/assets/js/webflow.js', array('jquery'));
    wp_enqueue_style("normalize",  get_template_directory_uri() . "/assets/css/normalize.css");
    wp_enqueue_style("webflow",  get_template_directory_uri() . "/assets/css/webflow.css");
    wp_enqueue_style("xprs",  get_template_directory_uri() ."/assets/css/xprs-music-services.webflow.css");
    wp_enqueue_style("xprs-style", get_stylesheet_uri());
    
}
add_action("wp_enqueue_scripts", "xprs_enqueue_styles");


function xprs_setup(){
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
	 * See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 825, 510, true );
    /*
    * Make theme available for translation.
    * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/twentyfifteen
    * If you're building a theme based on xprs, use a find and replace
    * to change 'xprs' to the name of your theme in all the template files
    */
    load_theme_textdomain( 'xprs' );
    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );    
    
    
    // This theme uses wp_nav_menu() in two locations.
    register_nav_menus( array(
    'logged-in'     => __("Logged-In Menu", "xprs-login"),
    'logged-out'    => __("Logged-Out Menu", "xprs-logout"),
        
    ));
    
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'audio',
	
	) );
	
	// Indicate widget sidebars can use selective refresh in the Customizer.
	add_theme_support( 'customize-selective-refresh-widgets' );
	
}
add_action( 'after_setup_theme', 'xprs_setup' );

/**
 * Register widget area.
 *
 * @since 2018
 *
 * @link https://codex.wordpress.org/Function_Reference/register_sidebar
 */
function xprs_widgets(){

    register_sidebar(array(
     'name'           => __('Categories- Sidebar', 'xprs'),
     'id'             => 'article-sidebar',
     'description'    => __('Add widgets here to appear in the sidebar', 'xprs'),
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget'  => '</aside>',
	'before_title'  => '<h2 class="widget-title">',
	'after_title'   => '</h2>'
  ));
  
   register_sidebar(array(
	'name'          => __( 'Course Sidebar Area', 'xprs' ),
	'id'            => 'course-sidebar',
	'description'   => __( 'Add widgets here to appear in your sidebar.', 'xprs' ),
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget'  => '</aside>',
	'before_title'  => '<h2 class="widget-title">',
	'after_title'   => '</h2>'
  ));
  
}
add_action('widgets_init', 'xprs_widgets');

/**
 * Remove Widget Titles
 *
 * @since 2018
 *
 * @link https://codex.wordpress.org/Function_Reference/register_sidebar
 */
// add_filter('widget_title','xprs_widget_title'); 
// function xprs_widget_title($t)
// {

//     return null;
// }

//Add Excerpts To Pages
add_post_type_support( 'page', 'excerpt' );
