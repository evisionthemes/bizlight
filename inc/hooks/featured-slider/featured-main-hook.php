<?php
if ( ! function_exists( 'bizlight_featured_slider' ) ) :
    /**
     * intro loader
     *
     * @since Bizlight 1.0.0
     *
     * @param null
     * @return null
     *
     * 'from-page' => __( 'Page', 'bizlight' ),
    'from-post' => __( 'Post', 'bizlight' ),
    'from-category' => __( 'Category', 'bizlight' ),
    'from-custom' => __( 'Custom', 'bizlight' )
     */
    function bizlight_featured_slider() {
        global $bizlight_customizer_all_values;
        if( 1 != $bizlight_customizer_all_values['bizlight-fs-enable-options'] ){
            return null;
        }
        $bizlight_fs_selection_options = $bizlight_customizer_all_values['bizlight-fs-selection-options'];

        if( 'from-post' ==  $bizlight_fs_selection_options ){
            $bizlight_fs_posts = coder_get_repeated_all_value('bizlight-fs-posts');
            $bizlight_fs_posts_ids = array();
            if( null != $bizlight_fs_posts ) {
                foreach( $bizlight_fs_posts as $bizlight_fs_post ) {
                    if( 0 != $bizlight_fs_post['bizlight-fs-posts-ids'] ){
                        $bizlight_fs_posts_ids[] = $bizlight_fs_post['bizlight-fs-posts-ids'];
                    }
                }
            }
            $args =    array(
                'post_type' => 'post',
                'post__in' => $bizlight_fs_posts_ids,
                'posts_per_page' => 3,
                'orderby' => 'post__in'
            );
        }

        elseif ( 'from-category' ==  $bizlight_fs_selection_options ){
            $bizlight_fs_category = $bizlight_customizer_all_values['bizlight-fs-category'];
            $args =    array(
                'post_type' => 'post',
                'cat' => $bizlight_fs_category
            );
        }

        elseif ( 'from-custom' ==  $bizlight_fs_selection_options ){

            $bizlight_fs_customs = coder_get_repeated_all_value('bizlight-fs-custom');
            $bizlight_fs_custom_contents_array = array();
            if( null != $bizlight_fs_customs ) {
                foreach( $bizlight_fs_customs as $bizlight_fs_custom ) {
                    if( 0 != $bizlight_fs_custom['bizlight-fs-posts-ids'] ){
                        $bizlight_fs_custom_contents_array['bizlight-fs-custom-title'] = $bizlight_fs_custom['bizlight-fs-custom-title'];
                        $bizlight_fs_custom_contents_array['bizlight-fs-custom-content'] = $bizlight_fs_custom['bizlight-fs-custom-content'];
                        $bizlight_fs_custom_contents_array['bizlight-fs-custom-link'] = $bizlight_fs_custom['bizlight-fs-custom-link'];
                    }
                }
            }
        }
        else{
            $bizlight_fs_posts = coder_get_repeated_all_value('bizlight-fs-pages');
            $bizlight_fs_posts_ids = array();
            if( null != $bizlight_fs_posts ) {
                foreach( $bizlight_fs_posts as $bizlight_fs_post ) {
                    if( 0 != $bizlight_fs_post['bizlight-fs-posts-ids'] ){
                        $bizlight_fs_posts_ids[] = $bizlight_fs_post['bizlight-fs-posts-ids'];
                    }
                }
            }
            $args =    array(
                'post_type' => 'post',
                'post__in' => $bizlight_fs_posts_ids,
                'posts_per_page' => 3,
                'orderby' => 'post__in'
            );
        }
        ?>
        <?php
        $args = array(
            'post_type' => 'post',
            'tax_query' => array(
                array(
                    'taxonomy' => 'people',
                    'field'    => 'slug',
                    'terms'    => 'bob',
                ),
            ),
        );
        // the query
        $the_query = new WP_Query( $args ); ?>

        <?php if ( $the_query->have_posts() ) : ?>

            <!-- pagination here -->

            <!-- the loop -->
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <h2><?php the_title(); ?></h2>
            <?php endwhile; ?>
            <!-- end of the loop -->

            <!-- pagination here -->

            <?php wp_reset_postdata(); ?>

        <?php else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>
        <?php
    }
endif;
add_action( 'home-page', 'bizlight_featured_slider', 10 );