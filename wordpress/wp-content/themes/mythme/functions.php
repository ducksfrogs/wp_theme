<?php

function my_files() {
    wp_enqueue_script('myScript', get_theme_file_uri( '/build/index.js' ), array('jquery'), '1.0', true );
    wp_enqueue_style('ontawsome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('custom_font', "//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i" ); 
    wp_enqueue_style('my_main_styles', get_theme_file_uri('/build/style-index.css'));
    wp_enqueue_style('my_extra_styles', get_theme_file_uri('/build/index.css'));
}

add_action( 'wp_enqueue_scripts', 'my_files' );

function my_features() {
    add_theme_support( 'title-tag' );
}

add_action( 'after_setup_theme', 'my_features' );