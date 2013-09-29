<?php

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly



/* JustWPFramework Template */


/*
 *	Site Identity
* ============================= */

if(!function_exists('jwp_site_identity')){

	function jwp_site_identity(){ ?>

		<div id="site-identity">
			<h1 class="site-name"><a class="home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-tagline"><?php bloginfo('description'); ?></h2>
		</div>		
	
	<?php }

}



/*
 * Main Navigation
* ============================= */

if(!function_exists('jwp_main_navigation')){
	
	function jwp_main_navigation(){ ?>
		
		<nav id="main-navigation" class="navigation-menu">
			
			<?php do_action('jwp_before_main_menu'); ?>
		
			<h3 class="menu-toggler"><?php _e('Main Menu', 'justwpframework'); ?></h3>
			<a class="screen-reader-text skip-link" href="#content" title="<?php esc_attr_e( 'Skip to content', 'justwpframework' ); ?>"><?php _e( 'Skip to content', 'justwpframework' ); ?></a>	
			
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'top-navigation' ) ); ?>
			
			<?php do_action('jwp_after_main_menu'); ?>
			
		</nav>		
	
	<?php }

}



/*
 * Top Search
* =========== */


if(!function_exists('jwp_top_search')){

	function jwp_top_search(){
		
		jwp_searchform($args);

	} 

}





/*
 * JWP Searchform
* =============== */

if(!function_exists('jwp_searchform')){


	function jwp_searchform($args = ''){
			
		// Default args
		$defaults = array (
			'label' => __('Search for: ', 'justwpframework'),
			'placeholder' => __('Put a keyword ', 'justwpframework'),
			'show_button' => TRUE,
			'button_text' => __('Search', 'justwpframework')
		);

		// Parse incoming $args into an array and merge it with $defaults
		$args = wp_parse_args( $args, $defaults );
		
		extract( $args, EXTR_SKIP );
			
		// output
		$output = '<form role="search" method="get" id="searchform" action="' .home_url( '/' ) . '">' . "\n\n";
		$output .= '<div>' . "\n";
		$output .= $label;
		$output .= '<input type="text" value="" name="s" id="s" placeholder="' . $placeholder . '" />';
		
		if($show_button == TRUE)
			$output .= '<input type="submit" id="searchsubmit" value="' . $button_text . '" />';
			
		$output .= '</div>' . "\n";
		$output .= '</form>' . "\n\n";	
			
		// echo $output; 		
		echo $output;		
		
	}

}