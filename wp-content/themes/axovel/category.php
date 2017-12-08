<?php
/**
* A Simple Category Template
*/
get_header(); ?>
<style type="text/css">
  .navbar-default{background: #000 !important}
</style>
<main class="blogpagelistimain">
	<section class="blog_list">
  <div class="container blog_section">
   <div class="col-md-3 col-sm-3">
    <div class="row">
    <div class="col-md-12 outer_toggle_sec">
      <div class="row">
        <div class="toggle_list">
           <span></span>
           <span></span>
            <span></span>
        </div>
        </div>
     </div>
      <div class="sidebar">
    <ul class="sidebar_list">
      <li>
      <a href="<?=get_site_url() ?>/category/blog">
      <?php
      $args = array(
       'show_option_none' => '',
       'hide_empty' => 0,
       'parent' => 14,
      );
      $data = array();
      $slug = array();
      $categories = get_categories( $args );
      $i=0;
      foreach ($categories as $key => $category) {
        $cat_id[] = $category->cat_ID;
        $data[$i]['id'] = $category->cat_ID;
        $data[$i]['title'] = $category->cat_name;
        $data[$i]['slug'] = $category->slug;
        $class[] = '.'.$category->slug;
        $i++;
      }
      ?>
      <span class="active">All</span></a></li>
      <?php
      foreach ($data as $value) {
        ?>
        <li><a href="<?=get_site_url() ?>/category/<?=$value['slug']; ?>"><span class="filter"><?=$value['title'] ?></span></a></li>
        <?php
      }
      ?>
    </ul>
    </div>
    </div>
  </div> 
  <div class="col-md-9 col-sm-9">
   <div class="row">
    <div id="portfoliolist">
    	<?php
      		if(have_posts()){
      		while ( have_posts() ) : the_post(); ?>
      		<div class="portfolio" >
      			<div class="inner_item">
      				<?php if (wp_get_attachment_url( get_post_thumbnail_id($post->ID) )!="") {
			        ?>
			            <img src="<?=wp_get_attachment_url( get_post_thumbnail_id($value->ID) ); ?>" class="blog_image">
			        <?php
			        } else {
			        ?>
			            <img src="<?php bloginfo('template_directory') ?>/images/blog_img2.png" class="blog_image">
			        	<?php
			        }
			        ?>

			        <div class="blog_detail">
			            <div class="date_comment_section">
			              <div class="bbg date_sec ">
			              <?=date('d <p>M</p>', strtotime($post->post_date)); ?>
			              </div>
			              <div class="comment">
			                <img src="<?php bloginfo('template_directory') ?>/images/chat_icon_black.png">
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
			              <a href="<?=get_permalink($post->ID); ?>" class="read_more">Continue Reading </a>
			            </div>
			          </div>
      			</div>
      		</div>
      	<?php endwhile;
		?>
			<div class="col-md-12">
				<?php wordpress_numeric_post_nav(); ?>
			</div>
		<?php
		}else
		{
			?>
			<div class="container" style="padding-top: 20px;">
				<div class="col-md-12">
					Sorry, No Post added yet!.
				</div>
			</div>
			<?php
		}?>
    </div>
   </div>
  </div>
  </div>
 </section>
</main>

<?php get_footer(); ?>