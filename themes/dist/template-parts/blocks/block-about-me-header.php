<?php
    $class_name = '';

    if(!empty($block['className'])){
        $class_name .= ' ' . esc_attr($block['className']);
    }
?>


<?php
    $section_aboutmeheader = get_field('about-me-header');
?>


<?php if(!empty($section_aboutmeheader)): ?>

<section  class="<?php echo $class_name; ?>">
    <div class="sculptures-page">
        <?php 
            $headline = $section_aboutmeheader['headline'];
            include(get_template_directory(  ) . '/template-parts/loops/is-style-headline-loop.php');
        ?>
        <div class="about-me-img about-me-image">
            <?php echo wp_get_attachment_image($section_aboutmeheader['profile-pic'], 'large'); ?>
        </div>
    </div>
</section>
<?php 
    endif;
?>


