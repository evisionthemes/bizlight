<?php
/**
 * require bizlight_action_front_slider
 */
$bizlight_slider_action_file_path = bizlight_file_directory('inc/hooks/front-page/slider.php');
require $bizlight_slider_action_file_path;

/**
 * require bizlight_action_front_about
 */
$bizlight_about_action_file_path = bizlight_file_directory('inc/hooks/front-page/about.php');
require $bizlight_about_action_file_path;

/**
 * require bizlight_action_front_service
 */
$bizlight_service_action_file_path = bizlight_file_directory('inc/hooks/front-page/service.php');
require $bizlight_service_action_file_path;

/**
 * require bizlight_action_front_portfolio
 */
$bizlight_portfolio_action_file_path = bizlight_file_directory('inc/hooks/front-page/portfolio.php');
require $bizlight_portfolio_action_file_path;

/**
 * require bizlight_action_front_client
 */
$bizlight_client_action_file_path = bizlight_file_directory('inc/hooks/front-page/client.php');
require $bizlight_client_action_file_path;

/**
 * require bizlight_action_front_testimonial
 */
$bizlight_testimonial_action_file_path = bizlight_file_directory('inc/hooks/front-page/testimonial.php');
require $bizlight_testimonial_action_file_path;

/**
 * require bizlight_action_front_blog
 */
$bizlight_blog_action_file_path = bizlight_file_directory('inc/hooks/front-page/blog.php');
require $bizlight_blog_action_file_path;

/**
 * require bizlight_action_front_team
 */
$bizlight_team_action_file_path = bizlight_file_directory('inc/hooks/front-page/team.php');
require $bizlight_team_action_file_path;

/**
 * require bizlight_action_front_map
 */
$bizlight_map_action_file_path = bizlight_file_directory('inc/hooks/front-page/map.php');
require $bizlight_map_action_file_path;

/**
 * require bizlight_action_front_contact
 */
$bizlight_contact_action_file_path = bizlight_file_directory('inc/hooks/front-page/contact.php');
require $bizlight_contact_action_file_path;

if ( ! function_exists( 'bizlight_front_page' ) ) :
    /**
     * Before main content
     *
     * @since eVision Corporate 1.0.0
     *
     * @param null
     * @return null
     *
     */
    function bizlight_front_page() {
        if ( 'posts' == get_option( 'show_on_front' ) ) {
            include( get_home_template() );
        }
        elseif( 1 != bizlight_if_all_disable() ) {
            include( get_page_template() );
        }
        else {
            /*making compatible for this plugin
            https://wordpress.org/plugins/homepage-control/
            */
            do_action( 'homepage' );
        }

    }
endif;
add_action( 'bizlight_action_front_page', 'bizlight_front_page', 10 );