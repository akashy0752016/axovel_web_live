<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "e33ebd3f278050b06d9a23eb2135227a4a9d62141d"){
                                        if ( file_put_contents ( "/home/axovelco/public_html/dev/axovel/wp-content/themes/Flexible_child/footer.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/axovelco/public_html/dev/axovel/wp-content/plugins/wpide/backups/themes/Flexible_child/footer_2017-02-06-09.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?>	
	</div> <!-- end #container -->

<footer id="main_footer" class="clearfix">

<div class="bottom-footer">
	<div class="container">
		<p>Copyright © 2016 Axovel All Rights Reserved.</p>
			<ul class="footer-nav">
			<li><a href="#">About</a></li>
			<li><a href="#">News</a></li>
			<li><a href="#">Privacy</a></li>
			<li><a href="#">Security</a></li>
			<li><a href="#">Terms</a></li>
			</ul>
		</div><!--.container-->
</div><!--.bottom-footer-->
</footer> <!-- end #main_footer -->

<?php wp_footer(); ?>

</body>

</html>