<?php
    $class_name = '';

    if(!empty($block['className'])){
        $class_name .= ' ' . esc_attr($block['className']);
    }
?>


<?php
    $singleBeitrag = get_field('beitrag');
?>


<?php if(!empty($singleBeitrag)): ?>

        <section  class="<?php echo $class_name; ?>">
            <p class="datum">
                <?php echo $singleBeitrag['duration']; ?>
            </p>
            <p>
                <?php echo $singleBeitrag['description'];?>
            </p>

            <?php $images = $singleBeitrag['pictures']; ?>
                 <!-- include(get_template_directory(  ) . '/template-parts/loops/teaser-gallery-loop.php'); -->

                 <?php
                    if( $images ): ?>
                    <ul class="columns">
                    <?php foreach( $images as $image_id ): ?>
                        <li class="column">
                            <?php echo wp_get_attachment_image( $image_id, 'large' );?>     
                        
                            <!-- <div class="img-description"> <?php // echo $img_description; ?></div> -->
                        </li>
                    <?php endforeach; ?>
                    </ul>
                <?php endif; ?>

        </section>
<?php 
    endif;
?>
