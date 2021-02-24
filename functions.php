<?php
add_action('init', function () {
  remove_action('wp_head', 'wp_print_scripts');
  remove_action('wp_head', 'wp_print_head_scripts', 9);
  remove_action('wp_head', 'print_emoji_detection_script', 7);
  add_action('wp_footer', 'wp_print_scripts', 5);
  add_action('wp_footer', 'wp_print_head_scripts', 5);
});

// Theme jQuery fil
function agro_scripts() {
  wp_register_script( 'theme-script', get_template_directory_uri() . '/js/theme-min.js', array('jquery') );
  wp_enqueue_script( 'theme-script' );
}
add_action( 'wp_enqueue_scripts', 'agro_scripts' );

// ---------------------------------------------------

if (!function_exists( 'agro_setup' )):
	function agro_setup() {

		// Fjern elementer i WP
		remove_action( 'wp_head', 'feed_links_extra', 3 );
		remove_action( 'wp_head', 'feed_links' );
		remove_action( 'wp_head', 'wp_shortlink_wp_head' );
		remove_action( 'wp_head', 'rsd_link' );
		remove_action( 'wp_head', 'rest_output_link_wp_head' );
		remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
		remove_action( 'wp_head', 'wlwmanifest_link' );
		remove_action( 'wp_head', 'wp_generator' );

		// REMOVE WP EMOJI
		remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
		remove_action( 'wp_print_styles', 'print_emoji_styles' );
		remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
		remove_action( 'admin_print_styles', 'print_emoji_styles' );

		// HTML5
		add_theme_support( 'html5', array(
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		));

		// Logo
		add_theme_support( 'custom-logo' );

		// Title Tag
		add_theme_support( 'title-tag' );

		// Images


		// Shortkoder i widget
		add_filter( 'widget_text', 'do_shortcode' );

		// Menu
		register_nav_menus(array(
			'main-menu-1' => __( 'Main-Menu 1', 'agroaliancen-domain' ),
			'main-menu-2' => __( 'Main-Menu 2', 'agroaliancen-domain' ),
			'main-menu-3' => __( 'Main-Menu 3', 'agroaliancen-domain' ),
			'footer-menu-1' => __( 'Footer-Menu 1', 'agroaliancen-domain' ),
			'footer-menu-2' => __( 'Footer-Menu 2', 'agroaliancen-domain' ),
			'footer-menu-3' => __( 'Footer-Menu 3', 'agroaliancen-domain' ),
		));

	}
	add_action( 'after_setup_theme', 'agro_setup' );
endif;

// ---------------------------------------------------

// Theme Widget
require get_parent_theme_file_path( '/inc/widget.php' );
