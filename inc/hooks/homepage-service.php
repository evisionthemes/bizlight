<?php
if ( ! function_exists( 'bizlight_home_service_array' ) ) :
    /**
     * Featured Slider array creation
     *
     * @since Bizlight 1.0.0
     *
     * @param string $from_service
     * @return array
     */
    function bizlight_home_service_array( $from_service ){
        global $bizlight_customizer_all_values;
        $bizlight_home_service_number = absint($bizlight_customizer_all_values['bizlight-home-service-number']);

        $bizlight_home_service_contents_array = array();

        $bizlight_home_service_contents_array[0]['bizlight-home-service-title'] = __('LOVELY DESIGN', 'bizlight');
        $bizlight_home_service_contents_array[0]['bizlight-home-service-content'] = __("The set doesn't moved. Deep don't fru it fowl gathering heaven days moving creeping under from i air. Set it fifth Meat was darkness. every bring in it.", 'bizlight');
        $bizlight_home_service_contents_array[0]['bizlight-home-service-link'] = '#';
        $bizlight_home_service_contents_array[0]['bizlight-home-service-icon'] = 'fa-desktop';

        $bizlight_home_service_contents_array[1]['bizlight-home-service-title'] = __('STYLIES PHOTOGRAPY', 'bizlight');
        $bizlight_home_service_contents_array[1]['bizlight-home-service-content'] = __("The set doesn't moved. Deep don't fru it fowl gathering heaven days moving creeping under from i air. Set it fifth Meat was darkness. every bring in it.", 'bizlight');
        $bizlight_home_service_contents_array[1]['bizlight-home-service-link'] = '#';
        $bizlight_home_service_contents_array[1]['bizlight-home-service-icon'] = 'fa-camera-retro';

        $bizlight_home_service_contents_array[2]['bizlight-home-service-title'] = __('CREATIVE AGENCY', 'bizlight');
        $bizlight_home_service_contents_array[2]['bizlight-home-service-content'] = __("The set doesn't moved. Deep don't fru it fowl gathering heaven days moving creeping under from i air. Set it fifth Meat was darkness. every bring in it.", 'bizlight');
        $bizlight_home_service_contents_array[2]['bizlight-home-service-link'] = '#';
        $bizlight_home_service_contents_array[2]['bizlight-home-service-icon'] = 'fa-rocket';

        $bizlight_icons_arrays = array();
        $bizlight_home_service_args = array();

        if( 'from-post' ==  $from_service ){
            $bizlight_home_service_posts = coder_get_repeated_all_value('bizlight-home-service-posts');
            $bizlight_home_service_posts_ids = array();
            if( null != $bizlight_home_service_posts ) {
                foreach( $bizlight_home_service_posts as $bizlight_home_service_post ) {
                    if( 0 != $bizlight_home_service_post['bizlight-home-service-posts-ids'] ){
                        $bizlight_home_service_posts_ids[] = $bizlight_home_service_post['bizlight-home-service-posts-ids'];
                        $bizlight_icons_arrays[] = $bizlight_home_service_post['bizlight-home-service-post-icon'];
                    }
                }
                $bizlight_home_service_args =    array(
                    'post_type' => 'post',
                    'post__in' => $bizlight_home_service_posts_ids,
                    'posts_per_page' => $bizlight_home_service_number,
                    'orderby' => 'post__in'
                );
            }
        }

        elseif ( 'from-category' ==  $from_service ){
            $bizlight_home_service_category = $bizlight_customizer_all_values['bizlight-home-service-category'];
            if( 0 != $bizlight_home_service_category ){
                $bizlight_home_service_args =    array(
                    'post_type' => 'post',
                    'cat' => $bizlight_home_service_category
                );
            }
        }

        elseif ( 'from-custom' ==  $from_service ){
            $bizlight_home_service_customs = coder_get_repeated_all_value('bizlight-home-service-custom');
            $bizlight_home_service_contents_array = array();
            if( null != $bizlight_home_service_customs ) {
                $i = 0;
                foreach( $bizlight_home_service_customs as $bizlight_home_service_custom ) {
                    if( isset( $bizlight_home_service_custom['bizlight-home-service-custom-title'] )){
                        $bizlight_home_service_contents_array[$i]['bizlight-home-service-title'] = $bizlight_home_service_custom['bizlight-home-service-custom-title'];
                    }
                    else{
                        $bizlight_home_service_contents_array[$i]['bizlight-home-service-title'] = '';
                    }
                    if( isset ( $bizlight_home_service_custom['bizlight-home-service-custom-content'] )){
                        $bizlight_home_service_contents_array[$i]['bizlight-home-service-content'] = $bizlight_home_service_custom['bizlight-home-service-custom-content'];
                    }
                    else{
                        $bizlight_home_service_contents_array[$i]['bizlight-home-service-content'] = '';
                    }
                    if( isset( $bizlight_home_service_custom['bizlight-home-service-custom-link'] )){
                        $bizlight_home_service_contents_array[$i]['bizlight-home-service-link'] = $bizlight_home_service_custom['bizlight-home-service-custom-link'];
                    }
                    else{
                        $bizlight_home_service_contents_array[$i]['bizlight-home-service-link'] = '';
                    }
                    if( isset ( $bizlight_home_service_custom['bizlight-home-service-custom-icon'] )){
                        $bizlight_home_service_contents_array[$i]['bizlight-home-service-icon'] = $bizlight_home_service_custom['bizlight-home-service-custom-icon'];
                    }
                    else{
                        $bizlight_home_service_contents_array[$i]['bizlight-home-service-icon'] = 'fa-desktop';
                    }
                    $i++;
                }
            }
            return $bizlight_home_service_contents_array;
        }
        else{
            $bizlight_home_service_posts = coder_get_repeated_all_value('bizlight-home-service-pages');
            $bizlight_home_service_posts_ids = array();
            if( null != $bizlight_home_service_posts ) {
                foreach( $bizlight_home_service_posts as $bizlight_home_service_post ) {
                    if( 0 != $bizlight_home_service_post['bizlight-home-service-pages-ids'] ){
                        $bizlight_home_service_posts_ids[] = $bizlight_home_service_post['bizlight-home-service-pages-ids'];
                        if( isset( $bizlight_home_service_post['bizlight-home-service-page-icon'] )){
                            $bizlight_home_service_page_icon = $bizlight_home_service_post['bizlight-home-service-page-icon'];
                        }
                        else{
                            $bizlight_home_service_page_icon =' fa-desktop';
                        }
                        $bizlight_icons_arrays[] = $bizlight_home_service_page_icon;
                    }
                }
                $bizlight_home_service_args =    array(
                    'post_type' => 'page',
                    'post__in' => $bizlight_home_service_posts_ids,
                    'posts_per_page' => $bizlight_home_service_number,
                    'orderby' => 'post__in'
                );
            }
        }
        // the query
        if( !empty( $bizlight_home_service_args )){
            $bizlight_home_service_contents_array = array(); /*again empty array*/
            $bizlight_home_service_post_query = new WP_Query( $bizlight_home_service_args );
            if ( $bizlight_home_service_post_query->have_posts() ) :
                $i = 0;
                while ( $bizlight_home_service_post_query->have_posts() ) : $bizlight_home_service_post_query->the_post();
                    $bizlight_home_service_contents_array[$i]['bizlight-home-service-title'] = get_the_title();
                    $bizlight_home_service_contents_array[$i]['bizlight-home-service-content'] = get_the_excerpt();
                    $bizlight_home_service_contents_array[$i]['bizlight-home-service-link'] = get_permalink();
                    if(isset( $bizlight_icons_arrays[$i] )){
                        $bizlight_home_service_contents_array[$i]['bizlight-home-service-icon'] = $bizlight_icons_arrays[$i];
                    }
                    else{
                        $bizlight_home_service_contents_array[$i]['bizlight-home-service-icon'] = 'fa-desktop';
                    }
                    $i++;
                endwhile;
                wp_reset_postdata();
            endif;
        }
        return $bizlight_home_service_contents_array;
    }
