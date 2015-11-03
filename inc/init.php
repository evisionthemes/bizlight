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
 * TGM-Plugin-Activation.
 */
$bizlight_tgm_plugin_file_path = bizlight_file_directory('inc/frameworks/TGM-Plugin-Activation/class-tgm-plugin-activation.php');
require $bizlight_tgm_plugin_file_path;

/**
 * Include Functions
 */
$bizlight_words_count_file_path = bizlight_file_directory('inc/function/words-count.php');
require $bizlight_words_count_file_path;

$bizlight_front_disable_file_path = bizlight_file_directory('inc/function/front-disable.php');
require $bizlight_front_disable_file_path;

/**
 * Include Hooks
 */
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

$bizlight_hooks_sidebar_file_path = bizlight_file_directory('inc/hooks/sidebar.php');
require $bizlight_hooks_sidebar_file_path;

$bizlight_hooks_front_page_file_path = bizlight_file_directory('inc/hooks/front-page.php');
require $bizlight_hooks_front_page_file_path;

/**
 * Include sidebar widgets
 */
$bizlight_sidebar_widget_init_path = bizlight_file_directory('inc/sidebar-widget-init.php');
require $bizlight_sidebar_widget_init_path;