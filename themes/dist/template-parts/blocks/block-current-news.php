<?php

$class_name = '';

if(wp_is_mobile(  )){
    $class_name .= ' is-mobile';
}

if(!empty($block['className'])){
    $class_name .= ' ' . esc_attr($block['className']);
}
?>




<?php $news = get_field('current-news'); 

$args = [
    'post_type' => 'projekt',
    'posts_per_page' => $news['number']
];

$project_query = new WP_Query($args);
if($project_query->have_posts()):
?>

    <section id="news" class="<?php echo $class_name; ?>">
        <h2 class="is-style-headline aktuell"><?php echo $news['headline']; ?></h2>
       
            <?php while($project_query->have_posts()): 
                $project_query->the_post(); ?>

                <article class="project-cpt">
                    <div>
                        <h3 class="project-title">
                            <?php the_title(); ?>
                        </h3>
                        
                        <?php
                        $currentNews = get_field('news-project', get_the_ID());

                        if($currentNews) ?>             
                        <p> 
                            <?php echo $currentNews['text']; ?> 
                        </p> 
                    </div>                         
                    <div class="news-pics">
                        <?php echo wp_get_attachment_image( $currentNews['pictures'], 'large' );?>                                
                    </div>
                </article>
            <?php endwhile; ?>   
            
            
    
    <div id="lightbox" class="lightbox">
        <div id="close-btn"></div>
        <div class="lightbox-news">
            <?php echo wp_get_attachment_image($currentNews['pictures'], 'large' );?>
        </div>  

    </section>

<?php endif;  
    wp_reset_postdata(  );
?>