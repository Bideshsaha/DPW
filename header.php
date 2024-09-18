
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/assets/css/custom.css'?>"> -->
    
    <title><?php echo get_bloginfo('name');?></title>
   <?php wp_head();?>
</head>
<body>

<div class="wrapper">

<!-- upperHeaderSection -->
<div class="upperHeader">
    <div class="left-upperHeader">
        <div class="list">
            <!-- codes will be added -->
            <p>Kolkata: 4/1A, Asgar Mistry Lane, Kolkata, West Bengal - 700046.</p>
        </div>
    </div>
    <div class="right-upperHeader">
        <div class="list">
            <!-- codes will be added -->
            <p>info@digitalprworld.com |
            (+91) 9674975029</p>
        </div>
    </div>
</div>
<!-- HeaderSection -->
<div class="header">
    
        <div class="left-header">
            <!-- leftHeaderSection -->
            <div class="logo"><?php echo get_custom_logo();?></div>
            <div>
                <?php wp_nav_menu(
                array(        
                    'theme_location'=>'header-menu',
                    'menu_class'=>'homeMenu',
                    )
                )?>
            </div>
        </div>

    
</div>
