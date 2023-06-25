<?php
    $class_name = 'container';

    if(!empty($block['className'])){
        $class_name .= ' ' . esc_attr($block['className']);
    }
?>
<?php
    $images = get_field('gallery');
?>




<?php if(!empty($images)): ?>


<section  class="<?php echo $class_name; ?>">
    <div class="columns">


    <?php foreach($images['imgs-for-gallery'] as $image):?>

        <?php $key = wp_generate_password(12, false, false); ?>
        <div class="column">
            <?php echo wp_get_attachment_image($image['big-img']); ?>
            <div class="img-description">
                <?php echo $image['short-description']; ?>
            </div>
    </div>

        <input type="checkbox" id="lightbox-toggle<?php echo $key; ?>">
        <label for="lightbox-toggle<?php echo $key; ?>" class="lightbox-button">
            <span class="lightbox-button-icon" aria-hidden="true"></span>
            <span class="screen-reader-text"><?php _e('Lightbox öffnen/schließen', 'mh'); ?></span>
        </label>
    
        <div class="lightbox">
            <div class="lightbox-container">

            <?php 
                if ($image): 
            ?>
            <ul class="imgs-small">
                <li class="detail-img-big select">
                    <?php echo wp_get_attachment_image($image['big-img'], 'large'); ?>
                </li>
                <?php $imageDetail = $image['details']?>
                <?php foreach($imageDetail as $img): ?>
                    <li class="lightbox-small-boxes select">
                        <?php echo wp_get_attachment_image ($img['detail-imgs'], 'large'); ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif ?>
        
            <div class="description">
                <p>
                    <?php echo $image['description']; ?>
                </p>
            </div>
    </div> 

    

</div>

    <?php endforeach; ?>        
                </div>

</section>


   
<?php
    endif;
 ?>
