<?php
global $bizlight_panels;
global $bizlight_sections;
global $bizlight_settings_controls;
global $bizlight_repeated_settings_controls;
global $bizlight_customizer_defaults;

/*defaults values*/
$bizlight_customizer_defaults['bizlight-home-service-custom-icon'] = 'fa-desktop';
$bizlight_customizer_defaults['bizlight-home-service-custom-title'] = '';
$bizlight_customizer_defaults['bizlight-home-service-custom-content'] = '';
$bizlight_customizer_defaults['bizlight-home-service-custom-link'] = '';

/*Custom selection*/
$bizlight_sections['bizlight-home-service-custom'] =
    array(
        'priority'       => 70,
        'title'          => __( 'Select Service from Custom', 'bizlight' ),
        'description'    => __( 'This option only work when you have selected "Custom" in "Service selection Options".', 'bizlight' ),
        'panel'          => 'bizlight-home-service',
    );

/*creating setting control for bizlight-home-service-Custom start*/
$bizlight_repeated_settings_controls['bizlight-home-service-custom'] =
    array(
        'repeated' => 12,
        'bizlight-home-service-custom-icon' => array(
            'setting' =>     array(
                'default'              => $bizlight_customizer_defaults['bizlight-home-service-custom-icon'],
            ),
            'control' => array(
                'label'                 =>  __( 'Icon %s', 'bizlight' ),
                'section'               => 'bizlight-home-service-custom',
                'type'                  => 'text',
                'priority'              => 5,
                'description'           => sprintf( __( 'Use font awesome icon: Eg: %s. %sSee more here%s', 'bizlight' ), 'fa-desktop','<a href="'.esc_url('http://fontawesome.io/cheatsheet/').'" target="_blank">','</a>' ),
            )
        ),
        'bizlight-home-service-custom-title' => array(
            'setting' =>     array(
                'default'              => $bizlight_customizer_defaults['bizlight-home-service-custom-title'],
            ),
            'control' => array(
                'label'                 =>  __( 'Title %s', 'bizlight' ),
                'section'               => 'bizlight-home-service-custom',
                'type'                  => 'text',
                'priority'              => 10,
                'description'           => ''
            )
        ),
        'bizlight-home-service-custom-content' => array(
            'setting' =>     array(
                'default'              => $bizlight_customizer_defaults['bizlight-home-service-custom-content'],
            ),
            'control' => array(
                'label'                 =>  __( 'Content %s', 'bizlight' ),
                'section'               => 'bizlight-home-service-custom',
                'type'                  => 'textarea_html',
                'priority'              => 20,
                'description'           => ''
            )
        ),
        'bizlight-home-service-custom-link' => array(
            'setting' =>     array(
                'default'              => $bizlight_customizer_defaults['bizlight-home-service-custom-link'],
            ),
            'control' => array(
                'label'                 =>  __( 'Link %s', 'bizlight' ),
                'section'               => 'bizlight-home-service-custom',
                'type'                  => 'url',
                'priority'              => 30,
                'description'           => ''
            )
        ),
        'bizlight-home-service-custom-divider' => array(
            'control' => array(
                'section'               => 'bizlight-home-service-custom',
                'type'                  => 'message',
                'priority'              => 40,
                'description'           => '<br /><hr />'
            )
        )
    );