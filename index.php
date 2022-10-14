<?php 
if(isset($_REQUEST['submitt']))
{
    //echo "<pre>";print_r($_REQUEST);
	$to1=$_REQUEST['emaill'];
	$from1 = "info@gurutam.in";
	$subject1 = 'Contact Us - GURUTAM Innovations Pvt Ltd.';
	$headers1  = 'MIME-Version: 1.0' . "\r\n";	
	$headers1 .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	// Create email headers
	$headers1 .= 'From:'.$from1 . "\r\n" .
    'Reply-To:'.$from1 . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
	// Compose a simple HTML email message
	$message1="<html>";
	$message1.="<body bgcolor='#cdd4da'>";
	$message1.="<table width='650' border='0' align='center' bgcolor='#ffffff' cellspacing='0' cellpadding='0' style='border:1px solid #EEEEEE; background-color:#ffffff;'>
	<style>
	.responsive {
        width: 100%;
        height: auto;
	}
	</style>
	<td>
	<table width='650' height='100' cellpadding='0' cellspacing='0'>
	<tr>
	<td style='padding: 10px 0px 0px 11px;'>
	<img src='https://www.egurutam.com/c_it/assets/logo.png'>
	</td>
	</tr>
	</table>
	</td>
	</tr>";
	$message1.="<tr>
	<td align='center'>
	<p style='font-size: 16px; font-weight: bold;margin: 10px 15px;text-align:left;'>Dear ".$_REQUEST['fullNamee'].",</p>
	</td>
	</tr>";
	$message1.="<tr>
	<td>
	<p style='margin: 10px 15px; color:#000; text-align:left;'><b>Thank You for contact us. We will get back to you ASAP. </b></p>
	</td>
	</tr>";
	
	$message1.="<tr>
	<td style='font-family:Arial, Helvetica, sans-serif; font-size:13px;'>
	</td>
	</tr>";
	$message1.="<tr>
	<td style='font-family:Arial, Helvetica, sans-serif; font-size:13px;'>
	</td>
	</tr>";
	
	$message1.="<tr bgcolor='#f0f0f0'>
	<td style='font-family:Arial, Helvetica, sans-serif; font-size:13px;'>
	<table>
	<tr>
	<td><p style='margin: 10px 15px 0; float: right; padding:0px 0px 15px 0px;font-family:Arial, Helvetica, sans-serif; font-size:12px;'>Copyright © 2022 GURUTAM Innovations Pvt Ltd. All rights reserved</p></td>
	</tr>
	
	</table>
	</td>
	</tr>";
	$message1.="</table>";
	
	$message1.="</body>";
	
	$message1.="</html>";
	
	// Sending email
	
	// username and password received from loginform 
	
	$mail= mail( $to1, $subject1, $message1, $headers1 );
	
	
	$to12="info@gurutam.in";
	$from12 = "info@gurutam.in";
	
	$subject12 = 'Contact Us - GURUTAM Innovations Pvt Ltd.';
	
	$headers12  = 'MIME-Version: 1.0' . "\r\n";
	
	$headers12 .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	// Create email headers
	
	$headers12 .= 'From:'.$from12 . "\r\n" .
    'Reply-To:'.$from12 . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
	
	// Compose a simple HTML email message
	
	$message12="<html>";
	
	$message12.="<body bgcolor='#cdd4da'>";
	
	$message12.="<table width='650' border='0' align='center' bgcolor='#ffffff' cellspacing='0' cellpadding='0' style='border:1px solid #EEEEEE; background-color:#ffffff;'>
	<td>
	<table width='650' height='100' cellpadding='0' cellspacing='0'>
	<tr>
	<td style='padding: 10px 0px 0px 11px;'>
	<img src='https://www.egurutam.com/c_it/assets/logo.png'>
	</td>
	
	</tr>
	</table>
	</td>
	</tr>";
	$message12.="<tr>
	<td align='center'>
	<p style='font-size: 16px; font-weight: bold;margin: 10px 15px;text-align:left;'>Dear Admin,</p>
	</td>
	</tr>";
	
	$message12.="<tr>
	<td>
	<p style='margin: 10px 15px; color:#000; text-align:left;'><b>A new query(Contact) on GURUTAM Innovations Pvt Ltd. website. </b></p>
	</td>
	</tr>";
	
	$message12.="<tr>
		<td style='font-family:Arial, Helvetica, sans-serif; font-size:13px;'>
			<p style='margin: 10px 15px 5px; '>Name: ".$_REQUEST['fullNamee']."</p>
		</td>
	</tr>";
	
	$message12.="<tr>
		<td style='font-family:Arial, Helvetica, sans-serif; font-size:13px;'>
			<p style='margin: 10px 15px 5px;'>Email: ".$_REQUEST['emaill']."</p>
		</td>
	</tr>";
	
	$message12.="<tr>
		<td style='font-family:Arial, Helvetica, sans-serif; font-size:13px;'>
			<p style='margin: 10px 15px 5px; '>Contact No: ".$_REQUEST['phonee']."</p>
		</td>
	</tr>";
	
	$message12.="<tr>
		<td style='font-family:Arial, Helvetica, sans-serif; font-size:13px;'>
			<p style='margin: 10px 15px 5px; '>Company: ".$_REQUEST['addresss']."</p>
		</td>
	</tr>";
	
	
	
	$message12.="<tr>
		<td style='font-family:Arial, Helvetica, sans-serif; font-size:13px;'>
			<p style='margin: 10px 15px 5px; '>Message: ".$_REQUEST['messagee']."</p>
		</td>
	</tr>";
	$message12.="<tr>
	<td style='font-family:Arial, Helvetica, sans-serif; font-size:13px;'>
	</td>
	</tr>";
	$message12.="<tr>
	<td style='font-family:Arial, Helvetica, sans-serif; font-size:13px;'>
	</td>
	</tr>";
	
	
	
	$message12.="<tr bgcolor='#f0f0f0'>
	<td style='font-family:Arial, Helvetica, sans-serif; font-size:13px;'>
	<table>
	<tr>
	<td><p style='margin: 10px 15px 0; float: right; padding:0px 0px 15px 0px;font-family:Arial, Helvetica, sans-serif; font-size:12px;'>Copyright © 2022 GURUTAM Innovations Pvt Ltd. All rights reserved
</p></td>
	</tr>
	
	</table>
	</td>
	</tr>";
	$message12.="</table>";
	
	$message12.="</body>";
	
	$message12.="</html>";
	
	// Sending email
	
	// username and password received from loginform 
	
	$mail= mail( $to12, $subject12, $message12, $headers12 ); 
	$msg="Thank you for contact us. Our team will take maximum 24 hours to get in touch with you.<br/>";
	
	
}

