:php
  /*
    Template Name: One column, no sidebar
    Description: A template with no sidebar
  */
!!! XHTML
%html
	%head
		- piece('html-head-content')
		- yield('stylesheets')
		- yield('javascripts')

	%body
		#wrapper
			- piece('header');
			- yield('content');
			- piece('footer');
    
		- wp_footer();