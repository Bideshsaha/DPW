<?php get_header(); ?>
<?php
$current_page_slug = get_post_field('post_name', get_the_ID());
$current_page_title = get_post_field('post_title', get_the_ID());
$get_current_posttype_slug = dpw_get_cpt_slug($current_page_slug);
$is_banner_class = $current_page_slug == 'banner' ? 'banner' : '';
$is_video_class = $current_page_slug == 'video' ? 'video' : '';
$is_aplus_class = $current_page_slug == 'a-plus-content' ? 'aplus' : '';
//infrormation to display custom post types
$current_page = get_query_var('paged');
$current_page = max(1, $current_page);
$per_page = 6;
// $offset_start = 1;
$offset = ($current_page - 1) * $per_page;
// var_dump($get_current_posttype_slug);
$args = array(
    'post_type' => $get_current_posttype_slug,
    'orderby' => 'time',
    'posts_per_page' => $per_page,
    'offset' => $offset
);
$my_query = new WP_Query($args);
?>
<div class="page-contains">

    <!-- Breadcrumb -->
    <div class="breadcrumb">
        <?php echo '<a href="' . home_url("/") . '">Home</a><span class="divider"> / </span>
                    <a href="' . get_permalink() . '">' . $current_page_title . '</a><span class="divider"> / </span>'
        ?>
    </div>
    <!-- Breadcrumb -->

    <div class="cpost <?php echo $is_banner_class, $is_video_class, $is_aplus_class; ?>">
        <?php
        if ($my_query->have_posts()) :
            while ($my_query->have_posts()) : $my_query->the_post();
                if ($get_current_posttype_slug === 'videos') {
        ?>
                    <div class="card">
                        <?php the_content(); ?>
                    </div>
                <?php
                } else {
                ?>
                    <div class="card">
                        <a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>
                    </div>
        <?php
                }
            endwhile;
        endif;
        wp_reset_query();
        ?>
    </div>
    <div class="pagination">
        <?php
        if (isset($get_current_posttype_slug)) {
            $count_posts = wp_count_posts(strtolower($get_current_posttype_slug));
            $pagination_count = ceil($count_posts->publish / $per_page);
            for ($i = 1; $i <= $pagination_count; $i++) {
                echo '<a class="page-nav" href=" ' . get_the_permalink() . '?paged= ' . $i . '">' . $i . '</a>';
            }
        }
        ?>
    </div>
</div>
<?php get_footer(); ?>