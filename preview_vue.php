<?php
/**
 * Plugin Name: Preview
 * Description: Woocommerce Product Page Development.
 * Author: Niloy Quazi
 * Author URI: #
 */


//Register scripts to use
function func_load_vuejs_scripts()
{
    wp_register_script('wp_vuejs_n', 'https://cdn.jsdelivr.net/npm/vue/dist/vue.js');
    wp_register_script('my_vuecode_n', plugin_dir_url(__FILE__).'assets/js/wp_vue_code.js', 'wp_vuejs_n', true);
}
//Tell WordPress to register the scripts
add_action('wp_enqueue_scripts', 'func_load_vuejs_scripts');


//Register style to use
function func_load_css_style()
{
    wp_register_style('wp_bulma_css_style', plugin_dir_url(__FILE__).'assets/css/bulma.min.css');
    wp_register_style('wp_style_n', plugin_dir_url(__FILE__).'assets/css/style.css', 'wp_bulma_css_style', true);
}
//Tell WordPress to register the style
add_action('wp_enqueue_scripts', 'func_load_css_style');


//adding front page
include_once 'front_end_file.php';
