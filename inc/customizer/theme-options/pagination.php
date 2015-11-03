<?php
global $bizlight_sections;
global $bizlight_settings_controls;
global $bizlight_repeated_settings_controls;
global $bizlight_customizer_defaults;

/*defaults values*/
$bizlight_customizer_defaults['bizlight-default-pagination'] = 'default';

$bizlight_sections['bizlight-pagination-options'] =
    array(
        'priority'       => 30,
        'title'          => __( 'Pagination Options', 'bizlight' ),
        'panel'          => 'bizlight-theme-options',
    );

$bizlight_settings_controls['bizlight-default-pagination'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-default-pagination'],
        ),
        'control' => array(
            'label'                 =>  __( 'Pagination Options', 'bizlight' ),
            'section'               => 'bizlight-pagination-options',
            'type'                  => 'select',
            'choices'               => array(
                'default' => __( 'Default', 'bizlight' ),
                'numeric' => __( 'Numeric', 'bizlight' )
            ),
            'priority'              => 20,
            'description'           => '',
            'active_callback'       => ''
        )
    );
