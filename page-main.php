<?php
/**
 * Template Name: Main page
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
               <div class="col-lg-6 col-lg-offset-1 col-md-7 col-md-offset-1">
                        <?php the_content(); ?>
                        
                        
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="list-group">
                                              <a href="#" class="list-group-item active">
                                                Adventures
                                              </a>
                                                <?php $adventure_query = new WP_Query( 'category_name=adventure&posts_per_page=3' ); ?>
                
                                                   <?php while ( $adventure_query->have_posts() ) : $adventure_query->the_post(); ?>
                	                               <div class="  <?php post_class(); ?>" id="post-<?php the_ID(); ?> ">
                                                        <a href="<?php the_permalink(); ?>" class="list-group-item" rel="bookmark"  title="Permanent Link to <?php the_title_attribute(); ?>">
                                                            <h5 class="post-title">
                                                               <?php the_title(); ?>
                                                            </h5>
                                                        </a>
                                                </div>              
                                                <?php endwhile; ?>
                                                <a href="#" class="list-group-item text-right"><h6>Show more...</h6></a>         
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="list-group">
                                              <a href="#" class="list-group-item active">
                                                Projects
                                              </a>
                                                <?php $projects_query = new WP_Query( 'category_name=projects&posts_per_page=3' ); ?>
                
                                                   <?php while ( $projects_query->have_posts() ) : $projects_query->the_post(); ?>
                	                               <div class="  <?php post_class(); ?>" id="post-<?php the_ID(); ?> ">
                                                        <a href="<?php the_permalink(); ?>" class="list-group-item" rel="bookmark"  title="Permanent Link to <?php the_title_attribute(); ?>">
                                                            <h5 class="post-title">
                                                               <?php the_title(); ?>
                                                            </h5>
                                                        </a>
                                                </div>              
                                                <?php endwhile; ?>
                                                <a href="#" class="list-group-item text-right"><h6>Show more...</h6></a>      
                                        </div>
                                    </div>
                                </div>
                        
               </div>
               <div class="col-lg-4 col-lg-offset-1 col-md-2 col-md-offset-1">
                   <h4 class="text-center">Instagram</h4>
                        <?php echo do_shortcode('[fts instagram instagram_id=1315352355 type=user]'); ?>
                        <h4 class="text-center">Twitter</h4>
                        <?php echo do_shortcode('[fts twitter twitter_name=neufrin twitter_height=450px]'); ?>
               </div>
            <?php endwhile; ?>
               
            </div>
        </div>
    </article>


    <?php get_sidebar(); ?>
    <?php get_footer(); ?>