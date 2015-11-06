<?php
global $bizlight_sections;
global $bizlight_settings_controls;
global $bizlight_repeated_settings_controls;
global $bizlight_customizer_defaults;

/*defaults values*/
$bizlight_customizer_defaults['bizlight-pagination-options'] = 'numeric';

$bizlight_sections['bizlight-pagination-options'] =
    array(
        'priority'       => 30,
        'title'          => __( 'Pagination Options', 'bizlight' ),
        'panel'          => 'bizlight-theme-options',
    );

$bizlight_settings_controls['bizlight-pagination-options'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-pagination-options'],
        ),
        'control' => array(
            'label'                 =>  __( 'Pagination Options', 'bizlight' ),
            'section'               => 'bizlight-pagination-options',
            'type'                  => 'select',
            'choices'               => array(
                'default' => __( 'Default', 'bizlight' ),
                'numeric' => __( 'Numeric', 'bizlight' ),
                'advanced' => __( 'Advanced', 'bizlight' ),
            ),
            'priority'              => 20,
            'description'           => '',
            'active_callback'       => ''
        )
    );
