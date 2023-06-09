<?php 

    add_action('after_setup_theme', function(){

        add_theme_support('title-tag');

        add_theme_support('html5', array(
            'comment-list',
            'comment-form',
            'search-form',
            'gallery',
            'caption',
            'style',
            'script'
        ));

        add_theme_support('custom-logo', array(
            'height' => 100,
            'width' => 100,
            'flex-height' => true,
            'flex-width' => true
        ));

        register_nav_menus(array(
            'primary' => __('Hauptmenü', 'wifi'),
            'footer' => __('Footermenü', 'wifi')
        ));

            
        add_theme_support('editor-styles');
        add_editor_style('assets/css/style-editor.css');
        add_editor_style('assets/icons/style.css');

    });

    add_filter('upload_mimes', function($mimes = array()){
        $mimes['svg'] = 'image/svg+xml';
        $mimes['svgz'] = 'image/svg+xml';
        return $mimes;
    });



    add_action('wp_enqueue_scripts', function(){
        
    $version = wp_get_theme()->get('Version');

        wp_enqueue_style('webdev-css', get_template_directory_uri() . '/style.css');
        wp_enqueue_style('icons-css', get_template_directory_uri() . '/assets/icons/style.css');
        wp_enqueue_style('lightbox-css', get_template_directory_uri() . '/assets/css/lightbox.min.css');
        
        wp_enqueue_script('projektarbeit-js', get_template_directory_uri() . '/assets/js/scripts.js', [], $version, true);
        
        wp_enqueue_script('lightbox-js', get_template_directory_uri() . '/assets/js/lightbox-plus-jquery.min.js');

        

    });


        // Register Custom Post Type
    function post_type_posting() {

        $labels = array(
            'name'                  => _x( 'postings', 'Post Type General Name', 'mh' ),
            'singular_name'         => _x( 'posting', 'Post Type Singular Name', 'mh' ),
            'menu_name'             => __( 'Postings', 'mh' ),
            'name_admin_bar'        => __( 'Post Type', 'mh' ),
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
            'label'                 => __( 'posting', 'mh' ),
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
        register_post_type( 'posting', $args );

    }
    add_action( 'init', 'post_type_posting', 0 );   




    if(function_exists('acf_add_options_page')){

        acf_add_options_page(array(
            'page_title' => 'Theme Einstellungen',
            'menu_title' => 'Theme Einstellungen',
            'menu-slug' => 'projektarbeit-theme-einstellungen',
            'position' => 80,
            'icon_url' => 'dashicons-admin-appearance',
            'update_button' => __('Einstellungen speichern', 'mh'),
            'update_message' => __('Einstellungen wurden gespeichert', 'mh'),
            'capibility' => 'edit_posts'
        ));
    }



    //ACF Blöcke
    add_action('acf/init', function(){

        if(function_exists('acf_register_block_type')){

            acf_register_block_type(array(
                'name' => 'projektarbeit-header',
                'title' => __('header', 'mh'),
                'description' => __('Das ist der Headerbereich', 'mh'),
                'supports' => array('anchor' => false), 
                'category' => 'mh',
                'keywords' => array('header', 'mh', 'kopfbereich'),
                'post_type' => array('page'),
                'align' => false,
                'mode' => false,
                'icon' =>'welcome-widgets-menus',
                'render_template' => 'template-parts/blocks/block-header.php',                
                'enqueue_assets' => function(){
                    wp_enqueue_style('splideCss', get_template_directory_uri() . '/assets/css/splide.min.css');
                    wp_enqueue_script('splideMain', get_template_directory_uri() . '/assets/js/splide.min.js');
                    wp_enqueue_script('splideConfig', get_template_directory_uri() . '/assets/js/splideConfig.js');
                }
             ));
        }

        
        if(function_exists('acf_register_block_type')){

            acf_register_block_type(array(
                'name' => 'gallery teaser',
                'title' => __('gallery-teaser', 'mh'),
                'description' => __('Das ist der Galerie Teaser-Bereich', 'mh'),
                'supports' => array('anchor' => false), 
                'category' => 'mh',
                'keywords' => array('section', 'mh', 'skulpturen'),
                'post_type' => array('page'),
                'align' => false,
                'mode' => false,
                'icon' =>'welcome-widgets-menus',
                'render_template' => 'template-parts/blocks/block-gallery-teaser.php'
             ));
        }

        if(function_exists('acf_register_block_type')){

            acf_register_block_type(array(
                'name' => 'about-me teaser',
                'title' => __('about-me-teaser', 'mh'),
                'description' => __('Das ist der "Über mich" Teaser-Bereich', 'mh'),
                'supports' => array('anchor' => false), 
                'category' => 'mh',
                'keywords' => array('section', 'mh', 'über mich'),
                'post_type' => array('page'),
                'align' => false,
                'mode' => false,
                'icon' =>'welcome-widgets-menus',
                'render_template' => 'template-parts/blocks/block-aboutme-teaser.php'
             ));
        }

        if(function_exists('acf_register_block_type')){

            acf_register_block_type(array(
                'name' => 'gallery-header',
                'title' => __('gallery-header', 'mh'),
                'description' => __('Das ist der Headerbereich von Galerien', 'mh'),
                'supports' => array('anchor' => false), 
                'category' => 'mh',
                'keywords' => array('section', 'mh', 'Galerie'),
                'post_type' => array('page'),
                'align' => false,
                'mode' => false,
                'icon' =>'welcome-widgets-menus',
                'render_template' => 'template-parts/blocks/block-gallery-header.php'
             ));
        }

        if(function_exists('acf_register_block_type')){

            acf_register_block_type(array(
                'name' => 'gallery',
                'title' => __('gallery', 'mh'),
                'description' => __('Das ist der Galeriebereich', 'mh'),
                'supports' => array('anchor' => false), 
                'category' => 'mh',
                'keywords' => array('section', 'mh', 'Galerie'),
                'post_type' => array('page'),
                'align' => false,
                'mode' => false,
                'icon' =>'welcome-widgets-menus',
                'render_template' => 'template-parts/blocks/block-gallery.php'
             ));
        }

        
        if(function_exists('acf_register_block_type')){

            acf_register_block_type(array(
                'name' => 'carousel-auto',
                'title' => __('carousel-auto', 'mh'),
                'description' => __('Das ist ein Karusell', 'mh'),
                'supports' => array('anchor' => false), 
                'category' => 'mh',
                'keywords' => array('section', 'mh', 'carousel'),
                'post_type' => array('page'),
                'align' => false,
                'mode' => false,
                'icon' =>'welcome-widgets-menus',
                'render_template' => 'template-parts/blocks/block-carousel-auto.php',
                'enqueue_assets' => function(){
                    wp_enqueue_style('splideCss', get_template_directory_uri() . '/assets/css/splide.min.css');
                    wp_enqueue_script('splideMain', get_template_directory_uri() . '/assets/js/splide.min.js');
                    wp_enqueue_script('splideConfig', get_template_directory_uri() . '/assets/js/splideConfig.js');
                }
             ));
        }

        /*
        if(function_exists('acf_register_block_type')){

            acf_register_block_type(array(
                'name' => 'carousel-details',
                'title' => __('Karusell-Header (Details)', 'mh'),
                'description' => __('Das ist ein Karusell', 'mh'),
                'supports' => array('anchor' => false), 
                'category' => 'mh',
                'keywords' => array('section', 'mh', 'carousel'),
                'post_type' => array('page'),
                'align' => false,
                'mode' => false,
                'icon' =>'welcome-widgets-menus',
                'render_template' => 'template-parts/blocks/block-carousel-details.php',
                'enqueue_assets' => function(){
                    wp_enqueue_style('splideCss', get_template_directory_uri() . '/assets/css/splide.min.css');
                    wp_enqueue_script('splideMain', get_template_directory_uri() . '/assets/js/splide.min.js');
                    wp_enqueue_script('splideConfig', get_template_directory_uri() . '/assets/js/splideConfig.js');
                }
             ));
        }
        */

        if(function_exists('acf_register_block_type')){

            acf_register_block_type(array(
                'name' => 'about-me-header',
                'title' => __('Über mich Kopfbereich', 'mh'),
                'description' => __('Das ist der Kopfbereich der "Über mich" Seite', 'mh'),
                'supports' => array('anchor' => false), 
                'category' => 'mh',
                'keywords' => array('section', 'mh', 'Über mich'),
                'post_type' => array('page'),
                'align' => false,
                'mode' => false,
                'icon' =>'welcome-widgets-menus',
                'render_template' => 'template-parts/blocks/block-about-me-header.php'
             ));
        }

        if(function_exists('acf_register_block_type')){

            acf_register_block_type(array(
                'name' => 'about-me-lists',
                'title' => __('Über mich Aufzählungen', 'mh'),
                'description' => __('Das ist der Inhaltsbereich der "Über mich" Seite', 'mh'),
                'supports' => array('anchor' => false), 
                'category' => 'mh',
                'keywords' => array('section', 'mh', 'Über mich'),
                'post_type' => array('page'),
                'align' => false,
                'mode' => false,
                'icon' =>'welcome-widgets-menus',
                'render_template' => 'template-parts/blocks/block-about-me-lists.php'
             ));
        }



    });
    
    



?>