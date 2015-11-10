<?php
global $bizlight_panels;
global $bizlight_sections;
global $bizlight_settings_controls;
global $bizlight_repeated_settings_controls;
global $bizlight_customizer_defaults;

/*defaults values*/
$bizlight_customizer_defaults['bizlight-home-about-title'] = __('WELCOME TO BIZLIGHT','bizlight');
$bizlight_customizer_defaults['bizlight-home-about-single-words'] = 30;
$bizlight_customizer_defaults['bizlight-home-about-content'] = __('About us short description','bizlight');
$bizlight_customizer_defaults['bizlight-home-about-right-image'] = get_template_directory_uri().'/assets/img/product.png';
$bizlight_customizer_defaults['bizlight-home-about-button-text'] = __('Browse more','bizlight');
$bizlight_customizer_defaults['bizlight-home-about-button-link'] = esc_url( home_url( '/about-us' ) );
$bizlight_customizer_defaults['bizlight-home-about-enable-single-link'] = 1;

/*aboutoptions*/
$bizlight_sections['bizlight-home-about-options'] =
    array(
        'priority'       => 80,
        'title'          => __( 'About Options', 'bizlight' ),
        'panel'          => 'bizlight-home-about',
    );


$bizlight_settings_controls['bizlight-home-about-title'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-home-about-title']
        ),
        'control' => array(
            'label'                 =>  __( 'About Title', 'bizlight' ),
            'section'               => 'bizlight-home-about-options',
            'type'                  => 'text',
            'priority'              => 20,
            'active_callback'       => ''
        )
    );
$bizlight_settings_controls['bizlight-home-about-single-words'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-home-about-single-words']
        ),
        'control' => array(
            'label'                 =>  __( 'Single about number of words', 'bizlight' ),
            'description'           =>  __( 'If you do not have selected from - Custom', 'bizlight' ),
            'section'               => 'bizlight-home-about-options',
            'type'                  => 'number',
            'priority'              => 25,
            'active_callback'       => ''
        )
    );
$bizlight_settings_controls['bizlight-home-about-content'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-home-about-content']
        ),
        'control' => array(
            'label'                 =>  __( 'About short content', 'bizlight' ),
            'section'               => 'bizlight-home-about-options',
            'type'                  => 'textarea_html',
            'priority'              => 30,
            'active_callback'       => ''
        )
    );
$bizlight_settings_controls['bizlight-home-about-right-image'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-home-about-right-image']
        ),
        'control' => array(
            'label'                 =>  __( 'About right image', 'bizlight' ),
            'section'               => 'bizlight-home-about-options',
            'type'                  => 'image',
            'priority'              => 35,
            'active_callback'       => ''
        )
    );

$bizlight_settings_controls['bizlight-home-about-button-text'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-home-about-button-text']
        ),
        'control' => array(
            'label'                 =>  __( 'About button text', 'bizlight' ),
            'section'               => 'bizlight-home-about-options',
            'type'                  => 'text',
            'priority'              => 40,
            'active_callback'       => ''
        )
    );

$bizlight_settings_controls['bizlight-home-about-button-link'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-home-about-button-link']
        ),
        'control' => array(
            'label'                 =>  __( 'About button link', 'bizlight' ),
            'section'               => 'bizlight-home-about-options',
            'type'                  => 'url',
            'priority'              => 50,
            'active_callback'       => ''
        )
    );

$bizlight_settings_controls['bizlight-home-about-enable-single-link'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-home-about-enable-single-link']
        ),
        'control' => array(
            'label'                 =>  __( 'Enable about single link', 'bizlight' ),
            'section'               => 'bizlight-home-about-options',
            'type'                  => 'checkbox',
            'priority'              => 60,
            'active_callback'       => ''
        )
    );