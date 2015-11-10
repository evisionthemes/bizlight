<?php
if (!function_exists('bizlight_home_about_array')) :
    /**
     * Featured Slider array creation
     *
     * @since Bizlight 1.0.0
     *
     * @param string $from_about
     * @return array
     */
    function bizlight_home_about_array($from_about) {
        global $bizlight_customizer_all_values;
        $bizlight_home_about_number = absint( $bizlight_customizer_all_values['bizlight-home-about-number'] );

        $bizlight_home_about_contents_array = array();
        $bizlight_home_about_contents_array[0]['bizlight-home-about-title'] = __('Public Voice','bizlight');
        $bizlight_home_about_contents_array[0]['bizlight-home-about-content'] = __(" The set doesn't moved. Deep don't fru it fowl gathering heaven days moving creeping under from i air. Set it fifth Meat was darkness.",'bizlight');
        $bizlight_home_about_contents_array[0]['bizlight-home-about-link'] = '#';
        $bizlight_home_about_contents_array[0]['bizlight-home-about-icon'] = 'fa-bullhorn';

        $bizlight_home_about_contents_array[1]['bizlight-home-about-title'] = __('Photography','bizlight');
        $bizlight_home_about_contents_array[1]['bizlight-home-about-content'] = __(" The set doesn't moved. Deep don't fru it fowl gathering heaven days moving creeping under from i air. Set it fifth Meat was darkness.",'bizlight');
        $bizlight_home_about_contents_array[1]['bizlight-home-about-link'] = '#';
        $bizlight_home_about_contents_array[1]['bizlight-home-about-icon'] = 'fa-camera-retro';

        $bizlight_home_about_contents_array[2]['bizlight-home-about-title'] = __('Customization','bizlight');
        $bizlight_home_about_contents_array[2]['bizlight-home-about-content'] = __(" The set doesn't moved. Deep don't fru it fowl gathering heaven days moving creeping under from i air. Set it fifth Meat was darkness.",'bizlight');
        $bizlight_home_about_contents_array[2]['bizlight-home-about-link'] = '#';
        $bizlight_home_about_contents_array[2]['bizlight-home-about-icon'] = 'fa-cog';

        $bizlight_icons_arrays = array();
        $bizlight_home_about_args = array();
        if ('from-post' == $from_about) {
            $bizlight_home_about_posts = coder_get_repeated_all_value('bizlight-home-about-posts');
            $bizlight_home_about_posts_ids = array();
            if ( null != $bizlight_home_about_posts) {
                foreach ($bizlight_home_about_posts as $bizlight_home_about_post) {
                    if (0 != $bizlight_home_about_post['bizlight-home-about-posts-ids']) {
                        $bizlight_home_about_posts_ids[] = $bizlight_home_about_post['bizlight-home-about-posts-ids'];
                        $bizlight_icons_arrays[] = $bizlight_home_about_post['bizlight-home-about-post-icon'];
                    }
                }
                $bizlight_home_about_args = array(
                    'post_type' => 'post',
                    'post__in' => $bizlight_home_about_posts_ids,
                    'posts_per_page' => $bizlight_home_about_number,
                    'orderby' => 'post__in'
                );
            }

        } elseif ('from-category' == $from_about) {
            $bizlight_home_about_category = $bizlight_customizer_all_values['bizlight-home-about-category'];
            if( 0 != $bizlight_home_about_args ){
                $bizlight_home_about_args = array(
                    'post_type' => 'post',
                    'cat' => $bizlight_home_about_category
                );
            }

        } elseif ('from-custom' == $from_about) {
            $bizlight_home_about_customs = coder_get_repeated_all_value('bizlight-home-about-custom');
            if ( null != $bizlight_home_about_customs) {
                $bizlight_home_about_contents_array = array();
                $i = 0;
                foreach ($bizlight_home_about_customs as $bizlight_home_about_custom) {
                    if( isset ( $bizlight_home_about_custom['bizlight-home-about-custom-title'] )){
                        $bizlight_home_about_contents_array[$i]['bizlight-home-about-title'] = $bizlight_home_about_custom['bizlight-home-about-custom-title'];
                    }
                    else{
                        $bizlight_home_about_contents_array[$i]['bizlight-home-about-title'] = '';
                    }
                    if( isset ( $bizlight_home_about_custom['bizlight-home-about-custom-content'] )){
                        $bizlight_home_about_contents_array[$i]['bizlight-home-about-content'] = $bizlight_home_about_custom['bizlight-home-about-custom-content'];
                    }
                    else{
                        $bizlight_home_about_contents_array[$i]['bizlight-home-about-content'] = '';
                    }
                    if( isset( $bizlight_home_about_custom['bizlight-home-about-custom-link'] )){
                        $bizlight_home_about_contents_array[$i]['bizlight-home-about-link'] = $bizlight_home_about_custom['bizlight-home-about-custom-link'];
                    }
                    else{
                        $bizlight_home_about_contents_array[$i]['bizlight-home-about-link'] = '';
                    }
                    if( isset($bizlight_home_about_custom['bizlight-home-about-custom-icon'])){
                        $bizlight_home_about_contents_array[$i]['bizlight-home-about-icon'] = $bizlight_home_about_custom['bizlight-home-about-custom-icon'];
                    }
                    else{
                        $bizlight_home_about_contents_array[$i]['bizlight-home-about-icon'] = 'fa-desktop';
                    }
                    $i++;
                }
            }
            return $bizlight_home_about_contents_array;
        } else {
            $bizlight_home_about_posts = coder_get_repeated_all_value('bizlight-home-about-pages');
            $bizlight_home_about_posts_ids = array();
            if (null != $bizlight_home_about_posts) {
                foreach ($bizlight_home_about_posts as $bizlight_home_about_post) {
                    if (0 != $bizlight_home_about_post['bizlight-home-about-pages-ids']) {
                        $bizlight_home_about_posts_ids[] = $bizlight_home_about_post['bizlight-home-about-pages-ids'];
                        if (isset($bizlight_home_about_post['bizlight-home-about-page-icon'])) {
                            $bizlight_home_about_page_icon = $bizlight_home_about_post['bizlight-home-about-page-icon'];
                        } else {
                            $bizlight_home_about_page_icon = 'fa-desktop';
                        }
                        $bizlight_icons_arrays[] = $bizlight_home_about_page_icon;
                    }
                }
                $bizlight_home_about_args = array(
                    'post_type' => 'page',
                    'post__in' => $bizlight_home_about_posts_ids,
                    'posts_per_page' => $bizlight_home_about_number,
                    'orderby' => 'post__in'
                );
            }


        }
        // the query
        if( !empty( $bizlight_home_about_args )){
            $bizlight_home_about_contents_array = array();
            $bizlight_home_about_post_query = new WP_Query($bizlight_home_about_args);
            if ($bizlight_home_about_post_query->have_posts()) :
                $i = 0;
                while ($bizlight_home_about_post_query->have_posts()) : $bizlight_home_about_post_query->the_post();
                    $bizlight_home_about_contents_array[$i]['bizlight-home-about-title'] = get_the_title();
                    $bizlight_home_about_contents_array[$i]['bizlight-home-about-content'] = get_the_content();
                    $bizlight_home_about_contents_array[$i]['bizlight-home-about-link'] = get_permalink();
                    if(isset( $bizlight_icons_arrays[$i] )){
                        $bizlight_home_about_contents_array[$i]['bizlight-home-about-icon'] = $bizlight_icons_arrays[$i];
                    }
                    else{
                        $bizlight_home_about_contents_array[$i]['bizlight-home-about-icon'] = 'fa-desktop';
                    }
                    $i++;
                endwhile;
                wp_reset_postdata();
            endif;
        }
        return $bizlight_home_about_contents_array;
    }
