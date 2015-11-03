<?php
global $bizlight_panels;
global $bizlight_sections;
global $bizlight_settings_controls;
global $bizlight_repeated_settings_controls;
global $bizlight_customizer_defaults;

/*defaults values*/
$bizlight_customizer_defaults['bizlight-home-service-selection-options'] = 'from-page';

/*servicesetting*/
$bizlight_sections['bizlight-home-service-selection-setting'] =
    array(
        'priority'       => 20,
        'title'          => __( 'Service selection Options', 'bizlight' ),
        'panel'          => 'bizlight-home-service',
    );

$bizlight_settings_controls['bizlight-home-service-selection'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-home-service-selection-options']
        ),
        'control' => array(
            'label'                 =>  __( 'Select Service From', 'bizlight' ),
            'section'               => 'bizlight-home-service-selection-setting',
            'type'                  => 'select',
            'choices'               => array(
                'from-page' => __( 'Page', 'bizlight' ),
                'from-post' => __( 'Post', 'bizlight' ),
                'from-category' => __( 'Category', 'bizlight' ),
                'from-custom' => __( 'Custom', 'bizlight' )
            ),
            'priority'              => 20,
            'active_callback'       => ''
        )
    );