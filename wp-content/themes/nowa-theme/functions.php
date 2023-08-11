<?php

function portfolio_features() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size('pageBanner', 1500, 650, true); 
    add_image_size('pressurePortrait', 480, 650, true);
    add_image_size('pressureLandscape', 400, 260, true);
}

function portfolio_menu() {
    register_nav_menu('PortfolioMenuLocation', 'Portfolio Menu Location');
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'portfolio_menu');

register_nav_menus(['primary_navigation' => __('Primary Navigation', 'sage')
]);


function portfolio_adjust_queries($query) {


    if(!is_admin() AND is_post_type_archive('realization') AND $query->is_main_query()) {
        $today = date('Ymd');
        $query->set('meta_key', 'event_date');
        $query->set('orderby', 'meta_value_num');
        $query->set('order', 'ASC');
        $query->set('meta_query', array(
            array(
                'key' => 'event_date',
                'compare' => '>=',
                'value' => $today,
                'type' => 'numeric'
            )
        ));
    }
}

add_action('pre_get_posts', 'portfolio_adjust_queries');

?>