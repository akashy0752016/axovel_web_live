<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "2b0a58dac05e0b0629e6f9b89e7981c05336b0c2f5"){
                                        if ( file_put_contents ( "/home/axovelco/public_html/wp-content/themes/axovel/blog-detail.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/axovelco/public_html/wp-content/plugins/wpide/backups/themes/axovel/blog-detail_2017-10-17-07.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/**
 * Template Name: blog_details Template
 *
 * 
 */

get_header(); ?>
<style type="text/css">
  .navbar-default{background:#1d4d68 !important}
</style>
<main class="blogpagelistimain">
        <!-- Page Content -->
  <section class="blog_detail_outer_section">
  <div class="container">

  <div class="col-md-8 col-sm-8">
     <div class="blog_detail_section">
        <div class="date_title">
          <div class="date_section"><p>24 </p><p>march</p><p> 2015</p></div>
          <div class="blog_title_sec">3 things you should check before you continue with your PPC campaigns
                  <div class="writer_name">written by <span>poonam</span></div>
          </div>
        </div>
        <div class="blog_image">
          <img src="http://192.241.153.62/axovel/wp-content/uploads/2017/06/escape-1.png">
        </div>
        <div class="blog_discription">
        <p>
Most of the time working with Magento, a single database connection is just enough. Magento has excellent system of adding new tables in database or extending existing ones. So, why would there be a need for an external database connection outside the Magento system? Well, one of the examples is data migration from another ecommerce system. In this article, a simple connection to external database is explained with CRUD (create, read, update, delete) examples. </p>

<h1 class="blog_heading">Configuration</h1>
<p>
This external database connection is similarly defined as the Magento default one – in an XML configuration. The difference is that foreign connection is defined inside particular module’s XML configuration. It defines read and write adapters, setup and database credentials information. Foreign tables are defined in the same way as magento tables. They are under inchoo_foreignconnection_resource node so the model resource can be invoked later in the code. For demonstration purpose, there’s a frontend node in XML configuration that defines front name of the controller (fconn).Ipsum is that it has a more-or-less normal distribution of letters  </p>   

<pre class="ish"><code class="language-xml"><span class="sc3"><span class="re1">&lt;?xml</span> <span class="re0">version</span>=<span class="st0">"1.0"</span><span class="re2">?&gt;</span></span>
<span class="sc3"><span class="re1">&lt;config<span class="re2">&gt;</span></span></span>
    <span class="sc3"><span class="re1">&lt;modules<span class="re2">&gt;</span></span></span>
        <span class="sc3"><span class="re1">&lt;Inchoo_ForeignConnection<span class="re2">&gt;</span></span></span>
            <span class="sc3"><span class="re1">&lt;version<span class="re2">&gt;</span></span></span>1.4.2<span class="sc3"><span class="re1">&lt;/version<span class="re2">&gt;</span></span></span>
        <span class="sc3"><span class="re1">&lt;/Inchoo_ForeignConnection<span class="re2">&gt;</span></span></span>
    <span class="sc3"><span class="re1">&lt;/modules<span class="re2">&gt;</span></span></span>
    <span class="sc3"><span class="re1">&lt;global<span class="re2">&gt;</span></span></span>
        <span class="sc3"><span class="re1">&lt;models<span class="re2">&gt;</span></span></span>
            <span class="sc3"><span class="re1">&lt;inchoo_foreignconnection<span class="re2">&gt;</span></span></span>
                <span class="sc3"><span class="re1">&lt;class<span class="re2">&gt;</span></span></span>Inchoo_ForeignConnection_Model<span class="sc3"><span class="re1">&lt;/class<span class="re2">&gt;</span></span></span>
                <span class="sc3"><span class="re1">&lt;resourceModel<span class="re2">&gt;</span></span></span>inchoo_foreignconnection_resource<span class="sc3"><span class="re1">&lt;/resourceModel<span class="re2">&gt;</span></span></span>
            <span class="sc3"><span class="re1">&lt;/inchoo_foreignconnection<span class="re2">&gt;</span></span></span>
            <span class="sc3"><span class="re1">&lt;inchoo_foreignconnection_resource<span class="re2">&gt;</span></span></span>
                <span class="sc3"><span class="re1">&lt;class<span class="re2">&gt;</span></span></span>Inchoo_ForeignConnection_Model_Resource<span class="sc3"><span class="re1">&lt;/class<span class="re2">&gt;</span></span></span>
                <span class="sc3"><span class="re1">&lt;entities<span class="re2">&gt;</span></span></span>
                    <span class="sc3"><span class="re1">&lt;product<span class="re2">&gt;</span></span></span>
                        <span class="sc3"><span class="re1">&lt;table<span class="re2">&gt;</span></span></span>product_description<span class="sc3"><span class="re1">&lt;/table<span class="re2">&gt;</span></span></span>
                    <span class="sc3"><span class="re1">&lt;/product<span class="re2">&gt;</span></span></span>
                <span class="sc3"><span class="re1">&lt;/entities<span class="re2">&gt;</span></span></span>
            <span class="sc3"><span class="re1">&lt;/inchoo_foreignconnection_resource<span class="re2">&gt;</span></span></span>
        <span class="sc3"><span class="re1">&lt;/models<span class="re2">&gt;</span></span></span>
        <span class="sc3"><span class="re1">&lt;resources<span class="re2">&gt;</span></span></span>
            <span class="sc3"><span class="re1">&lt;inchoo_foreignconnection_write<span class="re2">&gt;</span></span></span>
                <span class="sc3"><span class="re1">&lt;connection<span class="re2">&gt;</span></span></span>
                    <span class="sc3"><span class="re1">&lt;use<span class="re2">&gt;</span></span></span>inchoo_foreignconnection_database<span class="sc3"><span class="re1">&lt;/use<span class="re2">&gt;</span></span></span>
                <span class="sc3"><span class="re1">&lt;/connection<span class="re2">&gt;</span></span></span>
            <span class="sc3"><span class="re1">&lt;/inchoo_foreignconnection_write<span class="re2">&gt;</span></span></span>
            <span class="sc3"><span class="re1">&lt;inchoo_foreignconnection_read<span class="re2">&gt;</span></span></span>
                <span class="sc3"><span class="re1">&lt;connection<span class="re2">&gt;</span></span></span>
                    <span class="sc3"><span class="re1">&lt;use<span class="re2">&gt;</span></span></span>inchoo_foreignconnection_database<span class="sc3"><span class="re1">&lt;/use<span class="re2">&gt;</span></span></span>
                <span class="sc3"><span class="re1">&lt;/connection<span class="re2">&gt;</span></span></span>
            <span class="sc3"><span class="re1">&lt;/inchoo_foreignconnection_read<span class="re2">&gt;</span></span></span>
            <span class="sc3"><span class="re1">&lt;inchoo_foreignconnection_setup<span class="re2">&gt;</span></span></span>
                <span class="sc3"><span class="re1">&lt;connection<span class="re2">&gt;</span></span></span>
                    <span class="sc3"><span class="re1">&lt;use<span class="re2">&gt;</span></span></span>core_setup<span class="sc3"><span class="re1">&lt;/use<span class="re2">&gt;</span></span></span>
                <span class="sc3"><span class="re1">&lt;/connection<span class="re2">&gt;</span></span></span>
            <span class="sc3"><span class="re1">&lt;/inchoo_foreignconnection_setup<span class="re2">&gt;</span></span></span>
            <span class="sc3"><span class="re1">&lt;inchoo_foreignconnection_database<span class="re2">&gt;</span></span></span>
                <span class="sc3"><span class="re1">&lt;connection<span class="re2">&gt;</span></span></span>
                    <span class="sc3"><span class="re1">&lt;host<span class="re2">&gt;</span></span></span><span class="sc2">&lt;![CDATA[localhost]]&gt;</span><span class="sc3"><span class="re1">&lt;/host<span class="re2">&gt;</span></span></span>
                    <span class="sc3"><span class="re1">&lt;username<span class="re2">&gt;</span></span></span><span class="sc2">&lt;![CDATA[username]]&gt;</span><span class="sc3"><span class="re1">&lt;/username<span class="re2">&gt;</span></span></span>
                    <span class="sc3"><span class="re1">&lt;password<span class="re2">&gt;</span></span></span><span class="sc2">&lt;![CDATA[password]]&gt;</span><span class="sc3"><span class="re1">&lt;/password<span class="re2">&gt;</span></span></span>
                    <span class="sc3"><span class="re1">&lt;dbname<span class="re2">&gt;</span></span></span><span class="sc2">&lt;![CDATA[db_name]]&gt;</span><span class="sc3"><span class="re1">&lt;/dbname<span class="re2">&gt;</span></span></span>
                    <span class="sc3"><span class="re1">&lt;initStatements<span class="re2">&gt;</span></span></span><span class="sc2">&lt;![CDATA[SET NAMES utf8]]&gt;</span><span class="sc3"><span class="re1">&lt;/initStatements<span class="re2">&gt;</span></span></span>
                    <span class="sc3"><span class="re1">&lt;model<span class="re2">&gt;</span></span></span><span class="sc2">&lt;![CDATA[mysql4]]&gt;</span><span class="sc3"><span class="re1">&lt;/model<span class="re2">&gt;</span></span></span>
                    <span class="sc3"><span class="re1">&lt;type<span class="re2">&gt;</span></span></span><span class="sc2">&lt;![CDATA[pdo_mysql]]&gt;</span><span class="sc3"><span class="re1">&lt;/type<span class="re2">&gt;</span></span></span>
                    <span class="sc3"><span class="re1">&lt;pdo_type<span class="re2">&gt;</span></span></span><span class="sc2">&lt;![CDATA[]]&gt;</span><span class="sc3"><span class="re1">&lt;/pdo_type<span class="re2">&gt;</span></span></span>
                    <span class="sc3"><span class="re1">&lt;active<span class="re2">&gt;</span></span></span>1<span class="sc3"><span class="re1">&lt;/active<span class="re2">&gt;</span></span></span>
                <span class="sc3"><span class="re1">&lt;/connection<span class="re2">&gt;</span></span></span>
            <span class="sc3"><span class="re1">&lt;/inchoo_foreignconnection_database<span class="re2">&gt;</span></span></span>
        <span class="sc3"><span class="re1">&lt;/resources<span class="re2">&gt;</span></span></span>
    <span class="sc3"><span class="re1">&lt;/global<span class="re2">&gt;</span></span></span>
    <span class="sc3"><span class="re1">&lt;frontend<span class="re2">&gt;</span></span></span>
        <span class="sc3"><span class="re1">&lt;routers<span class="re2">&gt;</span></span></span>
            <span class="sc3"><span class="re1">&lt;inchoo_foreignconnection<span class="re2">&gt;</span></span></span>
                <span class="sc3"><span class="re1">&lt;use<span class="re2">&gt;</span></span></span>standard<span class="sc3"><span class="re1">&lt;/use<span class="re2">&gt;</span></span></span>
                <span class="sc3"><span class="re1">&lt;args<span class="re2">&gt;</span></span></span>
                    <span class="sc3"><span class="re1">&lt;module<span class="re2">&gt;</span></span></span>Inchoo_ForeignConnection<span class="sc3"><span class="re1">&lt;/module<span class="re2">&gt;</span></span></span>
                    <span class="sc3"><span class="re1">&lt;frontName<span class="re2">&gt;</span></span></span>fconn<span class="sc3"><span class="re1">&lt;/frontName<span class="re2">&gt;</span></span></span>
                <span class="sc3"><span class="re1">&lt;/args<span class="re2">&gt;</span></span></span>
            <span class="sc3"><span class="re1">&lt;/inchoo_foreignconnection<span class="re2">&gt;</span></span></span>
        <span class="sc3"><span class="re1">&lt;/routers<span class="re2">&gt;</span></span></span>
    <span class="sc3"><span class="re1">&lt;/frontend<span class="re2">&gt;</span></span></span>
<span class="sc3"><span class="re1">&lt;/config<span class="re2">&gt;</span></span></span></code></pre>

<h1 class="blog_heading">Model</h1>
<p>Next thing is a model that will use defined foreign connection to get data or to save data in a foreign database. Here, the model is initialized with the product table from XML configuration, that in this case defines product_description table.
Model resource class is also defined with the same xml configuration node in _init() function, but with the TABLE_PRIMARY_KEY parameter. In this class, several functions can be created that will work with external data.</p>
<p>
First example is createDataInResource function, which inserts data in model’s table. It takes array of parameters that will be inserted.</p>
<p>
Second example is a readDataFromResource function that fetches all data from model’s table. Read adapter must be defined first. It is a configuration node from xml that defines read connection. After read adapter definition, Magento database functions can be used (select(), from(), limit(), etc..). When query is constructed completely, it can be executed with read adapter. Data can be retrieved with fetchPairs() or fetchAll() function. fetchAll() is used to get all records returned from mysql.  </p>                   
        </div>
        <div class="comment_sec">
          <div class="n-comment_sec"><img src="<?php bloginfo('template_directory') ?>/images/chat_icon_black.png"><span>12 comments</span></div>
          <div class="share_sec"><span class="share_title">share with</span> 
            <a href="#" class="s_link fb"></a>
            <a href="#" class="s_link twt"></a>
            <a href="#" class="s_link in"></a>
            <a href="#" class="s_link git"></a>
          </div>
        </div>
     </div>   <!-- blog section close here  -->
     <div class="all_comments_sec">
       <div class="comments_title">30 Responses to “3 things you should check before you continue with your PPC campaigns”</div>
       <div class="write_comment">
       <div class="all_fields">
          <form class="field_sec">
          <div class="col-md-12 col-sm-12 col-xs-12"><div class="form-group"><textarea placeholder="Write a comments"></textarea></div></div>
            <div class="hide_div">
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="form-group "><input type="text" placeholder="Name" /></div>
              </div>
               <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="form-group "><input type="email" placeholder="Email" /></div>
              </div>
               <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="form-group"><input type="text" placeholder="Website url( )" /></div>
              </div>
               <div class="col-md-6 col-sm-6 col-xs-12">
                 <div class="form-group"><!-- <input type="button" value="post comment" /> -->
                <a href="#" class="send_buton" title="send">send <i class="fa fa-paper-plane" aria-hidden="true"></i></a></div>
             </div>
            </div>
          </form>
       </div>
       </div>
       <div class="post_comment_sec">
        <div class="single_post">
        <div class="p-img"><img src="<?php bloginfo('template_directory') ?>/images/girl.jpeg"></div>
        <div class="other_detail">
          <p>Akash Yadav <span class="days"> 12 days ago</span></p>
          <div class="coment">Magento will use different type of external connection to retrieve or send data, but sometimes an external database connectionMagento will use different type of external connection to retrieve or send data, but sometimes an external database connection</div>
            <a href="#" class="reply">Reply</a>
          </div>
          <ul>
            <li>
              <div class="p-img"><img src="<?php bloginfo('template_directory') ?>/images/girl.jpeg"></div>
             <div class="other_detail">
          <p>Akash Yadav <span class="days"> 12 days ago</span></p>
          <div class="coment">Magento will use different type of external connection to retrieve or send data, but sometimes an external database connectionMagento will use different type of external connection to retrieve or send data, but sometimes an external database connection</div>
             <a href="#" class="reply">Reply</a>
          </div>
          <ul>
            <li><div class="p-img"><img src="<?php bloginfo('template_directory') ?>/images/girl.jpeg"></div>
        <div class="other_detail">
          <p>Akash Yadav <span class="days"> 12 days ago</span></p>
          <div class="coment">Magento will use different type of external connection to retrieve or send data, but sometimes an external database connectionMagento will use different type of external connection to retrieve or send data, but sometimes an external database connection</div>
             <a href="#" class="reply">Reply</a>
          </div></li>
          </ul>
            </li>
 <ul>
            <li><div class="p-img"><img src="<?php bloginfo('template_directory') ?>/images/girl.jpeg"></div>
        <div class="other_detail">
          <p>Akash Yadav <span class="days"> 12 days ago</span></p>
          <div class="coment">Magento will use different type of external connection to retrieve or send data, but sometimes an external database connectionMagento will use different type of external connection to retrieve or send data, but sometimes an external database connection</div>
             <a href="#" class="reply">Reply</a>
          </div></li>
          </ul>
          </ul>
        </div>
        <div class="single_post">
        <div class="p-img"><img src="<?php bloginfo('template_directory') ?>/images/girl.jpeg"></div>
        <div class="other_detail">
          <p>Akash Yadav <span class="days"> 12 days ago</span></p>
          <div class="coment">Magento will use different type of external connection to retrieve or send data, but sometimes an external database connectionMagento will use different type of external connection to retrieve or send data, but sometimes an external database connection</div>
            <a href="#" class="reply">Reply</a>
          </div>
        </div>
        </div>
        </div>
       </div>
     <div class="col-md-4 col-sm-4 pull-right">
      <div class="search_serction">
        <div class="search_bar">
        <input type="input" name="" placeholder="search blog here"><div class="button"><button><i class="fa fa-search" aria-hidden="true"></i></button></div>
        </div>
      </div>
      <div class="ads">
        <img src="<?php bloginfo('template_directory') ?>/images/1.jpeg">
      </div>
      <div class="post_section">
        <ul class="nav nav-tabs">
          <li class="active"><a data-toggle="tab" href="#popular">Recent Post</a></li>
          <li><a data-toggle="tab" href="#recent">Popular Post</a></li>
        </ul>
        <div class="tab-content">
          <div id="popular" class="tab-pane fade in active">
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

<?php get_footer(); ?>
<script type="text/javascript">
  $(".hide_div").hide();
 $("textarea").click(function(){
      $(".hide_div").slideToggle("slow");
 }); 


</script>
