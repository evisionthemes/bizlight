<?php
if ( ! function_exists( 'bizlight_before_footer' ) ) :
    /**
     * Footer content
     *
     * @since Bizlight 1.0.0
     *
     * @param null
     * @return false | void
     *
     */
    function bizlight_before_footer() {
        global $bizlight_customizer_all_values;
        $bizlight_footer_widgets_number = $bizlight_customizer_all_values['bizlight-footer-sidebar-number'];
        if( $bizlight_footer_widgets_number <= 0 ){
            return false;
        }
        if( 1 == $bizlight_footer_widgets_number ){
                $col = 'col-md-12';
            }
        elseif( 2 == $bizlight_footer_widgets_number ){
            $col = 'col-md-6';
        }
        elseif( 3 == $bizlight_footer_widgets_number ){
            $col = 'col-md-4';
        }
        elseif( 4 == $bizlight_footer_widgets_number ){
            $col = 'col-md-3';
        }
        else{
            $col = 'col-md-3';
        }
        ?>
        <!-- *****************************************
             Footer before section
    ****************************************** -->
        <section class="evision-wrapper block-section wrap-contact">
		<div class="container">
			<div class="contact-inner">
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<div class="row">
                            <?php if( is_active_sidebar( 'footer-col-one' ) && $bizlight_footer_widgets_number > 0 ) : ?>
                                <div class="contact-list <?php echo $col;?>">
                                    <?php dynamic_sidebar( 'footer-col-one' ); ?>
                                </div>
                            <?php endif; ?>
                            <?php if( is_active_sidebar( 'footer-col-two' ) && $bizlight_footer_widgets_number > 1 ) : ?>
                                <div class="contact-list <?php echo $col;?>">
                                    <?php dynamic_sidebar( 'footer-col-two' ); ?>
                                </div>
                            <?php endif; ?>
                            <?php if( is_active_sidebar( 'footer-col-three' ) && $bizlight_footer_widgets_number > 2 ) : ?>
                                <div class="contact-list <?php echo $col;?>">
                                    <?php dynamic_sidebar( 'footer-col-three' ); ?>
                                </div>
                            <?php endif; ?>
                            <?php if( is_active_sidebar( 'footer-col-four' ) && $bizlight_footer_widgets_number > 3 ) : ?>
                                <div class="contact-list <?php echo $col;?>">
                                    <?php dynamic_sidebar( 'footer-col-four' ); ?>
                                </div>
                            <?php endif; ?>
						</div>
					</div>
				</div>
			</div>
			</div>
		</div>
	</section>
        <!-- *****************************************
                 Footer before section ends
        ****************************************** -->
    <?php
    }
endif;
add_action( 'bizlight_action_before_footer', 'bizlight_before_footer', 10 );

if ( ! function_exists( 'bizlight_footer' ) ) :
    /**
     * Footer content
     *
     * @since Bizlight 1.0.0
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
        <footer id="colophon" class="evision-wrapper site-footer" role="contentinfo">
            <div class="container footer-social-container">
                <?php
                if(  1 == $bizlight_customizer_all_values['bizlight-enable-social-icons']) {
                    ?>
                    <div class="social-group-nav social-icon-only evision-social-section">
                        <?php wp_nav_menu( array( 'theme_location' => 'social', 'menu_id' => 'primary-menu' ) ); ?>
                    </div>
                <?php
                }
                ?>
            </div>
            <div class="copyright">
                <?php
                if(isset($bizlight_customizer_all_values['bizlight-copyright-text'])){
                    echo wp_kses_post( $bizlight_customizer_all_values['bizlight-copyright-text'] );
                }
                ?>
            </div>
            <?php
             if( 1 == $bizlight_customizer_all_values['bizlight-enable-theme-name']){
                ?>
             <div class="site-info">
                <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'bizlight' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'bizlight' ), 'WordPress' ); ?></a>
                <span class="sep"> | </span>
                <?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'bizlight' ), 'Bizlight', '<a href="http://evisionthemes.com/" rel="designer">eVisionThemes</a>' ); ?>
            </div><!-- .site-info -->
            <?php
            }
            ?>

        </footer><!-- #colophon -->
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
     * @since Bizlight 1.0.0
     *
     * @param null
     * @return null
     *
     */
    function bizlight_page_end() {
        global $bizlight_customizer_all_values;
        if( isset( $bizlight_customizer_all_values['bizlight-enable-back-top-top'] )  && 1 == $bizlight_customizer_all_values['bizlight-enable-back-top-top']) {
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