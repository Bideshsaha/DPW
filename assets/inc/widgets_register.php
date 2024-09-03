<?php
// sidebar Register Function


function dpw_widgets_register(){
    register_sidebar(array(
        'name'=>__('Main Widget Area','digitalprworld'),
        'id'=>'sidebar-1',
        'description'=>__('Apperas in the sidebar in blog page and also other page','digitalprworld'),
        'before_widget'=>'<div class="child_sidebar">',
        'after_widget'=>'</div>',
        'before_title'=>'<h2 class="title">',
        'after_title'=>'</h2>',
    ));
    register_sidebar(array(
        'name'=>__('Footer 1','digitalprworld'),
        'id'=>'footer-1',
        'description'=>__('Apperas in the sidebar in blog page and also other page','digitalprworld'),
        'before_widget'=>'<div class="child_sidebar">',
        'after_widget'=>'</div>',
        'before_title'=>'<h2 class="title">',
        'after_title'=>'</h2>',
    ));
    register_sidebar(array(
        'name'=>__('Footer 2','digitalprworld'),
        'id'=>'footer-2',
        'description'=>__('Apperas in the sidebar in blog page and also other page','digitalprworld'),
        'before_widget'=>'<div class="child_sidebar">',
        'after_widget'=>'</div>',
        'before_title'=>'<h2 class="title">',
        'after_title'=>'</h2>',
    ));
    register_sidebar(array(
        'name'=>__('Footer 3','digitalprworld'),
        'id'=>'footer-3',
        'description'=>__('Apperas in the sidebar in blog page and also other page','digitalprworld'),
        'before_widget'=>'<div class="child_sidebar">',
        'after_widget'=>'</div>',
        'before_title'=>'<h2 class="title">',
        'after_title'=>'</h2>',
    ));
}
add_action('widgets_init','dpw_widgets_register');