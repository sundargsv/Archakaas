<!--/////////////////////////////////////Starting*Script*For*Registration\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
<?php
session_start();
if(isset($_SESSION['user'])!="")
{
	header("Location: home-page.php");
}
include_once 'DB/dbConnect.php';

if(isset($_POST['btn-signup']))
{	
	
	

	if(isset($_POST['name-user']) && !empty($_POST['name-user']) && isset($_POST['email-user']) && !empty($_POST['email-user']) && isset($_POST['username-user']) && !empty($_POST['username-user']) && isset($_POST['password-user']) && !empty($_POST['password-user']) && isset($_POST['repassword-user']) && !empty($_POST['repassword-user']) && isset($_POST['mobile-user']) && !empty($_POST['mobile-user']) && isset($_POST['father-name-user']) && !empty($_POST['father-name-user']) && isset($_POST['dob-user']) && !empty($_POST['dob-user']) && isset($_POST['martial-status-user']) && !empty($_POST['martial-status-user']) && isset($_POST['gotram-user']) && !empty($_POST['gotram-user']) && isset($_POST['soothram-user']) && !empty($_POST['soothram-user']) && isset($_POST['rasi-user']) && !empty($_POST['rasi-user']) && isset($_POST['star-user']) && !empty($_POST['star-user']) && isset($_POST['address-user']) && !empty($_POST['address-user']) && isset($_POST['city-user']) && !empty($_POST['city-user']) && isset($_POST['country-user']) && !empty($_POST['country-user']) && isset($_POST['pincode-user']) && !empty($_POST['pincode-user']) && isset($_POST['TC-name-user']) && !empty($_POST['TC-name-user']) && isset($_POST['TC-sector-user']) && !empty($_POST['TC-sector-user']) && isset($_POST['address-temple']) && !empty($_POST['address-temple']) && isset($_POST['city-temple']) && !empty($_POST['city-temple']) && isset($_POST['country-temple']) && !empty($_POST['country-temple']) && isset($_POST['name-ref']) && !empty($_POST['name-ref']) && isset($_POST['city-ref']) && !empty($_POST['city-ref']) && isset($_POST['mobile-ref']) && !empty($_POST['mobile-ref']))
	{		
			/*Getting the form values*/
			
			
			$nameUser       	= ($_POST['name-user']);
			$emailUser      	= ($_POST['email-user']);
			$usernameUser   	= ($_POST['username-user']);
			$passwordUser   	= ($_POST['password-user']);
			$rePasswordUser 	= ($_POST['repassword-user']);
			$mobileUser     	= ($_POST['mobile-user']);

			$photoUser              = addslashes(file_get_contents($_FILES['photo-user']['tmp_name']));
			$photoNameUser      	= addslashes($_FILES['photo-user']['name']);
			/*$photoUser_type      	= ($_FILES['photo-user']['type']);
			$photoUser_size      	= ($_FILES['photo-user']['size']);
			$photoUser_tmp_name     = ($_FILES['photo-user']['tmp_name']);*/


			$fatherNameUser 	= ($_POST['father-name-user']);
			$dobUser 			= ($_POST['dob-user']);
			$martialStatusUser 	= ($_POST['martial-status-user']);

			$gotramUser 		= ($_POST['gotram-user']);
			$soothramUser 		= ($_POST['soothram-user']);
			$rasiUser 			= ($_POST['rasi-user']);
			$starUser 			= ($_POST['star-user']);
			$addressUser 		= ($_POST['address-user']);
			$cityUser 			= ($_POST['city-user']);
			$countryUser 		= ($_POST['country-user']);
			$pincodeUser 		= ($_POST['pincode-user']);

			$TCNameUser 		= ($_POST['TC-name-user']);
			$TCSectorUser 		= ($_POST['TC-sector-user']);
			$addressTemple 		= ($_POST['address-temple']);
			$cityTemple 		= ($_POST['city-temple']);
			$countryTemple 		= ($_POST['country-temple']);
			$phoneTemple 		= ($_POST['phone-temple']);

			$nameRef   			= ($_POST['name-ref']);
			$emailRef 			= ($_POST['email-ref']);
			$cityRef 			= ($_POST['city-ref']);
			$mobileRef 			= ($_POST['mobile-ref']);

			/*End of Getting the form values*/
			$result=mysql_query("SELECT * FROM UserRegister WHERE email_user='$emailUser'");
			$num_rows = mysql_num_rows($result);

			if( $num_rows != 0){

								header("Location: Include/register-failure.php");


			}

			else{//This email is not registered
				
				if(!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $emailUser)){
					// Return Error - Invalid Email
					$msg = '<script>alert("Error! The email you have entered is invalid.\ntry again.");</script>';
					echo $msg;
				}

				else{

					if ($passwordUser != $rePasswordUser ) {
						#The passwords are not matched!!!
						$msg = '<script>alert("Warning! The passwords are not matched.\nTry again");</script>';
						echo $msg;

					}
					else //The passwords are matched!!!
					{
						if($photoUser == ''){
						$msg = '<script>alert("Error! Please select an image to upload."); </script>';
						echo $msg;
						}
							else
							{//Image found
						
							// Return Success - Valid Email
							
							$hash = md5( rand(0,10000) ); // Generate random 32 character hash and assign it to a local variable. [0 - 1Lakh]
							//$password = rand(1000,5000); // Generate random number between 1000 and 5000 and assign it to a local variable.

							

							mysql_query("INSERT INTO UserRegister (name_user, email_user, user_name_user, password_user, re_password_user, mobile_user, photo_user, photo_name_user, father_name_user, dob_user, martial_status_user, gotram_user, soothram_user, rasi_user, star_user, address_user, city_user, country_user, pincode_user, TC_name_user, TC_sector_user, address_temple, city_temple, country_temple, phone_temple, name_ref, email_ref, city_ref, mobile_ref, hashkey) VALUES(
								'". mysql_escape_string($nameUser) ."',
								'". mysql_escape_string($emailUser) ."',
								'". mysql_escape_string($usernameUser) ."',
								'". mysql_escape_string(md5($passwordUser)) ."',
								'". mysql_escape_string($rePasswordUser) ."',
								'". mysql_escape_string($mobileUser) ."',
								'". mysql_escape_string($photoUser) ."',
								'". mysql_escape_string($photoNameUser) ."',
								'". mysql_escape_string($fatherNameUser) ."',
								'". mysql_escape_string($dobUser) ."',
								'". mysql_escape_string($martialStatusUser) ."',
								'". mysql_escape_string($gotramUser) ."',
								'". mysql_escape_string($soothramUser) ."',
								'". mysql_escape_string($rasiUser) ."',
								'". mysql_escape_string($starUser) ."',
								'". mysql_escape_string($addressUser) ."',
								'". mysql_escape_string($cityUser) ."',
								'". mysql_escape_string($countryUser) ."',
								'". mysql_escape_string($pincodeUser) ."',
								'". mysql_escape_string($TCNameUser) ."',
								'". mysql_escape_string($TCSectorUser) ."',
								'". mysql_escape_string($addressTemple) ."',
								'". mysql_escape_string($cityTemple) ."',
								'". mysql_escape_string($countryTemple) ."',
								'". mysql_escape_string($phoneTemple) ."',
								'". mysql_escape_string($nameRef) ."',
								'". mysql_escape_string($emailRef) ."',
								'". mysql_escape_string($cityRef) ."',
								'". mysql_escape_string($mobileRef) ."',
								'". mysql_escape_string($hash) ."')") or die(mysql_error());
								
								header("Location: Include/register-success.php");
								


							/*$to      = mysql_escape_string($emailUser); //Send email to our user
							$subject = 'Signup | Verification'; //// Give the email a subject 
							$message = '

							Welcome to Archakaas.

							Hello, '.$emailUser.' .

							Your Archakaas account is almost ready.

							Follow the next link in order to complete your registration:

							Befor that check your information,

							------------------------
							Username: '.$emailUser.'
							Mobile  : '.$mobileUser.'
							------------------------

							Please click this link to activate your account:
							http://www.demo.archakaas.com/Include/verify-account.php?email_verify='.$emailUser.'&hash_verify='.$hash.'

							'; // Our message above including the link
							
							$headers = 'From:noreply@archakaas.com' . "\r\n"; // Set from headers
							mail($to, $subject, $message, $headers); // Send the email*/


						}//end of Image found

					}//end of Passwords are matched!!!

						
				}

			}// end This email is not registered

	}//end 2nd if

