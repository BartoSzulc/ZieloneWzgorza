<?php 

function register_custom_post_type_pokoje() {  
    $labels = array(
        'name' => 'Pokoje',
        'singular_name' => 'Pokój',
        'add_new' => 'Dodaj nowy pokój',
        'add_new_item' => 'Dodaj nowy pokój',
        'edit_item' => 'Edytuj pokój',
        'new_item' => 'Nowy Pokój',
        'view_item' => 'Zobacz pokój',
        'search_items' => 'Szukaj pokoi',
        'not_found' => 'Nie znaleziono pokoi',
        'not_found_in_trash' => 'Nie znaleziono pokoi w koszu',
    );

    $args = array(
        'labels' => $labels,
        'public' => false,
        'has_archive' => false,
        'supports' => array('title', 'thumbnail', 'excerpt'),
        'menu_icon' => 'dashicons-building', // Changed to a more appropriate icon for "rooms"
        'show_in_rest' => true,
        'show_ui' => true, 
        //'rewrite' => array('slug' => 'pokoje'), // Uncomment and change the slug to "pokoje" if needed
    );

    register_post_type('pokoje', $args); // Changed the post type key to "pokoje"
}
add_action('init', 'register_custom_post_type_pokoje');


