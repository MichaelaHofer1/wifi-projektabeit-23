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
            'secondary' => __('Untermenü', 'wifi')
        ));

    });

    add_filter('upload_mimes', function($mimes = array()){
        $mimes['svg'] = 'image/svg+xml';
        $mimes['svgz'] = 'image/svg+xml';
        return $mimes;
    });



    add_action('wp_enqueue_scripts', function(){

        wp_enqueue_style('webdev-css', get_template_directory_uri() . '/style.css');
        wp_enqueue_style('icons-css', get_template_directory_uri() . '/assets/icons/style.css');
        
        

    });







?>