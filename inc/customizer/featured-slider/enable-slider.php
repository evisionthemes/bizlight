<?php
global $bizlight_panels;
global $bizlight_sections;
global $bizlight_settings_controls;
global $bizlight_repeated_settings_controls;
global $bizlight_customizer_defaults;

/*defaults values*/
$bizlight_customizer_defaults['bizlight-fs-enable-options'] = 'home-page-only';

/*fs setting*/
$bizlight_sections['bizlight-fs-enable-setting'] =
    array(
        'priority'       => 10,
        'title'          => __( 'Slider Enable Options', 'bizlight' ),
        'panel'          => 'bizlight-featured-slider',
    );

$bizlight_settings_controls['bizlight-fs-enable'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-fs-enable-options']
        ),
        'control' => array(
            'label'                 =>  __( 'Enable Slider on', 'bizlight' ),
            'section'               => 'bizlight-fs-enable-setting',
            'type'                  => 'select',
            'choices'               => array(
                'disable' => __( 'Disable', 'bizlight' ),
                'whole-site' => __( 'Whole Site', 'bizlight' ),
                'home-page-only' => __( 'Home Page only', 'bizlight' ),
                'blog-page-only' => __( 'Blog Page Only', 'bizlight' ),
                'home-page-blog-page' => __( 'Home page + Blog page', 'bizlight' ),
            ),
            'priority'              => 50,
            'active_callback'       => ''
        )
    );