- the_post()

%div{id => "post-#{the_ID()}", post_class()}
  %h1(class="entry-title")= the_title()
  .entry-content
		- the_content()
		- wp_link_pages( 'before=<div class="page-link">' . __( 'Pages:', 'twentyten' ) . '&after=</div>')
		- edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' )
		
- comments_template( '', true )