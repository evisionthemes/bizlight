<?php
global $bizlight_panels;
global $bizlight_sections;
global $bizlight_settings_controls;
global $bizlight_repeated_settings_controls;
global $bizlight_customizer_defaults;

/*creating panel for general*/
$bizlight_panels['bizlight-colors'] =
    array(
        'title'          => __( 'Colors', 'bizlight' ),
        'description'    => __( 'Customize colors of you awesome site', 'bizlight' ),
        'priority'       => 42,
    );

/*Default color*/
$bizlight_sections['colors'] =
    array(
        'priority'       => 40,
        'title'          => __( 'General Colors Options', 'bizlight' ),
        'panel'          => 'bizlight-colors',
    );

/*Bizlight colors*/
$bizlight_sections['bizlight-colors'] =
    array(
        'priority'       => 50,
        'title'          => __( 'Bizlight Colors Options', 'bizlight' ),
        'panel'          => 'bizlight-colors',
    );
/*defaults values*/
$bizlight_customizer_defaults['bizlight-h1-h6-color'] = '#212121';
$bizlight_customizer_defaults['bizlight-footer-bg-color'] = '#3e4444';
$bizlight_customizer_defaults['bizlight-primary-color'] = '#028484';
$bizlight_customizer_defaults['bizlight-primary-hover-color'] = '#3b4141';
$bizlight_customizer_defaults['bizlight-home-color-message'] = sprintf( __( '%s Below are homepage/frontpage color options %s', 'bizlight' ), '<h3>','</h3>' );
$bizlight_customizer_defaults['bizlight-home-service-section-bg'] = '#FFFFFF';
$bizlight_customizer_defaults['bizlight-home-about-section-bg'] = '#F8F8F9';
$bizlight_customizer_defaults['bizlight-home-featured-section-bg'] = '#028484';

$bizlight_customizer_defaults['bizlight-color-reset'] = '';


/**
 * Reset color settings to default
 * @param  $input
 *
 * @since bizlight 1.0
 */
if ( ! function_exists( 'bizlight_color_reset' ) ) :
    function bizlight_color_reset( $input ) {
        if ( $input == 1 ) {
            global $bizlight_customizer_defaults;

            /*getting fields*/
            $bizlight_customizer_saved_values = bizlight_get_all_options();

            /*setting fields */
            $bizlight_customizer_saved_values['bizlight-h1-h6-color'] = $bizlight_customizer_defaults['bizlight-h1-h6-color'];
            $bizlight_customizer_saved_values['bizlight-footer-bg-color'] = $bizlight_customizer_defaults['bizlight-footer-bg-color'];
            $bizlight_customizer_saved_values['bizlight-primary-color'] = $bizlight_customizer_defaults['bizlight-primary-color'];
            $bizlight_customizer_saved_values['bizlight-primary-hover-color'] = $bizlight_customizer_defaults['bizlight-primary-hover-color'];
            $bizlight_customizer_saved_values['bizlight-home-service-section-bg'] = $bizlight_customizer_defaults['bizlight-home-service-section-bg'];
            $bizlight_customizer_saved_values['bizlight-home-about-section-bg'] = $bizlight_customizer_defaults['bizlight-home-about-section-bg'];
            $bizlight_customizer_saved_values['bizlight-home-featured-section-bg'] = $bizlight_customizer_defaults['bizlight-home-featured-section-bg'];

            $bizlight_customizer_defaults['bizlight-color-reset'] = '';

            /*resetting fields*/
            bizlight_reset_options( $bizlight_customizer_saved_values );
        }
        else {
            return '';
        }
    }
endif;

/*Bizlight colors setting controls*/
$bizlight_settings_controls['bizlight-h1-h6-color'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-h1-h6-color'],
        ),
        'control' => array(
            'label'                 =>  __( 'Heading color (H1-h6) color', 'bizlight' ),
            'section'               => 'bizlight-colors',
            'type'                  => 'color',
            'priority'              => 5,
            'active_callback'       => ''
        )
    );
$bizlight_settings_controls['bizlight-footer-bg-color'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-footer-bg-color'],
        ),
        'control' => array(
            'label'                 =>  __( 'Footer Background Color', 'bizlight' ),
            'section'               => 'bizlight-colors',
            'type'                  => 'color',
            'priority'              => 20,
            'active_callback'       => ''
        )
    );
$bizlight_settings_controls['bizlight-primary-color'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-primary-color'],
        ),
        'control' => array(
            'label'                 =>  __( 'Primary Color', 'bizlight' ),
            'description'           =>  __( 'This color will come in several places of your site, plese select color according to you site', 'bizlight' ),
            'section'               => 'bizlight-colors',
            'type'                  => 'color',
            'priority'              => 30,
            'active_callback'       => ''
        )
    );
$bizlight_settings_controls['bizlight-primary-hover-color'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-primary-hover-color'],
        ),
        'control' => array(
            'label'                 =>  __( 'Primary Hover Color', 'bizlight' ),
            'description'           =>  __( 'This color will come in several places of your site while hovering, plese select color according to you site', 'bizlight' ),
            'section'               => 'bizlight-colors',
            'type'                  => 'color',
            'priority'              => 40,
            'active_callback'       => ''
        )
    );

$bizlight_settings_controls['bizlight-home-color-message'] =
    array(
        'control' => array(
            'description'           =>   $bizlight_customizer_defaults['bizlight-home-color-message'],
            'section'               => 'bizlight-colors',
            'type'                  => 'message',
            'priority'              => 50,
            'active_callback'       => ''
        )
    );
$bizlight_settings_controls['bizlight-home-service-section-bg'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-home-service-section-bg'],
        ),
        'control' => array(
            'label'                 =>  __( 'Service Section Background', 'bizlight' ),
            'section'               => 'bizlight-colors',
            'type'                  => 'color',
            'priority'              => 60,
            'active_callback'       => ''
        )
    );
$bizlight_settings_controls['bizlight-home-about-section-bg'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-home-about-section-bg'],
        ),
        'control' => array(
            'label'                 =>  __( 'About Section Background', 'bizlight' ),
            'section'               => 'bizlight-colors',
            'type'                  => 'color',
            'priority'              => 70,
            'active_callback'       => ''
        )
    );
$bizlight_settings_controls['bizlight-home-featured-section-bg'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-home-featured-section-bg'],
        ),
        'control' => array(
            'label'                 =>  __( 'Featured Section Background', 'bizlight' ),
            'section'               => 'bizlight-colors',
            'type'                  => 'color',
            'priority'              => 70,
            'active_callback'       => ''
        )
    );
$bizlight_settings_controls['bizlight-color-reset'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-color-reset'],
            'sanitize_callback'    => 'bizlight_color_reset',
            'transport'            => 'postmessage',
        ),
        'control' => array(
            'label'                 =>  __( 'Reset', 'bizlight' ),
            'description'           =>  __( 'Caution: Reset all above color settings to default. Refresh the page after save to view the effects. ', 'bizlight' ),
            'section'               => 'bizlight-colors',
            'type'                  => 'checkbox',
            'priority'              => 80,
            'active_callback'       => ''
        )
    );