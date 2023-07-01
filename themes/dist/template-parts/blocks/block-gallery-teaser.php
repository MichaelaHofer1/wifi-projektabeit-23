<?php
    $class_name = '';

    if(!empty($block['className'])){
        $class_name .= ' ' . esc_attr($block['className']);
    }
?>


<?php
    $section_headline_sculptures = get_field('gallery-teaser');
?>


<?php if(!empty($section_headline_sculptures)): ?>

        <section  class="<?php echo $class_name; ?>">
            <?php 
                $headline = $section_headline_sculptures['headline'];
                include(get_template_directory(  ) . '/template-parts/loops/is-style-headline-loop.php');
            ?>

            <?php 
                $images = $section_headline_sculptures['gallery'];
                    if( $images ): ?>
                    <ul class="columns teaser">
                    <?php foreach( $images as $image_id ): ?>
                        <li class="column-home">
                                <?php echo wp_get_attachment_image( $image_id, 'large' );?>
                        </li>
                    <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
                        
            <div class="btn-container column-home">
                <?php 
                $link = $section_headline_sculptures['btn-more'];
                    if( $link ): ?>
                        <a class="btn-see-more" href="<?php echo esc_url( $link ); ?>"></a>
                <?php endif; ?>
            </div>

            

        </section>
<?php 
    endif;
?>
