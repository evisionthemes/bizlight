<?php

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function bizlight_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'bizlight' ),
        'id'            => 'sidebar-1',
        'description'   => '',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h1 class="widget-title">',
        'after_title'   => '</h1>',
    ) );
    $bizlight_footer_widgets_number = bizlight_get_all_options(1)['bizlight-footer-sidebar-number'];

    if( $bizlight_footer_widgets_number > 0 ){
        register_sidebar(array(
            'name' => __('Footer Column One', 'bizlight'),
            'id' => 'footer-col-one',
            'description' => 'Displays items on footer section.',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title'  => '<h1 class="widget-title">',
            'after_title'   => '</h1>',
        ));
        if( $bizlight_footer_widgets_number > 1 ){
            register_sidebar(array(
                'name' => __('Footer Column Two', 'bizlight'),
                'id' => 'footer-col-two',
                'description' => 'Displays items on footer section.',
                'before_widget' => '<aside id="%1$s" class="widget %2$s">',
                'after_widget' => '</aside>',
                'before_title'  => '<h1 class="widget-title">',
                'after_title'   => '</h1>',
            ));
        }
        if( $bizlight_footer_widgets_number > 2 ){
            register_sidebar(array(
                'name' => __('Footer Column Three', 'bizlight'),
                'id' => 'footer-col-three',
                'description' => 'Displays items on footer section.',
                'before_widget' => '<aside id="%1$s" class="widget %2$s">',
                'after_widget' => '</aside>',
                'before_title'  => '<h1 class="widget-title">',
                'after_title'   => '</h1>',
            ));
        }
        if( $bizlight_footer_widgets_number > 3 ){
            register_sidebar(array(
                'name' => __('Footer Column Four', 'bizlight'),
                'id' => 'footer-col-four',
                'description' => 'Displays items on footer section.',
                'before_widget' => '<aside id="%1$s" class="widget %2$s">',
                'after_widget' => '</aside>',
                'before_title'  => '<h1 class="widget-title">',
                'after_title'   => '</h1>',
            ));
        }
    }
}
add_action( 'widgets_init', 'bizlight_widgets_init' );