<?php
global $bizlight_panels;
global $bizlight_sections;
global $bizlight_settings_controls;
global $bizlight_repeated_settings_controls;
global $bizlight_customizer_defaults;

/*defaults values*/
$bizlight_customizer_defaults['bizlight-fs-custom-image'] = '';
$bizlight_customizer_defaults['bizlight-fs-custom-title'] = '';
$bizlight_customizer_defaults['bizlight-fs-custom-content'] = '';
$bizlight_customizer_defaults['bizlight-fs-custom-link'] = '';

/*Custom selection*/
$bizlight_sections['bizlight-fs-custom'] =
    array(
        'priority'       => 70,
        'title'          => __( 'Select Slider from Custom', 'bizlight' ),
        'description'    => __( 'This option only work when you have selected "Custom" in "Slider selection Options".', 'bizlight' ),
        'panel'          => 'bizlight-featured-slider',
    );

/*creating setting control for bizlight-fs-Custom start*/
$bizlight_repeated_settings_controls['bizlight-fs-custom'] =
    array(
        'repeated' => 12,
        'bizlight-fs-custom-image' => array(
            'setting' =>     array(
                'default'              => $bizlight_customizer_defaults['bizlight-fs-custom-image'],
            ),
            'control' => array(
                'label'                 =>  __( 'Image %s', 'bizlight' ),
                'section'               => 'bizlight-fs-custom',
                'type'                  => 'image',
                'priority'              => 5,
                'description'           => ''
            )
        ),
        'bizlight-fs-custom-title' => array(
            'setting' =>     array(
                'default'              => $bizlight_customizer_defaults['bizlight-fs-custom-title'],
            ),
            'control' => array(
                'label'                 =>  __( 'Title %s', 'bizlight' ),
                'section'               => 'bizlight-fs-custom',
                'type'                  => 'text',
                'priority'              => 10,
                'description'           => ''
            )
        ),
        'bizlight-fs-custom-content' => array(
            'setting' =>     array(
                'default'              => $bizlight_customizer_defaults['bizlight-fs-custom-content'],
            ),
            'control' => array(
                'label'                 =>  __( 'Content %s', 'bizlight' ),
                'section'               => 'bizlight-fs-custom',
                'type'                  => 'textarea_html',
                'priority'              => 20,
                'description'           => ''
            )
        ),
        'bizlight-fs-custom-link' => array(
            'setting' =>     array(
                'default'              => $bizlight_customizer_defaults['bizlight-fs-custom-link'],
            ),
            'control' => array(
                'label'                 =>  __( 'Link %s', 'bizlight' ),
                'section'               => 'bizlight-fs-custom',
                'type'                  => 'url',
                'priority'              => 30,
                'description'           => ''
            )
        ),
        'bizlight-fs-custom-divider' => array(
            'control' => array(
                'section'               => 'bizlight-fs-custom',
                'type'                  => 'message',
                'priority'              => 40,
                'description'           => '<br /><hr />'
            )
        )
    );