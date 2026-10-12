<?php $cookie_consent	=	$this->customlib->cookie_consent();
if(!empty($cookie_consent)){ ?>
<div id="cookieConsent" class="cookieConsent"> 
    <?php echo $cookie_consent; ?> <a href="<?php echo base_url() . "page/cookie-policy" ?>" target="_blank" ></a> <a onclick="setsitecookies()" class="cookieConsentOK"><?php echo $this->lang->line('accept') ?></a>
</div>
<?php } ?>
<div ><img src="..//backend/themes/material_pink/images/footer-bg.png"  class="mobile-kj"style="    background-color: #4f5de4;"></div>
<footer>

<div id="mySidenav" class="icon-bar res-social">
  <a href="#" target="_blank" id="a1"><i class="fa fa-facebook"></i><p>Facebook</p></a>
  <a href="#" target="_blank" id="gogle"><i class="fa fa-google-plus"></i><p>GooglePlus</p></a>
  <a href="#" target="_blank" id="projects"><i class="fa fa-envelope-o"></i><p>Enquiry</p></a>
  
  <a href="#" target="_blank" id="contact"><i class="fa fa-instagram"></i><p>Instagram</p></a>
  <a href="https://api.whatsapp.com/send?phone=919890682781&amp;text=Hi%20we%20need%20help%20regarding%20something" target="_blank" id="con1">
            <i class="fa fa-whatsapp hh1"></i> <p>Whatsapp</p>
         </a>
		 <a href="#" target="_blank" id="con2">
            <i class="fa fa-phone hh1"></i> <p>Call Now</p>
         </a>
       
</div>
<a href="tel:+919886733599">
               <img src="https://demo2.shikshasagarhighschool.edu.in/uploads/gallery/media/1703235962-8195949436585517abd310!callus.png?1703235963" class="float1 my-float phone-size">
               </a>
			   <a href="https://api.whatsapp.com/send?phone=919886733599&amp;" target="_blank">
               <img src="https://demo2.shikshasagarhighschool.edu.in/uploads/gallery/media/1703239637-191581329365855fd59396d!whats-app.png?1703239637" class="float my-float phone-size">
               </a>
<?php if ($this->module_lib->hasModule('online_course') && $this->module_lib->hasActive('online_course')) { ?>        
    <script src="<?php echo base_url(); ?>backend/js/online_course.js"></script>           
<?php } ?>
    <div class="container spacet40 spaceb40">
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <h3 class="fo-title">About Us</h3>
                <p>The Sharnbasveshwar Vidya Vardhak Sangha was founded in 1901 by the 6th peethadhipati, made a humble, yet a noble beginning with its first school housed in Mahadasoha - Mahamane the spiritual abode. Then onwards it has never looked back and has grown into leaps and bounds. </p>
				<div class="widget dark">
            <h5 class="widget-title mb-10">Connect With Us</h5>
            <ul class="styled-icons icon-dark mt-20">
              <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".1s" data-wow-offset="10" style="visibility: visible; animation-duration: 1.5s; animation-delay: 0.1s;"><a href="#" data-bg-color="#3B5998" style="background: rgb(59, 89, 152) !important;"><i class="fa fa-facebook"></i></a></li>
              <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".2s" data-wow-offset="10" style="visibility: visible; animation-duration: 1.5s; animation-delay: 0.2s;"><a href="#" data-bg-color="#02B0E8" style="background: rgb(2, 176, 232) !important;"><i class="fa fa-twitter"></i></a></li>
              <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".3s" data-wow-offset="10" style="visibility: visible; animation-duration: 1.5s; animation-delay: 0.3s;"><a href="#" data-bg-color="#05A7E3" style="background: rgb(5, 167, 227) !important;"><i class="fa fa-skype"></i></a></li>
              <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".4s" data-wow-offset="10" style="visibility: visible; animation-duration: 1.5s; animation-delay: 0.4s;"><a href="#" data-bg-color="#A11312" style="background: rgb(161, 19, 18) !important;"><i class="fa fa-google-plus"></i></a></li>
              <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".5s" data-wow-offset="10" style="visibility: visible; animation-duration: 1.5s; animation-delay: 0.5s;"><a href="#" data-bg-color="#C22E2A" style="background: rgb(194, 46, 42) !important;"><i class="fa fa-youtube"></i></a></li>
            </ul>
          </div>
            </div><!--./col-md-3-->

            <div class="col-md-4 col-sm-6">
                <h3 class="fo-title"> Useful Links</h3>
               <ul class="list-border">
              <li><a href="#">Home</a></li>
              <li><a href="#">About</a></li>
             
			 
              <li><a href="#">Gallery</a></li>
              <li><a href="#">Contact Us</a></li>
            </ul>
            </div><!--./col-md-3-->

            <div class="col-md-4 col-sm-6">
                <h3 class="fo-title">Reach Us</h3>
                <ul class="list-border">
              <li class="m-0 pl-10 pr-10"> <i class="fa fa-map-marker text-theme-color-2 mr-5"></i> <a class="text-gray" href="#">The Appa Public School,
