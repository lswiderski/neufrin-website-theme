    <?php get_header(); ?>



        <!-- Main Content -->
        <div class="container">
            <div class="row">
                 <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">


<?php /* The loop */ ?>
            <?php while ( have_posts() ) : the_post(); ?>

                
                    <div class="post-preview  <?php post_class(); ?>" id="post-<?php the_ID(); ?> ">
                        <div class="">
                        <?php
                            if(has_post_thumbnail())
                            {
                                the_post_thumbnail('large', array( 'class' => 'img-responsive center-block' ));
                            }
                            ?>
                          </div>
                        <a href="<?php the_permalink(); ?>" rel="bookmark"  title="Permanent Link to <?php the_title_attribute(); ?>">
                            <h2 class="post-title">
                               <?php the_title(); ?>
                            </h2>
                            <h3 class="post-subtitle">
                               <?php echo get_the_excerpt(); ?>
                            </h3>
                        </a>
                        <p class="post-meta">Posted by <a href="#"><?php the_author_posts_link(); ?></a> on <?php the_time('F jS, Y'); ?></p>
                    </div>
                    <hr>
            <?php endwhile; ?>
    
            
                    <!-- Pager -->
                    <ul class="pager">
                        <li class="next">
                        <?php next_posts_link('Older Posts &rarr;'); ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    <?php get_sidebar(); ?>
    <?php get_footer(); ?>