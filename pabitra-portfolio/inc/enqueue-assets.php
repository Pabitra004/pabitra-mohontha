<?php
function pabitra_portfolio_enqueue_assets() {
    $css_path = get_template_directory() . '/assets/css/main.css';
    $js_path  = get_template_directory() . '/assets/js/main.js';

    wp_enqueue_style(
        'pabitra-portfolio-main',
        get_template_directory_uri() . '/assets/css/main.css',
        array(),
        file_exists($css_path) ? filemtime($css_path) : wp_get_theme()->get('Version')
    );

    wp_enqueue_script(
        'pabitra-portfolio-main',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        file_exists($js_path) ? filemtime($js_path) : wp_get_theme()->get('Version'),
        true
    );
}
add_action('wp_enqueue_scripts', 'pabitra_portfolio_enqueue_assets');
