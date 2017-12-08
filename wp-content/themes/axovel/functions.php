<?php



register_nav_menus(array('header' => 'Header Menu',));



register_nav_menus(array('footer' => 'Footer Menu',));



add_theme_support( 'post-thumbnails' );



add_theme_support( 'sidbar' );



add_theme_support( 'post-thumbnails', array( 'post' ) );



add_theme_support( 'editor-style' );



add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);



function special_nav_class ($classes, $item) {



    if (in_array('current-menu-item', $classes) ){



        $classes[] = 'active ';



    }



    return $classes;



}



function stjohns_widgets_init(){



	register_sidebar(



		array(



			'name'=>'Sidebar',



			'before_widget'=>'',



			'after_widget'=>'',



			'before_title'=>'',



	));



}



add_action( 'widgets_init', 'stjohns_widgets_init' );







function add_theme_scripts() {



    wp_enqueue_style( 'style', get_stylesheet_uri() );



    wp_enqueue_style( 'bootstarp', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '1.0', 'all');



    wp_enqueue_style( 'font-awesome', 'http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.min.css', array(), '1.0', 'all');



    wp_enqueue_style( 'stylesheet', get_template_directory_uri() . '/css/style.css', array(), '1.0', 'all');



    wp_enqueue_style( 'responsive', get_template_directory_uri() . '/css/responsive.css', array(), '1.0', 'all')  ;

/*

    wp_enqueue_style( 'animation', get_template_directory_uri() . '/css/animations.css', array(), '1.0', 'all');*/



    wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css', array(), '1.0', 'all');



    wp_enqueue_style( 'owl-css', get_template_directory_uri() . '/css/owl.carousel.min.css', array(), '1.0', 'all');



    wp_deregister_script( 'jquery' ); // remove standard jquery



    wp_enqueue_script( 'jquery', get_template_directory_uri() .'/js/jquery.min.js' ,array(),'1.0', true );



    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array ( 'jquery' ), 1.1, true);



/*    wp_enqueue_script( 'animation', get_template_directory_uri() . '/js/css3-animate-it.js', array ( 'jquery' ), 1.1, true);*/



      wp_enqueue_script( 'wow', get_template_directory_uri() . '/js/wow.min.js', array ( 'jquery' ), 1.1, true);



    wp_enqueue_script( 'owl-crousel', get_template_directory_uri() . '/js/owl.carousel.js', array ( 'jquery' ), 1.1, true);



   wp_enqueue_script( 'mixitup_min', get_template_directory_uri() . '/js/jquery.mixitup.min.js', array ( 'jquery' ), 1.1, true);



  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {



    wp_enqueue_script( 'comment-reply' );



  }



}



add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );



remove_filter( 'the_content', 'wpautop' );

remove_filter( 'the_excerpt', 'wpautop' );

remove_filter( 'the_content', 'wptexturize' );

remove_filter( 'the_excerpt', 'wptexturize' );



function php_execute($html){

if(strpos($html,"<"."?php")!==false){ ob_start(); eval("?".">".$html);

$html=ob_get_contents();

ob_end_clean();

}

return $html;

}

add_filter('the_content','php_execute',100);



function get_custom_cat_template($single_template) {

   global $post;

   if ( in_category( 'blog' )) {

      $single_template = dirname( __FILE__ ) . '/single-blog.php';

   }elseif ( in_category( 'portfolio' )) {

      $single_template = dirname( __FILE__ ) . '/single-portfolio.php';

   }

   return $single_template;

} 

add_filter( "single_template", "get_custom_cat_template" ) ;



//Function to create Wordpress Numeric Post Pagination

function wordpress_numeric_post_nav() {

    if( is_singular() )

        return;

    global $wp_query;

    /* Stop the code if there is only a single page page */

    if( $wp_query->max_num_pages <= 1 )

        return;

    $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;

    $max   = intval( $wp_query->max_num_pages );

    /*Add current page into the array */

    if ( $paged >= 1 )

        $links[] = $paged;

    /*Add the pages around the current page to the array */

    if ( $paged >= 3 ) {

        $links[] = $paged - 1;

        $links[] = $paged - 2;

    }

    if ( ( $paged + 2 ) <= $max ) {

        $links[] = $paged + 2;

        $links[] = $paged + 1;

    }

    echo '<div class="navigation"><ul>' . "\n";

    /*Display Previous Post Link */

    if ( get_previous_posts_link() )

        printf( '<li>%s</li>' . "\n", get_previous_posts_link() );

    /*Display Link to first page*/

    if ( ! in_array( 1, $links ) ) {

        $class = 1 == $paged ? ' class="active"' : '';

        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

        if ( ! in_array( 2, $links ) )

            echo '<li>…</li>';

    }

    /* Link to current page */

    sort( $links );

    foreach ( (array) $links as $link ) {

        $class = $paged == $link ? ' class="active"' : '';

        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );

    }

    /* Link to last page, plus ellipses if necessary */

    if ( ! in_array( $max, $links ) ) {

        if ( ! in_array( $max - 1, $links ) )

            echo '<li>…</li>' . "\n";

        $class = $paged == $max ? ' class="active"' : '';

        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );

    }

    /** Next Post Link */

    if ( get_next_posts_link() )

        printf( '<li>%s</li>' . "\n", get_next_posts_link() );

    echo '</ul></div>' . "\n";

}



