<?php

// Register Custom Post Type
    function post_type_projekt() {

        $labels = array(
            'name'                  => _x( 'Projekte', 'Post Type General Name', 'mh' ),
            'singular_name'         => _x( 'Projekt', 'Post Type Singular Name', 'mh' ),
            'menu_name'             => __( 'Projekte', 'mh' ),
            'name_admin_bar'        => __( 'Projekt Type', 'mh' ),
            'archives'              => __( 'Item Archives', 'mh' ),
            'attributes'            => __( 'Item Attributes', 'mh' ),
            'parent_item_colon'     => __( 'Parent Item:', 'mh' ),
            'all_items'             => __( 'All Items', 'mh' ),
            'add_new_item'          => __( 'Add New Item', 'mh' ),
            'add_new'               => __( 'Add New', 'mh' ),
            'new_item'              => __( 'New Item', 'mh' ),
            'edit_item'             => __( 'Edit Item', 'mh' ),
            'update_item'           => __( 'Update Item', 'mh' ),
            'view_item'             => __( 'View Item', 'mh' ),
            'view_items'            => __( 'View Items', 'mh' ),
            'search_items'          => __( 'Search Item', 'mh' ),
            'not_found'             => __( 'Not found', 'mh' ),
            'not_found_in_trash'    => __( 'Not found in Trash', 'mh' ),
            'featured_image'        => __( 'Featured Image', 'mh' ),
            'set_featured_image'    => __( 'Set featured image', 'mh' ),
            'remove_featured_image' => __( 'Remove featured image', 'mh' ),
            'use_featured_image'    => __( 'Use as featured image', 'mh' ),
            'insert_into_item'      => __( 'Insert into item', 'mh' ),
            'uploaded_to_this_item' => __( 'Uploaded to this item', 'mh' ),
            'items_list'            => __( 'Items list', 'mh' ),
            'items_list_navigation' => __( 'Items list navigation', 'mh' ),
            'filter_items_list'     => __( 'Filter items list', 'mh' ),
        );
        $args = array(
            'label'                 => __( 'projekt', 'mh' ),
            'description'           => __( 'single Artwork', 'mh' ),
            'labels'                => $labels,
            'supports'              => array( 'title', 'editor' ),
            'taxonomies'            => array( 'category', 'post_tag' ),
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 5,
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'capability_type'       => 'page',
        );
        register_post_type( 'projekt', $args );

    }
    add_action( 'init', 'post_type_projekt', 0 );   
