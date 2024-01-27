<?php
/**
 * Travel Manager functions
 */

if ( ! function_exists( 'travel_manager_styles' ) ) :
	function travel_manager_styles() {
		// Register theme stylesheet.
		wp_register_style('travel-manager-style',
			get_template_directory_uri() . '/style.css',array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'travel-manager-style' );
	}
endif;
add_action( 'wp_enqueue_scripts', 'travel_manager_styles' );