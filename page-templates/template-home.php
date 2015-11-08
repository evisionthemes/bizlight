<?php

/**
 * Template Name: Home Page
 *
 * @package eVision themes
 * @subpackage Bizlight
 * @since Bizlight 1.0.0
 */
/**
 * homepage hook
 * @since Bizlight 1.0.0
 *
 * @hooked bizlight_featured_slider -  10
 * @hooked bizlight_homepage_service -  20
 * @hooked bizlight_homepage_about -  30
 * @hooked bizlight_homepage_featured -  40
 * @hooked bizlight_homepage_testimonial -  50
 */
get_header();
do_action('homepage');
get_footer();