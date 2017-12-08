<?php

/**

 * @package WordPress

 * @subpackage Axovel_Theme

 */



// Do not delete these lines

	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))

		die ('Please do not load this page directly. Thanks!');



	if ( post_password_required() ) { ?>

		<p class="nocomments">This post is password protected. Enter the password to view comments.</p>

	<?php

		return;

	}

?>



<!-- You can start editing here. -->



<?php if ( have_comments() ) : ?>

	<div class="comments_title"><?=get_comments_number(get_the_ID()); ?> Responses to “<?=the_title(); ?>”</div>



	<div class="navigation clearfix comment-navigation">

		<?php paginate_comments_links( array('prev_text' => '&larr; Older Comments', 'next_text' => 'Newer Comments &rarr; ','add_fragment' => '')); ?>

	</div>

	<div class="post_comment_sec">

		<ul class="parent_ul">

			<?php wp_list_comments( 'type=comment&callback=better_comments' ); ?>

		</ul>

	</div>



	<div class="navigation clearfix comment-navigation">

		<?php paginate_comments_links( array('prev_text' => '&larr; Older Comments', 'next_text' => 'Newer Comments &rarr; ','add_fragment' => '')); ?>

	</div>

 <?php else : // this is displayed if there are no comments so far ?>



	<?php if ( comments_open() ) : ?>

		<!-- If comments are open, but there are no comments. -->



	 <?php else : // comments are closed ?>

		<!-- If comments are closed. -->

		<p class="nocomments">Comments are closed.</p>



	<?php endif; ?>

<?php endif; ?>





<?php if ( comments_open() ) : ?>



	<div id="respond">



	<h3><?php comment_form_title( 'Leave a Reply', 'Leave a Reply to %s' ); ?></h3>



	<div class="cancel-comment-reply">

		<small><?php cancel_comment_reply_link(); ?></small>

	</div>



	<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>

	<p>You must be <a href="<?php echo wp_login_url( get_permalink() ); ?>">logged in</a> to post a comment.</p>

	<?php else : ?>

	<div class="write_comment">

       <div class="all_fields">

		<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform" class="field_sec">



		<?php if ( is_user_logged_in() ) : ?>



		<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account">Log out &raquo;</a></p>



		<div class="col-md-12 col-sm-12 col-xs-12">
    	<div class="row">
			<div class="form-group">

				<textarea placeholder="Write a comments" name="comment" id="comment" required="required"></textarea>

			</div>

		</div>
		</div>

		<div class="hide_div">

		<?php else : ?>

		<div class="col-md-12 col-sm-12 col-xs-12">
    		<div class="row">
    
    			<div class="form-group">
    
    				<textarea placeholder="Write a comments" name="comment" id="comment" required="required"></textarea>
    
    			</div>
    
    		</div>
		</div>

		<div class="hide_div">

			<div class="col-md-6 col-sm-6 col-xs-12">
			    <div class="row">

    				<div class="form-group ">
    
    					<input type="text" id="author" name="author" value="<?php echo esc_attr($comment_author); ?>" placeholder="Name" <?php if ($req) echo "aria-required='true'"; ?> required="required"/>
    
    				</div>
    		    </div>

			</div>

			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="row">

                	<div class="form-group ">
        
                		<input type="email" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" placeholder="Email" <?php if ($req) echo "aria-required='true'"; ?> required="required"/>
        
                		</div>
        		</div>

	        </div>

	        <div class="col-md-6 col-sm-6 col-xs-12">
	        	<div class="row">

                    <div class="form-group">
    
                    	<input type="url" placeholder="http://www.axovel.com" name="url" id="url" value="<?php echo esc_attr($comment_author_url); ?>" />
    
                    </div>
                </div>

            </div>

		

		<?php endif; ?>

			<div class="col-md-6 col-sm-6 col-xs-12">
            	<div class="row">
    		        <div class="form-group"><!-- <input type="button" value="post comment" /> -->
    
    		        <button type="submit" class="send_buton" title="send">send <i class="fa fa-paper-plane" aria-hidden="true"></i></button>
    
    		        </div>
    		  </div>

		    </div>

		</div>

		<?php comment_id_fields(); ?>

		<?php do_action('comment_form', $post->ID); ?>

		

		</form>

       </div>

       </div>



<?php endif; // If registration required and not logged in ?>

	



<?php endif; // if you delete this the sky will fall on your head  ?>

