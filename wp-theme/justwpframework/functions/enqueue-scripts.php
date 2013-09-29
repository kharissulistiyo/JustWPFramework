<?php

/*
 * Function to register front-end scripts
 * ====================================== */
 
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly 
 
 

if ( ! function_exists( 'justwpframework_enqueue_script' ) ) :


function justwpframework_enqueue_script(){

	/* Register Scripts */
	wp_register_script('modernizr', get_template_directory_uri().'/assets/js/modernizr.min.js', null, '2.6.2', false );

	
	
	/* Enqueue Scripts */
	wp_enqueue_script('modernizr');	

}

add_action( 'wp_enqueue_scripts', 'justwpframework_enqueue_script' );

endif;