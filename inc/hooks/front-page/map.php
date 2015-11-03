<?php
if ( ! function_exists( 'bizlight_front_map' ) ) :
    /**
     * map
     *
     * @since eVision Corporate 1.0.0
     *
     * @param null
     * @return null
     *
     */
    function bizlight_front_map() {

        global $bizlight_customizer_all_values;

        if( isset( $bizlight_customizer_all_values['bizlight-map-enable']) && 1 == $bizlight_customizer_all_values['bizlight-map-enable'] ) { ?>
            <!-- *****************************************
                 Map section start
            ****************************************** -->

            <section class="wrapper block-section block-full-section" id="bizlight-map">
                <div id="map-canvas" style="width: 100%;height: 470px"></div>
            </section>

            <!-- *****************************************
                     Map section ends
            ****************************************** -->
        <?php
        }
    }
endif;
add_action( 'bizlight_action_front_map', 'bizlight_front_map', 10 );
