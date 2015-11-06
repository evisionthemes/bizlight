<?php
if ( ! function_exists( 'bizlight_numeric_posts_navigation' ) ) :

    /**
     * Numeric navigation options
     *
     * @since  Bizlight 1.0.0
     *
     * @param null
     * @return int
     */
    function bizlight_numeric_posts_navigation() {
        global $wp_query;
        $big = 999999999; // need an unlikely integer
        $translated = __( 'Page', 'bizlight' ); // Supply translatable string\
        $args = array(
            'base'               => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format'             => '?paged=%#%',
            'total'              => $wp_query->max_num_pages,
            'current'            => max( 1, get_query_var('paged') ),
            'show_all'           => False,
            'prev_next'          => True,
            'prev_text'          => '<i class="fa fa-angle-left"></i>',
            'next_text'          => '<i class="fa fa-angle-right"></i>',
            'before_page_number' => '<span class="screen-reader-text">'.$translated.' </span>'
        );
        echo paginate_links( $args);
    }
endif;

if ( ! function_exists( 'bizlight_posts_navigation' ) ) :

    /**
     * Posts navigation options
     *
     * @since  Bizlight 1.0.0
     *
     * @param null
     * @return int
     */
    function bizlight_posts_navigation() {
        global $bizlight_customizer_all_values;
        $bizlight_pagination_options = $bizlight_customizer_all_values['bizlight-pagination-options'];

        switch ( $bizlight_pagination_options ) {
            case 'default':
                the_posts_navigation();
                break;

            case 'numeric':
                bizlight_numeric_posts_navigation();
                break;
            case 'advanced':
                if ( function_exists( 'wp_pagenavi' ) ){
                    wp_pagenavi();
                }
                else{
                    bizlight_numeric_posts_navigation();
                }
                break;

            default:
                break;
        }

    }
endif;
add_action( 'bizlight_action_posts_navigation', 'bizlight_posts_navigation' );