<?php
    function set_different_post_type_sizes() {
        add_theme_support( 'post-thumbnails' );
        add_image_size('gallery_images', 700,700);
        add_image_size('aboutus-icon', 50, 50);
        //add_image_size('top_slider-big', 400,400,true);
    }
    add_action( 'after_setup_theme', 'set_different_post_type_sizes' );
?>