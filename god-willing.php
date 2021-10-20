<?php
/**
* Plugin Name: God Willing
* Description: Rectify and edit the words mean إن شاء الله writed in bad way.
* Version: 1.0.0
* Author: Miminou
* Author URI: https://am-amine.com/
**/


if(!function_exists('inchllh_script_load')) {

  add_action( 'wp_enqueue_scripts', 'inchllh_script_load' );

  function inchllh_script_load(){
    wp_enqueue_script( 'inchllh-custom-script', plugin_dir_url( __FILE__ ) . '/custom.js', array() , false, true);
  }
}
