<?php
global $bizlight_panels;
global $bizlight_sections;
global $bizlight_settings_controls;
global $bizlight_repeated_settings_controls;
global $bizlight_customizer_defaults;

/*defaults values*/
$bizlight_customizer_defaults['bizlight-home-testimonial-post-icon'] = 'fa-desktop';
$bizlight_customizer_defaults['bizlight-home-testimonial-posts'] = -1;

/*post selection*/
$bizlight_sections['bizlight-home-testimonial-posts'] =
    array(
        'priority'       => 50,
        'title'          => __( 'Select Testimonial from Post', 'bizlight' ),
        'description'    => __( 'This option only work when you have selected "Post" in "Testimonial selection Options".', 'bizlight' ),
        'panel'          => 'bizlight-home-testimonial',
    );

/*creating setting control for bizlight-home-testimonial-post start*/
$bizlight_repeated_settings_controls['bizlight-home-testimonial-posts'] =
    array(
        'repeated' => 12,
        'bizlight-home-testimonial-post-icon' => array(
            'setting' =>     array(
                'default'              => $bizlight_customizer_defaults['bizlight-home-testimonial-post-icon'],
            ),
            'control' => array(
                'label'                 =>  __( 'Icon %s', 'bizlight' ),
                'section'               => 'bizlight-home-testimonial-posts',
                'type'                  => 'text',
                'priority'              => 5,
                'description'           => sprintf( __( 'Use font awesome icon: Eg: %s. %sSee more here%s', 'bizlight' ), 'fa-desktop','<a href="'.esc_url('http://fontawesome.io/cheatsheet/').'" target="_blank">','</a>' ),
            )
        ),
        'bizlight-home-testimonial-posts-posts' => array(
            'setting' =>     array(
                'default'              => $bizlight_customizer_defaults['bizlight-home-testimonial-posts'],
            ),
            'control' => array(
                'label'                 =>  __( 'Select post for testimonial %s', 'bizlight' ),
                'section'               => 'bizlight-home-testimonial-posts',
                'type'                  => 'post_dropdown',
                'priority'              => 10,
                'description'           => ''
            )
        ),
        'bizlight-home-testimonial-posts-divider' => array(
            'control' => array(
                'section'               => 'bizlight-home-testimonial-posts',
                'type'                  => 'message',
                'priority'              => 20,
                'description'           => '<br /><hr />'
            )
        )
    );