<?php
global $bizlight_panels;
/*creating panel for fonts-setting*/
$bizlight_panels['bizlight-featured-slider'] =
    array(
        'title'          => __( 'Featured slider', 'bizlight' ),
        'priority'       => 150
    );
/*enable slider options */
$bizlight_customizer_enable_slider_setting_file_path = bizlight_file_directory('inc/customizer/featured-slider/enable-slider.php');
require $bizlight_customizer_enable_slider_setting_file_path;

/*slider selection options */
$bizlight_customizer_slider_selection_setting_file_path = bizlight_file_directory('inc/customizer/featured-slider/slider-selection.php');
require $bizlight_customizer_slider_selection_setting_file_path;

/*slider number options */
$bizlight_customizer_slider_number_setting_file_path = bizlight_file_directory('inc/customizer/featured-slider/slider-number.php');
require $bizlight_customizer_slider_number_setting_file_path;

/*slider selection from page options */
$bizlight_customizer_slider_from_page_file_path = bizlight_file_directory('inc/customizer/featured-slider/from-page.php');
require $bizlight_customizer_slider_from_page_file_path;

/*slider selection from post options */
$bizlight_customizer_slider_from_post_file_path = bizlight_file_directory('inc/customizer/featured-slider/from-post.php');
require $bizlight_customizer_slider_from_post_file_path;

/*slider selection from category options */
$bizlight_customizer_slider_from_category_file_path = bizlight_file_directory('inc/customizer/featured-slider/from-category.php');
require $bizlight_customizer_slider_from_category_file_path;

/*slider selection from custom options */
$bizlight_customizer_slider_from_custom_file_path = bizlight_file_directory('inc/customizer/featured-slider/from-custom.php');
require $bizlight_customizer_slider_from_custom_file_path;

/*slider selection from custom options */
$bizlight_customizer_slider_options_file_path = bizlight_file_directory('inc/customizer/featured-slider/slider-options.php');
require $bizlight_customizer_slider_options_file_path;