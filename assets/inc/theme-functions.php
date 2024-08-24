<?php

function customizar_register($wp_customize){
 //Footer Option
$wp_customize->add_section('footer_option',array(
    'title'=>__('Footer Position Option','digitalprworld'),
    'description'=>'If you interested to change or update your footer settings you can do it.'

));
$wp_customize->add_setting('copyright_section',array(
    'default'=>'Copyright © 2022 digitalprworld.com',
));
$wp_customize->add_control('copyright_section',array(
    'label'=>'Copyright Text',
    'description'=>'If need you can update copyright text from here',
    'settings'=>'copyright_section',
    'section'=>'footer_option',
));
};
add_action('customize_register','customizar_register');