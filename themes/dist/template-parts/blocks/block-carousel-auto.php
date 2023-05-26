<?php
    $class_name = 'splide carousel-sculptures';

    if(!empty($block['className'])){
        $class_name .= ' ' . esc_attr($block['className']);
    }
?>


<?php
    $carousel = get_field('carousel-auto');
?>


<?php if(!empty($carousel)): ?>

    <section  class="<?php echo $class_name; ?>">
        <div class="splide__track carousel-container">
            <?php 
                $images = $carousel['carousel-auto-fast'];
                include(get_template_directory()  . '/template-parts/loops/carousel-auto-loop.php' );
            ?>
        </div>
        <p>
            <?php echo $carousel['carousel-description']; ?>
        </p>




    </section>


<?php 
    endif;
?>
