<?php get_header();?>
<?php echo'this is main archive'?>
   
<div class="middleBody">
                <div class="grid-section">
                <?php
                $current_post_type = get_post_type();
                    $args = array( 
                        'post_type' => $current_post_type,
                        'posts_per_page' => -1 
                    );
                    $loop = new WP_Query( $args );
                        while ( $loop->have_posts() ) : $loop->the_post();
                            the_title();
            
                            the_post_thumbnail();
           
                        endwhile;
                ?>
                </div>       
    </div>

<?php get_footer();?>