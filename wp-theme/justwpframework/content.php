<?php
/**
* The template for displaying post content
* ======================================== */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	
	
	<?php 
	/*
	* Post header
	* Hooked: 'jwp_entry_header', 'jwp_post_title', 5;
	* Hooked: 'jwp_entry_header', 'jwp_post_meta', 10;
	*/
	
	do_action('jwp_entry_header'); ?>	
	
	
	
	<div class="entry-content">

		<?php 
		
		/*
		* Entry content
		* Hooked: 'jwp_entry_content', 'jwp_before_entry_content', 5 
		* Hooked: 'jwp_entry_content', 'jwp_post_entry_content', 10
		* Hooked: 'jwp_entry_content', 'jwp_link_pages', 15
		* Hooked: 'jwp_entry_content', 'jwp_after_entry_content', 20
		*/
		
		do_action('jwp_entry_content'); ?>
	
	</div><!-- /.entry-content -->
	
	
	<?php 
	/* 
	* Post footer
	* Hooked: 'jwp_entry_footer', 'jwp_comment_count', 5
	* Hooked: 'jwp_entry_footer', 'jwp_post_navigation', 10
	* Hooked: 'jwp_entry_footer', 'jwp_post_comment', 15
	*/
	
	do_action('jwp_entry_footer'); ?>
	

</article><!-- /#post-<?php the_ID(); ?> -->