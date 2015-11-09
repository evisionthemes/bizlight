<?php
if( ! function_exists( 'bizlight_banner_image' ) ) :
    /**
     * Bizlight banner image
     *
     * @since  Bizlight 1.0.0
     *
     * @param int
     * @return string
     */
    function bizlight_banner_image( $post_id = null ){
        global $bizlight_customizer_all_values,$post;
        $bizlight_banner_image = $bizlight_customizer_all_values['bizlight-default-banner-image'];
        if( null != $post_id ){
            $post_id = $post->ID;
        }
        if( ! empty( get_post_meta( $post_id, 'bizlight-banner-image', true ) ) ) {
            $bizlight_banner_image = get_post_meta( $post->ID, 'bizlight-banner-image', true );
        }
        return $bizlight_banner_image;
    }
endif;

if( ! function_exists( 'bizlight_wp_head' ) ) :

    /**
     * Bizlight wp_head hook
     *
     * @since  Bizlight 1.0.0
     */
    function bizlight_wp_head(){
        global $bizlight_customizer_all_values;
        global $bizlight_google_fonts;
        $bizlight_font_family_h1_h6 = $bizlight_google_fonts[$bizlight_customizer_all_values['bizlight-font-family-h1-h6']];
        $bizlight_font_family_body = $bizlight_google_fonts[$bizlight_customizer_all_values['bizlight-font-family-body']];
        /*Color options */
        $bizlight_h1_h6_color = $bizlight_customizer_all_values['bizlight-h1-h6-color'];
        $bizlight_footer_bg_color = $bizlight_customizer_all_values['bizlight-footer-bg-color'];
        $bizlight_primary_color = $bizlight_customizer_all_values['bizlight-primary-color'];
        $bizlight_primary_hover_color = $bizlight_customizer_all_values['bizlight-primary-hover-color'];
        $bizlight_home_service_section_bg = $bizlight_customizer_all_values['bizlight-home-service-section-bg'];
        $bizlight_home_about_section_bg = $bizlight_customizer_all_values['bizlight-home-about-section-bg'];
        $bizlight_home_featured_section_bg = $bizlight_customizer_all_values['bizlight-home-featured-section-bg'];
        $bizlight_home_blog_bg = $bizlight_customizer_all_values['bizlight-home-blog-bg'];
        $bizlight_home_testimonial_bg = $bizlight_customizer_all_values['bizlight-home-testimonial-bg'];
        ?>
        <style type="text/css">
            /*Title font family*/
            body, p{
                font-family: '<?php echo esc_attr( $bizlight_font_family_body ); ?>';
            }
            h1, h1 a,
            h1.site-title,
            h1.site-title a,
            h2, h2 a,
            h3, h3 a,
            h4, h4 a,
            h5, h5 a,
            h6, h6 a {
                font-family: '<?php echo esc_attr( $bizlight_font_family_h1_h6 ); ?>';
            }
            <?php
            /*Main Title color*/
            if( !empty($bizlight_h1_h6_color) ){
            ?>
            h1, h1 a,
            h2, h2 a,
            h3, h3 a,
            h4, h4 a,
            h5, h5 a,
            h6, h6 a,
            h1.site-title,
            h1.site-title a {
                color: <?php echo esc_attr( $bizlight_h1_h6_color );?>; /*#212121*/
            }
            <?php
            }
            /*banner image*/
            if( !empty( $bizlight_banner_image = bizlight_banner_image(get_the_ID()) ) ){
            ?>
            .page-inner-title {
                background-image: url(<?php echo esc_url($bizlight_banner_image)?>);
                background-position: center top;
                background-color: #565656;
            }
            <?php
            }
            /*footer bg color */
            if( !empty( $bizlight_footer_bg_color ) ){
            ?>
            .wrap-contact,.site-footer{
                background-color: <?php echo esc_attr( $bizlight_footer_bg_color )?>;
            }
            <?php
            }
            /* service bg */
            if( !empty( $bizlight_home_service_section_bg ) ){
            ?>
            .wrap-service.block-section{
                background-color: <?php echo esc_attr( $bizlight_home_service_section_bg )?>;
            }
            <?php
            }
            /* about bg */
            if( !empty( $bizlight_home_about_section_bg ) ){
            ?>
            .wrap-about{
                background-color: <?php echo esc_attr( $bizlight_home_about_section_bg )?>;
            }
            <?php
            }
            /* feature bg */
            if( !empty( $bizlight_home_featured_section_bg ) ){
            ?>
            .wrap-highlight{
                background-color: <?php echo esc_attr( $bizlight_home_featured_section_bg )?>;
            }
            <?php
            }
            /* blog bg */
            if( !empty( $bizlight_home_blog_bg ) ){
            ?>
            .wrap-blog{
                background-color: <?php echo esc_attr( $bizlight_home_blog_bg )?>;
            }
            <?php
            }
            /* testimonial bg */
            if( !empty( $bizlight_home_testimonial_bg ) ){
            ?>
            .wrap-testimonial{
                background-color: <?php echo esc_attr( $bizlight_home_testimonial_bg )?>;
            }
            <?php
            }
            $bizlight_custom_css = $bizlight_customizer_all_values['bizlight-custom-css'];
            $bizlight_custom_css_output = '';
            if ( ! empty( $bizlight_custom_css ) ) {
                $bizlight_custom_css_output .= esc_textarea( $bizlight_custom_css ) ;
            }
            echo $bizlight_custom_css_output;
            ?>
        </style>
    <?php
    }
endif;
add_action( 'wp_head', 'bizlight_wp_head' );
