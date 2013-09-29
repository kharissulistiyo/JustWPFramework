<?php
/**
* Sidebar template file
*/


if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly


?>



<div id="sidebar">

	
	<?php 
	/*
	* Before sidebar
	* No hook yet!
	*/
	do_action('jwp_before_sidebar'); ?>

	
	
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
	
	
	
	<?php 
	/*
	* After sidebar
	* No hook yet!
	*/
	do_action('jwp_after_sidebar'); ?>
	
	

</div><!-- /#sidebar -->