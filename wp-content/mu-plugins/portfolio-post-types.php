<?php


function portfolio_post_type() {

    register_post_type('skill', array(
        'supports' => array('title','editor', 'excerpt', 'thumbnail'),
       'show_in_rest' => true,
       'rewrite' => array('slug' => 'skills'),
       'has_archive' => true,
       'public' => true,
       'labels' => array(
           'name' => 'Skills',
           'add_new_item' => 'Add New Skill',
           'edit_item' => 'Edit Skill',
           'all_items' => 'All Skills',
           'singular_name' => 'Skill'
       ),
        'menu_icon' => 'dashicons-chart-line'
   ));
   
    register_post_type('realization', array(
        'supports' => array('title','editor', 'excerpt', 'thumbnail'),
       'show_in_rest' => true,
       'rewrite' => array('slug' => 'realizations'),
       'has_archive' => true,
       'public' => true,
       'labels' => array(
           'name' => 'Realizations',
           'add_new_item' => 'Add New Realization',
           'edit_item' => 'Edit Realization',
           'all_items' => 'All Realizations',
           'singular_name' => 'Realization'
       ),
        'menu_icon' => 'dashicons-money-alt'
   ));
}

add_action('init', 'portfolio_post_type');