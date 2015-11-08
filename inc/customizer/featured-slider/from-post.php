<?php
global $bizlight_panels;
global $bizlight_sections;
global $bizlight_settings_controls;
global $bizlight_repeated_settings_controls;
global $bizlight_customizer_defaults;

/*defaults values*/
$bizlight_customizer_defaults['bizlight-fs-posts'] = -1;

/*post selection*/
$bizlight_sections['bizlight-fs-posts'] =
    array(
        'priority'       => 50,
        'title'          => __( 'Select Slider from Post', 'bizlight' ),
        'description'    => __( 'This option only work when you have selected "Post" in "Slider selection Options".', 'bizlight' ),
        'panel'          => 'bizlight-featured-slider',
    );

/*creating setting control for bizlight-fs-post start*/
$bizlight_repeated_settings_controls['bizlight-fs-posts'] =
    array(
        'repeated' => 12,
        'bizlight-fs-posts-ids' => array(
            'setting' =>     array(
                'default'              => $bizlight_customizer_defaults['bizlight-fs-posts'],
            ),
            'control' => array(
                'label'                 =>  __( 'Select post for slide %s', 'bizlight' ),
                'section'               => 'bizlight-fs-posts',
                'type'                  => 'post_dropdown',
                'priority'              => 10,
                'description'           => ''
            )
        ),
        'bizlight-fs-posts-divider' => array(
            'control' => array(
                'section'               => 'bizlight-fs-posts',
                'type'                  => 'message',
                'priority'              => 20,
                'description'           => '<br /><hr />'
            )
        )
    );