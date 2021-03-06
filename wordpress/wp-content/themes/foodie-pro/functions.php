<?php
/**
 * Custom amendments for the theme.
 *
 * @package     FoodiePro
 * @subpackage  Genesis
 * @copyright   Copyright (c) 2013, Shay Bocks
 * @license     GPL-2.0+
 * @link        http://www.shaybocks.com/foodie-pro/
 * @since       1.0.1
 */

add_action( 'genesis_setup', 'foodie_pro_theme_setup', 15 );
/**
 * Theme Setup
 *
 * This setup function hooks into the Gensis Framework to allow access to all
 * of the core Genesis funtions. All the child theme functionaltiy can be found
 * in files locaed within the /includes/ directroy.
 *
 * @since 1.0.1
 */
function foodie_pro_theme_setup() {
	//* Child theme (do not remove)
	define( 'CHILD_THEME_NAME', __( 'Foodie Pro Theme', 'foodie-pro' ) );
	define( 'CHILD_THEME_VERSION', '2.0.2' );
	define( 'CHILD_THEME_URL', 'http://my.studiopress.com/foodie/' );
	define( 'CHILD_THEME_DEVELOPER', __( 'Shay Bocks', 'foodie-pro' ) );

	//* Add viewport meta tag for mobile browsers.
	add_theme_support( 'genesis-responsive-viewport' );

	//* Add HTML5 markup structure.
	add_theme_support( 'html5' );

	//*	Set content width.
	$content_width = apply_filters( 'content_width', 610, 610, 980 );

	//* Add new featured image sizes.
	add_image_size( 'horizontal-thumbnail', 680, 450, TRUE );
	add_image_size( 'vertical-thumbnail', 680, 900, TRUE );
	add_image_size( 'square-thumbnail', 320, 320, TRUE );

	//* Add support for custom background.
	add_theme_support( 'custom-background' );

	//* Unregister header right sidebar.
	unregister_sidebar( 'header-right' );

	//* Add support for custom header.
	add_theme_support( 'genesis-custom-header', array(
			'width'  => 400,
			'height' => 170
		)
	);

	//* Add support for 4-column footer widgets.
	add_theme_support( 'genesis-footer-widgets', 4 );
}

add_action( 'genesis_setup', 'foodie_pro_includes', 20 );
/**
 * Load additional functions and helpers.
 *
 * DO NOT MODIFY ANYTHING IN THIS FUNCTION.
 *
 * For More information about this message,
 * please visit http://www.shaybocks.com/foodie-pro/docs/
 *
 * @since 2.0.0
 */
function foodie_pro_includes() {
	$includes_dir = trailingslashit( get_stylesheet_directory() . '/includes' );

	$directories = array(
		'/',
		'vendor/',
		'vendor/*/',
		'customizer/',
	);

	//* Loop through our directories to grab our theme files.
	foreach ( $directories as $directory ) {
		//* Load required theme files in each directory.
		foreach ( glob( $includes_dir . $directory .'*.php' ) as $file ) {
			require_once( $file );
		}
	}

	//* End here if we're not in the admin panel.
	if ( ! is_admin() ) {
		return;
	}

	//* Load required theme files in the admin directory.
	foreach ( glob( $includes_dir . '/admin/*.php' ) as $file ) {
		require_once( $file );
	}
}

/**
 * Load Genesis
 *
 * This is technically not needed.
 * However, to make functions.php snippets work, it is necessary.
 */
require_once( get_template_directory() . '/lib/init.php' );

add_action( 'wp_enqueue_scripts', 'foodie_pro_enqueue_js' );
/**
 * Load all required JavaScript for the Foodie theme.
 *
 * @since 1.0.1
 */
function foodie_pro_enqueue_js() {
	$js_uri = get_stylesheet_directory_uri() . '/assets/js/';
	// Add general purpose scripts.
	wp_enqueue_script( 'foodie-pro-general', $js_uri . 'general.js', array( 'jquery' ), '1.0.0', true );
}

add_filter( 'body_class', 'foodie_pro_add_body_class' );
/**
 * Add the theme name class to the body element.
 *
 * @since  1.0.0
 *
 * @param  string $classes
 * @return string Modified body classes.
 */
function foodie_pro_add_body_class( $classes ) {
	$classes[] = 'foodie-pro';
	return $classes;
}

//* Add post navigation.
add_action( 'genesis_after_entry_content', 'genesis_prev_next_post_nav', 5 );

add_filter( 'excerpt_more', 'foodie_pro_read_more_link' );
add_filter( 'get_the_content_more_link', 'foodie_pro_read_more_link' );
add_filter( 'the_content_more_link', 'foodie_pro_read_more_link' );
/**
 * Modify the Genesis read more link.
 *
 * @since  1.0.0
 *
 * @param  string $more
 * @return string Modified read more text.
 */
function foodie_pro_read_more_link() {
   return '...</p><p><a class="more-link" href="' . get_permalink() . '">' . __( 'Read More', 'foodie-pro' ) . ' &raquo;</a></p>';
}

add_filter( 'genesis_comment_form_args', 'foodie_pro_comment_form_args' );
/**
 * Modify the speak your mind text.
 *
 * @since   1.0.0
 *
 * @param   $args the default comment reply text.
 * @return  $args the modified comment reply text.
 */
function foodie_pro_comment_form_args( $args ) {
	$args['title_reply'] = __( 'Comments', 'foodie-pro' );
	return $args;
}

add_filter( 'genesis_footer_creds_text', 'foodie_pro_footer_creds_text' );
/**
 * Customize the footer text
 *
 * @since  1.0.0
 *
 * @param  string $creds Default credits.
 * @return string Modified Shay Bocks credits.
 */
function foodie_pro_footer_creds_text( $creds ) {
	return sprintf(
		'[footer_copyright before="%s "] &middot; [footer_childtheme_link before=""] %s <a href="http://shaybocks.com/">%s</a> &middot; %s [footer_genesis_link url="http://www.studiopress.com/" before=""] &middot; [footer_wordpress_link before=" %s"]',
		__( 'Copyright', 'foodie-pro' ),
		__( 'by', 'foodie-pro' ),
		CHILD_THEME_DEVELOPER,
		__( 'Built on the ', 'foodie-pro' ),
		__( 'Powered by ', 'foodie-pro' )
	);
}
