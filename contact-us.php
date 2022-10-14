<?php 
if(isset($_REQUEST['submit']))
{
	$to1=$_REQUEST['email'];
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
	<p style='font-size: 16px; font-weight: bold;margin: 10px 15px;text-align:left;'>Dear ".$_REQUEST['fullName'].",</p>
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
			<p style='margin: 10px 15px 5px; '>Name: ".$_REQUEST['fullName']."</p>
		</td>
	</tr>";
	
	$message12.="<tr>
		<td style='font-family:Arial, Helvetica, sans-serif; font-size:13px;'>
			<p style='margin: 10px 15px 5px;'>Email: ".$_REQUEST['email']."</p>
		</td>
	</tr>";
	
	$message12.="<tr>
		<td style='font-family:Arial, Helvetica, sans-serif; font-size:13px;'>
			<p style='margin: 10px 15px 5px; '>Contact No: ".$_REQUEST['phone']."</p>
		</td>
	</tr>";
	
	$message12.="<tr>
		<td style='font-family:Arial, Helvetica, sans-serif; font-size:13px;'>
			<p style='margin: 10px 15px 5px; '>Company: ".$_REQUEST['address']."</p>
		</td>
	</tr>";
	
	
	
	$message12.="<tr>
		<td style='font-family:Arial, Helvetica, sans-serif; font-size:13px;'>
			<p style='margin: 10px 15px 5px; '>Message: ".$_REQUEST['message']."</p>
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
<?php include('header.php'); ?>
<br/><br/><br/><br/>
<main id="main" class="innerContentArea">    
<!--#indexBanner-->
<!--<section id="innerBanner" class="innerBanner bgBackground activeBlock" style="background-image: url("/app/assets/images/inner-banner-img-new.jpg");">
  <img src="https://www.egurutam.com/c_it/assets/inner-banner-img-new.jpg" width="1600" height="643" alt="header-banner" title="header-banner">
  <div class="bannerCaption">
    <div class="container posRelative">
      <div class="bannerTextWrap">
        <h1>Contact Us<br> </h1>
        <div class="breadCumWrap">
          <a href="#" class="breadCumIocn">Links Breadcum</a>
          <ul class="breadCum">
            <li><a href="#">Home</a></li>
            <li><span>Contact Us</span></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>-->
<!--/#indexBanner-->
<!--#ourSolutions-->
<section id="getInTouch" class="getInTouch contentBlockPart activeBlock"  style="min-height:999px;">
    <div class="container">.
        <div class="getInTouchFormWrap">
            <div class="getInTouchFormInner11">
                <div class="centerHeading">
                    <h2>Contact Us</h2>
                    <p>We’re ready to Lead you into the Future </p>
                </div>
                <div class="getInTouchFormOuter11">
                <div style="color:#f00;text-align: center;
    padding-bottom: 20px;"><?php if($msg !=''){ echo $msg;} ?></div>
                                    <form method="post" accept-charset="utf-8" id="getInTouchForm" class="form-contact"><div style="display:none;"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="b187a9a4fc45a33f19b34245f3800c7eaa0846d2d2dffa72f02c34ffab967ec1d06f58744297774c83f30a5b701eef2418816c92db748bf52cd1129e0275e891"/></div>                    <div class="feildRow cf">
                      <div class="feildCol">
                        <div class="feildInput">
                          <input type="text" id="fullname" name="fullName"  placeholder="Full Name" required>
                          <label for="fullname">Full Name <em>*</em></label>
                          <i class="fa fa-user"></i> 
                        </div>
                      </div>
                      <div class="feildCol">
                        <div class="feildInput">
                          <input type="text" id="address" name="address"  placeholder="Company Name" required>
                          <label for="company_name">Address <em>*</em></label>
                          <i class="fa fa-building"></i> 
                        </div>
                      </div>
                    </div>

                    <div class="feildRow cf">
                      <div class="feildCol">
                        <div class="feildInput">
                          <input type="text" id="phone" name="phone"  placeholder="Phone" required>
                          <label for="phone">Phone <em>*</em></label>
                          <i class="fa fa-phone"></i> 
                        </div>
                      </div>
                      <div class="feildCol">
                        <div class="feildInput">
                          <input type="text" id="email" name="email"  placeholder="Email" required>
                          <label for="email">Email <em>*</em></label>
                          <i class="fa fa-at"></i> 
                        </div>
                      </div>
                    </div>

                    <div class="feildRow cf fullWidth messageFeild">
                      <div class="feildCol">
                        <div class="feildInput">
                          <textarea id="message" name="message" maxlength="500"
                              placeholder="Message"></textarea>
                          <label for="message">Message</label>
                          <i class="fa fa-envelope-o"></i>
                        </div>
                      </div>
                    </div>

                    <div class="btnRowWithCaptch  cf">
                      <!--<div class="captachWrap feildRow fullWidth cf">
                        <div class="feildCol">
                          <div class="feildInput">
                            <input type="checkbox" id="captcha" name="captcha">
                            <label for="captcha">I am not a Robot</label>
                          </div>
                        </div>
                      </div>-->
                      <div class="btnRight">
                        <button class="commonBtn btn" type="submit" name="submit">Submit</button>                      </div>
                    </div>
                  </form>                </div>
                <div class="contactInfo">
                    <h4>Contact Information</h4>
                    <div class="contactInfolist">
                        <ul>
                            <li class="contIcon contIcon1">+91 80761 11069</li>
                            <li class="contIcon contIcon2"><a href="#" title="mailto:info@gurutam.in">info@gurutam.in</a></li>
                        </ul>
                    </div>
                    <h4>Follow us on</h4>
                    <ul class="contSocials">
                        <!--<li><a href="#" title="Twitter"><em class="fa fa-twitter"></em></a></li>-->
                        <li><a href="https://www.facebook.com/gurutamonline/" title="Facebook"><em class="fa fa-facebook"></em></a></li>
                        <li><a href="https://www.youtube.com/channel/UCziwoiTj-r3VOLkdEmTx3DA/videos" title="Youtube"><em class="fa fa-youtube"></em></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/#ourSolutions-->

    </main>

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

   <!-- <noscript class="jsRequired">
This page uses Javascript. Your browser either doesn't support Javascript or you have it turned off. To see this page as it is meant to appear please use a Javascript enabled browser.
</noscript>
<style type="text/css">
	.jsRequired {
	    display: block;
	    background-color: #C00;
	    color: #fff;
	    width: 100%;
	    line-height: 30px;
	    text-align: center;
	    font-size: 14px;
	    border: 0 none;
	}
</style>-->
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
