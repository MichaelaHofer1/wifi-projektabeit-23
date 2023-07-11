<?php
if(function_exists('acf_add_options_page')){
    add_filter('acf/settings/save_json', function($path){
        $path = get_template_directory() . '/acf-fields';
        return $path;
    });
    
    add_filter('acf/settings/load_json', function($paths){
        unset($paths[0]);
        $paths[] = get_template_directory(  ) . '/acf-fields';
        return $paths;
    });
    
    

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
            wp_enqueue_style('splideCss', get_template_directory_uri() . '/assets/css/slider.css');
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
        'render_template' => 'template-parts/blocks/block-gallery.php',
        'enqueue_assets' => function(){
            wp_enqueue_style('splideCss', get_template_directory_uri() . '/assets/css/slider.css');
            wp_enqueue_script('lightbox', get_template_directory_uri() . '/assets/js/lightbox.js');
        }
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
        }
     ));
}



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


if(function_exists('acf_register_block_type')){

    acf_register_block_type(array(
        'name' => 'lightbox',
        'title' => __('lightbox', 'mh'),
        'description' => __('Das ist die Detailansicht in einer Lightbox', 'mh'),
        'supports' => array('anchor' => false), 
        'category' => 'mh',
        'keywords' => array('section', 'mh', 'lightbox'),
        'post_type' => array('page'),
        'align' => false,
        'mode' => false,
        'icon' =>'welcome-widgets-menus',
        'render_template' => 'template-parts/blocks/block-lightbox.php'
     ));
}



if(function_exists('acf_register_block_type')){

    acf_register_block_type(array(
        'name' => 'Beiträge Vorschau',
        'title' => __('Beiträge', 'mh'),
        'description' => __('Das ist die Vorschau/Übersicht von den Beiträgen', 'mh'),
        'supports' => array('anchor' => false), 
        'category' => 'mh',
        'keywords' => array('posts', 'mh', 'beiträge'),
        'post_type' => array('page'),
        'align' => false,
        'mode' => false,
        'icon' =>'welcome-widgets-menus',
        'render_template' => 'template-parts/blocks/block-beitraege.php'
     ));
}


    if(function_exists('acf_register_block_type')){

        acf_register_block_type(array(
            'name' => 'Link',
            'title' => __('Link', 'mh'),
            'description' => __('Das ist ein Link', 'mh'),
            'supports' => array('anchor' => false),
            'category' => 'mh',
            'keywords' => array('post', 'mh', 'link'),
            'post_type' => array('page'),
            'align' => false,
            'mode' => false,
            'icon' =>'welcome-widgets-menus',
            'render_template' => 'template-parts/blocks/block-link.php'
        ));
    }


if(function_exists('acf_register_block_type')){

    acf_register_block_type(array(
        'name' => 'aktuelles',
        'title' => __('aktuelles', 'mh'),
        'description' => __('Das sind die aktuellen Neuigkeiten', 'mh'),
        'supports' => array('anchor' => false), 
        'category' => 'mh',
        'keywords' => array('new', 'mh', 'aktell'),
        'post_type' => array('page'),
        'align' => false,
        'mode' => false,
        'icon' =>'welcome-widgets-menus',
        'render_template' => 'template-parts/blocks/block-current-news.php'
     ));
}

});



