<?php get_header(); ?>

    <main id="content" class="container">
        <h1 class="is-style-headline headline-top"><?php the_title(); ?></h1>
        <div class="meta">
            <p class="datum">
                <?php
                $datum = get_field('date-start-end');
                ?>
                <p>
                    <?php
                        echo $datum['duration-start'];
                        echo $datum['bindestrich'];
                        echo $datum['duration-end'];
                    ?>
                </p>
            </p>
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