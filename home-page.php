<!--/////////////////////////////////////*Script*For*SESSION\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

<?php
session_start();
include_once 'DB/dbConnect.php';

if(!isset($_SESSION['user']))
{
    header("Location: index.php");
}
$res=mysql_query("SELECT * FROM UserRegister WHERE user_id=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);
?>


<!--/////////////////////////////////////Ending*Script*For*SESSION\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
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
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <!--[if lt IE 9]>
    	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->

    <!-- External JavaScripts
    ============================================= -->
    <script type="text/javascript" src="js/jquery.js"></script>

    <!-- Document Title
    ============================================= -->
    <title>Archakaas | Home</title>


</head>

<body class="stretched">

    <!-- Document Wrapper
    ============================================= -->
    <div id="wrapper" class="clearfix">

        <!-- Header
        ============================================= -->
        <header id="header" class="transparent-header full-header" data-sticky-class="not-dark">

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
                    <nav id="primary-menu" class="dark">

                        <ul>
                            <li class="current"><a href="#"><div>Home</div></a>
                              
                            </li>
                            <li><a href="Services/VedaMantras/VM1.php"><div>Veda Mantras</div></a>
                                  
                                <ul>
                                    <li><a href="Services/VedaMantras/VM1.php"><div><i></i>கணபதி</div></a>
                                        
                                    </li>
                                    <li><a href="Services/VedaMantras/VM2.php"><div><i></i>சுப்ரமண்யர்</div></a>
                                       
                                    </li>
                                    <li><a href="Services/VedaMantras/VM3.php"><div><i></i>தேவி</div></a>
                                        
                                    </li>
                                    <li><a href="Services/VedaMantras/VM4.php"><div><i></i>ஸ்வாமி</div></a>
                                        
                                    </li>
                                    
                                    <li><a href="Services/VedaMantras/VM5.php"><div>இதர ப்ரதிஷ்டாவிதிகள்</div></a>
                                       
                                    </li>
                                    <li><a href="Services/VedaMantras/VM6.php"><div>தத்வார்ச்சனை</div></a>
                                        
                                    </li>
                                    <li><a href="Services/VedaMantras/VM7.php"><div>சர்வதேவதா மந்திரங்கள்</div></a></li>
                                    <li><a href="Services/VedaMantras/VM8.php"><div>யந்திரங்கள்</div></a>
                                     
                                    </li>
                                    <li><a href="Services/VedaMantras/VM9.php" data-scrollto="#footer"><div>மற்றும் பல விதிகள்</div></a>
                                        <ul>
                                            <li><a href="#footer" data-scrollto="#footer"><div>யாகசாலாவித</div></a></li>
                                            <li><a href="footer-2.php#footer"><div>குண்டவிதி</div></a></li>
                                            <li><a href="footer-3.php#footer"><div>உற்ச்சவவிதி</div></a></li>
                                            <li><a href="footer-4.php#footer"><div>ப்ராயச்சித்தவிதி</div></a></li>
                                            <li><a href="footer-5.php#footer"><div>தந்திரவிதி</div></a></li>
                                            <li><a href="footer-6.php#footer"><div>சாந்திபூஜாவிதி</div></a></li>
                                            <li><a href="footer-5.php#footer"><div>பவித்ரோத்ஸ்வவிதி</div></a></li>
                                            <li><a href="footer-6.php#footer"><div>சண்டிஹோம விதி</div></a></li>
                                        </ul>
                                    </li>
                                    <li><a href="Services/VedaMantras/VM10.php"><div>இதர விஷயங்கள்</div></a>
                                     
                                    </li>
                                </ul>
                            </li>
                            <li><a href="Services/Library/Gallery.php"><div>Library</div></a>
                                <ul>
                                    <li><a href="Services/Library/Gallery.php">Galleries</a></li>
                                    <li><a href="Services/Library/Video.php">Videos</a></li>
                                    <li><a href="Services/Library/Audio.php">Audios</a></li>

                                </ul>
                            </li>
                            <li><a href="Services/Blog/"><div>Blog</div></a>
                              
                            </li>
                            <li ><a href="#"><div>My Account</div></a>
                                <ul>
                                    <li><a href="#">User ID:&nbsp;<?php echo $userRow['user_id']; ?></a></li>
                                    <li><a href="Services/view-edit-profile.php">Profile</a></li>
                                    <li><a href="Include/logout.php">Logout</a></li>


                                </ul>
                            </li>
                            <li><a href="Contact-us.php"><div>Contact Us</div></a>
                                
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

        <section id="slider" class="slider-parallax swiper_wrapper full-screen clearfix">

            <div class="swiper-container swiper-parent">
                <div class="swiper-wrapper">
                    <div class="swiper-slide dark" style="background-image: url('img/Slider/sl1.jpg');">
                        <div class="container clearfix">
                            <div class="slider-caption slider-caption-center">
                                <h2 data-caption-animate="fadeInUp">Welcome to Archakaas</h2>
                                <p data-caption-animate="fadeInUp" data-caption-delay="200">Are you new to this portal ? Please click the <a href="">Demo video</a>.</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide dark" style="background-image: url('img/Slider/sl1.jpg');">
                        <div class="container clearfix">
                            <div class="slider-caption slider-caption-center">
                                <h2 data-caption-animate="fadeInUp" style="font-size:115%">அன்புடன் வரவேற்கிறோம்</h2>
                                <p data-caption-animate="fadeInUp" data-caption-delay="200" style="font-size:90%">அர்ச்சகாஸ் சேவையை முழுமையாக பயன்படுத்த <a href=""> click </a>செயுங்கள் .</p>
                            </div>
                        </div>
                    </div>
                   
                   
                </div>
                <div id="slider-arrow-left"><i class="glyphicon glyphicon-chevron-left"></i></div>
                <div id="slider-arrow-right"><i class="glyphicon glyphicon-chevron-right"></i></div>
            </div>

            <script>
                jQuery(document).ready(function($){
                    swiperSlider = new Swiper('.swiper-parent',{
                        paginationClickable: false,
                        slidesPerView: 1,
                        grabCursor: true,
                        loop: true,
                        onSwiperCreated: function(swiper){
                            $('[data-caption-animate]').each(function(){
                                var $toAnimateElement = $(this);
                                var toAnimateDelay = $(this).attr('data-caption-delay');
                                var toAnimateDelayTime = 0;
                                if( toAnimateDelay ) { toAnimateDelayTime = Number( toAnimateDelay ) + 750; } else { toAnimateDelayTime = 750; }
                                if( !$toAnimateElement.hasClass('animated') ) {
                                    $toAnimateElement.addClass('not-animated');
                                    var elementAnimation = $toAnimateElement.attr('data-caption-animate');
                                    setTimeout(function() {
                                        $toAnimateElement.removeClass('not-animated').addClass( elementAnimation + ' animated');
                                    }, toAnimateDelayTime);
                                }
                            });
                            SEMICOLON.slider.swiperSliderMenu();
                        },
                        onSlideChangeStart: function(swiper){
                            $('[data-caption-animate]').each(function(){
                                var $toAnimateElement = $(this);
                                var elementAnimation = $toAnimateElement.attr('data-caption-animate');
                                $toAnimateElement.removeClass('animated').removeClass(elementAnimation).addClass('not-animated');
                            });
                            SEMICOLON.slider.swiperSliderMenu();
                        },
                        onSlideChangeEnd: function(swiper){
                            $('#slider .swiper-slide').each(function(){
                                if($(this).find('video').length > 0) { $(this).find('video').get(0).pause(); }
                            });
                            $('#slider .swiper-slide:not(".swiper-slide-active")').each(function(){
                                if($(this).find('video').length > 0) {
                                    if($(this).find('video').get(0).currentTime != 0 ) $(this).find('video').get(0).currentTime = 0;
                                }
                            });
                            if( $('#slider .swiper-slide.swiper-slide-active').find('video').length > 0 ) { $('#slider .swiper-slide.swiper-slide-active').find('video').get(0).play(); }

                            $('#slider .swiper-slide.swiper-slide-active [data-caption-animate]').each(function(){
                                var $toAnimateElement = $(this);
                                var toAnimateDelay = $(this).attr('data-caption-delay');
                                var toAnimateDelayTime = 0;
                                if( toAnimateDelay ) { toAnimateDelayTime = Number( toAnimateDelay ) + 300; } else { toAnimateDelayTime = 300; }
                                if( !$toAnimateElement.hasClass('animated') ) {
                                    $toAnimateElement.addClass('not-animated');
                                    var elementAnimation = $toAnimateElement.attr('data-caption-animate');
                                    setTimeout(function() {
                                        $toAnimateElement.removeClass('not-animated').addClass( elementAnimation + ' animated');
                                    }, toAnimateDelayTime);
                                }
                            });
                        }
                    });

                    $('#slider-arrow-left').on('click', function(e){
                        e.preventDefault();
                        swiperSlider.swipePrev();
                    });

                    $('#slider-arrow-right').on('click', function(e){
                        e.preventDefault();
                        swiperSlider.swipeNext();
                    });
                });
            </script>

        </section>

        <!-- Content
        ============================================= -->
        <section id="content">

            <div class="content-wrap">

                <div class="container clearfix">
                    <div class="row clearfix">

                        <div class="col-lg-5">
                            <div class="heading-block topmargin">
                                <h1>We are happy<br>in welcoming you.</h1>
                            </div>
                            <p class="lead" style="font-size:120%">அர்ச்சகாஸ் உங்களை அன்புடன் வரவேற்பதோடு நீங்கள் அணைத்து சேவையையும் வீட்டில் இருந்த படியே பெற்றுக்கொள்ள வடிவமைக்கபடுகிறது .</p>
                        </div>

                        <div class="col-lg-7">

                            <div style="position: relative; margin-bottom: -60px;" class="ohidden" data-height-lg="426" data-height-md="567" data-height-sm="470" data-height-xs="287" data-height-xxs="183">
                                <img src="http://canvashtml-cdn.semicolonweb.com/images/services/main-fbrowser.png" style="position: absolute; top: 0; left: 0;" data-animate="fadeInUp" data-delay="100" alt="Chrome">
                                <img src="http://canvashtml-cdn.semicolonweb.com/images/services/main-fmobile.png" style="position: absolute; top: 0; left: 0;" data-animate="fadeInUp" data-delay="400" alt="iPad">
                            </div>

                        </div>

                    </div>
                </div>

             

                <div class="container clearfix">

                    <div class="row topmargin-lg bottommargin-sm">

                        <div class="heading-block center">
                            <h2>Even more Feature coming soon</h2>
                            <span class="divcenter" style="font-size:120%">அர்ச்சகாஸ் மீண்டும் புதிய சேவைகளுடன் தயாராகிறது.</span>
                        </div>

                        <div class="col-md-4 col-sm-6 bottommargin">

                            <div class="feature-box fbox-right topmargin" data-animate="fadeIn">
                                <div class="fbox-icon">
                                    <a href="#"><i class="fa fa-mobile"></i></a>
                                </div>
                                <h3>Android Application</h3>
                                <p>Stretch your Website to the Full Width or make it boxed to surprise your visitors.</p>
                            </div>

                            <div class="feature-box fbox-right topmargin" data-animate="fadeIn" data-delay="200">
                                <div class="fbox-icon">
                                    <a href="#"><i class="fa fa-history"></i></a>
                                </div>
                                <h3>Vedic Science</h3>
                                <p>We have covered each &amp; everything in our Docs including Videos &amp; Screenshots.</p>
                            </div>

                            <div class="feature-box fbox-right topmargin" data-animate="fadeIn" data-delay="400">
                                <div class="fbox-icon">
                                    <a href="#"><i class="fa fa-clock-o"></i></a>
                                </div>
                                <h3>24 / 7 Support</h3>
                                <p>Display your Content attractively using Parallax Sections with HTML5 Videos.</p>
                            </div>

                        </div>

                        <div class="col-md-4 hidden-sm bottommargin center">
                            <img src="http://canvashtml-cdn.semicolonweb.com/images/services/iphone7.png" alt="iphone 2">
                        </div>

                        <div class="col-md-4 col-sm-6 bottommargin">

                            <div class="feature-box topmargin" data-animate="fadeIn">
                                <div class="fbox-icon">
                                    <a href="#"><i class="fa fa-video-camera"></i></a>
                                </div>
                                <h3>Video Classes</h3>
                                <p>Canvas provides support for Native HTML5 Videos that can be added to a Background.</p>
                            </div>

                            <div class="feature-box topmargin" data-animate="fadeIn" data-delay="200">
                                <div class="fbox-icon">
                                    <a href="#"><i class="fa fa-users"></i></a>
                                </div>
                                <h3>Archakaar Matrimony</h3>
                                <p>Complete control on each &amp; every element that provides endless customization.</p>
                            </div>

                            <div class="feature-box topmargin" data-animate="fadeIn" data-delay="400">
                                <div class="fbox-icon">
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </div>
                                <h3>Archakaar Job</h3>
                                <p>Change your Website's Primary Scheme instantly by simply adding the dark class.</p>
                            </div>

                        </div>

                    </div>

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
                            <p class="lead nobottommargin">wertyuiolp wrtyiejfhhjf jggdkjfn jjkkdbnk hhjftyrhhbr hhgdfdt.</p>
                        </div>
                    </div>

                </div>

                <div class="clear"></div>

                    <div class="divider divider-short divider-center"><i class="glyphicon glyphicon-star-empty"></i></div>


               
                <script type="text/javascript">

                    jQuery(window).load(function(){

                        var $container = $('#portfolio');

                        $container.isotope({
                            transitionDuration: '0.65s',
                            masonry: {
                                columnWidth: $container.find('.portfolio-item:not(.wide)')[0]
                            }
                        });

                        $('#page-menu a').click(function(){
                            $('#page-menu li').removeClass('current');
                            $(this).parent('li').addClass('current');
                            var selector = $(this).attr('data-filter');
                            $container.isotope({ filter: selector });
                            return false;
                        });

                        $(window).resize(function() {
                            $container.isotope('layout');
                        });

                    });

                </script>

                

                <div class="container clearfix">

                    <div class="col_one_third bottommargin-sm center">
                        <img data-animate="fadeInLeft" src="http://canvashtml-cdn.semicolonweb.com/images/services/iphone6.png" alt="Iphone">
                    </div>

                    <div class="col_two_third bottommargin-sm col_last">

                        <div class="heading-block topmargin-sm">
                            <h3>Optimized for Mobile &amp; Touch Enabled Devices.</h3>
                        </div>

                        <p>Archakaas is also well optimized and refined for all sort of devices like Mobile, Tablet and other touch enabled devices. The performance level is one and the same for all Resolutions with crystal clear metalic finish. And we are actually proud of making your life simpler and easier.</p>
                        <p>So you can use our website anywhere and anytime. Soon we'll be going to launch Archakaas Native Andriod App.</p>
                        <h4>நீங்கள் இந்த இணையதளத்தை மொபைல் மற்றும் டேபிலேட் கணினிகளிலும் பயன்படுத்த உருவாக்கப்பட்டது .</h4>

                       

                    </div>

                </div>

                <div class="section parallax dark nobottommargin" style="background-image: url('http://canvashtml-cdn.semicolonweb.com/images/services/home-testi-bg.jpg'); padding: 100px 0;" data-stellar-background-ratio="0.4">

                    <div class="heading-block center">
                        <h3 style="font-size:150%">எங்கள் சேவையை பற்றி இவர்களது கருத்து</h3>
                    </div>

                    <div class="fslider testimonial testimonial-full" data-animation="fade" data-arrows="false">
                        <div class="flexslider">
                            <div class="slider-wrap">
                                <div class="slide">
                                    <div class="testi-image">
                                        <a href="#"><img src="http://canvashtml-cdn.semicolonweb.com/images/testimonials/3.jpg" alt="Customer Testimonails"></a>
                                    </div>
                                    <div class="testi-content">
                                        <p>Similique fugit repellendus expedita excepturi iure perferendis provident quia eaque. Repellendus, vero numquam?</p>
                                        <div class="testi-meta">
                                            Steve Jobs
                                            <span>Apple Inc.</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="testi-image">
                                        <a href="#"><img src="http://canvashtml-cdn.semicolonweb.com/images/testimonials/2.jpg" alt="Customer Testimonails"></a>
                                    </div>
                                    <div class="testi-content">
                                        <p>Natus voluptatum enim quod necessitatibus quis expedita harum provident eos obcaecati id culpa corporis molestias.</p>
                                        <div class="testi-meta">
                                            Collis Ta'eed
                                            <span>Envato Inc.</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="testi-image">
                                        <a href="#"><img src="http://canvashtml-cdn.semicolonweb.com/images/testimonials/1.jpg" alt="Customer Testimonails"></a>
                                    </div>
                                    <div class="testi-content">
                                        <p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero illo rerum!</p>
                                        <div class="testi-meta">
                                            John Doe
                                            <span>XYZ Inc.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="section notopmargin notopborder">
                    <div class="container clearfix">
                        <div class="heading-block center nomargin">
                            <h3>Latest from the Blog</h3>
                        </div>
                    </div>
                </div>

                <div class="container clear-bottommargin clearfix">
                    <div class="row">

                        <div class="col-md-3 col-sm-6 bottommargin">
                            <div class="ipost clearfix">
                                <div class="entry-image">
                                    <a href="#"><img class="image_fade" src="http://canvashtml-cdn.semicolonweb.com/images/magazine/thumb/1.jpg" alt="Image"></a>
                                </div>
                                <div class="entry-title">
                                    <h3><a href="blog-single.php">Bloomberg smart cities; change-makers economic security</a></h3>
                                </div>
                                <ul class="entry-meta clearfix">
                                    <li><i class="icon-calendar3"></i> 13th Jun 2014</li>
                                    <li><a href="blog-single.php#comments"><i class="icon-comments"></i> 53</a></li>
                                </ul>
                                <div class="entry-content">
                                    <p>Prevention effect, advocate dialogue rural development lifting people up community civil society. Catalyst, grantees leverage.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 bottommargin">
                            <div class="ipost clearfix">
                                <div class="entry-image">
                                    <a href="#"><img class="image_fade" src="http://canvashtml-cdn.semicolonweb.com/images/magazine/thumb/2.jpg" alt="Image"></a>
                                </div>
                                <div class="entry-title">
                                    <h3><a href="blog-single.php">Medicine new approaches communities, outcomes partnership</a></h3>
                                </div>
                                <ul class="entry-meta clearfix">
                                    <li><i class="icon-calendar3"></i> 24th Feb 2014</li>
                                    <li><a href="blog-single.php#comments"><i class="icon-comments"></i> 17</a></li>
                                </ul>
                                <div class="entry-content">
                                    <p>Cross-agency coordination clean water rural, promising development turmoil inclusive education transformative leverage.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 bottommargin">
                            <div class="ipost clearfix">
                                <div class="entry-image">
                                    <a href="#"><img class="image_fade" src="http://canvashtml-cdn.semicolonweb.com/images/magazine/thumb/3.jpg" alt="Image"></a>
                                </div>
                                <div class="entry-title">
                                    <h3><a href="blog-single.php">Significant altruism planned giving insurmountable challenges liberal</a></h3>
                                </div>
                                <ul class="entry-meta clearfix">
                                    <li><i class="icon-calendar3"></i> 30th Dec 2014</li>
                                    <li><a href="blog-single.php#comments"><i class="icon-comments"></i> 13</a></li>
                                </ul>
                                <div class="entry-content">
                                    <p>Micro-finance; vaccines peaceful contribution citizens of change generosity. Measures design thinking accelerate progress medical initiative.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 bottommargin">
                            <div class="ipost clearfix">
                                <div class="entry-image">
                                    <a href="#"><img class="image_fade" src="http://canvashtml-cdn.semicolonweb.com/images/magazine/thumb/4.jpg" alt="Image"></a>
                                </div>
                                <div class="entry-title">
                                    <h3><a href="blog-single.php">Compassion conflict resolution, progressive; tackle</a></h3>
                                </div>
                                <ul class="entry-meta clearfix">
                                    <li><i class="icon-calendar3"></i> 15th Jan 2014</li>
                                    <li><a href="blog-single.php#comments"><i class="icon-comments"></i> 54</a></li>
                                </ul>
                                <div class="entry-content">
                                    <p>Community health workers best practices, effectiveness meaningful work The Elders fairness. Our ambitions local solutions globalization.</p>
                                </div>
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
<script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","licenseKey":"839484a19a","applicationID":"5289971","transactionName":"ZQEDZxZUD0FZVkxfX1xLNEENGglGVVkXVVFcEgBAS1wPVl1NFkZYQg==","queueTime":0,"applicationTime":1,"atts":"SUYAEV5OHE8=","errorBeacon":"bam.nr-data.net","agent":"js/686.min.js"}</script></body>
</html>