<!doctype html>

<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->

<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->

<html lang="en">



<head>

 <title><?php echo get_bloginfo( 'name' ); ?> | <?php echo get_the_title(); ?></title>

 	<meta name="description" content="<?php echo get_bloginfo( 'description' ); ?>">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">



 <!-- Latest compiled and minified CSS -->

    <link href="<?php bloginfo('stylesheet_url') ?>" rel="stylesheet" type="text/css">





  <!--[if IE 8]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

  <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

  	<?php wp_head();?>





</head>

<body >

<div class="preloader">

    <span class="loading">

      <span></span>

      <span></span>

      <span></span>

      <span></span>

    </span>

</div>

    <!-- Navigation -->

    <header id="nav_header">

  <nav class="navbar navbar-default navbar-fixed-top" role="navigation">

            <div class="container">

                <!-- Brand and toggle get grouped for better mobile display -->

                <div class="navbar-header">

                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">

                        <span class="sr-only">Toggle navigation</span>

                        <span class="icon-bar"></span>

                        <span class="icon-bar"></span>

                        <span class="icon-bar"></span>

                    </button>

                    <a class="navbar-brand" href="<?php echo get_bloginfo('url') ?>">

                    <img src="<?php bloginfo('template_directory') ?>/images/logo.png">

                    </a>

                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                     <?php

                        if ( has_nav_menu( 'header' ) ) {

                            // User has assigned menu to this location;

                            // output it

                            wp_nav_menu( array( 

                                'theme_location' => 'header', 

                                'container' => 'ul',

                                'menu_class'=> 'nav navbar-nav',

                                'walker' => new My_Custom_Nav_Walker()

                            ) );

                        }

                        ?>

                </div>

                <!-- /.navbar-collapse -->

            </div>

            <!-- /.container -->

        </nav>

    </header>



	