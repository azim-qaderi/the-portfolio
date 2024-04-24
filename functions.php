<?php
/**
 * the_portfolio functions and definitions
 */

if ( ! defined( 'VERSION' ) ) {
	define( 'VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function the_portfolio_setup() {

	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );

	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'the_portfolio' ),
		)
	);

	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'the_portfolio_setup' );

/**
 * Register widget area.
 */
function the_portfolio_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'the_portfolio' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'the_portfolio' ),
			'before_widget' => '<div class="widget">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'the_portfolio_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function the_portfolio_scripts() {
	wp_enqueue_style( 'the_portfolio-style', get_template_directory_uri() . '/assets/css/main.css', array(), VERSION );

	wp_enqueue_script( 'the_portfolio-script', get_template_directory_uri() . '/assets/js/main.js', array(), VERSION, true );

}
add_action( 'wp_enqueue_scripts', 'the_portfolio_scripts' );

