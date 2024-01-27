
<?php 

if ( ! function_exists( 'travel_boost_support' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */

	function travel_boost_support() {
		add_editor_style(get_template_directory_uri().'/assets/css/editor.css');
		load_theme_textdomain( 'travel-boost', get_template_directory() . '/languages' );
		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for post thumbnails
		add_theme_support( 'post-thumbnails' );

	}

endif;
add_action( 'after_setup_theme', 'travel_boost_support' );

if ( ! function_exists( 'travel_boost_enqueue_scripts_and_styles' ) ) :
	/**
	 * Enqueue styles.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	function travel_boost_enqueue_scripts_and_styles() {
		$min = defined('SCRIPT_DEBUG') && SCRIPT_DEBUG ? '' : '.min';
		$version = wp_get_theme()->get('version');
		$template_dir = get_template_directory_uri();
		$template_assets_dir = $template_dir . '/assets';

		// Styles
		$styles = array(
			'travel-boost-style'         => array(get_stylesheet_uri(), array(), $version),
			'travel-boost-custom-css'    => array($template_assets_dir . '/css/custom.css', array(), $version),
			'travel-boost-editor-css'    => array($template_assets_dir . '/css/editor.css', array(), $version),
			'travel-boost-fontawesome-min'   => array($template_assets_dir . '/css/font-awesome/css/all.min.css', array(), "6.4.2")	
		);

		// Scripts
		$scripts = array(
			'travel-boost-custom'  => array($template_assets_dir . '/js/custom.js', array('jquery'), '1.0.0', true),
		);

		// Enqueue Styles
		foreach ($styles as $handle => $data) {
			list($src, $deps, $ver) = $data;
			wp_enqueue_style($handle, $src, $deps, $ver);
		}

		// Enqueue Scripts
		foreach ($scripts as $handle => $data) {
			list($src, $deps, $ver, $in_footer) = $data;
			wp_enqueue_script($handle, $src, $deps, $ver, $in_footer);
		}
	}

endif;

add_action('wp_enqueue_scripts', 'travel_boost_enqueue_scripts_and_styles');

function travel_boost_enqueue_dashicons() {
    wp_enqueue_style('dashicons');
}

add_action('wp_enqueue_scripts', 'travel_boost_enqueue_dashicons');


// admin style
function travel_boost_admin_styles() {
	wp_enqueue_style(
		'travel-boost-admin-style',
		get_template_directory_uri() . '/assets/css/theme-info.css',
		[],
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'admin_enqueue_scripts', 'travel_boost_admin_styles' );


/* PreLoader */

add_action( 'wp_body_open', 'travel_boost_preloader' );

/**
 * Adds the Preloader
 *
 * @since  1.0
 *
 * @package Travel Boost WordPress Theme
 */
 function travel_boost_preloader() {

 	?>
 	<div id="loader-wrapper">
 		<div id="loader"></div>
 	</div>
 	<?php
 }

require get_theme_file_path( '/inc/tgm-plugin/tgmpa-hook.php' );

// admin Info
require get_template_directory() . '/class/admin-info.php';