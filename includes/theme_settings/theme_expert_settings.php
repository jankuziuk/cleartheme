<?php
    function new_excerpt_more($more) {
        global $post;
        return '...';
    }
    function new_excerpt_length($length) {
        return 70;
    }
    add_filter('excerpt_more', 'new_excerpt_more');
    add_filter('excerpt_length', 'new_excerpt_length');
?>