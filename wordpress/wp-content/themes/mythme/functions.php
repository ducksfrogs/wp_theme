<?php

function my_files() {
    wp_enqueue_style('my_main_styles', get_stylesheet_uri());
}

add_action( 'wp_enqueue_scripts', 'my_files' );
