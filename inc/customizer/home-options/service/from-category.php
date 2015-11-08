<?php
global $bizlight_panels;
global $bizlight_sections;
global $bizlight_settings_controls;
global $bizlight_repeated_settings_controls;
global $bizlight_customizer_defaults;

/*defaults values*/
$bizlight_customizer_defaults['bizlight-home-service-category'] = 0;

/*category selection*/
$bizlight_sections['bizlight-home-service-category'] =
    array(
        'priority'       => 60,
        'title'          => __( 'Select Service from Category', 'bizlight' ),
        'description'    => __( 'This option only work when you have selected "Category" in "Service selection Options".', 'bizlight' ),
        'panel'          => 'bizlight-home-service',
    );

/*creating setting control for bizlight-home-service-Category start*/
$bizlight_settings_controls['bizlight-home-service-category'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-home-service-category']
        ),
        'control' => array(
            'label'                 =>  __( 'Select Category for service', 'bizlight' ),
            'section'               => 'bizlight-home-service-category',
            'type'                  => 'category_dropdown',
            'priority'              => 30,
            'active_callback'       => ''
        )
    );