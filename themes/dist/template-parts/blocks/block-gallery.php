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
                include(get_template_directory(  ) . '/template-parts/teaser-gallery-loop.php'); 
            ?>
        </section>
<?php 
    endif;
?>