endif;

if ( ! function_exists( 'bizlight_home_service' ) ) :
    /**
     * Featured Slider
     *
     * @since Bizlight 1.0.0
     *
     * @param null
     * @return null
     *
     */
    function bizlight_home_service() {
        global $bizlight_customizer_all_values;
        if( 1 != $bizlight_customizer_all_values['bizlight-home-service-enable'] ){
            return null;
        }
        $bizlight_home_service_selection_options = $bizlight_customizer_all_values['bizlight-home-service-selection'];
        $bizlight_service_arrays = bizlight_home_service_array( $bizlight_home_service_selection_options );
        if( is_array( $bizlight_service_arrays )){
            $bizlight_home_service_number = absint($bizlight_customizer_all_values['bizlight-home-service-number']);
            $bizlight_home_service_title = $bizlight_customizer_all_values['bizlight-home-service-title'];
            $bizlight_home_service_column = $bizlight_customizer_all_values['bizlight-home-service-column'];
            $bizlight_home_service_button_text = $bizlight_customizer_all_values['bizlight-home-service-button-text'];
            $bizlight_home_service_button_link = $bizlight_customizer_all_values['bizlight-home-service-button-link'];
            $bizlight_home_service_enable_single_link = $bizlight_customizer_all_values['bizlight-home-service-enable-single-link'];

            if( 1 == $bizlight_home_service_column ){
                $col = 'col-md-12';
            }
            elseif( 2 == $bizlight_home_service_column ){
                $col = 'col-md-6';
            }
            elseif( 3 == $bizlight_home_service_column ){
                $col = 'col-md-4';
            }
            elseif( 4 == $bizlight_home_service_column ){
                $col = 'col-md-3';
            }
            else{
                $col = 'col-md-3';
            }
            ?>
            <section class="evision-wrapper block-section wrap-service">
                    <div class="container">
            <?php if(!empty( $bizlight_home_service_title ) ){
                ?>
                <h2><?php echo esc_html( $bizlight_home_service_title );?></h2>
                <span class="title-divider"></span>
                <?php
            }?>
                        <div class="row block-row">
                            <div class="row-same-height">
            <?php
            $i = 1;
            foreach( $bizlight_service_arrays as $bizlight_service_array ){
                if( $bizlight_home_service_number < $i){
                    break;
                }
                if( 1== $bizlight_home_service_enable_single_link ){
                    $bizlight_home_service_link = esc_url( $bizlight_service_array['bizlight-home-service-link'] );
                }
                else{
                    $bizlight_home_service_link = 'javascript:void(0)';
                }

                ?>
                <div class="<?php echo esc_attr( $col )?> box-container">
                        <div class="box-inner">
                            <a href="<?php echo $bizlight_home_service_link;/*escaping done above*/?>" title="link">
                                <div class="icon-container">
                                    <span><i class="fa <?php echo esc_attr( $bizlight_service_array['bizlight-home-service-icon'] ); ?>"></i></span>
                                </div>
                                <div class="box-content">
                                    <h3><?php echo esc_html( $bizlight_service_array['bizlight-home-service-title'] )?></h3>
                                    <div class="box-content-text">
                                        <p>
                                            <?php echo wp_kses_post( $bizlight_service_array['bizlight-home-service-content'] )?>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                </div>
                <?php
                if( $i % $bizlight_home_service_column == 0 ){
                    echo "<div class='clearfix'></div>";
                }
                $i++;
            }
        }
        ?>
                    </div>
                </div>
                <div class="btn-container browse-more-btn">
                    <button>
                        <a href="<?php echo esc_url( $bizlight_home_service_button_link )?>">
                            <?php echo esc_html( $bizlight_home_service_button_text );?>
                        </a>
                    </button>
                </div>
            </div>
        </section><!-- service section -->
        <?php
    }
endif;
add_action( 'homepage', 'bizlight_home_service', 20 );