endif;

if (!function_exists('bizlight_home_about')) :
    /**
     * Featured Slider
     *
     * @since Bizlight 1.0.0
     *
     * @param null
     * @return null
     *
     */
    function bizlight_home_about() {
        global $bizlight_customizer_all_values;
        if (1 != $bizlight_customizer_all_values['bizlight-home-about-enable']) {
            return null;
        }
        $bizlight_home_about_selection_options = $bizlight_customizer_all_values['bizlight-home-about-selection'];
        $bizlight_about_arrays = bizlight_home_about_array($bizlight_home_about_selection_options);
        if (is_array($bizlight_about_arrays)) {
            $bizlight_home_about_number = absint( $bizlight_customizer_all_values['bizlight-home-about-number'] );
            $bizlight_home_about_title = $bizlight_customizer_all_values['bizlight-home-about-title'];
            $bizlight_home_about_content = $bizlight_customizer_all_values['bizlight-home-about-content'];
            $bizlight_home_about_right_image = $bizlight_customizer_all_values['bizlight-home-about-right-image'];

            $bizlight_home_about_button_text = $bizlight_customizer_all_values['bizlight-home-about-button-text'];
            $bizlight_home_about_button_link = $bizlight_customizer_all_values['bizlight-home-about-button-link'];
            $bizlight_home_about_enable_single_link = $bizlight_customizer_all_values['bizlight-home-about-enable-single-link'];
            ?>
            <section class="evision-wrapper block-section wrap-about">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="about-content">
                                    <h2><?php echo esc_html( $bizlight_home_about_title );?></h2>
                                    <span class="title-divider"></span>
                                    <p class="about-hero-par">
                                        <?php echo wp_kses_post( $bizlight_home_about_content )?>
                                    </p>
            <?php
            $i = 1;
            foreach ($bizlight_about_arrays as $bizlight_about_array) {
                if ($bizlight_home_about_number < $i) {
                    break;
                }
                if( 1== $bizlight_home_about_enable_single_link ){
                    $bizlight_home_about_link = esc_url( $bizlight_about_array['bizlight-home-about-link'] );
                }
                else{
                    $bizlight_home_about_link = 'javascript:void(0)';
                }
                ?>
                    <div class="about-list">
                        <span class="icon-section">
                            <span>
                            <i class="fa <?php echo esc_attr( $bizlight_about_array['bizlight-home-about-icon'] ); ?>"></i>
                            </span>
                        </span>

                        <div class="about-list-content">
                            <h3>
                                <a href="<?php echo $bizlight_home_about_link; /*escaping done above*/?> ">
                                    <?php echo esc_attr( $bizlight_about_array['bizlight-home-about-title'] ); ?>
                                </a>
                            </h3>
                            <p>
                                <?php echo wp_kses_post( $bizlight_about_array['bizlight-home-about-content'] ); ?>
                            </p>
                        </div>
                    </div>
                <?php
                $i++;
            }
        }
        ?>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="product-thumb">
                            <img src="<?php echo esc_url( $bizlight_home_about_right_image )?>" alt="">
                        </div>
                    </div>
                </div>
                <div class="btn-container browse-more-btn">
                    <button>
                        <a href="<?php echo esc_url( $bizlight_home_about_button_link )?>">
                            <?php echo esc_html( $bizlight_home_about_button_text );?>
                        </a>
                    </button>
                </div>
            </div>
        </section><!-- about section -->
        <?php
    }
endif;
add_action('homepage', 'bizlight_home_about', 20);