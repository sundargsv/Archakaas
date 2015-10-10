<?php
session_start();
include_once 'DB/dbConnect.php';
                            
                            if(isset($_POST['email']) && !empty($_POST['email']) AND isset($_POST['password']) && !empty($_POST['password'])){
                                $email_control = mysql_escape_string($_POST['email']);
                                $password_control = mysql_escape_string(md5($_POST['password']));
                                
                                $search = mysql_query("SELECT user_id, email_user, password_user, active FROM UserRegister WHERE email_user='".$email_control."' AND password_user='".$password_control."' AND active=0 ") or die(mysql_error()); 
                                $row_result=mysql_fetch_array($search);
                                $match  = mysql_num_rows($search);
                                $USER_ID = $row_result['user_id']; // Get the user id alone into this variable
                                $_SESSION['user'] = $USER_ID;//Here session is used and value of $USER_ID store in $_SESSION.
                                if($match > 0){
                                    header("Location: home-page.php");

                                }else{
                                    $msg = 'Invalid E-mail or Password';
                                }
                            }
?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" /><script type="text/javascript">window.NREUM||(NREUM={}),__nr_require=function(e,n,t){function r(t){if(!n[t]){var o=n[t]={exports:{}};e[t][0].call(o.exports,function(n){var o=e[t][1][n];return r(o?o:n)},o,o.exports)}return n[t].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<t.length;o++)r(t[o]);return r}({QJf3ax:[function(e,n){function t(e){function n(n,t,a){e&&e(n,t,a),a||(a={});for(var u=c(n),f=u.length,s=i(a,o,r),p=0;f>p;p++)u[p].apply(s,t);return s}function a(e,n){f[e]=c(e).concat(n)}function c(e){return f[e]||[]}function u(){return t(n)}var f={};return{on:a,emit:n,create:u,listeners:c,_events:f}}function r(){return{}}var o="nr@context",i=e("gos");n.exports=t()},{gos:"7eSDFh"}],ee:[function(e,n){n.exports=e("QJf3ax")},{}],3:[function(e,n){function t(e){return function(){r(e,[(new Date).getTime()].concat(i(arguments)))}}var r=e("handle"),o=e(1),i=e(2);"undefined"==typeof window.newrelic&&(newrelic=window.NREUM);var a=["setPageViewName","addPageAction","setCustomAttribute","finished","addToTrace","inlineHit","noticeError"];o(a,function(e,n){window.NREUM[n]=t("api-"+n)}),n.exports=window.NREUM},{1:12,2:13,handle:"D5DuLP"}],gos:[function(e,n){n.exports=e("7eSDFh")},{}],"7eSDFh":[function(e,n){function t(e,n,t){if(r.call(e,n))return e[n];var o=t();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(e,n,{value:o,writable:!0,enumerable:!1}),o}catch(i){}return e[n]=o,o}var r=Object.prototype.hasOwnProperty;n.exports=t},{}],D5DuLP:[function(e,n){function t(e,n,t){return r.listeners(e).length?r.emit(e,n,t):void(r.q&&(r.q[e]||(r.q[e]=[]),r.q[e].push(n)))}var r=e("ee").create();n.exports=t,t.ee=r,r.q={}},{ee:"QJf3ax"}],handle:[function(e,n){n.exports=e("D5DuLP")},{}],XL7HBI:[function(e,n){function t(e){var n=typeof e;return!e||"object"!==n&&"function"!==n?-1:e===window?0:i(e,o,function(){return r++})}var r=1,o="nr@id",i=e("gos");n.exports=t},{gos:"7eSDFh"}],id:[function(e,n){n.exports=e("XL7HBI")},{}],G9z0Bl:[function(e,n){function t(){var e=d.info=NREUM.info,n=f.getElementsByTagName("script")[0];if(e&&e.licenseKey&&e.applicationID&&n){c(p,function(n,t){n in e||(e[n]=t)});var t="https"===s.split(":")[0]||e.sslForHttp;d.proto=t?"https://":"http://",a("mark",["onload",i()]);var r=f.createElement("script");r.src=d.proto+e.agent,n.parentNode.insertBefore(r,n)}}function r(){"complete"===f.readyState&&o()}function o(){a("mark",["domContent",i()])}function i(){return(new Date).getTime()}var a=e("handle"),c=e(1),u=window,f=u.document;e(2);var s=(""+location).split("?")[0],p={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js/686.min.js"},d=n.exports={offset:i(),origin:s,features:{}};f.addEventListener?(f.addEventListener("DOMContentLoaded",o,!1),u.addEventListener("load",t,!1)):(f.attachEvent("onreadystatechange",r),u.attachEvent("onload",t)),a("mark",["firstbyte",i()])},{1:12,2:3,handle:"D5DuLP"}],loader:[function(e,n){n.exports=e("G9z0Bl")},{}],12:[function(e,n){function t(e,n){var t=[],o="",i=0;for(o in e)r.call(e,o)&&(t[i]=n(o,e[o]),i+=1);return t}var r=Object.prototype.hasOwnProperty;n.exports=t},{}],13:[function(e,n){function t(e,n,t){n||(n=0),"undefined"==typeof t&&(t=e?e.length:0);for(var r=-1,o=t-n||0,i=Array(0>o?0:o);++r<o;)i[r]=e[n+r];return i}n.exports=t},{}]},{},["G9z0Bl"]);</script>
	<meta name="author" content="SemiColonWeb" />

    <!-- Stylesheets
    ============================================= -->
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/main.css" type="text/css" />
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css" type="text/css" />
    <!--<link rel="stylesheet" href="bootstrap/css/bootstrap-social.css" type="text/css" />-->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">


    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <!--[if lt IE 9]>
    	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->

    <!-- External JavaScripts
    ============================================= -->
	<script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <!-- Document Title
    ============================================= -->
	<title>Archakaas | Landing</title>


