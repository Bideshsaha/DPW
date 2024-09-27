<?php get_header();?>

<?php 
    $current_post_type = get_post_type();
    $is_banner_class = $current_post_type == 'banners' ? 'banner' : '' ;
    $is_video_class = $current_post_type == 'videos' ? 'video' : '' ;
    $archive_link = get_post_type_archive_link($current_post_type);
    $get_archive_page_title = dpw_get_parent_page_title_in_single_page($current_post_type);
?>
<div class="archive-page">
<!-- Breadcrumb -->
<div class="breadcrumb"> 
    <?php
        echo '<a href="'.home_url("/").'">Home</a><span class="divider"> / </span>
            <a href="'.$archive_link.'">'.$get_archive_page_title.'</a><span class="divider"> / </span>'
    ?>
</div>
<!-- Breadcrumb --> 
<!-- <div class="middleBody"> -->
    <div class="grid-section <?php echo $is_banner_class ,$is_video_class; ?>">
        <?php
            $current_page = get_query_var('paged');
            $current_page = max( 1, $current_page );
            $per_page = 6;
            $offset_start = 1;
            $offset = ( $current_page - 1 ) * $per_page + $offset_start;
           // $current_post_type = get_post_type();
                $args = array( 
                    'post_type' => $current_post_type,
                    'posts_per_page'=> $per_page,
                    'offset' => $offset,                    
                );
                $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post();
        ?>  
            <a class="card" href="<?php the_permalink()?>">
            <?php $current_post_type === 'videos' ? the_content() : the_post_thumbnail();?> 
            </a> 
        <?php endwhile;?>
        <?php wp_reset_query();?> 
    </div>     
<!-- </div> -->
<!-- pagination section -->
<div class="pagination">
    <?php    
        $count_posts = wp_count_posts($current_post_type);
        $pagination_count = ceil($count_posts->publish / $per_page);
        for($i=1;$i<=$pagination_count;$i++){
            echo '<a class="page-nav" href="'.'?paged='.$i.'">'.$i.'</a>';
        } ;
    ?>
</div>
</div>
<?php get_footer();?>


