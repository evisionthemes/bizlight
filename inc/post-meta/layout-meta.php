<?php
/**
 * bizlight Custom Metabox
 *
 * @package bizlight
 */
$bizlight_post_types = array(
    'post',
    'page'
);

add_action('add_meta_boxes', 'bizlight_add_layout_metabox');
function bizlight_add_layout_metabox() {
    global $post;
    $frontpage_id = get_option('page_on_front');
    if( $post->ID == $frontpage_id ){
        return;
    }

    global $bizlight_post_types;
    foreach ( $bizlight_post_types as $post_type ) {
        add_meta_box(
            'bizlight_layout_options', // $id
            __( 'Layout options', 'bizlight' ), // $title
            'bizlight_layout_options_callback', // $callback
            $post_type, // $page
            'normal', // $context
            'high'// $priority
        );
    }

}

/* bizlight sidebar layout */
$bizlight_default_layout_options = array(
    'left-sidebar' => array(
        'value'     => 'left-sidebar',
        'thumbnail' => get_template_directory_uri() . '/inc/images/left-sidebar.png'
    ),
    'right-sideabr' => array(
        'value' => 'right-sideabr',
        'thumbnail' => get_template_directory_uri() . '/inc/images/right-sidebar.png'
    ),
    'both-sidebar' => array(
        'value' => 'both-sidebar',
        'thumbnail' => get_template_directory_uri() . '/inc/images/both-sidebar.png'
    ),
    'no-sidebar' => array(
        'value'     => 'no-sidebar',
        'thumbnail' => get_template_directory_uri() . '/inc/images/no-sidebar.png'
    )
);
/* bizlight featured layout */
$bizlight_single_post_image_align_options = array(
    'full' => array(
        'value' => 'full',
        'label' => __( 'Full', 'bizlight' )
    ),
    'right' => array(
        'value' => 'right',
        'label' => __( 'Right ', 'bizlight' ),
    ),
    'left' => array(
        'value'     => 'left',
        'label' => __( 'Left', 'bizlight' ),
    ),
    'no-image' => array(
        'value'     => 'no-image',
        'label' => __( 'No Image', 'bizlight' )
    )
);

function bizlight_layout_options_callback() {

    global $post , $bizlight_default_layout_options, $bizlight_single_post_image_align_options;
    $bizlight_customizer_saved_values = bizlight_get_all_options(1);

    /*default banner image*/
    $bizlight_banner_image = $bizlight_customizer_saved_values['bizlight-default-banner-image'];

    /*bizlight default layout*/
    if( isset ( $bizlight_customizer_saved_values['bizlight-default-layout'] ) && !empty( $bizlight_customizer_saved_values['bizlight-default-layout'] )) {
        $bizlight_single_sidebar_layout = $bizlight_customizer_saved_values['bizlight-default-layout'];
    }
    else{
        $bizlight_single_sidebar_layout = 'right-sideabr';
    }

    /*bizlight-single-post-image-align*/
    if( isset ( $bizlight_customizer_saved_values['bizlight-single-post-image-align'] ) && !empty( $bizlight_customizer_saved_values['bizlight-single-post-image-align'] )) {
        $bizlight_single_post_image_align = $bizlight_customizer_saved_values['bizlight-single-post-image-align'];
    }
    else{
        $bizlight_single_post_image_align = 'full';
    }
    wp_nonce_field( basename( __FILE__ ), 'bizlight_layout_options_nonce' );
    ?>
    <style>
        .hide-radio{
            position: relative;
            margin-bottom: 6px;
        }

        .hide-radio img, .hide-radio label{
            display: block;
        }

        .hide-radio input[type="radio"]{
            position: absolute;
            left: 50%;
            top: 50%;
            opacity: 0;
        }

        .hide-radio input[type=radio] + label {
            border: 3px solid #F1F1F1;
        }

        .hide-radio input[type=radio]:checked + label {
            border: 3px solid #CCC;
        }
    </style>
    <table class="form-table page-meta-box">
        <!--Image alignment-->
        <tr>
            <td colspan="4"><?php _e( 'Banner Image', 'bizlight' ); ?></td>
        </tr>
        <tr>
            <td>
                <label for="bizlight_banner_image">
                    <?php _e( 'Select Banner Image', 'bizlight' ); ?>
                </label>
                <?php
                if(!empty(get_post_meta( $post->ID, 'bizlight-banner-image', true ))){
                    $bizlight_banner_image = get_post_meta( $post->ID, 'bizlight-banner-image', true );
                }
                if(!empty( $bizlight_banner_image )){
                    ?>
                    <img class="bizlight-banner-image widefat" src="<?php echo esc_url( $bizlight_banner_image ); ?>" />
                    <?php
                }
                ?>
                <input type="text" class="widefat bizlight_widget_image" name="bizlight-banner-image" id="bizlight-banner-image" value="<?php echo esc_url( $bizlight_banner_image ); ?>" />
                <input type="button" value="<?php _e( 'Upload Image', 'bizlight' ); ?>" class="button bizlight_media_image_upload" data-title="<?php _e( 'Banner image','bizlight'); ?>" data-button="<?php _e( 'Select banner image','bizlight'); ?>"/>
                <input type="button" value="<?php _e( 'Remove Image', 'bizlight' ); ?>" class="button bizlight_media_image_remove" data-title="<?php _e( 'Banner image','bizlight'); ?>" data-button="<?php _e( 'Select banner image','bizlight'); ?>"/>
            </td>
        </tr>

        <tr>
            <td colspan="4"><em class="f13"><?php _e( 'Choose Sidebar Template', 'bizlight' ); ?></em></td>
        </tr>

        <tr>
            <td>
                <?php
                if(!empty(get_post_meta( $post->ID, 'bizlight-default-layout', true ))){
                    $bizlight_single_sidebar_layout = get_post_meta( $post->ID, 'bizlight-default-layout', true );
                }
                foreach ($bizlight_default_layout_options as $field) {
                    ?>
                    <div class="hide-radio radio-image-wrapper" style="float:left; margin-right:30px;">
                        <input id="<?php echo $field['value']; ?>" type="radio" name="bizlight-default-layout" value="<?php echo $field['value']; ?>" <?php checked( $field['value'], $bizlight_single_sidebar_layout ); if(empty($bizlight_single_sidebar_layout) && $field['value']== $bizlight_single_sidebar_layout ){ echo "checked='checked'";} ?>/>
                        <label class="description" for="<?php echo $field['value']; ?>">
                            <img src="<?php echo esc_url( $field['thumbnail'] ); ?>" alt="" />
                        </label>
                    </div>
                <?php } // end foreach
                ?>
                <div class="clear"></div>
            </td>
        </tr>
        <tr>
            <td><em class="f13"><?php _e( 'You can set up the sidebar content', 'bizlight' ); ?> <a href="<?php echo admin_url('/widgets.php'); ?>"><?php _e( 'here', 'bizlight' ); ?></a></em></td>
        </tr>

        <!--Image alignment-->
        <tr>
            <td colspan="4"><?php _e( 'Featured Image alignment', 'bizlight' ); ?></td>
        </tr>
        <tr>
            <td>
                <?php
                if(!empty(get_post_meta( $post->ID, 'bizlight-single-post-image-align', true ))){
                    $bizlight_single_post_image_align = get_post_meta( $post->ID, 'bizlight-single-post-image-align', true );
                }
                foreach ($bizlight_single_post_image_align_options as $field) {
                    ?>
                    <input id="<?php echo $field['value']; ?>" type="radio" name="bizlight-single-post-image-align" value="<?php echo $field['value']; ?>" <?php checked( $field['value'], $bizlight_single_post_image_align ); if(empty($bizlight_single_post_image_align) && $field['value']== $bizlight_single_post_image_align ){ echo "checked='checked'";} ?>/>
                    <label class="description" for="<?php echo $field['value']; ?>">
                        <?php echo esc_html( $field['label'] ); ?>
                    </label>
                <?php } // end foreach
                ?>
                <div class="clear"></div>
            </td>
        </tr>
    </table>

<?php }

