<?php
global $bizlight_panels;
global $bizlight_sections;
global $bizlight_settings_controls;
global $bizlight_repeated_settings_controls;
global $bizlight_customizer_defaults;

/*defaults values*/
$bizlight_customizer_defaults['bizlight-home-testimonial-page-icon'] = 'fa-desktop';
$bizlight_customizer_defaults['bizlight-home-testimonial-pages'] = 0;

/*page selection*/
$bizlight_sections['bizlight-home-testimonial-pages'] =
    array(
        'priority'       => 40,
        'title'          => __( 'Select Testimonial from Page', 'bizlight' ),
        'description'    => __( 'This option only work when you have selected "Page" in "Testimonial selection Options".', 'bizlight' ),
        'panel'          => 'bizlight-home-testimonial',
    );

/*creating setting control for bizlight-home-testimonial-page start*/
$bizlight_repeated_settings_controls['bizlight-home-testimonial-pages'] =
    array(
        'repeated' => 12,
        'bizlight-home-testimonial-page-icon' => array(
            'setting' =>     array(
                'default'              => $bizlight_customizer_defaults['bizlight-home-testimonial-page-icon'],
            ),
            'control' => array(
                'label'                 =>  __( 'Icon %s', 'bizlight' ),
                'section'               => 'bizlight-home-testimonial-pages',
                'type'                  => 'text',
                'priority'              => 5,
                'description'           => sprintf( __( 'Use font awesome icon: Eg: %s. %sSee more here%s', 'bizlight' ), 'fa-desktop','<a href="'.esc_url('http://fontawesome.io/cheatsheet/').'" target="_blank">','</a>' ),
            )
        ),
        'bizlight-home-testimonial-pages-pages' => array(
            'setting' =>     array(
                'default'              => $bizlight_customizer_defaults['bizlight-home-testimonial-pages'],
            ),
            'control' => array(
                'label'                 =>  __( 'Select page for testimonial %s', 'bizlight' ),
                'section'               => 'bizlight-home-testimonial-pages',
                'type'                  => 'dropdown-pages',
                'priority'              => 10,
                'description'           => ''
            )
        ),
        'bizlight-home-testimonial-pages-divider' => array(
            'control' => array(
                'section'               => 'bizlight-home-testimonial-pages',
                'type'                  => 'message',
                'priority'              => 20,
                'description'           => '<br /><hr />'
            )
        )
    );