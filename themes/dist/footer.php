<footer id="footer-page" class="container">
        
    
    <nav id="nav-footer">
        <?php 
            wp_nav_menu(array(
                'theme_location' => 'secondary',
                'container' => false,
                'menu_class' => 'nav-menu',
                'fallback_cb' => false,
                'depth' => 1
            ));
        ?>
    </nav>


  <!--      <div class="nav-footer">
            <ul class="nav-menu">
                <li><a href="#">Datenschutz</a></li>
                <li><a href="#">Impressum</a></li>
            </ul>
        </div>
        -->

        <div class="social-icons">
            <a href="https://www.facebook.com" target="_blank">
                <span class="icon-facebook2" aria-hidden="true"></span>
                <span class="screen-reader-text">Follow on Facebook</span>
            </a>
            <a href="https://www.instagram.com" target="_blank">
                <span class="icon-instagram" aria-hidden="true"></span>
                <span class="screen-reader-text">Follow on Instagram</span>
            </a>
        </div>


        <div class="copyright">
            <?php 
                echo sprintf(__('&copy; %1$s %2$s'), get_bloginfo('name'), date('Y'));
            ?>
        </div>
    </footer>

    <?php
        wp_footer();
    
    ?>



    
</body>
</html>