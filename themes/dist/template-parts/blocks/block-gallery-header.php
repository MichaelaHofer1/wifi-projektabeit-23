<!--  Überschrift + Text -->
<?php
    $class_name = 'sculptures-page';

    if(!empty($block['className'])){
        $class_name .= ' ' . esc_attr($block['className']);
    }
?>


<?php
    $gallery_header = get_field('gallery-header');
?>


<?php if(!empty($gallery_header)): ?>

<div class="<?php echo $class_name; ?>">
    <?php 
        $headline = $gallery_header['headline'];
        include(get_template_directory(  ) . '/template-parts/loops/is-style-headline-loop.php');
    ?>
    <p>
        <?php echo $gallery_header['description']; ?>    
    </p>

</div>
<?php 
    endif;
?>
