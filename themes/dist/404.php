<?php
    get_header();
?>


    <?php 
        $error404 = get_field('error404', 'option');

    ?>
<div class="error-site container">
    <h1>
        <?php echo $error404['headline']; ?>
    </h1>

    <a href="<?php echo $error404['home-btn']; ?>"><?php echo $error404['link-text']; ?></a>

</div>



<?php
    get_footer();
?>