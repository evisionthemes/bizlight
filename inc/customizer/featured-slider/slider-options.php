<?php
global $bizlight_panels;
global $bizlight_sections;
global $bizlight_settings_controls;
global $bizlight_repeated_settings_controls;
global $bizlight_customizer_defaults;

/*defaults values*/
$bizlight_customizer_defaults['bizlight-fs-single-words'] = 30;
$bizlight_customizer_defaults['bizlight-fs-slider-mode'] = 'horizontal';
$bizlight_customizer_defaults['bizlight-fs-slider-time'] = 2000;
$bizlight_customizer_defaults['bizlight-fs-slider-pause-time'] = 7000;
$bizlight_customizer_defaults['bizlight-fs-slider-button-text'] = __('Click to start','bizlight');
$bizlight_customizer_defaults['bizlight-fs-enable-control'] = 1;
$bizlight_customizer_defaults['bizlight-fs-enable-autoplay'] = 1;
$bizlight_customizer_defaults['bizlight-fs-enable-title'] = 1;
$bizlight_customizer_defaults['bizlight-fs-enable-caption'] = 1;
$bizlight_customizer_defaults['bizlight-fs-enable-link'] = 1;

/*fs options*/
$bizlight_sections['bizlight-fs-slider-options'] =
    array(
        'priority'       => 80,
        'title'          => __( 'Slider Options', 'bizlight' ),
        'panel'          => 'bizlight-featured-slider',
    );

$bizlight_settings_controls['bizlight-fs-single-words'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-fs-single-words']
        ),
        'control' => array(
            'label'                 =>  __( 'Single slider number of words', 'bizlight' ),
            'description'           =>  __( 'If you do not have selected from - Custom', 'bizlight' ),
            'section'               => 'bizlight-fs-slider-options',
            'type'                  => 'number',
            'priority'              => 5,
            'active_callback'       => ''
        )
    );

$bizlight_settings_controls['bizlight-fs-slider-mode'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-fs-slider-mode']
        ),
        'control' => array(
            'label'                 =>  __( 'Slider mode', 'bizlight' ),
            'section'               => 'bizlight-fs-slider-options',
            'type'                  => 'select',
            'choices'               => array(
                'horizontal' => __( 'Default', 'bizlight' ),
                'vertical' => __( 'Vertical', 'bizlight' ),
                'fade' => __( 'Fade', 'bizlight' ),
            ),
            'priority'              => 10,
            'active_callback'       => ''
        )
    );

$bizlight_settings_controls['bizlight-fs-slider-time'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-fs-slider-time']
        ),
        'control' => array(
            'label'                 =>  __( 'Transition time', 'bizlight' ),
            'section'               => 'bizlight-fs-slider-options',
            'type'                  => 'number',
            'priority'              => 20,
            'active_callback'       => ''
        )
    );

$bizlight_settings_controls['bizlight-fs-slider-pause-time'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-fs-slider-pause-time']
        ),
        'control' => array(
            'label'                 =>  __( 'Pause time', 'bizlight' ),
            'section'               => 'bizlight-fs-slider-options',
            'type'                  => 'number',
            'priority'              => 30,
            'active_callback'       => ''
        )
    );
$bizlight_settings_controls['bizlight-fs-slider-button-text'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-fs-slider-button-text']
        ),
        'control' => array(
            'label'                 =>  __( 'Slider button text', 'bizlight' ),
            'section'               => 'bizlight-fs-slider-options',
            'type'                  => 'text',
            'priority'              => 40,
            'active_callback'       => ''
        )
    );

$bizlight_settings_controls['bizlight-fs-enable-control'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-fs-enable-control']
        ),
        'control' => array(
            'label'                 =>  __( 'Enable control', 'bizlight' ),
            'section'               => 'bizlight-fs-slider-options',
            'type'                  => 'checkbox',
            'priority'              => 50,
            'active_callback'       => ''
        )
    );

$bizlight_settings_controls['bizlight-fs-enable-autoplay'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-fs-enable-autoplay']
        ),
        'control' => array(
            'label'                 =>  __( 'Enable autoplay', 'bizlight' ),
            'section'               => 'bizlight-fs-slider-options',
            'type'                  => 'checkbox',
            'priority'              => 60,
            'active_callback'       => ''
        )
    );

$bizlight_settings_controls['bizlight-fs-enable-title'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-fs-enable-title']
        ),
        'control' => array(
            'label'                 =>  __( 'Enable title', 'bizlight' ),
            'section'               => 'bizlight-fs-slider-options',
            'type'                  => 'checkbox',
            'priority'              => 70,
            'active_callback'       => ''
        )
    );

$bizlight_settings_controls['bizlight-fs-enable-caption'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-fs-enable-caption']
        ),
        'control' => array(
            'label'                 =>  __( 'Enable caption', 'bizlight' ),
            'section'               => 'bizlight-fs-slider-options',
            'type'                  => 'checkbox',
            'priority'              => 80,
            'active_callback'       => ''
        )
    );

$bizlight_settings_controls['bizlight-fs-enable-link'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-fs-enable-link']
        ),
        'control' => array(
            'label'                 =>  __( 'Enable link', 'bizlight' ),
            'section'               => 'bizlight-fs-slider-options',
            'type'                  => 'checkbox',
            'priority'              => 90,
            'active_callback'       => ''
        )
    );