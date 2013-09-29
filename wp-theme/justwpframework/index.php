<?php 

/*
* Index file template
* =================== */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

get_header(); ?>



<div id="content" role="main">


	<?php 
	/* Before post
	* Hooked: 'jwp_before_post', 'jwp_breadcrumb', 5 => Not implemented yet!
	* =================== */
	
	do_action('jwp_before_post'); ?>


	<?php if ( have_posts() ) : ?>

	
		<?php 
		/* Before post loop
		* No hook yet!
		*/
		
		do_action('jwp_before_post_loop'); ?>
		
	
		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
		
			<?php get_template_part( 'content', get_post_format() ); ?>
			
		<?php endwhile; ?>
		
		
		<?php 
		/* After post loop
		* Hook 'jwp_after_post_loop', 'jwp_page_navigation', 5
		*/		
		
		do_action('jwp_after_post_loop');?>
		
		
	<?php endif; ?>		
	
	
	<?php 
	/* After post
	* No hook yet!
	* ============ */
	do_action('jwp_after_post'); ?>
	

</div><!-- /#content -->


<?php get_sidebar(); ?>


<?php get_footer(); ?>