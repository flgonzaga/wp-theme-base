<?php
/**
 * The template used for displaying page content.
 *
 * @package Visualy
 * @since 1.0
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
		<h1>
			<?php the_title(); ?>
		</h1>
	</header>
	<div>
		<?php
			the_content();
			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
			) );
		?>
	</div>
</article><!-- #post-## -->