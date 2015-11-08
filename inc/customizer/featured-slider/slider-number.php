<?php
global $bizlight_panels;
global $bizlight_sections;
global $bizlight_settings_controls;
global $bizlight_repeated_settings_controls;
global $bizlight_customizer_defaults;

/*defaults values*/
$bizlight_customizer_defaults['bizlight-fs-number'] = 5;

/*fs setting*/
$bizlight_sections['bizlight-fs-number-setting'] =
    array(
        'priority'       => 30,
        'title'          => __( 'Slider number Options', 'bizlight' ),
        'panel'          => 'bizlight-featured-slider',
    );

$bizlight_settings_controls['bizlight-fs-number'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-fs-number']
        ),
        'control' => array(
            'label'                 =>  __( 'Number of slider', 'bizlight' ),
            'section'               => 'bizlight-fs-number-setting',
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