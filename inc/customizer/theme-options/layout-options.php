<?php
global $bizlight_sections;
global $bizlight_settings_controls;
global $bizlight_repeated_settings_controls;
global $bizlight_customizer_defaults;

/*defaults values*/
$bizlight_customizer_defaults['bizlight-default-banner-image'] = get_template_directory_uri().'/assets/img/inner-banner.png';
$bizlight_customizer_defaults['bizlight-default-layout'] = 'right-sidebar';
$bizlight_customizer_defaults['bizlight-archive-layout'] = 'thumbnail-and-excerpt';
$bizlight_customizer_defaults['bizlight-archive-image-align'] = 'full';
$bizlight_customizer_defaults['bizlight-single-post-image-align'] = 'full';


$bizlight_sections['bizlight-layout-options'] =
    array(
        'priority'       => 20,
        'title'          => __( 'Layout Options', 'bizlight' ),
        'panel'          => 'bizlight-theme-options',
    );

/*layout-options option responsive lodader start*/
/*creating setting control for bizlight-layout-options start*/
$bizlight_settings_controls['bizlight-default-banner-image'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-default-banner-image'],
        ),
        'control' => array(
            'label'                 =>  __( 'Default banner image', 'bizlight' ),
            'section'               => 'bizlight-layout-options',
            'type'                  => 'image',
            'priority'              => 10,
            'description'           => '',
            'active_callback'       => ''
        )
    );

$bizlight_settings_controls['bizlight-default-layout'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-default-layout'],
        ),
        'control' => array(
            'label'                 =>  __( 'Default Layout', 'bizlight' ),
            'section'               => 'bizlight-layout-options',
            'type'                  => 'select',
            'choices'               => array(
                'right-sidebar' => __( 'Content - Primary Sidebar', 'bizlight' ),
                'left-sidebar' => __( 'Secondary Sidebar - Content', 'bizlight' ),
                'both-sidebar' => __( 'Three Columns ( Both Sidebar )', 'bizlight' ),
                'no-sidebar' => __( 'No Sidebar', 'bizlight' )
            ),
            'priority'              => 20,
            'description'           => '',
            'active_callback'       => ''
        )
    );

$bizlight_settings_controls['bizlight-archive-layout'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-archive-layout'],
        ),
        'control' => array(
            'label'                 =>  __( 'Archive Layout', 'bizlight' ),
            'section'               => 'bizlight-layout-options',
            'type'                  => 'select',
            'choices'               => array(
                'excerpt-only' => __( 'Excerpt Only', 'bizlight' ),
                'thumbnail-and-excerpt' => __( 'Thumbnail and Excerpt', 'bizlight' ),
                'full-post' => __( 'Full Post', 'bizlight' ),
                'thumbnail-and-full-post' => __( 'Thumbnail and Full Post', 'bizlight' ),
            ),
            'priority'              => 30,
        )
    );

$bizlight_settings_controls['bizlight-archive-image-align'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-archive-image-align'],
        ),
        'control' => array(
            'label'                 =>  __( 'Archive Image Alignment', 'bizlight' ),
            'section'               => 'bizlight-layout-options',
            'type'                  => 'select',
            'choices'               => array(
                'full' => __( 'Full', 'bizlight' ),
                'right' => __( 'Right', 'bizlight' ),
                'left' => __( 'Left', 'bizlight' )
            ),
            'priority'              => 40,
            'description'              => __('This option only work if you have selected "Thumbnail and Excerpt" or "Thumbnail and Full Post" in Archive Layout options','bizlight'),
        )
    );

$bizlight_settings_controls['bizlight-single-post-image-align'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-single-post-image-align'],
        ),
        'control' => array(
            'label'                 =>  __( 'Alignment of Image in Single Post/Page', 'bizlight' ),
            'section'               => 'bizlight-layout-options',
            'type'                  => 'select',
            'choices'               => array(
                'full' => __( 'Full', 'bizlight' ),
                'right' => __( 'Right', 'bizlight' ),
                'left' => __( 'Left', 'bizlight' ),
                'no-image' => __( 'No image', 'bizlight' )
            ),
            'priority'              => 40,
            'description'              => __('This option only work if you do not have selected "No image" in Image in Single Post/Page','bizlight'),
        )
    );