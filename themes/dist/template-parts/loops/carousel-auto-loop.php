<?php 
        if( $images ): ?>
        <ul class="splide__list">
            <?php foreach( $images as $image_id ): ?>
                <li class="splide__slide">
                    <?php echo wp_get_attachment_image($image_id, 'large'); ?>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>




