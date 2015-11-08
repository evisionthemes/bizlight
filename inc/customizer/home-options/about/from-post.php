<?php
global $bizlight_panels;
global $bizlight_sections;
global $bizlight_settings_controls;
global $bizlight_repeated_settings_controls;
global $bizlight_customizer_defaults;

/*defaults values*/
$bizlight_customizer_defaults['bizlight-home-about-post-icon'] = 'fa-desktop';
$bizlight_customizer_defaults['bizlight-home-about-posts'] = -1;

/*post selection*/
$bizlight_sections['bizlight-home-about-posts'] =
    array(
        'priority'       => 50,
        'title'          => __( 'Select About from Post', 'bizlight' ),
        'description'    => __( 'This option only work when you have selected "Post" in "About selection Options".', 'bizlight' ),
        'panel'          => 'bizlight-home-about',
    );

/*creating setting control for bizlight-home-about-post start*/
$bizlight_repeated_settings_controls['bizlight-home-about-posts'] =
    array(
        'repeated' => 12,
        'bizlight-home-about-post-icon' => array(
            'setting' =>     array(
                'default'              => $bizlight_customizer_defaults['bizlight-home-about-post-icon'],
            ),
            'control' => array(
                'label'                 =>  __( 'Icon %s', 'bizlight' ),
                'section'               => 'bizlight-home-about-posts',
                'type'                  => 'text',
                'priority'              => 5,
                'description'           => sprintf( __( 'Use font awesome icon: Eg: %s. %sSee more here%s', 'bizlight' ), 'fa-desktop','<a href="'.esc_url('http://fontawesome.io/cheatsheet/').'" target="_blank">','</a>' ),
            )
        ),
        'bizlight-home-about-posts-posts' => array(
            'setting' =>     array(
                'default'              => $bizlight_customizer_defaults['bizlight-home-about-posts'],
            ),
            'control' => array(
                'label'                 =>  __( 'Select post for about %s', 'bizlight' ),
                'section'               => 'bizlight-home-about-posts',
                'type'                  => 'post_dropdown',
                'priority'              => 10,
                'description'           => ''
            )
        ),
        'bizlight-home-about-posts-divider' => array(
            'control' => array(
                'section'               => 'bizlight-home-about-posts',
                'type'                  => 'message',
                'priority'              => 20,
                'description'           => '<br /><hr />'
            )
        )
    );