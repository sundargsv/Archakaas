<!--/////////////////////////////////////*Script*For*SESSION\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

<?php
session_start();
include_once '../../DB/dbConnect.php';

if(!isset($_SESSION['user']))
{
    header("Location: ../../index.php");
}
$res=mysql_query("SELECT * FROM UserRegister WHERE user_id=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);
?>


<!--/////////////////////////////////////Ending*Script*For*SESSION\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" /><script type="text/javascript">window.NREUM||(NREUM={}),__nr_require=function(e,n,t){function r(t){if(!n[t]){var o=n[t]={exports:{}};e[t][0].call(o.exports,function(n){var o=e[t][1][n];return r(o?o:n)},o,o.exports)}return n[t].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<t.length;o++)r(t[o]);return r}({QJf3ax:[function(e,n){function t(e){function n(n,t,a){e&&e(n,t,a),a||(a={});for(var u=c(n),f=u.length,s=i(a,o,r),p=0;f>p;p++)u[p].apply(s,t);return s}function a(e,n){f[e]=c(e).concat(n)}function c(e){return f[e]||[]}function u(){return t(n)}var f={};return{on:a,emit:n,create:u,listeners:c,_events:f}}function r(){return{}}var o="nr@context",i=e("gos");n.exports=t()},{gos:"7eSDFh"}],ee:[function(e,n){n.exports=e("QJf3ax")},{}],3:[function(e,n){function t(e){return function(){r(e,[(new Date).getTime()].concat(i(arguments)))}}var r=e("handle"),o=e(1),i=e(2);"undefined"==typeof window.newrelic&&(newrelic=window.NREUM);var a=["setPageViewName","addPageAction","setCustomAttribute","finished","addToTrace","inlineHit","noticeError"];o(a,function(e,n){window.NREUM[n]=t("api-"+n)}),n.exports=window.NREUM},{1:12,2:13,handle:"D5DuLP"}],gos:[function(e,n){n.exports=e("7eSDFh")},{}],"7eSDFh":[function(e,n){function t(e,n,t){if(r.call(e,n))return e[n];var o=t();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(e,n,{value:o,writable:!0,enumerable:!1}),o}catch(i){}return e[n]=o,o}var r=Object.prototype.hasOwnProperty;n.exports=t},{}],D5DuLP:[function(e,n){function t(e,n,t){return r.listeners(e).length?r.emit(e,n,t):void(r.q&&(r.q[e]||(r.q[e]=[]),r.q[e].push(n)))}var r=e("ee").create();n.exports=t,t.ee=r,r.q={}},{ee:"QJf3ax"}],handle:[function(e,n){n.exports=e("D5DuLP")},{}],XL7HBI:[function(e,n){function t(e){var n=typeof e;return!e||"object"!==n&&"function"!==n?-1:e===window?0:i(e,o,function(){return r++})}var r=1,o="nr@id",i=e("gos");n.exports=t},{gos:"7eSDFh"}],id:[function(e,n){n.exports=e("XL7HBI")},{}],G9z0Bl:[function(e,n){function t(){var e=d.info=NREUM.info,n=f.getElementsByTagName("script")[0];if(e&&e.licenseKey&&e.applicationID&&n){c(p,function(n,t){n in e||(e[n]=t)});var t="https"===s.split(":")[0]||e.sslForHttp;d.proto=t?"https://":"http://",a("mark",["onload",i()]);var r=f.createElement("script");r.src=d.proto+e.agent,n.parentNode.insertBefore(r,n)}}function r(){"complete"===f.readyState&&o()}function o(){a("mark",["domContent",i()])}function i(){return(new Date).getTime()}var a=e("handle"),c=e(1),u=window,f=u.document;e(2);var s=(""+location).split("?")[0],p={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"../../js/686.min.js"},d=n.exports={offset:i(),origin:s,features:{}};f.addEventListener?(f.addEventListener("DOMContentLoaded",o,!1),u.addEventListener("load",t,!1)):(f.attachEvent("onreadystatechange",r),u.attachEvent("onload",t)),a("mark",["firstbyte",i()])},{1:12,2:3,handle:"D5DuLP"}],loader:[function(e,n){n.exports=e("G9z0Bl")},{}],12:[function(e,n){function t(e,n){var t=[],o="",i=0;for(o in e)r.call(e,o)&&(t[i]=n(o,e[o]),i+=1);return t}var r=Object.prototype.hasOwnProperty;n.exports=t},{}],13:[function(e,n){function t(e,n,t){n||(n=0),"undefined"==typeof t&&(t=e?e.length:0);for(var r=-1,o=t-n||0,i=Array(0>o?0:o);++r<o;)i[r]=e[n+r];return i}n.exports=t},{}]},{},["G9z0Bl"]);</script>
	<meta name="author" content="SemiColonWeb" />

    <!-- Stylesheets
    ============================================= -->
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="../../css/main.css" type="text/css" />
     <link rel="stylesheet" href="../../bootstrap/css/bootstrap.css" type="text/css" />
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <!--[if lt IE 9]>
    	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->

    <!-- External JavaScripts
    ============================================= -->
	<script type="text/javascript" src="../../js/jquery.js"></script>

    <!-- Document Title
    ============================================= -->
	<title>Archakaas | Gallery</title>


</head>

<body class="stretched">

    <!-- Document Wrapper
    ============================================= -->
    <div id="wrapper" class="clearfix">

        <!-- Header
        ============================================= -->
        <header id="header" class="full-header">

            <div id="header-wrap">

                <div class="container clearfix">

                    <div id="primary-menu-trigger"><i class="glyphicon glyphicon-menu-hamburger"></i></div>

                    <!-- Logo
                    ============================================= -->
                    <div id="logo">
                        <a href="home-page.php" class="standard-logo" data-dark-logo="http://canvashtml-cdn.semicolonweb.com/images/logo-dark.png"><img src="http://canvashtml-cdn.semicolonweb.com/images/logo.png" alt="Canvas Logo"></a>
                        <a href="home-page.php" class="retina-logo" data-dark-logo="http://canvashtml-cdn.semicolonweb.com/images/logo-dark@2x.png"><img src="http://canvashtml-cdn.semicolonweb.com/images/logo@2x.png" alt="Canvas Logo"></a>
                    </div><!-- #logo end -->

                    <!-- Primary Navigation
                    ============================================= -->
                    <nav id="primary-menu">

                        
                    <ul>
                       <li ><a href="../../home-page.php"><div>Home</div></a></li>
                       <li><a href="#"><div>Veda Mantras</div></a>
                          <ul>
                            <li><a href="../VedaMantras/VM1.php"><div><i></i>கணபதி</div></a>   </li>
                            <li><a href="../VedaMantras/VM2.php"><div><i></i>சுப்ரமண்யர்</div>  </a>
                                  
                              </li>
                                    <li><a href="../VedaMantras/VM3.php"><div><i></i>தேவி</div></a>
                                       
                                    </li>
                                    <li><a href="../VedaMantras/VM4.php"><div><i></i>ஸ்வாமி</div></a>
                                        
                                    </li>
                                    
                                    <li><a href="../VedaMantras/VM5.php"><div>இதர ப்ரதிஷ்டாவிதிகள்</div></a>
                                       
                                    </li>
                                    <li><a href="../VedaMantras/VM6.php"><div>தத்வார்ச்சனை</div></a>
                                        
                                    </li>
                                    <li><a href="../VedaMantras/VM7.php"><div>சர்வதேவதா மந்திரங்கள்்</div></a></li>
                                    <li><a href="../VedaMantras/VM8.php"><div>யந்திரங்கள்</div></a>
                                     
                                    </li>
                                    <li><a href="../VedaMantras/VM9.php" data-scrollto="#footer"><div>மற்றும் பல விதிகள்</div></a>
                                        <ul>
                                            <li><a href="../VedaMantras/VM9/VM9_1.php" data-scrollto=""><div>யாகசாலாவித</div></a></li>
                                            <li><a href="../VedaMantras/VM9/VM9_2.php"><div>குண்டவிதி</div></a></li>
                                            <li><a href="../VedaMantras/VM9/VM9_3.php"><div>உற்ச்சவவிதி</div></a></li>
                                            <li><a href="../VedaMantras/VM9/VM9_4.php"><div>ப்ராயச்சித்தவிதி</div></a></li>
                                            <li><a href="../VedaMantras/VM9_5.php"><div>தந்திரவிதி</div></a></li>
                                            <li><a href="../VedaMantras/VM9_6.php"><div>சாந்திபூஜாவிதி</div></a></li>
                                            <li><a href="../VedaMantras/VM9_7.php"><div>பவித்ரோத்ஸ்வவிதி</div></a></li>
                                            <li><a href="../VedaMantras/VM9_8.php"><div>சண்டிஹோம விதி</div></a></li>
                                        </ul>
                                    </li>
                                    <li><a href="../VedaMantras/VM10.php"><div>இதர விஷயங்கள்</div></a>
                                     
                                    </li>
                                </ul>
                            </li>
                            <li class="current"><a href="#"><div>Library</div></a>
                                <ul>
                                    <li><a href="#">Galleries</a></li>
                                    <li><a href="Video.php">Videos</a></li>
                                    <li><a href="Audio.php">Audios</a></li>

                                </ul>
                            </li>
                            <li><a href="../Blog/"><div>Blog</div></a>
                              
                            </li>
                            <li ><a href="#"><div>My Account</div></a>
                                <ul>
                                    <li><a href="">User ID:&nbsp;<?php echo $userRow['user_id']; ?></a></li>
                                    <li><a href="../view-edit-profile.php">Profile</a></li>
                                    <li><a href="../../Include/logout.php">Logout</a></li>


                                </ul>
                            </li>
                            <li><a href="../../Contact-us.php"><div>Contact Us</div></a>
                                
                            </li>
                           
                        </ul>

                        

                        <!-- Top Search
                        ============================================= -->
                        <div id="top-search">
                            <a href="#" id="top-search-trigger"><span class="glyphicon glyphicon-search"></span></a>
                            <form action="search.php" method="get">
                                <input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter..">
                            </form>
                        </div><!-- #top-search end -->
                    </nav><!-- #primary-menu end -->

                </div>

            </div>

        </header><!-- #header end -->

        <!-- Page Title
        ============================================= -->
        <section id="page-title">

            <div class="container clearfix">
                <h1>Gallery</h1>
                <span>Welcome, <?php echo $userRow['user_name_user']; ?></span>
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Library</a></li>
                    <li class="active">Gallery</li>
                </ol>
            </div>

        </section><!-- #page-title end -->

        <!-- Content
        ============================================= -->
        <section id="content">

            <div class="content-wrap">

                <div class="container clearfix">


                    <div class="col_full clearfix">

                        <h3>Thiruannamalai Theepam 2014</h3>

                        <div class="masonry-thumbs col-5" data-big="1" data-lightbox="gallery">
                            <a href="../../img/Gallery/set1(1).jpg" data-lightbox="gallery-item"><img class="image_fade" src="../../img/Gallery/set1(1).jpg" alt="Gallery Thumb 1"></a>
                            <a href="../../img/Gallery/set1 (2).jpg" data-lightbox="gallery-item"><img class="image_fade" src="../../img/Gallery/set1 (2).jpg" alt="Gallery Thumb 2"></a>
                            <a href="../../img/Gallery/set1 (3).jpg" data-lightbox="gallery-item"><img class="image_fade" src="../../img/Gallery/set1 (3).jpg" alt="Gallery Thumb 3"></a>
                            <a href="../../img/Gallery/set1 (4).jpg" data-lightbox="gallery-item"><img class="image_fade" src="../../img/Gallery/set1 (4).jpg" alt="Gallery Thumb 4"></a>
                            <a href="../../img/Gallery/set1 (5).jpg" data-lightbox="gallery-item"><img class="image_fade" src="../../img/Gallery/set1 (5).jpg" alt="Gallery Thumb 5"></a>
                            <a href="../../img/Gallery/set1 (6).jpg" data-lightbox="gallery-item"><img class="image_fade" src="../../img/Gallery/set1 (6).jpg" alt="Gallery Thumb 6"></a>
                            <a href="../../img/Gallery/set1 (7).jpg" data-lightbox="gallery-item"><img class="image_fade" src="../../img/Gallery/set1 (7).jpg" alt="Gallery Thumb 7"></a>
                            <a href="../../img/Gallery/set1 (8).jpg" data-lightbox="gallery-item"><img class="image_fade" src="../../img/Gallery/set1 (8).jpg" alt="Gallery Thumb 9"></a>
                            <a href="../../img/Gallery/set1 (9).jpg" data-lightbox="gallery-item"><img class="image_fade" src="../../img/Gallery/set1 (9).jpg" alt="Gallery Thumb 10"></a>
                            <a href="../../img/Gallery/set1 (10).jpg" data-lightbox="gallery-item"><img class="image_fade" src="../../img/Gallery/set1 (10).jpg" alt="Gallery Thumb 14"></a>
                            <a href="../../img/Gallery/set1(1).jpg" data-lightbox="gallery-item"><img class="image_fade" src="../../img/Gallery/set1(1).jpg" alt="Gallery Thumb 12"></a>
                            <a href="../../img/Gallery/set1 (5).jpg" data-lightbox="gallery-item"><img class="image_fade" src="../../img/Gallery/set1 (5).jpg" alt="Gallery Thumb 13"></a>
                        </div>

                    </div>

                    <div class="divider"><i class="glyphicon glyphicon-star-empty"></i></div>

                    

                </div>

            </div>

        </section><!-- #content end -->

          <!-- Footer
        ============================================= -->
        <footer id="footer" class="dark">

            <div class="container">

                <!-- Footer Widgets
                ============================================= -->
                <div class="footer-widgets-wrap clearfix">

                    <div class="col_two_third">

                        <div class="col_one_third">

                            <div class="widget clearfix">

                                <img src="../../img/Logo/archakaas-footer.png" alt="" class="footer-logo">

                                <p>We are here to make your life <strong>Simple</strong>, <strong>Easy</strong> &amp; <strong>Flexible</strong>.</p>

                                <div style="background: url('http://canvashtml-cdn.semicolonweb.com/images/world-map.png') no-repeat center center; background-size: 100%;">
                                    <address>
                                        <strong>Headquarters:</strong><br>
                                        No 19/8, Sannathi Mettu St<br>
                                        Salem, Tamil Nadu<br>
                                        India.
                                    </address>
                                    <abbr title="Phone Number"><strong>Phone:</strong></abbr> (+91) 422 2547650<br>
                                    <abbr title="Fax"><strong>Mobile:</strong></abbr> (+91) 99 94 359423<br>
                                    <abbr title="Email Address"><strong>Email:</strong></abbr> info@archakaas.com
                                </div>

                            </div>

                        </div>

                        <div class="col_one_third">

                            <div class="widget widget_links clearfix">

                                <h4>Site Maps</h4>

                                <ul>
                                    <li><a href="#">Home</a></li>
                                    <li><a href="BasicServices/features.php">Features</a></li>
                                    <li><a href="BasicServices/prayers-club.php">Prayers Club</a></li>
                                    <li><a href="BasicServices/global-temples.php">Global Temples</a></li>
                                    <li><a href="Contact-us.php">Contact Us</a></li>
                                </ul>

                            </div>

                        </div>

                        <div class="col_one_third col_last">

                            <div class="widget clearfix">
                                <h4>Latest News</h4>

                                <div id="post-list-footer">
                                    <div class="spost clearfix">
                                        <div class="entry-c">
                                            <div class="entry-title">
                                                <h4><a href="#">Global Temples - Coming soon</a></h4>
                                            </div>
                                            <ul class="entry-meta">
                                                <li>30th Nov 2015</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="spost clearfix">
                                        <div class="entry-c">
                                            <div class="entry-title">
                                                <h4><a href="#">Prayers Club - Coming Soon</a></h4>
                                            </div>
                                            <ul class="entry-meta">
                                                <li>20th Dec 2015</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="spost clearfix">
                                        <div class="entry-c">
                                            <div class="entry-title">
                                                <h4><a href="#">Updated Videos and Audio</a></h4>
                                            </div>
                                            <ul class="entry-meta">
                                                <li>Every week</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="col_one_third col_last">

                      

                        <div class="widget subscribe-widget clearfix">
                            <h5><strong>Subscribe</strong> to Our Newsletter to get Important News &amp; Updates:</h5>
                            <div id="widget-subscribe-form-result" data-notify-type="success" data-notify-msg=""></div>
                            <form id="widget-subscribe-form" action="include/subscribe.php" role="form" method="post" class="nobottommargin">
                                <div class="input-group divcenter">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                    <input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email">
                                    <span class="input-group-btn">
                                        <button class="btn btn-success" type="submit">Subscribe</button>
                                    </span>
                                </div>
                            </form>
                            <script type="text/javascript">
                                $("#widget-subscribe-form").validate({
                                    submitHandler: function(form) {
                                        $(form).find('.input-group-addon').find('.icon-email2').removeClass('icon-email2').addClass('icon-line-loader icon-spin');
                                        $(form).ajaxSubmit({
                                            target: '#widget-subscribe-form-result',
                                            success: function() {
                                                $(form).find('.input-group-addon').find('.icon-line-loader').removeClass('icon-line-loader icon-spin').addClass('icon-email2');
                                                $('#widget-subscribe-form').find('.form-control').val('');
                                                $('#widget-subscribe-form-result').attr('data-notify-msg', $('#widget-subscribe-form-result').html()).html('');
                                                SEMICOLON.widget.notifications($('#widget-subscribe-form-result'));
                                            }
                                        });
                                    }
                                });
                            </script>
                        </div>

                        <div class="widget clearfix" style="margin-bottom: -20px;">

                            <div class="row">

                                <div class="col-md-6 clearfix bottommargin-sm">
                                    <a href="https://www.facebook.com/archakaasdotcom?fref=ts" target="_blank" class="social-icon si-dark si-colored si-facebook nobottommargin" style="margin-right: 10px;">
                                        <i class="fa fa-facebook" style="margin-top:40%"></i>

                                    </a>
                                    <a href="#"><small style="display: block; margin-top: 3px;"><strong>Like us</strong><br>on Facebook</small></a>
                                </div>
                                <div class="col-md-6 clearfix">
                                    <a href="#" class="social-icon si-dark si-colored si-rss nobottommargin" style="margin-right: 10px;">
                                        <i class="fa fa-rss" style="margin-top:40%"></i>
                                    </a>
                                    <a href="#"><small style="display: block; margin-top: 3px;"><strong>Subscribe</strong><br>to RSS Feeds</small></a>
                                </div>

                            </div>

                        </div>

                    </div>

                </div><!-- .footer-widgets-wrap end -->

            </div>

            <!-- Copyrights
            ============================================= -->
            <div id="copyrights">

                <div class="container clearfix">

                    <div class="col_half">
                        Copyrights &copy; 2015 All Rights Reserved by Archakaas.com<br>
                       <!-- <div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>-->
                        <div>
                            Website Developed by <a href="https://www.dotstudio.co.in" target="_blank"><img src="../../img/Logo/dotstudio.gif"></a>
                        
                        </div>
                    </div>


                    <div class="col_half col_last tright">
                        <div class="fright clearfix">
                            <a href="https://www.facebook.com/archakaasdotcom?fref=ts" target="_blank" class="">
                                <i class="fa fa-facebook-square"></i>
                            </a>

                            <a href="#" class="">
                                <i class="fa fa-twitter-square"></i>
                            </a>

                            <a href="#" class="">
                                <i class="fa fa-google-plus"></i>
                            </a>

                            

                            <a href="https://vimeo.com/channels/973573" class="" target="_blank">
                                <i class="fa fa-vimeo-square"></i>
                               
                            </a>

                        
                        </div>

                        <div class="clear"></div>

                        <i class="glyphicon glyphicon-envelope"></i> info@archakaas.com <span class="middot">&middot;</span> <i class="glyphicon glyphicon-phone"></i> (+91) 99 94 359423 <!--<span class="middot">&middot;</span> <i class="icon-skype2"></i> ArchakaasOnSkype-->
                    </div>

                </div>

            </div><!-- #copyrights end -->

        </footer><!-- #footer end -->

    </div><!-- #wrapper end -->

    <!-- Go To Top
    ============================================= -->
    <div id="gotoTop" class="glyphicon glyphicon-chevron-up"></div>

    <!-- Footer Scripts
    ============================================= -->
    <script type="text/javascript" src="../../js/functions.js"></script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-23255544-12', 'auto');
  ga('send', 'pageview');
</script><script>jQuery(document).ready(function(e){e("#primary-menu").find('a[href="side-panel.php"],a[href="tabs.php"]').children("div").append('<span class="label label-danger" style="display:inline-block;margin-left:8px;text-transform:none;">New</span>')});</script>
<script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","licenseKey":"839484a19a","applicationID":"5289971","transactionName":"ZQEDZxZUD0FZVkxfX1xLNEENGglGVVkXVVFcEgBAS1IAXlRQSk8eQgwR","queueTime":0,"applicationTime":1,"atts":"SUYAEV5OHE8=","errorBeacon":"bam.nr-data.net","agent":"../../js/686.min.js"}</script></body>
</html>