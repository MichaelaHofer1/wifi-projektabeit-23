<!-- Wiederholungs-Textfelder, eine Überschrift und jeder Eintrag ein neues Listenelement -->
<?php
    $class_name = 'list';

    if(!empty($block['className'])){
        $class_name .= ' ' . esc_attr($block['className']);
    }
?>


<?php
    $section_aboutmelist = get_field('list');
?>


<?php if(!empty($section_aboutmelist)): ?>

<section  class="<?php echo $class_name; ?>">
    <div class="about-me-page">
        
        <h3>
            <?php echo $section_aboutmelist['headline']; ?>
        </h3>

        <div class="list-container">
            <ul>
                <?php foreach($section_aboutmelist['list-container'] as $item): ?>
                    <li class="list">
                        <?php echo $item['list-item']; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>








        </div>
    </div>
</section>
<?php 
    endif;
?>