/**
 * save the custom metabox data
 * @hooked to save_post hook
 */
function bizlight_save_sidebar_layout( $post_id ) {
    // Verify the nonce before proceeding.
    if ( !isset( $_POST[ 'bizlight_layout_options_nonce' ] ) || !wp_verify_nonce( $_POST[ 'bizlight_layout_options_nonce' ], basename( __FILE__ ) ) ) {
        return;
    }

    // Stop WP from clearing custom fields on autosave
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }

    if ( !current_user_can( 'edit_page', $post_id ) ) {
        return $post_id;
    }

    if(isset($_POST['bizlight-default-layout'])){
        $old = get_post_meta( $post_id, 'bizlight-default-layout', true);
        $new = sanitize_text_field($_POST['bizlight-default-layout']);
        if ($new && $new != $old) {
            update_post_meta($post_id, 'bizlight-default-layout', $new);
        } elseif ('' == $new && $old) {
            delete_post_meta($post_id,'bizlight-default-layout', $old);
        }
    }


    /*image layout bizlight-banner-image*/
    if(isset($_POST['bizlight-single-post-image-align'])){
        $old = get_post_meta( $post_id, 'bizlight-single-post-image-align', true);
        $new = sanitize_text_field($_POST['bizlight-single-post-image-align']);
        if ($new && $new != $old) {
            update_post_meta($post_id, 'bizlight-single-post-image-align', $new);
        } elseif ('' == $new && $old) {
            delete_post_meta($post_id,'bizlight-single-post-image-align', $old);
        }
    }

    /*image layout*/
    if(isset($_POST['bizlight-banner-image'])){
        $old = get_post_meta( $post_id, 'bizlight-banner-image', true);
        $new = sanitize_text_field($_POST['bizlight-banner-image']);
        if ($new && $new != $old) {
            update_post_meta($post_id, 'bizlight-banner-image', $new);
        } elseif ('' == $new && $old) {
            delete_post_meta($post_id,'bizlight-banner-image', $old);
        }
    }


}
add_action('save_post', 'bizlight_save_sidebar_layout');

function bizlight_image_upload_scripts() {
    wp_enqueue_media();
    wp_enqueue_script('bizlight-script', get_template_directory_uri(). '/inc/post-meta/image-upload.js', array('jquery'), '1.0', true);
}
add_action('admin_enqueue_scripts', 'bizlight_image_upload_scripts');
