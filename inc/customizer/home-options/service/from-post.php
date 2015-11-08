<?php
global $bizlight_panels;
global $bizlight_sections;
global $bizlight_settings_controls;
global $bizlight_repeated_settings_controls;
global $bizlight_customizer_defaults;

/*defaults values*/
$bizlight_customizer_defaults['bizlight-home-service-post-icon'] = 'fa-desktop';
$bizlight_customizer_defaults['bizlight-home-service-posts'] = -1;

/*post selection*/
$bizlight_sections['bizlight-home-service-posts'] =
    array(
        'priority'       => 50,
        'title'          => __( 'Select Service from Post', 'bizlight' ),
        'description'    => __( 'This option only work when you have selected "Post" in "Service selection Options".', 'bizlight' ),
        'panel'          => 'bizlight-home-service',
    );

/*creating setting control for bizlight-home-service-post start*/
$bizlight_repeated_settings_controls['bizlight-home-service-posts'] =
    array(
        'repeated' => 12,
        'bizlight-home-service-post-icon' => array(
            'setting' =>     array(
                'default'              => $bizlight_customizer_defaults['bizlight-home-service-post-icon'],
            ),
            'control' => array(
                'label'                 =>  __( 'Icon %s', 'bizlight' ),
                'section'               => 'bizlight-home-service-posts',
                'type'                  => 'text',
                'priority'              => 5,
                'description'           => sprintf( __( 'Use font awesome icon: Eg: %s. %sSee more here%s', 'bizlight' ), 'fa-desktop','<a href="'.esc_url('http://fontawesome.io/cheatsheet/').'" target="_blank">','</a>' ),
            )
        ),
        'bizlight-home-service-posts-posts' => array(
            'setting' =>     array(
                'default'              => $bizlight_customizer_defaults['bizlight-home-service-posts'],
            ),
            'control' => array(
                'label'                 =>  __( 'Select post for service %s', 'bizlight' ),
                'section'               => 'bizlight-home-service-posts',
                'type'                  => 'post_dropdown',
                'priority'              => 10,
                'description'           => ''
            )
        ),
        'bizlight-home-service-posts-divider' => array(
            'control' => array(
                'section'               => 'bizlight-home-service-posts',
                'type'                  => 'message',
                'priority'              => 20,
                'description'           => '<br /><hr />'
            )
        )
    );