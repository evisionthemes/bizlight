<?php
if ( ! function_exists( 'bizlight_front_blog' ) ) :
    /**
     * blog
     *
     * @since eVision Corporate 1.0.0
     *
     * @param null
     * @return null
     *
     */
    function bizlight_front_blog() {

        global $bizlight_customizer_all_values;

        if( isset( $bizlight_customizer_all_values['bizlight-blog-enable']) && 1 == $bizlight_customizer_all_values['bizlight-blog-enable'] ) { ?>
            <!-- *****************************************
                 blog section start
            ****************************************** -->

            <section class="wrapper block-blog block-section" id="bizlight-blog">
                <div class="container">
                    <div class="block-title">
                        <?php
                        if(isset($bizlight_customizer_all_values['bizlight-blog-main-title']) && !empty($bizlight_customizer_all_values['bizlight-blog-main-title']) ){
                            echo '<h2>'.wp_kses_post( $bizlight_customizer_all_values['bizlight-blog-main-title'] ).'</h2>';
                            echo '<div class="block-title-divider"><span><i class="fa fa-circle"></i></span></div>';
                        }
                        ?>
                    </div>
                    <div class="row thumb-container">
                        <div class="row-same-height">
                            <?php
                            $args_bizlight_blog = array(
                                'post_type' => 'post',
                                'posts_per_page' => 3,
                                'ignore_sticky_posts' => 1
                            );
                            $bizlight_blog_loop = new WP_Query($args_bizlight_blog);
                            ?>
                            <?php
                            // the query
                            if ( $bizlight_blog_loop->have_posts() ) :
                                while ( $bizlight_blog_loop->have_posts() ) : $bizlight_blog_loop->the_post(); ?>
                                    <div class="col-sm-12 col-md-3 col-md-height thumb-bdr pad0lr">
                                        <div class="thumb-inner">
                                            <div class="thumb-img bizlight-thumb-size">
                                            <?php
                                                if ( '' != get_the_post_thumbnail() ) {
                                                    the_post_thumbnail();
                                                } else {
                                                    echo "<img src='".esc_url(get_template_directory_uri().'/assets/img/no-image.jpg')."' alt='".__('bizlight-no-image','bizlight')."'>";
                                                }
                                                ?>
                                                <div class="thumb-overlay">
                                                    <span class="btn-link"><a href="<?php the_permalink()?>" title="<?php _e('link','bizlight')?>"><i class="fa fa-link"></i></a></span>
                                                </div>
                                            </div>
                                            <div class="thumb-detail">
                                                <a href="<?php the_permalink()?>" title="<?php _e('view details','bizlight');?>">
                                                    <h3><?php the_title()?></h3>
                                                </a>
                                                <span class="date"><?php echo esc_html( get_the_date() )?></span>
                                                <?php echo bizlight_words_count( 50, get_the_content() )?>
                                            </div>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                                <!-- end of the loop -->
                                <?php wp_reset_postdata(); ?>
                            <?php else : ?>
                                <p><?php _e( 'Please select pages for blog, also make sure to have all pages have featured image', 'bizlight' )?></p>
                            <?php endif;?>
                        </div>
                    </div>
                </div>
            </section>

            <!-- *****************************************
                     blog section ends
            ****************************************** -->
        <?php
        }
    }
endif;
add_action( 'bizlight_action_front_blog', 'bizlight_front_blog', 10 );