<?php
global $bizlight_sections;
global $bizlight_settings_controls;
global $bizlight_repeated_settings_controls;
global $bizlight_customizer_defaults;

/*defaults values*/
$bizlight_customizer_defaults['bizlight-footer-sidebar-number'] = 3;
$bizlight_customizer_defaults['bizlight-copyright-text'] = __('Copyright &copy; All right reserved','bizlight');
$bizlight_customizer_defaults['bizlight-enable-social-icons'] = '';

$bizlight_sections['bizlight-footer-options'] =
    array(
        'priority'       => 60,
        'title'          => __( 'Footer Options', 'bizlight' ),
        'panel'          => 'bizlight-theme-options'
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
            'label'                 =>  __( 'Enable Social Icons', 'bizlight' ),
            'description'                 =>  __( 'Please <a href="#" class="menu_locations">click here</a> to create menus for Social Icons. Go to Menus for setting up', 'bizlight' ),
            'section'               => 'bizlight-footer-options',
            'type'                  => 'checkbox',
            'priority'              => 30,
        )
    );