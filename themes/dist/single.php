<?php get_header(); ?>

    <main id="content" class="container">
        <h1 class="is-style-headline"><?php the_title(); ?></h1>
        <h2>das ist die single.php</h2>
        <div class="meta">
            <?php 
                the_category(', ');
            ?>
        </div>
        
        <?php
            if(have_posts()){
                while(have_posts()){
                    the_post();
                    the_content();
                }
            }
        ?>

    </main>

<?php get_footer(); ?>