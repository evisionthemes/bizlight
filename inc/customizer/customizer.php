<?php
/**
 * evision themes Theme Customizer
 *
 * @package eVision themes
 * @subpackage eVision Corporate
 * @since eVision Corporate 1.0.0
 */
add_filter('coder_customizer_framework_url', 'bizlight_customizer_framework_url');

if( ! function_exists( 'bizlight_customizer_framework_url' ) ):

    function bizlight_customizer_framework_url(){
        return trailingslashit( get_template_directory_uri() ) . 'inc/frameworks/coder-customizer-framework/';
    }

endif;

add_filter('coder_customizer_framework_path', 'bizlight_customizer_framework_path');

if( ! function_exists( 'bizlight_customizer_framework_path' ) ):
    function bizlight_customizer_framework_path(){
        return trailingslashit( get_template_directory() ) . 'inc/frameworks/coder-customizer-framework/';
    }
endif;

/*define constant for coder-customizer-constant*/
if(!defined('CODER_CUSTOMIZER_NAME')){
    define('CODER_CUSTOMIZER_NAME','bizlight-options');
}


/**
 * reset options
 * @param  array $reset_options
 * @return void
 *
 * @since bizlight 1.0
 */
if ( ! function_exists( 'bizlight_reset_options' ) ) :
    function bizlight_reset_options( $reset_options ) {
        set_theme_mod( CODER_CUSTOMIZER_NAME, $reset_options );
    }
endif;
/**
 * Customizer framework added.
 */
$bizlight_coder_customizer_file_path = bizlight_file_directory('inc/frameworks/coder-customizer-framework/coder-customizer-framework.php');
require $bizlight_coder_customizer_file_path;

global $bizlight_panels;
global $bizlight_sections;
global $bizlight_settings_controls;
global $bizlight_repeated_settings_controls;
global $bizlight_customizer_defaults;

/******************************************
Modify Site Identity sections
 *******************************************/
$bizlight_customizer_site_identity_file_path = bizlight_file_directory('inc/customizer/site-identity/site-identity.php');
require $bizlight_customizer_site_identity_file_path;

/******************************************
Modify Site Color sections
 *******************************************/
$bizlight_customizer_options_general_color_file_path = bizlight_file_directory('inc/customizer/colors/general.php');
require $bizlight_customizer_options_general_color_file_path;

/******************************************
Added font setting options
 *******************************************/
$bizlight_customizer_options_font_family_file_path = bizlight_file_directory('inc/customizer/font-setting/font-family.php');
require $bizlight_customizer_options_font_family_file_path;

/******************************************
Added menu setting options
 *******************************************/
$bizlight_customizer_options_menu_setting_file_path = bizlight_file_directory('inc/customizer/menu/menu-setting.php');
require $bizlight_customizer_options_menu_setting_file_path;

/******************************************
Featured Slider options
 *******************************************/
$bizlight_customizer_featured_slider_setting_file_path = bizlight_file_directory('inc/customizer/featured-slider/slider-panel.php');
require $bizlight_customizer_featured_slider_setting_file_path;

/******************************************
Home page options
 *******************************************/
$bizlight_customizer_home_options_setting_file_path = bizlight_file_directory('inc/customizer/home-options/home-options.php');
require $bizlight_customizer_home_options_setting_file_path;

/******************************************
Theme options panel
 *******************************************/
$bizlight_customizer_theme_options_setting_file_path = bizlight_file_directory('inc/customizer/theme-options/option-panel.php');
require $bizlight_customizer_theme_options_setting_file_path;

/******************************************
Removing section setting control
 *******************************************/
$bizlight_remove_sections =
    array(
        'header_image'
    );
$bizlight_remove_settings_controls =
    array(
        'header_textcolor'
    );
$bizlight_customizer_args = array(
    'panels'            => $bizlight_panels, /*always use key panels */
    'sections'          => $bizlight_sections,/*always use key sections*/
    'settings_controls' => $bizlight_settings_controls,/*always use key settings_controls*/
    'repeated_settings_controls' => $bizlight_repeated_settings_controls,/*always use key sections*/
    'remove_sections'   => $bizlight_remove_sections,/*always use key remove_sections*/
    'remove_settings_controls' => $bizlight_remove_settings_controls/*always use key remove_settings_controls*/
);

/*registering panel section setting and control start*/
function bizlight_add_panels_sections_settings() {
    global $bizlight_customizer_args;
    return $bizlight_customizer_args;
}
add_filter( 'coder_panels_sections_settings', 'bizlight_add_panels_sections_settings' );
/*registering panel section setting and control end*/


/**
 * get all saved options
 * @param  null
 * @return array saved options
 *
 * @since bizlight 1.0
 */
if ( ! function_exists( 'bizlight_get_all_options' ) ) :
    function bizlight_get_all_options( $merge_default = 0 ) {
        $bizlight_customizer_saved_values = coder_get_customizer_all_values( CODER_CUSTOMIZER_NAME );
        if( 1 == $merge_default ){
            global $bizlight_customizer_defaults;
            if(is_array( $bizlight_customizer_saved_values )){
                $bizlight_customizer_saved_values = array_merge($bizlight_customizer_defaults, $bizlight_customizer_saved_values );
            }
            else{
                $bizlight_customizer_saved_values = $bizlight_customizer_defaults;
            }
        }
        return $bizlight_customizer_saved_values;
    }
endif;
