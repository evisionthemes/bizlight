<?php
global $bizlight_panels;
global $bizlight_sections;
global $bizlight_settings_controls;
global $bizlight_repeated_settings_controls;
global $bizlight_customizer_defaults;

/*defaults values*/
$bizlight_customizer_defaults['bizlight-home-testimonial-selection'] = 'from-page';

/*testimonialsetting*/
$bizlight_sections['bizlight-home-testimonial-selection-setting'] =
    array(
        'priority'       => 20,
        'title'          => __( 'Testimonial Selection Options', 'bizlight' ),
        'panel'          => 'bizlight-home-testimonial',
    );

$bizlight_settings_controls['bizlight-home-testimonial-selection'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-home-testimonial-selection']
        ),
        'control' => array(
            'label'                 =>  __( 'Select Testimonial From', 'bizlight' ),
            'section'               => 'bizlight-home-testimonial-selection-setting',
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