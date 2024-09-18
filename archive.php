<?php 
get_header();
echo'this is main archive'
?>

   
<div class="middleBody">
    <div class="grid-section">
        <?php
            $current_page = get_query_var('paged');
            $current_page = max( 1, $current_page );
            $per_page = 6;
            $offset_start = 1;
            $offset = ( $current_page - 1 ) * $per_page + $offset_start;

            $current_post_type = get_post_type();
                $args = array( 
                    'post_type' => $current_post_type,
                    'posts_per_page'=> $per_page,
                    'offset' => $offset,
                    
                );
                $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post();
        ?>  
            <a class="card" href="<?php the_permalink()?>"><?php the_post_thumbnail();?> </a> 
        <?php endwhile;?>
        <?php wp_reset_query();?> 
    </div>     
</div>
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
<?php get_footer();?>


