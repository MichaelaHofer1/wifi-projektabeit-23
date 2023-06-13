<?php 

add_action('wp_enqueue_scripts', function(){
        
        $version = wp_get_theme()->get('Version');
    
            wp_enqueue_style('webdev-css', get_template_directory_uri() . '/style.css');
            wp_enqueue_style('icons-css', get_template_directory_uri() . '/assets/icons/style.css');
            wp_enqueue_style('lightbox-css', get_template_directory_uri() . '/assets/css/lightbox.min.css');
            
            wp_enqueue_script('projektarbeit-js', get_template_directory_uri() . '/assets/js/scripts.js', [], $version, true);
            
            wp_enqueue_script('lightbox-js', get_template_directory_uri() . '/assets/js/lightbox-plus-jquery.min.js');
    
            
    
        });