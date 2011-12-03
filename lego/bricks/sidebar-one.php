#primary.widget-area
	%ul.xoxo
		- if ( !dynamic_sidebar('primary-widget-area') ) : // begin primary widget area
			%li#search.widget-container.widget_search
				- get_search_form();

			%li#archives.widget-container
				%h3.widget-title= _e( 'Archives', 'twentyten' );
				%ul
					- wp_get_archives( 'type=monthly' );

			%li#meta.widget-container
				%h3.widget-title= _e( 'Meta', 'twentyten' );
				%ul
					- wp_register();
					%li= wp_loginout();
					- wp_meta();
		- endif; // end primary widget area

