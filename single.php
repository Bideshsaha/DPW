<?php get_header()?>
<!-- <?php echo 'this is from single';?> -->


<!-- Breadcrumb -->
<?php
    $current_post_type = get_post_type();
    $archive_link = get_post_type_archive_link($current_post_type);
    $post_type = get_post_type_object( get_post_type($post) ); 
    // echo $post_type->name ; 
    $get_parent_page_title = dpw_get_parent_page_title_in_single_page($post_type->name);
    // var_dump($post_type);
    $current_page_title = get_post_field('post_title', get_the_ID());
?>
<div class="breadcrumb">
    <?php   echo '<a href="'.home_url("/").'">Home</a><span class="divider"> / </span>
                <a href="'.$archive_link.'">'.$get_parent_page_title.'</a><span class="divider"> / </span>
                <a href="'.get_permalink().'">'.$current_page_title.'</a><span class="divider"> / </span>'
    ?>
</div>
<!-- Breadcrumb -->
<!-- <div class="middleBody"> -->
    <div class="single-section">
        <?php /* The loop */ ?>
        <?php while ( have_posts() ) : the_post();?>
            <h1><?php the_title(); ?></h1>
            <?php $current_post_type === 'videos' ? the_content() : the_post_thumbnail();?>
    </div>
        <?php endwhile; ?>
<!-- </div> -->
<?php get_footer()?>
