<?php
    get_header();
?>



<?php
        $posting_image = get_field('posting-group');
                                    
        if($posting_image){
            echo wp_get_attachment_image($posting_image, 'posting-img');
        } else {
            echo wp_get_attachment_image(get_field('default_project_img', 'options'), 'large');
        }

     ?>      
        
    <p class="project-text">
        <?php echo get_field('posting-img-description');

        ?>
    </p>






<?php
    get_footer();
?>