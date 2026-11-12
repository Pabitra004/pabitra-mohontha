<?php
 
function pabitra_register_project_post_type() {
    register_post_type('project', array(
        'labels' => array(
            'name' => __('Projects', 'pabitra-portfolio'),
            'singular_name' => __('Project', 'pabitra-portfolio'),
            'add_new_item' => __('Add New Project', 'pabitra-portfolio'),
            'edit_item' => __('Edit Project', 'pabitra-portfolio')
        ),
        'public' => true,
        'has_archive' => 'projects',
        'rewrite' => array('slug' => 'projects', 'with_front' => false),
        'menu_icon' => 'dashicons-portfolio',
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'revisions'),
        'show_in_rest' => true
    ));
 
    register_taxonomy('project_technology', array('project'), array(
        'labels' => array(
            'name' => __('Technologies', 'pabitra-portfolio'),
            'singular_name' => __('Technology', 'pabitra-portfolio')
        ),
        'public' => true,
        'hierarchical' => false,
        'show_admin_column' => true,
        'show_in_rest' => true,
        'rewrite' => array('slug' => 'technology')
    ));
}
add_action('init', 'pabitra_register_project_post_type');