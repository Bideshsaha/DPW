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

//add meta box
include_once('assets/inc/metabox.php');

//add widget
include_once('assets/inc/widgets_register.php');

