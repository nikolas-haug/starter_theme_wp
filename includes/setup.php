<?php

function starter_theme_setup_theme() {
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'custom-logo' );

    register_nav_menu( 'primary', __('Primary', 'starter_theme-domain') );
}