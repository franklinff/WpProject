<footer>

    <nav class="navbar navbar-expand-sm bg-light">
        <ul class="ml-auto">
            <?php echo do_shortcode('[copyright-year]');  ?> Mercedes-Benz India Pvt. Ltd. All Rights Reserved (provider)
        </ul>
        <?php
        $args = array(
            'theme_location' => 'footer',
            'container' => 'ul ',
            'menu_class' => 'nav nav-tabs menu ml-auto'
        );
        ?>
        <?php wp_nav_menu($args); ?>
    </nav>

</footer>



<!-- Bootstrap core JavaScript
================================================== -->
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>

<!-- Basic stylesheet -->
<link rel="stylesheet" href="<?php echo get_site_url(); ?>/wp-content/themes/themeFromScratch/JS/owl.carousel.css">

<!-- Default Theme -->
<link rel="stylesheet" href="<?php echo get_site_url(); ?>/wp-content/themes/themeFromScratch/JS/owl.theme.css">
<!-- Include js plugin -->
<script src="<?php echo get_site_url(); ?>/wp-content/themes/themeFromScratch/JS/owl.carousel.js"></script>

<?php wp_footer(); ?>

</html>
