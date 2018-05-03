<?php
get_header(); ?>
<?php
	if ( have_posts() ) :
		// Start the Loop.
		while ( have_posts() ) : the_post();

			/*
			 * Include the post format-specific template for the content. If you want to
			 * use this in a child theme, then include a file called called content-___.php
			 * (where ___ is the post format) and that will be used instead.
			 */
			get_template_part( 'content', get_post_format() );

		endwhile;

		// Previous/next page navigation.
		the_posts_pagination( array(
			'prev_text'          => __( 'Previous page' ),
			'next_text'          => __( 'Next page' ),
			'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page' ) . ' </span>',
		) );

	else :
		// If no content, include the "No posts found" template.
		get_template_part( 'content', 'none' );

	endif;
?>
<?php 
get_footer();