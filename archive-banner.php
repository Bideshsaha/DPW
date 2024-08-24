
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/assets/css/index.css'?>">
    <title>Document</title>
</head>
<body>
    <?php get_header()?>
    
    <div class="middleBody">
                <div class="grid-section">
                <?php
                    $args = array( 'post_type' => 'Banner', 'posts_per_page' => -1 );
                    $loop = new WP_Query( $args );
                        while ( $loop->have_posts() ) : $loop->the_post();
                            the_title();
            
                            the_post_thumbnail();
           
                        endwhile;
                ?>
                </div>       
    </div>

    <?php get_footer()?>
</body>
</html>