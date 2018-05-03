<?php
/**
 * The template for displaying a "No posts found" message.
 *
 * @package Visualy
 * @since 1.0
 */
?>
<div class="container">
	
	<header>
		<h1><?php _e( 'Nothing Found' ); ?></h1>
	</header>

	<div>
		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.' ), admin_url( 'post-new.php' ) ); ?></p>

		<?php elseif ( is_search() ) : ?>

			<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.' ); ?></p>
			<?php get_search_form(); ?>

		<?php else : ?>

			<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.' ); ?></p>
			<?php get_search_form(); ?>

		<?php endif; ?>
	</div>
	
</div>
<!-- /.container -->