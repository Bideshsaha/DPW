<?php

function dpw_register_isvisible_metabox(){
    add_meta_box('is_visible','Meta Box Control Panel','dpw_isvisible_markup_cb',['a-content','SocialMedia','logos','videos','campaigns','banners']);
}
add_action('add_meta_boxes','dpw_register_isvisible_metabox');


function dpw_isvisible_markup_cb($post){
    $ischecked = get_post_meta($post->ID,'dpw_isvisible',true)=== 'on'? 'checked':'';
    echo '<div class="metaBox"> 
                <label>Is Visible?</label>
                <input type="checkbox" name="dpw_isvisible" '. $ischecked.'> 
          </div>';
}

function dpw_save_isvisiblity_flag($post_id){
    $isvisible = isset($_POST['dpw_isvisible']) ? $_POST['dpw_isvisible']:'off';
    update_post_meta($post_id,'dpw_isvisible',$isvisible);
}
add_action('save_post','dpw_save_isvisiblity_flag');