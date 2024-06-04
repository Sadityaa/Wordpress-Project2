<?php
    // echo 'Test', is_front_page();
function divi__child_theme_enqueue_styles() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    // if (is_front_page()) {
    //     include(get_stylesheet_directory() . '/assets/php/gallery.php');
    // }
}
add_action( 'wp_enqueue_scripts', 'divi__child_theme_enqueue_styles' );

function enque_scripts()
{
    if(is_page('home') || is_singular('gallery'))
    {
        include(get_stylesheet_directory() . '/assets/php/gallery.php'); // Include the file responsible for displaying products
    }
}
add_action('wp_enqueue_scripts', 'enque_scripts');
function custom_body_class( $classes ) {
    global $post;

    if( isset( $post ) && is_object( $post ) ) {
        $classes = array( "pageID-{$post->ID}" );
    }

    return $classes;
}
add_filter( 'body_class', 'custom_body_class' );

add_action('wp_head', 'code_header');
function code_header(){
?>
<?php
};

