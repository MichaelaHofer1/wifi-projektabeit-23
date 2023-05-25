<?php
    $class_name = 'header-content';

    if(!empty($block['className'])){
        $class_name .= ' ' . esc_attr($block['className']);
    }
?>


<?php
    $header_homepage = get_field('header-home');
?>


<?php if(!empty($header_homepage)): ?>

<header class="<?php echo $class_name; ?>">
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
    <main id="content" class="container"> 
    
<?php 
    elseif(is_admin()):
        echo '<h2>' . __('Bitte geben Sie etwas ein', 'wifi') . '</h2>';
    endif;

?>