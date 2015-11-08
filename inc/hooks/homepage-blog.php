<?php


if ( ! function_exists( 'bizlight_home_featured' ) ) :
    /**
     * Featured Slider
     *
     * @since Bizlight 1.0.0
     *
     * @param null
     * @return null
     *
     */
    function bizlight_home_featured() {
        global $bizlight_customizer_all_values;

        $bizlight_home_blog_title = $bizlight_customizer_defaults['bizlight-home-blog-title'] = __('LATEST NEWS','bizlight');
        $bizlight_home_blog_number = $bizlight_customizer_defaults['bizlight-home-blog-number'] = 3;
        $bizlight_home_blog_column = $bizlight_customizer_defaults['bizlight-home-blog-column'] = 3;
        $bizlight_home_blog_button_text = $bizlight_customizer_defaults['bizlight-home-blog-button-text'] = __('Browse more','bizlight');
        $bizlight_home_blog_button_link = $bizlight_customizer_defaults['bizlight-home-blog-button-link'] = esc_url( home_url( '/blog' ) );

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
        if( 1 != $bizlight_customizer_all_values['bizlight-home-featured-enable'] ){
            return null;
        }
        ?>
        <section class="evision-wrapper block-section wrap-blog">
            <div class="container">
                <h2><?php echo esc_html( $bizlight_home_blog_title ); ?></h2>
                <span class="title-divider"></span>
                <div class="row block-row">
                    <div class="row-same-height">
                        <?php
                        $bizlight_home_about_args = array(
                            'post_type' => 'post',
                            'posts_per_page' => absint( $bizlight_home_blog_number ),
                        );
                        $bizlight_home_about_post_query = new WP_Query($bizlight_home_about_args);
                        if ($bizlight_home_about_post_query->have_posts()) :
                            while ($bizlight_home_about_post_query->have_posts()) : $bizlight_home_about_post_query->the_post();
                                $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'full' );
                                $url = $thumb['0'];
                                ?>
                                <div class="<?php echo esc_attr( $col )?> col-md-height single-thumb-container">
                                    <div class="single-thumb-inner">
                                        <div class="single-thumb-image">
                                            <img src="<?php echo esc_url( $url ); ?>" alt="<?php the_title_attribute()?>">
                                            <div class="overlay"></div>
                                            <div class="icon">
                                                <a href="<?php the_permalink();?>" title="<?php the_title_attribute();?>">
                                                    <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/plus-icon.png" alt="link icon"></span>
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
                            endwhile;
                            wp_reset_postdata();
                        endif;
                        ?>
                    </div>
                </div>
                <div class="btn-container browse-more-btn">
                    <button>
                        <a href="<?php echo esc_url( $bizlight_home_blog_button_link )?>">
                            <?php echo esc_html( $bizlight_home_blog_button_text );?>
                        </a>
                    </button>
                </div>
            </div>
        </section> <!-- blog section -->
        <?php
    }
endif;
add_action( 'homepage', 'bizlight_home_featured', 20 );