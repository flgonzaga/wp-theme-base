<?php
/**
 * Odin functions and definitions.
 *
 * Sets up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * For more information on hooks, actions, and filters,
 * see http://codex.wordpress.org/Plugin_API
 *
 * @package Pecege
 * @since 1.0.0
 */


/**
 * Sets content width.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 600;
}

function add_custom_theme_support() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'widgets' );
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'add_custom_theme_support' );


/**
 * Load site scripts.
 *
 * @since 2.2.0
 */
function template_enqueue_scripts() 
{
	$template_url = get_template_directory_uri();

	// Loads template main stylesheet.
	wp_enqueue_style( 'template-style', get_stylesheet_uri(), array(), null, 'all' );

	// jQuery.
	wp_enqueue_script( 'jquery' );


	// Main JS.
	wp_enqueue_script( 'main', $template_url . '/assets/js/main.js', array(), null, true );

	// Load Thread comments WordPress script.
	if ( is_singular() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

}
add_action( 'wp_enqueue_scripts', 'template_enqueue_scripts', 1 );

/**
 * 
 * @param  string $uri Default URI.
 * @param  string $dir Stylesheet directory URI.
 *
 * @return string      New URI.
 */
function template_stylesheet_uri( $uri, $dir ) {
	return $dir . '/assets/css/style.css';
}

add_filter( 'stylesheet_uri', 'template_stylesheet_uri', 10, 2 );

/**
* Remove header from ACF Metabox in admin panel
*/
function custom_admin_css() {
	echo '<style>
			.acf-postbox .hndle,
			.acf-postbox .handlediv{
			display: none !important;
			}
		</style>';
}
add_action('admin_head', 'custom_admin_css');

/**
* Register Nav Menus
*/
if ( function_exists( 'register_nav_menus' ) ) {
	register_nav_menus(
		array(
			'main-menu' => __( 'Primary Menu' )
		)
	);
}