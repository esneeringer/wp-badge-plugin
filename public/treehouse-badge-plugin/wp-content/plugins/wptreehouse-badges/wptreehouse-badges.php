<?php
/*
 *	Plugin Name: Official Treehouse Badges Plugin
 *	Plugin URI: http://wptreehouse.com/wptreehouse-badges-plugin/
 *	Description: Provides both widgets and shortcodes to help you display your Treehouse profile badges on your website.  The official Treehouse badges plugin.
 *	Version: 1.0
 *	Author: Elliot Sneeringer
 *	Author URI: 
 *	License: GPL2
 *
*/

/**
 * Add link to our plugin in admin menu
 * Under 'Settings' > Treehouse badges
 */

function wp_treehouse_badges_menu(){
    
    /**
     * Use add_options_page function
     */

     add_options_page(
        'Official Treehouse Badges Plugin',
        'Treehouse Badges',
        'manage_options',
        'wptreehouse-badges',
        'wptreehouse_badges_options_page'
     );


}

add_action( 'admin_menu', 'wp_treehouse_badges_menu' );





function wptreehouse_badges_options_page(){

    if (!current_user_can('manage_options')){

        wp_die( 'You do not have sufficient permissions to access this page' );
    
    }

    echo '<p>Welcome to our plugin page!</p>';
}

?>