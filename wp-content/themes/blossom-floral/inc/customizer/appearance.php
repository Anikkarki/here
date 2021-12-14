<?php

/**
 * Appearance Settings
 *
 * @package Blossom Floral Pro
 */

function blossom_floral_customize_register_appearance($wp_customize)
{

    $wp_customize->add_panel(
        'appearance_settings',
        array(
            'title'       => __('Appearance Settings', 'blossom-floral'),
            'priority'    => 25,
            'capability'  => 'edit_theme_options',
            'description' => __('Change color and body background.', 'blossom-floral'),
        )
    );

    /** Primary Color*/
    $wp_customize->add_setting(
        'primary_color',
        array(
            'default'           => '#F2CAB3',
            'sanitize_callback' => 'sanitize_hex_color',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'primary_color',
            array(
                'label'       => __('Primary Color', 'blossom-floral'),
                'description' => __('Primary color of the theme.', 'blossom-floral'),
                'section'     => 'colors',
                'priority'    => 5,
            )
        )
    );

    /** Secondary Color*/
    $wp_customize->add_setting(
        'secondary_color',
        array(
            'default'           => '#01BFBF',
            'sanitize_callback' => 'sanitize_hex_color',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'secondary_color',
            array(
                'label'       => __('Secondary Color', 'blossom-floral'),
                'description' => __('Secondary color of the theme.', 'blossom-floral'),
                'section'     => 'colors',
                'priority'    => 6,
            )
        )
    );

    /** Typography */
    $wp_customize->add_section(
        'typography_settings',
        array(
            'title'    => __( 'Typography', 'blossom-floral' ),
            'priority' => 15,
            'panel'    => 'appearance_settings',
        )
    );

    /** Primary Font */
	$wp_customize->add_setting(
		'primary_font',
		array(
			'default'			=> 'Questrial',
			'sanitize_callback' => 'blossom_floral_sanitize_select'
		)
	);

	$wp_customize->add_control(
		new Blossom_Floral_Select_Control(
			$wp_customize,
			'primary_font',
			array(
				'label'	      => __('Primary Font', 'blossom-floral'),
				'description' => __('Primary font of the site.', 'blossom-floral'),
				'section'     => 'typography_settings',
				'choices'     => blossom_floral_get_all_fonts(),
			)
		)
	);

	/** Secondary Font */
	$wp_customize->add_setting(
		'secondary_font',
		array(
			'default'			=> 'Crimson Pro',
			'sanitize_callback' => 'blossom_floral_sanitize_select'
		)
	);

	$wp_customize->add_control(
		new Blossom_Floral_Select_Control(
			$wp_customize,
			'secondary_font',
			array(
				'label'	      => __('Secondary Font', 'blossom-floral'),
				'description' => __('Secondary font of the site.', 'blossom-floral'),
				'section'     => 'typography_settings',
				'choices'     => blossom_floral_get_all_fonts(),
			)
		)
	);

	/** Font Size*/
	$wp_customize->add_setting(
		'font_size',
		array(
			'default'           => 18,
			'sanitize_callback' => 'blossom_floral_sanitize_number_absint'
		)
	);

	$wp_customize->add_control(
		new Blossom_Floral_Slider_Control(
			$wp_customize,
			'font_size',
			array(
				'section'	  => 'typography_settings',
				'label'		  => __('Font Size', 'blossom-floral'),
				'description' => __('Change the font size of your site.', 'blossom-floral'),
				'choices'	  => array(
					'min' 	=> 10,
					'max' 	=> 50,
					'step'	=> 1,
				)
			)
		)
	);

    /** Move Background Image section to appearance panel */
    $wp_customize->get_section('colors')->panel                          = 'appearance_settings';
    $wp_customize->get_section('colors')->priority                       = 10;
    $wp_customize->get_section('background_image')->panel                = 'appearance_settings';
    $wp_customize->get_section('background_image')->priority             = 15;

}
add_action('customize_register', 'blossom_floral_customize_register_appearance');
