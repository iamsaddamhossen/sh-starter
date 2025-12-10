<?php
function sh_starter_enqueue() {
    $theme_version = wp_get_theme()->get('Version');
    wp_enqueue_style('sh-starter-style', get_template_directory_uri() . '/assets/css/main.css', [], $theme_version);
    wp_enqueue_style('sh-starter-editor', get_template_directory_uri() . '/assets/css/editor-style.css', [], $theme_version);
    wp_enqueue_script('sh-starter-main', get_template_directory_uri() . '/assets/js/main.js', ['jquery'], $theme_version, true);
}
add_action('wp_enqueue_scripts', 'sh_starter_enqueue');
