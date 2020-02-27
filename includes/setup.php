<?php

function starter_theme_setup_theme() {
    add_theme_support( 'post-thumbnails' );

    register_nav_menu( 'primary', __('Primary', 'starter_theme-domain') );
}