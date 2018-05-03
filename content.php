<?php
/**
 * The default template for displaying content.
 *
 * Used for both single and index/archive/author/catagory/search/tag.
 *
 * @package Visualy
 * @since 1.0
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class("card"); ?>>
	<header>
		<?php
			if ( is_single() ) :
				the_title( '<h1 class="card-header">', '</h1>' );
			else :
				the_title( '<h2 class="card-header"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;
		?>

	</header>

	<?php if ( is_search() ) : ?>
		<div class="card-block">
			<?php the_excerpt(); ?>
		</div>
	<?php else : ?>
		<div class="card-block">
			<?php
				the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>' ) );
				wp_link_pages( array(
					'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:' ) . '</span>',
					'after'       => '</div>',
					'link_before' => '<span>',
					'link_after'  => '</span>',
				) );
			?>
			<?php if (!is_single()): ?>
				<div class="w-100">
					<a href="<?php the_permalink(); ?>" class="btn btn-primary">Ver post</a>
				</div><!-- /.w-100 -->
			<?php endif ?>
		</div>
	<?php endif; ?>

	<footer class="card-footer text-muted">
		<?php if ( in_array( 'category', get_object_taxonomies( get_post_type() ) ) ) : ?>
			<span>
				<?php echo __( 'Posted in:' ) . ' ' . get_the_category_list( _x( ', ', 'Used between list items, there is a space after the comma.' ) ); ?>
			</span>
		<?php endif; ?>
		<?php the_tags( '<span class="tag-links">' . __( 'Tagged as:' ) . ' ', ', ', '</span>' ); ?>
		<?php if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) : ?>
			<span class="comments-link">
				<?php comments_popup_link( __( 'Leave a comment' ), __( '1 Comment' ), __( '% Comments' ) ); ?>
			</span>
		<?php endif; ?>
	</footer>
</article><!-- #post-## -->
