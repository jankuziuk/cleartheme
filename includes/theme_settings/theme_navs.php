<?php
    function registerNav(){
        register_nav_menus(array(
            'primary' => 'Primary menu'
        ));
    }
    add_action( 'after_setup_theme', 'registerNav' );
?>