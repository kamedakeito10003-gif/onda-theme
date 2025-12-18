<?php
// functions.php

function onda_enqueue_assets() {
    // CSSリセット（CDN）
    wp_enqueue_style( 'reset-css', 'https://cdn.jsdelivr.net/npm/the-new-css-reset/css/reset.min.css', array(), null );

    // メインスタイル（style.css）
    wp_enqueue_style( 'onda-style', get_stylesheet_uri(), array('reset-css'), wp_get_theme()->get('Version') );
}
add_action( 'wp_enqueue_scripts', 'onda_enqueue_assets' );

// テーマサポート
function onda_theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    load_theme_textdomain( 'onda-sekkotsuin', get_template_directory() . '/languages' );
    register_nav_menus( array(
        'primary' => 'メインナビゲーション',
    ) );
}
add_action( 'after_setup_theme', 'onda_theme_setup' );