<?php

if ( ! function_exists( 'bizlight_set_global' ) ) :
    /**
     * Doctype Declaration
     *
     * @since eVision Corporate 1.0.0
     *
     * @param null
     * @return null
     *
     */
    function bizlight_set_global() {
        /*Getting saved values start*/
        $GLOBALS['bizlight_customizer_all_values'] = coder_get_customizer_all_values();
        /*Getting saved values end*/
    }
endif;
add_action( 'bizlight_action_before_head', 'bizlight_set_global', 0 );

if ( ! function_exists( 'bizlight_doctype' ) ) :
    /**
     * Doctype Declaration
     *
     * @since eVision Corporate 1.0.0
     *
     * @param null
     * @return null
     *
     */
    function bizlight_doctype() {
        /*Getting saved values start*/
        $GLOBALS['bizlight_customizer_all_values'] = coder_get_customizer_all_values();
        /*Getting saved values end*/
        ?>
        <!DOCTYPE html> <html <?php language_attributes(); ?>>
    <?php
    }
endif;
add_action( 'bizlight_action_before_head', 'bizlight_doctype', 10 );

if ( ! function_exists( 'bizlight_before_wp_head' ) ) :
    /**
     * Before wp head codes
     *
     * @since eVision Corporate 1.0.0
     *
     * @param null
     * @return null
     *
     */
    function bizlight_before_wp_head() {
        global $bizlight_customizer_all_values;
        ?>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php
        if ( isset($bizlight_customizer_all_values['bizlight-general-favicon']) && !empty($bizlight_customizer_all_values['bizlight-general-favicon'])){
            /*Favicons*/
            echo '<link rel="shortcut icon" href="'.esc_url($bizlight_customizer_all_values['bizlight-general-favicon']).'">';
        }
        ?>
        <?php
        if ( isset($bizlight_customizer_all_values['bizlight-general-webclipicon']) && !empty($bizlight_customizer_all_values['bizlight-general-webclipicon'])){
            /*Web clip icon*/
            echo '    <link rel="apple-touch-icon" href="'.esc_url($bizlight_customizer_all_values['bizlight-general-webclipicon']).'" sizes="57x57">';
        }
        ?>
        <link rel="profile" href="<?php echo esc_url('http://gmpg.org/xfn/11')?>">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php
    }
endif;
add_action( 'bizlight_action_before_wp_head', 'bizlight_before_wp_head', 10 );

if ( ! function_exists( 'bizlight_body_class' ) ) :
    /**
     * add body class
     *
     * @since eVision Corporate 1.0.0
     *
     * @param null
     * @return null
     *
     */
    function bizlight_body_class( $bizlight_body_classes ) {
        if(!is_front_page()){
            global $bizlight_customizer_all_values;
            if( isset($bizlight_customizer_all_values['bizlight-layout-page']) ){
                $bizlight_layout_page = $bizlight_customizer_all_values['bizlight-layout-page'];
                if( 'sidebar-left' == $bizlight_layout_page ){
                    $bizlight_body_classes[] = 'bizlight-sidebar-left';
                }
                elseif( 'sidebar-right' == $bizlight_layout_page ){
                    $bizlight_body_classes[] = 'bizlight-sidebar-right';
                }
                elseif( 'sidebar-no' == $bizlight_layout_page ){
                    $bizlight_body_classes[] = 'bizlight-no-sidebar';
                }
                else{
                    $bizlight_body_classes[] = 'bizlight-sidebar-right';
                }
            }
            else{
                $bizlight_body_classes[] = 'bizlight-sidebar-right';
            }
        }
        return $bizlight_body_classes;

    }
endif;
add_action( 'body_class', 'bizlight_body_class', 10, 1);

if ( ! function_exists( 'bizlight_body_attr' ) ) :
    /**
     * add body attributes
     *
     * @since eVision Corporate 1.0.0
     *
     * @param null
     * @return null
     *
     */
    function bizlight_body_attr() {
        echo 'data-spy="scroll" data-target="#site-navigation"';
    }
endif;
//add_action( 'bizlight_action_body_attr', 'bizlight_body_attr', 10 );

