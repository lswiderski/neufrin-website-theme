    <?php get_header(); ?>

     <!-- Page Header -->
        <!-- Set your background image for this header on the line below. -->
        <header class="intro-header" style="background-image: url('img/home-bg.jpg')">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                        <div class="site-heading">
                            <h1>Clean Blog</h1>
                            <hr class="small">
                            <span class="subheading">A Clean Blog Theme by Start Bootstrap</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Main Content -->
        <div class="container">
            <div class="row">
            <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
      <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="post-header">
            <div class="date"><?php the_time( 'M j y' ); ?></div>
            <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
            <div class="author"><?php the_author(); ?></div>
        </div><!--end post header-->
        <div class="entry clear">
            <?php if ( function_exists( 'add_theme_support' ) ) the_post_thumbnail(); ?>
            <?php the_content(); ?>
            <?php edit_post_link(); ?>
            <?php wp_link_pages(); ?>
        </div><!--end entry-->
        <div class="post-footer">
            <div class="comments"><?php comments_popup_link( 'Leave a Comment', '1 Comment', '% Comments' ); ?></div>
        </div><!--end post footer-->
      </div><!--end post-->
    <?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
      <div class="navigation index">
        <div class="alignleft"><?php next_posts_link( 'Older Entries' ); ?></div>
        <div class="alignright"><?php previous_posts_link( 'Newer Entries' ); ?></div>
      </div><!--end navigation-->
    <?php else : ?>
    <?php endif; ?>

    
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="post-preview">
                        <a href="post.html">
                            <h2 class="post-title">
                                Man must explore, and this is exploration at its greatest
                            </h2>
                            <h3 class="post-subtitle">
                                Problems look mighty small from 150 miles up
                            </h3>
                        </a>
                        <p class="post-meta">Posted by <a href="#">Start Bootstrap</a> on September 24, 2014</p>
                    </div>
                    <hr>
                    <div class="post-preview">
                        <a href="post.html">
                            <h2 class="post-title">
                                I believe every human has a finite number of heartbeats. I don't intend to waste any of mine.
                            </h2>
                        </a>
                        <p class="post-meta">Posted by <a href="#">Start Bootstrap</a> on September 18, 2014</p>
                    </div>
                    <hr>
                    <div class="post-preview">
                        <a href="post.html">
                            <h2 class="post-title">
                                Science has not yet mastered prophecy
                            </h2>
                            <h3 class="post-subtitle">
                                We predict too much for the next year and yet far too little for the next ten.
                            </h3>
                        </a>
                        <p class="post-meta">Posted by <a href="#">Start Bootstrap</a> on August 24, 2014</p>
                    </div>
                    <hr>
                    <div class="post-preview">
                        <a href="post.html">
                            <h2 class="post-title">
                                Failure is not an option
                            </h2>
                            <h3 class="post-subtitle">
                                Many say exploration is part of our destiny, but it’s actually our duty to future generations.
                            </h3>
                        </a>
                        <p class="post-meta">Posted by <a href="#">Start Bootstrap</a> on July 8, 2014</p>
                    </div>
                    <hr>
                    <!-- Pager -->
                    <ul class="pager">
                        <li class="next">
                            <a href="#">Older Posts &rarr;</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    <?php get_sidebar(); ?>
    <?php get_footer(); ?>