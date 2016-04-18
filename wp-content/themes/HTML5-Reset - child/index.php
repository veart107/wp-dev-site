<?php
/** 
*
*
*
*/
get_header(); ?>
<!-- index.php -->
<div class="row">
	<section class="col-md-8">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<article <?php post_class() ?> id="post-<?php the_ID(); ?> ">
				<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
				<?php posted_on(); ?>
				<div class="entry">
					<?php the_excerpt(); ?>
				</div>
				<footer class="postmetadata">
					<?php the_tags(_('tags: ', 'html5reset'), ', ', '<br />'); ?>
					<?php _e('posted in', 'html5reset'); ?> <?php the_category(', ') ?>
					<?php comments_popup_link(_('No Comments &#187', 'html5rest'), _('1 comment &#187;', 'html5reset') ?>
				</footer>
			</article>
		<?php endwhile; ?>
		<?php post_navigation(); ?>
		<?php else : ?>
			<h2><?php _e('Nothing Found', 'html5reset'); ?></h2>
		<?php endif; ?>
	</section>
	<aside class="col-md-4">
		<?php get_sidebar(); ?>
	</aside>
</div>
<?php get_footer(); ?>	