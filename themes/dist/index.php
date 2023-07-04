<?php
    get_header();
?>

<main id="content" class="container">
    <h1 class="is-style-headline headline-top">
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
                    
                    <?php 
                        $datum = get_field('date-start-end');
                        ?>
                        <p>
                            <?php echo $datum['duration-start']; ?>
                            <?php echo $datum['bindestrich']; ?>
                            <?php echo $datum['duration-end']; ?>
                        </p>

                        <div>
                            <?php the_category(', '); ?>
                        </div>
                </div>
                <div class="post-picture">
                    <?php echo wp_get_attachment_image($datum['post-picture'], 'medium') ?>
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