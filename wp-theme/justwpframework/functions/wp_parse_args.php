<?php


/*
*
* wp_parse_args() functions
* ========================= */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly


/* Site title tag */


if ( ! function_exists( 'site_title' ) ) :

function site_title($args = ''){

	global $tag;

	// Default args
	$defaults = array (
 		'start_text' => get_bloginfo('name'),
		'separator' => '|',
 		'wp_title' => TRUE, 
		'tag_archive' => __('Tag : ', 'justwpframework'),
		'category_archive' => __('Archive : ', 'justwpframework'),
		'search_archive' => __('Search for : ', 'justwpframework'),
		'404' => __('Nothing found', 'justwpframework')	
	);	
	
	// Parse incoming $args into an array and merge it with $defaults
	$args = wp_parse_args( $args, $defaults );
	
	extract( $args, EXTR_SKIP );
	
	if ($wp_title == TRUE && is_tag()) { 
		echo $tag_archive ; 	
	}
	
	// $output = $start_text . ' ' . $end_text;	
	
	// echo $output; 
	
	return true;

}	

endif;