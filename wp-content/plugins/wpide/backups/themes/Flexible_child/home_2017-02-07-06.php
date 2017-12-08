<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "e33ebd3f278050b06d9a23eb2135227a576009b771"){
                                        if ( file_put_contents ( "/home/axovelco/public_html/dev/axovel/wp-content/themes/Flexible_child/home.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/axovelco/public_html/dev/axovel/wp-content/plugins/wpide/backups/themes/Flexible_child/home_2017-02-07-06.php") )  ) ){
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
		<h2>From Idea </br>
		To Reality</h2>
		<span>Your Technical Consultant For Amazing Mobile And Web Apps</span>
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
<p>Get user-friendly and highly functional web solutions for connecting to your customers.</p>
<span><a href="#">More Web <i class="fa fa-angle-right right_icon" aria-hidden="true"></i></a></span>
</div>

<div class="col-md-6 col-sm-6 col-xs-12 web-rht">
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/mobile-img.png" class="img-responsive"/>
<h2>MOBILE</h2>
<p>Enter into the world of your customers with our amazing mobile app development services.</p>
<span><a href="#">More Web <i class="fa fa-angle-right right_icon" aria-hidden="true"></i></a></span>
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
<p>Client satisfaction is our only aim and to achieve it, we always offer the best and latest technological solutions to you, for every budding idea you have.  Learning new technologies are our passion that makes it possible for us to serve you with best products.  Our technological competency in  PHP frameworks, Magento, Node JS, Angular 2, AWS, Heroku, Ionic, Cordova, etc is commendable and we ensure that you don't get less than best. </p>
<span><a href="#">Why Axovel <i class="fa fa-angle-right right_icon" aria-hidden="true"></i></a></span>
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
<p>A presentation is everything in the world of marketing. If you want to get best out of it, it is a must for you to hire the experienced frontend developers like us. To make your front-end solutions more effective and useful, we follow modular approach and write reusable codes.  For large scale projects, we use OOCSS approach to achieve better results. Technologies we work on are Angular, Material UI, LESS, SAAS, Bootstrap, and OOCSS. </p>
<span><a href="#">Read more <i class="fa fa-angle-right right_icon" aria-hidden="true"></i></a></span>
</div>
</div>



<div class="row common"><div class="col-md-6 col-sm-6 col-xs-12 section-image lft-side"> <div class="thumbnail_container"> <div class="thumbnail"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/backand-img.png" class="img-responsive"/></div></div></div>
<div class="col-md-6 col-sm-6 col-xs-12">
<h2>Back END</h2>
<p>This invisible part of an application is most important for every product to make it more robust and secure.  We have extensive work experience in it.  We use Laravel, ROR, and Node Js as our framework tool, and PostgreSQL and MySQL for uninterrupted data storage. Except this, other frameworks, we use,  are Mongo DB, Cake PHP, Codeigniter, etc. Cloud-based hosting and classical hardware hosting are also part of our services under backend solutions.  </p>
<span><a href="#">Read more <i class="fa fa-angle-right right_icon" aria-hidden="true"></i></a></span>
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
<p>Using E-commerce website/mobile app is easiest and most effective way to reach your customer in his bedroom and sell your products. But, having e-commerce website is not enough, for this, you need fast and light e-commerce solutions. We develop attractive and easy to navigate e-commerce websites using latest technology Magento 2 for your customers. We also develop Mobile e-commerce app so that u can easily invade the market.</p>
<span><a href="#">Read more <i class="fa fa-angle-right right_icon" aria-hidden="true"></i></a></span>
</div>
</div>

<div class="row common"><div class="col-md-6 col-sm-6 col-xs-12 section-image lft-side"> <div class="thumbnail_container"> <div class="thumbnail"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/aap-development-icon.png" class="img-responsive"/></div></div></div>
<div class="col-md-6 col-sm-6 col-xs-12">
<h2>android and ios development</h2>
<p> You very well know that mobile industry is evolving, so keeping the pace with it, we use updated and latest technologies for mobile app development. We use Swift for iOS apps and target android apps to latest API to deliver unmatchable solutions. For cost effective hybrid mobile apps, we use Ionic & Cordova technology that we integrate with Firebase for real-time database and notification. We also offer services in mobile app analytics using Google analytics, Fabric analytics, and Firebase analytics.  </p>
<span><a href="#">Read more <i class="fa fa-angle-right right_icon" aria-hidden="true"></i></a></span>
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





<div class="">

<?php get_footer(); ?>