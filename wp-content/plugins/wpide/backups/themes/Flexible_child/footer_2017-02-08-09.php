<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "e33ebd3f278050b06d9a23eb2135227a4a176a7ede"){
                                        if ( file_put_contents ( "/home/axovelco/public_html/dev/axovel/wp-content/themes/Flexible_child/footer.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/axovelco/public_html/dev/axovel/wp-content/plugins/wpide/backups/themes/Flexible_child/footer_2017-02-08-09.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><!--

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
			</ul>-->
	<!--	</div>--><!--.container-->
<!--</div>--><!--.bottom-footer-->
<!--</footer>--> <!-- end #main_footer -->


<footer class="footer">
  <div class="inner_footer">
    <div class="container">
      <div class="row">
        <div class="footer_link col-xs-12 col-sm-12 md-3 col-lg-3">
          <a class="foot_logo" href="#">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo_footer.png"" alt="LOGO">
        </a>
        </div>
        <div class="footer_link col-xs-12 col-sm-6 md-3 col-lg-3">
          <div class="row">
            <h1 class="footer_list_title">SERVICES  </h1>
            <ul class="footer_list">
              <li><a href="">Work </a></li>
              <li><a href="">Company</a></li>
              <li><a href="">Services</a></li>
              <li><a href="">Team</a></li>
              <li><a href="">Blog</a></li>
            </ul>
          </div>
        </div>

        <div class="footer_link col-xs-12 col-sm-6 md-3 col-lg-3">
          <div class="row">
            <h1 class="footer_list_title">EXPERTISE </h1>
            <ul class="footer_list">
              <li><a href="">Front End </a></li>
              <li><a href="">Back End</a></li>
              <li><a href="">E-commerce Services</a></li>
              <li><a href="">Web-app Development</a></li>
            </ul>
          </div>
        </div>

        <div class="footer_link col-xs-12 col-sm-6 md-3 col-lg-3">
          <div class="row">
            <h1 class="footer_list_title">Contact </h1>
            <ul class="footer_list">
              <li><a href="">Work </a></li>
              <li><a href="">Company</a></li>
              <li><a href="">Services</a></li>
              <li><a href="">Team</a></li>
              <li><a href="">Blog</a></li>
            </ul>
          </div>
        </div>

        <div class="footer_link col-xs-12 col-sm-6 md-3 col-lg-3">
          <div class="row">
            <h1 class="footer_list_title">SERVICES  </h1>
            <ul class="footer_list">
              <li><a href="">Work </a></li>
              <li><a href="">Company</a></li>
              <li><a href="">Services</a></li>
              <li><a href="">Team</a></li>
              <li><a href="">Blog</a></li>
            </ul>
          </div>
        </div>
      </div>
    
  <div class="bottom-footer">
		<p>Copyright © 2016 Axovel All Rights Reserved.</p>
			<ul class="footer-nav">
			<li><a href="#">About</a></li>
			<li><a href="#">News</a></li>
			<li><a href="#">Privacy</a></li>
			<li><a href="#">Security</a></li>
			<li><a href="#">Terms</a></li>
			</ul>
</div><!--.bottom-footer-->
</div>
  </div>
</footer>
<?php wp_footer(); ?>

</body>

</html>