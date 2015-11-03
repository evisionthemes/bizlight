<?php
global $bizlight_sections;
global $bizlight_settings_controls;
global $bizlight_repeated_settings_controls;
global $bizlight_customizer_defaults;

/*defaults values*/
$bizlight_customizer_defaults['bizlight-enable-breadcrumb'] = 1;

$bizlight_sections['bizlight-breadcrumb-options'] =
    array(
        'priority'       => 50,
        'title'          => __( 'Breadcrumb options', 'bizlight' ),
        'panel'          => 'bizlight-theme-options',
    );

$bizlight_settings_controls['bizlight-enable-breadcrumb'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-enable-breadcrumb'],
        ),
        'control' => array(
            'label'                 =>  __( 'Enable breadcrumb', 'bizlight' ),
            'section'               => 'bizlight-breadcrumb-options',
            'type'                  => 'checkbox',
            'priority'              => 10,
        )
    );