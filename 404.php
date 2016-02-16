<?php get_header(); ?>

	<div class="posts-wrap">
	<div class="post">
		<h1><?php _e('Error 404 - Not Found', 'blank'); ?></h1>
		
        <h2><?php _e('The page you were looking for has either been deleted or moved.', 'blank'); ?></h2>

		<?php _e('Do you want to search for it', 'blank'); ?>?
        <br />
		<?php get_search_form( $echo ); ?>
	</div>
	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>