<?php

// Add scripts and stylesheets
function startwordpress_scripts() {
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.6' );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '3.3.6', true );
	wp_enqueue_style( 'blog', get_template_directory_uri() . '/css/blog.css' );
}

add_action( 'wp_enqueue_scripts', 'startwordpress_scripts' );

// Add Google Fonts
function startwordpress_google_fonts() {
				wp_register_style('OpenSans', '//fonts.googleapis.com/css?family=Open+Sans:400,600,700,800');
				wp_enqueue_style( 'OpenSans');
		}

add_action('wp_print_styles', 'startwordpress_google_fonts');

// WordPress Titles
function startwordpress_wp_title( $title, $sep ) {
	global $paged, $page;
	if ( is_feed() ) {
		return $title;
	} 
	// Add the site name.
	$title .= get_bloginfo( 'name' );
	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) ) {
		$title = "$title $sep $site_description";
	}
	return $title;
} 
add_filter( 'wp_title', 'startwordpress_wp_title', 10, 2 );


// Support Featured Images
add_theme_support( 'post-thumbnails' );

// Custom Post Type
// function create_my_custom_post() {
// 	register_post_type('my-custom-post',
// 			array(
// 			'labels' => array(
// 					'name' => __('My Custom Post'),
// 					'singular_name' => __('My Custom Post'),
// 			),
// 			'public' => true,
// 			'has_archive' => true,
// 			'supports' => array(
// 					'title',
// 					'editor',
// 					'thumbnail',
// 				  'custom-fields'
// 			)
// 	));
// }
// add_action('init', 'create_my_custom_post'); 


add_action( 'wp_enqueue_scripts', 'jk_load_dashicons' );

function jk_load_dashicons() {
    wp_enqueue_style( 'dashicons' );
}