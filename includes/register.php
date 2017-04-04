<?php
    function custom_remove_cpt_slug( $post_link, $post, $leavename ) {
        if(
            ('top_slider' == $post->post_type)
            && 'publish' == $post->post_status
        )
        {
            $post_link = str_replace( '/' . $post->post_type . '/', '/', $post_link );
        }

        return $post_link;
    }
    add_filter( 'post_type_link', 'custom_remove_cpt_slug', 10, 3 );
    function custom_parse_request_tricksy( $query ) {
        if ( ! $query->is_main_query() )
            return;
        if ( 2 != count( $query->query ) || ! isset( $query->query['page'] ) ) {
            return;
        }
        if ( ! empty( $query->query['name'] ) ) {
            $query->set( 'post_type', array( 'post','page' ) );
        }
    }
    add_action( 'pre_get_posts', 'custom_parse_request_tricksy' );
    function create_post_type() {
        register_post_type( 'top_slider',
            array(
                'menu_icon'=>'dashicons-format-image',
                'labels' => array(
                    'name' => __( 'Górny slider'),
                    'singular_name' => __( 'Górny slider'),
                    'add_new' => __('Dodać slide'),
                    'menu_name' => __( 'Górny slider'),
                    'singular_name' => __( 'Górny slider' )
                ),

                'supports' => array( 'title', 'thumbnail'),
                'public' => true,
                'has_archive' => false,
                'rewrite' => array('slug' => 'top_slider')
            )
        );
    }
//    add_action( 'init', 'create_post_type' );
?>