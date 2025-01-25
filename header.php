<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title><?php echo get_bloginfo('name'); ?></title>
    <?php wp_head(); ?>
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
                <div class="logo"><?php echo get_custom_logo(); ?></div>

                <div class="desktop-menu">
                    <?php wp_nav_menu(
                        array(
                            'theme_location' => 'header-menu',
                            'menu_class' => 'homeMenu',
                        )
                    ) ?>
                </div>
            </div>
            <div>
                <a href="javascript:void(0);" class="icon" onclick="dpwMenuDisplay()">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
        </div>
        <div class="topnav">
            <?php wp_nav_menu(
                array(
                    'theme_location' => 'header-menu',
                    'menu_id' => 'myLinks',
                )
            ) ?>
        </div>