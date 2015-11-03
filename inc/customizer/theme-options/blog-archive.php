<?php
global $bizlight_sections;
global $bizlight_settings_controls;
global $bizlight_repeated_settings_controls;
global $bizlight_customizer_defaults;

/*defaults values*/
$bizlight_customizer_defaults['bizlight-excerpt-lenght'] = '50';
$bizlight_customizer_defaults['bizlight-exclude-categories'] = '';

$bizlight_sections['bizlight-blog-archive-options'] =
    array(
        'priority'       => 40,
        'title'          => __( 'Blog/Archive options', 'bizlight' ),
        'panel'          => 'bizlight-theme-options',
    );

$bizlight_settings_controls['bizlight-excerpt-lenght'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-excerpt-lenght'],
        ),
        'control' => array(
            'label'                 =>  __( 'Excerpt Length (in words)', 'bizlight' ),
            'section'               => 'bizlight-blog-archive-options',
            'type'                  => 'number',
            'priority'              => 10,
        )
    );

$bizlight_settings_controls['bizlight-exclude-categories'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-exclude-categories'],
        ),
        'control' => array(
            'label'                 =>  __( 'Exclude Categories in Blog', 'bizlight' ),
            'description'           =>  __( 'Please enter categories ids in comma separated eg: 5,7. For including all categories left blank', 'bizlight' ),
            'section'               => 'bizlight-blog-archive-options',
            'type'                  => 'text',
            'priority'              => 20,
        )
    );

