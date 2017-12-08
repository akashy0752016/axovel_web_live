<?php
/**
 * The template for displaying search results pages.
 *
 * @package shift8web.
 */
 
get_header(); ?>
    <main>
	    <?php if ( have_posts() ) : ?>
	 		<section class="contact_us purchase animatedParent " data-sequence='500'>
		      <div class="inner_banner_section ">
		                <div class='about_headings'>
		                    <h1 class=" animated bounceInUp" data-id='1'><?php printf( esc_html__( 'Search Results for: %s', stackstar ), '<span>' . get_search_query() . '</span>' ); ?></h1>
		                </div>
		      </div>
		    </section>
		    <div class="container blog_section blog_page"> 
		    	<div class="col-md-12" id="popular">
		    	<ul>
            <?php /* Start the Loop */ ?>
            <?php while ( have_posts() ) : the_post(); ?>
            	<li class="single_post">
            		<a href="<?=get_permalink($post->ID); ?>" title="Look <?=esc_attr(the_title()) ?>">
            			<div class="post_img">
	                      <?php if(!empty(get_the_post_thumbnail_url($post->ID,'post-thumbnail'))){ ?>
	                        <img src="<?=get_the_post_thumbnail_url($post->ID,'post-thumbnail') ?>">
	                      <?php }else{?>
	                        <img src="<?php bloginfo('template_directory') ?>/images/1.jpeg">
	                      <?php }?>
	                      </div>
            		</a>
            		<div class="post_detail">
	                    <p class="p_title">
	                      <?php the_title(); ?>
	                    </p>
	                    <span class="search-post-excerpt"><?php the_excerpt(); ?></span>
	                    <span class="search-post-link"><a href="<?php the_permalink(); ?>">Continue Reading</a></span>
	                  </div>
            	</li> 
            <?php endwhile; ?>
            </ul>
            </div>
            </div>
 
            <?php //the_posts_navigation(); ?>
 
        <?php else : ?>
 			<section class="contact_us purchase animatedParent " data-sequence='500'>
		      <div class="inner_banner_section ">
		                <div class='about_headings'>
		                    <h1 class=" animated bounceInUp" data-id='1'>No Result Found</h1>
		                </div>
		      </div>
		    </section>
            <?php //get_template_part( 'template-parts/content', 'none' ); ?>
 
        <?php endif; ?>
		</main>
<?php get_footer(); ?>