<?php
/**
 * evision themes init file
 *
 * @package eVision themes
 * @subpackage eVision Corporate
 * @since eVision Corporate 1.0.0
 */

/**
 * Customizer additions.
 */
$bizlight_customizer_file_path = bizlight_file_directory('inc/customizer/customizer.php');
require $bizlight_customizer_file_path;

/**
 * Layout additions.
 */
$bizlight_layout_meta_file_path = bizlight_file_directory('inc/post-meta/layout-meta.php');
require $bizlight_layout_meta_file_path;

/**
 * TGM-Plugin-Activation.
 */
$bizlight_tgm_plugin_file_path = bizlight_file_directory('inc/frameworks/TGM-Plugin-Activation/class-tgm-plugin-activation.php');
require $bizlight_tgm_plugin_file_path;

/**
 * Include Functions
 */
$bizlight_breadcrumb_file_path = bizlight_file_directory('inc/function/breadcrumb.php');
require $bizlight_breadcrumb_file_path;

$bizlight_words_count_file_path = bizlight_file_directory('inc/function/words-count.php');
require $bizlight_words_count_file_path;


$bizlight_front_disable_file_path = bizlight_file_directory('inc/function/feature-image-align.php');
require $bizlight_front_disable_file_path;

/**
 * Include Hooks
 */
$bizlight_hooks_excerpt_path = bizlight_file_directory('inc/hooks/excerpt.php');
require $bizlight_hooks_excerpt_path;

$bizlight_hooks_pre_get_posts_path = bizlight_file_directory('inc/hooks/pre-get-posts.php');
require $bizlight_hooks_pre_get_posts_path;

$bizlight_hooks_init_path = bizlight_file_directory('inc/hooks/init.php');
require $bizlight_hooks_init_path;

$bizlight_hooks_tgmpa_file_path = bizlight_file_directory('inc/hooks/tgmpa.php');
require $bizlight_hooks_tgmpa_file_path;

$bizlight_hooks_wp_head_file_path = bizlight_file_directory('inc/hooks/wp-head.php');
require $bizlight_hooks_wp_head_file_path;

$bizlight_hooks_header_file_path = bizlight_file_directory('inc/hooks/header.php');
require $bizlight_hooks_header_file_path;

$bizlight_hooks_footer_file_path = bizlight_file_directory('inc/hooks/footer.php');
require $bizlight_hooks_footer_file_path;

$bizlight_hooks_posts_navigation_file_path = bizlight_file_directory('inc/hooks/posts-navigation.php');
require $bizlight_hooks_posts_navigation_file_path;

$bizlight_hooks_sidebar_file_path = bizlight_file_directory('inc/hooks/sidebar.php');
require $bizlight_hooks_sidebar_file_path;

$bizlight_hooks_front_page_file_path = bizlight_file_directory('inc/hooks/featured-slider/featured-main-hook.php');
require $bizlight_hooks_front_page_file_path;

$bizlight_hooks_homepage_service_file_path = bizlight_file_directory('inc/hooks/homepage-service.php');
require $bizlight_hooks_homepage_service_file_path;

$bizlight_hooks_homepage_about_file_path = bizlight_file_directory('inc/hooks/homepage-about.php');
require $bizlight_hooks_homepage_about_file_path;

$bizlight_hooks_homepage_featured_file_path = bizlight_file_directory('inc/hooks/homepage-featured.php');
require $bizlight_hooks_homepage_featured_file_path;

$bizlight_hooks_homepage_testimonial_file_path = bizlight_file_directory('inc/hooks/homepage-testimonial.php');
require $bizlight_hooks_homepage_testimonial_file_path;
/**
 * Include sidebar widgets
 */
$bizlight_sidebar_widget_init_path = bizlight_file_directory('inc/sidebar-widget-init.php');
require $bizlight_sidebar_widget_init_path;