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
                include(get_template_directory(  ) . '/template-parts/loops/teaser-gallery-loop.php'); 
            ?>
                        
            <div class="btn-container column">
                <a href="#" class="btn-see-more"></a>
            </div>

        </section>
<?php 
    endif;
?>
