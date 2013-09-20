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
		
			<!-- Area 3 - This area must be insertable as a framework flexibility design -->
		
			<h3 class="menu-toggler"><?php _e('Main Menu', 'justwpframework'); ?></h3>
			<a class="screen-reader-text skip-link" href="#content" title="<?php esc_attr_e( 'Skip to content', 'justwpframework' ); ?>"><?php _e( 'Skip to content', 'justwpframework' ); ?></a>				
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'top-navigation' ) ); ?>
			
			<!-- Area 4 - This area must be insertable as a framework flexibility design -->
			
		</nav>		
	
	<?php }

}

