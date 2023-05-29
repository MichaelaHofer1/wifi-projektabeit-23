

        
<?php if($images):?>

    <ul class="columns">
        <?php foreach($images as $image):?>
            <li class="column">
                <img src="<?php echo $image['sizes']['large'];?>">
                <div class="img-description">
                    <?php echo $image['caption']; ?>
                </div>
            </li>
        <?php endforeach; ?>        
    </ul>

<?php endif; ?>


