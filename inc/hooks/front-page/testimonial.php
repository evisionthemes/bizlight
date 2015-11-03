<?php
if ( ! function_exists( 'bizlight_front_testimonial' ) ) :
    /**
     * testimonial
     *
     * @since eVision Corporate 1.0.0
     *
     * @param null
     * @return null
     *
     */
    function bizlight_front_testimonial() {

        global $bizlight_customizer_all_values;
        $bizlight_testimonials = coder_get_repeated_all_value('bizlight-testimonial');

        if( isset( $bizlight_customizer_all_values['bizlight-testimonial-enable']) && 1 == $bizlight_customizer_all_values['bizlight-testimonial-enable'] ) {
            $bizlight_testimonial_pages_ids = array();
            if( null != $bizlight_testimonials ) {
                foreach($bizlight_testimonials as $bizlight_testimonial) {
                    if( 0 != $bizlight_testimonial['bizlight-testimonial-pages'] ){
                        $bizlight_testimonial_pages_ids[] = $bizlight_testimonial['bizlight-testimonial-pages'];
                    }
                }
            }
            ?>
            <!-- *****************************************
                 testimonial section start
            ****************************************** -->

            <section id="bizlight-testimonial" class="wrapper block-testimonial block-section block-bg-image">
                <div class="block-overlay"> &nbsp; </div>
                <div class="block-overlay-content">
                    <div class="container">
                        <div class="block-title">
                            <?php
                            if(isset($bizlight_customizer_all_values['bizlight-testimonial-main-title']) && !empty($bizlight_customizer_all_values['bizlight-testimonial-main-title']) ){
                                echo '<h2>'.wp_kses_post( $bizlight_customizer_all_values['bizlight-testimonial-main-title'] ).'</h2>';
                                echo '<div class="block-title-divider"><span><i class="fa fa-circle"></i></span></div>';
                            }
                            ?>
                        </div>
                        <?php
                        if( !empty ( $bizlight_testimonial_pages_ids ) ) {
                          ?>
                            <div class="testimonial-container">
                                <div id='bizlight-testimonial-slide' class="carousel slide" data-ride="carousel">
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                        <?php
                                        $bizlight_testimonial_query = new WP_Query(
                                            array(
                                                'post_type' => 'page',
                                                'post__in' => $bizlight_testimonial_pages_ids,
                                                'posts_per_page' => 3,
                                                'orderby' => 'post__in'
                                            )
                                        );
                                        // the query
                                        if ( $bizlight_testimonial_query->have_posts() ) :
                                            /*loop*/
                                            $testimonial_index = 0;
                                            while ( $bizlight_testimonial_query->have_posts() ) :
                                                $bizlight_testimonial_query->the_post();
                                                if( 0 == $testimonial_index){
                                                    $bizlight_active= 'active';
                                                }
                                                else{
                                                    $bizlight_active= '';
                                                }
                                                ?>
                                                <div class="item <?php echo esc_attr( $bizlight_active );?>">
                                                    <div class="testimonial-content bizlight-carousel-fixed-content">
                                                        <?php echo bizlight_words_count( 50, get_the_content() )?>
                                                    </div>
                                                    <div class="testimonial-sayer">
                                                        <?php the_title();?>
                                                    </div>
                                                </div>
                                                <?php
                                                $testimonial_index++;
                                                ?>
                                            <?php endwhile; ?>
                                            <!-- end of the loop -->
                                            <?php wp_reset_postdata(); ?>
                                        <?php else : ?>
                                            <!--Probably this message never display-->
                                            <p><?php _e( 'Please select pages for testimonial, also make sure to have featured image for all pages', 'bizlight' )?></p>
                                        <?php endif;?>
                                    </div>
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                        <?php
                                        // the query
                                        if ( $bizlight_testimonial_query->have_posts() ) :
                                            /*loop*/
                                            $testimonial_index = 0;
                                            while ( $bizlight_testimonial_query->have_posts() ) :
                                                $bizlight_testimonial_query->the_post();
                                                if( 0 == $testimonial_index){
                                                    $bizlight_active= 'active';
                                                }
                                                else{
                                                    $bizlight_active= '';
                                                }
                                                ?>
                                                <li class="bizlight-indicators-image <?php echo esc_attr( $bizlight_active );?>" data-target="#bizlight-testimonial-slide" data-slide-to="<?php echo esc_attr( $testimonial_index );?>">
                                                    <?php
                                                    if ( '' != get_the_post_thumbnail() ) {
                                                        the_post_thumbnail();
                                                    } else {
                                                        echo "<img src='".esc_url(get_template_directory_uri().'/assets/img/avatar.png')."' alt='".__('bizlight-no-image','bizlight')."'>";
                                                    }
                                                    ?>

                                                </li>
                                                <?php
                                                $testimonial_index++;
                                                ?>
                                            <?php endwhile; ?>
                                            <!-- end of the loop -->
                                            <?php wp_reset_postdata(); ?>
                                        <?php else : ?>
                                            <p><?php _e( 'Please select pages for testimonial, also make sure to have all pages have featured image', 'bizlight' )?></p>
                                        <?php endif;?>
                                    </ol>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </section>

            <!-- *****************************************
                     testimonial section ends
            ****************************************** -->
        <?php
        }
    }
endif;
add_action( 'bizlight_action_front_testimonial', 'bizlight_front_testimonial', 10 );