<?php
require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
function add_css()
{
   wp_register_style('aos', get_template_directory_uri() . './assets/css/aos.css', false,'1.1','all');
   wp_enqueue_style( 'aos');
   wp_register_style('slick', get_template_directory_uri() . '/assets/css/slick.css', false,'1.1','all');
   wp_enqueue_style( 'slick');
   wp_register_style('slick-theme', get_template_directory_uri() . '/assets/css/slick-theme.css', false,'1.1','all');
   wp_enqueue_style( 'slick-theme');
   wp_register_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', false,'1.1','all');
   wp_enqueue_style( 'bootstrap');
   wp_register_style('style', get_template_directory_uri() . '/assets/css/style.css', false,'1.1','all');
   wp_enqueue_style( 'style');
}
add_action('wp_enqueue_scripts', 'add_css');

function add_script()
{
   wp_register_script('slim', get_template_directory_uri() . '/assets/js/jquery.slim.min.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'slim');
   wp_register_script('aos', get_template_directory_uri() . '/assets/js/aos.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'aos');
   wp_register_script('slick', get_template_directory_uri() . '/assets/js/slick.min.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'slick');
   wp_register_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'bootstrap');
   wp_register_script('script', get_template_directory_uri() . '/assets/js/script.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'script');
}
add_action('wp_enqueue_scripts', 'add_script');

add_theme_support('menus');

function register_my_menus() {
   register_nav_menus(
     array(
       'header-menu' => __( 'Header Menu' ),
       'extra-menu' => __( 'Extra Menu' )
     )
   );
 }
 add_action( 'init', 'register_my_menus' );
 

 add_filter( 'nav_menu_link_attributes', 'prefix_bs5_dropdown_data_attribute', 20, 3 );
/**
 * Use namespaced data attribute for Bootstrap's dropdown toggles.
 *
 * @param array    $atts HTML attributes applied to the item's `<a>` element.
 * @param WP_Post  $item The current menu item.
 * @param stdClass $args An object of wp_nav_menu() arguments.
 * @return array
 */
function prefix_bs5_dropdown_data_attribute( $atts, $item, $args ) {
    if ( is_a( $args->walker, 'WP_Bootstrap_Navwalker' ) ) {
        if ( array_key_exists( 'data-toggle', $atts ) ) {
            unset( $atts['data-toggle'] );
            $atts['data-bs-toggle'] = 'dropdown';
        }
    }
    return $atts;
}

?>