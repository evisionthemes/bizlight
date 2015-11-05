<?php
if( ! function_exists( 'bizlight_excerpt_length' ) ) :

    /**
     * Excerpt length
     *
     * @since  Bizlight 1.0.0
     *
     * @param null
     * @return int
     */
    function bizlight_excerpt_length( $length ){
        global $bizlight_customizer_all_values;
        $excerpt_length = $bizlight_customizer_all_values['bizlight-excerpt-length'];
        if ( empty( $excerpt_length) ) {
            $excerpt_length = $length;
        }
        return esc_attr( $excerpt_length );

    }

endif;
add_filter( 'excerpt_length', 'bizlight_excerpt_length', 999 );