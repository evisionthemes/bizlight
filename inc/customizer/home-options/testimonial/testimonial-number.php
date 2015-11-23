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
            'label'                 =>  __( 'Number Of Testimonial/s', 'bizlight' ),
            'section'               => 'bizlight-home-testimonial-number-setting',
            'type'                  => 'select',
            'choices'               => array(
                1 => __( '1', 'bizlight' ),
                2 => __( '2', 'bizlight' ),
                3 => __( '3', 'bizlight' ),
                4 => __( '4', 'bizlight' ),
                5 => __( '5', 'bizlight' ),
                6 => __( '6', 'bizlight' )
            ),
            'priority'              => 30,
            'active_callback'       => ''
        )
    );