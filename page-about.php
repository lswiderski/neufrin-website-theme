<?php
/**
 * Template Name: About Page
 *

 */
?>
    <?php get_header(); ?>



<?php /* The loop */ ?>
            <?php while ( have_posts() ) : the_post(); ?>

   
    <!-- Post Content -->
    <article>
        <div class="container-fluid">
            <div class="row">
               
                        <?php the_content(); ?>
            <?php endwhile; ?>
               
            </div>
        </div>
    </article>


    <?php get_sidebar(); ?>
    <?php get_footer(); ?>