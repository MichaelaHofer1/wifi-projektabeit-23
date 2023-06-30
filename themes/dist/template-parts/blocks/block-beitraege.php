<?php

    $anchor = '';
    if(!empty($block['anchor'])){
        $anchor = 'id="' . esc_attr($block['anchor']) . '"';
    }

    $class_name = 'posts';
    if(!empty($block['className'])){
        $class_name .= ' ' . esc_attr($block['className']);
    }
?>

<?php $lastposts = get_field('posts');

$args = [
    'post_type' => 'post',
    'posts_per_page' => $lastposts['number-of-posts']
];

$post_query = new WP_Query($args);


if($post_query->have_posts()): ?>

    <section id="<?php echo $anchor ?>" class="<?php echo $class_name ?>">
        <h2 class="is-style-headline"><?php echo $lastposts['headline'] ?></h2>

        <?php while($post_query->have_posts()):
            $post_query->the_post();
            ?>

            <article class="post">
                <h2 class="post-title">
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h2>
                <div class="meta">
                    <time class="date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('d.m.Y'); ?></time>
                    <?php 

                        the_category(', ');
                    
                    ?>
                </div>
            </article>

        <?php 
        endwhile; 
        
        // get_option --> page_for_posts gibt die ID der Betragseite zurück
        $page_for_posts = get_option('page_for_posts');
        
        ?>
    </section>




<?php endif; 
    wp_reset_postdata(  );
?>