<?php
    $class_name = '.splide-details';

    if(!empty($block['className'])){
        $class_name .= ' ' . esc_attr($block['className']);
    }
?>


<?php
    $carousel_details = get_field('header-home');
?>


<?php if(!empty($carousel_details)): ?>

    <section  class="<?php echo $class_name; ?>">
        <div class="splide__track carousel-container">
            <?php 
                $images = $carousel['carousel-imgs'];
                include(get_template_directory()  . '/template-parts/loops/carousel-auto-loop.php' );
            ?>
        </div>
    </section>
    
<?php 
    endif;
?>
