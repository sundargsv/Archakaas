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
	<title>Archakaas | Ganapathy</title>


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
                  <nav id="primary-menu" class="dark">

                    <ul>
                       <li ><a href="../../home-page.php"><div>Home</div></a></li>
                       <li class="current"><a href="#"><div>Veda Mantras</div></a>
                          <ul>
                            <li><a href="../../Services/VedaMantras/VM1.php"><div><i></i>கணபதி</div></a>   </li>
                            <li><a href="../../Services/VedaMantras/VM2.php"><div><i></i>சுப்ரமண்யர்</div>	</a>
                                  
                              </li>
                                    <li><a href="../../Services/VedaMantras/VM3.php"><div><i></i>தேவி</div></a>
                                       
                                    </li>
                                    <li><a href="../../Services/VedaMantras/VM4.php"><div><i></i>ஸ்வாமி</div></a>
                                        
                                    </li>
                                    
                                    <li><a href="../../Services/VedaMantras/VM5.php"><div>இதர ப்ரதிஷ்டாவிதிகள்</div></a>
                                       
                                    </li>
                                    <li><a href="../../Services/VedaMantras/VM6.php"><div>தத்வார்ச்சனை</div></a>
                                        
                                    </li>
                                    <li><a href="../../Services/VedaMantras/VM7.php"><div>சர்வதேவதா மந்திரங்கள்்</div></a></li>
                                    <li><a href="../../Services/VedaMantras/VM8.php"><div>யந்திரங்கள்</div></a>
                                     
                                    </li>
                                    <li><a href="../../Services/VedaMantras/VM9.php" data-scrollto="#footer"><div>மற்றும் பல விதிகள்</div></a>
                                        <ul>
                                            <li><a href="../../Services/VedaMantras/VM9/VM9_1.php" data-scrollto=""><div>யாகசாலாவித</div></a></li>
                                            <li><a href="../../Services/VedaMantras/VM9/VM9_2.php"><div>குண்டவிதி</div></a></li>
                                            <li><a href="../../Services/VedaMantras/VM9/VM9_3.php"><div>உற்ச்சவவிதி</div></a></li>
                                            <li><a href="../../Services/VedaMantras/VM9/VM9_4.php"><div>ப்ராயச்சித்தவிதி</div></a></li>
                                            <li><a href="../../Services/VedaMantras/VM9_5.php"><div>தந்திரவிதி</div></a></li>
                                            <li><a href="../../Services/VedaMantras/VM9_6.php"><div>சாந்திபூஜாவிதி</div></a></li>
                                            <li><a href="../../Services/VedaMantras/VM9_7.php"><div>பவித்ரோத்ஸ்வவிதி</div></a></li>
                                            <li><a href="../../Services/VedaMantras/VM9_8.php"><div>சண்டிஹோம விதி</div></a></li>
                                        </ul>
                                    </li>
                                    <li><a href="../../Services/VedaMantras/VM10.php"><div>இதர விஷயங்கள்</div></a>
                                     
                                    </li>
                                </ul>
                            </li>
                            <li><a href="../../Services/Library/Gallery.php"><div>Library</div></a>
                                <ul>
                                    <li><a href="../../Services/Library/Gallery.php">Galleries</a></li>
                                    <li><a href="../../Services/Library/Video.php">Videos</a></li>
                                    <li><a href="../../Services/Library/Audio.php">Audios</a></li>

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
				<h1 style="font-size:130%">கணபதி</h1>
				<span>Welcome, <?php echo $userRow['user_name_user']; ?></span>
				<ol class="breadcrumb">
					<li><a href="">Home</a></li>
					<li><a href="#">Veda Mantras</a></li>
					<li class="active">கணபதி</li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">


					<!-- Sidebar
					============================================= -->
					<div class="sidebar nobottommargin col_last clearfix">
						<div class="sidebar-widgets-wrap">

							<div class="widget widget_links clearfix">

								<h4>Choose Topic</h4>
								<ul>
									<li><a href="#tab1"><div><i class="glyphicon glyphicon-arrow-right"></i>சஹஸ்ரநாம ஸ்தோத்திரம்</div></a></li>

									<li><a href="#tab2"><div><i class="glyphicon glyphicon-arrow-right"></i>அஷ்டோத்தர சதநாம ஸ்தோத்திரம்</div></a></li>

									<li><a href="#tab3"><div><i class="glyphicon glyphicon-arrow-right"></i>அஷ்டோத்தர சதநாமாவளி</div></a></li>

									<li><a href="#tab4"><div><i class="glyphicon glyphicon-arrow-right"></i>சஹஸ்ரநாமாவளி</div></a></li>

									<li><a href="#tab5"><div><i class="glyphicon glyphicon-arrow-right"></i>மூல மந்திரங்கள்</div></a></li>

									<li><a href="#tab6"><div><i class="glyphicon glyphicon-arrow-right"></i>மாலா மந்திரங்கள்</div></a></li>

									<li><a href="#tab7"><div><i class="glyphicon glyphicon-arrow-right"></i>ஸ்தோத்திரங்கள்</div></a></li>

									<li><a href="#tab8"><div><i class="glyphicon glyphicon-arrow-right"></i>தியானங்கள்</div></a></li>

									<li><a href="#tab9"><div><i class="glyphicon glyphicon-arrow-right"></i>நியாசங்கள்</div></a></li>
								</ul>

							</div>

							

						
					</div>
					</div><!-- .sidebar end -->

					<!-- Post Content
					============================================= -->
					<div class="postcontent nobottommargin clearfix" >
					<!--/********************************_____1____********************************\-->
						<h4 id="tab1">சஹஸ்ரநாம ஸ்தோத்திரம்</h4>
						<div class="tabs tabs-alt tabs-tb clearfix" >

							<ul class="tab-nav clearfix">
								<li><a href="#tab1-1"><i class="glyphicon glyphicon-home"></i></a></li>
								<li><a href="#tab1-2"><i class="glyphicon glyphicon-download-alt"></i></a></li>
								<li><a href="#tab1-3"><i class="glyphicon glyphicon-star"></i></a></li>
								
							</ul>
							<div class="tab-container">

								<div class="tab-content clearfix" id="tab1-1">
									Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Etiam aliquet massa et lorem. Mauris dapibus lacus auctor risus. Aenean tempor ullamcorper leo.
								</div>

								<div class="tab-content clearfix" id="tab1-2">
									<h4>Click Download to open e-book</h4>
									<a id="start-downloadbtn" href="#" class="btn btn-success btn-lg">Download</a>
									<div id="start-download" class="alert alert-success" style="display: none; margin-top: 20px;">
			                            <strong>Please Wait!</strong>Your Download will start in 
				                        <div id="countdown-ex5" class="countdown countdown-inline">
				                        </div>.
									</div>
									<script>jQuery(document).ready( function($){var newDate4 = new Date(2016, 2, 31);$('#countdown-ex4').countdown({until: newDate4});$('#start-downloadbtn').click( function(){$('#start-downloadbtn').fadeOut(300, function(){$('#start-download').fadeIn(300, function(){var currentDate = new Date();currentDate.setSeconds(currentDate.getSeconds() + 10);$('#countdown-ex5').countdown({until: currentDate,format: 'S',expiryUrl: 'https://docs.google.com/uc?authuser=0&id=0B-ESv6F2jW78SUVsSlpIOV9hYzg&export=download',onExpiry: function(){$('#start-download').html('Your Download should start automatically. If it dosen\'t, <a href="#" class="alert-link">click here</a>.');}});});});return false; });});</script>

								</div>

								<div class="tab-content clearfix" id="tab1-3">
									<p>Rate us - This option will be enabled soon.</p>
									
								</div>
							</div><!--tab 1 container-->
						</div><!--tab 1-->
						<div class="line"></div>
						<!--/******************************_____2____******************************\-->
						<h4 id="tab2">அஷ்டோத்தர சதநாம ஸ்தோத்திரம்</h4>
						<div class="tabs tabs-alt tabs-tb clearfix" >

							<ul class="tab-nav clearfix">
								<li><a href="#tab2-1"><i class="glyphicon glyphicon-home"></i></a></li>
								<li><a href="#tab2-2"><i class="glyphicon glyphicon-download-alt"></i></a></li>
								<li><a href="#tab2-3"><i class="glyphicon glyphicon-star"></i></a></li>
								
							</ul>
							<div class="tab-container">

								<div class="tab-content clearfix" id="tab2-1">
									Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Etiam aliquet massa et lorem. Mauris dapibus lacus auctor risus. Aenean tempor ullamcorper leo.
								</div>

								<div class="tab-content clearfix" id="tab2-2">
									<h4>Click Download to open e-book</h4>
									<a id="start-downloadbtn" href="#" class="btn btn-success btn-lg">Download</a>
									<div id="start-download" class="alert alert-success" style="display: none; margin-top: 20px;">
			                            <strong>Please Wait!</strong>Your Download will start in 
				                        <div id="countdown-ex5" class="countdown countdown-inline">
				                        </div>.
									</div>
									<script>jQuery(document).ready( function($){var newDate4 = new Date(2016, 2, 31);$('#countdown-ex4').countdown({until: newDate4});$('#start-downloadbtn').click( function(){$('#start-downloadbtn').fadeOut(300, function(){$('#start-download').fadeIn(300, function(){var currentDate = new Date();currentDate.setSeconds(currentDate.getSeconds() + 10);$('#countdown-ex5').countdown({until: currentDate,format: 'S',expiryUrl: 'http://themeforest.net/user/SemiColonWeb',onExpiry: function(){$('#start-download').html('Your Download should start automatically. If it dosen\'t, <a href="#" class="alert-link">click here</a>.');}});});});return false; });});</script>

								</div>

								<div class="tab-content clearfix" id="tab2-3">
									<p>Rate us - This option will be enabled soon.</p>
									
								</div>
							</div><!--tab 2 container-->
						</div><!--tab 2-->
						<div class="line"></div>
					<!--/******************************_____3____******************************\-->
						<h4 id="tab3">அஷ்டோத்தர சதநாமாவளி</h4>
						<div class="tabs tabs-alt tabs-tb clearfix" >

							<ul class="tab-nav clearfix">
								<li><a href="#tab3-1"><i class="glyphicon glyphicon-home"></i></a></li>
								<li><a href="#tab3-2"><i class="glyphicon glyphicon-download-alt"></i></a></li>
								<li><a href="#tab3-3"><i class="glyphicon glyphicon-star"></i></a></li>
								
							</ul>
							<div class="tab-container">

								<div class="tab-content clearfix" id="tab3-1">
									Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Etiam aliquet massa et lorem. Mauris dapibus lacus auctor risus. Aenean tempor ullamcorper leo.
								</div>

								<div class="tab-content clearfix" id="tab3-2">
									<h4>Click Download to open e-book</h4>
									<a id="start-downloadbtn" href="#" class="btn btn-success btn-lg">Download</a>
									<div id="start-download" class="alert alert-success" style="display: none; margin-top: 20px;">
			                            <strong>Please Wait!</strong>Your Download will start in 
				                        <div id="countdown-ex5" class="countdown countdown-inline">
				                        </div>.
									</div>
									<script>jQuery(document).ready( function($){var newDate4 = new Date(2016, 2, 31);$('#countdown-ex4').countdown({until: newDate4});$('#start-downloadbtn').click( function(){$('#start-downloadbtn').fadeOut(300, function(){$('#start-download').fadeIn(300, function(){var currentDate = new Date();currentDate.setSeconds(currentDate.getSeconds() + 10);$('#countdown-ex5').countdown({until: currentDate,format: 'S',expiryUrl: 'http://themeforest.net/user/SemiColonWeb',onExpiry: function(){$('#start-download').html('Your Download should start automatically. If it dosen\'t, <a href="#" class="alert-link">click here</a>.');}});});});return false; });});</script>

								</div>

								<div class="tab-content clearfix" id="tab3-3">
									<p>Rate us - This option will be enabled soon.</p>
									
								</div>
							</div><!--tab 3 container-->
						</div><!--tab 3-->
						<div class="line"></div>
						<!--/******************************_____4____******************************\-->
						<h4 id="tab4">சஹஸ்ரநாமாவளி</h4>
						<div class="tabs tabs-alt tabs-tb clearfix" >

							<ul class="tab-nav clearfix">
								<li><a href="#tab4-1"><i class="glyphicon glyphicon-home"></i></a></li>
								<li><a href="#tab4-2"><i class="glyphicon glyphicon-download-alt"></i></a></li>
								<li><a href="#tab4-3"><i class="glyphicon glyphicon-star"></i></a></li>
								
							</ul>
							<div class="tab-container">

								<div class="tab-content clearfix" id="tab4-1">
									Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Etiam aliquet massa et lorem. Mauris dapibus lacus auctor risus. Aenean tempor ullamcorper leo.
								</div>

								<div class="tab-content clearfix" id="tab4-2">
									<h4>Click Download to open e-book</h4>
									<a id="start-downloadbtn" href="#" class="btn btn-success btn-lg">Download</a>
									<div id="start-download" class="alert alert-success" style="display: none; margin-top: 20px;">
			                            <strong>Please Wait!</strong>Your Download will start in 
				                        <div id="countdown-ex5" class="countdown countdown-inline">
				                        </div>.
									</div>
									<script>jQuery(document).ready( function($){var newDate4 = new Date(2016, 2, 31);$('#countdown-ex4').countdown({until: newDate4});$('#start-downloadbtn').click( function(){$('#start-downloadbtn').fadeOut(300, function(){$('#start-download').fadeIn(300, function(){var currentDate = new Date();currentDate.setSeconds(currentDate.getSeconds() + 10);$('#countdown-ex5').countdown({until: currentDate,format: 'S',expiryUrl: 'http://themeforest.net/user/SemiColonWeb',onExpiry: function(){$('#start-download').html('Your Download should start automatically. If it dosen\'t, <a href="#" class="alert-link">click here</a>.');}});});});return false; });});</script>

								</div>

								<div class="tab-content clearfix" id="tab4-3">
									<p>Rate us - This option will be enabled soon.</p>
									
								</div>
							</div><!--tab 4 container-->
						</div><!--tab 4-->
						<div class="line"></div>
						<!--/******************************_____5____******************************\-->
						<h4 id="tab5">மூல மந்திரங்கள்</h4>
						<div class="tabs tabs-alt tabs-tb clearfix" >

							<ul class="tab-nav clearfix">
								<li><a href="#tab5-1"><i class="glyphicon glyphicon-home"></i></a></li>
								<li><a href="#tab5-2"><i class="glyphicon glyphicon-download-alt"></i></a></li>
								<li><a href="#tab5-3"><i class="glyphicon glyphicon-star"></i></a></li>
								
							</ul>
							<div class="tab-container">

								<div class="tab-content clearfix" id="tab5-1">
									Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Etiam aliquet massa et lorem. Mauris dapibus lacus auctor risus. Aenean tempor ullamcorper leo.
								</div>

								<div class="tab-content clearfix" id="tab5-2">
									<h4>Click Download to open e-book</h4>
									<a id="start-downloadbtn" href="#" class="btn btn-success btn-lg">Download</a>
									<div id="start-download" class="alert alert-success" style="display: none; margin-top: 20px;">
			                            <strong>Please Wait!</strong>Your Download will start in 
				                        <div id="countdown-ex5" class="countdown countdown-inline">
				                        </div>.
									</div>
									<script>jQuery(document).ready( function($){var newDate4 = new Date(2016, 2, 31);$('#countdown-ex4').countdown({until: newDate4});$('#start-downloadbtn').click( function(){$('#start-downloadbtn').fadeOut(300, function(){$('#start-download').fadeIn(300, function(){var currentDate = new Date();currentDate.setSeconds(currentDate.getSeconds() + 10);$('#countdown-ex5').countdown({until: currentDate,format: 'S',expiryUrl: 'http://themeforest.net/user/SemiColonWeb',onExpiry: function(){$('#start-download').html('Your Download should start automatically. If it dosen\'t, <a href="#" class="alert-link">click here</a>.');}});});});return false; });});</script>

								</div>

								<div class="tab-content clearfix" id="tab5-3">
									<p>Rate us - This option will be enabled soon.</p>
									
								</div>
							</div><!--tab 5 container-->
						</div><!--tab 5-->
						<div class="line"></div>
						<!--/******************************_____6____******************************\-->
						<h4 id="tab6">மாலா மந்திரங்கள்</h4>
						<div class="tabs tabs-alt tabs-tb clearfix" >

							<ul class="tab-nav clearfix">
								<li><a href="#tab6-1"><i class="glyphicon glyphicon-home"></i></a></li>
								<li><a href="#tab6-2"><i class="glyphicon glyphicon-download-alt"></i></a></li>
								<li><a href="#tab6-3"><i class="glyphicon glyphicon-star"></i></a></li>
								
							</ul>
							<div class="tab-container">

								<div class="tab-content clearfix" id="tab6-1">
									Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Etiam aliquet massa et lorem. Mauris dapibus lacus auctor risus. Aenean tempor ullamcorper leo.
								</div>

								<div class="tab-content clearfix" id="tab6-2">
									<h4>Click Download to open e-book</h4>
									<a id="start-downloadbtn" href="#" class="btn btn-success btn-lg">Download</a>
									<div id="start-download" class="alert alert-success" style="display: none; margin-top: 20px;">
			                            <strong>Please Wait!</strong>Your Download will start in 
				                        <div id="countdown-ex5" class="countdown countdown-inline">
				                        </div>.
									</div>
									<script>jQuery(document).ready( function($){var newDate4 = new Date(2016, 2, 31);$('#countdown-ex4').countdown({until: newDate4});$('#start-downloadbtn').click( function(){$('#start-downloadbtn').fadeOut(300, function(){$('#start-download').fadeIn(300, function(){var currentDate = new Date();currentDate.setSeconds(currentDate.getSeconds() + 10);$('#countdown-ex5').countdown({until: currentDate,format: 'S',expiryUrl: 'http://themeforest.net/user/SemiColonWeb',onExpiry: function(){$('#start-download').html('Your Download should start automatically. If it dosen\'t, <a href="#" class="alert-link">click here</a>.');}});});});return false; });});</script>

								</div>

								<div class="tab-content clearfix" id="tab6-3">
									<p>Rate us - This option will be enabled soon.</p>
									
								</div>
							</div><!--tab 6 container-->
						</div><!--tab 6-->
						<div class="line"></div>
						<!--/******************************_____7____******************************\-->
						<h4 id="tab7">ஸ்தோத்திரங்கள்</h4>
						<div class="tabs tabs-alt tabs-tb clearfix" >

							<ul class="tab-nav clearfix">
								<li><a href="#tab7-1"><i class="glyphicon glyphicon-home"></i></a></li>
								<li><a href="#tab7-2"><i class="glyphicon glyphicon-download-alt"></i></a></li>
								<li><a href="#tab7-3"><i class="glyphicon glyphicon-star"></i></a></li>
								
							</ul>
							<div class="tab-container">

								<div class="tab-content clearfix" id="tab7-1">
									Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Etiam aliquet massa et lorem. Mauris dapibus lacus auctor risus. Aenean tempor ullamcorper leo.
								</div>

								<div class="tab-content clearfix" id="tab7-2">
									<h4>Click Download to open e-book</h4>
									<a id="start-downloadbtn" href="#" class="btn btn-success btn-lg">Download</a>
									<div id="start-download" class="alert alert-success" style="display: none; margin-top: 20px;">
			                            <strong>Please Wait!</strong>Your Download will start in 
				                        <div id="countdown-ex5" class="countdown countdown-inline">
				                        </div>.
									</div>
									<script>jQuery(document).ready( function($){var newDate4 = new Date(2016, 2, 31);$('#countdown-ex4').countdown({until: newDate4});$('#start-downloadbtn').click( function(){$('#start-downloadbtn').fadeOut(300, function(){$('#start-download').fadeIn(300, function(){var currentDate = new Date();currentDate.setSeconds(currentDate.getSeconds() + 10);$('#countdown-ex5').countdown({until: currentDate,format: 'S',expiryUrl: 'http://themeforest.net/user/SemiColonWeb',onExpiry: function(){$('#start-download').html('Your Download should start automatically. If it dosen\'t, <a href="#" class="alert-link">click here</a>.');}});});});return false; });});</script>

								</div>

								<div class="tab-content clearfix" id="tab7-3">
									<p>Rate us - This option will be enabled soon.</p>
									
								</div>
							</div><!--tab 7 container-->
						</div><!--tab 7-->
						<div class="line"></div>
						<!--/******************************_____8____******************************\-->
						<h4 id="tab8">தியானங்கள்</h4>
						<div class="tabs tabs-alt tabs-tb clearfix" >

							<ul class="tab-nav clearfix">
								<li><a href="#tab8-1"><i class="glyphicon glyphicon-home"></i></a></li>
								<li><a href="#tab8-2"><i class="glyphicon glyphicon-download-alt"></i></a></li>
								<li><a href="#tab8-3"><i class="glyphicon glyphicon-star"></i></a></li>
								
							</ul>
							<div class="tab-container">

								<div class="tab-content clearfix" id="tab8-1">
									Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Etiam aliquet massa et lorem. Mauris dapibus lacus auctor risus. Aenean tempor ullamcorper leo.
								</div>

								<div class="tab-content clearfix" id="tab8-2">
									<h4>Click Download to open e-book</h4>
									<a id="start-downloadbtn" href="#" class="btn btn-success btn-lg">Download</a>
									<div id="start-download" class="alert alert-success" style="display: none; margin-top: 20px;">
			                            <strong>Please Wait!</strong>Your Download will start in 
				                        <div id="countdown-ex5" class="countdown countdown-inline">
				                        </div>.
									</div>
									<script>jQuery(document).ready( function($){var newDate4 = new Date(2016, 2, 31);$('#countdown-ex4').countdown({until: newDate4});$('#start-downloadbtn').click( function(){$('#start-downloadbtn').fadeOut(300, function(){$('#start-download').fadeIn(300, function(){var currentDate = new Date();currentDate.setSeconds(currentDate.getSeconds() + 10);$('#countdown-ex5').countdown({until: currentDate,format: 'S',expiryUrl: 'http://themeforest.net/user/SemiColonWeb',onExpiry: function(){$('#start-download').html('Your Download should start automatically. If it dosen\'t, <a href="#" class="alert-link">click here</a>.');}});});});return false; });});</script>

								</div>

								<div class="tab-content clearfix" id="tab8-3">
									<p>Rate us - This option will be enabled soon.</p>
									
								</div>
							</div><!--tab 8 container-->
						</div><!--tab 8-->
						<div class="line"></div>
						<!--/******************************_____9____******************************\-->
						<h4 id="tab9">நியாசங்கள்</h4>
						<div class="tabs tabs-alt tabs-tb clearfix" >

							<ul class="tab-nav clearfix">
								<li><a href="#tab9-1"><i class="glyphicon glyphicon-home"></i></a></li>
								<li><a href="#tab9-2"><i class="glyphicon glyphicon-download-alt"></i></a></li>
								<li><a href="#tab9-3"><i class="glyphicon glyphicon-star"></i></a></li>
								
							</ul>
							<div class="tab-container">

								<div class="tab-content clearfix" id="tab9-1">
									Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Etiam aliquet massa et lorem. Mauris dapibus lacus auctor risus. Aenean tempor ullamcorper leo.
								</div>

								<div class="tab-content clearfix" id="tab9-2">
									<h4>Click Download to open e-book</h4>
									<a id="start-downloadbtn" href="#" class="btn btn-success btn-lg">Download</a>
									<div id="start-download" class="alert alert-success" style="display: none; margin-top: 20px;">
			                            <strong>Please Wait!</strong>Your Download will start in 
				                        <div id="countdown-ex5" class="countdown countdown-inline">
				                        </div>.
									</div>
									<script>jQuery(document).ready( function($){var newDate4 = new Date(2016, 2, 31);$('#countdown-ex4').countdown({until: newDate4});$('#start-downloadbtn').click( function(){$('#start-downloadbtn').fadeOut(300, function(){$('#start-download').fadeIn(300, function(){var currentDate = new Date();currentDate.setSeconds(currentDate.getSeconds() + 10);$('#countdown-ex5').countdown({until: currentDate,format: 'S',expiryUrl: 'http://themeforest.net/user/SemiColonWeb',onExpiry: function(){$('#start-download').html('Your Download should start automatically. If it dosen\'t, <a href="#" class="alert-link">click here</a>.');}});});});return false; });});</script>

								</div>

								<div class="tab-content clearfix" id="tab9-3">
									<p>Rate us - This option will be enabled soon.</p>
									
								</div>
							</div><!--tab 9 container-->
						</div><!--tab 9-->
						<div class="line"></div>
					</div><!-- Post Content -->	

				</div><!--container-->

			</div><!--content wrap-->

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
<script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","licenseKey":"839484a19a","applicationID":"5289971","transactionName":"ZQEDZxZUD0FZVkxfX1xLNEENGglGVVkXVVFcEgBAS0EAUEsbSF5A","queueTime":0,"applicationTime":1,"atts":"SUYAEV5OHE8=","errorBeacon":"bam.nr-data.net","agent":"../../js/686.min.js"}</script></body>
</html>