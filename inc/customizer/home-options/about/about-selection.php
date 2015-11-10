<?php
global $bizlight_panels;
global $bizlight_sections;
global $bizlight_settings_controls;
global $bizlight_repeated_settings_controls;
global $bizlight_customizer_defaults;

/*defaults values*/
$bizlight_customizer_defaults['bizlight-home-about-selection'] = 'from-page';

/*aboutsetting*/
$bizlight_sections['bizlight-home-about-selection-setting'] =
    array(
        'priority'       => 20,
        'title'          => __( 'About Selection Options', 'bizlight' ),
        'panel'          => 'bizlight-home-about',
    );

$bizlight_settings_controls['bizlight-home-about-selection'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-home-about-selection']
        ),
        'control' => array(
            'label'                 =>  __( 'Select About From', 'bizlight' ),
            'section'               => 'bizlight-home-about-selection-setting',
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