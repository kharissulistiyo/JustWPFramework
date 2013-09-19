<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>	
	
	
	<section id="wrapper" class="site">
	
	
		<header id="master-head" class="site-header" role="banner">
		
			<!-- Area 1 - This area must be insertable as a framework flexibility design -->
		
			<div id="site-identity">
				<h1 class="site-name"><a class="home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<h2 class="site-tagline"><?php bloginfo('description'); ?></h2>
			</div>
			
			<!-- Area 2 - This area must be insertable as a framework flexibility design -->
			
			<nav id="main-navigation" class="navigation-menu">
			
				<!-- Area 3 - This area must be insertable as a framework flexibility design -->
			
				<h3 class="menu-toggler"><?php _e('Main Menu', 'justwpframework'); ?></h3>
				<a class="screen-reader-text skip-link" href="#content" title="<?php esc_attr_e( 'Skip to content', 'justwpframework' ); ?>"><?php _e( 'Skip to content', 'justwpframework' ); ?></a>				
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'top-navigation' ) ); ?>
				
				<!-- Area 4 - This area must be insertable as a framework flexibility design -->
				
			</nav>	
			
			<!-- Area 5 - This area must be insertable as a framework flexibility design -->
			
			
			
			<!-- 
				It will allow developer to change the main navigation location. Whether before/after site identity
			-->
			
		</header><!-- /#master-head -->