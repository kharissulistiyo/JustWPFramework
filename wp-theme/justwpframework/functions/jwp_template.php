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
			
			<?php wp_nav_menu( array( 
				'theme_location' => 'primary', 
				'container' => false,				
				'menu_class' => 'top-navigation' 
			) ); 
			?>
			
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




/*
 * JWP Main Content
* ================= */

// Entry header
if(!function_exists('jwp_post_title')){

	function jwp_post_title(){ ?>
	
	<header class="entry-header">

		<?php if ( is_single() ) : ?>
		
		<h1 class="entry-title"><?php the_title(); ?></h1>
		
		<?php else : ?>
		
		<h1 class="entry-title">
			<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
		</h1>
		
		<?php endif; // is_single() ?>		
	
	</header>		
	
	<?php }

}

// Post meta
if(!function_exists('jwp_post_meta')){

	function jwp_post_meta(){
	
		// Translators: used between list items, there is a space after the comma.
		$categories_list = get_the_category_list( __( ', ', 'justwpframework' ) );

		// Translators: used between list items, there is a space after the comma.
		$tag_list = get_the_tag_list( '', __( ', ', 'justwpframework' ) );

		$date = sprintf( '<a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s">%4$s</time></a>',
			esc_url( get_permalink() ),
			esc_attr( get_the_time() ),
			esc_attr( get_the_date( 'c' ) ),
			esc_html( get_the_date() )
		);

		$author = sprintf( '<span class="author vcard"><a class="url fn n" href="%1$s" title="%2$s" rel="author">%3$s</a></span>',
			esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
			esc_attr( sprintf( __( 'View all posts by %s', 'justwpframework' ), get_the_author() ) ),
			get_the_author()
		);

		// Translators: 1 is category, 2 is tag, 3 is the date and 4 is the author's name.
		if ( $tag_list ) {
			$utility_text = __( 'This entry was posted in %1$s and tagged %2$s on %3$s<span class="by-author"> by %4$s</span>.', 'justwpframework' );
		} elseif ( $categories_list ) {
			$utility_text = __( 'This entry was posted in %1$s on %3$s<span class="by-author"> by %4$s</span>.', 'justwpframework' );
		} else {
			$utility_text = __( 'This entry was posted on %3$s<span class="by-author"> by %4$s</span>.', 'justwpframework' );
		}

		printf(
			$utility_text,
			$categories_list,
			$tag_list,
			$date,
			$author
		);	
	
	}

}


// Comment count
if(!function_exists('jwp_comment_count')){

	function jwp_comment_count(){ ?>

		<?php if ( comments_open() ) : ?>
			<div class="comments-link">
				<?php comments_popup_link( '<span class="leave-reply">' . __( 'No Reply', 'justwpframework' ) . '</span>', __( '1 Reply', 'justwpframework' ), __( '% Replies', 'justwpframework' ) ); ?>
			</div><!-- .comments-link -->
		<?php endif; // comments_open() ?>		
	
	<?php }

}


// Entry wrap opening
if(!function_exists('jwp_before_entry_content')){

	function jwp_before_entry_content(){ ?>
	
		<div class="entry">
		
		<?php echo "\n\n"; ?>
	
	<?php }

}


// Entry wrap closing
if(!function_exists('jwp_after_entry_content')){

	function jwp_after_entry_content(){ ?>
	
		<?php echo "\n\n"; ?>
	
		</div><!-- /.entry -->
	
	<?php }

}


if(!function_exists('jwp_post_entry_content')){

	function jwp_post_entry_content(){
	
		the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'justwpframework' ) ); 
	
	}

}


if(!function_exists('jwp_link_pages')){

	function jwp_link_pages(){

		wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'justwpframework' ), 'after' => '</div>' ) );	
	
	}
	
}





/*
 * Page Navigation
* ================ */

if(!function_exists('jwp_page_navigation')){

	function jwp_page_navigation(){
	
		global $wp_query;
			
		if ( $wp_query->max_num_pages > 1 ) : ?>
			<nav class="navigation" role="navigation">
				<h3 class="assistive-text"><?php _e( 'Post navigation', 'justwpframework' ); ?></h3>
				<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'justwpframework' ) ); ?></div>
				<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'justwpframework' ) ); ?></div>
			</nav><!-- /.navigation -->
		<?php endif;		
	
	}

}



/*
 * Post Navigation
* ================ */ 

if(!function_exists('jwp_post_navigation')){

	function jwp_post_navigation(){ ?>

		<?php if ( is_singular() ) : ?>
	
		<nav class="nav-single">
			<h3 class="assistive-text"><?php _e( 'Post navigation', 'justwpframework' ); ?></h3>
			<span class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'justwpframework' ) . '</span> %title' ); ?></span>
			<span class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'justwpframework' ) . '</span>' ); ?></span>
		</nav><!-- .nav-single -->	
		
		<?php endif; ?>
	
	<?php }	

}




/*
* Comment section
* =============== */

if(!function_exists('jwp_post_comment')){

	function jwp_post_comment(){
	
		if ( is_singular() )
			comments_template( '', true );
		
	}	

}



/*
 * Footer
* ========= */

if(!function_exists('jwp_footer_credit')){

	function jwp_footer_credit(){ ?>

		<div class="footer-credit">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'justwpframework' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'justwpframework' ); ?>"><?php printf( __( 'Proudly powered by %s', 'justwpframework' ), 'WordPress' ); ?></a>
		</div><!-- /.footer-credit -->		
		
	<?php }

}

 