</head>

<body class="stretched">

    <!-- Document Wrapper
    ============================================= -->
    <div id="wrapper" class="clearfix">

        <!-- Header
        ============================================= -->
        <header id="header" class="transparent-header page-section dark">

            <div id="header-wrap">

                <div class="container clearfix">

                    <div id="primary-menu-trigger"><i class="glyphicon glyphicon-menu-hamburger"></i></div>

                    <!-- Logo
                    ============================================= -->
                    <div id="logo">
                        <a href="index.php" class="standard-logo" data-dark-logo="http://canvashtml-cdn.semicolonweb.com/images/logo-dark.png"><img src="http://canvashtml-cdn.semicolonweb.com/images/logo.png" alt="Canvas Logo"></a>
                        <a href="index.php" class="retina-logo" data-dark-logo="http://canvashtml-cdn.semicolonweb.com/images/logo-dark@2x.png"><img src="http://canvashtml-cdn.semicolonweb.com/images/logo@2x.png" alt="Canvas Logo"></a>
                    </div><!-- #logo end -->

                    <!-- Primary Navigation
                    ============================================= -->
                    <nav id="primary-menu">

                        <ul class="one-page-menu">
                            <li class="current"><a href="#" data-href="#header"><div>Home</div></a>
                            </li>
                            <li><a href="#" data-href="#section-features"><div>Features</div></a>
                            </li>
                            <li><a href="#" data-href="#section-prayersClub"><div>Prayer Club</div></a>
                            </li>
                            
                           <li><a href="#" data-href="#section-testimonials"><div>Testimonials</div></a>
                            </li>

                            <li><a href="#" data-href="#section-globalTemples"><div>Global Temples</div></a>
                            </li>

                            <li><a href="#" ><div>Contact Us</div></a>
                            </li>
                           <!-- <li><a href="#" data-href="#section-buy"><div>Buy Now</div></a></li>-->
                        </ul>

                    </nav><!-- #primary-menu end -->

                </div>

            </div>

        </header><!-- #header end -->
             
                    
                        

                            

        <section id="slider" style="background: url(img/Landing/L10.jpg) center center / cover; overflow: visible;" data-height-lg="500" data-height-md="500" data-height-sm="600" data-height-xs="600" data-height-xxs="600">

            <div class="container clearfix">
                      <?php 
                            if(isset($msg)){ // Check if $msg is not empty
                                echo '<div class="alert alert-danger center-block" role="alert" style="margin-top:5%">'.$msg.'</div>'; // Display our message and add a div around it with the class statusmsg
                            } 
                        ?>              
                <form method="post" class="landing-wide-form landing-form-overlay dark nobottommargin clearfix">
                        
                        

                        
                    <div class="heading-block nobottommargin nobottomborder">
                        
                        <h2>Welcome Back</h2>
                        <span>Sign in To Explore</span>
                    </div>



                    <div class="line" style="margin: 20px 0 30px;"></div>
                   <!-- <div class="col_full">
                        <input type="text" class="form-control input-lg not-dark" value="" placeholder="Your Email">
                    </div>-->
                    <div class="col_full">
                        <input type="email" class="form-control input-lg not-dark" name="email" value="" placeholder="Your Email">
                    </div>
                    <div class="col_full">
                        <input type="password" class="form-control input-lg not-dark" name="password" value="" placeholder="Your Password">
                    </div>
                    
                    <div class="col_full nobottommargin">
                        <button class="btn btn-lg btn-danger btn-block nomargin"  value="submit" type="submit">LOG IN</button>
                    </div>

                    <div style="margin-top:20px;margin-bottom:15px">
                        <!-- Trigger the modal with a button -->
                        <a href="Include/forgot-password.php">Forgot Password ?</a>
                    </div>



                    <div class="col_full nobottommargin">
                        <div class="center">
                        <a href="register-login.php" data-animate="tada" style="background-color:#00DDDD" class="button button-3d button-teal  nobottommargin"><span class="glyphicon glyphicon-star-empty"></span>Signup for free </a>
                        </div>
                    </div>
                </form>


            </div>
        </section>

