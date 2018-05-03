<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each specific one. For example, Twenty Thirteen
 * already has tag.php for Tag archives, category.php for Category archives,
 * and author.php for Author archives.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Visualy
 * @since 1.0
 */

get_header(); ?>

	<?php 
		if ( have_posts() ) : 
	?>
			<header>
				<?php
					the_archive_title( '<h1>', '</h1>' );
					the_archive_description( '<div>', '</div>' );
				?>
			</header>
			<?php
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
			?>
	<?php
		else :
			// If no content, include the "No posts found" template.
			get_template_part( 'content', 'none' );
		endif;
	?>
				
<?php
get_footer();
