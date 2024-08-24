
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
            <!-- MiddleBodysection -->
             <div class="middleBody">
<!-- APlusContent, Logo, SocialMedia, Banner sections -->
<?php
    $sections = array('a-content', 'Logo', 'SocialMedia', 'Banner');
    foreach ($sections as $section) {
        $grid_class = $section === 'Banner' ? 'grid-section-banner' : 'grid-section';
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