if ( ! function_exists( 'bizlight_before_page_start' ) ) :
    /**
     * intro loader and backto top
     *
     * @since eVision Corporate 1.0.0
     *
     * @param null
     * @return null
     *
     */
    function bizlight_before_page_start() {
        ?>
        <div id="bizlight-intro-loader" style="display: none">
            <div id="bizlight-mask"><?php _e('Loading','bizlight')?></div>
        </div>
    <?php
    }
endif;
add_action( 'bizlight_action_before', 'bizlight_before_page_start', 10 );

if ( ! function_exists( 'bizlight_page_start' ) ) :
    /**
     * page start
     *
     * @since eVision Corporate 1.0.0
     *
     * @param null
     * @return null
     *
     */
function bizlight_page_start() {
    ?>
<div id="page" class="hfeed site">
<?php
}
endif;
add_action( 'bizlight_action_before', 'bizlight_page_start', 15 );

if ( ! function_exists( 'bizlight_skip_to_content' ) ) :
    /**
     * Skip to content
     *
     * @since eVision Corporate 1.0.0
     *
     * @param null
     * @return null
     *
     */
    function bizlight_skip_to_content() {
        ?>
        <a class="skip-link screen-reader-text" href="#content" title="link"><?php esc_html_e( 'Skip to content', 'bizlight' ); ?></a>
    <?php
    }
endif;
add_action( 'bizlight_action_before_header', 'bizlight_skip_to_content', 10 );

if ( ! function_exists( 'bizlight_header' ) ) :
    /**
     * Main header
     *
     * @since eVision Corporate 1.0.0
     *
     * @param null
     * @return null
     *
     */
    function bizlight_header() {
        global $bizlight_customizer_all_values;
        ?>
        <header class="wrapper wrap-header navbar-fixed-top" role="banner">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <h1 class="site-title">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" title="<?php _e('link','bizlight');?>">
                                <?php if ( isset($bizlight_customizer_all_values['bizlight-header-logo']) && !empty($bizlight_customizer_all_values['bizlight-header-logo'])) : ?>
                                    <img src="<?php echo esc_url($bizlight_customizer_all_values['bizlight-header-logo']); ?>" alt="<?php _e('bizlight-image', 'bizlight')?>">
                                <?php
                                else :
                                    bloginfo( 'name' ); ?>
                                <?php if ( isset($bizlight_customizer_all_values['bizlight-enable-tagline']) && 1 == $bizlight_customizer_all_values['bizlight-enable-tagline'] ) : ?>
                                    <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
                                <?php endif; ?>
                                <?php
                                endif; // End header image check. ?>
                            </a>
                        </h1>
                    </div>
                    <div class="col-md-9">
                        <nav id="site-navigation" class="main-navigation" role="navigation">
                            <div class="nav nav-tabs">
                                <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><i class="fa fa-bars"></i></button>
                                <?php
                                if ( !is_front_page() ) {
                                    if ( has_nav_menu( 'bizlight-inner-page' ) ) :
                                        wp_nav_menu( array( 'theme_location' => 'bizlight-inner-page', 'menu_id' => 'bizlight-inner-page' ) );
                                    endif;
                                }
                                else {
                                    if ( has_nav_menu( 'bizlight-front-page' ) ) :
                                        wp_nav_menu( array( 'theme_location' => 'bizlight-front-page', 'menu_id' => 'bizlight-front-page' ) );
                                    endif;
                                }
                                ?>
                            </div>
                        </nav><!-- #site-navigation -->
                    </div>
                </div>

        </header>
    <?php
    }
endif;
add_action( 'bizlight_action_header', 'bizlight_header', 10 );


if ( ! function_exists( 'bizlight_before_content' ) ) :
    /**
     * Before main content
     *
     * @since eVision Corporate 1.0.0
     *
     * @param null
     * @return null
     *
     */
    function bizlight_before_content() {
        if ( !is_front_page() || ( is_front_page() && 'posts' == get_option( 'show_on_front' ) ) ) {
            echo'<div id="content" class="site-content">';
        }
    }
endif;
add_action( 'bizlight_action_after_header', 'bizlight_before_content', 10 );
