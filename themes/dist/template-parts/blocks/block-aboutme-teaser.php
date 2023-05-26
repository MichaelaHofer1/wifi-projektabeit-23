<?php
    $class_name = 'about-me';

    if(!empty($block['className'])){
        $class_name .= ' ' . esc_attr($block['className']);
    }
?>


<?php
    $section_aboutme = get_field('aboutme-teaser');
?>


<?php if(!empty($section_aboutme)): ?>

<section  class="<?php echo $class_name; ?>">
    <div class="columns-about-me">
        <?php 
            $headline = $section_aboutme['headline'];
            include(get_template_directory(  ) . '/template-parts/loops/is-style-headline-loop.php');
        ?>

        <div class="column-about-me">
            <div class="about-me-image">
                <?php echo wp_get_attachment_image($section_aboutme['aboutme-img'], 'large'); ?>
            </div>
            <div class="btn-container-about-me column">
                <p>
                    <?php echo $section_aboutme['aboutme-text']; ?>    
                </p>
                <a href="#" class="btn-see-more"></a> 
            </div> 
                        
        </div>
    </div>
</section>
<?php 
    endif;
?>


