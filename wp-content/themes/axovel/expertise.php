<?php
/**
 * Template Name: Expertise Template
 */
get_header(); ?>
<main>
<?php if(have_posts()) : ?>
    <?php while(have_posts())  : the_post(); ?>
      <?php the_content(); ?>          
    <?php endwhile; ?>
    	<?php
    	$title = get_the_title();
    	$cat_id = "";
    	$main_class = "";
		$find_our_more_class = "";
		$read_more_class = "";
		$date_sec_class = "";
		$comment_img = "";
    	switch ($title) {
    		case 'Mobile':
    			$cat_id[0] = 19;
    			$find_our_more_class = 'mobiel_find-find';
    			$date_sec_class = 'bbg';
    			/*$cat_id[1] = get_category_by_slug( 'IOS' );*/
    			break;

    		case 'Laravel':
    			$cat_id[0] = 17;
    			$main_class = "lblog-section";
    			$find_our_more_class = "l-find";
    			$read_more_class = "lcolor";
    			$date_sec_class = "lbg";
    			$comment_img = "/images/l-chat_icon.png";
    			break;
    		
    		case 'Magento':
    			$cat_id[0] = 15;
    			$cat_id[1] = 16;
    			$comment_img = "/images/chat_icon.png";
    			break;
    		
    		case 'UX-UI':
    			/*$cat_id = get_category_by_slug( 'ux-ui' );*/
    			$find_our_more_class = 'ux-find';
    			break;
    		
    		case 'SEO':
    			/*$cat_id[0] = get_category_by_slug( 'seo' );*/
    			break;
    		
    		case 'Web':
    			/*$cat_id[0] = get_category_by_slug( 'web' );*/
    			$date_sec_class = 'bbg';
    			$find_our_more_class = 'ux-find';
    			break;
    	}
    	if(is_array($cat_id)){
    		$result = query_posts( array( 'category__and' => $cat_id, 'posts_per_page' => 5, 'orderby' => 'date', 'order' => 'DESC' ) );
    		if(count($result)>0){
    	?>
    	  <section class="blog_section <?=$class ?> animatedParent" >
			 <h1 class="text-left animated bounceInLeft slow" data-id='1'>BLOG / LATEST NEWS</h1>
			   <div class="container">
			        <div class="row">
			            <div class="span12">
			             <div class="owl-carousel owl-theme" id="owl-demo" >
			             	<?php
			             	foreach($result as $post) {
			             		?>
			             		<div class="item">
			             			<div class="inner_item">
			             				<?php if (wp_get_attachment_url( get_post_thumbnail_id($post->ID) )!="") {
								        ?>
								            <img src="<?=wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>" class="blog_image">
								        <?php
								        } else {
								        ?>
								            <img src="<?php bloginfo('template_directory') ?>/images/blog_img1.png" class="blog_image">
								            <?php
								        }
								        ?>
			             				<div class="blog_detail">
			             					<div class="date_comment_section">
			             						<div class="date_sec <?=$date_sec_class ?>">
					                            	<?=date('d <p>M</p>', strtotime($post->post_date)); ?>
					                            </div>
					                            <div class="comment">
					                            	<?php if($comment_img!=""){
					                            		?>
					                            		<img src="<?php bloginfo('template_directory') ?><?=$comment_img?>">
					                            		<?php
					                            	}else{
					                            		?>
					                            		<img src="<?php bloginfo('template_directory') ?>/images/chat_icon_black.png">
					                            		<?php
					                            	} ?>
					                            	
							                        <span class="nbr">
							                            <?=get_comments_number($post->ID) ?>
							                        </span>
					                            </div>
			             					</div>
			             					<div class="title_dis">
			             						<div class="title_sec">
			             							<?=$post->post_title; ?>
			             						</div>
			             						<div class="dis_sec">
			             							<?=implode(' ', array_slice(str_word_count($post->post_content,1), 0, 40)) ?>
			             						</div>
			             						 <a href="<?=get_permalink($post->ID); ?>" class="read_more <?=$read_more_class ?>">Continue Reading </a>
			             					</div>
			             				</div>
			             			</div>
			             		</div>
			             		<?php
			             	}
			             	?>
			          </div>
			            <div class="customNavigation">
			              <a class="btn prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
			              <a class="btn next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
			            </div>
			            </div>
			        </div>
			    </div>

			</section>
		<?php }
		}?>
      	<section class="find_our_more <?=$find_our_more_class?> animatedParent">
		  <div class="container">
		    <div class="row animated bounceInUp slow">
		    <h3 class="find_title">Are you interested?</h3>
		    <div class="find_btn">
		     <a href="<?php echo get_home_url(); ?>/contact_us" class="d_button white_btn">Find out more</a>
		    </div>
		    </div>
		  </div>
		</section>                   
      <?php else : ?>                       
        <h3><?php _e('404 Error&#58; Not Found'); ?></h3>
<?php endif; ?>
</main> 
<?php get_footer(); ?>
