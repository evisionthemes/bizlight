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
        if( null != $post_id ){
            $post_id = $post->ID;
        }
        $bizlight_single_post_image_align = $bizlight_customizer_all_values['bizlight-single-post-image-align'];
        $bizlight_single_post_image_align_meta = get_post_meta( $post_id, 'bizlight-single-post-image-align', true );

        if( false != $bizlight_single_post_image_align_meta ) {
            $bizlight_single_post_image_align = $bizlight_single_post_image_align_meta;
        }
        return $bizlight_single_post_image_align;
    }
endif;