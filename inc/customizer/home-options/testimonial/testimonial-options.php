<?php
global $bizlight_panels;
global $bizlight_sections;
global $bizlight_settings_controls;
global $bizlight_repeated_settings_controls;
global $bizlight_customizer_defaults;

/*defaults values*/
$bizlight_customizer_defaults['bizlight-home-testimonial-single-words'] = 30;


/*testimonial options*/
$bizlight_sections['bizlight-home-testimonial-options'] =
    array(
        'priority'       => 80,
        'title'          => __( 'Testimonial Options', 'bizlight' ),
        'panel'          => 'bizlight-home-testimonial',
    );


$bizlight_settings_controls['bizlight-home-testimonial-single-words'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-home-testimonial-single-words']
        ),
        'control' => array(
            'label'                 =>  __( 'Single Testimonial- Number Of Words', 'bizlight' ),
            'description'           =>  __( 'If you do not have selected from - Custom', 'bizlight' ),
            'section'               => 'bizlight-home-testimonial-options',
            'type'                  => 'number',
            'priority'              => 25,
            'active_callback'       => ''
        )
    );