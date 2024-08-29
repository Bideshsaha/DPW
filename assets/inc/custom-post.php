<?php
// AplusContent
    function custom_Aplus(){
        register_post_type('a-content',
        array(
                'labels'=>array(
                    'name'=>('APlusContents'),
                    'singular_name'=>('APlusContent'),
                    'add_new'=>('Add new APlusContent'),
                    'add_new_item'=>('Add new APlusContent'),
                    'edit_item'=>('Edit APlusContent'),
                    'new_item'=>('New APlusContent'),
                    'View_item'=>('View APlusContent'),
                    'not_found'=>('sorry,we can not find the A+Content you are locking for.'),
                    
                ),
                'menu_icon'=>'dashicons-editor-textcolor',
                'public'=>true,
                'publicly_queryable'=>true,
                'exclude_from_search'=>true,
                'menu_position'=>5,
                'has_archive'=>true,
                'hierarchial'=>true,
                'show_ui'=>true,
                'capability_type'=>'post',
                'rewrite'=>array('slug'=>'a-content'),
                'supports'=>array('title','thumbnail',),
            )
        );
        add_theme_support('post-thumbnails');
    }
    add_action('init','custom_Aplus');


//     Social Media
function custom_SocialMedia(){
    register_post_type('SocialMedia',
    array(
            'labels'=>array(
                'name'=>('SocialMedia'),
                'singular_name'=>('SocialMedia'),
                'add_new'=>('Add new SocialMedia'),
                'add_new_item'=>('Add new SocialMedia'),
                'edit_item'=>('Edit SocialMedia'),
                'new_item'=>('New SocialMedia'),
                'View_item'=>('View SocialMedia'),
                'not_found'=>('sorry,we can not find the SocialMedia you are locking for.'),
                
            ),
            'menu_icon'=>'dashicons-share',
            'public'=>true,
            'publicly_queryable'=>true,
            'exclude_from_search'=>true,
            'menu_position'=>5,
            'has_archive'=>true,
            'hierarchial'=>true,
            'show_ui'=>true,
            'capability_type'=>'post',
            'rewrite'=>array('slug'=>'SocialMedia'),
            'supports'=>array('title','thumbnail',),
        )
    );
    add_theme_support('post-thumbnails');
}
add_action('init','custom_SocialMedia');
// Logos
function custom_Logo(){
    register_post_type('logos',
    array(
            'labels'=>array(
                'name'=>('Logo'),
                'singular_name'=>('Logo'),
                'add_new'=>('Add new Logo'),
                'add_new_item'=>('Add new Logo'),
                'edit_item'=>('Edit Logo'),
                'new_item'=>('New Logo'),
                'View_item'=>('View Logo'),
                'not_found'=>('sorry,we can not find the Logo you are locking for.'),
                
            ),
            'menu_icon'=>'dashicons-smiley',
            'public'=>true,
            'publicly_queryable'=>true,
            'exclude_from_search'=>true,
            'menu_position'=>5,
            'has_archive'=>true,
            'hierarchial'=>true,
            'show_ui'=>true,
            'capability_type'=>'post',
            'rewrite'=>array('slug'=>'logos'),
            'supports'=>array('title','thumbnail',),
        )
    );
    add_theme_support('post-thumbnails');
}
add_action('init','custom_Logo');
// Banners
function custom_banner(){
    register_post_type('banners',
    array(
            'labels'=>array(
                'name'=>('Banners'),
                'singular_name'=>('Banner'),
                'add_new'=>('Add new Banner'),
                'add_new_item'=>('Add new Banner'),
                'edit_item'=>('Edit Banner'),
                'new_item'=>('New Banner'),
                'View_item'=>('View Banner'),
                'not_found'=>('sorry,we can not find the Banner you are locking for.'),
                
            ),
            'menu_icon'=>'dashicons-tickets',
            'public'=>true,
            'publicly_queryable'=>true,
            'exclude_from_search'=>true,
            'menu_position'=>5,
            'has_archive'=>true,
            'hierarchial'=>true,
            'show_ui'=>true,
            'capability_type'=>'post',
            'rewrite'=>array('slug'=>'banners'),
            'supports'=>array('title','thumbnail',),
        )
    );
    add_theme_support('post-thumbnails');
}
add_action('init','custom_banner');
// Videos
function custom_video(){
    register_post_type('videos',
    array(
            'labels'=>array(
                'name'=>('Videos'),
                'singular_name'=>('Video'),
                'add_new'=>('Add new Video'),
                'add_new_item'=>('Add new Video'),
                'edit_item'=>('Edit Video'),
                'new_item'=>('New Video'),
                'View_item'=>('View Video'),
                'not_found'=>('sorry,we can not find the Video you are locking for.'),
                
            ),
            'menu_icon'=>'dashicons-format-video',
            'public'=>true,
            'publicly_queryable'=>true,
            'exclude_from_search'=>true,
            'menu_position'=>5,
            'has_archive'=>true,
            'hierarchial'=>true,
            'show_ui'=>true,
            'capability_type'=>'post',
            'rewrite'=>array('slug'=>'videos'),
            'supports'=>array('title','thumbnail',),
        )
    );
    add_theme_support('post-thumbnails');
}
add_action('init','custom_video');
// Campaigns
function custom_campaign(){
    register_post_type('campaigns',
    array(
            'labels'=>array(
                'name'=>('Campaigns'),
                'singular_name'=>('Campaign'),
                'add_new'=>('Add new Campaign'),
                'add_new_item'=>('Add new Campaign'),
                'edit_item'=>('Edit Campaign'),
                'new_item'=>('New Campaign'),
                'View_item'=>('View Campaign'),
                'not_found'=>('sorry,we can not find the Campaign you are locking for.'),
                
            ),
            'menu_icon'=>'dashicons-format-gallery',
            'public'=>true,
            'publicly_queryable'=>true,
            'exclude_from_search'=>true,
            'menu_position'=>5,
            'has_archive'=>true,
            'hierarchial'=>true,
            'show_ui'=>true,
            'capability_type'=>'post',
            'rewrite'=>array('slug'=>'campaigns'),
            'supports'=>array('title','thumbnail',),
        )
    );
    add_theme_support('post-thumbnails');
}
add_action('init','custom_campaign');
    //             'capability_type'=>'post',
    //             'taxonomies'=>array('category'),