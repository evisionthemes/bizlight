<?php
global $bizlight_sections;
global $bizlight_settings_controls;
global $bizlight_repeated_settings_controls;
global $bizlight_customizer_defaults;

/*defaults values*/
$bizlight_customizer_defaults['bizlight-footer-sidebar-number'] = 3;
$bizlight_customizer_defaults['bizlight-copyright-text'] = __('Copyright &copy; eVisionThemes','bizlight');
$bizlight_customizer_defaults['bizlight-enable-social-icons'] = 0;
$bizlight_customizer_defaults['bizlight-enable-theme-name'] = 1;
$bizlight_customizer_defaults['bizlight-enable-back-to-top'] = 1;

$bizlight_sections['bizlight-footer-options'] =
    array(
        'priority'       => 60,
        'title'          => __( 'Footer Options', 'bizlight' ),
        'panel'          => 'bizlight-theme-options'
    );

$bizlight_settings_controls['bizlight-footer-sidebar-number'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-footer-sidebar-number'],
        ),
        'control' => array(
            'label'                 =>  __( 'Number of Sidebars In Footer Area', 'bizlight' ),
            'section'               => 'bizlight-footer-options',
            'type'                  => 'select',
            'choices'               => array(
                0 => __( 'Disable footer sidebar area', 'bizlight' ),
                1 => __( '1', 'bizlight' ),
                2 => __( '2', 'bizlight' ),
                3 => __( '3', 'bizlight' ),
                4 => __( '4', 'bizlight' )
            ),
            'priority'              => 10,
            'description'           => '',
            'active_callback'       => ''
        )
    );

$bizlight_settings_controls['bizlight-copyright-text'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-copyright-text'],
        ),
        'control' => array(
            'label'                 =>  __( 'Copyright Text', 'bizlight' ),
            'section'               => 'bizlight-footer-options',
            'type'                  => 'text_html',
            'priority'              => 20,
        )
    );

$bizlight_settings_controls['bizlight-enable-social-icons'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-enable-social-icons'],
        ),
        'control' => array(
            'label'                 =>  __( 'Enable Social', 'bizlight' ),
            'description'                 =>  __( 'Please add Social menus for enabling Social menus. Go to Menus for setting up', 'bizlight' ),
            'section'               => 'bizlight-footer-options',
            'type'                  => 'checkbox',
            'priority'              => 30,
        )
    );

$bizlight_settings_controls['bizlight-enable-theme-name'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-enable-theme-name'],
        ),
        'control' => array(
            'label'                 =>  __( 'Enable Theme Name And Powered By Text', 'bizlight' ),
            'section'               => 'bizlight-footer-options',
            'type'                  => 'checkbox',
            'priority'              => 40,
        )
    );