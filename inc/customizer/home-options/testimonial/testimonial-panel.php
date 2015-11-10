<?php
global $bizlight_panels;
/*creating panel for fonts-setting*/
$bizlight_panels['bizlight-home-testimonial'] =
    array(
        'title'          => __( 'Home/Front Testimonial Section', 'bizlight' ),
        'priority'       => 180
    );
/*enable testimonial options */
$bizlight_customizer_enable_testimonial_setting_file_path = bizlight_file_directory('inc/customizer/home-options/testimonial/enable-testimonial.php');
require $bizlight_customizer_enable_testimonial_setting_file_path;

/*testimonial selection options */
$bizlight_customizer_testimonial_selection_setting_file_path = bizlight_file_directory('inc/customizer/home-options/testimonial/testimonial-selection.php');
require $bizlight_customizer_testimonial_selection_setting_file_path;

/*testimonial number options */
$bizlight_customizer_testimonial_number_setting_file_path = bizlight_file_directory('inc/customizer/home-options/testimonial/testimonial-number.php');
require $bizlight_customizer_testimonial_number_setting_file_path;

/*testimonial selection from page options */
$bizlight_customizer_testimonial_from_page_file_path = bizlight_file_directory('inc/customizer/home-options/testimonial/from-page.php');
require $bizlight_customizer_testimonial_from_page_file_path;

/*testimonial selection from post options */
$bizlight_customizer_testimonial_from_post_file_path = bizlight_file_directory('inc/customizer/home-options/testimonial/from-post.php');
require $bizlight_customizer_testimonial_from_post_file_path;

/*testimonial selection from category options */
$bizlight_customizer_testimonial_from_category_file_path = bizlight_file_directory('inc/customizer/home-options/testimonial/from-category.php');
require $bizlight_customizer_testimonial_from_category_file_path;

/*testimonial selection from custom options */
$bizlight_customizer_testimonial_from_custom_file_path = bizlight_file_directory('inc/customizer/home-options/testimonial/from-custom.php');
require $bizlight_customizer_testimonial_from_custom_file_path;

/*testimonial options */
$bizlight_customizer_testimonial_options_file_path = bizlight_file_directory('inc/customizer/home-options/testimonial/testimonial-options.php');
require $bizlight_customizer_testimonial_options_file_path;
