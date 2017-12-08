<?php
/**
 * Template Name: Jobs Listing Template
 *
 * 
 */

get_header(); ?>sadasdasdasdsadsad
<style type="text/css">
  .navbar-default{background: #000 !important}
</style>
<main class="blogpagelistimain">
	<div class="container">
		<h3><?php the_title(); ?></h3>
		<?php if(have_posts()) : ?>
		    <?php while(have_posts())  : the_post(); ?>
		      <?php the_content(); ?>          
		    <?php endwhile; ?>                   
		<?php endif; ?> 
	</div>
</main>
<?php get_footer(); ?>