<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "e33ebd3f278050b06d9a23eb2135227afcff0ec60b"){
                                        if ( file_put_contents ( "/home/axovelco/public_html/wp-content/themes/Flexible_child/loop-single.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/axovelco/public_html/wp-content/plugins/wpide/backups/themes/Flexible_child/loop-single_2017-03-21-14.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<?php if (et_get_option('flexible_integration_single_top') <> '' && et_get_option('flexible_integrate_singletop_enable') == 'on') echo (et_get_option('flexible_integration_single_top')); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class('entry clearfix'); ?>>
		<h1 class="page_title"><?php the_title(); ?></h1>

<!-- code to display the custom field used in posts -->
<?php
global $wp_query;
$postid = $wp_query->post->ID;
$title_color=get_post_meta($postid, 'posts_img', true);  //getting banner Image
if(!empty($title_color)){
echo $title_color;
}
?>

		<?php
			$thumb = '';
			$width = (int) apply_filters('et_blog_image_width',640);
			$height = (int) apply_filters('et_blog_image_height',320);
			$classtext = '';
			$titletext = get_the_title();
			$thumbnail = get_thumbnail($width,$height,$classtext,$titletext,$titletext,false,'Blogimage');
			$thumb = $thumbnail["thumb"];
		?>
<div class="p_d_banner">
		<?php if ( '' != $thumb && 'on' == et_get_option('flexible_thumbnails') ) { ?>
			<div class="post-thumbnail">
				<?php print_thumbnail($thumb, $thumbnail["use_timthumb"], $titletext, $width, $height, $classtext); ?>
			</div> 	<!-- end .post-thumbnail -->
		<?php } ?>

         
  <!-- Main banner Image Section Start -->	   
          <div class="portfolio-main-banner">
                
                 <?php $image = get_field('project_banner');

					if( !empty($image) ): ?>

						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

					<?php endif; ?>

          </div>
  <!-- Main banner Image Section end -->	


		<div class="post-content">
			<?php
				$index_postinfo = et_get_option('flexible_postinfo2');
				if ( $index_postinfo ){
					echo '<p class="meta-info">';
					et_postinfo_meta( $index_postinfo, et_get_option('flexible_date_format'), esc_html__('0 comments','Flexible'), esc_html__('1 comment','Flexible'), '% ' . esc_html__('comments','Flexible') );
					echo '</p>';
				}
			?>

<!-- About Client Section Start -->		
		<div class="about_sec">
			<div class="container">
              <div class="port-title1 port-title col-md-12">
                <h2> ABOUT</h2>
                <?php the_content(); ?>
              </div>
           </div>
        </div>

<!-- About Client Section End -->

<!-- Client Testimonial Section Start -->
       <?php 
                $testimonial = get_field('client_testimonial');
                if( !empty($testimonial) ):
          ?>
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
                <ul>

                   <?php $pwd = get_field('project_work_details'); 
                  //echo "<pre>"; print_r($pwd);
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

         <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 Extra_Info">
          <div class="container">

                    <h3 class="port-title1">Team Engage</h3>
               <div class="outer_team-detail">
                <div class="team-detail">
                  <h3> Project Manager   </h3>    
                  <span class="number_detail"><?php the_field('number_of_project_manager'); ?></span>              
                 </div>
                 <div class="team-detail">
                  <h3> Number of engineers  </h3>    
                  <span class="number_detail"><?php the_field('number_of_engineers'); ?></span>              
                 </div>
                  <div class="team-detail">
                  <h3> Web Desginer  </h3>    
                  <span class="number_detail"><?php the_field('designers'); ?></span>              
                 </div>
                 <div class="team-detail">
                  <h3> Tester  </h3>    
                  <span class="number_detail"><?php the_field('number_of_testers'); ?></span>              
                 </div>

                  <?php  $start_date = get_field('project_start_month', false, false); 
                          if($start_date):

                  ?>

                  <div class="team-detail">
                  <h3> Timeline  </h3>    
                  <span>
                  <?php 
                
                   $date = new DateTime($start_date);
                  // echo $date->format('j M Y');
                   echo $date->format(' M Y');
                  ?></span> 

                  <?php $end_date=get_field('project_end_date', false, false) ; 
                       if($end_date):
                  ?>  
                    <span><?php $end_date = new DateTime($end_date);
                 
                   echo $end_date->format(' M Y'); ?></span> 
                   <?php endif ;?>          
                 
                 </div>
                </div>

             <?php endif ;?>
                 
                  
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



			<!-- adding code by saurabh -->
			<?php 

			      //the_field('client_name'); echo "<br/>" ;
			       //echo "<br/>" ;
                   //the_field('client_testimonial');
			       //the_field('client_designation'); echo "<br/>" ;
			      // the_field('client_country'); echo "<br/>" ;
			       //the_field('number_of_engineers'); echo "<br/>" ;
		           //the_field('designers'); echo "<br/>" ;
		           //the_field('number_of_testers'); echo "<br/>" ;
		           // the_field('case_study'); echo "<br/>" ;
		           //the_field('project_end_date'); echo "<br/>" ;


                  //$technology = get_field('technology');
                  //echo "<pre>"; print_r($technology);

                 // $integration = get_field('integration');
                  //echo "<pre>"; print_r($integration);

                  // $project_management = get_field('project_management');
                 // echo "<pre>"; print_r($project_management);
     
			?>

             


					

			<!--end adding code by saurabh -->

			<?php wp_link_pages(array('before' => '<p><strong>'.esc_attr__('Pages','Flexible').':</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
			<?php edit_post_link(esc_attr__('Edit this page','Flexible')); ?>
		</div> 	<!-- end .post-content -->
		</div><!-- end .p-d-banner -->
	</article> <!-- end .entry -->

	<?php if (et_get_option('flexible_integration_single_bottom') <> '' && et_get_option('flexible_integrate_singlebottom_enable') == 'on') echo(et_get_option('flexible_integration_single_bottom')); ?>

	<?php
		if ( et_get_option('flexible_468_enable') == 'on' ){
			if ( et_get_option('flexible_468_adsense') <> '' ) echo( et_get_option('flexible_468_adsense') );
			else { ?>
			   <a href="<?php echo esc_url(et_get_option('flexible_468_url')); ?>"><img src="<?php echo esc_attr(et_get_option('flexible_468_image')); ?>" alt="468 ad" class="foursixeight" /></a>
	<?php 	}
		}
	?>

	<?php
		if ( 'on' == et_get_option('flexible_show_postcomments') ) comments_template('', true);
	?>
<?php endwhile; // end of the loop. ?>
