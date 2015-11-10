<?php
global $bizlight_panels;
/*creating panel for fonts-setting*/
$bizlight_panels['bizlight-theme-options'] =
    array(
        'title'          => __( 'Theme Options', 'bizlight' ),
        'priority'       => 200
    );

/*layout options */
$bizlight_customizer_layout_options_setting_file_path = bizlight_file_directory('inc/customizer/theme-options/layout-options.php');
require $bizlight_customizer_layout_options_setting_file_path;

/*pagination options */
$bizlight_customizer_pagination_options_setting_file_path = bizlight_file_directory('inc/customizer/theme-options/pagination.php');
require $bizlight_customizer_pagination_options_setting_file_path;

/*blog archive options */
$bizlight_customizer_blog_archive_options_setting_file_path = bizlight_file_directory('inc/customizer/theme-options/blog-archive.php');
require $bizlight_customizer_blog_archive_options_setting_file_path;

/*breadcrumb options */
$bizlight_customizer_breadcrumb_options_setting_file_path = bizlight_file_directory('inc/customizer/theme-options/breadcrumb.php');
require $bizlight_customizer_breadcrumb_options_setting_file_path;


/*header options */
$bizlight_customizer_footer_setting_file_path = bizlight_file_directory('inc/customizer/theme-options/header.php');
require $bizlight_customizer_footer_setting_file_path;

/*footer options */
$bizlight_customizer_footer_setting_file_path = bizlight_file_directory('inc/customizer/theme-options/footer.php');
require $bizlight_customizer_footer_setting_file_path;

/*custom css options */
$bizlight_customizer_custom_css_setting_file_path = bizlight_file_directory('inc/customizer/theme-options/custom-css.php');
require $bizlight_customizer_custom_css_setting_file_path;