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
                    <?php /* The loop */ ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <h1><?php the_title(); ?></h1>
                        <?php the_post_thumbnail();?>
                </div>

                    <?php endwhile; ?>
    </div>

    <?php get_footer()?>
</body>
</html>





