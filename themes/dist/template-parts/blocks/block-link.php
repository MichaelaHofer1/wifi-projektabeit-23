<?php
$linkField = get_field('link');
?>


<?php if (!empty($linkField)): ?>
    <ul class="container links-posts">
        <li class="links links-post">
            <a href="<?php echo $linkField['link-url']; ?> "
               target="_blank"><?php echo $linkField['link-text']; ?></a>
        </li>
    </ul>
<?php
endif;
?>
