<?php 

function register_custom_post_type_atrakcje() {  
    $labels = array(
        'name' => 'Atrakcje',
        'singular_name' => 'Atrakcja',
        'add_new' => 'Dodaj nową atrakcję',
        'add_new_item' => 'Dodaj nową atrakcję',
        'edit_item' => 'Edytuj atrakcję',
        'new_item' => 'Nowa Atrakcja',
        'view_item' => 'Zobacz atrakcję',
        'search_items' => 'Szukaj atrakcji',
        'not_found' => 'Nie znaleziono atrakcji',
        'not_found_in_trash' => 'Nie znaleziono atrakcji w koszu',
    );

    $args = array(
        'labels' => $labels,
        'public' => false,
        'has_archive' => false,
        'supports' => array('title', 'thumbnail', 'excerpt'),
        'menu_icon' => 'dashicons-location-alt',
        'show_in_rest' => true,
        'show_ui' => true, 
        //'rewrite' => array('slug' => 'atrakcje'), // Change the slug to "attractions"
    );

    register_post_type('atrakcje', $args);
}
add_action('init', 'register_custom_post_type_atrakcje');

