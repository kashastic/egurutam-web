<?php include('header.php'); ?>
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
<main id="main" class="innerContentArea">    
<!--#indexBanner-->
<!--<section id="innerBanner" class="innerBanner bgBackground activeBlock" style="background-image: url("https://www.egurutam.com/c_it/assets/inner-banner-img-new.jpg");">
    <img src="https://www.egurutam.com/c_it/assets/inner-banner-img-new.jpg" width="1600" height="643" alt="header-banner" title="header-banner">
    <div class="bannerCaption">
        <div class="container posRelative">
            <div class="bannerTextWrap">
                <h1>Languages<br>
                    </h1>
                <div class="breadCumWrap">
                    <ul class="breadCum">
                        <li><a href="#">Home</a></li>
                        <li><span>Languages</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>-->
<!--/#indexBanner-->

<!--#ourSolutions-->

<section id="ourSolutions" class=" contentBlockPart"  style="min-height:999px;">
  <div class="container">
   <div class="row">
  <div class="col-sm-6">
    <div class="container posRelative" style="text-align: justify;">
    <div class="inner-box"><div class="img"><img data-cke-saved-src="https://www.egurutam.com/c_it/assets/languages.png" src="https://www.egurutam.com/c_it/assets/languages.png" style="width:15%;"></div>
  </div>
      <h2 class="mrgB15"><span>Languages</span></h2>
      <span class="tagspan">In todays globalized multi cultural world where the mantra is World is our family, it is utmost important to have the findamental and advanced knowledge of languages. We at Gurtam teach our students following world leading languages enabling them to take their network and career to a new dimension.</span>
      
      <div class="colsBlockRow cf posRelative">
        <div class="colsBlockRow cf posRelative">
          
          
          
          <div class="colsBlock width80p">
            <ul class="bulletText twoCols checkBullets cf">
                <li>English</li>
<li>Hindi</li>
<li>German</li>
<li>French</li>
<li>Spanish</li>
            </ul>
            <br/><br/>
            
            <p>Please <a href="https://www.egurutam.com/c_it/contact-us.php">contact us</a> for further details.</p>

          </div>


          
          
        </div>
      </div>
    </div>
    </div>
    
     <div class="col-sm-6" style="float:right;"><img class="side-image" data-cke-saved-src="https://www.egurutam.com/c_it/assets/Language.png" src="https://www.egurutam.com/c_it/assets/Language.png"></div>
    
    
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
