<?php
global $bizlight_panels;
global $bizlight_sections;
global $bizlight_settings_controls;
global $bizlight_repeated_settings_controls;
global $bizlight_customizer_defaults;

/*defaults values*/
$bizlight_customizer_defaults['bizlight-home-about-custom-icon'] = 'fa-desktop';
$bizlight_customizer_defaults['bizlight-home-about-custom-title'] = '';
$bizlight_customizer_defaults['bizlight-home-about-custom-content'] = '';
$bizlight_customizer_defaults['bizlight-home-about-custom-link'] = '';

/*Custom selection*/
$bizlight_sections['bizlight-home-about-custom'] =
    array(
        'priority'       => 70,
        'title'          => __( 'Select About from Custom', 'bizlight' ),
        'description'    => __( 'This option only work when you have selected "Custom" in "About selection Options".', 'bizlight' ),
        'panel'          => 'bizlight-home-about',
    );

/*creating setting control for bizlight-home-about-Custom start*/
$bizlight_repeated_settings_controls['bizlight-home-about-custom'] =
    array(
        'repeated' => 12,
        'bizlight-home-about-custom-icon' => array(
            'setting' =>     array(
                'default'              => $bizlight_customizer_defaults['bizlight-home-about-custom-icon'],
            ),
            'control' => array(
                'label'                 =>  __( 'Icon %s', 'bizlight' ),
                'section'               => 'bizlight-home-about-custom',
                'type'                  => 'text',
                'priority'              => 5,
                'description'           => sprintf( __( 'Use font awesome icon: Eg: %s. %sSee more here%s', 'bizlight' ), 'fa-desktop','<a href="'.esc_url('http://fontawesome.io/cheatsheet/').'" target="_blank">','</a>' ),
            )
        ),
        'bizlight-home-about-custom-title' => array(
            'setting' =>     array(
                'default'              => $bizlight_customizer_defaults['bizlight-home-about-custom-title'],
            ),
            'control' => array(
                'label'                 =>  __( 'Title %s', 'bizlight' ),
                'section'               => 'bizlight-home-about-custom',
                'type'                  => 'text',
                'priority'              => 10,
                'description'           => ''
            )
        ),
        'bizlight-home-about-custom-content' => array(
            'setting' =>     array(
                'default'              => $bizlight_customizer_defaults['bizlight-home-about-custom-content'],
            ),
            'control' => array(
                'label'                 =>  __( 'Content %s', 'bizlight' ),
                'section'               => 'bizlight-home-about-custom',
                'type'                  => 'textarea_html',
                'priority'              => 20,
                'description'           => ''
            )
        ),
        'bizlight-home-about-custom-link' => array(
            'setting' =>     array(
                'default'              => $bizlight_customizer_defaults['bizlight-home-about-custom-link'],
            ),
            'control' => array(
                'label'                 =>  __( 'Link %s', 'bizlight' ),
                'section'               => 'bizlight-home-about-custom',
                'type'                  => 'url',
                'priority'              => 30,
                'description'           => ''
            )
        ),
        'bizlight-home-about-custom-divider' => array(
            'control' => array(
                'section'               => 'bizlight-home-about-custom',
                'type'                  => 'message',
                'priority'              => 40,
                'description'           => '<br /><hr />'
            )
        )
    );