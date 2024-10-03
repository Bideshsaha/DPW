<!-- footer started -->
<div class="footer">
    <!-- footer -->
    <div class="footer-section">
        <div class="footer-parts">
            <?php dynamic_sidebar('footer-1'); ?>
        </div>
        <div class="footer-parts">
            <?php dynamic_sidebar('footer-2'); ?>
        </div>
        <div class="footer-parts">
            <?php dynamic_sidebar('footer-3'); ?>
        </div>
    </div>
    <!-- belowFooter -->
    <div class="below-footer">
        <?php echo get_theme_mod('copyright_section'); ?>
        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'footer-menu',
                'menu_class' => 'menu-position',
            )
        ) ?>
    </div>
</div>

<!-- Footer ended here -->
<!-- </div> -->
<?php wp_footer(); ?>

</body>

</html>