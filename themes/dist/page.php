<?php
    get_header();
?>



<?php
    $header_homepage = get_field('header-home', 'options');
?>

<header class="header-content">
        <div class="header-text">
            <h1>
                <?php echo $header_homepage['header-headline-firstname']; ?>
                <br>
                <span class="last-name"><?php echo $header_homepage['header-headline-lastname']; ?></span>
                <span class="profession part1"><?php echo $header_homepage['header-headline-professionfirst']; ?></span><span class="profession part2"><?php echo $header_homepage['header-headline-professionlast']; ?></span>
            </h1>
        </div>
        <div id="header-slideshow-img-container">

            <?php
                echo wp_get_attachment_image($header_homepage['header-img'], 'large');
            ?>

        </div>
    </header>

    <?php
        $section_headline_sculptures = get_field('home-sculptures','options');
        $section_headline_silhouettes = get_field('home-silhouettes','options');
        $section_headline_uebermich = get_field('home_uber_mich', 'options');
                    
        
        function img_teaser($arg1){
            echo wp_get_attachment_image($arg1, 'large');
        }
                
    ?>    
    <main id="content" class="container">
        <section>
            <h2 class="is-style-headline top-headline">
                <?php echo $section_headline_sculptures['headline-sculptures']; ?>
            </h2>
            <div class="columns">
                <div class="column left">
                    <?php img_teaser($section_headline_sculptures['sculptures-img1']); ?>
                </div>
                
                <div class="column right">
                    <?php img_teaser($section_headline_sculptures['sculptures-img2']); ?>
                </div>

                <div class="column left">
                    <?php img_teaser($section_headline_sculptures['sculptures-img3']); ?>
                </div>

                <div class="column right">
                    <?php img_teaser($section_headline_sculptures['sculptures-img4']); ?>
                </div>
            </div>
            <div class="btn-container column">
                <a href="#" class="btn-see-more"></a> 
            </div> 
        </section>



        <section>
            <h2 class="is-style-headline">
                <?php echo $section_headline_silhouettes['headline-silhouettes']; ?>
            </h2>            
            <div class="columns">
                <div class="column left">
                    <?php img_teaser($section_headline_silhouettes['silhouettes-img1']); ?>
                </div>
            
                <div class="column right">
                    <?php img_teaser($section_headline_silhouettes['silhouettes-img2']); ?>
                </div>

                <div class="column left">
                    <?php img_teaser($section_headline_silhouettes['silhouettes-img3']); ?>
                </div>

                <div class="column right">
                    <?php img_teaser($section_headline_silhouettes['silhouettes-img4']); ?>
                </div>
            </div>   
            <div class="btn-container column">
                <a href="#" class="btn-see-more"></a> 
            </div> 
        </section>
        


        <section class="about-me">
            <div class="columns-about-me">
                    <h2 class="is-style-headline">
                        <?php echo $section_headline_uebermich['home_uber_mich_headline']; ?>
                    </h2>
                <div class="column-about-me">
                    <div class="about-me-image">
                        <?php img_teaser($section_headline_uebermich['home_uber_mich_img']); ?>
                    </div>
                    <div class="btn-container-about-me column">
                         <p>
                            <?php echo $section_headline_uebermich['home_uber_mich_text']; ?>    
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






























<?php
    get_footer();
?>


