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
        $bizlight_link_color = $bizlight_customizer_all_values['bizlight-link-color'];
        $breadcrumb_bg_color = $bizlight_customizer_all_values['breadcrumb-bg-color'];
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
                color: <?php echo esc_attr( $bizlight_h1_h6_color );?> !important; ; /*#212121*/
            }
            <?php
            }
          /*Link color*/
            if( !empty($bizlight_link_color) ){
            ?>
            a,
            a > p,
            .posted-on a,
            .cat-links a,
            .tags-links a,
            .author a,
            .comments-link a,
            .edit-link a,
            .nav-links .nav-previous a,
            .nav-links .nav-next a,
            .page-links a {
                color: <?php echo esc_attr( $bizlight_link_color ); ?> !important; /*#212121*/
            }
            <?php
            }
            /*breadcrumb background color*/
            if( !empty($breadcrumb_bg_color) ){
            ?>
            #breadcrumb {
                background-color: <?php echo esc_html( $breadcrumb_bg_color )?> !important; /*#009292*/
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

            /*Dynamic Site Color Option*/
            if( !empty( $bizlight_primary_color ) ){
            ?>

            button,
            html input[type="button"],
            input[type="button"],
            input[type="reset"],
            input[type="submit"],
            button:focus,
            input[type="button"]:focus,
            input[type="reset"]:focus,
            input[type="submit"]:focus,
            .search-form .search-submit,
            .bizlight-back-to-top,
            body:not(.home) .site-header.evision-nav-right,
            .main-navigation,
            .box-container a:hover .box-content,
            .evision-wrap-banner,
            .title-divider,
            .icon-section i,
            .single-thumb-image .icon span,
            .wrap-testimonial {
                background-color: <?php echo esc_attr( $bizlight_primary_color)?> !important; /*#000000*/
            }
            @media screen and (max-width: 767px){
                body.home .site-header.evision-nav-right{
                    background-color:  <?php echo esc_attr( $bizlight_primary_color)?> !important; /*#000000*/
                }
            }
            .single article.hentry .entry-title,
            .single-thumb-container h3{
                color:  <?php echo esc_attr( $bizlight_primary_color)?> !important; /*#028484*/
            }
            .widget-title,
            .widgettitle {
                border-left-color:  <?php echo esc_attr( $bizlight_primary_color)?> !important; /*#028484*/
            }
            .page article.hentry .entry-title,
            .blog article.hentry,
            #blog-post article.hentry,
            .search article.hentry,
            .archive article.hentry,
            .tag article.hentry,
            .category article.hentry,
            #ak-blog-post article.hentry,
            .evision-wrap-banner {
                border-bottom-color:  <?php echo esc_attr( $bizlight_primary_color)?> !important; /*#028484*/
            }
            .icon-container i {
                border-color:  <?php echo esc_attr( $bizlight_primary_color)?> !important; /*#028484*/
            }
            <?php
            }
            /******* Dynamic Site Hover Color Option *******/
            if( !empty( $bizlight_primary_hover_color ) ){
            ?>
            button:hover,
            input[type="button"]:hover,
            input[type="reset"]:hover,
            input[type="submit"]:hover,
            button:active,
            input[type="button"]:active,
            input[type="reset"]:active,
            input[type="submit"]:active,
            .bizlight-back-to-top:hover,
            .bizlight-back-to-top:focus {
                background: <?php echo esc_attr( $bizlight_primary_hover_color );?> !important; /*#3b4141*/
            }

            a:active,
            a:hover,
            a:focus,
            .main-navigation .current_page_item > a,
            .main-navigation .current-menu-item > a,
            .main-navigation .current_page_ancestor > a,
            .main-navigation li.active > a,
            .main-navigation li.active > a,
            .main-navigation li.active > a,
            .widget li a:hover,
            .posted-on a:hover,
            .cat-links a:hover,
            .tags-links a:hover,
            .author a:hover,
            .comments-link a:hover,
            .edit-link a:hover,
            .edit-link a:focus,
            .nav-links .nav-previous a:hover,
            .nav-links .nav-next a:hover,
            .page-links a:hover,
            .page-links a:focus,
            .page-links > span:hover,
            .page-links > span:focus,
            .page-numbers:hover,
            .page-numbers:focus,
            .page-numbers.current,
            .evision-slider-caption .main-title:hover a {
                color: <?php echo esc_attr( $bizlight_primary_hover_color );?> !important; /*#028484*/
            }

            .nav-links .nav-previous a:hover,
            .nav-links .nav-next a:hover,
            .page-numbers:hover,
            .page-numbers:focus,
            .page-numbers.current{
                border-color: <?php echo esc_attr( $bizlight_primary_hover_color );?> !important; /*#028484*/
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
