<?php 
/**
* @package wordpress
* @subpackage HTML5-Reset-Wordpress_Theme
* @since HTML5 Reset 2.0
*/
get_header(); ?>
<!-- 404.php -->
<div class="row">
	<section class="col-md-8">
		<h2><?php _e('Error 404 - Nothing to see here...Move along!', 'html5reset'); ?></h2>
	</section>
	<aside class="col-md-4">
		<?php get_sidebar(); ?>
	</aside>
</div>
<?php get_footer(); ?>