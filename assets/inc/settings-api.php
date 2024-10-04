<?php
function dpw_api_frontpage()
{
    add_settings_section('theme-option', 'heading', 'dpw_heading_callabck', 'general',);
    add_settings_field('pageTitle', 'Enter your title', 'dpw_pageTitle_callback', 'general', 'theme-option');
    add_settings_field('pageSubTitle', 'Enter your subtitle', 'dpw_pageSubTitle_callback', 'general', 'theme-option');

    register_setting('general', 'pageTitle');
    register_setting('general', 'pageSubTitle');
}

add_action('admin_init', 'dpw_api_frontpage');

function dpw_heading_callabck()
{
    echo 'please enter your data';
}


function dpw_pageTitle_callback()
{ ?>
    <input type="text" class="regular-text ltr" name="pageTitle" value="<?php echo  get_option('pageTitle'); ?>" id="pageTitle-Text">
<?php } ?>

<?php function dpw_pageSubTitle_callback()
{ ?>
    <input type="text" class="regular-text ltr" name="pageSubTitle" value="<?php echo get_option('pageSubTitle'); ?>" id="pageSubTitle-Text">
<?php } ?>