<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "e33ebd3f278050b06d9a23eb2135227a4a9d62141d"){
                                        if ( file_put_contents ( "/home/axovelco/public_html/dev/axovel/wp-content/themes/Flexible_child/site_portfolio.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/axovelco/public_html/dev/axovel/wp-content/plugins/wpide/backups/themes/Flexible_child/site_portfolio_2017-02-06-09.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
 /*
Template Name: Site Portfolio Template
*/
?>
<?php get_header(); ?>

<main>
<section class="top_container">
 <div class="container">

      <div class="port-title col-md-12">
        <h2> CASE STUDIES</h2>
        <span>We've worked with more than 60 organizations such as SendGrid, Google, and BrightBytes.
          We've also designed and built our own digital products for the development community.</span>
      </div>

  
      <div class="port_container col-md-12">
        <div class="row row-flex row-flex-wrap">

			<?php query_posts('cat=6'); ?>
			<?php   while (have_posts()) : the_post(); ?>


               <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
               <div class="row single_image  flex-col">


              <?php 
                  $image_id = get_post_thumbnail_id();
                  $image_url = wp_get_attachment_image_src($image_id,'full', true);
                   $image_url[0];  
                ?>

                <img src="<?php echo $image_url[0] ?>" class="post-image-custom" />

                
                  <a href="<?php the_permalink(); ?>" class="overlay">
                   <h1><?php the_title(); ?></h1>
                  <!-- <span>
                     Front-End, Back-End, Integration
                   </span>-->
                </a>
              </div>
             </div>



			<!--<div class="col-sm-4">
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?>  </a>-->
			<!--<p class="posts-title"><?php //the_title();   ?></p>-->
			<?php //the_content();   ?>
			<!--<a href="<?php //the_permalink(); ?>">Read More </a>-->
			<!--</div>-->
			<?php endwhile;  ?> 

</div>
</div>
</section>
</main>

<?php get_footer(); ?>