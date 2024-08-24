                <!-- APlusContent section -->
                <div class="grid-section">
                    <?php
                        $args = array(
                                'post_type' => array( 'APlusContent', ),
                                'orderby' => 'time',
                            );
                        $my_query = new WP_Query( $args );

                        if( $my_query->have_posts() ) :
                        while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
    
                                <?php the_post_thumbnail();?>  
                        <?php
                        endwhile;
                        endif;
                        wp_reset_query();  // Restore global post data stomped by the_post().
                    ?>
                </div>
                 <!-- APlusContent section -->
                  <!-- Logo section -->
                  <div class="grid-section">
                    <?php
                        $args = array(
                                'post_type' => array( 'Logo', ),
                                'orderby' => 'time',
                            );
                        $my_query = new WP_Query( $args );

                        if( $my_query->have_posts() ) :
                        while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
    
                                <?php the_post_thumbnail();?>  
                        <?php
                        endwhile;
                        endif;
                        wp_reset_query();  // Restore global post data stomped by the_post().
                    ?>
                </div>
                   <!-- Logo section -->
                <!-- SocialMedia section -->
                <div class="grid-section">
                    <?php
                        $args = array(
                                'post_type' => array( 'SocialMedia', ),
                                'orderby' => 'time',
                            );
                        $my_query = new WP_Query( $args );

                        if( $my_query->have_posts() ) :
                        while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
    
                                <?php the_post_thumbnail();?>  
                        <?php
                        endwhile;
                        endif;
                        wp_reset_query();  // Restore global post data stomped by the_post().
                    ?>
                </div>
                <!-- SocialMedia section -->
                 <!-- Banner section -->
                 <div class="grid-section-banner">
                    <?php
                        $args = array(
                                'post_type' => array( 'Banner', ),
                                'orderby' => 'time',
                            );
                        $my_query = new WP_Query( $args );

                        if( $my_query->have_posts() ) :
                        while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
    
                                <?php the_post_thumbnail();?>  
                        <?php
                        endwhile;
                        endif;
                        wp_reset_query();  // Restore global post data stomped by the_post().
                    ?>
                </div>

                  <!-- Banner section -->
