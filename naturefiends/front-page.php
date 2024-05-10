<?php 

get_header(); ?>

<div id='content'>
    <main>
        <div id='news-box'>

<?php 
$the_query = new WP_Query(array(
    'category_name' => 'news',
    'orderby' => 'date',
    'order' => 'desc',
    'posts_per_page' => '3'
));


if ( $the_query->have_posts() ):
    while ( $the_query->have_posts() ): $the_query->the_post(); ?>
    <div class='news'>
        <h2><?php the_title(); ?></h2>
        <p class='date-category'><?php echo get_the_date(); ?></p>
        <?php the_content(); ?>
    </div>

    <?php
    endwhile; 
else:
    echo '<p>No posts found.</p>'; //if there is no post
endif; ?>

</div><!--- news-box --->
</main>

<?php get_sidebar(); ?>

</div><!--- content --->

<?php 
get_footer();
?>