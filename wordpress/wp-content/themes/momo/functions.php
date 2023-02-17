<?php

function univ_files() {
    wp_enqueue_style( 'univ_main_style', get_stylesheet_uri(  ) );
}

add_action( 'wp_enqueue_scripts', 'univ_files' );
