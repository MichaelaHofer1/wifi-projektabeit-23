<?php
    get_header();
?>

<main id="content" class="container">
    <h1 class="is-style-headline">
        <?php
            $pagePosts = get_option('page_for_posts');

            if(!empty($pagePosts)){
                echo get_the_title($pagePosts);
            } else{
                bloginfo('name');
            }
        ?>
    </h1>

        
    <?php

    if(have_posts()): 
        while(have_posts()): 
            the_post(); ?>

            
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
    else:?>

<?php
endif;
?>



    </main>

<?php
    get_footer();
?>