if(isset($_REQUEST['popsubmit']))
{
   $to1=$_REQUEST['emaill'];
	$from1 = "info@gurutam.in";
	$subject1 = 'LIVE CLASSES - GURUTAM Innovations Pvt Ltd.';
	$headers1  = 'MIME-Version: 1.0' . "\r\n";	
	$headers1 .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	// Create email headers
	$headers1 .= 'From:'.$from1 . "\r\n" .
    'Reply-To:'.$from1 . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
	// Compose a simple HTML email message
	$message1="<html>";
	$message1.="<body bgcolor='#cdd4da'>";
	$message1.="<table width='650' border='0' align='center' bgcolor='#ffffff' cellspacing='0' cellpadding='0' style='border:1px solid #EEEEEE; background-color:#ffffff;'>
	<td>
	<table width='650' height='100' cellpadding='0' cellspacing='0'>
	<tr>
	<td style='padding: 10px 0px 0px 11px;'>
	<img src='https://www.egurutam.com/c_it/assets/logo.png'>
	</td>
	</tr>
	</table>
	</td>
	</tr>";
	$message1.="<tr>
	<td align='center'>
	<p style='font-size: 16px; font-weight: bold;margin: 10px 15px;text-align:left;'>Dear ".$_REQUEST['fullNamepopup'].",</p>
	</td>
	</tr>";
	$message1.="<tr>
	<td>
	<p style='margin: 10px 15px; color:#000; text-align:left;'><b>Thank You for contact us. We will get back to you ASAP. </b></p>
	</td>
	</tr>";
	
	$message1.="<tr>
	<td style='font-family:Arial, Helvetica, sans-serif; font-size:13px;'>
	</td>
	</tr>";
	$message1.="<tr>
	<td style='font-family:Arial, Helvetica, sans-serif; font-size:13px;'>
	</td>
	</tr>";
	
	$message1.="<tr bgcolor='#f0f0f0'>
	<td style='font-family:Arial, Helvetica, sans-serif; font-size:13px;'>
	<table>
	<tr>
	<td><p style='margin: 10px 15px 0; float: right; padding:0px 0px 15px 0px;font-family:Arial, Helvetica, sans-serif; font-size:12px;'>Copyright © 2022 GURUTAM Innovations Pvt Ltd. All rights reserved</p></td>
	</tr>
	
	</table>
	</td>
	</tr>";
	$message1.="</table>";
	
	$message1.="</body>";
	
	$message1.="</html>";
	
	// Sending email
	
	// username and password received from loginform 
	
	$mail= mail( $to1, $subject1, $message1, $headers1 );
	
	
	$to12="info@gurutam.in";
	$from12 = "info@gurutam.in";
	
	$subject12 = 'LIVE CLASSES - GURUTAM Innovations Pvt Ltd.';
	
	$headers12  = 'MIME-Version: 1.0' . "\r\n";
	
	$headers12 .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	// Create email headers
	
	$headers12 .= 'From:'.$from12 . "\r\n" .
    'Reply-To:'.$from12 . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
	
	// Compose a simple HTML email message
	
	$message12="<html>";
	
	$message12.="<body bgcolor='#cdd4da'>";
	
	$message12.="<table width='650' border='0' align='center' bgcolor='#ffffff' cellspacing='0' cellpadding='0' style='border:1px solid #EEEEEE; background-color:#ffffff;'>
	<td>
	<table width='650' height='100' cellpadding='0' cellspacing='0'>
	<tr>
	<td style='padding: 10px 0px 0px 11px;'>
	<img src='https://www.egurutam.com/c_it/assets/logo.png'>
	</td>
	
	</tr>
	</table>
	</td>
	</tr>";
	$message12.="<tr>
	<td align='center'>
	<p style='font-size: 16px; font-weight: bold;margin: 10px 15px;text-align:left;'>Dear Admin,</p>
	</td>
	</tr>";
	
	$message12.="<tr>
	<td>
	<p style='margin: 10px 15px; color:#000; text-align:left;'><b>A new query(LIVE CLASSES) on GURUTAM Innovations Pvt Ltd. website. </b></p>
	</td>
	</tr>";
	
	$message12.="<tr>
		<td style='font-family:Arial, Helvetica, sans-serif; font-size:13px;'>
			<p style='margin: 10px 15px 5px; '>Name: ".$_REQUEST['fullNamepopup']."</p>
		</td>
	</tr>";
	
	$message12.="<tr>
		<td style='font-family:Arial, Helvetica, sans-serif; font-size:13px;'>
			<p style='margin: 10px 15px 5px;'>Email: ".$_REQUEST['email']."</p>
		</td>
	</tr>";
	
	$message12.="<tr>
		<td style='font-family:Arial, Helvetica, sans-serif; font-size:13px;'>
			<p style='margin: 10px 15px 5px; '>Contact No: ".$_REQUEST['phoneNo']."</p>
		</td>
	</tr>";
	
	$message12.="<tr>
		<td style='font-family:Arial, Helvetica, sans-serif; font-size:13px;'>
			<p style='margin: 10px 15px 5px; '>Message: ".$_REQUEST['lookingFor']."</p>
		</td>
	</tr>";
	
	$message12.="<tr>
		<td style='font-family:Arial, Helvetica, sans-serif; font-size:13px;'>
			<p style='margin: 10px 15px 5px; '>Date: ".$_REQUEST['pdate']."</p>
		</td>
	</tr>";
	
	$message12.="<tr>
		<td style='font-family:Arial, Helvetica, sans-serif; font-size:13px;'>
			<p style='margin: 10px 15px 5px; '>Time: ".$_REQUEST['RadioGroup1']."</p>
		</td>
	</tr>";
	$message12.="<tr>
	<td style='font-family:Arial, Helvetica, sans-serif; font-size:13px;'>
	</td>
	</tr>";
	$message12.="<tr>
	<td style='font-family:Arial, Helvetica, sans-serif; font-size:13px;'>
	</td>
	</tr>";
	
	
	
	$message12.="<tr bgcolor='#f0f0f0'>
	<td style='font-family:Arial, Helvetica, sans-serif; font-size:13px;'>
	<table>
	<tr>
	<td><p style='margin: 10px 15px 0; float: right; padding:0px 0px 15px 0px;font-family:Arial, Helvetica, sans-serif; font-size:12px;'>Copyright © 2022 GURUTAM Innovations Pvt Ltd. All rights reserved
</p></td>
	</tr>
	
	</table>
	</td>
	</tr>";
	$message12.="</table>";
	
	$message12.="</body>";
	
	$message12.="</html>";
	
	// Sending email
	
	// username and password received from loginform 
	
	$mail= mail( $to12, $subject12, $message12, $headers12 ); 
	$msg="Thank you for contact us. Our team will take maximum 24 hours to get in touch with you.<br/>";
	
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="keywords" content="gurutam"/>
<meta name="description" content="gurutam"/>
<link href="https://www.egurutam.com/c_it/assets/favicon.ico" type="image/x-icon" rel="icon"/>
<link href="https://www.egurutam.com/c_it/assets/favicon.ico" type="image/x-icon" rel="shortcut icon"/>
<title>Home - GURUTAM</title>
<meta name="robots" content="all"/>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
<link rel="stylesheet" href="https://www.egurutam.com/c_it/assets/style.css"/>
<link rel="stylesheet" href="https://www.egurutam.com/c_it/assets/responsive.css"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body class="hold-transition noJS">
<!--.headerSearch-->
<div class="headerSearch">
  <div class="container">
    <div class="headerSearchWrap">
      <div class="searchFieldWrap">
        <input type="text" placeholder="Enter Search Keywords" />
        <button class="searchBtn"><i class="fa fa-search"></i></button>
      </div>
    </div>
  </div>
</div>
<!--/.headerSearch-->
<!--#wrapper-->
<div id="wrapper">
<header id="header">
  <div class="headerInner">
    <!--.container-->
    <div class="" style="padding:2px 2px 2px 2px;">
      <div class="headerLeft col-sm-2"> <a href="https://www.egurutam.com/c_it/" title="Gurutam"><img src="https://www.egurutam.com/c_it/assets/logo.png" alt="logo"/></a> </div>
      <div class="headerRight col-sm-10">
        <div id="mainNav" class="mainNavigation" style="float:right;">
          <div class="menuPart cf" style="margin-top:0px;">
            <ul id="nav">
              <li class="startup"><a class="nav-link-fade-up" href="https://www.egurutam.com/c_it/">Home</a></li>
              <li class="startup"><a  class="nav-link-fade-up" href="https://www.egurutam.com/c_it/academics.php">Academics</a></li>
              <li class="startup"><a href="https://www.egurutam.com/c_it/compteative_exams_preprationss.php">Competitive</a></li>   
              
                    <li class="startup"><a href="https://www.egurutam.com/c_it/professional_courses.php">Courses</a></li>
                    <li class="startup"><a href="https://www.egurutam.com/c_it/soft_skills.php">Skills</a></li>
                    <li class="startup"><a href="https://www.egurutam.com/c_it/languages.php">Languages</a></li>
                    <li class="startup"><a href="https://www.egurutam.com/c_it/study_abroad.php">Study</a></li>
              
                      
              <li class="startup "><a href="https://www.egurutam.com/c_it/contact-us.php">Contact</a></li>
             <li class=" "><a href="https://web.egurutam.com/login" title="Register" class="commonBtn " target="_blank" style="padding: 5px 15px!important;"><span>Register / Login</span></a></li>
            </ul>
          </div>
        </div>
        <!--<div class="headerRightBtns"  style="padding-top:0px;">
         <a href="" title="Register" class="commonBtn " target="_blank"><span>Register</span></a>
          <a href="" title="Login" class="commonBtn " target="_blank"><span>Login</span></a>
          </div>-->
      </div>
    </div>
    <!--/.container-->
  </div>
</header>
<main id="main" class="mainContentArea">
<style type="text/css">
  
#mask {
  position:absolute;
  left:0;
  top:0;
  z-index:9000;
  background-color:#26262c;
  display:none;
}  
#boxes .window {
  position:absolute;
  left:0;
  top:0;
  display:none;
  z-index:9999;
  padding:20px;
  border-radius: 5px;
  text-align: center;

}
#boxes #dialog {
  width:70%; 
  height:auto;
  padding: 10px 10px 10px 10px;
  background-color:#ffffff;
  margin: 0 auto;
  top:0;
}

