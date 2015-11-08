<?php
global $bizlight_sections;
global $bizlight_settings_controls;
global $bizlight_repeated_settings_controls;
global $bizlight_customizer_defaults;

/*defaults values*/
$bizlight_customizer_defaults['bizlight-enable-theme-name'] = 0;

$bizlight_sections['bizlight-footer-options'] =
    array(
        'priority'       => 60,
        'title'          => __( 'Footer Options', 'bizlight' ),
        'panel'          => 'bizlight-theme-options'
    );

$bizlight_settings_controls['bizlight-enable-theme-name'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-enable-theme-name'],
        ),
        'control' => array(
            'label'                 =>  __( 'Enable theme name and powered by text', 'bizlight' ),
            'section'               => 'bizlight-footer-options',
            'type'                  => 'checkbox',
            'priority'              => 40,
        )
    );