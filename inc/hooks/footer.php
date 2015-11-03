<?php
if ( ! function_exists( 'bizlight_after_content' ) ) :
    /**
     * if front page div end
     *
     * @since eVision Corporate 1.0.0
     *
     * @param null
     * @return null
     *
     */
    function bizlight_after_content() {
        if ( !is_front_page() || ( is_front_page() && 'posts' == get_option( 'show_on_front' ) ) ) {
            echo'</div>';/*<!-- #content -->';*/
        }
    }
endif;
add_action( 'bizlight_action_after_content', 'bizlight_after_content', 10 );

if ( ! function_exists( 'bizlight_footer' ) ) :
    /**
     * Footer content
     *
     * @since eVision Corporate 1.0.0
     *
     * @param null
     * @return null
     *
     */
    function bizlight_footer() {
        global $bizlight_customizer_all_values;
        ?>
        <!-- *****************************************
             Footer section starts
    ****************************************** -->
        <footer id="colophon" role="contentinfo" class="wrapper site-footer dark-color-bg">
            <div class="container bottom-footer">
                <div class="row">
                    <div class="col-md-8">
                        <div class="copyright">
                            <?php
                            if(isset($bizlight_customizer_all_values['bizlight-footer-copyright'])){
                                echo wp_kses_post( $bizlight_customizer_all_values['bizlight-footer-copyright'] );
                            }
                            ?>
                            <?php printf( __( 'Theme : %1$s by %2$s.', 'bizlight' ), 'eVision Corporate', '<a href="http://evisionthemes.com/" rel="designer" target="_blank">eVision Themes</a>' ); ?>
                            <a href="<?php echo esc_url( __( 'http://wordpress.org/', 'bizlight' ) ); ?>" target="_blank"><?php printf( __( 'Proudly powered by %s', 'bizlight' ), 'WordPress' ); ?></a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <?php
                        if( isset( $bizlight_customizer_all_values['bizlight-footer-social-enable'] )  && 1 == $bizlight_customizer_all_values['bizlight-footer-social-enable']) {
                            ?>
                            <div class="social-group-nav social-icon-only bizlight-social-section">
                                <?php wp_nav_menu( array( 'theme_location' => 'bizlight-social', 'menu_id' => 'primary-menu' ) ); ?>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
        </footer>

        <!-- *****************************************
                 Footer section ends
        ****************************************** -->
    <?php
    }
endif;
add_action( 'bizlight_action_footer', 'bizlight_footer', 10 );

if ( ! function_exists( 'bizlight_page_end' ) ) :
    /**
     * Page end
     *
     * @since eVision Corporate 1.0.0
     *
     * @param null
     * @return null
     *
     */
    function bizlight_page_end() {
        global $bizlight_customizer_all_values;
        if( isset( $bizlight_customizer_all_values['bizlight-footer-gotop-enable'] )  && 1 == $bizlight_customizer_all_values['bizlight-footer-gotop-enable']) {
        ?>
            <a class="bizlight-back-to-top" href="#page"><i class="fa fa-angle-up"></i></a>
        <?php
        }
        ?>
        </div><!-- #page -->
    <?php
    }
endif;
add_action( 'bizlight_action_after', 'bizlight_page_end', 10 );