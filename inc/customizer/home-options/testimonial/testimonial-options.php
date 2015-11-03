<?php
global $bizlight_panels;
global $bizlight_sections;
global $bizlight_settings_controls;
global $bizlight_repeated_settings_controls;
global $bizlight_customizer_defaults;

/*defaults values*/
$bizlight_customizer_defaults['bizlight-home-testimonial-title'] = __('WELCOME TO BIZLIGHT','bizlight');
$bizlight_customizer_defaults['bizlight-home-testimonial-content'] = __('Testimonial us short description','bizlight');
$bizlight_customizer_defaults['bizlight-home-testimonial-button-text'] = __('Browse more','bizlight');
$bizlight_customizer_defaults['bizlight-home-testimonial-button-link'] = esc_url( home_url( '/testimonial-us' ) );
$bizlight_customizer_defaults['bizlight-home-testimonial-enable-single-link'] = 1;

/*testimonialoptions*/
$bizlight_sections['bizlight-home-testimonial-options'] =
    array(
        'priority'       => 80,
        'title'          => __( 'Testimonial Options', 'bizlight' ),
        'panel'          => 'bizlight-home-testimonial',
    );


$bizlight_settings_controls['bizlight-home-testimonial-title'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-home-testimonial-title']
        ),
        'control' => array(
            'label'                 =>  __( 'Testimonial Title', 'bizlight' ),
            'section'               => 'bizlight-home-testimonial-options',
            'type'                  => 'text',
            'priority'              => 20,
            'active_callback'       => ''
        )
    );

$bizlight_settings_controls['bizlight-home-testimonial-content'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-home-testimonial-content']
        ),
        'control' => array(
            'label'                 =>  __( 'Testimonial short content', 'bizlight' ),
            'section'               => 'bizlight-home-testimonial-options',
            'type'                  => 'textarea_html',
            'priority'              => 30,
            'active_callback'       => ''
        )
    );

$bizlight_settings_controls['bizlight-home-testimonial-button-text'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-home-testimonial-button-text']
        ),
        'control' => array(
            'label'                 =>  __( 'Testimonial button text', 'bizlight' ),
            'section'               => 'bizlight-home-testimonial-options',
            'type'                  => 'text',
            'priority'              => 40,
            'active_callback'       => ''
        )
    );

$bizlight_settings_controls['bizlight-home-testimonial-button-link'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-home-testimonial-button-link']
        ),
        'control' => array(
            'label'                 =>  __( 'Testimonial button link', 'bizlight' ),
            'section'               => 'bizlight-home-testimonial-options',
            'type'                  => 'url',
            'priority'              => 50,
            'active_callback'       => ''
        )
    );

$bizlight_settings_controls['bizlight-home-testimonial-enable-single-link'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-home-testimonial-enable-single-link']
        ),
        'control' => array(
            'label'                 =>  __( 'Enable testimonial single link', 'bizlight' ),
            'section'               => 'bizlight-home-testimonial-options',
            'type'                  => 'checkbox',
            'priority'              => 60,
            'active_callback'       => ''
        )
    );