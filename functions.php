<?php

/**
 * Theme setup.
 */
function codeandfood_setup() {
	add_theme_support( 'title-tag' );

	// register_nav_menus(
	// 	array(
	// 		'primary' => __( 'Primary Menu', 'codeandfood' ),
	// 	)
	// );

	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);

    add_theme_support( 'custom-logo' );
	add_theme_support( 'post-thumbnails' );

	add_theme_support( 'align-wide' );
	add_theme_support( 'wp-block-styles' );

	add_theme_support( 'editor-styles' );
	add_editor_style( 'css/editor-style.css' );
}

add_action( 'after_setup_theme', 'codeandfood_setup' );

/**
 * Register classes that we're going to use in functions.php
 */

 // Enhance the theme by hooking into WordPress.
require get_template_directory() . '/inc/template-functions.php';

 // Custom template tags for the theme.
require get_template_directory() . '/inc/template-tags.php';

require get_template_directory() . '/classes/class-codeandfood-customize.php';
new Codeandfood_Customize();

require get_template_directory() . '/classes/class-codeandfood-svg-icons.php';

/**
 * Enqueue theme assets.
 */
function codeandfood_register_style_script() {
	$version = wp_get_theme()->get( 'Version' );

	wp_enqueue_style( 'codeandfood_style', codeandfood_asset( 'assets/css/app.css' ), array(), $version);
	wp_enqueue_script( 'codeandfood_script', codeandfood_asset( 'assets/js/app.js' ), array(), $version);
}

add_action( 'wp_enqueue_scripts', 'codeandfood_register_style_script' );

/**
 * Get asset path.
 *
 * @param string  $path Path to asset.
 *
 * @return string
 */
function codeandfood_asset( $path ) {
	if ( wp_get_environment_type() === 'production' ) {
		return get_stylesheet_directory_uri() . '/' . $path;
	}

	return add_query_arg( 'time', time(),  get_stylesheet_directory_uri() . '/' . $path );
}

/**
 * Adds option 'li_class' to 'wp_nav_menu'.
 *
 * @param string  $classes String of classes.
 * @param mixed   $item The current item.
 * @param WP_Term $args Holds the nav menu arguments.
 *
 * @return array
 */
function codeandfood_nav_menu_add_li_class( $classes, $item, $args, $depth ) {
	if ( isset( $args->li_class ) ) {
		$classes[] = $args->li_class;
	}

	if ( isset( $args->{"li_class_$depth"} ) ) {
		$classes[] = $args->{"li_class_$depth"};
	}

	return $classes;
}

add_filter( 'nav_menu_css_class', 'codeandfood_nav_menu_add_li_class', 10, 4 );

/**
 * Adds option 'submenu_class' to 'wp_nav_menu'.
 *
 * @param string  $classes String of classes.
 * @param mixed   $item The current item.
 * @param WP_Term $args Holds the nav menu arguments.
 *
 * @return array
 */
function codeandfood_nav_menu_add_submenu_class( $classes, $args, $depth ) {
	if ( isset( $args->submenu_class ) ) {
		$classes[] = $args->submenu_class;
	}

	if ( isset( $args->{"submenu_class_$depth"} ) ) {
		$classes[] = $args->{"submenu_class_$depth"};
	}

	return $classes;
}

add_filter( 'nav_menu_submenu_css_class', 'codeandfood_nav_menu_add_submenu_class', 10, 3 );


/**
 * Add layout style class to body.
 *
 * @param array $classes Original body classes.
 * @return array Modified body classes.
 */
function codeandfood_layout_class( $classes ) {

	if ( is_single() && has_post_thumbnail() || is_page() && has_post_thumbnail() ) {
		$classes[] = 'has-featured-image';
	}

	$featured_image = get_theme_mod( 'genesis_block_theme_featured_image_style', 'wide' );

	if ( $featured_image === 'wide' ) {
		$classes[] = 'featured-image-wide';
	}

	return $classes;
}
add_filter( 'body_class', 'codeandfood_layout_class' );
