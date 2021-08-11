<?php

function wordpress_basic_template_scripts()
{
    wp_enqueue_style('wordpress-basic-template-style', get_template_directory_uri() . '/style.css', [], wp_get_theme()->get('Version'));
    wp_enqueue_script('wordpress-basic-template-js', get_template_directory_uri() . '/app.js', [], wp_get_theme()->get('Version'));
}

add_action('wp_enqueue_scripts', 'wordpress_basic_template_scripts');
