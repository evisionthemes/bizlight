<?php
if ( ! function_exists( 'bizlight_front_about' ) ) :
    /**
     * about
     *
     * @since eVision Corporate 1.0.0
     *
     * @param null
     * @return null
     *
     */
    function bizlight_front_about() {

        global $bizlight_customizer_all_values;

        $bizlight_abouts = coder_get_repeated_all_value('bizlight-about');

        if( isset($bizlight_customizer_all_values['bizlight-about-enable']) &&  1 == $bizlight_customizer_all_values['bizlight-about-enable'] ) {
            $bizlight_about_pages_ids = array();
            if( null != $bizlight_abouts ) {
                foreach( $bizlight_abouts as $bizlight_about ) {
                    if( 0 != $bizlight_about['bizlight-about-pages'] ){
                        $bizlight_about_pages_ids[] = $bizlight_about['bizlight-about-pages'];
                    }
                }
            }
            ?>
            <!-- *****************************************
                     about section start
                ****************************************** -->
            <section class="wrapper block-about block-section" id="bizlight-about">
                <div class="container">
                    <div class="block-title">
                        <?php
                        if(isset($bizlight_customizer_all_values['bizlight-about-main-title']) && !empty($bizlight_customizer_all_values['bizlight-about-main-title']) ){
                            echo '<h2>'.wp_kses_post( $bizlight_customizer_all_values['bizlight-about-main-title'] ).'</h2>';
                            echo '<div class="block-title-divider"><span><i class="fa fa-circle"></i></span></div>';
                        }
                        if( isset( $bizlight_customizer_all_values['bizlight-about-main-content'] ) && !empty ( $bizlight_customizer_all_values['bizlight-about-main-content'] )){
                            echo '<p class="lead">'.wp_kses_post( $bizlight_customizer_all_values['bizlight-about-main-content'] ).'</p>';
                        }
                        ?>
                    </div>
                    <?php
                    if( !empty ( $bizlight_about_pages_ids ) ) {
                        $bizlight_about_query = new WP_Query(
                            array(
                                'post_type' => 'page',
                                'post__in' => $bizlight_about_pages_ids,
                                'posts_per_page' => 3,
                                'orderby' => 'post__in'
                            )
                        );
                        ?>
                        <div class="row single-box-container">
                            <div class="row-same-height">
                                <?php
                                // the query
                                if ( $bizlight_about_query->have_posts() ) :
                                    /*loop*/
                                    $bizlight_abouts_index = 1;
                                    while ( $bizlight_about_query->have_posts() ) :
                                        $bizlight_about_query->the_post();
                                        ?>
                                        <div class="col-xs-12 col-sm-4 col-sm-height single-box-item single-box-bdr">
                                            <div class="single-box">
                                                <div class="single-box-icon">
                                                    <?php if( isset( $bizlight_abouts[$bizlight_abouts_index] ) &&  isset( $bizlight_abouts[$bizlight_abouts_index]['bizlight-about-icon'] ) && !empty( $bizlight_abouts[$bizlight_abouts_index]['bizlight-about-icon'] ) ){
                                                        echo '<i class="fa '.esc_attr($bizlight_abouts[$bizlight_abouts_index]['bizlight-about-icon']).' fa-3x"></i>';
                                                    }
                                                    else{
                                                        echo '<i class="fa fa-user fa-3x"></i>';
                                                    }
                                                    ?>
                                                </div>
                                                <div class="single-box-inner">
                                                    <h3>
                                                        <?php the_title()?>
                                                    </h3>
                                                    <?php
                                                    echo bizlight_words_count(30, get_the_content());
                                                    ?>
                                                    <div class="btn-section btn-over-box">
                                                        <a href="<?php the_permalink();?>" class="btn-outline">
                                                            <?php _e( 'Know more', 'bizlight' );?>
                                                            <i class="fa fa-angle-double-right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                        $bizlight_abouts_index ++;
                                    endwhile; ?>
                                    <!-- end of the loop -->
                                    <?php wp_reset_postdata(); ?>
                                <?php else : ?>
                                    <!--Probably this message never display-->
                                    <p><?php _e( 'Please select pages for about, also make sure to have featured image for all pages', 'bizlight' )?></p>
                                <?php endif;?>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </section>
                <!-- *****************************************
                          about section ends
                ****************************************** -->
            <?php
        }
    }
endif;

add_action( 'bizlight_action_front_about', 'bizlight_front_about', 10 );