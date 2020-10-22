<?php

    function register_resource() {
        register_nav_menu('main-menu', 'Main Menu');

        //--- Register Section ---//
        $args = array(
            'public'    => true,
            'label'     => 'Sections',
        );
        register_post_type( 'section', $args );

        //--- Custom Section Taxonomy ---//
        $args = array(
            'label'        => 'Type',
            'public'       => true,
            'hierarchical' => true,
            'show_in_nav_menus' => true,
        );
        register_taxonomy( 'type', 'section', $args );

        //--- Register Experience ---//
        $args = array(
            'public'    => true,
            'label'     => 'Experience',
        );
        register_post_type( 'experience', $args );

    }
    add_action( 'init', 'register_resource' );

    function add_class_to_li( $classes, $item, $args ) {
    
        $classes[] = 'nav-item';
        return $classes;
    }
    add_filter( 'nav_menu_css_class' , 'add_class_to_li' , 10, 4 );

    function add_class_to_anchors( $atts ) {
        $atts['class'] = 'nav-link';
    
        return $atts;
    }
    add_filter( 'nav_menu_link_attributes', 'add_class_to_anchors', 10 );

?>