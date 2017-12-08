<?php

/**

 * Template Name: post_detail Template

 *

 * 

 */



get_header(); ?>

<style type="text/css">

  .navbar-default{background: #000 !important}

</style>


<main class="blogpagelistimain">

        <!-- Page Content -->

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

      <a href="#">

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

      <span class="filter active" data-filter="all">All</span></a></li>

      <?php

      foreach ($data as $value) {

        ?>

        <li><a href="#"><span class="filter" data-filter=".<?=$value['slug']; ?>"><?=$value['title'] ?></span></a></li>

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

    $args = array(

        'posts_per_page'   => 10,

        'offset'           => 0,

        'category'         => 14,

        'orderby'          => 'date',

        'order'            => 'DESC',

        'post_type'        => 'post',

        'post_status'      => 'publish',

        'suppress_filters' => true 

      );

    $catPost = get_posts($args);

    foreach ($catPost as $value) {

      $post_categories = get_the_category($value->ID);

      $post_class = array();

      foreach ($post_categories as $post_category) {

        $post_class[] = $post_category->slug;        

      }

      ?>

      <div class="portfolio <?=implode(" ", $post_class) ?>" data-cat="<?=implode(" ", $post_class) ?>">

        <div class="inner_item">

        <?php if (wp_get_attachment_url( get_post_thumbnail_id($value->ID) )!="") {

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

              <?=date('d <p>M</p>', strtotime($value->post_date)); ?>

              </div>

              <div class="comment">

                <img src="<?php bloginfo('template_directory') ?>/images/chat_icon_black.png">

                <span class="nbr">

                  <?=get_comments_number($value->ID) ?>

                </span>

              </div>

            </div>

            <div class="title_dis">

              <div class="title_sec">

                <?=$value->post_title; ?>

              </div>

              <div class="dis_sec">

                <?=implode(' ', array_slice(str_word_count($value->post_content,1), 0, 20)) ?>

              </div>

              <a href="#" class="read_more">Continue Reading </a>

              <!-- <a href="<?=get_permalink($value->ID); ?>" class="read_more">Continue Reading </a> -->

            </div>

          </div>

        </div>

      </div>

      <?php

    }

    ?>

    </div><!-- container -->

    Test

    <?php the_posts_pagination( array( 'mid_size' => 2 ) ); ?>

   </div>

   </div>

  </div>

 </section>

</main> 

<script type="text/javascript">

  $(".sidebar").css({'right': '-350px'});

  $( ".toggle_list" ).click(function() {

   $(this).toggleClass("active_bar");

    $( ".sidebar" ).toggle( "slow", function() {

    $(".sidebar").css({'right': '-3px'});

    });

  });

</script>

<?php get_footer(); ?>

