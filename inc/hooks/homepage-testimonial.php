<?php
if (!function_exists('bizlight_home_testimonial_array')) :
    /**
     * Featured Slider array creation
     *
     * @since Bizlight 1.0.0
     *
     * @param string $from_testimonial
     * @return array
     */
    function bizlight_home_testimonial_array($from_testimonial){
        global $bizlight_customizer_all_values;
        $bizlight_home_testimonial_contents_array = array();
        $bizlight_icons_arrays = array();

        if ('from-post' == $from_testimonial) {
            $bizlight_home_testimonial_posts = coder_get_repeated_all_value('bizlight-home-testimonial-posts');
            $bizlight_home_testimonial_posts_ids = array();
            if (null != $bizlight_home_testimonial_posts) {
                foreach ($bizlight_home_testimonial_posts as $bizlight_home_testimonial_post) {
                    if (0 != $bizlight_home_testimonial_post['bizlight-home-testimonial-posts-ids']) {
                        $bizlight_home_testimonial_posts_ids[] = $bizlight_home_testimonial_post['bizlight-home-testimonial-posts-ids'];
                        $bizlight_icons_arrays[] = $bizlight_home_testimonial_post['bizlight-home-testimonial-post-icon'];
                    }
                }
            }
            $bizlight_home_testimonial_args = array(
                'post_type' => 'post',
                'post__in' => $bizlight_home_testimonial_posts_ids,
                'posts_per_page' => 3,
                'orderby' => 'post__in'
            );
        } elseif ('from-category' == $from_testimonial) {
            $bizlight_home_testimonial_category = $bizlight_customizer_all_values['bizlight-home-testimonial-category'];
            $bizlight_home_testimonial_args = array(
                'post_type' => 'post',
                'cat' => $bizlight_home_testimonial_category
            );
        } elseif ('from-custom' == $from_testimonial) {
            $bizlight_home_testimonial_customs = coder_get_repeated_all_value('bizlight-home-testimonial-custom');
            $bizlight_home_testimonial_contents_array = array();
            if (null != $bizlight_home_testimonial_customs) {
                $i = 0;
                foreach ($bizlight_home_testimonial_customs as $bizlight_home_testimonial_custom) {
                    if (0 != $bizlight_home_testimonial_custom['bizlight-home-testimonial-posts-ids']) {
                        $bizlight_home_testimonial_contents_array[$i]['bizlight-home-testimonial-title'] = $bizlight_home_testimonial_custom['bizlight-home-testimonial-custom-title'];
                        $bizlight_home_testimonial_contents_array[$i]['bizlight-home-testimonial-content'] = $bizlight_home_testimonial_custom['bizlight-home-testimonial-custom-content'];
                        $bizlight_home_testimonial_contents_array[$i]['bizlight-home-testimonial-link'] = $bizlight_home_testimonial_custom['bizlight-home-testimonial-custom-link'];
                        $bizlight_home_testimonial_contents_array[$i]['bizlight-home-testimonial-icon'] = $bizlight_home_testimonial_custom['bizlight-home-testimonial-custom-icon'];
                    }
                    $i++;
                }
            }
            return $bizlight_home_testimonial_contents_array;
        } else {
            $bizlight_home_testimonial_posts = coder_get_repeated_all_value('bizlight-home-testimonial-pages');
            $bizlight_home_testimonial_posts_ids = array();
            if (null != $bizlight_home_testimonial_posts) {
                foreach ($bizlight_home_testimonial_posts as $bizlight_home_testimonial_post) {
                    if (0 != $bizlight_home_testimonial_post['bizlight-home-testimonial-pages-ids']) {
                        $bizlight_home_testimonial_posts_ids[] = $bizlight_home_testimonial_post['bizlight-home-testimonial-pages-ids'];
                        if (isset($bizlight_home_testimonial_post['bizlight-home-testimonial-page-icon'])) {
                            $bizlight_home_testimonial_page_icon = $bizlight_home_testimonial_post['bizlight-home-testimonial-page-icon'];
                        } else {
                            $bizlight_home_testimonial_page_icon = ' fa-desktop';
                        }
                        $bizlight_icons_arrays[] = $bizlight_home_testimonial_page_icon;
                    }
                }
            }
            $bizlight_home_testimonial_args = array(
                'post_type' => 'page',
                'post__in' => $bizlight_home_testimonial_posts_ids,
                'posts_per_page' => 3,
                'orderby' => 'post__in'
            );

        }
        // the query
        $bizlight_home_testimonial_post_query = new WP_Query($bizlight_home_testimonial_args);
        if ($bizlight_home_testimonial_post_query->have_posts()) :
            $i = 0;
            while ($bizlight_home_testimonial_post_query->have_posts()) : $bizlight_home_testimonial_post_query->the_post();
                $bizlight_home_testimonial_contents_array[$i]['bizlight-home-testimonial-title'] = get_the_title();
                $bizlight_home_testimonial_contents_array[$i]['bizlight-home-testimonial-content'] = get_the_content();
                $i++;
            endwhile;
            wp_reset_postdata();
        endif;
        return $bizlight_home_testimonial_contents_array;
    }
endif;

if (!function_exists('bizlight_home_testimonial')) :
    /**
     * Featured Slider
     *
     * @since Bizlight 1.0.0
     *
     * @param null
     * @return null
     *
     */
    function bizlight_home_testimonial() {
        global $bizlight_customizer_all_values;
        if (1 != $bizlight_customizer_all_values['bizlight-home-testimonial-enable']) {
            return null;
        }
        $bizlight_home_testimonial_selection_options = $bizlight_customizer_all_values['bizlight-home-testimonial-selection-options'];
        $bizlight_testimonial_arrays = bizlight_home_testimonial_array($bizlight_home_testimonial_selection_options);
        if (is_array($bizlight_testimonial_arrays)) {
            ?>
            <section class="evision-wrapper block-section wrap-testimonial">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="testimonial-icon">
                                <i class="fa fa-quote-left"></i>
                            </div>
                            <div id="carousel-testimonial" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    <?php
                                    $i = 1;
                                    foreach( $bizlight_testimonial_arrays as $bizlight_testimonial_array ){
                                        ?>
                                        <li data-target="#carousel-testimonial" data-slide-to="<?php echo absint($i);?>" class="<?php echo $i == 1 ? 'active' : '';?>"></li>
                                        <?php
                                        $i++;
                                    }
                                    ?>
                                </ol>
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner testimonial-items-wrapper">
                                    <?php
                                    $i = 1;
                                    foreach( $bizlight_testimonial_arrays as $bizlight_testimonial_array ){ ?>
                                        <div class="item <?php echo $i == 1 ? 'active' : '';?>">
                                            <div class="content-text">
                                                <p>
                                                    <?php echo wp_kses_post( $bizlight_testimonial_array['bizlight-home-testimonial-content'] ); ?>
                                                </p>
                                            </div>
                                            <div class="testimonial-sayer">
                                                <h3><?php echo esc_html( $bizlight_testimonial_array['bizlight-home-testimonial-title'] ); ?></h3>
                                            </div>
                                        </div>
                                        <?php
                                        $i++;
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> <!-- testimonial section -->
        <?php
        }
    }
endif;
add_action('homepage', 'bizlight_home_testimonial', 50);