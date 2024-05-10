<?php 

get_header(); ?>

<div id='content'>
    <main>
<?php 
if ( have_posts() ):
    while ( have_posts() ): the_post(); ?>
    <article>
        <h2><?php the_title(); ?></h2>
        
        <?php the_content(); ?>
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