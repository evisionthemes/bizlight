<?php
global $bizlight_panels;
global $bizlight_sections;
global $bizlight_settings_controls;
global $bizlight_repeated_settings_controls;
global $bizlight_customizer_defaults;

/*defaults values*/
$bizlight_customizer_defaults['bizlight-home-testimonial-custom-icon'] = 'fa-desktop';
$bizlight_customizer_defaults['bizlight-home-testimonial-custom-title'] = '';
$bizlight_customizer_defaults['bizlight-home-testimonial-custom-content'] = '';
$bizlight_customizer_defaults['bizlight-home-testimonial-custom-link'] = '';

/*Custom selection*/
$bizlight_sections['bizlight-home-testimonial-custom'] =
    array(
        'priority'       => 70,
        'title'          => __( 'Select Testimonial From Custom', 'bizlight' ),
        'description'    => __( 'This option only work when you have selected "Custom" in "Testimonial selection Options".', 'bizlight' ),
        'panel'          => 'bizlight-home-testimonial',
    );

/*creating setting control for bizlight-home-testimonial-Custom start*/
$bizlight_repeated_settings_controls['bizlight-home-testimonial-custom'] =
    array(
        'repeated' => 6,
        'bizlight-home-testimonial-custom-title' => array(
            'setting' =>     array(
                'default'              => $bizlight_customizer_defaults['bizlight-home-testimonial-custom-title'],
            ),
            'control' => array(
                'label'                 =>  __( 'Sayer Name/Position %s', 'bizlight' ),
                'section'               => 'bizlight-home-testimonial-custom',
                'type'                  => 'text',
                'priority'              => 10,
                'description'           => ''
            )
        ),
        'bizlight-home-testimonial-custom-content' => array(
            'setting' =>     array(
                'default'              => $bizlight_customizer_defaults['bizlight-home-testimonial-custom-content'],
            ),
            'control' => array(
                'label'                 =>  __( 'Content %s', 'bizlight' ),
                'section'               => 'bizlight-home-testimonial-custom',
                'type'                  => 'textarea_html',
                'priority'              => 20,
                'description'           => ''
            )
        ),
        'bizlight-home-testimonial-custom-divider' => array(
            'control' => array(
                'section'               => 'bizlight-home-testimonial-custom',
                'type'                  => 'message',
                'priority'              => 40,
                'description'           => '<br /><hr />'
            )
        )
    );