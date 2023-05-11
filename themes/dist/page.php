<?php
    get_header();
?>



<?php
    $header_homepage = get_field('header-home', 'options');
?>

<header class="header-content">
        <div class="header-text">
            <h1>
                <?php echo $header_homepage['header-headline-firstname'] ?>
                <br>
                <span class="last-name"><?php echo $header_homepage['header-headline-lastname'] ?></span>
                <span class="profession part1"><?php echo $header_homepage['header-headline-professionfirst'] ?></span><span class="profession part2"><?php echo $header_homepage['header-headline-professionlast'] ?></span>
            </h1>
        </div>
        <div id="header-slideshow-img-container">

            <?php
                $header_img = get_field('header-home', 'options');
            ?>
            <?php if($header_img['header-image-details']): ?>
                <img src="<?php echo $header_img['header-image-details']; ?>" alt=" ">
            <?php endif; ?>

        </div>
    </header>

    <?php
        $section_headline_sculptures = get_field('hompepage_sculptures','options');
    ?>   
    
    <main id="content" class="container">
        <section class="sculptures">
            <h2 class="is-style-headline top-headline">
                <?php echo $section_headline_sculptures['section-headline-sculptures']; ?>
            </h2>
            <div class="columns">

                <div class="column left">    

                    <?php
                        $header_img = get_field('section-gallery', 'options');
                    ?>
                    <?php if($header_img['sculpture-img-1']): ?>
                        <img src="<?php echo $header_img['sculpture-img-1']; ?>" alt=" ">
                    <?php endif; ?>


                </div>
                
                <div class="column right">
                    <img src="<?php echo wp_get_attachment_image( 'id_section_gallery', 'medium' ); ?>" alt="">
                </div>
                <div class="column left">
                    <img src="<?php echo wp_get_attachment_image( 'id_section_gallery', 'medium' ); ?>" alt="">
                </div>
                <div class="column right">
                    <img src="<?php echo wp_get_attachment_image( 'id_section_gallery', 'medium' ); ?>" alt="">
                </div>
            </div>
            <div class="btn-container column">
                <a href="#" class="btn-see-more"></a> 
            </div> 
        </section>



        <?php
            $section_headline_silhouettes = get_field('hompepage_silhouettes','options');
        ?> 

        <section class="silhouettes">
            <h2 class="is-style-headline">
                <?php $section_headline_silhouettes['section-headline-silhouettes']; ?>
            </h2>

            




            <div class="columns">
                <div class="column">
                    <img src="assets/img/cat3.jpg" alt="bild1">
                </div>
                <div class="column">
                    <img src="assets/img/cat1.jpg" alt="bild1">
                </div>
                <div class="column">
                    <img src="assets/img/cat4.jpg" alt="bild1">
                </div>
                <div class="column">
                    <img src="assets/img/cat3.jpg" alt="bild1">
                </div>
            </div>
            <div class="btn-container column">
                <a href="#" class="btn-see-more"></a> 
            </div> 
        </section>
        


        <section class="about-me">
            <div class="columns-about-me">
                    <h2 class="is-style-headline">Über mich</h2>
                <div class="column-about-me">
                    <div class="about-me-image">
                        <img src="assets/img/_vorläufig_profile-pic.jpg" alt="bild1">     
                    </div>
                    <div class="btn-container-about-me column">
                         <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                             Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.
                        </p>
                        <a href="#" class="btn-see-more"></a> 
                    </div> 
                    
                </div>
            </div>
        </section>


        <section class="contact">
            <h2 class="is-style-headline">Kontakt</h2>
            <div class="column">
                <form action="#" method="get">
                    <div>
                        <label for="name"></label>
                        <input type="text" id="name" placeholder="Ihr Name...">
                    </div>
                    <div>
                        <label for="mail"></label>
                        <input type="text" id="mail" placeholder="Ihre Email...">
                    </div>
                    <div>
                        <label for="message"></label>
                        <textarea id="message" placeholder="Ihre Nachricht..." rows="8"></textarea>
                    </div>
                </form>
                <button>Absenden</button>
                
            </div>
        </section>
    </main>
-->





























<?php
    get_footer();
?>


