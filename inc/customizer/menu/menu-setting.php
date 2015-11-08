<?php
global $bizlight_panels;
global $bizlight_sections;
global $bizlight_settings_controls;
global $bizlight_repeated_settings_controls;
global $bizlight_customizer_defaults;

/*defaults values*/
$bizlight_customizer_defaults['bizlight-menu-alignment'] = 'right';
$bizlight_customizer_defaults['bizlight-enable-search'] = 1;
$bizlight_customizer_defaults['bizlight-enable-sticky-menu'] = 0;

/*menu setting*/
$bizlight_sections['bizlight-menu-setting'] =
    array(
        'priority'       => 105,
        'title'          => __( 'Menu setting', 'bizlight' ),
        'panel'          => '',
    );

$bizlight_settings_controls['bizlight-menu-alignment'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-menu-alignment']
        ),
        'control' => array(
            'label'                 =>  __( 'Menu alignment', 'bizlight' ),
            'section'               => 'bizlight-menu-setting',
            'type'                  => 'select',
            'choices'               => array(
                'right' => __( 'Right', 'bizlight' ),
                'left' => __( 'Left', 'bizlight' ),
                'middle' => __( 'Middle', 'bizlight' ),
            ),
            'description'    => __( 'Note : Menu alignment only support for short menus', 'bizlight' ),
            'priority'              => 50,
            'active_callback'       => ''
        )
    );

$bizlight_settings_controls['bizlight-enable-search'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-enable-search']
        ),
        'control' => array(
            'label'                 =>  __( 'Enable search on menu', 'bizlight' ),
            'section'               => 'bizlight-menu-setting',
            'type'                  => 'checkbox',
            'priority'              => 60,
            'active_callback'       => ''
        )
    );
$bizlight_settings_controls['bizlight-enable-sticky-menu'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-enable-sticky-menu']
        ),
        'control' => array(
            'label'                 =>  __( 'Enable sticky menu', 'bizlight' ),
            'section'               => 'bizlight-menu-setting',
            'type'                  => 'checkbox',
            'priority'              => 70,
            'active_callback'       => ''
        )
    );