Sharan Nagar, Kalaburagi (Gulberga),
Karnataka, India, 585103</a> </li>
              <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-theme-color-2 mr-5"></i> <a class="text-gray" href="#">+91 9686868712 / 9606092606</a> </li>
              <li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-theme-color-2 mr-5"></i> <a class="text-gray" href="#">info@appapublicschool.com</a> </li>
              <li class="m-0 pl-10 pr-10"> <i class="fa fa-globe text-theme-color-2 mr-5"></i> <a class="text-gray" href="#">www.appapublicschool.com</a> </li>
            </ul>


            </div>      
        </div><!--./row-->
        <div class="col-md-3 shy-foot">
        <div class="containerdr">
  <img src="..//backend/themes/material_pink/images/footer-small.jpg" alt="Avatar" class="imagesd">
  <div class="overlay">
  <a href="#" class="icon" title="User Profile">
    <i class="fa fa-instagram"></i>
  </a>
  </div>
</div>
</div>
<div class="col-md-3 shy-foot">
        <div class="containerdr1">
  <img src="..//backend/themes/material_pink/images/footer-small1.jpg" alt="Avatar" class="imagesd1">
  <div class="overlay1">
  <a href="#" class="icon" title="User Profile">
    <i class="fa fa-instagram"></i>
  </a>
  </div>
</div>
</div>
<div class="col-md-3 shy-foot">
        <div class="containerdr2">
  <img src="..//backend/themes/material_pink/images/footer-small2.jpg" alt="Avatar" class="imagesd2">
  <div class="overlay2">
  <a href="#" class="icon" title="User Profile">
    <i class="fa fa-instagram"></i>
  </a>
  </div>
</div>
</div>
<div class="col-md-3 shy-foot">
        <div class="containerdr3">
  <img src="..//backend/themes/material_pink/images/footer-small3.jpg" alt="Avatar" class="imagesd3">
  <div class="overlay3">
  <a href="#" class="icon" title="User Profile">
    <i class="fa fa-instagram"></i>
  </a>
  </div>
</div>
</div>





      
          
     
</div><!--./container-->

<div class="copy-right">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 text-center">
               
            <p class="font-14 text-black-777 m-0 mb-10">Copyright ©2024 Appa Public School. All Rights Reserved</p>
          
            </div>
        </div><!--./row-->
    </div><!--./container-->
</div><!--./copy-right-->

</footer>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<script>
    function setsitecookies() {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>welcome/setsitecookies",
            data: {},
            success: function (data) {
                $('.cookieConsent').hide();

            }
        });
    }
	
	function check_cookie_name(name)
    {
        var match = document.cookie.match(new RegExp('(^| )' + name + '=([^;]+)'));
        if (match) {
            console.log(match[2]);
            $('.cookieConsent').hide();
        }
        else{
           $('.cookieConsent').show();
        }
    }
    check_cookie_name('sitecookies');
</script>