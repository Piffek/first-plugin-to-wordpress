<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              github.pl/Piffek
 * @since             1.0.0
 * @package           Footer
 *
 * @wordpress-plugin
 * Plugin Name:       PiffekFooterContentChange
 * Plugin URI:        github.pl/Piffek
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Patryk 
 * Author URI:        github.pl/Piffek
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       footer
 * Domain Path:       /languages
 */

function piffek_remove_dashboard(){
    remove_meta_box('dashboard_right_now', 'dashboard', 'normal');
}

add_action('wp_dashboard_setup', 'piffek_remove_dashboard');

function piffek_add_google_link(){
    global $wp_admin_bar;

    $piece_of_menu = array(
        'id' => 'piffek_google',
        'title' => 'Piffko google',
        'href' => 'przenosnareklama.pl'
    );

    $wp_admin_bar->add_menu($piece_of_menu);
}

add_action('wp_before_admin_bar_render', 'piffek_add_google_link');