<!--///////////////////////////////////////************************MOdal dialog starts here*****************\\\\\\\\\\\\\\\\\\\\\\\-->


<!--//////////////////////////////////////*************************End of Modal dialog**********************\\\\\\\\\\\\\\\\\\\\\\\-->
                            

        <!-- Content
        ============================================= -->
        <section id="content" style="overflow: visible;">

            <div class="content-wrap">

                <div class="promo promo-dark promo-full landing-promo header-stick">
                    <div class="container clearfix">
                        <h3>This site is developed only for Archakaas By Archakaas. </h3>
                        <span>Other's can navigate to Prayer's Club  <span class="glyphicon glyphicon-hand-right" style="position:relative;top:2px;"></span></span>
                    </div>
                </div>

               <div class="container clearfix">

                    <div class="clear bottommargin-lg"></div>

                    <div id="section-features" class="heading-block title-center page-section">
                        <h2>Features Overview</h2>
                        <span >கீழ் கண்ட சேவைகளை பெற்று பயன் அடையுங்கள்.</span>
                    </div>

                    <div class="col_one_third">
                        <div class="feature-box fbox-plain">
                            <div class="fbox-icon" data-animate="bounceIn">
                                <a href="#"><img src="http://canvashtml-cdn.semicolonweb.com/images/icons/features/responsive.png" alt="Responsive Layout"></a>
                            </div>
                            <h3>வேதஆகம விதானங்கள்</h3>
                           
                        </div>
                    </div>

                    <div class="col_one_third">
                        <div class="feature-box fbox-plain">
                            <div class="fbox-icon" data-animate="bounceIn" data-delay="200">
                                <a href="#"><img src="http://canvashtml-cdn.semicolonweb.com/images/icons/features/retina.png" alt="Retina Graphics"></a>
                            </div>
                            <h3>வேதஆகம மந்திரங்கள்</h3>
                        </div>
                    </div>

                    <div class="col_one_third col_last">
                        <div class="feature-box fbox-plain">
                            <div class="fbox-icon" data-animate="bounceIn" data-delay="400">
                                <a href="#"><img src="http://canvashtml-cdn.semicolonweb.com/images/icons/features/performance.png" alt="Powerful Performance"></a>
                            </div>
                            <h3>வேதஆகம பூஜாவிதிகள்</h3>
                        </div>
                    </div>

                    <div class="clear"></div>

                    <div class="col_one_third">
                        <div class="feature-box fbox-plain">
                            <div class="fbox-icon" data-animate="bounceIn" data-delay="600">
                                <a href="#"><img src="http://canvashtml-cdn.semicolonweb.com/images/icons/features/flag.png" alt="Responsive Layout"></a>
                            </div>
                            <h3>அர்ச்சகர் வேலை வாய்ப்பு(வெளிநாடுகளிலும்)</h3>
                        </div>
                    </div>

                    <div class="col_one_third">
                        <div class="feature-box fbox-plain">
                            <div class="fbox-icon" data-animate="bounceIn" data-delay="800">
                                <a href="#"><img src="http://canvashtml-cdn.semicolonweb.com/images/icons/features/tick.png" alt="Retina Graphics"></a>
                            </div>
                            <h3>சிவாச்சார்யார்களின் விவரங்கள்</h3>
                        </div>
                    </div>

                    <div class="col_one_third col_last">
                        <div class="feature-box fbox-plain">
                            <div class="fbox-icon" data-animate="bounceIn" data-delay="1000">
                                <a href="#"><img src="http://canvashtml-cdn.semicolonweb.com/images/icons/features/tools.png" alt="Powerful Performance"></a>
                            </div>
                            <h3>ஊடக பதிவுகள் (Audio, Video, Image)</h3>
                        </div>
                    </div>

                    <div class="center">
                        
                        <a href="BasicServices/features.php"  class="button button-3d button-red button-xlarge nobottommargin"><i class=""></i>Read More</a>
                    </div>

                   

                    <div class="clear"></div>

                    <div class="divider divider-short divider-center"><i class="glyphicon glyphicon-star-empty"></i></div>

                   

                 <div class="row clearfix common-height">

                    <div class="col-md-6 center col-padding" style="background: url('img/Slider/slider1.jpg') center center no-repeat; background-size: cover;">
                        <div>&nbsp;</div>
                    </div>

                    <div class="col-md-6 center col-padding" style="background-color: #F5F5F5;">
                        <div>
                            <div class="heading-block nobottomborder">
                                <span class="before-heading color">View this clip.</span>
                                <h4>To know what we have made for you.</h4>
                            </div>

                            <div class="center bottommargin">
                                 <iframe src="http://player.vimeo.com/video/94842405" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                <!--<a href="walkthrough-videos.php" style="position: relative;">
                                    <img src="http://canvashtml-cdn.semicolonweb.com/images/services/video.jpg" alt="Video">
                                    <span class="i-overlay nobg"><img src="http://canvashtml-cdn.semicolonweb.com/images/icons/video-play.png" alt="Play"></span>
                                </a>-->
                            </div>
                            <p class="lead nobottommargin"> அர்ச்சகாஸ் உங்களுக்காக பல சேவைகளுடன் காத்துக்கொண்டிருக்கிறது. வீடியோவை பார்க்க மேல click செயுங்கள்.</p>
                        </div>
                    </div>

                </div>

                 <div class="clear"></div>

                    <div class="divider divider-short divider-center"><i class="glyphicon glyphicon-star-empty"></i></div>


                <!--Prayers Club
                ============================-->
                    <div class="container clearfix">
                                    <div class="clear bottommargin-lg"></div>

                        <div id="section-prayersClub" class="heading-block title-center page-section">
                            <h2>Prayers Club</h2>
                            <span >உங்களுடைய பிரார்த்தனை எங்களிடம் .</span>
                        </div>

                        <div class="center">
                            <a href="BasicServices/prayers-club.php"  class="button button-3d button-red button-xlarge nobottommargin"><i class=""></i>Read More</a>
                        </div>
                    </div>



                <div class="section">

                    <div class="container clearfix">

                        <div id="section-testimonials" class="heading-block title-center page-section">
                            <h2>Testimonials</h2>
                            <span >சர்வசாதாக சம்ரட் அவர்களிடமிருந்து இணையதளத்தை பற்றிய   பொன்மொழிகள் !.</span>
                        </div>

                        <ul class="testimonials-grid grid-3 clearfix">
                            <li>
                                <div class="testimonial">
                                    <div class="testi-image">
                                        <a href="#"><img src="http://canvashtml-cdn.semicolonweb.com/images/testimonials/.jpg" alt="Customer Testimonails"></a>
                                    </div>
                                    <div class="testi-content">
                                        <p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero illo rerum repellendus!</p>
                                        <div class="testi-meta">
                                            John Doe
                                            <span>XYZ Inc.</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="testimonial">
                                    <div class="testi-image">
                                        <a href="#"><img src="http://canvashtml-cdn.semicolonweb.com/images/testimonials/.jpg" alt="Customer Testimonails"></a>
                                    </div>
                                    <div class="testi-content">
                                        <p>Natus voluptatum enim quod necessitatibus quis expedita harum provident eos obcaecati id culpa corporis molestias.</p>
                                        <div class="testi-meta">
                                            Collis Ta'eed
                                            <span>Envato Inc.</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="testimonial">
                                    <div class="testi-image">
                                        <a href="#"><img src="http://canvashtml-cdn.semicolonweb.com/images/testimonials/.jpg" alt="Customer Testimonails"></a>
                                    </div>
                                    <div class="testi-content">
                                        <p>Fugit officia dolor sed harum excepturi ex iusto magnam asperiores molestiae qui natus obcaecati facere sint amet.</p>
                                        <div class="testi-meta">
                                            Mary Jane
                                            <span>Google Inc.</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="testimonial">
                                    <div class="testi-image">
                                        <a href="#"><img src="http://canvashtml-cdn.semicolonweb.com/images/testimonials/.jpg" alt="Customer Testimonails"></a>
                                    </div>
                                    <div class="testi-content">
                                        <p>Similique fugit repellendus expedita excepturi iure perferendis provident quia eaque. Repellendus, vero numquam?</p>
                                        <div class="testi-meta">
                                            Steve Jobs
                                            <span>Apple Inc.</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="testimonial">
                                    <div class="testi-image">
                                        <a href="#"><img src="http://canvashtml-cdn.semicolonweb.com/images/testimonials/.jpg" alt="Customer Testimonails"></a>
                                    </div>
                                    <div class="testi-content">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, perspiciatis illum totam dolore deleniti labore.</p>
                                        <div class="testi-meta">
                                            Jamie Morrison
                                            <span>Adobe Inc.</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="testimonial">
                                    <div class="testi-image">
                                        <a href="#"><img src="http://canvashtml-cdn.semicolonweb.com/images/testimonials/.jpg" alt="Customer Testimonails"></a>
                                    </div>
                                    <div class="testi-content">
                                        <p>Porro dolorem saepe reiciendis nihil minus neque. Ducimus rem necessitatibus repellat laborum nemo quod.</p>
                                        <div class="testi-meta">
                                            Cyan Ta'eed
                                            <span>Tutsplus</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>

                    </div>

                </div>

                <div class="container clearfix">

                    <div id="section-globalTemples" class="heading-block title-center page-section">
                        <h2>Global Temples</h2>
                        <span>Complete information about temples around the world</span>
                    </div>

                    <div id="side-navigation">

                        <div class="col_one_third">

                            <ul class="sidenav">
                                <li class="ui-tabs-active"><a href="#snav-content1"><i class="glyphicon glyphicon-info-sign"></i>Temple Info<i class="glyphicon glyphicon-chevron-right"></i></a></li>
                                <li><a href="#snav-content2"><i class="glyphicon glyphicon-time"></i>Temple &amp; Pooja timings <i class="glyphicon glyphicon-chevron-right"></i></a></li>
                                <li><a href="#snav-content3"><i class="glyphicon glyphicon-earphone"></i>Temple Contact Info <i class="glyphicon glyphicon-chevron-right"></i></a></li>
                                <li><a href="#snav-content4"><i class="glyphicon glyphicon-phone-alt"></i>Archakar Contact Info<i class="glyphicon glyphicon-chevron-right"></i></a></li>
                                <li><a href="#snav-content5"><i class="glyphicon glyphicon-gift"></i>Archakaas Ticketing Scheme<i class="glyphicon glyphicon-chevron-right"></i></a></li>
                            </ul>

                        </div>

                        <div class="col_two_third col_last">

                            <div id="snav-content1">
                                <h3>திருகோயில் விவரம்</h3>
                                <img class="alignright img-responsive" src="http://canvashtml-cdn.semicolonweb.com/images/landing/responsive.png" alt="">

                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, ex, inventore, tenetur, repellat ipsam soluta libero amet nam aspernatur perspiciatis quos praesentium et debitis ea odit enim illo aliquid eligendi numquam neque. Ipsum, voluptatibus, perspiciatis a quam aliquid cumque cupiditate id ipsa tempora eveniet. Cupiditate, necessitatibus, consequatur odio. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta, vitae, laboriosam libero nihil labore hic modi? Odit, veritatis nulla molestiae!
                            </div>

                            <div id="snav-content2">
                                <h3>திருகோயில் நேரங்களின் குறிப்பு</h3>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam, voluptatem reprehenderit natus facilis id deserunt iusto incidunt cumque odit molestias iste dolor eum esse soluta facere quidem minima in voluptate explicabo ducimus alias ratione aut molestiae omnis fuga labore quod optio modi voluptatum nemo suscipit porro maxime ex. Maiores, ratione eligendi labore quaerat veniam laborum nam rem delectus illum aspernatur quas sequi animi quae nulla alias hic inventore ex perspiciatis nisi consequatur enim a aut dolorum modi quod perferendis dicta impedit magni placeat repellat. Soluta, dicta, dolores, reiciendis, eum accusamus esse 
                            </div>

                            <div id="snav-content3">
                                <img class="alignleft img-responsive" src="http://www.w3schools.com/tags/colormap.gif" alt="">
                                <h3>திருகோயில் முகவரி குறிப்பு</h3>Dolor aperiam modi aliquam dolores consequatur error commodi ad eius incidunt! Libero, odio incidunt ullam sunt fugiat? Laboriosam, perferendis, debitis, harum soluta iste eos sunt odit architecto porro eveniet sint optio nihil animi. Laudantium, quam, culpa, velit molestias exercitationem reprehenderit enim distinctio aliquam aut ex numquam sequi assumenda veritatis fuga voluptatum. Magni, voluptates adipisci unde sapiente eligendi ea maxime tempora pariatur ipsa.. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae, aspernatur, saepe, quidem animi hic rem libero earum fuga voluptas culpa iure qui accusantium ab quae dolorum laborum quia repellat fugit aut minima molestias placeat mollitia doloribus quibusdam consectetur officia nesciunt ad. Ab, quod ipsum commodi assumenda doloribus possimus sed laudantium.Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            </div>

                            <div id="snav-content4">
                                <img class="alignleft img-responsive" src="http://canvashtml-cdn.semicolonweb.com/images/landing/bootstrap.png" alt="">
                                <h3>அர்ச்சகர் முகவரி குறிப்பு</h3>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, nostrum, dolores id quo nam repudiandae ad culpa architecto minima nemo eaque soluta nulla laborum neque provident saepe facilis expedita numquam quas alias in perferendis accusamus ipsam blanditiis sit voluptatem temporibus vero error veritatis repellat eos reiciendis repellendus quam. Officia dicta ipsam nostrum aperiam. Dolor, expedita enim modi nostrum commodi sint architecto aliquam aut mollitia repellendus deserunt quaerat aspernatur aperiam voluptatibus consequatur rerum consequuntur.
                            </div>

                            <div id="snav-content5">
                                <h3>Archakaas Ticketing - Available</h3>
                                Coming Soon to make your life easy for future !
                            </div>

                        </div>

                    </div>

                    <script>
                      $(function() {
                        $( "#side-navigation" ).tabs({ show: { effect: "fade", duration: 400 } });
                      });
                    </script>

                </div>

                <div class="section footer-stick">

                    <div class="container clearfix">

                        <div id="section-buy" class="heading-block title-center nobottomborder page-section">
                            <h2>Enough? Start Accessing!</h2>
                            <span >இப்போது உள்ளே சென்று பயன் அடைவீர் .</span>
                        </div>

                        <div class="center">

                            <a href="#" data-animate="tada" class="button button-3d button-teal button-xlarge nobottommargin"><i class="glyphicon glyphicon-user"></i>Sign in</a>  <a href="#" data-scrollto="#section-pricing" class="button button-3d button-red button-xlarge nobottommargin"><i class="glyphicon glyphicon-thumbs-up"></i>Sign Up</a>

                        </div>

                    </div>

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

                                <img src="img/Logo/archakaas-footer.png" alt="" class="footer-logo">

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

                        <!--<div class="widget clearfix" style="margin-bottom: -20px;">

                            <div class="row">

                                <div class="col-md-6 bottommargin-sm">
                                    <div class="counter counter-small"><span data-from="50" data-to="15065421" data-refresh-interval="80" data-speed="3000" data-comma="true"></span></div>
                                    <h5 class="nobottommargin">Total Downloads</h5>
                                </div>

                                <div class="col-md-6 bottommargin-sm">
                                    <div class="counter counter-small"><span data-from="100" data-to="18465" data-refresh-interval="50" data-speed="2000" data-comma="true"></span></div>
                                    <h5 class="nobottommargin">Clients</h5>
                                </div>

                            </div>

                        </div>-->

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
                            Website Developed by <a href="https://www.dotstudio.co.in" target="_blank"><img src="img/Logo/dotstudio.gif"></a>
                        
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
    <script type="text/javascript" src="js/functions.js"></script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-23255544-12', 'auto');
  ga('send', 'pageview');
</script>
<script>jQuery(document).ready(function(e){e("#primary-menu").find('a[href="side-panel.php"],a[href="tabs.php"]').children("div").append('<span class="label label-danger" style="display:inline-block;margin-left:8px;text-transform:none;">New</span>')});</script>
<script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","licenseKey":"839484a19a","applicationID":"5289971","transactionName":"ZQEDZxZUD0FZVkxfX1xLNEENGglGVVkXVVFcEgBAS1kAXFxcVlEdB0oRWxQ=","queueTime":0,"applicationTime":0,"atts":"SUYAEV5OHE8=","errorBeacon":"bam.nr-data.net","agent":"js/686.min.js"}</script>




</body>
</html>