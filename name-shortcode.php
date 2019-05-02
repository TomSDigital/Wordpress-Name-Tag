<?php 
/*
 Plugin Name: Name Shortcode
 Plugin URI: https://somebodydigital.com
 Description: Displays the current user's name in the post content
 Version: 1
 Author: Somebody Digital
 Author URI: https://somebodydigital.com
 License: GPL2
 */

 // Add Shortcode
function SD_name() {
    $current_user = wp_get_current_user();
    $user_id = $current_user->data->ID;
    if($user_id == 0){
        $display_name = __('Guest','name-shortcode');
    }
    else {
        $display_name = $current_user->data->display_name;
    }
    return '<span class="name-tag">'.$display_name.'</span>';
}
add_shortcode( 'Name', 'SD_name' );