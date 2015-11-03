<?php
if ( ! function_exists( 'bizlight_front_slider' ) ) :
    /**
     * slider
     *
     * @since eVision Corporate 1.0.0
     *
     * @param null
     * @return null
     *
     */
    function bizlight_front_slider() {

        global $bizlight_customizer_all_values;
        $bizlight_sliders = coder_get_repeated_all_value('bizlight-slider');

        if( isset( $bizlight_customizer_all_values['bizlight-slider-enable'] ) && $bizlight_customizer_all_values['bizlight-slider-enable'] && null != $bizlight_sliders ){
            $bizlight_slider_pages_ids = array();
            foreach($bizlight_sliders as $bizlight_slider) {
                if( 0 != $bizlight_slider['bizlight-slider-pages'] ){
                    $bizlight_slider_pages_ids[] = $bizlight_slider['bizlight-slider-pages'];
                }
            }
            if( !empty( $bizlight_slider_pages_ids ) ) {
                $bizlight_slider_query = new WP_Query(
                    array(
                        'post_type' => 'page',
                        'post__in' => $bizlight_slider_pages_ids,
                        'posts_per_page' => 2,
                        'orderby' => 'post__in'
                    )
                );
                ?>
                <!-- *****************************************
                      hero banner section start
                  ****************************************** -->
                <section class="wrapper hero-banner-block" id="bizlight-slider">
                    <ul class="bizlight-main-slider">
                        <?php
                        // the query
                        if ( $bizlight_slider_query->have_posts() ) :
                            /*loop*/
                            while ( $bizlight_slider_query->have_posts() ) :
                                $bizlight_slider_query->the_post();
                                ?>
                                <li>
                                    <?php
                                    if ( has_post_thumbnail() ):
                                        $bizlight_slider_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                                    else:
                                        $bizlight_slider_image[0] = get_template_directory_uri() . '/assets/img/no-image-1920_690.jpg';
                                    endif;
                                    ?>
                                    <img src="<?php echo $bizlight_slider_image[0]; ?>" alt="<?php the_title_attribute(); ?>"/>
                                    <div class="bizlight-slider-content">
                                        <div class="container">
                                            <div class="bizlight-slider-caption">
                                                <div class="main-title">
                                                    <a href="<?php the_permalink(); ?>">
                                                        <?php the_title()?>
                                                    </a>
                                                </div>
                                                <?php
                                                echo bizlight_words_count(40, get_the_content());
                                                ?>
                                                <div class="clearfix"></div>
                                                <a class="big-btn" href="<?php the_permalink(); ?>"><?php _e( 'Know more', 'bizlight' )?></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            <?php endwhile; ?>
                            <!-- end of the loop -->
                            <?php wp_reset_postdata(); ?>
                        <?php else : ?>
                            <!--Probably this message never display-->
                            <?php _e( 'Please select pages for slider, also make sure to have featured image for all pages', 'bizlight' ); ?>
                        <?php endif;?>
                    </ul>
                </section>
                <!-- *****************************************
                          hero banner section ends
                ****************************************** -->
            <?php
            }
        }
    }
endif;
add_action( 'bizlight_action_front_slider', 'bizlight_front_slider', 10 );