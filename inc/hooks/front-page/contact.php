<?php

if ( ! function_exists( 'bizlight_front_contact' ) ) :
    /**
     * contact
     *
     * @since eVision Corporate 1.0.0
     *
     * @param null
     * @return null
     *
     */
    function bizlight_front_contact() {

        global $bizlight_customizer_all_values;

        if( isset( $bizlight_customizer_all_values['bizlight-contact-enable']) && 1 == $bizlight_customizer_all_values['bizlight-contact-enable'] && isset($bizlight_customizer_all_values['bizlight-contact-cf7'])) { ?>
            <!-- *****************************************
                 Contact Form section start
            ****************************************** -->
            <section class="wrapper block-contact block-section block-bg-image" id="bizlight-contact">
                <div class="container">
                    <div class="block-title">
                        <?php
                        if(isset($bizlight_customizer_all_values['bizlight-contact-main-title']) && !empty($bizlight_customizer_all_values['bizlight-contact-main-title']) ){
                            echo '<h2>'.wp_kses_post( $bizlight_customizer_all_values['bizlight-contact-main-title'] ).'</h2>';
                            echo '<div class="block-title-divider"><span><i class="fa fa-circle"></i></span></div>';
                        }
                        ?>
                    </div>
                    <?php
                    if(function_exists( 'wpcf7' ) && isset( $bizlight_customizer_all_values['bizlight-contact-cf7'] )){
                        ?>
                        <div class="row form-container">
                            <div class="col-md-1"></div>
                            <div class="col-md-10">
                                <div class="form-inner row">
                                    <?php
                                    if(function_exists( 'wpcf7' ) && isset( $bizlight_customizer_all_values['bizlight-contact-cf7'] )){
                                        echo do_shortcode($bizlight_customizer_all_values['bizlight-contact-cf7']);
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </section>
            <!-- *****************************************
                     Contact Form section ends
            ****************************************** -->
        <?php
        }
    }
endif;
add_action( 'bizlight_action_front_contact', 'bizlight_front_contact', 10 );
