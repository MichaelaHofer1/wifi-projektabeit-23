<!--  gibt den CPT-Post aus, Überschrift, Bild, Text, Links, + klick auf Bild -> Lightbox -->
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
                        <div>
                            <ul>
                                <?php foreach($currentNews['text-list'] as $item): ?>
                                    <li class="list">
                                        <?php echo $item['text']; ?>
                                    </li>
                                <?php endforeach; ?>
                                <?php foreach($currentNews['links'] as $item2): ?>
                                    <li class="links">
                                        <a href="<?php echo $item2['link']; ?> "  target="_blank"><?php echo $item2['link-text']; ?></a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>                         
                    <div class="news-pics">
                        <?php echo wp_get_attachment_image( $currentNews['pictures'], 'center-img' );?>
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