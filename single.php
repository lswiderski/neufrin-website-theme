<?php
/**
*S ingle Post Template: Post
*/
?>


<?php get_header(); ?>

 <?php /* The loop */ ?>
            <?php while ( have_posts() ) : the_post(); ?>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
     <header class="intro-header" style="background-image: url('<?php
            if ( has_post_thumbnail() ) {




//Get the Thumbnail URL
$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 1900,600 ), false, '' );

                $data = getimagesize($src[0]);
$width = $data[0];
$height = $data[1];

if($width>1000 && $height>500)
{
   echo $src[0]; 
}
else{


   $src= "http://neufrin.com/home-bg.jpg";
   echo $src;
}

}

else{


   $src= "http://neufrin.com/home-bg.jpg";
   echo $src;
} {
    # code...
}?>')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="post-heading">
                        <h1><?php the_title(); ?></h1>
                        <h2 class="subheading"><?php if (function_exists('the_subheading')) { the_subheading('<span>', '</span>'); } ?> </h2>
                        <span class="meta">Posted by <a href="#"><?php the_author_posts_link(); ?></a> on <?php the_time('F jS, Y'); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Post Content -->
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            

                

                        <?php the_content(); ?>


                <?php comments_template(); ?>
            <?php endwhile; ?>
                </div>
            </div>
        </div>
    </article>

 
 <?php get_sidebar(); ?>
<?php get_footer(); ?>