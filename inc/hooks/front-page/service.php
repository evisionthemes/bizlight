<?php
if ( ! function_exists( 'bizlight_front_service' ) ) :
    /**
     * service
     *
     * @since eVision Corporate 1.0.0
     *
     * @param null
     * @return null
     *
     */
    function bizlight_front_service() {
        global $bizlight_customizer_all_values;
        $bizlight_services = coder_get_repeated_all_value('bizlight-service');
        if( isset( $bizlight_customizer_all_values['bizlight-service-enable'] ) && 1 == $bizlight_customizer_all_values['bizlight-service-enable'] ) {
            $bizlight_service_pages_ids = array();
            if( null != $bizlight_services ){
                foreach($bizlight_services as $bizlight_service) {
                    if( 0 != $bizlight_service['bizlight-service-pages'] ) {
                        $bizlight_service_pages_ids[] = $bizlight_service['bizlight-service-pages'];
                    }
                }
            }

            ?>
            <!-- *****************************************
                 service section start
            ****************************************** -->
            <section class="wrapper block-service block-section block-bg-image" id="bizlight-service">
                <div class="block-overlay"> &nbsp; </div>
                <div class="block-overlay-content">
                    <div class="container">
                        <div class="block-title">
                            <?php
                            if(isset($bizlight_customizer_all_values['bizlight-service-main-title']) && !empty($bizlight_customizer_all_values['bizlight-service-main-title']) ){
                                echo '<h2>'.wp_kses_post( $bizlight_customizer_all_values['bizlight-service-main-title'] ).'</h2>';
                                echo '<div class="block-title-divider"><span><i class="fa fa-circle"></i></span></div>';
                            }
                            if( isset( $bizlight_customizer_all_values['bizlight-service-main-content'] ) && !empty( $bizlight_customizer_all_values['bizlight-service-main-content'] )){
                                echo '<p class="lead">'.wp_kses_post( $bizlight_customizer_all_values['bizlight-service-main-content'] ).'</p>';
                            }
                            ?>
                        </div>
                        <?php
                        if( !empty ( $bizlight_service_pages_ids ) ) {
                            $bizlight_service_query = new WP_Query(
                                array(
                                    'post_type' => 'page',
                                    'post__in' => $bizlight_service_pages_ids,
                                    'posts_per_page' => 3,
                                    'orderby' => 'post__in'
                                )
                            );
                            ?>
                            <div class="row">
                                <div class="row-same-height">
                                    <?php
                                    // the query
                                    if ( $bizlight_service_query->have_posts() ) :
                                        /*loop*/
                                        $bizlight_services_index = 1;
                                        while ( $bizlight_service_query->have_posts() ) :
                                            $bizlight_service_query->the_post();
                                            ?>
                                            <div class="col-xs-12 col-sm-4 col-sm-height">
                                                <div class="single-circle">
                                                    <div class="single-circle-icon">
                                                        <span>
                                                            <?php if( isset( $bizlight_services[$bizlight_services_index] ) &&  isset( $bizlight_services[$bizlight_services_index]['bizlight-service-icon'] ) && !empty( $bizlight_services[$bizlight_services_index]['bizlight-service-icon'] ) ){
                                                                echo '<i class="fa '.esc_attr($bizlight_services[$bizlight_services_index]['bizlight-service-icon']).' fa-3x"></i>';
                                                            }
                                                            else {
                                                                echo '<i class="fa fa-desktop fa-3x"></i>';
                                                            }
                                                            ?>
                                                        </span>
                                                    </div>
                                                    <div class="single-circle-inner">
                                                        <h3>
                                                            <?php the_title(); ?>
                                                        </h3>
                                                        <div class="btn-section">
                                                            <a href="<?php the_permalink();?>" class="btn-outline">
                                                                <?php _e( 'Know more', 'bizlight' );?>
                                                                <i class="fa fa-angle-double-right"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                            $bizlight_services_index ++;
                                        endwhile;?>
                                        <!-- end of the loop -->
                                        <?php wp_reset_postdata(); ?>
                                    <?php else : ?>
                                        <!--Probably this message never display-->
                                        <p><?php _e( 'Please select pages for service', 'bizlight' )?></p>
                                    <?php endif;
                                    ?>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </section>
            <!-- *****************************************
                      service section ends
            ****************************************** -->
        <?php
        }
    }
endif;
add_action( 'bizlight_action_front_service', 'bizlight_front_service', 10 );