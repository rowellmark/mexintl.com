<?php
if ( !class_exists( 'AIOSGoogleTranslator' ) ) {

    class AIOSGoogleTranslator {
        public function __construct() {
            add_action( 'wp_enqueue_scripts', array( $this, 'uiux_scripts' ), 11 );
        }

        public function uiux_scripts() {
            // for CSS
            $stylesheets = array(
                'aios-google-translator-style' => get_stylesheet_directory_uri() . '/modules/ai-google-translator/css/style.css',

            );
            foreach ( $stylesheets as $handle => $src ) {
                wp_enqueue_style( $handle, $src, array(), null, 'all' );
            }
	
            // for JS
            $scripts = array(
                'jquery-google-translate-script' => get_stylesheet_directory_uri() . '/modules/ai-google-translator/js/jquery.google-translate.js',
                'aios-google-translator-script' => get_stylesheet_directory_uri() . '/modules/ai-google-translator/js/scripts.js',
            );
            foreach ( $scripts as $handle => $src ) {
                wp_enqueue_script( $handle, $src, array(), false, true );
            }
        }
    }
}
$AIOSGoogleTranslator = new AIOSGoogleTranslator();