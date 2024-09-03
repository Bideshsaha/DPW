<div class="body">
            <!-- upperBodysection -->
            <div class="upperBody">
                <div>
                    <h1>Student Campaigns</h1>
                    <p>Creative advertisements created by students from around the world.</p>
                </div>
                <div>
                    <p>                    
                        <?php
                            // Get total number of posts for each post type
                            $post_types = array('a-content', 'socialmedia', 'logos');
                            $total_posts = 0;
                            foreach ($post_types as $post_type) {
                             $count_posts = wp_count_posts($post_type);
                                if (isset($count_posts->publish)) {
                                 $total_posts += $count_posts->publish;
                                }
                            }
                            echo $total_posts.' items';
                        ?>
                    </p>
                </div>
            </div>
            <div id="owl-slider" class="owl-carousel owl-theme">
                <!-- <div> Your Content </div> -->
                <?php 
                query_posts('post_type=banners&post_status=publish&posts_per_page=3&order=ASC&paged='.
                get_query_var('post'));
            

                if(have_posts()) :
                    while(have_posts()) :the_post();
                ?>
                <div>
                    <?php echo the_post_thumbnail('banners');?>
                </div>              
                <?php 
                    endwhile;
                    endif;
                ?>

            </div>
            <!-- MiddleBodysection -->
            
<div class="middleBody">

<!-- APlusContent, Logo, SocialMedia, Banner sections -->
<?php
    $sections = array('a-content','socialmedia','logos',); 
    foreach ($sections as $section) {
        $grid_class = 'grid-section'; 
        ?>
        <div class="<?php echo $grid_class; ?>">
            <?php
            $args = array(
                'post_type' => $section,
                'orderby' => 'time',
                'meta_query'=> array(
                    array(
                    'key' => 'dpw_isvisible',
                    'compare' => '=',
                    'value'=> 'on',
                    )
             )
            );
            $my_query = new WP_Query($args);

            if ($my_query->have_posts()) :
                while ($my_query->have_posts()) : $my_query->the_post(); ?>
                    <?php the_post_thumbnail(); ?>  
                <?php
                endwhile;
            endif;
            wp_reset_query(); // Restore global post data stomped by the_post().
            ?>
            <div class="show-more">
                <a href="<?php echo get_post_type_archive_link($section); ?>" class="button">
                    View More <?php echo ucwords(str_replace('-', ' ', $section)); ?>
                </a>
            </div>
        </div>
        <?php
    }
?>

</div>
         </div>

