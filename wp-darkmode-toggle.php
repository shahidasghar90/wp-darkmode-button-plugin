<?php
/*
Plugin Name: WP Dark Mode Toggle
Description: Adds a dark mode toggle button to the front end of your WordPress site.
Version: 1.0
Author: https://github.com/shahidasghar90
*/

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

// Enqueue scripts and styles
function wp_darkmode_enqueue_scripts() {
    wp_enqueue_style('wp-darkmode-toggle-style', plugin_dir_url(__FILE__) . 'css/darkmode.css');
    wp_enqueue_script('wp-darkmode-toggle-script', plugin_dir_url(__FILE__) . 'js/darkmode.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'wp_darkmode_enqueue_scripts');

// Add Dark Mode Toggle Button
function wp_darkmode_add_toggle_button() {
    echo '<div class="darkmode-toggle">
            <input type="checkbox" id="darkmode-toggle">
            <label for="darkmode-toggle"></label>
          </div>';
}
add_action('wp_footer', 'wp_darkmode_add_toggle_button');

