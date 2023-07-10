<!--  block momentan inaktiv -> block-header.php -->
<?php
$class_name = '.splide-details';

if (!empty($block['className'])) {
    $class_name .= ' ' . esc_attr($block['className']);
}
?>


<?php
$carousel_details = get_field('header-home');
?>


<?php if (!empty($carousel_details)): ?>

    <section class="<?php echo $class_name; ?>">
        <div class="splide__track carousel-container">
            <?php
            $images = $carousel_details['carousel-imgs'];

            if ($images): ?>
                <ul class="splide__list">
                    <?php foreach ($images as $image_id): ?>
                        <li class="splide__slide">
                            <?php echo wp_get_attachment_image($image_id, 'large'); ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>

        </div>
    </section>

<?php
endif;
?>
