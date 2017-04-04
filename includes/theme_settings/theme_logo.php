<?php
    add_theme_support( 'custom-logo', array(
        'height'      => 200,
        'width'       => 500,
        'flex-height' => true,
    ) );

    if ( ! function_exists( 'wp_custom_logo' ) ) {
        function wp_custom_logo(){
            if (function_exists('the_custom_logo')) {
                the_custom_logo();
            }
        }
    }
?>