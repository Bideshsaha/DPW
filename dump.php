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
echo $total_posts . ' items';
?>

<!-- APlusContent section -->
<div class="grid-section">
    <?php
    $args = array(
        'post_type' => array('APlusContent',),
        'orderby' => 'time',
    );
    $my_query = new WP_Query($args);

    if ($my_query->have_posts()) :
        while ($my_query->have_posts()) : $my_query->the_post(); ?>

            <?php the_post_thumbnail(); ?>
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
        'post_type' => array('Logo',),
        'orderby' => 'time',
    );
    $my_query = new WP_Query($args);

    if ($my_query->have_posts()) :
        while ($my_query->have_posts()) : $my_query->the_post(); ?>

            <?php the_post_thumbnail(); ?>
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
        'post_type' => array('SocialMedia',),
        'orderby' => 'time',
    );
    $my_query = new WP_Query($args);

    if ($my_query->have_posts()) :
        while ($my_query->have_posts()) : $my_query->the_post(); ?>

            <?php the_post_thumbnail(); ?>
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
        'post_type' => array('Banner',),
        'orderby' => 'time',
    );
    $my_query = new WP_Query($args);

    if ($my_query->have_posts()) :
        while ($my_query->have_posts()) : $my_query->the_post(); ?>

            <?php the_post_thumbnail(); ?>
    <?php
        endwhile;
    endif;
    wp_reset_query();  // Restore global post data stomped by the_post().
    ?>
</div>

<!-- Banner section -->


footer cutout

<!-- upperFooter -->
<div class="upperFooter">
    <h2>Sign up for our newsletter</h2>
    <p>Don't miss out. Receive our free weekly newsletter to learn about the best creative work from all around the globe. We're keeping your email safe and confidential.</p>
    <div class="search-section">
        <input type="text" placeholder="Keyword" name="search" class="homeSearch">
        <input type="button" name="search-btn" class="homeSearch-btn" value="Search">
    </div>
</div>
footer cutout

<div class="footer-left-section">
    <div class="logo"><?php echo get_custom_logo(); ?></div>
    <p>Creative Advertising World</p>
</div>
<div class="footer-right-section">
    <a href="">
        <svg class="svg-inline--fa fa-twitter fa-w-16" width="1em" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="twitter" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
            <path fill="currentColor" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path>
        </svg>
    </a>
    <a href="">
        <svg class="svg-inline--fa fa-facebook fa-w-16" width="1em" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
            <path fill="currentColor" d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"></path>
        </svg>
    </a>
    <a href="">
        <svg class="svg-inline--fa fa-linkedin fa-w-14" width="1em" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="linkedin" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
            <path fill="currentColor" d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"></path>
        </svg>
    </a>
    <a href="">
        <svg class="svg-inline--fa fa-instagram fa-w-14" width="1em" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="instagram" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
            <path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path>
        </svg>
    </a>
</div>


single .php
<div class="php">
    <?php get_header() ?>
    <?php echo 'this is from single'; ?>
    <?php $single_post_title = get_post_field('post_title', get_the_ID()); ?>




    <!-- Breadcrumb -->
    <?php echo '<a href="' . home_url("/") . '">Home</a><span class="divider"> / </span><a href="' . get_permalink() . '">' . $single_post_title . '</a><span class="divider"> / </span>' ?>
    <!-- Breadcrumb -->

    <div class="middleBody">
        <div class="grid-section">
            <?php /* The loop */ ?>
            <?php while (have_posts()) : the_post(); ?>
                <h1><?php the_title(); ?></h1>
                <?php the_post_thumbnail(); ?>
        </div>

    <?php endwhile; ?>
    </div>

    <?php get_footer() ?>
</div>


<!-- owl carosel -->

/* owl-slider owl-stage-outer owl-nav owl-dots owl-prev owl-next*/
/* #owl-slider {
position: relative;
height: 450px;
display: flex;
justify-content: center;
align-items: flex-end;
}

#owl-slider .owl-stage-outer,
.owl-nav,
.owl-dots {
position: absolute;
}
.owl-nav {
width: 100%;
height: 80%;
display: flex;
justify-content: space-between;
align-items: center;
}
.owl-dots .owl-dot span {
display: flex;
font-size: 20px;
border: none;
}

.owl-nav .owl-prev,
.owl-next span {
font-size: 35px;
border: 1px solid black;
border-radius: 50%;
}

.owl-carousel .owl-item img {
-webkit-transform-style: flat;
-moz-transform-style: flat;
-ms-transform-style: flat;
-o-transform-style: flat;
transform-style: flat;
} */

/* .owl-carousel {
position: relative;
} */
/* .owl-next, .owl-prev {
position: absolute;
top: 50%;
transform: translateY(-50%);
-webkit-transform: translateY(-50%);
} */
/* .owl-next {
right: 0;
display: flex;
}
.owl-prev{
left: 0;
display: flex;
} */


<video src="

                        <iframe width=" 853" height="480" src=" <?php echo get_the_content(); ?>" title="Video" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
    </iframe>
    "></video>