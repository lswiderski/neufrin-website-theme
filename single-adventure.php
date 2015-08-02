<?php
/**
*Single Post Template: Adventure
*/
?>


<?php get_header(); ?>

 <?php /* The loop */ ?>
            <?php while ( have_posts() ) : the_post(); ?>

   
    <!-- Post Content -->
    <article>
        <div class="container-fluid">
                
                        <?php the_content(); ?>
            <?php endwhile; ?>

        </div>
    </article>

 
 <?php get_sidebar(); ?>
<?php get_footer(); ?>