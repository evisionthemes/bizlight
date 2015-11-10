<?php
global $bizlight_sections;
global $bizlight_settings_controls;
global $bizlight_repeated_settings_controls;

/**
 * Returns bizlight_important_links
 *
 * @since Bizlight 1.1.3
 */
if ( ! function_exists( 'bizlight_important_links' ) ) :
    function bizlight_important_links(){
        $important_links = array(
            'theme_docs' => array(
                'link'	=> esc_url( 'http://doc.evisionthemes.com/bizlight/' ),
                'text' 	=> __( 'Theme Documentation', 'bizlight' ),
            ),
            'theme_demo' => array(
                'link'	=> esc_url( 'http://demo.evisionthemes.com/bizlight/' ),
                'text' 	=> __( 'Theme Demo', 'bizlight' ),
            ),
            'theme_author' => array(
                'link'	=> esc_url( 'http://evisionthemes.com/' ),
                'text' 	=> __( 'Theme Author', 'bizlight' ),
            ),
            'support' => array(
                'link'	=> esc_url( 'https://wordpress.org/support/theme/bizlight' ),
                'text' 	=> __( 'Support', 'bizlight' ),
            ),
            'review' => array(
                'link'	=> esc_url( 'https://wordpress.org/support/view/theme-reviews/bizlight' ),
                'text' 	=> __( 'Review', 'bizlight' ),
            ),
            'facebook' => array(
                'link'	=> esc_url( 'https://www.facebook.com/evisionthemes/' ),
                'text' 	=> __( 'Facebook', 'bizlight' ),
            ),
            'twitter' => array(
                'link'	=> esc_url( 'https://twitter.com/evisionthemes' ),
                'text' 	=> __( 'Twitter', 'bizlight' ),
            ),
            'linkedin' => array(
                'link'	=> esc_url( 'https://www.linkedin.com/in/evisionthemes' ),
                'text' 	=> __( 'Linkedin', 'bizlight' ),
            ),
            'gplus' => array(
                'link'	=> esc_url( 'https://plus.google.com/u/0/107886266472533269268/about' ),
                'text' 	=> __( 'Google+', 'bizlight' ),
            ),
            'pinterest' => array(
                'link'	=> esc_url( 'https://www.pinterest.com/evisionthemes/' ),
                'text' 	=> __( 'Pinterest', 'bizlight' ),
            ),
        );
        $important_links_text = '';
        foreach ( $important_links as $important_link) {
            $important_links_text .= '<p><a target="_blank" href="' . $important_link['link'] .'" >' . esc_attr( $important_link['text'] ) .' </a></p>';
        }
        return $important_links_text;
    }
endif;


$bizlight_sections['bizlight-imp-links'] =
    array(
        'priority'       => 200,
        'title'          => __( 'Important Links ', 'bizlight' ),
    );

/*creating setting control for bizlight-imp-links start*/
$bizlight_settings_controls['bizlight-imp-links-copyright'] =
    array(
        'control' => array(
            'label'                 =>  __( 'Copyright text', 'bizlight' ),
            'section'               => 'bizlight-imp-links',
            'type'                  => 'message',
            'priority'              => 2,
            'description'           => bizlight_important_links(),
            'active_callback'       => ''
        )
    );