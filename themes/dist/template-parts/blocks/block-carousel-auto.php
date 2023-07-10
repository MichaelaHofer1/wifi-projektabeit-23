<!-- gibt einen Splide Slider-Karusell, dass immer nur ein Bild anzeigt und häufig wechselt
 (gedacht für Skulpturen-Seite, schwarz-weißes Leinwandobjekt ) -->

<?php
$class_name = 'splide carousel-sculptures';

if (!empty($block['className'])) {
    $class_name .= ' ' . esc_attr($block['className']);
}
?>


<?php
$carousel = get_field('carousel-auto');
?>


<?php if (!empty($carousel)): ?>

    <section class="<?php echo $class_name; ?>" id="splide-sculptures">
        <div class="splide__track carousel-container">
            <?php
            $images = $carousel['carousel-auto-fast'];

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
        <p>
            <?php echo $carousel['carousel-description']; ?>
        </p>
    </section>

<?php
endif;
?>
