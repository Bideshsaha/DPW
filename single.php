<div class="php">
<?php get_header()?>
<?php echo 'this is from single';?>


<!-- Breadcrumb -->
 
<!-- Breadcrumb -->

<div class="middleBody">
        <div class="grid-section">
            <?php /* The loop */ ?>
            <?php while ( have_posts() ) : the_post();?>
                <h1><?php the_title(); ?></h1>
                <?php the_post_thumbnail();?>
        </div>

            <?php endwhile; ?>
</div>

<?php get_footer()?>
</div>