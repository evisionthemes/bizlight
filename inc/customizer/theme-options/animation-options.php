<?php
global $bizlight_sections;
global $bizlight_settings_controls;
global $bizlight_repeated_settings_controls;
global $bizlight_customizer_defaults;

/*defaults values*/
$bizlight_customizer_defaults['bizlight-enable-animation-options'] = 1;

$bizlight_sections['bizlight-animation-options'] =
    array(
        'priority'       => 80,
        'title'          => __( 'Animation Options', 'bizlight' ),
        'panel'          => 'bizlight-theme-options'
    );

$bizlight_settings_controls['bizlight-enable-animation-options'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-enable-animation-options'],
        ),
        'control' => array(
            'label'                 =>  __( 'Enable Animation', 'bizlight' ),
            'section'               => 'bizlight-animation-options',
            'type'                  => 'checkbox',
            'priority'              => 50,
        )
    );