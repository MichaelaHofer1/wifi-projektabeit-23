<figure class="project">
    <a href="<?php echo esc_url(get_permalink()); ?>">
        <?php
            $projekt_image = get_field('single-project');
                            
            if($projekt_image)                
                echo $projekt_image['headline'];
                echo $projekt_image['text'];  

            ?>
            
            <?php $images = $projekt_image['pictures']; ?>
            
                <ul class="columns">
                <?php foreach( $images as $image_id ): ?>
                    <li class="column">
                            <?php echo wp_get_attachment_image( $image_id, 'large' );?>
                    </li>
                <?php endforeach; ?>
                </ul>
      

    </a>
    <figcaption class="project-caption">
        <h3 class="project-title">
            <a href="<?php echo esc_url(get_permalink()); ?>"><?php the_title(); ?></a>
        </h3>
    </figcaption>
</figure>