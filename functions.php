<?php


if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

//CRB REG

add_action('after_setup_theme', 'crb_load');
function crb_load()
{
	require_once('inc/carbon-fields/vendor/autoload.php');
	\Carbon_Fields\Carbon_Fields::boot();
}

add_action('carbon_fields_register_fields', 'ast_register_custom_fields');
function ast_register_custom_fields()
{
	require_once('inc/custom-fields-options/theme-options.php');
	require_once('inc/custom-fields-options/index-options.php');
	require_once('inc/custom-fields-options/single-object-options.php');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function titul_setup() {

	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'titul' ),
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'titul_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

}
add_action( 'after_setup_theme', 'titul_setup' );


function titul_scripts() {
	wp_enqueue_style( 'main.css', get_template_directory_uri() . '/assets/css/main.css' );
	wp_enqueue_style( 'fonts.googleapis',  'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap' );
	wp_enqueue_style( 'swiper-bundle.min.css', 'https://unpkg.com/swiper/swiper-bundle.min.css' );
	wp_enqueue_style( 'family=Inter',  'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap' );
	
	
	
	//wp_style_add_data( 'titul-style', 'rtl', 'replace' );

	// wp_enqueue_style( 'unpkg.com', 'https://unpkg.com/swiper/swiper-bundle.min.js',  true );
	wp_enqueue_script('swiper-bundle.min.js', 'https://unpkg.com/swiper/swiper-bundle.min.js', false, null, true);
	wp_enqueue_script( 'app.js', get_template_directory_uri() . '/assets/js/app.js', false, null, true );
	wp_enqueue_script( 'search.js', get_template_directory_uri() . '/assets/js/search.js', false, null, true );
	wp_enqueue_script( 'slider-swiper.js', get_template_directory_uri() . '/assets/js/slider-swiper.js', false, null, true );
	

}
add_action( 'wp_enqueue_scripts', 'titul_scripts' );




//CUSTOM MENU FUNCTIONS

function get_child_menu_items($menu_array, $parent_id)
{
	$child_menus = [];

	if (!empty($menu_array && is_array($menu_array))) {
		foreach ($menu_array as $menu) {
			if (intval($menu->menu_item_parent) === $parent_id) {
				array_push($child_menus, $menu);
			}
		}
	}

	return $child_menus;
}
