<?php
global $bizlight_panels;
global $bizlight_sections;
global $bizlight_settings_controls;
global $bizlight_repeated_settings_controls;
global $bizlight_customizer_defaults;

/*defaults values*/
$bizlight_customizer_defaults['bizlight-enable-sticky-menu'] = 0;

/*menu setting*/
$bizlight_sections['bizlight-menu-setting'] =
    array(
        'priority'       => 105,
        'title'          => __( 'Menu setting', 'bizlight' ),
        'panel'          => '',
    );


$bizlight_settings_controls['bizlight-enable-sticky-menu'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-enable-sticky-menu']
        ),
        'control' => array(
            'label'                 =>  __( 'Enable sticky menu', 'bizlight' ),
            'section'               => 'bizlight-menu-setting',
            'type'                  => 'checkbox',
            'priority'              => 70,
            'active_callback'       => ''
        )
    );