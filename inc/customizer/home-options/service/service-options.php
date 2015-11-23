<?php
global $bizlight_panels;
global $bizlight_sections;
global $bizlight_settings_controls;
global $bizlight_repeated_settings_controls;
global $bizlight_customizer_defaults;

/*defaults values*/
$bizlight_customizer_defaults['bizlight-home-service-title'] = __('Our Services','bizlight');
$bizlight_customizer_defaults['bizlight-home-service-enable-single-link'] = 1;

/*serviceoptions*/
$bizlight_sections['bizlight-home-service-options'] =
    array(
        'priority'       => 80,
        'title'          => __( 'Service Options', 'bizlight' ),
        'panel'          => 'bizlight-home-service',
    );


$bizlight_settings_controls['bizlight-home-service-title'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-home-service-title']
        ),
        'control' => array(
            'label'                 =>  __( 'Main Title', 'bizlight' ),
            'section'               => 'bizlight-home-service-options',
            'type'                  => 'text',
            'priority'              => 20,
            'active_callback'       => ''
        )
    );

$bizlight_settings_controls['bizlight-home-service-enable-single-link'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-home-service-enable-single-link']
        ),
        'control' => array(
            'label'                 =>  __( 'Enable Link In Single Column', 'bizlight' ),
            'section'               => 'bizlight-home-service-options',
            'type'                  => 'checkbox',
            'priority'              => 35,
            'active_callback'       => ''
        )
    );