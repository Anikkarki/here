<?php
/**
 * Blossom Floral Theme Customizer
 *
 * @package Blossom_Floral
 */

/**
 * Requiring customizer panels & sections
*/

$blossom_floral_sections     = array( 'home', 'general', 'info', 'site', 'footer', 'layout', 'appearance' );

foreach( $blossom_floral_sections as $section ){
    require get_template_directory() . '/inc/customizer/' . $section . '.php';
}

/**
 * Sanitization Functions
*/
require get_template_directory() . '/inc/customizer/sanitization-functions.php';

/**
 * Active Callbacks
*/
require get_template_directory() . '/inc/customizer/active-callback.php';

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function blossom_floral_customize_preview_js() {
	wp_enqueue_script( 'blossom-floral-customizer', get_template_directory_uri() . '/inc/js/customizer.js', array( 'customize-preview' ), BLOSSOM_FLORAL_THEME_VERSION, true );
}
add_action( 'customize_preview_init', 'blossom_floral_customize_preview_js' );

function blossom_floral_customize_script(){
    wp_enqueue_style( 'blossom-floral-customize', get_template_directory_uri() . '/inc/css/customize.css', array(), BLOSSOM_FLORAL_THEME_VERSION );
    wp_enqueue_script( 'blossom-floral-customize', get_template_directory_uri() . '/inc/js/customize.js', array( 'jquery', 'customize-controls' ), BLOSSOM_FLORAL_THEME_VERSION, true );

    wp_localize_script( 'blossom-floral-repeater', 'blossom_floral_customize',
		array(
			'nonce' => wp_create_nonce( 'blossom_floral_customize_nonce' )
		)
	);
}
add_action( 'customize_controls_enqueue_scripts', 'blossom_floral_customize_script' );

/*
 * Notifications in customizer
 */
require get_template_directory() . '/inc/customizer-plugin-recommend/plugin-install/class-plugin-install-helper.php';

require get_template_directory() . '/inc/customizer-plugin-recommend/plugin-install/class-plugin-recommend.php';