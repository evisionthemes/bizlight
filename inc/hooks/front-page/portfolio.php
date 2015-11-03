<?php
if ( ! function_exists( 'bizlight_front_portfolio' ) ) :
    /**
     * portfolio
     *
     * @since eVision Corporate 1.0.0
     *
     * @param null
     * @return null
     *
     */
    function bizlight_front_portfolio() {

        global $bizlight_customizer_all_values;
        $bizlight_portfolios = coder_get_repeated_all_value('bizlight-portfolio');
        if( isset( $bizlight_customizer_all_values['bizlight-portfolio-enable'] ) && 1 == $bizlight_customizer_all_values['bizlight-portfolio-enable'] ) {

            $bizlight_portfolio_pages_ids = array();
            if( null != $bizlight_portfolios ) {
                foreach($bizlight_portfolios as $bizlight_portfolio) {
                    if( 0 != $bizlight_portfolio['bizlight-portfolio-pages'] ){
                        $bizlight_portfolio_pages_ids[] = $bizlight_portfolio['bizlight-portfolio-pages'];
                    }
                }
            }
            ?>
            <!-- *****************************************
                  portfolio section start
            ****************************************** -->

            <section class="wrapper block-portfolio block-section" id="bizlight-portfolio">
                <div class="container">
                    <div class="block-title">
                        <?php
                        if(isset($bizlight_customizer_all_values['bizlight-portfolio-main-title']) && !empty($bizlight_customizer_all_values['bizlight-portfolio-main-title']) ){
                            echo '<h2>'.wp_kses_post( $bizlight_customizer_all_values['bizlight-portfolio-main-title'] ).'</h2>';
                            echo '<div class="block-title-divider"><span><i class="fa fa-circle"></i></span></div>';
                        }
                        if( isset( $bizlight_customizer_all_values['bizlight-portfolio-main-content'] ) && !empty( $bizlight_customizer_all_values['bizlight-portfolio-main-content'] )){
                            echo '<p class="lead">'.wp_kses_post( $bizlight_customizer_all_values['bizlight-portfolio-main-content'] ).'</p>';
                        }
                        ?>
                    </div>
                    <?php
                    if( !empty( $bizlight_portfolio_pages_ids ) ){
                        $bizlight_portfolio_query = new WP_Query(
                            array(
                                'post_type' => 'page',
                                'post__in' => $bizlight_portfolio_pages_ids,
                                'posts_per_page' => 3,
                                'orderby' => 'post__in'
                            )
                        );
                        ?>
                        <div class="row thumb-container">
                            <div class="row-same-height">
                                <?php
                                // the query
                                if ( $bizlight_portfolio_query->have_posts() ) :
                                    /*loop*/
                                    while ( $bizlight_portfolio_query->have_posts() ) :
                                        $bizlight_portfolio_query->the_post();
                                        ?>
                                        <div class="col-xs-12 col-sm-12 col-md-4 col-md-height single-thumb-block">
                                            <div class="thumb-inner">
                                                <div class="thumb-img bizlight-thumb-size">
                                                    <?php
                                                    if ( '' != get_the_post_thumbnail() ) {
                                                        the_post_thumbnail();
                                                    } else {
                                                        echo "<img src='".esc_url(get_template_directory_uri().'/assets/img/no-image.jpg')."' alt='".__('bizlight-no-image','bizlight')."'>";
                                                    }
                                                    ?>
                                                    <div class="thumb-overlay thumb-overlay-content">
                                                    <span class="thumb-detail">
                                                        <h3>
                                                            <a href="<?php the_permalink()?>">
                                                                <?php the_title();?>
                                                            </a>
                                                        </h3>
                                                    </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endwhile; ?>
                                    <!-- end of the loop -->
                                    <?php wp_reset_postdata(); ?>
                                <?php else : ?>
                                    <!--Probably this message never display-->
                                    <p><?php _e( 'Please select pages for portfolio, also make sure to have featured image for all pages', 'bizlight' )?></p>
                                <?php endif;?>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </section>
            <!-- *****************************************
                     portfolio section ends
            ****************************************** -->
        <?php
        }
    }
endif;
add_action( 'bizlight_action_front_portfolio', 'bizlight_front_portfolio', 10 );