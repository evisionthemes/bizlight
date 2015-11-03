<?php
/**
 * check if all sections of front page disable
 *
 * @since Evision Corporate 1.1.0.0
 */
if ( ! function_exists( 'bizlight_if_all_disable' ) ) :
    function bizlight_if_all_disable() {
        global $bizlight_customizer_all_values;
        if(
            ( !isset( $bizlight_customizer_all_values['bizlight-about-enable']) || ( isset( $bizlight_customizer_all_values['bizlight-about-enable']) &&  1 != $bizlight_customizer_all_values['bizlight-about-enable'] ) ) &&
            ( !isset( $bizlight_customizer_all_values['bizlight-blog-enable']) || ( isset( $bizlight_customizer_all_values['bizlight-blog-enable']) &&  1 != $bizlight_customizer_all_values['bizlight-blog-enable'] ) ) &&
            ( !isset( $bizlight_customizer_all_values['bizlight-client-enable']) || ( isset( $bizlight_customizer_all_values['bizlight-client-enable']) &&  1 != $bizlight_customizer_all_values['bizlight-client-enable'] ) ) &&
            ( !isset( $bizlight_customizer_all_values['bizlight-contact-enable']) || ( isset( $bizlight_customizer_all_values['bizlight-contact-enable']) &&  1 != $bizlight_customizer_all_values['bizlight-contact-enable'] ) ) &&
            ( !isset( $bizlight_customizer_all_values['bizlight-map-enable']) || ( isset( $bizlight_customizer_all_values['bizlight-map-enable']) &&  1 != $bizlight_customizer_all_values['bizlight-map-enable'] ) ) &&
            ( !isset( $bizlight_customizer_all_values['bizlight-client-enable']) || ( isset( $bizlight_customizer_all_values['bizlight-client-enable']) &&  1 != $bizlight_customizer_all_values['bizlight-client-enable'] ) ) &&
            ( !isset( $bizlight_customizer_all_values['bizlight-service-enable']) || ( isset( $bizlight_customizer_all_values['bizlight-service-enable']) &&  1 != $bizlight_customizer_all_values['bizlight-service-enable'] ) ) &&
            ( !isset( $bizlight_customizer_all_values['bizlight-slider-enable']) || ( isset( $bizlight_customizer_all_values['bizlight-slider-enable']) &&  1 != $bizlight_customizer_all_values['bizlight-slider-enable'] ) ) &&
            ( !isset( $bizlight_customizer_all_values['bizlight-team-enable']) || ( isset( $bizlight_customizer_all_values['bizlight-team-enable']) &&  1 != $bizlight_customizer_all_values['bizlight-team-enable'] ) ) &&
            ( !isset( $bizlight_customizer_all_values['bizlight-testimonial-enable']) || ( isset( $bizlight_customizer_all_values['bizlight-testimonial-enable']) &&  1 != $bizlight_customizer_all_values['bizlight-testimonial-enable'] ) )
        )
        {
            return 0;
        }
        else{
            return 1;
        }
    }
endif;