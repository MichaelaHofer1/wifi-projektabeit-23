<?php
    $class_name = 'container';

    if(!empty($block['className'])){
        $class_name .= ' ' . esc_attr($block['className']);
    }
?>


<?php
    $gallery = get_field('gallery');
?>


<?php if(!empty($gallery)): ?>

        <section  class="<?php echo $class_name; ?>">
            <?php 
                $images = $gallery['gallery-imgs'];
                $img_description = $gallery['img-description'];
                include(get_template_directory(  ) . '/template-parts/loops/teaser-gallery-loop-array.php'); 
            ?>
        </section>
<?php 
    endif;
?>
