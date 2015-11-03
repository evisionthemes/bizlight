<?php
if ( ! function_exists( 'bizlight_front_client' ) ) :
    /**
     * client
     *
     * @since eVision Corporate 1.0.0
     *
     * @param null
     * @return null
     *
     */
    function bizlight_front_client() {

        global $bizlight_customizer_all_values;
        $bizlight_clients = coder_get_repeated_all_value('bizlight-client');

        if( isset( $bizlight_customizer_all_values['bizlight-client-enable']) && 1 == $bizlight_customizer_all_values['bizlight-client-enable'] && null != $bizlight_clients ) { ?>
            <!-- *****************************************
                 client section start
            ****************************************** -->
            <section class="wrapper block-client block-section block-solid-bg" id="bizlight-client">
                <div class="container">
                    <div class="row">
                        <div class="logos-container">
                            <ul class="row-same-height">
                                <?php foreach( $bizlight_clients as $bizlight_client ) {
                                    if( isset( $bizlight_client['bizlight-client-image'] ) && !empty( $bizlight_client['bizlight-client-image'] ) ) {
                                        ?>
                                        <li class="col-xs-12 col-sm-12 col-md-4 col-md-height">
                                            <img src="<?php echo esc_url( $bizlight_client['bizlight-client-image'] ); ?>" alt="<?php _e('client logo','bizlight');?>">
                                        </li>
                                    <?php
                                    }
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!-- *****************************************
                     client section ends
            ****************************************** -->
        <?php
        }
    }
endif;
add_action( 'bizlight_action_front_client', 'bizlight_front_client', 10 );
