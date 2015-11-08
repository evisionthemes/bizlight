<?php
add_action( 'tgmpa_register', 'bizlight_recommended_plugins' );

if( ! function_exists( 'bizlight_recommended_plugins' ) ) :

  /**
   * Recommended plugins
   *
   * @since  Evision Corporate 1.0.0
   */
  function bizlight_recommended_plugins(){
      $bizlight_plugins = array(
          array(
              'name'     => __( 'Contact Form 7', 'bizlight' ),
              'slug'     => 'contact-form-7',
              'required' => false,
          )
      );
      $bizlight_plugins_config = array(
          'dismissable' => true,
      );
      tgmpa( $bizlight_plugins, $bizlight_plugins_config );
  }
endif;