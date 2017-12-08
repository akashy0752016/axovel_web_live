<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "e33ebd3f278050b06d9a23eb2135227ac565967e18"){
                                        if ( file_put_contents ( "/home/axovelco/public_html/dev/axovel/wp-content/themes/Flexible_child/header.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/axovelco/public_html/dev/axovel/wp-content/plugins/wpide/backups/themes/Flexible_child/header_2016-12-14-09.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><!DOCTYPE html>

<!--[if IE 6]>

<html xmlns="http://www.w3.org/1999/xhtml" id="ie6" <?php language_attributes(); ?>>

<![endif]-->

<!--[if IE 7]>

<html xmlns="http://www.w3.org/1999/xhtml" id="ie7" <?php language_attributes(); ?>>

<![endif]-->

<!--[if IE 8]>

<html xmlns="http://www.w3.org/1999/xhtml" id="ie8" <?php language_attributes(); ?>>

<![endif]-->

<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->

<html <?php language_attributes(); ?>>

<!--<![endif]-->

<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>" />

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title><?php elegant_titles(); ?></title>

	<?php elegant_description(); ?>

	<?php elegant_keywords(); ?>

	<?php elegant_canonical(); ?>



	<?php do_action('et_head_meta'); ?>



	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" />

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />



	<!--[if lt IE 7]>

		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/ie6style.css" />

	<![endif]-->

	<!--[if IE 7]>

		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/ie7style.css" />

	<![endif]-->

	<!--[if IE 8]>

		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/ie8style.css" />

	<![endif]-->

	<!--[if lt IE 9]>

		<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>

	<![endif]-->



	<script type="text/javascript">

		document.documentElement.className = 'js';

	</script>

		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.js"></script>
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/owl.carousel.js"></script>
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/custom.js"></script>

		<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
		<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.css" rel="stylesheet">
		<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/owl.carousel.css" rel="stylesheet"> 
		<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/custom.css" rel="stylesheet"> 


	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

		<?php do_action('et_header_top'); ?>
    <div class="navbar-default" id="nav-anchor">
		<header class="clearfix nav_fixed">

				<div class="container">

		<div class="row">			

			<div class="col-md-3">

				<?php $bloginfo_name = get_bloginfo( 'name' ); ?>

				<h1 id="logo">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( $bloginfo_name ); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" alt="axoval"></a>
				</h1>
			</div><!--.col-->

			<div class="col-md-9">

			<nav id="top-menu">

				<?php

					$menuClass = 'nav';

					if ( et_get_option('flexible_disable_toptier') == 'on' ) $menuClass .= ' et_disable_top_tier';

					$primaryNav = '';

					if (function_exists('wp_nav_menu')) {

						$primaryNav = wp_nav_menu( array( 'theme_location' => 'primary-menu', 'container' => '', 'fallback_cb' => '', 'menu_class' => $menuClass, 'echo' => false ) );

					}

					if ($primaryNav == '') { ?>

						<ul class="<?php echo esc_attr( $menuClass ); ?>">

							<?php if (et_get_option('flexible_home_link') == 'on') { ?>

								<li <?php if (is_home()) echo('class="current_page_item"') ?>><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e('Home','Flexible') ?></a></li>

							<?php }; ?>



							<?php show_page_menu($menuClass,false,false); ?>

							<?php show_categories_menu($menuClass,false); ?>

						</ul>

					<?php }

					else echo($primaryNav);

				?>

			</nav> <!-- end #top-menu -->

		</div><!--.col-->
	</div><!--.row-->
	
	</div> <!-- end #container -->
		</header>
  </div>

	<div class="container">
				<?php do_action('et_header_menu'); ?>
