<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<?php 
			brick('html-head-content');
			brick('scripts_and_styles');
			yield('stylesheets');
			yield('javascripts');
		?>
	</head>
	<body>
	  <?php yield(); ?>
	</body>
</html>