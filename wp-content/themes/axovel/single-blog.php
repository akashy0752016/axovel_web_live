<?php

/*

 * Template Name: Single Blog

 * Template Post Type: post

 */

 get_header(); ?>

<?php

$parent = 0;

$category = get_the_category(get_the_ID());

foreach ($category as $cat) {

  if($cat->category_parent==14 or $cat->cat_ID==148)

  {

    $parent = 1;break;

  }

}

if($parent==1)

{

 ?>

<style type="text/css">

  .navbar-default{background: #1d4d68 !important}

</style>

<main class="blogpagelistimain">

        <!-- Page Content -->

  <section class="blog_detail_outer_section">

  <div class="container">



  <div class="col-md-8 col-sm-8">

     <div class="blog_detail_section">

        <div class="date_title">

          <div class="date_section"><p><?=date("d",strtotime(get_the_date('c'))); ?> </p><p><?=date("M",strtotime(get_the_date('c'))); ?></p><p> <?=date("Y",strtotime(get_the_date('c'))); ?></p></div>

          <div class="blog_title_sec"><?=the_title(); ?>

                  <div class="writer_name">written by <span><?=get_author_name();?></span></div>

          </div>

        </div>

        <div class="blog_image">

        <?php if(has_post_thumbnail()): ?>

          <?=the_post_thumbnail('post-thumbnail', ['class' => 'img-responsive responsive--full', 'title' => 'Feature image']);?>

        <?php else: ?>

            <img src="<?php bloginfo('template_directory') ?>/images/escape-1.png" class="img-responsive responsive--full">

        <?php endif ?>

        </div>

        <div class="blog_discription">

          <?=get_the_content();?>                   

        </div>

        <div class="comment_sec">
          <div class="n-comment_sec"><img src="<?php bloginfo('template_directory') ?>/images/chat_icon_black.png"><span><?=comments_number();?></span></div>
          <div class="share_sec"><span class="share_title">share with</span> 
            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink()); ?>" onclick="javascript:window.open(this.href,'','width=626,height=436,left='+((screen.width-626)/2)+',top=200,resizable=yes,scrollbars=yes');return false;" class="s_link fb"></a>
            <a href="https://twitter.com/share?url=<?php echo urlencode(get_permalink()); ?>&amp;text=You must watch this &amp;hashtags=axovel" data-text="You Should check this, " data-show-count="false" target="_blank" onclick="javascript:window.open(this.href,'','width=626,height=436,left='+((screen.width-626)/2)+',top=200,resizable=yes,scrollbars=yes');return false;" class="s_link twt"></a>
            <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo urlencode(get_permalink()); ?>" class="s_link in" target="_blank" onclick="javascript:window.open(this.href,'','width=626,height=436,left='+((screen.width-626)/2)+',top=200,resizable=yes,scrollbars=yes');return false;"></a>
            <a href="#" class="s_link git"></a>
          
          </div>
            <div class="fb-like" data-href="https://www.facebook.com/axovelsoftware/" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
        </div>

     </div>   <!-- blog section close here  -->

     <div class="all_comments_sec">



       <?php comments_template(); ?>

       </div>

        </div>

       </div>

     <div class="col-md-4 col-sm-4 pull-right">

      <div class="search_serction">

        <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">

          <div class="search_bar">

          <input type="input" name="s" required="required" placeholder="search blog here"><div class="button"><button><i class="fa fa-search" aria-hidden="true"></i></button></div>

          </div>

        </form>

      </div>

      <div class="ads">

        <img src="<?php bloginfo('template_directory') ?>/images/1.jpeg">

      </div>

      <div class="post_section">

        <ul class="nav nav-tabs">

          <li class="active"><a data-toggle="tab" href="#popular">Recent Post</a></li>

          <!-- <li><a data-toggle="tab" href="#recent">Popular Post</a></li> -->

        </ul><?php 

        $args = array( 'numberposts' => '5', 'category_name' => 'blog', 'post__not_in' => array( $post->ID ) );

        $recent_posts = wp_get_recent_posts( $args ); ?>

        <div class="tab-content">

          <div id="popular" class="tab-pane fade in active">

            <ul>

              <?php

              foreach( $recent_posts as $recent ){

                  ?>

                  <li class="single_post">

                    <a href="<?=get_permalink($recent["ID"]); ?>" title="Look <?=esc_attr($recent["post_title"]) ?>">

                      <div class="post_img">

                      <?php if(!empty(get_the_post_thumbnail_url($recent["ID"],'post-thumbnail'))){ ?>

                        <img src="<?=get_the_post_thumbnail_url($recent["ID"],'post-thumbnail') ?>">

                      <?php }else{?>

                        <img src="<?php bloginfo('template_directory') ?>/images/1.jpeg">

                      <?php }?>

                      </div>

                      <div class="post_detail">

                        <p class="p_title">

                          <?=$recent["post_title"] ?>

                        </p>

                        <div class="watch-date"><i class="fa fa-clock-o" aria-hidden="true"></i>

                          <?=date('d M Y',get_post_time('G',false,$recent["ID"])); ?>

                        </div>

                      </div>

                    </a>

                  </li>

                  <?php

              }

              ?>

            </ul>

          </div>

          <div id="recent" class="tab-pane fade">

              <ul>

                   <li class="single_post">

              <a href="#">

                <div class="post_img"><img src="<?php bloginfo('template_directory') ?>/images/1.jpeg"></div>

                <div class="post_detail">

                  <p class="p_title">3 things you should check </p>

                  <div class="watch-date"><i class="fa fa-clock-o" aria-hidden="true"></i> 23 aug 2017</div>

                </div>

                </a>

              </li>

                    <li class="single_post">

              <a href="#">

                <div class="post_img"><img src="<?php bloginfo('template_directory') ?>/images/1.jpeg"></div>

                <div class="post_detail">

                  <p class="p_title">3 things you should check </p>

                  <div class="watch-date"><i class="fa fa-clock-o" aria-hidden="true"></i> 23 aug 2017</div>

                </div>

                </a>

              </li>

                    <li class="single_post">

              <a href="#">

                <div class="post_img"><img src="<?php bloginfo('template_directory') ?>/images/1.jpeg"></div>

                <div class="post_detail">

                  <p class="p_title">3 things you should check </p>

                  <div class="watch-date"><i class="fa fa-clock-o" aria-hidden="true"></i> 23 aug 2017</div>

                </div>

                </a>

              </li>

            </ul>

          </div>

        </div>

      </div>

     </div> 

     </div>

   </div>

  </div>

 </section>

</main>

<?php

}

