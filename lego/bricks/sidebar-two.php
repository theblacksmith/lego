- if ( is_active_sidebar('secondary-widget-area') ) : // Nothing here by default and design
	#secondary.widget-area
		%ul.xoxo
		 	- dynamic_sidebar( 'secondary-widget-area' );
- endif;