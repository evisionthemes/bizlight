<?php
if ( ! function_exists( 'bizlight_featured_slider_array' ) ) :
    /**
     * Featured Slider array creation
     *
     * @since Bizlight 1.0.0
     *
     * @param string $from_slider
     * @return array
     */
    function bizlight_featured_slider_array( $from_slider ){
        global $bizlight_customizer_all_values;
        $bizlight_fs_number = absint( $bizlight_customizer_all_values['bizlight-fs-number'] );

        $bizlight_fs_contents_array[0]['bizlight-fs-title'] = __('Welcome to bizlight','bizlight');
        $bizlight_fs_contents_array[0]['bizlight-fs-content'] = __('Unlike other companies, we do not charge hundreds of dollars per theme.','bizlight');
        $bizlight_fs_contents_array[0]['bizlight-fs-link'] = #;
        $bizlight_fs_contents_array[0]['bizlight-fs-image'] = get_template_directory_uri()."/assets/img/slider1.jpg";

        $bizlight_fs_args = array();
        if( 'from-post' ==  $from_slider ){
            $bizlight_fs_posts = coder_get_repeated_all_value('bizlight-fs-posts');
            $bizlight_fs_posts_ids = array();
            if( null != $bizlight_fs_posts ) {
                foreach( $bizlight_fs_posts as $bizlight_fs_post ) {
                    if( 0 != $bizlight_fs_post['bizlight-fs-posts-ids'] ){
                        $bizlight_fs_posts_ids[] = $bizlight_fs_post['bizlight-fs-posts-ids'];
                    }
                }
                $bizlight_fs_args =    array(
                    'post_type' => 'post',
                    'post__in' => $bizlight_fs_posts_ids,
                    'posts_per_page' => $bizlight_fs_number,
                    'orderby' => 'post__in'
                );
            }
        }

        elseif ( 'from-category' ==  $from_slider ){
            $bizlight_fs_category = $bizlight_customizer_all_values['bizlight-fs-category'];
            if( 0 != $bizlight_fs_category ){
                $bizlight_fs_args =    array(
                    'post_type' => 'post',
                    'cat' => $bizlight_fs_category
                );
            }
        }

        elseif ( 'from-custom' ==  $from_slider ){
            $bizlight_fs_customs = coder_get_repeated_all_value('bizlight-fs-custom');
            if( null != $bizlight_fs_customs ) {
                $i = 0;
                foreach( $bizlight_fs_customs as $bizlight_fs_custom ) {
                    if(isset( $bizlight_fs_custom['bizlight-fs-custom-title'] )){
                        $bizlight_fs_contents_array[$i]['bizlight-fs-title'] = $bizlight_fs_custom['bizlight-fs-custom-title'];
                    }
                    else{
                        $bizlight_fs_contents_array[$i]['bizlight-fs-title'] = '';
                    }
                    if( isset( $bizlight_fs_custom['bizlight-fs-custom-content'] )){
                        $bizlight_fs_contents_array[$i]['bizlight-fs-content'] = $bizlight_fs_custom['bizlight-fs-custom-content'];
                    }
                    else{
                        $bizlight_fs_contents_array[$i]['bizlight-fs-content'] = '';
                    }
                    if( isset( $bizlight_fs_custom['bizlight-fs-custom-link'] )){
                        $bizlight_fs_contents_array[$i]['bizlight-fs-link'] = $bizlight_fs_custom['bizlight-fs-custom-link'];
                    }
                    else{
                        $bizlight_fs_contents_array[$i]['bizlight-fs-link'] = '';
                    }
                    if( isset( $bizlight_fs_custom['bizlight-fs-custom-image'] )){
                        $bizlight_fs_contents_array[$i]['bizlight-fs-image'] = $bizlight_fs_custom['bizlight-fs-custom-image'];
                    }
                    else{
                        $bizlight_fs_contents_array[$i]['bizlight-fs-image'] = '';
                    }
                    $i++;
                }
            }
            return $bizlight_fs_contents_array;
        }
        else{
            $bizlight_fs_posts = coder_get_repeated_all_value('bizlight-fs-pages');
            $bizlight_fs_posts_ids = array();
            if( null != $bizlight_fs_posts ) {
                foreach( $bizlight_fs_posts as $bizlight_fs_post ) {
                    if( 0 != $bizlight_fs_post['bizlight-fs-pages-ids'] ){
                        $bizlight_fs_posts_ids[] = $bizlight_fs_post['bizlight-fs-pages-ids'];
                    }
                }
                $bizlight_fs_args =    array(
                    'post_type' => 'page',
                    'post__in' => $bizlight_fs_posts_ids,
                    'posts_per_page' => $bizlight_fs_number,
                    'orderby' => 'post__in'
                );
            }
        }
        if( !empty( $bizlight_fs_args )){
            // the query
            $bizlight_fs_post_query = new WP_Query( $bizlight_fs_args );
            if ( $bizlight_fs_post_query->have_posts() ) :
                $i = 0;
                while ( $bizlight_fs_post_query->have_posts() ) : $bizlight_fs_post_query->the_post();
                    $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'full' );
                    $url = $thumb['0'];
                    $bizlight_fs_contents_array[$i]['bizlight-fs-title'] = get_the_title();
                    $bizlight_fs_contents_array[$i]['bizlight-fs-content'] = get_the_content();
                    $bizlight_fs_contents_array[$i]['bizlight-fs-link'] = get_permalink();
                    $bizlight_fs_contents_array[$i]['bizlight-fs-image'] = $url;
                    $i++;
                endwhile;
                wp_reset_postdata();
            endif;
        }
        return $bizlight_fs_contents_array;
    }
