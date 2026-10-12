<!DOCTYPE html>
<html dir="<?php echo ($front_setting->is_active_rtl) ? "rtl" : "ltr"; ?>" lang="<?php echo ($front_setting->is_active_rtl) ? "ar" : "en"; ?>">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title><?php echo $page['title']; ?></title>
      <meta name="title" content="<?php if(isset($page['meta_title'])){ echo $page['meta_title']; } ?>">
      <meta name="keywords" content="<?php if(isset($page['meta_keyword'])){ echo $page['meta_keyword']; } ?>">
      <meta name="description" content="<?php if(isset($page['meta_description'])){ echo $page['meta_description']; } ?>">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="shortcut icon" href="<?php echo base_url($front_setting->fav_icon); ?>" type="image/x-icon">
      <link href="<?php echo $base_assets_url; ?>css/bootstrap.min.css" rel="stylesheet">
      <link href="<?php echo $base_assets_url; ?>css/owl.carousel.css" rel="stylesheet">
      <link href="<?php echo $base_assets_url; ?>css/owl.carousel.min.css" rel="stylesheet">
      <link href="<?php echo $base_assets_url; ?>css/owl.theme.default.min.css" rel="stylesheet">
      <link href="<?php echo $base_assets_url; ?>css/font-awesome.min.css" rel="stylesheet">
      <link href="<?php echo $base_assets_url; ?>css/style.css" rel="stylesheet">
      <link href="<?php echo $base_assets_url; ?>css/magnific-popup.css" rel="stylesheet">
      <link href="<?php echo $base_assets_url; ?>css/style-gallery.css" rel="stylesheet">
      <link rel="stylesheet" href="<?php echo base_url(); ?>backend/dist/css/ss-print.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>backend/dist/css/animate1.css">
      <link rel="stylesheet" href="<?php echo $base_assets_url; ?>datepicker/bootstrap-datepicker3.css"/>
      <script type="text/javascript" src="<?php echo $base_assets_url; ?>js/jquery.min.js"></script>
      <script type="text/javascript" src="<?php echo $base_assets_url; ?>js/owl.carousel.js"></script>
      <script type="text/javascript" src="<?php echo base_url(); ?>backend/dist/js/wow.min.js"></script>
      <script src="<?php echo base_url(); ?>backend/dist/js/moment.min.js"></script>
      <!--file dropify-->
      <link rel="stylesheet" href="<?php echo base_url(); ?>backend/dist/css/dropify.min.css">
      <script src="<?php echo base_url(); ?>backend/custom/jquery.min.js"></script>
      <!--file dropify-->
      <script src="<?php echo base_url(); ?>backend/dist/js/dropify.min.js"></script>
      <script type="text/javascript">
         var base_url = "<?php echo base_url() ?>";
      </script>        
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>backend/dist/css/bootstrap-select.min.css">
      <script type="text/javascript" src="<?php echo base_url(); ?>backend/dist/js/bootstrap-select.min.js"></script>
      <script type="text/javascript">
         $(function () {
             $('.languageselectpicker').selectpicker();
         });
      </script>
      <?php        
         if ($front_setting->is_active_rtl) {
             ?>
      <link href="<?php echo $base_assets_url; ?>rtl/bootstrap-rtl.min.css" rel="stylesheet">
      <link href="<?php echo $base_assets_url; ?>rtl/style-rtl.css" rel="stylesheet">
      <?php
         }
         ?>
      <?php if ($this->module_lib->hasModule('online_course') &&  $this->module_lib->hasActive('online_course') ) { ?>
      <link rel="stylesheet" href="<?php echo $base_assets_url; ?>css/online-course.css"/>
      <?php } ?>
      <?php echo $front_setting->google_analytics; ?>
   </head>
   <body>
     
         <div class="topsection">
            <div class="header-top">
               <div class="auto-container">
                  <div class="outer-box">
                     <div class="header-top-left">
                        <div class="social-link-box-style1">
                           <p>Follow : </p>
                           <ul class="clearfix">
                              <li>
                                 <a href="#"><i class="fa fa-facebook"></i></a>
                              </li>
                              <li>
                                 <a href="#"><i class="fa fa-google-plus"></i></a>
                              </li>
                              <li>
                                 <a href="#"><i class="fa fa-instagram"></i></a>
                              </li>
                              <li>
                                 <a href="#"><i class="fa fa-twitter"></i></a>
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="header-top-right">
                        <div class="quick-link-box">
                           <div class="inner-title">
                              <span class="icon-launch"></span>
                              <p><i class="fa fa-launch"></i> Quick Links</p>
                           </div>
                           <div class="link-box">
                              <ul>
                                 <li><a href="#">Calendars</a></li>
                                 <li><a href="#">Directory</a></li>
                                 <li><a href="#">Visit</a></li>
                                 <li><a href="#">Careers</a></li>
                                 <li><a href="#">Give</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="toparea">
               <div class="container">
                  <div class="row mobile-view">
                     <div class=" col-md-1 col-sm-6 ser">
                        <img src="..//backend/themes/material_pink/images/doddappa.png"  class="mobile-logo1">
                     </div>
                     <div class=" col-md-4 col-sm-6 ser">
                        <p class="display-none-mob">Admission Hotline: <a href="tel:9379244007" class="text-dark">+91 9686868712 / 9606092606</a></p>
                     </div>
                     <div class=" col-md-4 col-sm-6 ser">
                        <img src="..//backend/themes/material_pink/images/logo.jpg"  class="mobile-logo">
                     </div>
                     <div class=" col-md-2 col-sm-6 ser">
                        <marquee  direction="left" class="msd">
                           Education is movement from darkness to light 
                        </marquee>
                     </div>
                     <div class=" col-md-1 col-sm-6 ser">
                        <img src="..//backend/themes/material_pink/images/appa.png"  class="mobile-logo2">
                     </div>
                  </div>
               </div>
            </div>
            <!--./toparea-->
         </div>
         <!--./topsection-->   
      <div id="alert" class="affix-top">
      <?php echo $header; ?>
      <?php echo $slider; ?>
      <?php if (isset($featured_image) && $featured_image != "") {
         ?>
      <?php
         }
         ?>
      <div>
         <div class="row">
            <?php
               $page_colomn = "spacet60 pt-0-mobile";
               
               if ($page_side_bar) {
               
                   $page_colomn = "col-md-9 col-sm-9";
               }
               ?>
            <div class="<?php echo $page_colomn; ?>">
               <?php echo $content; ?>
            </div>
            <?php
               if ($page_side_bar) {
                   ?>
            <div class="col-md-3 col-sm-3">
               <div class="sidebar">
                  <?php
                     if (in_array('news', json_decode($front_setting->sidebar_options))) {
                         ?>
                  <div class="catetab"><?php echo $this->lang->line('latest_news'); ?></div>
                  <div class="newscontent newsh250">
                     <div class="tickercontainer">
                        <div class="mask">
                           <ul id="ticker01" class="newsticker">
                              <?php
                                 if (!empty($banner_notices)) {
                                 
                                     foreach ($banner_notices as $banner_notice_key => $banner_notice_value) {
                                         ?>
                              <li>
                                 <a href="<?php echo site_url('read/' . $banner_notice_value['slug']) ?>">
                                    <div class="date"><?php echo date('d', strtotime($banner_notice_value['date'])); ?><span><?php echo date('F', strtotime($banner_notice_value['date'])); ?></span></div>
                                    <?php echo $banner_notice_value['title']; ?>
                                 </a>
                              </li>
                              <?php
                                 }
                                 }
                                 ?>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <!--./newscontent-->
                  <?php
                     }
                     ?>
               </div>
               <!--./sidebar-->
            </div>
            <?php
               }
               ?>
         </div>
         <!--./row-->
      </div>
      <!--./container-->
      <?php echo $footer; ?>
      <script src="<?php echo $base_assets_url; ?>js/bootstrap.min.js"></script>
      <script src="<?php echo $base_assets_url; ?>js/owl.carousel.min.js"></script>
      <script type="text/javascript" src="<?php echo $base_assets_url; ?>js/jquery.waypoints.min.js"></script>
      <script type="text/javascript" src="<?php echo $base_assets_url; ?>js/jquery.counterup.min.js"></script>
      <script type="text/javascript" src="<?php echo $base_assets_url; ?>js/jquery-2.2.4.min.js"></script>
      <script type="text/javascript" src="<?php echo $base_assets_url; ?>js/plugins.js"></script>
      <script type="text/javascript" src="<?php echo $base_assets_url; ?>js/wow.min.js"></script>
      <script type="text/javascript" src="<?php echo $base_assets_url; ?>js/jquery.meanmenu.min.js"></script>
      <script type="text/javascript" src="<?php echo $base_assets_url; ?>js/jquery.scrollUp.min.js"></script>
      <script type="text/javascript" src="<?php echo $base_assets_url; ?>js/isotope.pkgd.min.js"></script>
      <script type="text/javascript" src="<?php echo $base_assets_url; ?>js/jquery.magnific-popup.min.js"></script>
      <script type="text/javascript" src="<?php echo $base_assets_url; ?>js/main.js"></script>
      <script src="<?php echo $base_assets_url; ?>js/ss-lightbox.js"></script>
      <script src="<?php echo $base_assets_url; ?>js/custom.js"></script>
      <!-- Include Date Range Picker -->
      <script type="text/javascript" src="<?php echo $base_assets_url; ?>datepicker/bootstrap-datepicker.min.js"></script>
      <script type="text/javascript">
         $(function () {
             jQuery('img.svg').each(function () {
                 var $img = jQuery(this);
                 var imgID = $img.attr('id');
                 var imgClass = $img.attr('class');
                 var imgURL = $img.attr('src');
         
                 jQuery.get(imgURL, function (data) {
                     // Get the SVG tag, ignore the rest
                     var $svg = jQuery(data).find('svg');
         
                     // Add replaced image's ID to the new SVG
                     if (typeof imgID !== 'undefined') {
                         $svg = $svg.attr('id', imgID);
                     }
                     // Add replaced image's classes to the new SVG
                     if (typeof imgClass !== 'undefined') {
                         $svg = $svg.attr('class', imgClass + ' replaced-svg');
                     }
         
                     // Remove any invalid XML tags as per http://validator.w3.org
                     $svg = $svg.removeAttr('xmlns:a');
         
                     // Check if the viewport is set, else we gonna set it if we can.
                     if (!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {
                         $svg.attr('viewBox', '0 0 ' + $svg.attr('height') + ' ' + $svg.attr('width'))
                     }
         
                     // Replace image with new SVG
                     $img.replaceWith($svg);
         
                 }, 'xml');
         
             });
         });
         
      </script>
   </body>
</html>