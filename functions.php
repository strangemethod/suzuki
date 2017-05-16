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
    wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array(), '', true );
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
 * Enable thumbnail images
 */

add_theme_support( 'post-thumbnails' ); 


/* 
 * Disable admin bar when editing
 */

add_filter('show_admin_bar', '__return_false');
