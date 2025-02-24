<!-- nicht in Verwendung -> Galerie und Lightbox ein Block in block-gallery.php -->
<?php

$anchor = '';
if (!empty($block['anchor'])) {
    $anchor = 'id="' . esc_attr($block['anchor']) . '"';
}


$class_name = 'header-content';
if (!empty($block['className'])) {
    $class_name .= ' ' . esc_attr($block['className']);
}
?>





<?php
$lightbox = get_field('lightbox')
?>

<?php if (!empty($lightbox)): ?>


    <div id="lightbox-info">
        <input type="checkbox" id="lightbox-toggle">
        <label for="lightbox-toggle" id="lightbox-button">
            <span id="lightbox-button-icon" aria-hidden="true"></span>
            <span class="screen-reader-text"><?php _e('Lightbox öffnen/schließen', 'mh'); ?></span>
        </label>
        <div id="lightbox">
            <div class="lightbox-container">
                <!-- <div id="img-big">
                <?php // echo wp_get_attachment_image($lightbox['big-img'] ); ?>
            </div>
            -->

                <?php
                $images = $lightbox['details'];
                if ($images):
                    ?>
                    <!-- <div class="details"> -->
                    <ul class="imgs-small">
                        <li class="detail-img-big select">
                            <?php echo wp_get_attachment_image($lightbox['big-img']); ?>
                        </li>
                        <?php foreach ($images as $image): ?>
                            <li class="lightbox-small-boxes select">
                                <?php echo wp_get_attachment_image($image['detail-imgs'], 'large'); ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif ?>

                <div class="description">
                    <p>
                        <?php echo $lightbox['description']; ?>
                    </p>
                </div>

            </div>
        </div>
    </div>

<?php
endif;
?>