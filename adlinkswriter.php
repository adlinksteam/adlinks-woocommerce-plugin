<?php
/*
Plugin Name: new adlinks script
Description: A custom plugin to run scripts in WordPress.
Version: 1.0
Author: Adlinks co
*/
 
// Remove the admin bar from the front end
function adlinks_script_writer() {
    wp_enqueue_script( 'custom-script', 'https://test.store2.adlinks.io/dev/client2.js', array(), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'adlinks_script_writer' );