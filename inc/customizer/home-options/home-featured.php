<?php
global $bizlight_sections;
global $bizlight_settings_controls;
global $bizlight_repeated_settings_controls;
global $bizlight_customizer_defaults;

/*defaults values*/
$bizlight_customizer_defaults['bizlight-home-featured-title'] = __( 'WANT TO KNOW MORE ABOUT OUR COMPANY?', 'bizlight' );
$bizlight_customizer_defaults['bizlight-home-featured-bg'] = get_template_directory_uri().'/assets/img/heightlight-bg.jpg';
$bizlight_customizer_defaults['bizlight-home-featured-button-text'] = __('LEARN MORE', 'bizlight');
$bizlight_customizer_defaults['bizlight-home-featured-button-url'] = esc_url( home_url( '/about-us' ) );
$bizlight_customizer_defaults['bizlight-home-featured-enable'] = 1;

$bizlight_sections['bizlight-home-featured'] =
    array(
        'priority'       => 170,
        'title'          => __( 'Home/Front Featured Section', 'bizlight' ),
    );

$bizlight_settings_controls['bizlight-home-featured-title'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-home-featured-title'],
        ),
        'control' => array(
            'label'                 =>  __( 'Home featured section title', 'bizlight' ),
            'section'               => 'bizlight-home-featured',
            'type'                  => 'text',
            'priority'              => 10,
        )
    );

$bizlight_settings_controls['bizlight-home-featured-bg'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-home-featured-bg'],
        ),
        'control' => array(
            'label'                 =>  __( 'Home featured section background image', 'bizlight' ),
            'section'               => 'bizlight-home-featured',
            'type'                  => 'image',
            'priority'              => 20,
        )
    );

$bizlight_settings_controls['bizlight-home-featured-button-text'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-home-featured-button-text'],
        ),
        'control' => array(
            'label'                 =>  __( 'Home featured button text', 'bizlight' ),
            'section'               => 'bizlight-home-featured',
            'type'                  => 'text',
            'priority'              => 30,
        )
    );

$bizlight_settings_controls['bizlight-home-featured-button-url'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-home-featured-button-url'],
        ),
        'control' => array(
            'label'                 =>  __( 'Home featured button url', 'bizlight' ),
            'section'               => 'bizlight-home-featured',
            'type'                  => 'text',
            'priority'              => 40,
        )
    );

$bizlight_settings_controls['bizlight-home-featured-enable'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-home-featured-enable'],
        ),
        'control' => array(
            'label'                 =>  __( 'Home featured button url', 'bizlight' ),
            'section'               => 'bizlight-home-featured',
            'type'                  => 'checkbox',
            'priority'              => 50,
        )
    );