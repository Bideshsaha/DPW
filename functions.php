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

function dpw_get_cpt_slug($current_page_slug) {

   
    switch($current_page_slug){
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
function dpw_get_parent_page_title_in_single_page($post_name) {

   
    switch($post_name){
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

//add meta box
include_once('assets/inc/metabox.php');

//add widget
include_once('assets/inc/widgets_register.php');

//add settings api

function dpw_api_frontpage(){
    add_settings_section( 'theme-option', 'heading', 'dpw_heading_callabck', 'general', );
    add_settings_field( 'pageTitle', 'Enter your title', 'dpw_pageTitle_callback', 'general', 'theme-option' );
    add_settings_field( 'pageSubTitle', 'Enter your subtitle', 'dpw_pageSubTitle_callback', 'general', 'theme-option' );

    register_setting( 'general','pageTitle');
    register_setting( 'general','pageSubTitle');
}

add_action('admin_init','dpw_api_frontpage');

function dpw_heading_callabck(){
    echo 'please enter your data';
}


function dpw_pageTitle_callback(){ ?>
    <input type="text" class="regular-text ltr" name="pageTitle" value="<?php echo  get_option('pageTitle') ; ?>" id="pageTitle-Text">
<?php }?>

<?php function dpw_pageSubTitle_callback(){ ?>
    <input type="text" class="regular-text ltr" name="pageSubTitle" value="<?php echo get_option('pageSubTitle'); ?>" id="pageSubTitle-Text">
<?php }?>
<?php
//pagination

// function bid_pagenav(){
//     global $wp_query, $wp_rewrite;
//     $pages ='';
//     $max=$wp_query->max_num_pages;
//     if(! $current= get_query_var('paged')) $current = 1;
//     $args['base'] = str_replace(999999999,'%#%',get_pagenum_link(999999999));
//     $args['total']=$max;
//     $args['current']=$current;
//     $total=1;
//     $args['prev_text']='Prev';
//     $args['next_text']='Next';
//     if($max >1) echo '</pre>
//         <div class="wp_pagenav">';
//         if($total == 1 && $max >1) $pages = '<p class="pages"> page ' .$current . '<span>of</span>' . $max . '</p>';
//         echo $pages . paginate_links($args);
//         if($max>1) echo'</div><pre>';


        
// }


// function dpw_iframe_func($atts) {
//     extract(shortcode_atts(array(
//         'src' => ''
//     ), $atts));
//     return '<iframe width="853" height="480" src="{$src}" title="Mission, Vision and Purpose of Digital PR World" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>';
// }
// add_shortcode('dpw_iframe', 'dpw_iframe_func');