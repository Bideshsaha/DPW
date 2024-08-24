<?php

if(function_exists('register_nav_menus')){
    register_nav_menus(array(
        'header-menu'=>'Header Menu',
        'footer-menu'=>'Footer Menu',
    ));
}