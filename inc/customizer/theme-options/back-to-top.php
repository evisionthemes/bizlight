<?php
global $bizlight_sections;
global $bizlight_settings_controls;
global $bizlight_repeated_settings_controls;
global $bizlight_customizer_defaults;

/*defaults values*/
$bizlight_customizer_defaults['bizlight-enable-back-top-top'] = 0;

$bizlight_sections['bizlight-footer-options'] =
    array(
        'priority'       => 60,
        'title'          => __( 'Footer Options', 'bizlight' ),
        'panel'          => 'bizlight-theme-options'
    );

$bizlight_settings_controls['bizlight-enable-back-top-top'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-enable-back-top-top'],
        ),
        'control' => array(
            'label'                 =>  __( 'Enable theme name and powered by text', 'bizlight' ),
            'section'               => 'bizlight-footer-options',
            'type'                  => 'checkbox',
            'priority'              => 40,
        )
    );