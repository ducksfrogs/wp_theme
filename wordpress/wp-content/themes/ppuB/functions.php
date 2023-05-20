<?php
    
function my_features() {
    add_theme_support( 'title-tag' );
}

add_action('after_setup_theme', 'my_features');