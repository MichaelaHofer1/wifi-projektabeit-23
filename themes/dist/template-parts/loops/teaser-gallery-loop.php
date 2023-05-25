<?php 
        if( $images ): ?>
        <ul class="columns">
        <?php foreach( $images as $image_id ): ?>
            <li class="column">
                    <?php echo wp_get_attachment_image( $image_id, 'large' ); ?>
                    <div class="img-description">Titel, Jahr, Größe </div>
            </li>
        <?php endforeach; ?>
        </ul>
    <?php endif; ?>
