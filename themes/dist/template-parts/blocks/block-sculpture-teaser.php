<?php
    $class_name = 'sculpture-teaser';

    if(!empty($block['className'])){
        $class_name .= ' ' . esc_attr($block['className']);
    }
?>


<?php
    $section_headline_sculptures = get_field('sculpture-teaser');
?>


<?php if(!empty($section_headline_sculptures)): ?>

<section class="<?php echo $class_name; ?>">