<footer class="footer">

  <div class="inner_footer">

    <div class="container">

      <div class="row">

        <div class="footer_link col-xs-12 col-sm-12 md-3 col-lg-3">

          <a class="foot_logo" href="<?php echo get_bloginfo('url') ?>">

          <img src="<?php bloginfo('template_directory') ?>/images/logo.png" alt="LOGO">

        </a>

        </div>

        <div class="footer_link col-xs-12 col-sm-6 md-3 col-lg-3">

          <div class="row">

            <h1 class="footer_list_title">SERVICES  </h1>

            <?php wp_nav_menu(array(

              'menu' => 'Services Menu',

              'container' => 'ul',

              'menu_class'=> 'footer_list'

            )); ?>

          </div>

        </div>



        <div class="footer_link col-xs-12 col-sm-6 md-3 col-lg-3">

          <div class="row">

            <h1 class="footer_list_title">EXPERTISE </h1>

            <?php wp_nav_menu(array(

              'menu' => 'Expertise Menu',

              'container' => 'ul',

              'menu_class'=> 'footer_list'

            )); ?>

          </div>

        </div>



        <div class="footer_link col-xs-12 col-sm-6 md-3 col-lg-3">

          <div class="row">

            <h1 class="footer_list_title">Contact </h1>

            <?php wp_nav_menu(array(

              'menu' => 'Contact',

              'container' => 'ul',

              'menu_class'=> 'footer_list'

            )); ?>

          </div>

        </div>



        <div class="footer_link col-xs-12 col-sm-6 md-3 col-lg-3">

          <div class="row">

            <h1 class="footer_list_title">SOCIAL</h1>

            <ul class="footer_list social_section">

              <li><a href="https://www.facebook.com/axovelsoftware/" class="fb social_link"> </a></li>

              <li><a href="https://twitter.com/axovel_social" class="twt social_link" ></a></li>

              <li><a href="https://in.linkedin.com/company/axovel-private-limited" class="in social_link" ></a></li>

              <li><a href="https://github.com/axovel" class="git social_link"></a></li>

            </ul>

          </div>

        </div>



      </div>
      <div class="row copyright">
      <?php 
      if ( has_nav_menu( 'footer' ) ) {
      	?>
      	<div class="col-md-4 col-xs-12">

       <div class="row">

          <p>Copyright © 2016 Axovel All Rights Reserved.</p>

          </div>

          </div>

          <div class="col-md-8 col-xs-12 ">       

          <div class="row">

            <?php

            if ( has_nav_menu( 'footer' ) ) {

                // User has assigned menu to this location;

                // output it

                wp_nav_menu( array( 

                    'theme_location' => 'footer', 

                    'container' => 'ul',

                    'menu_class' => 'copy_right_section pull-right' 

                ) );

            }

            ?>

          </div>

          </div>
      	<?php
      }else
      {
      	?>
      	<div class="col-md-12 col-xs-12">

       <div class="row" style="text-align: center;">

          <p>Copyright © 2016 Axovel All Rights Reserved.</p>

          </div>

          </div>
      	<?php
      }?>
      

      </div>

    </div>

  </div>

</footer>

<?php wp_footer();?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script>

  $(document).ready(function() {

 

    $(window).scroll(function(){

            var window_top = $(window).scrollTop() + 0; // the "12" should equal the margin-top value for nav.stick

            var div_top = $('#nav_header').offset().top;

                if (window_top > div_top) {

                    $('.navbar-fixed-top').addClass('stick');

                } else {

                    $('.navbar-fixed-top').removeClass('stick');

                }

        });



   

   

});

 $(document).ready(function() {

  var filterList = {

    

      init: function () {

      

        // MixItUp plugin

        // http://mixitup.io

        $('#portfoliolist').mixItUp({

          selectors: {

            target: '.portfolio',

            filter: '.filter' 

          },    

        });               

      

      }



    };

    

    // Run the show!

    filterList.init();

    

    

  }); 



  var owl = $("#owl-demo");

 

  owl.owlCarousel({

          items : 2, //10 items above 1000px browser width

      itemsDesktop : [1000,2], //5 items between 1000px and 901px

      itemsDesktopSmall : [900,2], // betweem 900px and 601px

      itemsTablet: [768,1], //2 items between 600 and 0

      itemsMobile : true // itemsMobile disabled - inherit from itemsTablet option

  });

 

  // Custom Navigation Events

  $(".next").click(function(){

    owl.trigger('owl.next');

  })



  $(".prev").click(function(){

    owl.trigger('owl.prev');

  }) 

    $(window).scroll(function(){

            var window_top = $(window).scrollTop() + 0; // the "12" should equal the margin-top value for nav.stick

            var div_top = $('#nav_header').offset().top;

                if (window_top > div_top) {

                    $('.navbar-fixed-top').addClass('stick');

                } else {

                    $('.navbar-fixed-top').removeClass('stick');

                }

        });

	    $(function () {

    

   

});

  $(document).ready(function() {

    //Preloader

    $(window).load(function() {

       preloaderFadeOutTime = 1000;

    function hidePreloader() {

    var preloader = $('.preloader');

    preloader.fadeOut(preloaderFadeOutTime);

    }

    hidePreloader();

     new WOW().init();

    });



  });

  $('ul.nav li.dropdown').hover(function() {
    $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
  }, function() {
    $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
  });



</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-97652710-1', 'auto');
  ga('send', 'pageview');

</script>

</body>

</html>