endif;

if ( ! function_exists( 'bizlight_featured_slider' ) ) :
    /**
     * Featured Slider
     *
     * @since Bizlight 1.0.0
     *
     * @param null
     * @return null
     *
     */
    function bizlight_featured_slider() {
        global $bizlight_customizer_all_values;
        if( 1 != $bizlight_customizer_all_values['bizlight-fs-enable'] ){
            return null;
        }
        $bizlight_fs_selection_options = $bizlight_customizer_all_values['bizlight-fs-selection'];
        $bizlight_slider_arrays = bizlight_featured_slider_array( $bizlight_fs_selection_options );
        if( is_array( $bizlight_slider_arrays )){
        $bizlight_fs_number = absint( $bizlight_customizer_all_values['bizlight-fs-number'] );
        $bizlight_fs_slider_mode = $bizlight_customizer_all_values['bizlight-fs-slider-mode'];
        $bizlight_fs_slider_time = $bizlight_customizer_all_values['bizlight-fs-slider-time'];
        $bizlight_fs_slider_pause_time = $bizlight_customizer_all_values['bizlight-fs-slider-pause-time'];
        $bizlight_fs_enable_control = $bizlight_customizer_all_values['bizlight-fs-enable-control'];
        $bizlight_fs_enable_autoplay = $bizlight_customizer_all_values['bizlight-fs-enable-autoplay'];
        $bizlight_fs_enable_title = $bizlight_customizer_all_values['bizlight-fs-enable-title'];
        $bizlight_fs_enable_caption = $bizlight_customizer_all_values['bizlight-fs-enable-caption'];
        $bizlight_fs_enable_link = $bizlight_customizer_all_values['bizlight-fs-enable-link'];
        $bizlight_fs_slider_button_text = $bizlight_customizer_all_values['bizlight-fs-slider-button-text'];

        ?>
            <div class="evision-wrapper evision-wrap-banner evision-banner-right-nav">
                <ul class="evision-main-slider" id="evision-slider" data-mode="<?php echo esc_attr( $bizlight_fs_slider_mode)?>"
                    data-speed="<?php echo esc_attr( $bizlight_fs_slider_time )?>"
                    data-pause="<?php echo esc_attr( $bizlight_fs_slider_pause_time )?>"
                    data-control="<?php echo esc_attr( $bizlight_fs_enable_control )?>"
                    data-auto="<?php echo esc_attr( $bizlight_fs_enable_autoplay )?>"
                    >
            <?php
            $i = 0;
            foreach( $bizlight_slider_arrays as $bizlight_slider_array ){
                if( $bizlight_fs_number < $i)
                    break;
                ?>
                <li>
                    <img src="<?php echo esc_url( $bizlight_slider_array['bizlight-fs-image'] )?>" alt="<?php echo esc_attr( $bizlight_slider_array['bizlight-fs-title'] )?>" />
                    <div class="container evision-slider-content">
                        <div class="evision-slider-caption">
                            <?php if( 1 == $bizlight_fs_enable_title) {
                                ?>
                                <h1 class="main-title"><?php echo esc_html( $bizlight_slider_array['bizlight-fs-title'] )?></h1>
                                <span class="banner-divider"></span>
                                <?php
                            }
                            if( 1 == $bizlight_fs_enable_caption){
                                ?>
                                <div class="banner-con">
                                    <p>
                                        <?php echo wp_kses_post( $bizlight_slider_array['bizlight-fs-content'] )?>
                                    </p>
                                </div>
                                <?php
                            }
                            if( 1 == $bizlight_fs_enable_link ){
                                ?>
                                <button class="banner-btn">
                                    <a href="<?php echo esc_url( $bizlight_slider_array['bizlight-fs-link'] )?>">
                                       <?php echo esc_html( $bizlight_fs_slider_button_text ); ?>
                                    </a>
                                </button>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                </li>
                <?php
                $i++;
            }
        }
        ?>
            </ul>
        </div><!-- slider section -->
        <?php
    }
endif;
add_action( 'homepage', 'bizlight_featured_slider', 10 );