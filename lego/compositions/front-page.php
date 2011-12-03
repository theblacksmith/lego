<?php echo __FILE__ . "<br/>"; ?>		
<?php use_layout('index'); ?>
		
		<?php brick('topnav'); ?>
    
		<?php brick('header'); ?>

    <?php brick('menu') ?>

    <div id="main" role="main">
      <div id="container">
        <div id="content">
          <?php
					  global $pdx_nav_id;
					  $pdx_nav_id = 'above';
					  brick('post-nav');
					?>
					
					<?php brick('loop-index'); ?>
					
					<?php
					  $pdx_nav_id = 'below';
					  brick('post-nav');
					?>
        </div><!-- #content -->
      </div><!-- #container -->
      <?php get_sidebar(); ?>
    </div>

    <footer id="footer">
      <?php brick('footer'); ?>
    </footer>
		
  	<?php wp_footer(); ?>
