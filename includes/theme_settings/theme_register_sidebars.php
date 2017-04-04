<?php
    function registerBlocks(){
        register_sidebar(array( // register left sidebar, this block may be repeat to add other sidebars
            'name' => 'Footer newsletter', // displaying name in admin panel
            'id' => "footer-newsletter", // identificator for calling sidebar in sidebar.php or another templates
            'description' => 'Footer newsletter', // displaying description in admin panel
            'before_widget' => '<div id="%1$s" class="widget %2$s">', // markup before any widget
            'after_widget' => "</div>\n", // markup after any widget
            'before_title' => '<span class="widgettitle">', // markup before any title in widget
            'after_title' => "</span>\n", // markup after any title in widget
        ));
    }
    add_action( 'after_setup_theme', 'registerBlocks' );
?>