/**

 * Add HTML5 theme support.

 */

function wpdocs_after_setup_theme() {

    add_theme_support( 'html5', array( 'search-form' ) );

}

add_action( 'after_setup_theme', 'wpdocs_after_setup_theme' );



/*function mytheme_comment($comment, $args, $depth) {

    if ( 'div' === $args['style'] ) {

        $tag       = 'div';

        $add_below = 'comment';

    } else {

        $tag       = 'div';

        $add_below = 'div-comment';

    }

    var_dump($tag,$add_below);

    

    if(empty( $args['has_children'] ))

    {



    }

    ?>

    <<?php echo $tag ?> <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ) ?> id="comment-<?php comment_ID() ?>">

    <?php if(empty( $args['has_children'] )){ ?>

    <li>

    <?php }?>

    <div class="comment-author vcard p-img">

        <?php if ( $args['avatar_size'] != 0 ) echo get_avatar( $comment, $args['avatar_size'] ); ?>

        

    </div>

    <?php if ( 'div' != $args['style'] ) : ?>

        <div id="div-comment-<?php comment_ID() ?>" class="comment-body other_detail">

    <?php endif; ?>

        <p><?php printf( __( '%s' ), get_comment_author_link() ); ?><span class="days"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ); ?>">

        <?php

        /* translators: 1: date, 2: time * /

        printf( __('%1$s at %2$s'), get_comment_date(),  get_comment_time() ); ?></a></span></p>

    <?php if ( $comment->comment_approved == '0' ) : ?>

         <em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.' ); ?></em>

          <br />

    <?php endif; ?>

    <div class="coment">

        <?php comment_text(); ?>

    </div>

    



    <div class="reply">

        <?php comment_reply_link( array_merge( $args, array( 'add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>

    </div>

    <?php if ( 'div' != $args['style'] ) : ?>

    </div>

    <?php endif; ?>

    <?php

    }*/





function better_comments( $comment, $args, $depth ) {

    global $post;

    $author_id = $post->post_author;

    $GLOBALS['comment'] = $comment;

    switch ( $comment->comment_type ) :

        case 'pingback' :

        case 'trackback' :

        // Display trackbacks differently than normal comments. ?>

    <li id="comment-<?php comment_ID(); ?>" <?php comment_class(); ?>>

        <div class="pingback-entry"><span class="pingback-heading"><?php esc_html_e( 'Pingback:', 'twenties' ); ?></span> <?php comment_author_link(); ?></div>

    <?php

        break;

        default :

        // Proceed with normal comments. ?>

    <li id="li-comment-<?php comment_ID(); ?>">

        <div class="single_post">

            <div class="p-img">

                <?php echo get_avatar( $comment, 45 ); ?>

            </div>

            <div class="other_detail">

                <p>

                    <?php comment_author_link(); ?>

                    <span class="days"><?php echo human_time_diff( strtotime(get_comment_date()." ".get_comment_time()), current_time('timestamp') ) . ' ago'; ?>

                    </span>

                </p>

                <div class="coment">

                    <?php comment_text(); ?>

                </div>

                <?php comment_reply_link( array_merge( $args, array(

                    'reply_text' => esc_html__( 'Reply', 'twenties' ),

                    'depth'      => $depth,

                    'max_depth'  => $args['max_depth'] )

                ) ); ?>

            </div>

    <?php

        break;

    endswitch; // End comment_type check.

}



function get_cats_by_slug($catslugs) {

    $catids = array();

    foreach($catslugs as $slug) {

        $catids[] = get_category_by_slug($slug)->term_id; //store the id of each slug in $catids

    }

    return $catids;

}

class My_Custom_Nav_Walker extends Walker_Nav_Menu {

   function start_lvl(&$output, $depth = 0, $args = array()) {
      $output .= "\n<ul class=\"dropdown-menu\">\n";
   }

   function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
       $item_html = '';
       parent::start_el($item_html, $item, $depth, $args);

       if ( $item->is_dropdown && $depth === 0 ) {
           $item_html = str_replace( '<a', '<a class="dropdown-toggle" data-toggle="dropdown"', $item_html );
           $item_html = str_replace( '</a>', '</a>', $item_html );
       }

       $output .= $item_html;
    }

    function display_element($element, &$children_elements, $max_depth, $depth = 0, $args, &$output) {
        if ( $element->current )
        $element->classes[] = 'active';

        $element->is_dropdown = !empty( $children_elements[$element->ID] );

        if ( $element->is_dropdown ) {
            if ( $depth === 0 ) {
                $element->classes[] = 'dropdown';
            } elseif ( $depth === 1 ) {
                // Extra level of dropdown menu, 
                // as seen in http://twitter.github.com/bootstrap/components.html#dropdowns
                $element->classes[] = 'dropdown-submenu';
            }
        }

    parent::display_element($element, $children_elements, $max_depth, $depth, $args, $output);
    }
}













