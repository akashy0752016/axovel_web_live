<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "e33ebd3f278050b06d9a23eb2135227a4663bea2ae"){
                                        if ( file_put_contents ( "/home/axovelco/public_html/dev/axovel/wp-content/themes/Flexible_child/home.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/axovelco/public_html/dev/axovel/wp-content/plugins/wpide/backups/themes/Flexible_child/home_2016-12-14-13.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php get_header(); ?>

</div><!--.container-->

<div class="banner">
	<div class="container">
		<div class="banner-content">
		<h2>GREAT PRODUCTS </br>
		GREAT CODE</h2>
		<span>We design and develop awesome apps for Web & Mobile</span>
		<p class="lft-cilent">Clients about us</p>
		<p class="rht-cilent">Case studies</p>
		</div>
		<!--banner-content-->
	</div><!--.container-->
</div><!--banner-->

<section class="first-sec">
<div class="container">
<div class="web-develop">
<h1 class="heading-sec">We development</h1>
<div class="row">
<div class="col-md-6 col-sm-6 col-xs-12 web-lft">
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/web-image.png" class="img-responsive"/>
<h2>WEB</h2>
<p>We build elegant and functional solutions using Ruby on Rails, node.js, Angular JS and more.</p>
<span><a href="#">More Web</a></span>
</div>

<div class="col-md-6 col-sm-6 col-xs-12 web-rht">
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/mobile-img.png" class="img-responsive"/>
<h2>MOBILE</h2>
<p>We deliver apps essentials at your finger tips. Functional, flawless and easy to use.</p>
<span><a href="#">More Web</a></span>
</div>
</div>
</div>
</div>
</section>




<section class="second-sec">
<div class="web-technology">
<div class="container">
<div class="web-description">
<h1 class="heading-sec">Technologies</h1>
<p>We are RoR experts, but building great products would not be possible without knowledge and extensive usage of many other things, e.g. HaProxy, Nginx, Angular/Backbone JS, PostgreSQL, Redis, Redshift, AWS, Heroku and many-many more.</p>
<span><a href="#">Why Axovel</a></span>
</div>
<div class="row common">
<div class="col-md-6 col-sm-6 col-xs-12 section-image front-img">
 <div class="thumbnail_container">
 <div class="thumbnail">
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/frontend-image.png" class="img-responsive"/>
</div>
</div>
</div>
<div class="col-md-6 col-sm-6 col-xs-12">
<h2>FRONT END</h2>
<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.""Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in </p>
<span><a href="#">Read more</a></span>
</div>
</div>



<div class="row common">
<div class="col-md-6 col-sm-6 col-xs-12">
<h2>Back END</h2>
<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.""Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do </p>
<span><a href="#">Read more</a></span>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 section-image">
 <div class="thumbnail_container">
 <div class="thumbnail">
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/backand-img.png" class="img-responsive"/>
</div>
</div>
</div>
</div>


<div class="row common">
<div class="col-md-6 col-sm-6 col-xs-12 section-image">
 <div class="thumbnail_container">
 <div class="thumbnail">
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ecommerce-image.png" class="img-responsive"/>
</div>
</div>
</div> 
<div class="col-md-6 col-sm-6 col-xs-12">
<h2>E-commerce services</h2>
<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat </p>
<span><a href="#">Read more</a></span>
</div>
</div>

<div class="row common">
<div class="col-md-6 col-sm-6 col-xs-12">
<h2>Back END</h2>
<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.""Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do </p>
<span><a href="#">Read more</a></span>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 section-image">
 <div class="thumbnail_container">
 <div class="thumbnail">
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/aap-development-icon.png" class="img-responsive"/>
</div>
</div>
</div>
</div>

</div>
</div>
</section>

<section class="third-sec">
<h1 class="heading-sec">Our Spartans</h1>
<div class="sparants">
<div class="container">
<div id="owl-demo" class="owl-carousel owl-theme">
  <div class="item"><img class="" src="<?php echo get_stylesheet_directory_uri(); ?>/images/crauser-image.jpg" alt="Lazy Owl Image">
    <div class="item-content">
	<span>Bijendra Pratap Singh</span>
	<p>Web Designer</p>
	</div>
  </div>
  <div class="item"><img class="" src="<?php echo get_stylesheet_directory_uri(); ?>/images/crauser-image.jpg" alt="Lazy Owl Image">
	<div class="item-content">
	<span>Bijendra Pratap Singh</span>
	<p>Web Designer</p>
	</div>
  </div>
  <div class="item"><img class="" src="<?php echo get_stylesheet_directory_uri(); ?>/images/crauser-image.jpg" alt="Lazy Owl Image">
	<div class="item-content">
	<span>Bijendra Pratap Singh</span>
	<p>Web Designer</p>
	</div>
  </div>
  <div class="item"><img class="" src="<?php echo get_stylesheet_directory_uri(); ?>/images/crauser-image.jpg" alt="Lazy Owl Image">
	<div class="item-content">
	<span>Bijendra Pratap Singh</span>
	<p>Web Designer</p>
	</div>
  </div>
  <div class="item"><img class="" src="<?php echo get_stylesheet_directory_uri(); ?>/images/crauser-image.jpg" alt="Lazy Owl Image">
	<div class="item-content">
	<span>Bijendra Pratap Singh</span>
	<p>Web Designer</p>
	</div>
  </div>
  <div class="item"><img class="" src="<?php echo get_stylesheet_directory_uri(); ?>/images/crauser-image.jpg" alt="Lazy Owl Image">
	<div class="item-content">
	<span>Bijendra Pratap Singh</span>
	<p>Web Designer</p>
	</div>
  </div>

  
</div>
</div>
</div>
</section>





<div class="container">

<?php get_footer(); ?>