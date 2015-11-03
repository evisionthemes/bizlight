<?php
global $bizlight_panels;
global $bizlight_sections;
global $bizlight_settings_controls;
global $bizlight_repeated_settings_controls;
global $bizlight_customizer_defaults;

/*defaults values*/
$bizlight_customizer_defaults['bizlight-home-about-category'] = 0;

/*category selection*/
$bizlight_sections['bizlight-home-about-category'] =
    array(
        'priority'       => 60,
        'title'          => __( 'Select About from Category', 'bizlight' ),
        'description'    => __( 'This option only work when you have selected "Category" in "About selection Options".', 'bizlight' ),
        'panel'          => 'bizlight-home-about',
    );

/*creating setting control for bizlight-home-about-Category start*/
$bizlight_settings_controls['bizlight-home-about-category'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-home-about-category']
        ),
        'control' => array(
            'label'                 =>  __( 'Select Category for about', 'bizlight' ),
            'section'               => 'bizlight-home-about-category',
            'type'                  => 'category_dropdown',
            'priority'              => 30,
            'active_callback'       => ''
        )
    );