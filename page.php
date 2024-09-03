<?php get_header();?>
<?php 
echo 'this is from page';


the_title();
$current_page_slug = get_post_field('post_name', get_the_ID());

//$get_current_posttype_slug = dpw_get_cpt_slug($current_page_slug)
$args = array(
    'post_type' =>$current_page_slug,
    'orderby' => 'time',
);
$my_query = new WP_Query( $args );

if( $my_query->have_posts() ) :
while ( $my_query->have_posts() ) : $my_query->the_post(); ?>

    <?php the_post_thumbnail();?>  
<?php
endwhile;
endif;
wp_reset_query();

?>


<?php get_footer();?>