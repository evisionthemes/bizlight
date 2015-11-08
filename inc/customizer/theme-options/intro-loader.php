<?php
global $bizlight_sections;
global $bizlight_settings_controls;
global $bizlight_repeated_settings_controls;
global $bizlight_customizer_defaults;

/*defaults values*/
$bizlight_customizer_defaults['bizlight-intro-bg-color'] = '#028484';
$bizlight_customizer_defaults['bizlight-intro-middle-image'] = '';
$bizlight_customizer_defaults['bizlight-enable-intro'] = 1;


$bizlight_sections['bizlight-intro-loader'] =
    array(
        'priority'       => 10,
        'title'          => __( 'Intro loader options', 'bizlight' ),
        'description'    => __( 'Customize intro-loader setting', 'bizlight' ),
        'panel'          => 'bizlight-theme-options',
    );

/*intro-loader option intro lodader start*/
/*creating setting control for bizlight-intro-loader start*/
$bizlight_settings_controls['bizlight-intro-bg-color'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-intro-bg-color'],
        ),
        'control' => array(
            'label'                 =>  __( 'Intro loader background color', 'bizlight' ),
            'section'               => 'bizlight-intro-loader',
            'type'                  => 'color',
            'priority'              => 10,
            'active_callback'       => ''
        )
    );
$bizlight_settings_controls['bizlight-intro-middle-image'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-intro-middle-image'],
        ),
        'control' => array(
            'label'                 =>  __( 'Intro loader middle image', 'bizlight' ),
            'section'               => 'bizlight-intro-loader',
            'type'                  => 'image',
            'priority'              => 20,
            'description'           => '',
            'active_callback'       => ''
        )
    );

$bizlight_settings_controls['bizlight-enable-intro'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-enable-intro'],
        ),
        'control' => array(
            'label'                 =>  __( 'Enable intro loader', 'bizlight' ),
            'section'               => 'bizlight-intro-loader',
            'type'                  => 'checkbox',
            'priority'              => 30,
            'description'           => '',
            'active_callback'       => ''
        )
    );