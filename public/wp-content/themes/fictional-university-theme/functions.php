<?php

function university_files() {
    // wp_enqueue_styles('<nickname for stylesheet>', <location pointing to style file>)
    wp_enqueue_style('university_main_styles', get_stylesheet_uri());
}
// add_action(<name of hook to use>, <name of function associated>) 
// add_action: function that lets you tell WP what action to execute
add_action('wp_enqueue_scripts', 'university_files');

?>