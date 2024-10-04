<?php
//create a function receives current page slug return related custom posttype slug
function dpw_get_cpt_slug($current_page_slug)
{


    switch ($current_page_slug) {
        case "social-media":
            return 'SocialMedia';
        case "a-plus-content":
            return 'a-content';
        case "creative-logo":
            return 'logos';
        case "banner":
            return 'banners';
        case "video":
            return 'videos';
        case "campaign":
            return 'campaigns';
    }
}
//function for get the parent page title in the single page
function dpw_get_parent_page_title_in_single_page($post_name)
{


    switch ($post_name) {
        case "socialmedia":
            return 'Social Media';
        case "a-content":
            return 'A+ Content';
        case "logos":
            return 'Logos';
        case "banners":
            return 'Banner';
        case "videos":
            return 'Videos';
        case "campaigns":
            return 'Campaigns';
    }
}
