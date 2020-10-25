<?php

function university_files() {
    // load custom JS
    // wp_enqueue_script(
    //  <nickname for script>, 
    //  <location pointing to style file>, <dependencies || NULL if none>, <version || 1.0 if not matter>, 
    //  <load at bottom of page (before closing body tag) else loads at top >
    // )
    wp_enqueue_script('main-university-js', 'http://localhost:3000/bundled.js', NULL, '1.0', true);

    // load custom fonts/styles
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    // wp_enqueue_styles('<nickname for stylesheet>', <location pointing to style file>)
    wp_enqueue_style('university_main_styles', get_stylesheet_uri());
}

// add_action(<name of hook to use>, <name of function associated>) 
// add_action: function that lets you tell WP what action to execute
add_action('wp_enqueue_scripts', 'university_files');

// lets tab show name as page title
function university_features() {
  add_theme_support('title-tag');
}

add_action('after_setup_theme', 'university_features');