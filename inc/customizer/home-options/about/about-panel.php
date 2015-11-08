<?php
global $bizlight_panels;
/*creating panel for fonts-setting*/
$bizlight_panels['bizlight-home-about'] =
    array(
        'title'          => __( 'Home/Front About Section', 'bizlight' ),
        'priority'       => 160
    );
/*enable about options */
$bizlight_customizer_enable_about_setting_file_path = bizlight_file_directory('inc/customizer/home-options/about/enable-about.php');
require $bizlight_customizer_enable_about_setting_file_path;

/*about selection options */
$bizlight_customizer_about_selection_setting_file_path = bizlight_file_directory('inc/customizer/home-options/about/about-selection.php');
require $bizlight_customizer_about_selection_setting_file_path;

/*about number options */
$bizlight_customizer_about_number_setting_file_path = bizlight_file_directory('inc/customizer/home-options/about/about-number.php');
require $bizlight_customizer_about_number_setting_file_path;

/*about selection from page options */
$bizlight_customizer_about_from_page_file_path = bizlight_file_directory('inc/customizer/home-options/about/from-page.php');
require $bizlight_customizer_about_from_page_file_path;

/*about selection from post options */
$bizlight_customizer_about_from_post_file_path = bizlight_file_directory('inc/customizer/home-options/about/from-post.php');
require $bizlight_customizer_about_from_post_file_path;

/*about selection from category options */
$bizlight_customizer_about_from_category_file_path = bizlight_file_directory('inc/customizer/home-options/about/from-category.php');
require $bizlight_customizer_about_from_category_file_path;

/*about selection from custom options */
$bizlight_customizer_about_from_custom_file_path = bizlight_file_directory('inc/customizer/home-options/about/from-custom.php');
require $bizlight_customizer_about_from_custom_file_path;

/*about selection from custom options */
$bizlight_customizer_about_options_file_path = bizlight_file_directory('inc/customizer/home-options/about/about-options.php');
require $bizlight_customizer_about_options_file_path;