?> 

<?php get_footer(); ?>

<script type="text/javascript">

  $(".hide_div").hide();

 $("textarea").click(function(){

      $(".hide_div").slideToggle("slow");

 }); 





</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"></script>

<script type="text/javascript">



$(document).ready(function() {

    $('#commentform').bootstrapValidator({

        submitButton: 'a[class="send_buton"]',

        submitHandler: function(validator, form, submitButton) {

            $.post(form.attr('action'), form.serialize(), function (result) {

                $("#facts_tbody").append(result.data);

            });

            return false;

        },

        message: 'This value is not valid',

        feedbackIcons: {

            valid: 'glyphicon glyphicon-ok',

            invalid: 'glyphicon glyphicon-remove',

            validating: 'glyphicon glyphicon-refresh'

        },

        fields: {

            author: {

                validators: {

                        notEmpty: {

                            message: 'Please Enter Your Name'

                        }

                }

            },

            email: {

                validators: {

                        notEmpty: {

                            message: 'Please Enter Your Email'

                        },

                        emailAddress: {

                            message: 'This Is Not A Valid Email Address'

                    }

                }



            },

            comment: {

                validators: {

                        notEmpty: {

                            message: "Don't Forget To Leave A Comment"

                        }

                }                

            },

            website: {

                validators: {

                    uri: {

                        message: 'The website address is not valid'

                    }

                }

            },

        }

    });

});



</script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.10";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