.agree:hover{
  background-color: #D1D1D1;
}
.popupoption:hover{
 background-color:#D1D1D1;
 color: green;
}
.popupoption2:hover{
 color: red;
}
</style>
<style>
@media (min-width:320px)  {
	
	#indexBanner{ margin-top:31px;}
}
</style>
<style>
  .carousel-item {
  
  
  background: no-repeat center center scroll;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
.carousel-control-prev
{
 z-index:999999999;
}
.carousel-control-next
{
 z-index:999999999;
}
  </style>
<div id="boxes">
  <div style=" display: none;" id="dialog" class="window">
    <div id="san"> <a href="#" class="close agree"><img src="img/close-icon.png" width="25" style="float:right; margin-right: -25px; margin-top: -20px;"></a>
      <div class="fullscreen-bg desktopBanner" >
        <video width="100%" class="fullscreen-bg__video" id="vido" style=" top: 0; width: 100%; left: 0%;bottom: :0px; height: auto" playsinline controls autoplay muted loop>
          <source src="https://gurutam.in/app/assets/video/khusi.mp4" type="video/mp4" >
        </video>
      </div>
    </div>
  </div>
  <div style="width: 100%; font-size: 32pt; color:white; height: 1202px; display: none; opacity: 0.4;" id="mask"></div>
</div>

<section id="indexBanner" class="mainBanner" style="padding:50px 0px 20px 0px;">
  <!--<div class="mainBannerWrap">
    <div class="bannerImg bgBackground"></div>
    <div class="bannerCaption">
      <div class="container-fluid posRelative">
        <div class="bannerTextWrap" style="    margin-left: -12px;">
          <div class="swiper-container swiper-no-swiping">
            <div class="swiper-wrapper">
              <div class="swiper-slide" class="responsive" data-hash="slide1" style="background-image:url(https://www.egurutam.com/c_it/assets/banner-new-07-0265c6bf89182.jpg); background-size:cover; background-repeat: no-repeat;">
                <div class="container captiontext">
                  <div class="textarea">
                    <div class="mainBannerText"><span class="headSmallText">Digital Class</span>Solution</div>
                    <p>An Initiative by "Gurutam"<br>
                      to help in learning of every child</p>
                  </div>
                </div>
              </div>
              <div class="swiper-slide" data-hash="slide2" style="background-image:url(https://www.egurutam.com/c_it/assets/banner-new-05-0265c6bf8792a.jpg); background-size:cover; background-repeat: no-repeat;"">
                <div class="container captiontext">
                  <div class="textarea">
                    <div class="mainBannerText"><span class="headSmallText">Digital Class</span>Solution</div>
                    <p>An Initiative by "Gurutam"<br>
                      to help in learning of every child</p>
                  </div>
                </div>
              </div>
              <div class="swiper-slide" data-hash="slide3" style="background-image:url(https://www.egurutam.com/c_it/assets/bg_3.jpg); background-size:cover; background-repeat: no-repeat;"">
                <div class="container captiontext">
                  
                </div>
              </div>
            </div>
          </div>
          <div class="sliderNavigation">
            <div class="swiper-button-prev"><i class="fa fa-angle-left"></i></div>
            <div class="swiper-button-next"><i class="fa fa-angle-right"></i></div>
          </div>
          
        </div>
      </div>
    </div>
    <div class="mouseIconWrap">
      <div class="container posRelative"><span class="mouseIcon"><span>Scroll</span></span></div>
    </div>
  </div>-->
 <!-- <a href="#schduleCallPop" class="floatBtnRight popupOpen"><span class="btnWrap"><i class="fa fa-phone"></i> <span class="btnText">Talk to Our Mentor</span></span></a>--> 
 
 
 <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://www.egurutam.com/c_it/assets/banner-new-07-0265c6bf89182.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://www.egurutam.com/c_it/assets/banner_01_C.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://www.egurutam.com/c_it/assets/banner-new-05-0265c6bf8792a.jpg" class="d-block w-100" alt="...">
    </div>
    
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div></section>
  
  
  
  
  
  <section id="proofOfConcept" class="proofOfConcept contentBlockPart" style="    margin:50px 0px 90px 0px!important;">
<div class="container posRelative">
<div class="whiteLineBg middleImg noAnimate" data-paroller-factor="-0.1" data-paroller-type="foreground">Whitepapers</div>
<div class="centerHeading">
  <h2 style="font-weight: bold;font-size: 30px;">Gurutam – At a Glance</h2><br/><br/>
 

<p style="font-size:17px; text-align:left!important;"><i class="fa fa-diamond" aria-hidden="true" style="font-size: 12px; font-weight: bold;padding-right: 10px;"></i>Gurutam means Education through Best Gurus. It is a <b>Global Education Virtual Platform</b> with a vision to provide quality
education ranging from the Remote Villages, Tier 2/3 Cities to busy metros across the globe</p>

<p style="font-size:17px; text-align:left!important;"><i class="fa fa-diamond" aria-hidden="true" style="font-size: 12px; font-weight: bold;padding-right: 10px;"></i>Over <b>6 decades</b> of Promoters Experience in Education, Consulting & Technology for Fortune 500 org across continents</p>

<p style="font-size:17px; text-align:left!important;"><i class="fa fa-diamond" aria-hidden="true" style="font-size: 12px; font-weight: bold;padding-right: 10px;"></i>Gurutam’s headquarters
 is in the ancient village of Gurus in India called Gurugram, at the outskirts of India's capital New
Delhi. Branch offices are in Germany & Switzerland currently and soon will be expanding to US & Australia</p>

<p style="font-size:17px; text-align:left!important;"><i class="fa fa-diamond" aria-hidden="true" style="font-size: 12px; font-weight: bold;padding-right: 10px;"></i>Current Team of Academicians & Education Consultants (CBSE, ICSE & NCERT) : <b>80+</b></p>

<p style="font-size:17px; text-align:left!important;"><i class="fa fa-diamond" aria-hidden="true" style="font-size: 12px; font-weight: bold;padding-right: 10px;"></i>Our Portfolio Offerings include School Academics (6th to 12 Class), Entrance Exam (CUET), Professional Courses in
Information Technology, Global Languages, Behavioral & Soft Skills Trainings. [Science & Commerce for 11th, 12th, CUET]</p>

<p style="font-size:17px; text-align:left!important;"><i class="fa fa-diamond" aria-hidden="true" style="font-size: 12px; font-weight: bold;padding-right: 10px;"></i>Strong Course Execution & Academics Governance Experience in B2C domain with over <b>100k+ Hours</b> of Course delivery</p>

<p style="font-size:17px; text-align:left!important;"><i class="fa fa-diamond" aria-hidden="true" style="font-size: 12px; font-weight: bold;padding-right: 10px;"></i><b>Single Point Accountability</b> for Institutions, Schools & Corporates </p>

</div>

      </div>
    </section>
<!--#ourSolutions-->
<section id="ourSolutions" class="ourSolutions contentBlockPart" style="background:url(https://www.egurutam.com/c_it/assets/mission.jpg) no-repeat; background-position:center; margin:50px 0px 70px 0px;">

  <div class="greenLingBg greenLightLeft"></div>
  <div class="greenLingBg greenLightRight noAnimate" data-paroller-factor="-0.2" data-paroller-type="foreground"></div>
  <div class="container">
    <div class="container posRelative" style="padding: 0px 0px 70px 0px;">
      <h2 class="mrgB15" style="color:#FFF;"><span>Mission </span></h2>
      <span class="tagspan" style="color:#FFF;">Our Mission – is to support every student in their learning journey and help them become their best every day. </span>
      
     
    </div>
  </div>
</section>

<section id="proofOfConcept" class="proofOfConcept contentBlockPart" style="    padding: 70px 0px 100px 0px;">
<div class="container posRelative">
<div class="whiteLineBg middleImg noAnimate" data-paroller-factor="-0.1" data-paroller-type="foreground">Whitepapers</div>
<div class="centerHeading">
  <h2>What Makes Gurutam Special – Our USP</h2><br/><br/>
 
 <p style="font-size:17px; text-align:left!important;"><i class="fa fa-diamond" aria-hidden="true" style="font-size: 12px; font-weight: bold;padding-right: 10px;"></i>Our Unique Portfolio covers Schools Academics, Entrance Exams, Corporate Trainings & Languages</p>

 <p style="font-size:17px; text-align:left!important;"><i class="fa fa-diamond" aria-hidden="true" style="font-size: 12px; font-weight: bold;padding-right: 10px;"></i>Highly <b>Functional & Customized</b> Learning Management System (Our Digital Platform)</p>
<ul style="text-align: left;padding-left: 50px;font-size: 16px;">
    <li> One Stop Solution for Yearly Schedule, Course Coverage & Content</li>
    <li> Assessments, Case Studies & Practice Papers</li>
    <li> Provide <b>360 Degree Analysis</b> of Individual Performance thru our Student Data Warehouse</li>
    <li> Recorded Lectures</li>
    <li> Seamless Connect with Professors/Instructors</li>
  </ul>  
 <p style="font-size:17px; text-align:left!important;"><i class="fa fa-diamond" aria-hidden="true" style="font-size: 12px; font-weight: bold;padding-right: 10px;"></i>Dynamic, Adaptable & Scalable</p>
 <p style="font-size:17px; text-align:left!important;"><i class="fa fa-diamond" aria-hidden="true" style="font-size: 12px; font-weight: bold;padding-right: 10px;"></i><b>Global Certifications</b> for Teachers & Students</p>
 <p style="font-size:17px; text-align:left!important;"><i class="fa fa-diamond" aria-hidden="true" style="font-size: 12px; font-weight: bold;padding-right: 10px;"></i><b>Well Researched</b> Curriculum & Evaluation System</p>
 <p style="font-size:17px; text-align:left!important;"><i class="fa fa-diamond" aria-hidden="true" style="font-size: 12px; font-weight: bold;padding-right: 10px;"></i><b>Vast Network</b> of Teachers, Academicians & Academic Partnerships</p>
 <p style="font-size:17px; text-align:left!important;"><i class="fa fa-diamond" aria-hidden="true" style="font-size: 12px; font-weight: bold;padding-right: 10px;"></i>Adaptation of <b>Latest Technology & Infrastructure</b> for real life & interactive experience</p>
</div>

      </div>
    </section>
<!--/#ourSolutions-->
<!--#proofOfConcept-->
<!--<section id="proofOfConcept" class="proofOfConcept contentBlockPart">
<div class="container posRelative">
<div class="whiteLineBg middleImg noAnimate" data-paroller-factor="-0.1" data-paroller-type="foreground">Whitepapers</div>
<div class="centerHeading">
  <h2>eGurutam in a nutshell</h2><br/><br/>
  <p style="font-size:17px; text-align:left!important;"><i class="fa fa-diamond" aria-hidden="true" style="font-size: 12px; font-weight: bold;padding-right: 10px;"></i>
  eGurutam means Education through Best Teachers. It is global education virtual platform with a vision to provide quality education from the remote villages to very busy metros across the globe. 
</p>
 <p style="font-size:17px; text-align:left!important;">
<i class="fa fa-diamond" aria-hidden="true" style="font-size: 12px; font-weight: bold;padding-right: 10px;"></i>
 eGurutam's headquarters
 is in the ancient village of Guru 'Dronacharya' in India called Gurugram, located on
 the outskirts of India's capital, New Delhi

. It has its branch offices in Germany  and Switzerland currently and  shall soon be expanding to USA & Australia. </p>
s
<p style="font-size:17px; text-align:left!important;"><i class="fa fa-diamond" aria-hidden="true" style="font-size: 12px; font-weight: bold;padding-right: 10px;"></i>
  eGurutam’s mantra is  "learning never stops" and offers solutions that spans across the entire life journey  starting from school acdemics to professional courses, preparation for competitive exams to Soft skills along with entire spectrum of global languages.</p>

<p style="font-size:17px; text-align:left!important;"><i class="fa fa-diamond" aria-hidden="true" style="font-size: 12px; font-weight: bold;padding-right: 10px;"></i>
  eGurutam takes pride in catering to individual students, teachers & Parents for their individual needs, Schools of all sizes and categories, Corporates for training their employees and fulfilling their corporate social responsibilities. 
</p>
</div>

      </div>
    </section>-->
    
    
    <section id="proofOfConcept" class="proofOfConcept contentBlockPart" style="background: url(https://www.egurutam.com/c_it/assets/global.jpg) no-repeat;
    background-position: center;    padding: 70px 0px 100px 0px;">
<div class="container posRelative">
<div class="whiteLineBg middleImg noAnimate" data-paroller-factor="-0.1" data-paroller-type="foreground">Whitepapers</div>
<div class="centerHeading">
  <h2 style="color:#FFF;">Global presence</h2><br/><br/>
  <p style="color:#FFF;">eGurutam has headquarters in Gurugram India and Branch offices in Germany and Switzerland</p>
</div>

      </div>
    </section>
    <!--#ourSolutions-->
    <!--#proofOfConcept-->
    <style>
	[data-aos^=fade][data-aos^=fade].aos-animate {
    opacity: 1;
    transform: translate(0);
}
.block-team-member-1 {
    padding: 20px;
    border: 1px solid #e9ecef;
   background: linear-gradient(to right, #056ede  0%, rgba(10, 238, 196, 1) 100%);
}
.text-center {
    text-align: center !important;
}
.rounded {
    border-radius: 0.25rem !important;
}
figure {
    margin: 0 0 1rem;
}
.block-team-member-1 figure img {
    width: 200px;
}
.rounded-circle {
    border-radius: 50% !important;
}
.img-fluid {
    max-width: 100%;
    height: auto;
}
#investors-section {
    color: #FFF;
}
.aboutbg {
    background: #056ede !important;
    color: #FFF;
}
.mission {
    color: #FFF;
}
.mission {
    padding: 15px 30px;
    color: #333;
}
	</style>
    
    <div class="pt-5 pb-5 aboutbg" id="investors-section">
  <div class="container">
    <!--<div class="row">
      <div class="col-12">
        <div class="mission">
          <h3 class="text-center"><strong>Markets</strong></h3>
          <p class="text-center">Inno2scale specializes for German, Swiss and Indian markets and have their Physical offices at these locations</p>
        </div>
      </div>
    </div>-->
    <div class="row mb-2">
      <div class="col-4 text-center"> <strong>Germany (DE)</strong><br>
        New-York-Ring 31<br>
        71686 Remseck-Pattonville </div>
      <div class="col-4 text-center"> <strong>Switzerland (CH)</strong><br>
        Hauptstrasse 31<br>
        8832 Wollerau </div>
      <div class="col-4 text-center"> <strong>India (IN)</strong><br>
        Landmark Cyberpark<br>
        Sector 67, Gurgaon- Haryana </div>
    </div>
  </div>
</div>
    
    
    
    
    <br/><br/>
    <section id="pcProtocol" class=" " style="    padding: 70px 0px 20px 0px;">
     <div class=" whyPrivateBlockChain posRelative cruveSideBg activeBlock">
        <div class="" id="investors-section" >
  <div class="container">
    <div class="row mb-2">
      <div class="col-12">
        <div class="block-heading-1 text-center">
          <h2 ><strong>Team</strong></h2><br/><br/>
        </div>
      </div>
    </div>
    <div class="row">
      
      <div class="col-lg-3 aos-init aos-animate" data-aos="fade-up">
        <div class="block-team-member-1 text-center rounded">
          <figure> <img src="https://www.egurutam.com/c_it/assets/amit.jpg" alt="Amit Gupta" class="img-fluid rounded-circle"> </figure>
          <h5 class="font-size-20" style="color:#fff;font-weight: bold; font-size:18px;min-height: 50px;">Amit Gupta</h5>
          <span class="d-block mb-3" style="color:#fff;min-height:72px;">Co Founder  & CEO</span> <!--<span class="d-block mb-3">amitgupta@inno2scale.com</span>-->
          <p class="text-justify" style="color:#fff;font-size: 13px;min-height:525px; text-align:justify;">Amit is a veteran IT leader with over two decades of work experience in Business Consulting, Digital Transformation & Large IT Programs Governance & Execution with many Fortune500 multinational organizations. He has been instrumental in moving the organizations through their digital transformation journey and bring the real value to the business. He has directional experience in Business Development, Quality Management, Corporate Finance, Strategy & Investment Management. He has worked with organisations like Nokia Siemens Networks, Sapient Corporation, Coforge & InvestX
<br>
            <br>
          </p>
        </div>
      </div>
      
      <div class="col-lg-3 aos-init aos-animate" data-aos="fade-up">
        <div class="block-team-member-1 text-center rounded">
          <figure> <img src="https://www.egurutam.com/c_it/assets/avinash.png" alt="avinash" class="img-fluid rounded-circle"> </figure>
          <h5 class="font-size-20" style="color:#fff;font-weight: bold; font-size:18px;min-height: 50px;">Avinash Kumar Gautam</h5>
          <span class="d-block mb-3" style="color:#fff;min-height: 72px;">Co Founder & Chief Product Officer</span> <!--<span class="d-block mb-3">amitgupta@inno2scale.com</span>-->
          <p class="text-justify" style="color:#fff;font-size: 13px;min-height: 525px; text-align:justify;">Avinash is a seasoned Academician and a well-known Professional in the Edtech space with over a decade of all-round experience. During his career, he has played well diversified role of Design engineer, Consultant, Teacher, Author, Researcher & Entrepreneur. He is passionate about helping students in improving learning outcomes & realising their inherent potential. Avinash has great credentials while working in the K-12 education space. He has excelled in his delivery role while working with organizations like ILID, Vedantu Innovations and XSeed 

<br>
            <br>
          </p>
        </div>
      </div>
      
      <div class="col-lg-3 aos-init aos-animate" data-aos="fade-up">
        <div class="block-team-member-1 text-center rounded">
          <figure> <img src="https://www.egurutam.com/c_it/assets/gagan.png" alt="Gagan Parashar" class="img-fluid rounded-circle"> </figure>
          <h5 class="font-size-20" style="color:#fff;font-weight: bold; font-size:18px;min-height: 50px;">Gagan Parashar</h5>
          <span class="d-block mb-3" style="color:#fff;min-height: 72px;">Head - Business Strategy & Partner Management</span> <!--<span class="d-block mb-3">amitgupta@inno2scale.com</span>-->
          <p class="text-justify" style="color:#fff;font-size: 13px;min-height: 525px; text-align:justify;">Gagan is a senior Business Consultant with over One & Half decades of experience in India, Europe & Apac markets. He is an integral part of Gurutam’s Business  Strategy &  Partner Development team. He has been instrumental in helping International Companies to scale up their business in International markets including India. He has serviced to clients like Coca Cola, Deloitte, SoftBank, Thames water International, Philips, Havells, Swiss International, Discovery and many more
He is sound in venture  establishment, financial and legal advisory services, mentorship for start-ups,  business promotion strategy, strategic business planning, strategic alliances,  operation planning & management.


<br>
            <br>
          </p>
        </div>
      </div>
      
      
      <div class="col-lg-3 aos-init aos-animate" data-aos="fade-up">
        <div class="block-team-member-1 text-center rounded">
          <figure> <img src="https://www.egurutam.com/c_it/assets/kunal.png" alt="Kunal Deo Shukla" class="img-fluid rounded-circle"> </figure>
          <h5 class="font-size-20" style="color:#fff;font-weight: bold; font-size:18px;min-height: 50px;">Kunal Deo Shukla</h5>
          <span class="d-block mb-3" style="color:#fff;min-height: 72px;">Head – Business Development</span> <!--<span class="d-block mb-3">amitgupta@inno2scale.com</span>-->
          <p class="text-justify" style="color:#fff;font-size: 13px;min-height: 525px; text-align:justify;">Kunal is a senior business driven professional with over 15 years of experience in Indian & European markets. He is part of Gurutam’s core team & heads Business Development in India & International Market. In previous assignments, he has worked with large as well as start-up companies including Lyra Infosystems a success story in Software compliance and related services. Kunal has worked with organizations like Symphony Technology Group and Oracle in Sales & Account Management roles and successfully acquired and managed fortune 500 accounts like IBM, Robert Bosch, SAP, ING Vysya, ADP, Citi group, Target Inc., Wipro Infotech, Intel and many more. 



<br>
            <br>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
      </div>
    </section>
    <!--#proofOfConcept-->
    <!--#ourTeam-->
    <section id="ourTeam" class="ourTeam contentBlockPart whiteText">
      <div class="container">
        <div class="centerHeading">
          <h2>Our Expert Teachers</h2>
          <p>Helping to solve all the problems</p>
        </div>
        <div class="teamSliderWrap ">
          <div class="teamSlider ">
            <div class="swiper-container swiper-no-swiping ">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="teamSlideBox">

                    <div class="teamImgWrap">
                      <div class="teamImgbox"> <img src="https://www.egurutam.com/c_it/assets/team-member1.jpg" width="185" height="185" alt="Kunal Kumar Singh" title="Kunal Kumar Singh"></div>
                      <div class="socialDetailsTeam"><a href="#" class="linkedIn"><i class="fa fa-linkedin"></i></a><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></div>
                    </div>
                    <div class="teamMemberDetial">
                      <h3>Kunal Kumar Singh</h3>
                      <p>M.TECH (Mining Machinery & Engineering) ISM, DHANBAD <br>
                      15+ Years of Experience in Teaching Mathematics</p>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="teamSlideBox">
                    <div class="teamImgWrap">
                      <div class="teamImgbox"> <img src="https://www.egurutam.com/c_it/assets/team-member2.jpg" width="185" height="185" alt="SONENDRA SHARMA" title="SONENDRA SHARMA"></div>
                      <div class="socialDetailsTeam"><a href="#" class="linkedIn"><i class="fa fa-linkedin"></i></a><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></div>
                    </div>
                    <div class="teamMemberDetial">
                      <h3>SONENDRA SHARMA</h3>
                      <p>M.TECH. (Hydro Power Engineering), MNIT Bhopal<br>
                       10+ Years of Experience in Teaching Physics</p>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="teamSlideBox">
                    <div class="teamImgWrap">
                      <div class="teamImgbox"> <img src="https://www.egurutam.com/c_it/assets/team-member3.jpg" width="185" height="185" alt="Nandan Kumar Singh" title="Nandan Kumar Singh"></div>
                      <div class="socialDetailsTeam"><a href="#" class="linkedIn"><i class="fa fa-linkedin"></i></a><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></div>
                    </div>
                     <div class="teamMemberDetial">
                      <h3>Nandan Kumar Singh</h3>
                      <p>M.S.C (Zoology)<br>
                       5+ Years of Experience in Teaching Biology</p>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="teamSlideBox">
                    <div class="teamImgWrap">
                      <div class="teamImgbox"> <img src="https://www.egurutam.com/c_it/assets/team-member4.jpg" width="185" height="185" alt="Neha Gupta" title="Neha Gupta"></div>
                      <div class="socialDetailsTeam"><a href="#" class="linkedIn"><i class="fa fa-linkedin"></i></a><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></div>
                    </div>
                     <div class="teamMemberDetial">
                      <h3>Neha Gupta</h3>
                      <p>M.Tech (Thermal Engineering)<br>
                       10+ Years of Experience in Teaching Physics</p>
                    </div>
                  </div>
                </div>

                 <div class="swiper-slide">
                  <div class="teamSlideBox">
                    <div class="teamImgWrap">
                      <div class="teamImgbox"> <img src="https://www.egurutam.com/c_it/assets/team-member5.jpg" width="185" height="185" alt="ASHFAQUE ANSARI" title="ASHFAQUE ANSARI"></div>
                      <div class="socialDetailsTeam"><a href="#" class="linkedIn"><i class="fa fa-linkedin"></i></a><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></div>
                    </div>
                     <div class="teamMemberDetial">
                      <h3>ASHFAQUE ANSARI</h3>
                      <p>Master of Engineering (Thermal Engineering)<br>
                       8+ Years of Experience in Teaching Mathematics</p>
                    </div>
                  </div>
                </div>



<div class="swiper-slide">
                  <div class="teamSlideBox">
                    <div class="teamImgWrap">
                      <div class="teamImgbox"> <img src="https://www.egurutam.com/c_it/assets/team-member6.jpg" width="185" height="185" alt="HARSH PATEL" title=" HARSH PATEL"></div>
                      <div class="socialDetailsTeam"><a href="#" class="linkedIn"><i class="fa fa-linkedin"></i></a><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></div>
                    </div>
                     <div class="teamMemberDetial">
                      <h3> HARSH PATEL</h3>
                      <p>M.sc (mathematics)<br>
                       6+ Years of Experience</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
    <!--#getInTouch-->

  
  <div class="thankYouMessagePopup popupWrap" id="thankYouMessagePop">
    <div class="popupWrapInnerWrap">
      <div class="popupContent"> 
		<a href="#" class="close agree" id="agreeC"><img src="img/close-icon.png" width="25" style="float:right; margin-right: -25px; margin-top: -20px;"></a>
<div class="fullscreen-bg desktopBanner" >
        <video width="100%" class="fullscreen-bg__video" id="vido" style=" top: 0; width: 100%; left: 0%;bottom: :0px; height: auto" playsinline controls autoplay muted loop>
          <source src="https://gurutam.in/app/https://www.egurutam.com/c_it/assets/video/khusi.mp4" type="video/mp4" >
           </video>
        </div>
	  </div>
    </div>
  </div>
  
  
  <div class="schduleCall popupWrap" id="schduleCallPop">
    <div class="popupWrapInnerWrap" style="max-width: 781px;margin: 0% auto!important; max-width: 900px!important;">
      <h2>Live Classes</h2>
      <a href="#" class="closePopBtn"><i class="fa fa-remove"></i></a>
      <div class="popupContent">
		<form method="post" accept-charset="utf-8" id="contact1" >    <div class="colsBlockRow cf">
          <div class="colsBlock popupformsWrap">
            <h3>Basic Details</h3>
            <div class="callFormsDetailWrap">
              <div class="feildRow cf fullWidth">
                <div class="feildCol">
                  <div class="feildInput">
                    <input type="text" id="fullNamepopup" name="fullNamepopup"   />
                    <label for="fullNamepopup">Full Name <em>*</em></label>
                  </div>
                </div>
                <div class="feildCol">
                    <div class="phoneNoFeild">
                      <div class="feildInput">
                        <input type="text" id="phoneNo" name="phoneNo"   />
                        <label for="phoneNo">Phone Number <em>*</em></label>
                      </div>
                    </div>
                
                </div>
                <div class="feildCol">
                  <div class="feildInput">
                    <input type="text" id="email" name="email"   />
                    <label for="email">E-Mail <em>*</em></label>
                  </div>
                </div>
                <div class="feildCol">
                  <div class="feildInput">
                    <input type="text" id="lookingFor" name="lookingFor"   />
					
					<input type="hidden" id="pdateq" name="pdate" value="" />
                    <label for="lookingFor">Message<em>*</em></label>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="colsBlock timeSlotSelectWrap">
            <div class="timeSlotTitle">
              <h3>Preferred Time Slot</h3>
              <ul class="timeAndDateWrap">
                <li><i class="fa fa-calendar"></i> <?= date('d M, Y') ?></li>
              </ul>
            </div>
            <div class="dateSelectionWrap cf">
			<?php
			$weekdays = array( "Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat" );
			$days = date( 'd' )+1;
			$mdays = date( 'd' )+5;
			$month = date( 'n' );
			$monthn = date( 'n' )+1;
			$ii=1;
			?>
              <ul class="dateSelection" id="ulludate">
			  
			  <?php for ( $day = $days; $day <= $mdays; $day++ ){
						if($day > date('t')){?>
				<li> <a href="#"> <span class="dateWrap"> <span class="day"><?= $weekdays[ date( 'w', strtotime( $monthn . '/' . $ii ) ) ] ?></span> <span class="date"><?= $ii ?></span> <span class="month"><?= date( 'M' , strtotime('+1 month')) ?></span> </span> </a> </li>
			<?php
							$ii++;
						}else{
							if($day == $days ){
			?>
				<li class="active"> <a href="#"> <span class="dateWrap"> <span class="day"><?= $weekdays[ date( 'w', strtotime( $month . '/' . $day ) ) ] ?></span> <span class="date"><?= $day ?></span> <span class="month"><?= date( 'M' ) ?></span> </span> </a> </li>
			
							<?php }else{?>
							<li> <a href="#"> <span class="dateWrap"> <span class="day"><?= $weekdays[ date( 'w', strtotime( $month . '/' . $day ) ) ] ?></span> <span class="date"><?= $day ?></span> <span class="month"><?= date( 'M' ) ?></span> </span> </a> </li>
			  <?php } } } ?>
			
                
			  </ul>
			  
			  
            </div>
            <div class="fixTiming mrgB20">
              <h3>Morning</h3>
              <div class="fixTimingRow cf">
                <div class="fixTimeFeilds">
                  <input type="radio" name="RadioGroup1" value="8:00 - 9:00" id="RadioGroup1_0" class="rddbtn">
                  <label for="RadioGroup1_0">8:00 - 9:00</label>
                </div>
                <div class="fixTimeFeilds">
                  <input type="radio" name="RadioGroup1" value="9:00 - 10:00" id="RadioGroup1_1" class="rddbtn">
                  <label for="RadioGroup1_1"> 9:00 - 10:00</label>
                </div>
                <div class="fixTimeFeilds">
                  <input type="radio" name="RadioGroup1" value="10:00 - 11:00" id="RadioGroup1_2" class="rddbtn">
                  <label for="RadioGroup1_2">10:00 - 11:00</label>
                </div>
                <div class="fixTimeFeilds">
                  <input type="radio" name="RadioGroup1" value="11:00 - 12:00" id="RadioGroup1_3" class="rddbtn">
                  <label for="RadioGroup1_3">11:00 - 12:00</label>
                </div>
              </div>
            </div>
            <div class="fixTiming mrgB20">
              <h3>Noon</h3>
              <div class="fixTimingRow cf">
                <div class="fixTimeFeilds">
                  <input type="radio" name="RadioGroup1" value="12:00 - 1:00" id="RadioGroup1_4" class="rddbtn">
                  <label for="RadioGroup1_4">12:00 - 1:00</label>
                </div>
                <div class="fixTimeFeilds">
                  <input type="radio" name="RadioGroup1" value="1:00 - 2:00" id="RadioGroup1_5" class="rddbtn">
                  <label for="RadioGroup1_5">1:00 - 2:00</label>
                </div>
                <div class="fixTimeFeilds">
                  <input type="radio" name="RadioGroup1" value="2:00 - 3:00" id="RadioGroup1_6" class="rddbtn">
                  <label for="RadioGroup1_6">2:00 - 3:00</label>
                </div>
                <div class="fixTimeFeilds">
                  <input type="radio" name="RadioGroup1" value="3:00 - 4:00" id="RadioGroup1_7" class="rddbtn">
                  <label for="RadioGroup1_7">3:00 - 4:00</label>
                </div>
              </div>
            </div>
            <div class="fixTiming">
              <h3>Evening</h3>
              <div class="fixTimingRow cf">
                <div class="fixTimeFeilds">
                  <input type="radio" name="RadioGroup1" value="12:00 - 1:00" id="RadioGroup1_4" class="rddbtn">
                  <label for="RadioGroup1_4">6:00 - 7:00</label>
                </div>
                <div class="fixTimeFeilds">
                  <input type="radio" name="RadioGroup1" value="1:00 - 2:00" id="RadioGroup1_5" class="rddbtn">
                  <label for="RadioGroup1_5">7:00 - 8:00</label>
                </div>
                <div class="fixTimeFeilds">
                  <input type="radio" name="RadioGroup1" value="2:00 - 3:00" id="RadioGroup1_6" class="rddbtn">
                  <label for="RadioGroup1_6">8:00 - 9:00</label>
                </div>
                <div class="fixTimeFeilds">
                  <input type="radio" name="RadioGroup1" value="3:00 - 4:00" id="RadioGroup1_7" class="rddbtn">
                  <label for="RadioGroup1_7">9:00 - 10:00</label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="btnRowWithCaptch  cf">
         
          <div class="btnRight">
            <input type="submit" name="popsubmit" class="commonBtn" value="Submit" />
          </div>
        </div>
		</form>      </div>
    </div>
  </div>
 <div class="schduleCall popupWrap" id="vidoPopup01">
    <div class="popupWrapInnerWrap">
      <div class="videoIframe " id="vidoPopup">
        <div class="videoWrapper">
           <a href="#" class="closePopBtn" onClick="removeModel('vidoPopup01')"><i class="fa fa-remove closeChannel"></i></a>
          <iframe width="560" height="315" id="vfrm01" src="https://www.youtube.com/embed/GljarFUrwvo" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
			
			<audio id="audio" autoplay>
			  <source src="https://www.youtube.com/embed/GljarFUrwvo">
			</audio>
		</div>
      </div>
    </div>
  </div>
  
  <div class="schduleCall popupWrap" id="vidoPopup02">
    <div class="popupWrapInnerWrap">
      <div class="videoIframe " id="vidoPopup">
        <div class="videoWrapper">
           <a href="#" class="closePopBtn" onClick="removeModel('vidoPopup01')"><i class="fa fa-remove closeChannel"></i></a>
          <iframe width="560" height="315" id="vfrm02" src="https://www.youtube.com/embed/GljarFUrwvo" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
			
			<audio id="audio" autoplay>
			  <source src="https://www.youtube.com/embed/GljarFUrwvo">
			</audio>
		</div>
      </div>
    </div>
  </div>
  
  <div class="schduleCall popupWrap" id="vidoPopup03">
    <div class="popupWrapInnerWrap">
      <div class="videoIframe " id="vidoPopup">
        <div class="videoWrapper">
           <a href="#" class="closePopBtn" onClick="removeModel('vidoPopup01')"><i class="fa fa-remove closeChannel"></i></a>
          <iframe width="560" height="315" id="vfrm03" src="https://www.youtube.com/embed/GljarFUrwvo" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
			
			<audio id="audio" autoplay>
			  <source src="https://www.youtube.com/embed/GljarFUrwvo">
			</audio>
		</div>
      </div>
    </div>
  </div>
  
  <div class="schduleCall popupWrap" id="vidoPopup04">
    <div class="popupWrapInnerWrap">
      <div class="videoIframe " id="vidoPopup">
        <div class="videoWrapper">
           <a href="#" class="closePopBtn" onClick="removeModel('vidoPopup01')"><i class="fa fa-remove closeChannel"></i></a>
          <iframe width="560" height="315" id="vfrm04" src="https://www.youtube.com/embed/GljarFUrwvo" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
			
			<audio id="audio" autoplay>
			  <source src="https://www.youtube.com/embed/GljarFUrwvo">
			</audio>
		</div>
      </div>
    </div>
  </div>
  <!--- PHY ---->
  <div class="schduleCall popupWrap" id="vidoPopup101">
    <div class="popupWrapInnerWrap">
      <div class="videoIframe ">
        <div class="videoWrapper">
           <a href="#" class="closePopBtn" onClick="removeModel('vidoPopup01')"><i class="fa fa-remove closeChannel"></i></a>
          <iframe width="560" height="315" id="vfrm101" src="https://www.youtube.com/embed/GljarFUrwvo" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
			
			<audio id="audio" autoplay>
			  <source src="https://www.youtube.com/embed/GljarFUrwvo">
			</audio>
		</div>
      </div>
    </div>
  </div>
  <div class="schduleCall popupWrap" id="vidoPopup102">
    <div class="popupWrapInnerWrap">
      <div class="videoIframe ">
        <div class="videoWrapper">
           <a href="#" class="closePopBtn" onClick="removeModel('vidoPopup01')"><i class="fa fa-remove closeChannel"></i></a>
          <iframe width="560" height="315" id="vfrm102" src="https://www.youtube.com/embed/GljarFUrwvo" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
			
			<audio id="audio" autoplay>
			  <source src="https://www.youtube.com/embed/GljarFUrwvo">
			</audio>
		</div>
      </div>
    </div>
  </div>
  <div class="schduleCall popupWrap" id="vidoPopup103">
    <div class="popupWrapInnerWrap">
      <div class="videoIframe ">
        <div class="videoWrapper">
           <a href="#" class="closePopBtn" onClick="removeModel('vidoPopup01')"><i class="fa fa-remove closeChannel"></i></a>
          <iframe width="560" height="315" id="vfrm103" src="https://www.youtube.com/embed/GljarFUrwvo" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
			
			<audio id="audio" autoplay>
			  <source src="https://www.youtube.com/embed/GljarFUrwvo">
			</audio>
		</div>
      </div>
    </div>
  </div>
  <div class="schduleCall popupWrap" id="vidoPopup104">
    <div class="popupWrapInnerWrap">
      <div class="videoIframe ">
        <div class="videoWrapper">
           <a href="#" class="closePopBtn" onClick="removeModel('vidoPopup01')"><i class="fa fa-remove closeChannel"></i></a>
          <iframe width="560" height="315" id="vfrm104" src="https://www.youtube.com/embed/GljarFUrwvo" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
			
			<audio id="audio" autoplay>
			  <source src="https://www.youtube.com/embed/GljarFUrwvo">
			</audio>
		</div>
      </div>
    </div>
  </div>
  <div class="schduleCall popupWrap" id="vidoPopup105">
    <div class="popupWrapInnerWrap">
      <div class="videoIframe" >
        <div class="videoWrapper">
           <a href="#" class="closePopBtn" onClick="removeModel('vidoPopup01')"><i class="fa fa-remove closeChannel"></i></a>
          <iframe width="560" height="315" id="vfrm105" src="https://www.youtube.com/embed/GljarFUrwvo" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
			
			<audio id="audio" autoplay>
			  <source src="https://www.youtube.com/embed/GljarFUrwvo">
			</audio>
		</div>
      </div>
    </div>
  </div>
  
  
  
  
  <div class="schduleCall popupWrap" id="vidoPopup11">
    <div class="popupWrapInnerWrap">
      <div class="videoIframe ">
        <div class="videoWrapper">
           <a href="#" class="closePopBtn" onClick="removeModel('vidoPopup11')"><i class="fa fa-remove closeChannel"></i></a>
          <iframe width="560" height="315" id="vfrm11" src="https://www.youtube.com/embed/bepP4zg2k3g" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>			
			<audio id="audio" autoplay>
			  <source src="https://www.youtube.com/embed/bepP4zg2k3g">
			</audio>
		</div>
      </div>
    </div>
  </div>
  
  <div class="schduleCall popupWrap" id="vidoPopup12">
    <div class="popupWrapInnerWrap">
      <div class="videoIframe ">
        <div class="videoWrapper">
           <a href="#" class="closePopBtn" onClick="removeModel('vidoPopup12')"><i class="fa fa-remove closeChannel"></i></a>
          <iframe width="560" height="315" id="vfrm12" src="https://www.youtube.com/embed/SGNLkNe424A" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
			
			<audio id="audio" autoplay>
			  <source src="https://www.youtube.com/embed/SGNLkNe424A">
			</audio>
		</div>
      </div>
    </div>
  </div>
  
  <div class="schduleCall popupWrap" id="vidoPopup13">
    <div class="popupWrapInnerWrap">
      <div class="videoIframe ">
        <div class="videoWrapper">
           <a href="#" class="closePopBtn" onClick="removeModel('vidoPopup13')"><i class="fa fa-remove closeChannel"></i></a>
          <iframe width="560" height="315" id="vfrm13" src="https://www.youtube.com/embed/bepP4zg2k3g" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
			
			<audio id="audio" autoplay>
			  <source src="https://www.youtube.com/embed/bepP4zg2k3g">
			</audio>
		</div>
      </div>
    </div>
  </div>
  
  <div class="schduleCall popupWrap" id="vidoPopup14">
    <div class="popupWrapInnerWrap">
      <div class="videoIframe-2 " >
        <div class="videoWrapper">
           <a href="#" class="closePopBtn" onClick="removeModel('vidoPopup14')"><i class="fa fa-remove closeChannel"></i></a>
          <iframe width="560" height="315" id="vfrm14" src="https://www.youtube.com/embed/iHg7299zL8M" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
			
			<audio id="audio" autoplay>
			  <source src="https://www.youtube.com/embed/iHg7299zL8M">
			</audio>
		</div>
      </div>
    </div>
  </div>
  
  <div class="schduleCall popupWrap" id="vidoPopup15">
    <div class="popupWrapInnerWrap">     
      <div class="videoIframe" >
        <div class="videoWrapper">
           <a href="#" class="closePopBtn" onClick="removeModel('vidoPopup15')"><i class="fa fa-remove closeChannel"></i></a>
          <iframe width="560" height="315" id="vfrm15" src="https://www.youtube.com/embed/bepP4zg2k3g" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
			
			<audio id="audio" autoplay>
			  <source src="https://www.youtube.com/embed/bepP4zg2k3g">
			</audio>
		</div>
      </div>
    </div>
  </div>

    ﻿</main>
<!--#footer-->
<footer id="footer">
  <!--.container-->
  <div class="container">
    <div class="footerMenu">
      <h3>Resources</h3>
      <ul class="footerLinks cf">
        <li><a href="https://www.egurutam.com/c_it/">Home</a></li>
        <li><a href="https://www.egurutam.com/c_it/privacy.php">Privacy Statement</a></li>
        <li><a href="https://www.egurutam.com/c_it/terms.php">Terms of Service</a></li>
        <li><a href="https://www.egurutam.com/c_it/refund-policy.php">Refund Policy</a></li>
        <li><a href="https://www.egurutam.com/c_it/contact-us.php">Contact</a></li>
      </ul>
    </div>
    <div class="footerText cf">
      <div class="copyRightText">
      <p>Copyright &copy; 2022 GURUTAM Innovations Pvt Ltd. All Rights Reserved.</p>
      </div>
      <div class="footerSocialIcons">
        <ul class="socialIcons cf">
          <li><a href="https://www.facebook.com/gurutamonline/" target="_blank" class="socialIcon facebook" title="Facebook"><i class="fa fa-facebook-f"></i></a></li>
          <li><a href="https://www.youtube.com/channel/UCziwoiTj-r3VOLkdEmTx3DA/videos" target="_blank" class="socialIcon twitter"  title="Youtube"><i class="fa fa-youtube-play"></i></a></li>
          
        </ul>
      </div>
    </div>
  </div>
  <!--/.container-->
</footer>
<!--/#footer-->
</div>
<!--/#wrapper-->
<a href="#top" title="Back to Top" id="backtotop"><i class="fa fa-angle-up"></i></a>

  
	<script src="https://www.egurutam.com/c_it/assets/jquery-min.js"></script>
	<script src="https://www.egurutam.com/c_it/assets/modernizr.js"></script>
	<script src="https://www.egurutam.com/c_it/assets/jquery.validate.min.js"></script>
	<script src="https://www.egurutam.com/c_it/assets/functions.js"></script>
	<script src="https://www.egurutam.com/c_it/assets/general.js"></script>
 


<script type="text/javascript">
  jQuery(document).ready(function($){
	  $("#thankYouMessagePop").show();	


	$('#someButton').click(function() {
		window.location.href = 'https://wa.me/918076111069';
		return false;
	});
  });
  
  function removeModel(id){
	  $(id).hide();
	  $('iframe').attr('src', $('iframe').attr('src'));
	  
  }
  
  function chngUrl(url,id){
	  //alert(url);
	  var $iframe = $('#' + id);	
	  $iframe.attr('src',url);
  }
  
  function redirectLink(){
	  window.open('https://wa.me/918076111069', '_blank');
  }

</script>

<script type="text/javascript">
  var _langChange = false;
  var _ChangeLang = function (_lang){
    var _langUrls = [];var _langUrls = JSON.parse('{"en":"https:\/\/www.egurutam.com\/app\/en","hi":"https:\/\/www.egurutam.com\/app\/hi"}');    if(_langChange){
      return;
    }
    if(_langUrls[_lang] !== undefined && _langUrls[_lang] != ''){
       _langChange = true;
      window.location = _langUrls[_lang];
    }
  }
</script>
</body>
</html>

