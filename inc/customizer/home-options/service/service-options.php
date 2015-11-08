<?php
global $bizlight_panels;
global $bizlight_sections;
global $bizlight_settings_controls;
global $bizlight_repeated_settings_controls;
global $bizlight_customizer_defaults;

/*defaults values*/
$bizlight_customizer_defaults['bizlight-home-service-title'] = __('Our Services','bizlight');
$bizlight_customizer_defaults['bizlight-home-service-column'] = 3;
$bizlight_customizer_defaults['bizlight-home-service-button-text'] = __('Browse more services','bizlight');
$bizlight_customizer_defaults['bizlight-home-service-button-link'] = esc_url( home_url( '/services' ) );
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
            'label'                 =>  __( 'Service Title', 'bizlight' ),
            'section'               => 'bizlight-home-service-options',
            'type'                  => 'text',
            'priority'              => 20,
            'active_callback'       => ''
        )
    );

$bizlight_settings_controls['bizlight-home-service-column'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-home-service-column']
        ),
        'control' => array(
            'label'                 =>  __( 'Number of columns', 'bizlight' ),
            'section'               => 'bizlight-home-service-options',
            'type'                  => 'select',
            'choices'               => array(
                1 => __( '1', 'bizlight' ),
                2 => __( '2', 'bizlight' ),
                3 => __( '3', 'bizlight' ),
                4 => __( '4', 'bizlight' ),
            ),
            'priority'              => 30,
            'active_callback'       => ''
        )
    );

$bizlight_settings_controls['bizlight-home-service-button-text'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-home-service-button-text']
        ),
        'control' => array(
            'label'                 =>  __( 'Service button text', 'bizlight' ),
            'section'               => 'bizlight-home-service-options',
            'type'                  => 'text',
            'priority'              => 40,
            'active_callback'       => ''
        )
    );

$bizlight_settings_controls['bizlight-home-service-button-link'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-home-service-button-link']
        ),
        'control' => array(
            'label'                 =>  __( 'Service button text', 'bizlight' ),
            'section'               => 'bizlight-home-service-options',
            'type'                  => 'url',
            'priority'              => 50,
            'active_callback'       => ''
        )
    );

$bizlight_settings_controls['bizlight-home-service-enable-single-link'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-home-service-enable-single-link']
        ),
        'control' => array(
            'label'                 =>  __( 'Enable service single link', 'bizlight' ),
            'section'               => 'bizlight-home-service-options',
            'type'                  => 'checkbox',
            'priority'              => 60,
            'active_callback'       => ''
        )
    );