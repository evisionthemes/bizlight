<?php
global $bizlight_panels;
global $bizlight_sections;
global $bizlight_settings_controls;
global $bizlight_repeated_settings_controls;
global $bizlight_customizer_defaults;

/*defaults values*/
$bizlight_customizer_defaults['bizlight-fs-selection'] = 'from-page';

/*fs setting*/
$bizlight_sections['bizlight-fs-selection-setting'] =
    array(
        'priority'       => 20,
        'title'          => __( 'Slider Selection Options', 'bizlight' ),
        'panel'          => 'bizlight-featured-slider',
    );

$bizlight_settings_controls['bizlight-fs-selection'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-fs-selection']
        ),
        'control' => array(
            'label'                 =>  __( 'Select Slider From', 'bizlight' ),
            'section'               => 'bizlight-fs-selection-setting',
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