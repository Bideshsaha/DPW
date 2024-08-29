<?php
function dpw_css_js_file_calling() {
    // Enqueue the main stylesheet
    wp_enqueue_style('dpw_style', get_stylesheet_uri());
    
    // Register and enqueue custom stylesheet
    wp_register_style('owl.carousel.min', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), '1.0.0', 'all');
    wp_register_style('owl.theme.default.min', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css', array(), '1.0.0', 'all');

    wp_register_style('custom', get_template_directory_uri() . '/assets/css/custom.css', array(), '1.0.0', 'all');

    wp_enqueue_style('owl.carousel.min');
    wp_enqueue_style('owl.theme.default.min');
    wp_enqueue_style('custom');

    // Enqueue main script
    wp_enqueue_script('jquery');
    wp_enqueue_script('owl.carousel.min', get_template_directory_uri() .'/assets/js/owl.carousel.min.js', array(), '2.3.4', true);

    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'dpw_css_js_file_calling');
