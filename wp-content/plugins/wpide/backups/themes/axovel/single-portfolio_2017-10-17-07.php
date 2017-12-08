<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "2b0a58dac05e0b0629e6f9b89e7981c05336b0c2f5"){
                                        if ( file_put_contents ( "/home/axovelco/public_html/wp-content/themes/axovel/single-portfolio.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/axovelco/public_html/wp-content/plugins/wpide/backups/themes/axovel/single-portfolio_2017-10-17-07.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/*
 * Template Name: Single Portfolio
 * Template Post Type: post
 */
 get_header(); ?>
 <style>
  .navbar-default{background:#000 !important;}
</style>
<?php 
$parent = 0;
$category = get_the_category(get_the_ID());
foreach ($category as $cat) {
	if($cat->category_parent==8 or $cat->cat_ID==8)
	{
		$parent = 1;break;
	}
}
if($parent==1)
{
	?>
	<main>
	 <div id="custom-area">
		<div class="container navigation_post">
	      <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 next hidden-xs"><?php next_post_link('%link','<i class="fa fa-angle-left" aria-hidden="true"></i><span>%title</span>',TRUE); ?></div>
	      <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 all">
	        <a class="project-navigation link-to-list" href="<?php echo get_home_url(); ?>/portfolio"> <div class="square"></div> <div class="square"></div> <div class="square"></div> <div class="square"></div> </a>
	      </div>
	      <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 previous hidden-xs"><?php previous_post_link('%link','<span>%title</span><i class="fa fa-angle-right" aria-hidden="true"></i>',TRUE); ?></div>
	    </div>
	  <article id="post-231" class="entry clearfix post-231 post type-post status-publish format-standard has-post-thumbnail hentry category-android category-laravel category-magento category-mobile category-portfolio category-uncategorized category-wordpress">
	    <h1 class="page_title"><?=get_the_title() ?></h1>
	<!-- code to display the custom field used in posts -->
	    <div class="p_d_banner">
	  <!-- Main banner Image Section Start -->     
	    <div class="portfolio-main-banner">
	      <img src="<?=get_field('project_banner')['url']; ?>" alt="">
	    </div>
	  <!-- Main banner Image Section end -->  
	    <div class="post-content">
	<!-- About Client Section Start -->   
	    <div class="about_sec">
	      <div class="container">
	              <div class="port-title1 port-title col-md-12">
	                <h2> ABOUT</h2>
	                <p><?=the_content(); ?></p>
	              </div>
	           </div>
	        </div>
	<!-- About Client Section End -->
	<!-- Client Testimonial Section Start -->
		<?php  $testimonial = get_field('client_testimonial');
		if( !empty($testimonial) ): ?>
		<div class="p_review_sec">
          <div class="container">
               <!-- <img src="images/logo_1.png" alt="logo" >-->
                <div class="test_description">
                  <h3>
                      <?php the_field('client_testimonial'); ?>
                  </h3>
                  <div class="name_img">
                    <!--<div class="client_image">
                      <img src="images/client_icon.png" alt="image">
                    </div>-->
                    <h4 class="auth_name">
                      <strong><?php the_field('client_name'); ?></strong> 
                      <span><?php  the_field('client_country');?> </span>  
                      <span><?php the_field('client_designation'); ?></span>
                    </h4>
                  </div>
                  </div>
          </div>
        </div>
        <?php endif; ?>

	<!-- Client Testimonial Section End -->
	<!-- Client Video Section Start -->

		<?php 
                $video = get_field('testimonial_video');
                if( !empty($video) ):
          ?>


	        <div class="p_client_video">
	                <div class="video_testimonial">
	                  <div class='embed-container'>
	                      <?php  the_field('testimonial_video'); ?>
	                  </div>
	                </div>
	        </div>
     <?php endif; ?>

	<!-- Client Video Section End -->
	<!-- Case Study Section Start -->
	        <div class="p_involvement">
          <div class="container">
            <div class="port-title1 port-title col-md-12">
              <h2> INVOLVEMENT</h2>
              <span><?php  the_field('case_study');?></span>
              
            </div>
            <div class="r_involvement">
              <div class="row">
              <?php $pwd = get_field('project_work_details'); 
                if(isset($pwd) and count($pwd)>0):
                   	?>
                <ul>
                <?php
                    foreach($pwd as $key=>$value):

                    	$key=$key+1;
                     
                    	$project_details_url=get_stylesheet_directory_uri()."/images/ser_img_".$key.'.png';
                 ?>
                  <li> <img src="<?php echo $project_details_url ?> " alt="<?php echo $value ?>"/>
                      
                       <?php if($key==1) : ?>
                            <span>Frontend</span>
                        <?php elseif($key==2) : ?>
                        	 <span>Backend</span>
                       <?php elseif($key==3) : ?>
                       	<span>Responsive</span>
                       <?php endif ?>
                  </li>
                   <?php endforeach ?>
                </ul>
            <?php endif ?>
              </div>
            </div>
          </div>
        </div>
	<!-- Case Study Section End -->
	<!-- Proejct Management Section start -->
	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 p_review_sec">
              <h2 class="tech_title">Project Management</h2>
              <ul class="project_m_t">

                 <?php $proejct_manage = get_field('project_management'); 
                   
                    foreach($proejct_manage as $pm):
                        $img_name = preg_replace('/\s+/', '', $pm);
                    	$url=get_stylesheet_directory_uri()."/images/pmt/".strtolower($img_name).'.png';
                 ?>
                
                <li>
                   <img src="<?php echo $url; ?>" />
                   <span><?php echo $pm?></span>
                </li>

            <?php endforeach ?>

                
              </ul>
</div>
	<!-- Proejct Management Section end -->
	<!-- Proejct Extra Info Start Section Start -->
	<div class="team_section">
			<div class="container">
					<div class="row">
					<h3 class="team_head">Team Engagement</h3>
					<div class="row">
						<div class="small_team">
							<div class="col-lg-12">
								<div class="col-md-4 col-sm-4 col-xs-12 outer_box">
									<div class="box1">
										<h1 class="head_box"><?php the_field('number_of_project_manager'); ?></h1>
										<span class="text_size">Project
										<br>
									Manager</span>
									</div>
								</div>
								<div class="col-md-4 col-sm-4 col-xs-12 outer_box">
									<div class="box2">
									<h1 class="head_box"><?php the_field('number_of_engineers'); ?></h1>
									<span class="text_size"> Engineers</span>
									</div>
								</div>
								<div class="col-md-4 col-sm-4 col-xs-12 outer_box">
									<div class="null_box"></div>
								</div>
							
							
								<div class="col-md-4 col-sm-4 col-xs-12 outer_box">
									<div class="null_box"></div>
									</div>
								<div class="col-md-4 col-sm-4 col-xs-12 outer_box">
									<div class="box3">
									<h1 class="head_box"><?php the_field('designers'); ?></h1>
									<span class="text_size"> Web 
									<br>
									Designer</span>
									</div>
								</div>
								<div class="col-md-4 col-sm-4 col-xs-12 outer_box">
									<div class="box4">
									<h1 class="head_box"><?php the_field('number_of_testers'); ?></h1>
										<span class="text_size">Tester</span>
									</div>
								</div>
							
							</div>
						</div>
					</div>
				</div>
			</div>
</div>
	<!-- Project Extra Info Start Section End -->
	<!-- Technology and Integration Section  start -->
	         <div class="tech_wrapper p_review_sec">
          <div class="container">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
              <h2 class="tech_title">TECHNOLOGIES</h2>
              <ul class="tech_logo seprator">

                 <?php $technology = get_field('technology'); 
                   
                    foreach($technology as $tech):
                        $img_name = preg_replace('/\s+/', '', $tech);
                    	$url=get_stylesheet_directory_uri()."/images/technology/".strtolower($img_name).'.png';
                 ?>
                
                <li>
                   <img src="<?php echo $url; ?>"  />
                   <span><?php echo $tech?></span>
                </li>

            <?php endforeach ?>

                
              </ul>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
              <h2 class="tech_title">INTEGRATION</h2>
              <ul class="tech_logo">

               <?php $integration = get_field('integration');
                //  echo "<pre>"; print_r($integration);
                  ?>
                <?php $integration = get_field('integration'); 
                   
                    foreach($integration as $integ):
                       // $integ_name = preg_replace('/\s+/', '', $integ);
                    $integ_special_name = preg_replace('/[^a-zA-Z0-9]+/', ' ', $integ);
                     $integ_name = preg_replace('/\s+/', '', $integ_special_name);
                     $integ_url=get_stylesheet_directory_uri()."/images/integration/".strtolower($integ_name).'.png';
                 ?>
                
                <li>
                   <img src="<?php echo $integ_url; ?>" />
                   <span><?php echo $integ ?></span>
                </li>
                 <?php endforeach ?>
                
              </ul>
            </div>


          </div>
        </div>
	<!-- Technology and Integration Section  end -->
	    </div>  <!-- end .post-content -->
	    </div><!-- end .p-d-banner -->
	  </article> <!-- end .entry -->
	        </div> <!-- end #left_area -->
	      </div>
	</main>
	<?php
}
get_footer();
?>
<script type="text/javascript">
spanWidth = $('.navigation_post .previous a span').width();
$('.navigation_post .previous a span').css('width', '0');

$('.navigation_post .previous a').hover(
  function() {

    $('span', this).css('width', spanWidth+150);
  },
  function() {
    $('span', this).css('width', '0');
  }
);
spanWidth2 = $('.navigation_post .next a span').width();
$('.navigation_post .next a span').css('width', '0');

$('.navigation_post .next a').hover(
  function() {
    $('span', this).css('width', spanWidth2+150);
  },
  function() {
    $('span', this).css('width', '0');
  }
);
</script>