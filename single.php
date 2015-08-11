<?php
/**
*Single Post Template: Post
*/
?>


<?php get_header(); ?>

 <?php /* The loop */ ?>
            <?php while ( have_posts() ) : the_post(); ?>

   
    <!-- Post Content -->
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                        <?php the_content(); ?>
            <?php endwhile; ?>
            <ul class="pager">
                    <li class="next">
                        <a href="javascript:history.go(-1)" onMouseOver="self.status=document.referrer;return true">Back</a>
                    </li>
                </ul>
            
                </div>
            </div>
        </div>
    </article>

 
 <?php get_sidebar(); ?>
<?php get_footer(); ?>