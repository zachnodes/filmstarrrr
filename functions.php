<?php 
function filmstarrrr_files() {
    wp_enqueue_script('filmstarrrr-main-script', get_theme_file_uri('/build/script.js'), NULL, '1.0', true);
    wp_enqueue_style('filmstarrrr_main_styles', get_theme_file_uri('/build/index.css'));
    wp_enqueue_style('filmstarrrr_google_fonts', 'https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap');
}
add_action('wp_enqueue_scripts', 'filmstarrrr_files');

function filmstarrrr_features() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    // add_image_size();
}

add_action('after_setup_theme', 'filmstarrrr_features');
show_admin_bar( false );

?>