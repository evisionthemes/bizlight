<?php
global $bizlight_panels;
global $bizlight_sections;
global $bizlight_settings_controls;
global $bizlight_repeated_settings_controls;
global $bizlight_customizer_defaults;

/*defaults values*/
$bizlight_customizer_defaults['bizlight-home-testimonial-number'] = 5;

/*testimonialsetting*/
$bizlight_sections['bizlight-home-testimonial-number-setting'] =
    array(
        'priority'       => 30,
        'title'          => __( 'Testimonial Number Options', 'bizlight' ),
        'panel'          => 'bizlight-home-testimonial',
    );

$bizlight_settings_controls['bizlight-home-testimonial-number'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-home-testimonial-number']
        ),
        'control' => array(
            'label'                 =>  __( 'Number of Testimonial/s', 'bizlight' ),
            'section'               => 'bizlight-home-testimonial-number-setting',
            'type'                  => 'select',
            'choices'               => array(
                1 => __( '1', 'bizlight' ),
                2 => __( '2', 'bizlight' ),
                3 => __( '3', 'bizlight' ),
                4 => __( '4', 'bizlight' ),
                5 => __( '5', 'bizlight' ),
                6 => __( '6', 'bizlight' ),
                7 => __( '7', 'bizlight' ),
                8 => __( '8', 'bizlight' ),
                9 => __( '9', 'bizlight' ),
                10 => __( '10', 'bizlight' ),
                11 => __( '11', 'bizlight' ),
                12 => __( '12', 'bizlight' ),
            ),
            'priority'              => 30,
            'active_callback'       => ''
        )
    );