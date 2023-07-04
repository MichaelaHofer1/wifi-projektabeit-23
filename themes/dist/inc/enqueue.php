<?php 

add_action('wp_enqueue_scripts', function(){
        
        $version = wp_get_theme()->get('Version');
    
            wp_enqueue_style('webdev-css', get_template_directory_uri() . '/style.css', '', $version);
            wp_enqueue_style('icons-css', get_template_directory_uri() . '/assets/icons/style.css');
            wp_enqueue_style('baguettebox-css', get_template_directory_uri() . '/assets/css/baguetteBox.css');
            
            wp_enqueue_script('projektarbeit-js', get_template_directory_uri() . '/assets/js/scripts.js', [], $version, true); 
            wp_enqueue_script('baguettebox-js', get_template_directory_uri() . '/assets/js/baguetteBox.js', [], $version, true);          
    
        });