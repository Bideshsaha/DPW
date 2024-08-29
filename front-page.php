
<?php get_header()?>
        <!-- Main body section -->
         <div class="body">
            <!-- upperBodysection -->
            <div class="upperBody">
                <div>
                    <h1>Student Campaigns</h1>
                    <p>Creative advertisements created by students from around the world.</p>
                </div>
                <div>
                    <p>4258 items</p>
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
    $sections = array('a-content', 'logos', 'SocialMedia', 'campaigns', 'videos'); // Removed 'banners'
    foreach ($sections as $section) {
        $grid_class = 'grid-section'; // Removed the condition for 'banners'
        ?>
        <div class="<?php echo $grid_class; ?>">
            <?php
            $args = array(
                'post_type' => $section,
                'orderby' => 'time',
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
        </div>
        <?php
    }
?>

             </div>
             <!-- pagination section -->
              <div class="pagination">
                <div class="pageNumbers"></div>
              </div>
         </div>
         
<?php get_footer()?>
<?php echo 'front-page';?>
