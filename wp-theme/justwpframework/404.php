<?php 

/*
* 404 file template
* =================== */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

get_header(); ?>



<div id="content" role="main">


	<?php 
	/* Before post
	* Hooked: 'jwp_before_post', 'jwp_breadcrumb', 5 => Not implemented yet!
	* =================== */
	
	do_action('jwp_before_post'); ?>


	<div class="entry-content">
	
		
		
		<header class="entry-header">
			
			<h1 class="entry-title"><?php _e('404', 'justwpframework'); ?></h1>
			
		</header>	
	
	
		<div class="entry 404">
		
			<p><?php _e('Nothing found!', 'justwpframework'); ?></p>
		
		</div>
	
	</div><!-- /.entry-content -->
	
	
	<?php 
	/* After post
	* No hook yet!
	* ============ */
	do_action('jwp_after_post'); ?>	
	

</div><!-- /#content -->



<?php get_sidebar(); ?>



<?php get_footer(); ?>