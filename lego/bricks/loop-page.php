<?php while ( have_posts() ) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <header>
        <?php get_template_module('entry/title'); ?>
      </header>
      <?php get_template_module('entry/content'); ?>
      <?php comments_template( '', true ); ?>
    </article><!-- #post-<?php the_ID(); ?> -->
<?php endwhile; ?>
