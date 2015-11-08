<?php
global $bizlight_panels;
global $bizlight_sections;
global $bizlight_settings_controls;
global $bizlight_repeated_settings_controls;
global $bizlight_customizer_defaults;

/*defaults values*/
$bizlight_customizer_defaults['bizlight-fs-category'] = 0;

/*category selection*/
$bizlight_sections['bizlight-fs-category'] =
    array(
        'priority'       => 60,
        'title'          => __( 'Select Slider from Category', 'bizlight' ),
        'description'    => __( 'This option only work when you have selected "Category" in "Slider selection Options".', 'bizlight' ),
        'panel'          => 'bizlight-featured-slider',
    );

/*creating setting control for bizlight-fs-Category start*/
$bizlight_settings_controls['bizlight-fs-category'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-fs-category']
        ),
        'control' => array(
            'label'                 =>  __( 'Select Category for slider', 'bizlight' ),
            'section'               => 'bizlight-fs-category',
            'type'                  => 'category_dropdown',
            'priority'              => 30,
            'active_callback'       => ''
        )
    );