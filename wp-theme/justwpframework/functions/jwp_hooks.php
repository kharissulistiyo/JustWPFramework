<?php

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly



/* Template hooks */


/*
 * Site header
* ============================= */

add_action('jwp_header', 'jwp_site_identity', 5 );
add_action('jwp_header', 'jwp_main_navigation', 10 );