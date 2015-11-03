<?php
add_action( 'wp_head', 'bizlight_wp_head' );

if( ! function_exists( 'bizlight_wp_head' ) ) :

    /**
     * bizlight_wp_head
     *
     * @since  Evision Corporate 1.0.0
     */
    function bizlight_wp_head(){
        global $bizlight_customizer_all_values;
        ?>
        <style type="text/css">
            <?php if(isset($bizlight_customizer_all_values['bizlight-service-background']) && !empty($bizlight_customizer_all_values['bizlight-service-background'])) { ?>
            .block-service{
                background: url(<?php echo $bizlight_customizer_all_values['bizlight-service-background']?>) no-repeat center center;
            }
            <?php
            }
            ?>
            <?php if(isset($bizlight_customizer_all_values['bizlight-testimonial-background']) && !empty($bizlight_customizer_all_values['bizlight-testimonial-background'])) { ?>
            .block-testimonial{
                background: url(<?php echo $bizlight_customizer_all_values['bizlight-testimonial-background']?>) no-repeat center center;
            }
            <?php
            }
            ?>
            <?php if(isset($bizlight_customizer_all_values['bizlight-team-background']) && !empty($bizlight_customizer_all_values['bizlight-team-background'])) { ?>
            .block-team{
                background:url(<?php echo $bizlight_customizer_all_values['bizlight-team-background']?>) no-repeat center center;
            }
            <?php
            }
            ?>
            <?php if(isset($bizlight_customizer_all_values['bizlight-contact-background']) && !empty($bizlight_customizer_all_values['bizlight-contact-background'])) { ?>
            .block-contact{
                background:url(<?php echo $bizlight_customizer_all_values['bizlight-contact-background']?>) no-repeat center center;
            }
            <?php
            }
            $bizlight_custom_css = $bizlight_customizer_all_values['bizlight-advanced-custom-css'];
            $bizlight_custom_css_output = '';
            if ( ! empty( $bizlight_custom_css ) ) {
            $bizlight_custom_css_output .= esc_textarea( $bizlight_custom_css ) ;
            }
            echo $bizlight_custom_css_output;
            ?>
        </style>
    <?php
    }
endif;