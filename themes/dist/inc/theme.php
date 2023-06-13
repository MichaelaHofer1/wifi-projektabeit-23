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
