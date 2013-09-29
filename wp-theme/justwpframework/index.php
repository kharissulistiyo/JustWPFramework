<?php 

/*
* Index file template
* ===================*/

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

get_header(); ?>



<div id="content" role="main">

	<?php if ( have_posts() ) : ?>

		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
		
			<?php the_title(); ?>
			<?php the_content(); ?>
			
			<hr />
			
		<?php endwhile; ?>
		
	<?php endif; ?>	

</div><!-- /#content -->


<?php get_footer(); ?>