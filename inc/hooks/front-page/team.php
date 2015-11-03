<?php
if ( ! function_exists( 'bizlight_front_team' ) ) :
    /**
     * team
     *
     * @since eVision Corporate 1.0.0
     *
     * @param null
     * @return null
     *
     */
    function bizlight_front_team() {

        global $bizlight_customizer_all_values;
        $bizlight_teams = coder_get_repeated_all_value('bizlight-team');

        if( isset( $bizlight_customizer_all_values['bizlight-team-enable'] ) && 1 == $bizlight_customizer_all_values['bizlight-team-enable'] ) { ?>
            <?php
            $bizlight_team_pages_ids = array();
            if( null != $bizlight_teams ) {
                foreach($bizlight_teams as $bizlight_team) {
                    if( 0 != $bizlight_team['bizlight-team-pages'] ){
                        $bizlight_team_pages_ids[] = $bizlight_team['bizlight-team-pages'];
                    }
                }
            }
            ?>
            <!-- *****************************************
                 Team section start
            ****************************************** -->

            <section class="wrapper block-team block-section block-bg-image" id="bizlight-team">
                <div class="container">
                    <div class="block-title">
                        <?php
                        if(isset($bizlight_customizer_all_values['bizlight-team-main-title']) && !empty($bizlight_customizer_all_values['bizlight-team-main-title']) ){
                            echo '<h2>'.wp_kses_post( $bizlight_customizer_all_values['bizlight-team-main-title'] ).'</h2>';
                            echo '<div class="block-title-divider"><span><i class="fa fa-circle"></i></span></div>';
                        }
                        if( isset( $bizlight_customizer_all_values['bizlight-team-main-content'] ) && !empty( $bizlight_customizer_all_values['bizlight-team-main-content'] )){
                            echo '<p class="lead">'.wp_kses_post( $bizlight_customizer_all_values['bizlight-team-main-content'] ).'</p>';
                        }
                        ?>
                    </div>
                    <?php
                    if( !empty( $bizlight_team_pages_ids ) ){
                        ?>
                        <div class="row thumb-circle-container">
                            <div class="row-same-height">
                                <?php
                                $bizlight_team_query = new WP_Query(
                                    array(
                                        'post_type' => 'page',
                                        'post__in' => $bizlight_team_pages_ids,
                                        'posts_per_page' => 4,
                                        'orderby' => 'post__in'
                                    )
                                );
                                // the query
                                if ( $bizlight_team_query->have_posts() ) :
                                    /*loop*/
                                    while ( $bizlight_team_query->have_posts() ) :
                                        $bizlight_team_query->the_post();
                                        ?>
                                        <div class="col-xs-12 col-sm-12 col-md-3 col-md-height">
                                            <div class="thumb-circle-inner">
                                                <div class="thumb-circle-img">
                                                    <a href="<?php the_permalink()?>" title="<?php _e('link','bizlight');?>">
                                                        <?php the_post_thumbnail('thumbnail')?>
                                                    </a>
                                                </div>
                                                <div class="thumb-circle-detail">
                                                    <a href="<?php the_permalink()?>" title="<?php _e('view details','bizlight');?>">
                                                        <h3><?php the_title()?></h3>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endwhile; ?>
                                    <!-- end of the loop -->
                                    <?php wp_reset_postdata(); ?>
                                <?php else : ?>
                                    <!--Probably this message never display-->
                                    <p><?php _e( 'Please select pages for team, also make sure to have featured image for all pages', 'bizlight' )?></p>
                                <?php endif;
                                ?>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </section>

            <!-- *****************************************
                     Team section ends
            ****************************************** -->
        <?php
        }
    }
endif;
add_action( 'bizlight_action_front_team', 'bizlight_front_team', 10 );