<?php
/**
 * SH Starter Theme functions
 */

if ( ! function_exists( 'sh_starter_setup' ) ) {
    function sh_starter_setup() {
        add_theme_support( 'block-templates' );
        add_theme_support( 'wp-block-styles' );
        add_theme_support( 'editor-styles' );
        add_theme_support( 'responsive-embeds' );
        add_theme_support( 'align-wide' );
        add_theme_support( 'custom-line-height' );
        add_theme_support( 'custom-spacing' );
    }
}
add_action( 'after_setup_theme', 'sh_starter_setup' );