<?php

add_theme_support('menus');
add_theme_support('custom-logo');
// add_theme_support('post-thumbnails',array());


//includeing menu-register
include_once('assets/inc/menu-register.php');

//includeing custom post
include_once('assets/inc/custom-post.php');

//includeing theme functions
include_once('assets/inc/theme-functions.php');

//including enqueue files
include_once('assets/inc/enqueue.php');

//create a function receives current page slug return related custom posttype slug
//function for get the parent page title in the single page
include_once('assets/inc/posttype-title-fetch.php');

//add meta box
include_once('assets/inc/metabox.php');

//add widget
include_once('assets/inc/widgets_register.php');

//add settings api
include_once('assets/inc/settings-api.php');


//Ajax
function my_enqueue()
{
    wp_localize_script('main', 'my_ajax_object', array('ajax_url' => admin_url('admin-ajax.php')));
}
add_action('wp_enqueue_scripts', 'my_enqueue');


// add_action('wp_ajax_nopriv_get_data', 'my_ajax_handler_not_logged_in');
// add_action('wp_ajax_get_data', 'my_ajax_handler');

// function my_ajax_handler()
// {
//     wp_send_json_success('It works logged in');
//     return true;
// }

// function my_ajax_handler_not_logged_in()
// {
//     wp_send_json_success('Not logged in function call!!');
//     return true;
// }

function get_data()
{
    echo  "test";
    wp_die();  //die();
}

function get_data_nli()
{
    echo  "nli";
    wp_die();  //die();
}

add_action('wp_ajax_nopriv_get_data_nli', 'get_data_nli');
add_action('wp_ajax_get_data', 'get_data');
