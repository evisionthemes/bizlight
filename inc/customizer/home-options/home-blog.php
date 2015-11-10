<?php
global $bizlight_panels;
global $bizlight_sections;
global $bizlight_settings_controls;
global $bizlight_repeated_settings_controls;
global $bizlight_customizer_defaults;

/*defaults values*/
$bizlight_customizer_defaults['bizlight-home-blog-title'] = __('LATEST NEWS','bizlight');
$bizlight_customizer_defaults['bizlight-home-blog-number'] = 3;
$bizlight_customizer_defaults['bizlight-home-blog-column'] = 3;
$bizlight_customizer_defaults['bizlight-home-blog-button-text'] = __('Browse more','bizlight');
$bizlight_customizer_defaults['bizlight-home-blog-button-link'] = esc_url( home_url( '/blog' ) );
$bizlight_customizer_defaults['bizlight-home-blog-enable'] = 1;

/*aboutoptions*/
$bizlight_sections['bizlight-home-blog-options'] =
    array(
        'priority'       => 175,
        'title'          => __( 'Home/Front blog Options', 'bizlight' ),
    );


$bizlight_settings_controls['bizlight-home-blog-title'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-home-blog-title']
        ),
        'control' => array(
            'label'                 =>  __( 'Latest Blog title', 'bizlight' ),
            'section'               => 'bizlight-home-blog-options',
            'type'                  => 'text',
            'priority'              => 10,
            'active_callback'       => ''
        )
    );

$bizlight_settings_controls['bizlight-home-blog-number'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-home-blog-number']
        ),
        'control' => array(
            'label'                 =>  __( 'Number of blog/s', 'bizlight' ),
            'section'               => 'bizlight-home-blog-options',
            'type'                  => 'select',
            'choices'               => array(
                1 => __( '1', 'bizlight' ),
                2 => __( '2', 'bizlight' ),
                3 => __( '3', 'bizlight' ),
                4 => __( '4', 'bizlight' ),
                5 => __( '5', 'bizlight' ),
                6 => __( '6', 'bizlight' ),
                7 => __( '7', 'bizlight' ),
                8 => __( '8', 'bizlight' ),
                9 => __( '9', 'bizlight' ),
                10 => __( '10', 'bizlight' ),
                11 => __( '11', 'bizlight' ),
                12 => __( '12', 'bizlight' ),
            ),
            'priority'              => 30,
            'active_callback'       => ''
        )
    );

$bizlight_settings_controls['bizlight-home-blog-column'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-home-blog-column']
        ),
        'control' => array(
            'label'                 =>  __( 'Number of columns', 'bizlight' ),
            'section'               => 'bizlight-home-blog-options',
            'type'                  => 'select',
            'choices'               => array(
                1 => __( '1', 'bizlight' ),
                2 => __( '2', 'bizlight' ),
                3 => __( '3', 'bizlight' ),
                4 => __( '4', 'bizlight' ),
            ),
            'priority'              => 30,
            'active_callback'       => ''
        )
    );

$bizlight_settings_controls['bizlight-home-blog-button-text'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-home-blog-button-text']
        ),
        'control' => array(
            'label'                 =>  __( 'Blog button text', 'bizlight' ),
            'section'               => 'bizlight-home-blog-options',
            'type'                  => 'text',
            'priority'              => 40,
            'active_callback'       => ''
        )
    );

$bizlight_settings_controls['bizlight-home-blog-button-link'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-home-blog-button-link']
        ),
        'control' => array(
            'label'                 =>  __( 'Blog button link', 'bizlight' ),
            'section'               => 'bizlight-home-blog-options',
            'type'                  => 'url',
            'priority'              => 50,
            'active_callback'       => ''
        )
    );
$bizlight_settings_controls['bizlight-home-blog-enable'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-home-blog-enable']
        ),
        'control' => array(
            'label'                 =>  __( 'Enable Blog', 'bizlight' ),
            'section'               => 'bizlight-home-blog-options',
            'type'                  => 'checkbox',
            'priority'              => 60,
            'active_callback'       => ''
        )
    );