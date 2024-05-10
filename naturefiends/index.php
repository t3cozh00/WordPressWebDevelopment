<?php 

get_header(); ?>

<div id='content'>
    <main>
<?php 
if ( have_posts() ): //ask if there are posts
//as long as there are posts, go to each one, set the context, then use the simple command '<h2><?php the_title();', then get the title, the content, the category and so on 
    while ( have_posts() ): the_post(); ?>
    <article>
        <h2><a href='<?php the_permalink(); ?>'><?php the_title(); ?></a></h2>
        <p class='date-category'><?php echo get_the_date(); ?> | <?php echo get_the_category_list(', '); ?></p>
        <?php the_excerpt(); ?>
    </article>

    <?php
    endwhile; 
else:
    echo '<p>No posts found.</p>'; //if there is no post
endif; ?>

</main>

<?php get_sidebar(); ?>

</div><!--- content --->

<?php 
get_footer();
?>