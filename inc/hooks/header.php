<?php
if ( ! function_exists( 'bizlight_set_global' ) ) :
/**
 * Setting global values for all saved customizer values
 *
 * @since Bizlight 1.0.0
 *
 * @param null
 * @return null
 *
 */
function bizlight_set_global() {
    /*Getting saved values start*/
    $GLOBALS['bizlight_customizer_all_values'] = bizlight_get_all_options(1);
}
endif;
add_action( 'bizlight_action_before_head', 'bizlight_set_global', 0 );

if ( ! function_exists( 'bizlight_doctype' ) ) :
/**
 * Doctype Declaration
 *
 * @since Bizlight 1.0.0
 *
 * @param null
 * @return null
 *
 */
function bizlight_doctype() {
    ?>
    <!DOCTYPE html><html <?php language_attributes(); ?>>
<?php
}
endif;
add_action( 'bizlight_action_before_head', 'bizlight_doctype', 10 );

if ( ! function_exists( 'bizlight_before_wp_head' ) ) :
/**
 * Before wp head codes
 *
 * @since Bizlight 1.0.0
 *
 * @param null
 * @return null
 *
 */
function bizlight_before_wp_head() {
    ?>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php
}
endif;
add_action( 'bizlight_action_before_wp_head', 'bizlight_before_wp_head', 10 );

if ( ! function_exists( 'bizlight_body_class' ) ) :
/**
 * add body class
 *
 * @since Bizlight 1.0.0
 *
 * @param null
 * @return null
 *
 */
function bizlight_body_class( $bizlight_body_classes ) {
    if(!is_page_template( 'page-templates/template-home.php' )){
        global $bizlight_customizer_all_values;
        if( isset($bizlight_customizer_all_values['bizlight-layout-options']) ){
            $bizlight_layout_page = $bizlight_customizer_all_values['bizlight-layout-options'];
            if( 'left-sidebar' == $bizlight_layout_page ){
                $bizlight_body_classes[] = 'bizlight-left-sidebar';
            }
            elseif( 'right-sidebar' == $bizlight_layout_page ){
                $bizlight_body_classes[] = 'bizlight-right-sidebar';
            }
            elseif( 'both-sidebar' == $bizlight_layout_page ){
                $bizlight_body_classes[] = 'bizlight-both-sidebar';
            }
            elseif( 'no-sidebar' == $bizlight_layout_page ){
                $bizlight_body_classes[] = 'bizlight-no-sidebar';
            }
            else{
                $bizlight_body_classes[] = 'bizlight-right-sidebar';
            }
        }
        else{
            $bizlight_body_classes[] = 'bizlight-right-sidebar';
        }
    }
    return $bizlight_body_classes;

}
endif;
add_action( 'body_class', 'bizlight_body_class', 10, 1);

if ( ! function_exists( 'bizlight_before_page_start' ) ) :
/**
 * intro loader
 *
 * @since Bizlight 1.0.0
 *
 * @param null
 * @return null
 *
 */
function bizlight_before_page_start() {
    global $bizlight_customizer_all_values;

    if ( 1 == $bizlight_customizer_all_values['bizlight-enable-intro'] ) {
        $bizlight_intro_bg_color =  $bizlight_customizer_all_values['bizlight-intro-bg-color'];
        $bizlight_intro_middle_image =  $bizlight_customizer_all_values['bizlight-intro-middle-image'];
        ?>
        <div id="bizlight-intro-loader" style="background: <?php echo $bizlight_intro_bg_color; ?>">
            <div id="bizlight-mask">
                <?php
                 if( !empty( $bizlight_intro_middle_image ) ){
                    echo "<img src='".$bizlight_intro_middle_image."'>";
                 }
                 else{
                    echo "<div class='loader-outer'><div class='et-loader'></div></div>";
                 }
                ?>
            </div>
        </div>
    <?php
    }
    ?>
<?php
}
endif;
add_action( 'bizlight_action_before', 'bizlight_before_page_start', 10 );

if ( ! function_exists( 'bizlight_page_start' ) ) :
/**
 * page start
 *
 * @since Bizlight 1.0.0
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
 * @since Bizlight 1.0.0
 *
 * @param null
 * @return null
 *
 */
function bizlight_skip_to_content() {
    ?>
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'bizlight' ); ?></a>
<?php
}
endif;
add_action( 'bizlight_action_before_header', 'bizlight_skip_to_content', 10 );

if ( ! function_exists( 'bizlight_header' ) ) :
/**
 * Main header
 *
 * @since Bizlight 1.0.0
 *
 * @param null
 * @return null
 *
 */
