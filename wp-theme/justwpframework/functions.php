<?php


/* 
 * Theme functions go here 
 * ======================== */


/**
 * Sets up the content width value based on the theme's design and stylesheet.
 */
 
if ( ! isset( $content_width ) ) {
	$content_width = 625;
}	



function justwpframework_setup() {


	// Text domain for translation ready
	load_theme_textdomain( 'justwpframework', get_template_directory() . '/languages' );
	
	// This theme styles the visual editor with editor-style.css to match the theme style.
	add_editor_style();

	// Adds RSS feed links to <head> for posts and comments.
	add_theme_support( 'automatic-feed-links' );

	// This theme supports a variety of post formats.
	add_theme_support( 'post-formats', array(
		'aside', 'audio', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video'
	) );	

	// This theme uses wp_nav_menu() in one location.
	register_nav_menu( 'primary', __( 'Primary Menu', 'justwpframework' ) );

	/*
	 * This theme supports custom background color and image, and here
	 * we also set up the default background color.
	 */
	add_theme_support( 'custom-background', array(
		'default-color' => 'e6e6e6',
	) );

	// This theme uses a custom image size for featured images, displayed on "standard" posts.
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 624, 9999 ); // Unlimited height, soft crop	

}

add_action( 'after_setup_theme', 'justwpframework_setup' );



/*
 * Load CSS files for front end
* =============================== */

if(!function_exists('')){

	function justwpframework_frontend_styles(){

		// Loads main stylesheet.
		wp_enqueue_style( 'justwpframework-main-style', get_stylesheet_uri(), array(), '2013-09-20' );

	}

}
add_action( 'wp_enqueue_scripts', 'justwpframework_frontend_styles' );	
	
	
	
/**
 * Title tag
* ========================== */


function justwpframework_wp_title( $title, $sep ) {
	global $paged, $page;

	if ( is_feed() )
		return $title;

	// Add the site name.
	$title .= get_bloginfo( 'name' );

	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		$title = "$title $sep $site_description";

	// Add a page number if necessary.
	if ( $paged >= 2 || $page >= 2 )
		$title = "$title $sep " . sprintf( __( 'Page %s', 'justwpframework' ), max( $paged, $page ) );

	return $title;
}
add_filter( 'wp_title', 'justwpframework_wp_title', 10, 2 ); 





/**
 * Files inclution
 */ 

 

/* Enqueue functions */ 
include('functions/enqueue-scripts.php');


/* wp_parse_args() functions */
include('functions/wp_parse_args.php'); 


/* Template hooks file */
include('functions/jwp_hooks.php');


/* Template constructor file */
include('functions/jwp_template.php');
 


?>