else{
	$msg = '<script>alert("Please give all informations which are starred \n like E-mail *");</script>';
					echo $msg;
}


}//end if btn-signup






?>
<!--/////////////////////////////////////Ending*Script*For*Registration\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" /><script type="text/javascript">window.NREUM||(NREUM={}),__nr_require=function(e,n,t){function r(t){if(!n[t]){var o=n[t]={exports:{}};e[t][0].call(o.exports,function(n){var o=e[t][1][n];return r(o?o:n)},o,o.exports)}return n[t].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<t.length;o++)r(t[o]);return r}({QJf3ax:[function(e,n){function t(e){function n(n,t,a){e&&e(n,t,a),a||(a={});for(var u=c(n),f=u.length,s=i(a,o,r),p=0;f>p;p++)u[p].apply(s,t);return s}function a(e,n){f[e]=c(e).concat(n)}function c(e){return f[e]||[]}function u(){return t(n)}var f={};return{on:a,emit:n,create:u,listeners:c,_events:f}}function r(){return{}}var o="nr@context",i=e("gos");n.exports=t()},{gos:"7eSDFh"}],ee:[function(e,n){n.exports=e("QJf3ax")},{}],3:[function(e,n){function t(e){return function(){r(e,[(new Date).getTime()].concat(i(arguments)))}}var r=e("handle"),o=e(1),i=e(2);"undefined"==typeof window.newrelic&&(newrelic=window.NREUM);var a=["setPageViewName","addPageAction","setCustomAttribute","finished","addToTrace","inlineHit","noticeError"];o(a,function(e,n){window.NREUM[n]=t("api-"+n)}),n.exports=window.NREUM},{1:12,2:13,handle:"D5DuLP"}],gos:[function(e,n){n.exports=e("7eSDFh")},{}],"7eSDFh":[function(e,n){function t(e,n,t){if(r.call(e,n))return e[n];var o=t();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(e,n,{value:o,writable:!0,enumerable:!1}),o}catch(i){}return e[n]=o,o}var r=Object.prototype.hasOwnProperty;n.exports=t},{}],D5DuLP:[function(e,n){function t(e,n,t){return r.listeners(e).length?r.emit(e,n,t):void(r.q&&(r.q[e]||(r.q[e]=[]),r.q[e].push(n)))}var r=e("ee").create();n.exports=t,t.ee=r,r.q={}},{ee:"QJf3ax"}],handle:[function(e,n){n.exports=e("D5DuLP")},{}],XL7HBI:[function(e,n){function t(e){var n=typeof e;return!e||"object"!==n&&"function"!==n?-1:e===window?0:i(e,o,function(){return r++})}var r=1,o="nr@id",i=e("gos");n.exports=t},{gos:"7eSDFh"}],id:[function(e,n){n.exports=e("XL7HBI")},{}],G9z0Bl:[function(e,n){function t(){var e=d.info=NREUM.info,n=f.getElementsByTagName("script")[0];if(e&&e.licenseKey&&e.applicationID&&n){c(p,function(n,t){n in e||(e[n]=t)});var t="https"===s.split(":")[0]||e.sslForHttp;d.proto=t?"https://":"http://",a("mark",["onload",i()]);var r=f.createElement("script");r.src=d.proto+e.agent,n.parentNode.insertBefore(r,n)}}function r(){"complete"===f.readyState&&o()}function o(){a("mark",["domContent",i()])}function i(){return(new Date).getTime()}var a=e("handle"),c=e(1),u=window,f=u.document;e(2);var s=(""+location).split("?")[0],p={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js/686.min.js"},d=n.exports={offset:i(),origin:s,features:{}};f.addEventListener?(f.addEventListener("DOMContentLoaded",o,!1),u.addEventListener("load",t,!1)):(f.attachEvent("onreadystatechange",r),u.attachEvent("onload",t)),a("mark",["firstbyte",i()])},{1:12,2:3,handle:"D5DuLP"}],loader:[function(e,n){n.exports=e("G9z0Bl")},{}],12:[function(e,n){function t(e,n){var t=[],o="",i=0;for(o in e)r.call(e,o)&&(t[i]=n(o,e[o]),i+=1);return t}var r=Object.prototype.hasOwnProperty;n.exports=t},{}],13:[function(e,n){function t(e,n,t){n||(n=0),"undefined"==typeof t&&(t=e?e.length:0);for(var r=-1,o=t-n||0,i=Array(0>o?0:o);++r<o;)i[r]=e[n+r];return i}n.exports=t},{}]},{},["G9z0Bl"]);</script>
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/main.css" type="text/css" />
	<!--For Icons-->
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

	<link rel="stylesheet" href="css/travel.css" type="text/css" />
    <link rel="stylesheet" href="css/datepicker.css" type="text/css" />
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css" type="text/css" />


	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->

	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
	<!-- Date Specific Script -->
    <script type="text/javascript" src="js/datepicker.js"></script>
    <!-- / -->

	<!-- Document Title
	============================================= -->
	<title>Archakaas | Register</title>

	
	<script type="text/javascript">
	//PopOver with a message for E-mail-->
		$('document').ready(function(){
		$('[data-toggle="popover"]').popover({title: 'Note!', placement: 'top', container: 'body'});
		});
	//End PopOver with a message for E-mail-->
	//PopOver with a message for Mobile
		$('document').ready(function(){
		$('[data-toggle="popover2"]').popover({title: 'Note!', placement: 'top', container: 'body'});
		});
    //datepicker
		 $(function() {
			 $('.travel-date-group').datepicker({
						       autoclose: true,//startDate: "today"
						       changeMonth: true,//this option for allowing user to select month
						        changeYear: true, //this option for allowing user to select from year range
						        yearRange: '1950:2000'});});
 
    //ProcessTabs
    $(function() {
                        $( "#processTabs" ).tabs({ show: { effect: "fade", duration: 400 } });
                        $( ".tab-linker" ).click(function() {
                            $( "#processTabs" ).tabs("option", "active", $(this).attr('rel') - 1);
                            return false;
                        });
                      });
	//PopOver with a message for Phone-->
    $('document').ready(function(){
		$('[data-toggle="popover3"]').popover({title: 'Note!', placement: 'top', container: 'body'});
		});
	//PopOver with a message for Mobile-ref-->
    $('document').ready(function(){
		$('[data-toggle="popover4"]').popover({title: 'Note!', placement: 'top', container: 'body'});
		});
	</script>
	

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
						<a href="index.php" class="standard-logo" data-dark-logo="http://canvashtml-cdn.semicolonweb.com/images/logo-dark.png"><img src="http://canvashtml-cdn.semicolonweb.com/images/logo.png" alt="Canvas Logo"></a>
						<a href="index.php" class="retina-logo" data-dark-logo="http://canvashtml-cdn.semicolonweb.com/images/logo-dark@2x.png"><img src="http://canvashtml-cdn.semicolonweb.com/images/logo@2x.png" alt="Canvas Logo"></a>
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu">

						<ul>
							<li><a href="index.php"><div>Home</div></a>
								
							</li>
							<li class="mega-menu"><a href="BasicServices/features.php"><div>Features</div></a>
								
							</li>
							<li class="mega-menu"><a href="BasicServices/prayers-club.php"><div>Prayer Club</div></a>
								
							</li>
							<li class="mega-menu"><a href="BasicServices/global-temples.php"><div>Global Temples</div></a>
								
							</li>
							
							<li><a href="BasicServices/testimonials.php"><div>Testimonials</div></a>
							</li>

							<li class="mega-menu"><a href="#"><div>Contact Us</div></a>
								
							</li>
						</ul>

					

						<!-- Top Search
						============================================= -->
						<div id="top-search">
							<a href="#" id="top-search-trigger"><i class="glyphicon glyphicon-search"></i><i class="glyphicon glyphicon-search"></i></a>
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
				<h1>My Account</h1>
				<ol class="breadcrumb">
					<li><a href="#">Home</a></li>
					
					<li class="active">Register</li>
				</ol>
			</div>

		</section><!-- #page-title end -->


						
		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">
							<div class="style-msg successmsg">
                            	<div class="sb-msg"><i class="glyphicon glyphicon-envelope"></i><strong>Note !</strong> நான்கு பகுதியையும் fill  செய்யவும்.</div>
                            </div>
                    
                            <div id="processTabs">
		                        <ul class="process-steps bottommargin clearfix">
		                            <li>
		                                <a href="#ptab1" class="i-circled i-bordered i-alt divcenter">1</a>
		                                <h5>General Info</h5>
		                            </li>
		                            <li>
		                                <a href="#ptab2" class="i-circled i-bordered i-alt divcenter">2</a>
		                                <h5>Personal Info</h5>
		                            </li>
		                            <li>
		                                <a href="#ptab3" class="i-circled i-bordered i-alt divcenter">3</a>
		                                <h5>Occupation</h5>
		                            </li>
		                            <li>
		                                <a href="#ptab4" class="i-circled i-bordered i-alt divcenter">4</a>
		                                <h5>Reference</h5>
		                            </li>
		                        </ul>
		                      <form method="post" enctype="multipart/form-data">
		                        <div id="ptab1">

		                        	<div class="accordion accordion-lg divcenter nobottommargin clearfix" style="max-width: 550px;">
		                        		
		                        		<div class="col_full">
													<label for="register-form-name">Name *:</label>
													<input type="text" name="name-user"  value="" class="form-control" />
										</div>

										<div class="col_full">
													<label for="register-form-email">Email Address *:</label>
													<input type="text" name="email-user" data-trigger="focus" data-toggle="popover" data-content="உங்கள் Account Activate செய்ய சரியான Email முகவரியை கொடுக்கவேண்டும்" name="register-form-email" value="" class="form-control" />
										</div>

										<div class="col_full">
													<label for="register-form-username">Choose a Username *:</label>
													<input type="text" name="username-user"  value="" class="form-control" />
										</div>
										
										<div class="col_full">
													<label for="register-form-password">Choose Password *:</label>
													<input type="password" name="password-user"  value="" class="form-control" />
										</div>

										<div class="col_full">
													<label for="register-form-repassword">Re-enter Password *:</label>
													<input type="password" name="repassword-user"  value="" class="form-control" />
										</div>

										<div class="col_full">
													<label for="register-form-repassword">Mobile *:</label>
													<input type="text" name="mobile-user" data-trigger="focus" data-toggle="popover2" data-content="Please specify your country code Like +91 9876543210"  value="" class="form-control" />
										</div>

										<div class="style-msg successmsg">
                            					<div class="sb-msg"><i class="glyphicon glyphicon-envelope"></i><strong>Note !</strong> Registration  முழுமையை அடைய பகுதி - 2க்கு செல்லவும்.</div>
                       					</div>

  		                        	</div><!--inside ptabs 1-->

	                       		</div><!--ptabs 1-->

	                       		<div id="ptab2">

	                            	<div class="col_full divcenter nobottommargin clearfix" style="max-width: 550px";>
	                            				<label class="control-label">Select Photo</label>
												<input name="photo-user" style="" type="file" class="file">

												<div class="col_full divcenter nobottommargin clearfix" style="max-width: 550px;margin-top:20px";>
													<label for="register-form-name">Father Name:</label>
													<input type="text" name="father-name-user"  value="" class="form-control" />
												</div>

												<div class="input-daterange travel-date-group col_full divcenter nobottommargin clearfix" style="max-width: 550px;margin-top:20px";>
													<label for="">DOB:</label>
													<input type="text" name="dob-user"  value="" class="form-control" placeholder="MM/DD/YYYY"/>
												</div>

												<div class="col_full divcenter nobottommargin clearfix" style="max-width: 550px;margin-top:20px";>
													<label for="register-form-name">Martial Status:</label>
													 <select name="martial-status-user" class="sm-form-control">
						                                <option value="">-- Select One --</option>
						                                <option value="Married">Married</option>
						                                <option value="Single">Single</option>
						                              </select>
												</div>

												<div class="col_full divcenter nobottommargin clearfix" style="max-width: 550px;margin-top:20px";>
													<label for="register-form-name">Gotram:</label>
													<input type="text" name="gotram-user"  value="" class="form-control" />
											</div>

											<div class="col_full divcenter nobottommargin clearfix" style="max-width: 550px;margin-top:20px";>
													<label for="register-form-name">Soothram:</label>
													<select name="soothram-user" class="sm-form-control">
						                                <option value="">-- Select One --</option>
						                                <option value="Bothayanam">போதாயணம் </option>
						                                <option value="Aabasthamba">ஆபஸ்தம்ப</option>
						                              </select>											
						                    </div>


											<div class="col_full divcenter nobottommargin clearfix" style="max-width: 550px;margin-top:20px";>
													<label for="register-form-name">Rasi:</label>
													<input type="text" name="rasi-user"  value="" class="form-control" />
											</div>

											<div class="col_full divcenter nobottommargin clearfix" style="max-width: 550px;margin-top:20px";>
													<label for="register-form-name">Star (நட்ச்சத்திரம் ):</label>
													<input type="text" name="star-user"  value="" class="form-control" />
											</div>

											<div class="col_full divcenter nobottommargin clearfix" style="max-width: 550px;margin-top:20px";>
													<label for="register-form-name">Address:</label>
													<input type="text" name="address-user"  value="" class="form-control" />
											</div>

											<div class="col_full divcenter nobottommargin clearfix" style="max-width: 550px;margin-top:20px";>
													<label for="register-form-name">City:</label>
													<input type="text" name="city-user"  value="" class="form-control" />
											</div>

											<div class="col_full divcenter nobottommargin clearfix" style="max-width: 550px;margin-top:20px";>
													<label for="register-form-name">Country:</label>
													<input type="text" name="country-user"  value="" class="form-control" />
											</div>

											<div class="col_full divcenter nobottommargin clearfix" style="max-width: 550px;margin-top:20px";>
													<label for="register-form-name">Pin Code:</label>
													<input type="text" name="pincode-user"  value="" class="form-control" />
											</div>

											<div class="col_full divcenter nobottommargin clearfix" style="max-width: 550px;margin-top:20px";>
												<div class="style-msg successmsg">
	                            						<div class="sb-msg"><i class="glyphicon glyphicon-envelope"></i><strong>Note !</strong> Registration  முழுமையை அடைய பகுதி - 3க்கு செல்லவும்.</div>
	                       						</div>
                       						</div>



	                            	</div><!--inside ptabs 2-->

	                            </div><!--ptabs 2-->

	                            <div id="ptab3">

	                            			<div class="col_full divcenter nobottommargin clearfix" style="max-width: 550px;margin-top:20px";>
	                            				<div class="col_full divcenter nobottommargin clearfix" style="max-width: 550px;margin-top:20px";>
													<label for="register-form-name">Temple /Company Name:</label>
													<input type="text" name="TC-name-user"  value="" class="form-control" />
											</div>

											<div class="col_full divcenter nobottommargin clearfix" style="max-width: 550px;margin-top:20px";>
													<label for="register-form-name">Temple /Company Sector:</label>
													<select name="TC-sector-user" class="sm-form-control">
						                                <option value="">-- Select One --</option>
						                                <option value="Govt">Govt</option>
						                                <option value="Private">Private</option>
						                              </select>	
											</div>

											

											<div class="col_full divcenter nobottommargin clearfix" style="max-width: 550px;margin-top:20px";>
													<label for="register-form-name">Address:</label>
													<input type="text" name="address-temple"  value="" class="form-control" />
											</div>

											<div class="col_full divcenter nobottommargin clearfix" style="max-width: 550px;margin-top:20px";>
													<label for="register-form-name">City:</label>
													<input type="text" name="city-temple"  value="" class="form-control" />
											</div>

											<div class="col_full divcenter nobottommargin clearfix" style="max-width: 550px;margin-top:20px";>
													<label for="register-form-name">Country:</label>
													<input type="text" name="country-temple"  value="" class="form-control" />
											</div>

											<div class="col_full divcenter nobottommargin clearfix" style="max-width: 550px;margin-top:20px";>
													<label for="register-form-name">Phone:</label>
													<input type="text" name="phone-temple"  data-trigger="focus" data-toggle="popover3" data-content="Please specify your country code Like +91 422 2345678" value="" class="form-control" />
											</div>
											<div class="col_full divcenter nobottommargin clearfix" style="max-width: 550px;margin-top:20px";>
												<div class="style-msg successmsg">
	                            						<div class="sb-msg"><i class="glyphicon glyphicon-envelope"></i><strong>Note !</strong> Registration  முழுமையை அடைய பகுதி - 4க்கு செல்லவும்.</div>
	                       						</div>
	                       					</div>
	                              
	                            			</div><!--inside ptabs 3-->
	                            </div><!--ptabs 3-->

	                            <div id="ptab4">

	                            	<div class="col_full divcenter nobottommargin clearfix" style="max-width: 550px;";>
	                            	
		                            	<div class="col_full divcenter nobottommargin clearfix" style="max-width: 550px;";>
		                            		<p>Please provide the name, contact no of your Reference.</p>
		                            	</div>
		                            	<div class="col_full divcenter nobottommargin clearfix" style="max-width: 550px;margin-top:20px";>
														<label for="register-form-name">Reference Name:</label>
														<input type="text" name="name-ref"  value="" class="form-control" />
										</div>

										<div class="col_full divcenter nobottommargin clearfix" style="max-width: 550px;margin-top:20px";>
														<label for="register-form-name">E-mail:</label>
														<input type="text" name="email-ref"  value="" class="form-control" />
										</div>

										
										<div class="col_full divcenter nobottommargin clearfix" style="max-width: 550px;margin-top:20px";>
														<label for="register-form-name">City:</label>
														<input type="text" name="city-ref"  value="" class="form-control" />
										</div>

										<div class="col_full divcenter nobottommargin clearfix" style="max-width: 550px;margin-top:20px";>
														<label for="register-form-name">Mobile:</label>
														<input type="text" name="mobile-ref" data-trigger="focus" data-toggle="popover4" data-content="Please specify the country code Like +91 9876543210"  value="" class="form-control" />
										</div>

											<button type="submit" name="btn-signup" style="margin-top:20px";>Register Now &rArr;</button>

	                            	</div><!--inside ptabs 4-->

	                           	</div><!--ptabs 4-->
	                           	</form>
		                     </div><!--processTabs-->
                        
		            
				</div><!--container clearfix-->

			</div><!--content-wrap-->

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
</script><script>jQuery(document).ready(function(e){e("#primary-menu").find('a[href="side-panel.php"],a[href="tabs.php"]').children("div").append('<span class="label label-danger" style="display:inline-block;margin-left:8px;text-transform:none;">New</span>')});</script>
<script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","licenseKey":"839484a19a","applicationID":"5289971","transactionName":"ZQEDZxZUD0FZVkxfX1xLNEENGglGVVkXVVFcEgBAS1kOVVFbFURVVQ0SRwFHTAEWRVBG","queueTime":0,"applicationTime":2,"atts":"SUYAEV5OHE8=","errorBeacon":"bam.nr-data.net","agent":"js/686.min.js"}</script></body>
</html>