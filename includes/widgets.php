<?php

function wpdev_widgets() {
    register_sidebar([
        'name' => __('Starter Theme Sidebar'),
        'id' => 'starter_theme_sidebar',
        'description' => __('Sidebar for the Starter Theme'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ]);
}