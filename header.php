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
    <div class=""  style="padding:2px 2px 2px 2px;">
      <div class="headerLeft col-sm-2"> <a href="https://www.egurutam.com/c_it/" title="Gurutam"><img src="https://www.egurutam.com/c_it/assets/logo.png" alt="logo"/></a> </div>
      <div class="headerRight col-sm-10">
        <div id="mainNav" class="mainNavigation" style="float:right;">
          <div class="menuPart cf" style="margin-top:0px;">
            <ul id="nav">
              <li class="startup "><a href="https://www.egurutam.com/c_it/">Home</a></li>
              <li class="startup "><a href="https://www.egurutam.com/c_it/academics.php">Academics</a></li>
              <li class="startup "><a href="https://www.egurutam.com/c_it/compteative_exams_preprationss.php">Competitive</a></li>   
              
                    <li class="startup "><a href="https://www.egurutam.com/c_it/professional_courses.php">Courses</a></li>
                    <li class="startup "><a href="https://www.egurutam.com/c_it/soft_skills.php">Skills</a></li>
                    <li class="startup "><a href="https://www.egurutam.com/c_it/languages.php">Languages</a></li>
                    <li class="startup "><a href="https://www.egurutam.com/c_it/study_abroad.php">Study</a></li>
              
                      
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