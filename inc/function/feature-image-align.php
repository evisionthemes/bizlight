<?php
if( ! function_exists( 'bizlight_single_post_image_align' ) ) :
    /**
     * Bizlight default layout function
     *
     * @since  Bizlight 1.0.0
     *
     * @param int
     * @return string
     */
    function bizlight_single_post_image_align( $post_id = null ){
        global $bizlight_customizer_all_values,$post;
        $bizlight_single_post_image_align = $bizlight_customizer_all_values['bizlight-single-post-image-align'];
        if( null != $post_id ){
            $post_id = $post->ID;
        }
        if( ! empty( get_post_meta( $post_id, 'bizlight-single-post-image-align', true ) ) ) {
            $bizlight_single_post_image_align = get_post_meta( $post->ID, 'bizlight-single-post-image-align', true );
        }
        return $bizlight_single_post_image_align;
    }
endif;