function bizlight_header() {
    global $bizlight_customizer_all_values;
    ?>
    <?php if( 'header-layout-1' == $bizlight_customizer_all_values['bizlight-header-layout']){
        ?>
        <!-- header and navigation option second - navigation right  -->
        <header id="masthead" class="site-header evision-nav-right" role="banner">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 col-md-4">
                        <?php if ( isset($bizlight_customizer_all_values['bizlight-logo']) && !empty($bizlight_customizer_all_values['bizlight-logo'])) :
                            if ( is_front_page() && is_home() ){
                                echo '<h1 class="site-title">';
                            }
                            else{
                                echo '<p class="site-title">';
                            }
                            ?>
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                                <img class="header-logo" src="<?php echo esc_url($bizlight_customizer_all_values['bizlight-logo']); ?>" alt="<?php bloginfo( 'name' )?>">
                            </a>
                            <?php if ( is_front_page() && is_home() ){
                                echo '</h1>';
                            }
                            else{
                                echo '</p>';
                            }
                        ?>
                        <?php else :
                            if ( is_front_page() && is_home() ){
                                echo '<h1 class="site-title">';
                            }
                            else{
                                echo '<p class="site-title">';
                            }
                            ?>
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                                <?php
                                if ( 1 == $bizlight_customizer_all_values['bizlight-enable-title'] ) :
                                    bloginfo( 'name' );
                                endif;
                                ?>
                                <?php
                                if ( 1 == $bizlight_customizer_all_values['bizlight-enable-tagline'] ) :
                                    echo '<p class="site-description">'. bloginfo( 'description' ).'</p>';
                                endif;
                                ?>
                            </a>
                            <?php if ( is_front_page() && is_home() ){
                                echo '</h1>';
                            }
                            else{
                                echo '</p>';
                            }
                        endif; ?>
                    </div>
                    <div class="col-sm-9 col-md-8">
                        <nav id="site-navigation" class="main-navigation" role="navigation">
                            <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'bizlight' ); ?></button>
                            <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <?php
    }
    else{
    ?>
    <!-- ///////// header and navigation default format - navigation bottom ( option for pro version) \\\\\\\\\\ -->
 <header id="masthead" class="site-header" role="banner">
    <div class="site-branding">
        <?php if ( isset($bizlight_customizer_all_values['bizlight-logo']) && !empty($bizlight_customizer_all_values['bizlight-logo'])) :
            if ( is_front_page() && is_home() ){
                echo '<h1 class="site-title">';
            }
            else{
                echo '<p class="site-title">';
            }
            ?>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                <img class="header-logo" src="<?php echo esc_url($bizlight_customizer_all_values['bizlight-logo']); ?>" alt="<?php bloginfo( 'name' )?>">
            </a>
            <?php if ( is_front_page() && is_home() ){
                echo '</h1>';
            }
            else{
                echo '</p>';
            }
        ?>
        <?php else :
            if ( is_front_page() && is_home() ){
                echo '<h1 class="site-title">';
            }
            else{
                echo '<p class="site-title">';
            }
            ?>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                <?php
                if ( 1 == $bizlight_customizer_all_values['bizlight-enable-title'] ) :
                    bloginfo( 'name' );
                endif;
                ?>
                <?php
                if ( 1 == $bizlight_customizer_all_values['bizlight-enable-tagline'] ) :
                    echo '<p class="site-description">'. bloginfo( 'description' ).'</p>';
                endif;
                ?>
            </a>
            <?php if ( is_front_page() && is_home() ){
                echo '</h1>';
            }
            else{
                echo '</p>';
            }
        endif; ?>
    </div>

    <nav id="site-navigation" class="main-navigation" role="navigation">
        <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
            <?php esc_html_e( 'Primary Menu', 'bizlight' ); ?>
        </button>
        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
    </nav>
</header><!-- #masthead -->
    <?php
    }
    ?>
<?php
}
endif;
add_action( 'bizlight_action_header', 'bizlight_header', 10 );

if( ! function_exists( 'bizlight_add_breadcrumb' ) ) :

/**
 * Breadcrumb
 *
 * @since Bizlight 1.0.0
 *
 * @param null
 * @return null
 *
 */
    function bizlight_add_breadcrumb(){
        global $bizlight_customizer_all_values;
        // Bail if Breadcrumb disabled
        $breadcrumb_enable_breadcrumb = $bizlight_customizer_all_values['bizlight-enable-breadcrumb' ];
        $breadcrumb_type = $bizlight_customizer_all_values['bizlight-breadcrumb-type' ];
        if ( 1 != $breadcrumb_enable_breadcrumb ) {
            return;
        }
        // Bail if Home Page
        if ( is_front_page() || is_home() ) {
            return;
        }
        echo '<div id="breadcrumb"><div class="container">';
        switch ( $breadcrumb_type ) {
            case 'advanced':
                if ( function_exists( 'bcn_display' ) ) {
                    bcn_display();
                }
                else{
                    bizlight_simple_breadcrumb();
                }
                break;
            default:
                bizlight_simple_breadcrumb();
                break;
        }
        //
        echo '</div><!-- .container --></div><!-- #breadcrumb -->';
        return;
    }
endif;
add_action( 'bizlight_action_after_header', 'bizlight_add_breadcrumb', 10 );


