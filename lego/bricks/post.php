#nav-above(class="navigation")
	.nav-previous()
		- previous_post_link( '%link', '<span class="meta-nav">&larr;</span> %title' );
	.nav-next()
		- next_post_link( '%link', '%title <span class="meta-nav">&rarr;</span>' );

#post
	%h1(class="entry-title")= the_title();

	.entry-meta
		%span(class="meta-prep meta-prep-author")= _e( 'Posted by ', 'twentyten' );
		%span(class="author vcard")
			%a(class="url fn n" href="#{get_author_posts_url( get_the_author_meta('ID') )}" title="#{printf( esc_attr__( 'View all posts by %s', 'twentyten' ), get_the_author() )}")
			 	= get_the_author();
		%span(class="meta-sep")
			= _e( ' on ', 'twentyten' );
			%a(href="#{the_permalink();}" title="#{the_time();}" rel="bookmark")
				%span(class="entry-date")= get_the_date();
		- edit_post_link( __( 'Edit', 'twentyten' ), "<span class=\"meta-sep\">|</span>\n\t\t\t\t\t\t<span class=\"edit-link\">", "</span>\n\t\t\t\t\t" );

	.entry-content
		- the_content();
		- wp_link_pages( 'before=.page-link">' . __( 'Pages:', 'twentyten' ) . '&after=</div>' );

	- if ( get_the_author_meta('description') ) : // If a user has filled out their decscription show a bio on their entries
		#entry-author-info
			#author-avatar
				= get_avatar( get_the_author_meta('user_email'), apply_filters('twentyten_author_bio_avatar_size', 60) );
			#author-description
				%h2- _e( 'About ', 'twentyten' ); the_author();
				- the_author_meta('description');
				#author-link
					%a(href="#{get_author_posts_url( get_the_author_meta('ID') );}" title="#{printf( esc_attr__( 'View all posts by %s', 'twentyten' ), get_the_author() );}")
						- _e( 'View all posts by ', 'twentyten' ); ?><?php the_author(); ?> &rarr;</a>
	- endif;

	.entry-utility
		:php
			$tag_list = get_the_tag_list();
			if ( '' != $tag_list ) {
				$utility_text = __( 'This entry was posted in %1$s and tagged %2$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>. Follow any comments here with the <a href="%5$s" title="Comments RSS to %4$s" rel="alternate" type="application/rss+xml">RSS feed for this post</a>.', 'twentyten' );
			} else {
				$utility_text = __( 'This entry was posted in %1$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>. Follow any comments here with the <a href="%5$s" title="Comments RSS to %4$s" rel="alternate" type="application/rss+xml">RSS feed for this post</a>.', 'twentyten' );
			}
			printf( 
				$utility_text,
				get_the_category_list(', '),
				$tag_list,
				get_permalink(),
				the_title_attribute('echo=0'),
				get_post_comments_feed_link() 
			); 
	%span(class="edit-link")
		- edit_post_link( __( 'Edit', 'twentyten' ));

#nav-below(class="navigation")
	.nav-previous
	 	- previous_post_link( '%link', '%span(class="meta-nav">&larr;</span> %title' );
	.nav-next
	 	- next_post_link( '%link', '%title %span(class="meta-nav">&rarr;</span>' );