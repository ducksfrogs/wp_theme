<?php

function event_post() {
    register_post_type( 'event', array(
        'public' => true,
        'labels' => array(
            'name' => "Events",
            'add_new_item' => "New Event",
            'edit_item' => "Edit Event",
            'all_items' => "All Events",
            'singular_name' => 'Event'
        ),
        'menu_icon' => 'dashicons-format-gallery'
    ) );
}
add_action( 'init', 'event_post' );