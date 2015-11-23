<?php
global $bizlight_panels;
global $bizlight_sections;
global $bizlight_settings_controls;
global $bizlight_repeated_settings_controls;
global $bizlight_customizer_defaults;

/*defaults values*/
$bizlight_customizer_defaults['bizlight-home-testimonial-category'] = 0;

/*category selection*/
$bizlight_sections['bizlight-home-testimonial-category'] =
    array(
        'priority'       => 60,
        'title'          => __( 'Select Testimonial From Category', 'bizlight' ),
        'description'    => __( 'This option only work when you have selected "Category" in "Testimonial selection Options".', 'bizlight' ),
        'panel'          => 'bizlight-home-testimonial',
    );

/*creating setting control for bizlight-home-testimonial-Category start*/
$bizlight_settings_controls['bizlight-home-testimonial-category'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-home-testimonial-category']
        ),
        'control' => array(
            'label'                 =>  __( 'Select Category For Testimonial', 'bizlight' ),
            'section'               => 'bizlight-home-testimonial-category',
            'type'                  => 'category_dropdown',
            'priority'              => 30,
            'active_callback'       => ''
        )
    );