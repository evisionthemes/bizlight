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
        ?>
        <style type="text/css">
            /*banner image*/
            <?php
            if( !empty( $bizlight_banner_image = bizlight_banner_image(get_the_ID()) ) ){
            ?>
            .page-inner-title {
                background-image: url(<?php echo esc_url($bizlight_banner_image)?>);
                background-position: center top;
                background-color: #565656;
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
