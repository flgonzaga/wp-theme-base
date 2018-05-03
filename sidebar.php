<?php
/**
 * The sidebar containing the secondary widget area, displays on homepage, archives and posts.
 *
 * If no active widgets in this sidebar, it will shows Recent Posts, Archives and Tag Cloud widgets.
 *
 * @package Visualy
 * @since 1.0
 */
?>
<aside role="complementary">
	<?php the_widget( 'WP_Widget_Recent_Posts', array( 'number' => 10 ) ); ?>
	<?php the_widget( 'WP_Widget_Archives', array( 'count' => 0, 'dropdown' => 1 ) ); ?>
</aside>