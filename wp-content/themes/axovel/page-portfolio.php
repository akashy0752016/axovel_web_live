<?php
/**
 * The template for displaying pages
 *
 * 
 */

get_header(); ?>

<main>
    <section class="portfolio_banner purchase animatedParent " data-sequence='500'>
       <div class="inner_banner_section portfolio_inner_section">
          <div class='animated bounceInUp slow'  data-sequence='500'>
            <div class="imge_porfolio_left">
              <img src="<?php bloginfo('template_directory') ?>/images/portfolio_app.png">
            </div>
             <div class="portfolio_text">
              <div class="inner_text">
               WE BRING <span class="bold_font">IDEAS </span> TO LIFE </br> THROUGH <span class="bold_font"></br>THOUGHTFUL,CREATIVE </span></br> DESIGN SOLUTIONS
              </div>
            </div>
              <div class="imge_porfolio_right">
              <img src="<?php bloginfo('template_directory') ?>/images/portfoli_img.png">
            </div>
            </div>
          </div>
      </div>
    </section>
  <section class="top_container">
    <div class="container">
      <div class="port-title col-md-12">
        <h2> CASE STUDIES</h2>
        <span>We've been working with clients across the globe which help us boast a great portfolio. While all of the work is awesome we are bound to share only a few of them with you. Kindly, review some of the finest work of ours.</span>
      </div>
      <div class="port_container col-md-12">
        <div class="row row-flex row-flex-wrap">
          <?php query_posts('cat=8'); ?>
            <?php   while (have_posts()) : the_post(); ?>
              <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                <div class="row single_image flex-col">
                  <img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'full' ) ?>" class="post-image-custom" alt="portfolio-image" />
                <a href="<?php the_permalink(); ?>" class="overlay">
                <h1><?php the_title(); ?></h1>
                <span><?php the_field('technology_portfolio'); ?></span>
            </a>
        </div>
      </div>
      <?php endwhile;  ?>
    </div>
    </div>
  </section>
</main> 
<?php get_footer(); ?>
