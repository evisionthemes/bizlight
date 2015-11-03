<?php
if ( ! function_exists( 'bizlight_sidebar' ) ) :
/**
 * Sidebar
 *
 * @since eVision Corporate 1.0.0
 *
 * @param null
 * @return null
 *
 */
function bizlight_sidebar() {
    global $bizlight_customizer_all_values;
    if( isset($bizlight_customizer_all_values['bizlight-layout-page']) ){
        $bizlight_layout_page = $bizlight_customizer_all_values['bizlight-layout-page'];
        if( 'sidebar-no' == $bizlight_layout_page ){
            $bizlight_sidebar_active = 0;
        }
        else {
            $bizlight_sidebar_active = 1;
        }
    }
    else{
        $bizlight_sidebar_active = 1;
    }

    if ( ! is_active_sidebar( 'sidebar-1' ) || 0 == $bizlight_sidebar_active ) {
        return;
    }
    ?>

    <div id="secondary" class="widget-area" role="complementary">
        <?php dynamic_sidebar( 'sidebar-1' ); ?>
    </div><!-- #secondary -->
<?php
}
endif;
add_action( 'bizlight_action_sidebar', 'bizlight_sidebar', 10 );
