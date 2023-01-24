<?php

function artikel_style(){

    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css');

    wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js');

}

add_action('wp_enqueue_scripts', 'artikel_style');


function add_news(){
    register_post_type('add_content', [
        'public' => true,
        'supports' => [
            'title',
            'editor'
        ],
        'labels' => [
            'name' => 'Add Content',
            'all_items' => 'All Content',
            'edit_item' => 'Edit Content',
            'add_new_item' => 'New Content'
        ]
    ]);
}

add_action('init', 'add_news');