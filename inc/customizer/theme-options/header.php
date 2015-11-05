<?php
global $bizlight_sections;
global $bizlight_settings_controls;
global $bizlight_repeated_settings_controls;
global $bizlight_customizer_defaults;

/*defaults values*/
$bizlight_customizer_defaults['bizlight-header-layout'] = 'header-layout-1';

$bizlight_sections['bizlight-header-options'] =
    array(
        'priority'       => 55,
        'title'          => __( 'Header Options', 'bizlight' ),
        'panel'          => 'bizlight-theme-options'
    );

$bizlight_settings_controls['bizlight-header-layout'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-header-layout'],
        ),
        'control' => array(
            'label'                 =>  __( 'Select Header layout', 'bizlight' ),
            'section'               => 'bizlight-header-options',
            'type'                  => 'select',
            'choices'               => array(
                'header-layout-1' => __( 'Header Layout 1', 'bizlight' ),
                'header-layout-2' => __( 'Header Layout 2', 'bizlight' )
            ),
            'priority'              => 10,
            'description'           => '',
            'active_callback'       => ''
        )
    );