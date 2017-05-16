<?php
/**
 * Suzuki functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Suzuki
 */


/*
 * enqueue scripts
 */

function suzuki_scripts() {
    // wp_enqueue_script( 'slick', get_template_directory_uri() . '/js/slick.min.js', array('jquery'), '1.5.9', true );
    // wp_enqueue_script( 'masonry', get_template_directory_uri() . '/js/masonry.pkgd.min.js', array('jquery'), '4.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'suzuki_scripts' );



/*
 * enable menus
 */

function register_my_menus() {
  register_nav_menus(
    array(
      'main-navigation' => __( 'Main Navigation' )
    )
  );
}
add_action( 'init', 'register_my_menus' );



/* 
 * Render Template Parts with Parameters 
 */

if ( ! class_exists('Smk_ThemeView') ) {
    class Smk_ThemeView{
        private $args;
        private $file;
 
        public function __get($name) {
            return $this->args[$name];
        }
 
        public function __construct($file, $args = array()) {
            $this->file = $file;
            $this->args = $args;
        }
 
        public function __isset($name){
            return isset( $this->args[$name] );
        }
 
        public function render() {
            if( locate_template($this->file) ){
                include( locate_template($this->file) );//Theme Check free. Child themes support.
            }
        }
    }
}

if( ! function_exists('smk_get_template_part') ){
    function smk_get_template_part($file, $args = array()){
        $template = new Smk_ThemeView($file, $args);
        $template->render();
    }
}
 
/*
 * Remove Text Editor on specific posts
 */

// function hide_editor() {
//     remove_post_type_support('page', 'editor');
// }
// add_action( 'admin_init', 'hide_editor' );


/*
 * Remove custom fields input
 */ 

// function remove_post_custom_fields() {
//     remove_meta_box( 'postcustom' , 'post' , 'normal' ); 
//     remove_meta_box( 'postcustom' , 'page' , 'normal' ); 

// }
// add_action( 'admin_menu' , 'remove_post_custom_fields' );


/*
 * Include custom metaboxes
 */ 

// include 'metabox.php';
