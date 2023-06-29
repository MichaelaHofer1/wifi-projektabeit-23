<?php
/* 
Template Name: Projekte
*/

get_header(); ?>

    <main class="container">

        <h1></h1>

        <?php

            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; //kurzschreibweise einer if/else Schleife

            //Post abfragen
            $args = [
                'post_type' => 'projekt',
                'order' => 'date' ,
                'posts_per_page' => 6,
                'paged' => $paged
            ];


            $project_query = new WP_Query($args);
        ?>
        <?php
            //Posts ausgeben
          if($project_query->have_posts()): ?>

        <?php

            $class_name = 'projects space-top';

            if(wp_is_mobile(  )){
                $class_name .= ' is-mobile';
            }


        ?>

            <section class="<?php echo $class_name; ?>">

                <div class="projects-grid">

                <?php while($project_query->have_posts()): ?>
                    <?php $project_query->the_post(); ?>

                    <div class="grid-item">
                        <?php include(get_template_directory(  ) . '/template-parts/loops/project-loop.php'); ?>
                    </div>

                <?php endwhile; ?>

                </div>    

            </section>

    
            
       
            
            <?php 
                else:
                    _e('Keine Projekte gefunden');
                endif;                

    pagination($paged, $project_query->max_num_pages);


    //Reset Post
    wp_reset_postdata(  ); 
    ?>

    </main>

<?php 
    get_footer();
?>