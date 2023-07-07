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


        <?php $counter = 0; ?>

        <?php foreach($images['imgs-for-gallery'] as $image):?>


            <div class="column" data-id="<?php echo $counter;?>" id="image-<?php echo $counter; ?>">
                <?php echo wp_get_attachment_image($image['big-img'], 'large'); ?>
                <div class="img-description">
                    <?php echo $image['short-description']; ?>
                </div>
        </div>

        <?php $counter ++; ?>
        <?php endforeach; ?>


        
    
    
    <div id="lightbox" class="splide-lightbox lightbox">
        
    <div id="close-btn"></div>

        <div class="splide">
            <div class="splide__track">
                <ul class="splide__list">
                <?php foreach($images['imgs-for-gallery'] as $image):?> 
                <li class="splide__slide">

                        <div>
                            <div class="lightbox-container ">
                                <?php 
                                    if ($image): 
                                ?>
                                <ul class="imgs-small">
                                    <li class="detail-img-big select">
                                        <?php echo wp_get_attachment_image($image['big-img'], 'center-img'); ?>
                                    </li>
                                    <?php $imageDetail = $image['details']?>
                                    <?php foreach($imageDetail as $img): ?>
                                        <li class="lightbox-small-boxes select">
                                            <?php echo wp_get_attachment_image ($img['detail-imgs'], 'center-img'); ?>
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
                   


                </li>
                <?php endforeach; ?>

            </ul>
        </div> 
    </div>

    

    </div>
      
    </div>

    </section>


   
<?php
    endif;
 ?>
