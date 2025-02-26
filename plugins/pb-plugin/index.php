<?php

/* Plugin Name: PB PLUGIN
* Description: Plugin to add custom blocks in site
* Version: 1.0.0
* Text Domain: pb-plugin
* Domain Path: /languages
*/

if(!function_exists('add_action')){
    echo "Get the hell out of here";
    exit;
}

define('PB_PLUGIN_DIR', plugin_dir_path(__FILE__));

//Includes
include(PB_PLUGIN_DIR.'includes/register-blocks.php');

//Hooks
add_action('init', 'pb_register_blocks');