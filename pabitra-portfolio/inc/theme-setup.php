<?php
 
function pabitra_portfolio_setup() {
    add_theme_support('title-tag');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script'));
    add_theme_support('custom-logo');
 
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'pabitra-portfolio'),
        'footer' => __('Footer Menu', 'pabitra-portfolio')
    ));
 
}
add_action('after_setup_theme', 'pabitra_portfolio_setup');