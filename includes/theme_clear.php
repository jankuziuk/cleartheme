<?php
    function my_remove_recent_comments_style() {
        global $wp_widget_factory;
        remove_action( 'wp_head', array( $wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style'  ) );
    }
    function clear_wp_head(){

        // REMOVE EMOJI ICONS
        remove_action('wp_head', 'print_emoji_detection_script', 7);
        remove_action('wp_print_styles', 'print_emoji_styles');

        //remove wordpress info
        remove_action('wp_head', 'feed_links_extra', 3 );
        remove_action('wp_head', 'feed_links', 2 );
        remove_action('wp_head', 'rsd_link' );
        remove_action('wp_head', 'wlwmanifest_link' );
        remove_action('wp_head', 'index_rel_link' );
        remove_action('wp_head', 'parent_post_rel_link', 10, 0 );
        remove_action('wp_head', 'start_post_rel_link', 10, 0 );
        remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0 );
        remove_action('wp_head', 'wp_generator' );

        //remove admin bar
        add_action( 'admin_print_scripts-profile.php', 'hide_admin_bar_prefs' );
        add_filter( 'show_admin_bar', '__return_false' );

        //remove scripts from head and add to footer
        remove_action('wp_head','wp_print_scripts');
        remove_action('wp_head','wp_print_head_scripts',9);
        remove_action('wp_head','wp_enqueue_scripts',1);
        add_action('wp_footer','wp_print_scripts',5);
        add_action('wp_footer','wp_enqueue_scripts',5);
        add_action('wp_footer','wp_print_head_scripts',5);
    }
    add_action('after_setup_theme','clear_wp_head');
    add_action( 'widgets_init', 'my_remove_recent_comments_style' );


    wp_deregister_style('contact-form-7');
    wp_deregister_style('contact-form-7-rtl');
    wp_deregister_style('jquery-ui-smoothness');
?>