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
 * Plugin Name:       ToDoList - JOBS
 * Plugin URI:        github.pl/Piffek
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Patryk Piwko
 * Author URI:        github.pl/Piffek
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       ToDoList
 * Domain Path:       /languages
 */

if( ! defined( 'ABSPATH')){
    exit;
}

function piffek_create_piece_of_menu(){
    $name = 'Job';
    $singular = 'Jobs';

    $label = array(
        'name'               => $name,
        'singular_name'      => $singular,
        'add_new'            => 'New ' . $singular,
        'no_found'           => 'No' . $name . 'found',
    );

    $args = array(
        'labels' => $label,
        'description'        => 'This is your to do list',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => false,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'book' ),
        'menu_icon'          => 'dashicons-businessman',
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
    );

    register_post_type('job', $args);
}

add_action('init', 'piffek_create_piece_of_menu');