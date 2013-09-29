<?php

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly



/* Template hooks */




/*
 * Site header
* ============================= */

add_action('jwp_header', 'jwp_site_identity', 5 );
add_action('jwp_header', 'jwp_main_navigation', 10 );




/*
 * Site navigation
* ============================= */ 

add_action('jwp_after_main_menu', 'jwp_top_search', 1 );





/*
 * Main content
* ============= */

add_action('jwp_entry_header', 'jwp_post_title', 5);
add_action('jwp_entry_header', 'jwp_post_meta', 10);


add_action('jwp_entry_content', 'jwp_before_entry_content', 5); 
add_action('jwp_entry_content', 'jwp_post_entry_content', 10); 
add_action('jwp_entry_content', 'jwp_link_pages', 15); 
add_action('jwp_entry_content', 'jwp_after_entry_content', 20); 

add_action('jwp_entry_footer', 'jwp_comment_count', 5);
add_action('jwp_entry_footer', 'jwp_post_navigation', 10);
add_action('jwp_entry_footer', 'jwp_post_comment', 15);


add_action('jwp_after_post_loop', 'jwp_page_navigation', 5);


/*
 * Footer
* ============ */

add_action('jwp_footer', 'jwp_footer_credit', 30);  