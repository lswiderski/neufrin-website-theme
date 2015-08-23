<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <meta name="description" content="">
    <meta name="author" content="Lukasz Swiderski">

    <title><?php wp_title( '|', true, 'right' ); ?></title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <!--<link href="<?php bloginfo('template_url'); ?>/css/clean-blog.min.css" rel="stylesheet">-->
    <link href="<?php bloginfo('template_url'); ?>/css/clean-blog.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&subset=latin-ext' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin-ext' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<?php wp_head(); ?>
</head>

<body>

   

            <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php bloginfo('url')?>"><?php bloginfo('name')?></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <?php /* Primary navigation */
wp_nav_menu( array(
  'menu' => 'top_menu',
  'depth' => 2,
  'container' => false,
  'menu_class' => 'nav navbar-nav navbar-right',
  //Process nav menu using our custom nav walker
  'walker' => new wp_bootstrap_navwalker())
);
?>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    
    <?php  ?>
          <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
     <header class="intro-header" style="background-image: url('<?php

//Get the Thumbnail URL
$success = false;

if (class_exists('MultiPostThumbnails')) 
{
    $src =  MultiPostThumbnails::get_post_thumbnail_url(
        get_post_type(),
        'page-header',
        $post->ID
    );
    if($src != '')
    {
        $success = true;
        echo $src;  
    }
    else
    {
        $success = false; 
    }
    
}

if(has_post_thumbnail() && $success == false)
{
    $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 1900,600 ), false, '' ); 
    $data = getimagesize($src[0]);
    $width = $data[0];
    $height = $data[1];

    if($width>1000 && $height>500)
    {
        $success = true;
        echo $src[0]; 
    }
    else
    {
        $success = false; 
    }
}    

if($success==false)
{
    $success = true;
    $src= "http://neufrin.com/home-bg.jpg";
    echo $src;
}?>')">
        <div class="container" id="header_Container" style="color:white; text-align: center;">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="post-heading">
                        <h1><?php wp_title(''); ?></h1>
                        <h2 class="subheading"><?php if (function_exists('the_subheading')) { the_subheading('<span>', '</span>'); } ?> </h2>
                          <span class="subheading">Imagination is more important than knowledge</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
   
