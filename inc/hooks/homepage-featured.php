<?php


if ( ! function_exists( 'bizlight_home_featured' ) ) :
    /**
     * Featured Slider
     *
     * @since Bizlight 1.0.0
     *
     * @param null
     * @return null
     *
     */
    function bizlight_home_featured() {
        global $bizlight_customizer_all_values;

        $bizlight_home_featured_title = $bizlight_customizer_all_values['bizlight-home-featured-title'];
        $bizlight_home_featured_bg = $bizlight_customizer_all_values['bizlight-home-featured-bg'];
        $bizlight_home_featured_button_text = $bizlight_customizer_all_values['bizlight-home-featured-button-text'];
        $bizlight_home_featured_button_url = $bizlight_customizer_all_values['bizlight-home-featured-button-url'];

        if( 1 != $bizlight_customizer_all_values['bizlight-home-featured-enable'] ){
            return null;
        }
        ?>
        <section class="evision-wrapper block-section wrap-highlight" style="background-image:url('<?php echo esc_url( $bizlight_home_featured_bg )?>') ">
            <div class="container">
                <h2><?php echo esc_html( $bizlight_home_featured_title ); ?></h2>
                <div class="btn-container btn-outline">
                    <button>
                        <a href="<?php echo esc_url( $bizlight_home_featured_button_url ); ?>">
                            <?php echo esc_html( $bizlight_home_featured_button_text )?>
                        </a>
                    </button>
                </div>
            </div>
        </section><!-- highlight section -->
        <?php
    }
endif;
add_action( 'homepage', 'bizlight_home_featured', 20 );