/*
 * Attaches the image uploader to the input field
 */
jQuery(document).ready(function($){/*color picker*/

    //$( '.bizlight-color-field' ).wpColorPicker();

    // Instantiates the variable that holds the media library frame.
    var meta_image_frame;
    // Runs when the image button is clicked.
    jQuery('body').on('click','.bizlight_media_image_upload', function(e){

        // Prevents the default action from occuring.
        e.preventDefault();

        var media_title = $(this).data('title');
        var media_button = $(this).data('button');
        var media_input_val = $(this).prev();
        var media_image_url = $(this).prev().prev();

        // If the frame already exists, re-open it.
        /*if ( meta_image_frame ) {
            meta_image_frame.open();
            return;
        }*/

        // Sets up the media library frame
        meta_image_frame = wp.media.frames.meta_image_frame = wp.media({
            title: media_title,
            button: { text:  media_button },
            library: { type: 'image' }
        });

        // Runs when an image is selected.
        meta_image_frame.on('select', function(){

            // Grabs the attachment selection and creates a JSON representation of the model.
            var media_attachment = meta_image_frame.state().get('selection').first().toJSON();

            // Sends the attachment URL to our custom image input field.
            media_input_val.val(media_attachment.url);
            if( media_image_url != null ){
                media_image_url.attr( 'src', media_attachment.url );
            }
        });

        // Opens the media library frame.
        meta_image_frame.open();
    });

    // Runs when the image button is clicked.
    jQuery('body').on('click','.bizlight_media_image_remove', function(e){
        $(this).siblings('img').remove();
        $(this).prev().prev().val('');
    });

});