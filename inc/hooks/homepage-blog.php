<?php


if ( ! function_exists( 'bizlight_home_blog' ) ) :
    /**
     * blog Slider
     *
     * @since Bizlight 1.0.0
     *
     * @param null
     * @return null
     *
     */
    function bizlight_home_blog() {
        global $bizlight_customizer_all_values;

        $bizlight_home_blog_title = $bizlight_customizer_all_values['bizlight-home-blog-title'];
        $bizlight_home_blog_number = $bizlight_customizer_all_values['bizlight-home-blog-number'];
        $bizlight_home_blog_column = $bizlight_customizer_all_values['bizlight-home-blog-column'];
        $bizlight_home_blog_button_text = $bizlight_customizer_all_values['bizlight-home-blog-button-text'];
        $bizlight_home_blog_button_link = $bizlight_customizer_all_values['bizlight-home-blog-button-link'];

        if( 1 == $bizlight_home_blog_column ){
            $col = 'col-md-12';
        }
        elseif( 2 == $bizlight_home_blog_column ){
            $col = 'col-md-6';
        }
        elseif( 3 == $bizlight_home_blog_column ){
            $col = 'col-md-4';
        }
        elseif( 4 == $bizlight_home_blog_column ){
            $col = 'col-md-3';
        }
        else{
            $col = 'col-md-3';
        }
        if( 1 != $bizlight_customizer_all_values['bizlight-home-blog-enable'] ){
            return null;
        }
        ?>
        <section class="evision-wrapper block-section wrap-blog">
            <div class="container">
                <h2 class="evision-animate slideInDown"><?php echo esc_html( $bizlight_home_blog_title ); ?></h2>
                <span class="title-divider"></span>
                <div class="row block-row">
                    <div class="row-same-height overhidden">
                        <?php
                        $bizlight_home_about_args = array(
                            'post_type' => 'post',
                            'posts_per_page' => absint( $bizlight_home_blog_number ),
                        );
                        $bizlight_home_about_post_query = new WP_Query($bizlight_home_about_args);
                        if ($bizlight_home_about_post_query->have_posts()) :
                            $clearfix = 1;
                            $data_delay = 0;
                            while ($bizlight_home_about_post_query->have_posts()) : $bizlight_home_about_post_query->the_post();
                                if(has_post_thumbnail()){
                                    $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'full' );
                                    $url = $thumb['0'];
                                }
                                else{
                                    $url = get_template_directory_uri().'/assets/img/no-image.jpg';
                                }
                                $data_wow_delay = 'data-wow-delay='.$data_delay.'s';
                                ?>
                                <div class="<?php echo esc_attr( $col )?> single-thumb-container evision-animate fadeInUp" <?php echo esc_attr( $data_wow_delay );?>>
                                    <div class="single-thumb-inner">
                                        <div class="single-thumb-image">
                                            <img src="<?php echo esc_url( $url ); ?>" alt="<?php the_title_attribute()?>">
                                            <div class="overlay"></div>
                                            <div class="icon">
                                                <a href="<?php the_permalink();?>" title="<?php the_title_attribute();?>">
                                                    <span><img src="<?php echo esc_url( get_template_directory_uri().'/assets/img/plus-icon.png')?>" alt="link icon"></span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="single-thumb-content">
                                            <h3><?php the_title_attribute(); ?></h3>
                                            <div class="single-thumb-content-text">
                                                <p>
                                                    <?php the_excerpt();?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                if( $clearfix % $bizlight_home_blog_column == 0 ){
                                    echo "<div class='clearfix'></div>";
                                }
                                if( $clearfix % $bizlight_home_blog_column == 0 ){
                                    $data_delay = 0;
                                }
                                else{
                                    $data_delay = $data_delay + 0.5;
                                }

                            $clearfix++;

                            endwhile;
                            wp_reset_postdata();
                        endif;
                        ?>
                    </div>
                </div>
                <?php
                if( !empty ( $bizlight_home_blog_button_text ) ){
                    ?>
                    <div class="btn-container browse-more-btn">
                        <a class="button" href="<?php echo esc_url( $bizlight_home_blog_button_link )?>">
                            <?php echo esc_html( $bizlight_home_blog_button_text );?>
                        </a>
                    </div>
                    <?php
                }
                ?>
            </div>
        </section> <!-- blog section -->
        <?php
    }
endif;
add_action( 'homepage', 'bizlight_home_blog', 20 );