<?php
add_action( 'wp_enqueue_scripts', 'enqueue_styles' );
function enqueue_styles() {
wp_enqueue_style( 'genesis-block-theme', get_template_directory_uri() . '/style.css' );
wp_enqueue_style('styles', get_stylesheet_directory_uri() . '/style.css');
}

wp_enqueue_script('jquery');

add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );
function enqueue_scripts() {
wp_enqueue_script('sitejs', get_stylesheet_directory_uri() . '/js/site.js' );
}

add_action( 'enqueue_block_editor_assets', function() {
    wp_enqueue_style( 'styles', get_stylesheet_directory_uri() . "/style.css");
} );


if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title'    => 'Archive Settings',
        'menu_title'    => 'Archive Settings',
        'menu_slug'     => 'archive-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
    
}

add_filter('get_the_archive_title', function ($title) {
    if (is_category()) {
        $title = single_cat_title('', false);
    } elseif (is_tag()) {
        $title = single_tag_title('', false);
    } elseif (is_author()) {
        $title = '<span class="vcard">' . get_the_author() . '</span>';
    } elseif (is_tax()) { //for custom post types
        $title = sprintf(__('%1$s'), single_term_title('', false));
    } elseif (is_post_type_archive()) {
        $title = post_type_archive_title('', false);
    }
    return $title;
});

?>
