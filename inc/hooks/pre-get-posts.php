<?php
if( ! function_exists( 'bizlight_exclude_category_in_blog_page' ) ) :
    /**
     * Exclude category in blog page
     *
     * @since  Bizlight 1.0.0
     *
     * @param null
     * @return int
     */
    function bizlight_exclude_category_in_blog_page( $query ) {

        if( $query->is_home && $query->is_main_query()   ) {
            $bizlight_customizer_all_values = bizlight_get_all_options(1);
            $exclude_categories = $bizlight_customizer_all_values['bizlight-exclude-categories'];
            if ( ! empty( $exclude_categories ) ) {
                $cats = explode( ',', $exclude_categories );
                $cats = array_filter( $cats, 'is_numeric' );
                $string_exclude = '';
                if ( ! empty( $cats ) ) {
                    $string_exclude = '-' . implode( ',-', $cats);
                    $query->set( 'cat', $string_exclude );
                }
            }
        }
        return $query;

    }

endif;
add_filter( 'pre_get_posts', 'bizlight_exclude_category_in_blog_page' );