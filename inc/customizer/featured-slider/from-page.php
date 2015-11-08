<?php
global $bizlight_panels;
global $bizlight_sections;
global $bizlight_settings_controls;
global $bizlight_repeated_settings_controls;
global $bizlight_customizer_defaults;

/*defaults values*/
$bizlight_customizer_defaults['bizlight-fs-pages'] = 0;

/*page selection*/
$bizlight_sections['bizlight-fs-pages'] =
    array(
        'priority'       => 40,
        'title'          => __( 'Select Slider from Page', 'bizlight' ),
        'description'    => __( 'This option only work when you have selected "Page" in "Slider selection Options".', 'bizlight' ),
        'panel'          => 'bizlight-featured-slider',
    );

/*creating setting control for bizlight-fs-page start*/
$bizlight_repeated_settings_controls['bizlight-fs-pages'] =
    array(
        'repeated' => 12,
        'bizlight-fs-pages-pages' => array(
            'setting' =>     array(
                'default'              => $bizlight_customizer_defaults['bizlight-fs-pages'],
            ),
            'control' => array(
                'label'                 =>  __( 'Select page for slide %s', 'bizlight' ),
                'section'               => 'bizlight-fs-pages',
                'type'                  => 'dropdown-pages',
                'priority'              => 10,
                'description'           => ''
            )
        ),
        'bizlight-fs-pages-divider' => array(
            'control' => array(
                'section'               => 'bizlight-fs-pages',
                'type'                  => 'message',
                'priority'              => 20,
                'description'           => '<br /><hr />'
            )
        )
    );