<header>
	<link href="<?php echo base_url(); ?>backend/toast-alert/toastr.css" rel="stylesheet"/>
    <script src="<?php echo base_url(); ?>backend/toast-alert/toastr.js"></script>

<style type="text/css">

form .form-bottom button.btn {
    min-width: 105px;
}

form .form-bottom .input-error {
    border-color: #d03e3e;
    color: #d03e3e;
}

form.gauthenticate-form {
    display: none;
}
</style>

    <?php $currency_symbol = $this->customlib->getSchoolCurrencyFormat();?>
    <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-5">
                    <a class="logo" href="<?php echo base_url(); ?>"><img src="<?php echo base_url($front_setting->logo); ?>" alt=""></a>
                </div><!--./col-md-4-->
				 <div class="col-md-9 col-sm-5">
				  <div class="navborder">
        <div class="container">
            <div class="row">
                <nav class="navbar">
                    <div class="navbar-header">
					<div id="main">
					<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
   <a href="https://demo2.shikshasagarhighschool.edu.in" class="side-logo"><img src="<?= base_url(); ?>./uploads/school_content/logo/1695709515-15756017286512794bdb675!1693293069-45390664164ed9a0dec1e5!shs.png" alt=""></a>
  <a href="https://demo2.shikshasagarhighschool.edu.in">Home</a>
    <button class="dropdown-btn">About Us
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="<?= base_url(); ?>page/overview">Overview</a>
    <a href="<?= base_url(); ?>page/chairmans-message">Chairman's Message</a>
   <a href="<?= base_url(); ?>page/principals-message">Principal's Message</a>
   <a href="<?= base_url(); ?>page/board-of-trustees">Board of Trustees</a>
   <a href="<?= base_url(); ?>page/teachers">Our Teachers</a>
  </div>
  <button class="dropdown-btn">Admission 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
  <a href="<?= base_url(); ?>page/admission-procedure">Admission Procedure</a>
  <a href="<?= base_url(); ?>page/apply-online">Apply Online</a>
  <a href="<?= base_url(); ?>page/terms-conditions">Terms &amp; Conditions</a>
  </div>
  <a href="<?= base_url(); ?>page/academics">Academics</a>
  <button class="dropdown-btn">Facilities  
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
  
<a href="<?= base_url(); ?>page/science-lab"  >Science Lab</a>
<a href="<?= base_url(); ?>page/computer-lab"  >Computer Lab</a>
<a href="<?= base_url(); ?>page/smart-class"  >Smart Class</a>
<a href="<?= base_url(); ?>page/library"  >Library</a>
<a href="<?= base_url(); ?>page/transportation"  >Transportation</a>
<a href="<?= base_url(); ?>page/infrastructure"  >Infrastructure</a>
<a href="<?= base_url(); ?>page/scouts-guides"  >Scouts & Guides</a>
  </div>
   <a href="<?= base_url(); ?>page/news-events" >News & Events</a>
   <button class="dropdown-btn">Gallery  
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
  
 <a href="<?= base_url(); ?>page/photo-gallery"  >Photo Gallery</a>
<a href="<?= base_url(); ?>page/video-gallery"  >Video Gallery</a>
  </div>
     <a href="<?= base_url(); ?>page/contact-us" >Contact Us</a>
	  <a href="<?= base_url(); ?>site/userlogin" >Login</a>
	 <ul class="list-sc">
	<li>  <h3>Scholerly Education</h3></li> 
	 <li>  <i class="fa fa-map-marker text-theme-color-2 mr-5"></i> 203, 17th Cross, 6th Main, 2nd Block,  Rajajinagar, Bangalore - 585327</li> 
      <li>   <i class="fa fa-phone text-theme-color-2 mr-5"></i> +91 9886733599</li> 
      <li>     <i class="fa fa-envelope-o text-theme-color-2 mr-5"></i> info@scholerlydemo.com</li> 
       <li>   <i class="fa fa-globe text-theme-color-2 mr-5"></i> www.yourdomain.com</li> 
           
		   </ul>
		   <ul class="styled-icons icon-dark list-sc">
              <li ><a href="#" data-bg-color="#3B5998" style="background: rgb(59, 89, 152) !important;padding:0px;"><i class="fa fa-facebook"></i></a></li>
              <li ><a href="#" data-bg-color="#02B0E8" style="background: rgb(2, 176, 232) !important;padding:0px;"><i class="fa fa-twitter"></i></a></li>
              <li ><a href="#" data-bg-color="#05A7E3" style="background: rgb(5, 167, 227) !important;padding:0px;"><i class="fa fa-skype"></i></a></li>
              <li ><a href="#" data-bg-color="#A11312" style="background: rgb(161, 19, 18) !important;padding:0px;"><i class="fa fa-google-plus"></i></a></li>
              <li ><a href="#" data-bg-color="#C22E2A" style="background: rgb(194, 46, 42) !important;padding:0px;"><i class="fa fa-youtube"></i></a></li>
            </ul>

</div>
					 <button class="openbtn" onclick="openNav()">☰ </button>  
					 </div>
                      
                    </div>

                    <div class="collapse navbar-collapse" id="navbar-collapse-3">
                        <?php 
if($layout_type){
?>
  <ul class="nav navbar-nav">
                            <?php
                            foreach ($main_menus as $menu_key => $menu_value) {
                            
                                $submenus = false;
                                $cls_menu_dropdown = "";
                                $menu_selected = "";             
                                
                                if ($menu_value['page_slug'] == $active_menu) {
                                    $menu_selected = "active";
                                }
                                if (!empty($menu_value['submenus'])) {
                                    $submenus = true;
                                    $cls_menu_dropdown = "dropdown";
                                }
                                ?>

                                <li class="<?php echo $menu_selected . " " . $cls_menu_dropdown; ?>" >
                                    <?php
                                    if (!$submenus) {
                                        $top_new_tab = '';
                                        $url = '#';
                                        if ($menu_value['open_new_tab']) {
                                            $top_new_tab = "target='_blank'";
                                        }
                                        if ($menu_value['ext_url']) {
                                            $url = $menu_value['ext_url_link'];
                                        } else {
                                            $url = site_url($menu_value['page_url']);
                                        }
                                        ?>

                                        <a href="<?php echo $url; ?>" <?php echo $top_new_tab; ?>><?php echo $menu_value['menu']; ?></a>

                                        <?php
                                    } else {
                                        $child_new_tab = '';
                                        $url = '#';
                                        ?>
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $menu_value['menu']; ?> <b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <?php
                                            foreach ($menu_value['submenus'] as $submenu_key => $submenu_value) {
                                                if ($submenu_value['open_new_tab']) {
                                                    $child_new_tab = "target='_blank'";
                                                }
                                                if ($submenu_value['ext_url']) {
                                                    $url = $submenu_value['ext_url_link'];
                                                } else {
                                                    $url = site_url($submenu_value['page_url']);
                                                }
                                                ?>
                                                <li><a href="<?php echo $url; ?>" <?php echo $child_new_tab; ?> ><?php echo $submenu_value['menu'] ?></a></li>
                                                <?php
                                            }
                                            ?>

                                        </ul>
                                        <?php
                                    }
                                    ?>
                                </li>
                                <?php
                            }
                            ?>
                        </ul>
<?php
}else{
    ?>
    <ul class="nav navbar-nav">
        <li class="active" >
            <a href="<?php echo site_url('online_admission'); ?>" ><?php echo $this->lang->line('online_admission'); ?></a>
        </li>
    </ul>
<?php
}
 ?>
                      
                    </div><!-- /.navbar-collapse -->
                </nav><!-- /.navbar -->
            </div>
        </div>   
    </div> 
	</div>
                
            </div><!--./row-->
        </div><!--./container-->
    
  

</header>
</div>

<!---   Guest Signup  --->
<div id="myModal" class="modal fade" role="dialog" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header modal-header-small">
                <button type="button" class="close closebtnmodal" data-dismiss="modal">&times;</button>
                <h4 ><?php echo $this->lang->line('guest_registration') ?></h4>
            </div>
            <form action="<?php echo base_url() . 'course/guestsignup' ?>" method="post" class="signupform" id="signupform">
                <div class="modal-body">
                    <div class="form-group">
                        <label><?php echo $this->lang->line('name'); ?></label><small class="req"> *</small>
                        <input type="text" class="form-control reg_name" name="name" id="name" autocomplete="off">
                        <span class="text-danger" id="error_refno"></span>
                    </div>
                    <div class="form-group mb10">
                        <label><?php echo $this->lang->line('email_id'); ?></label><small class="req"> *</small>
                        <input type="text"  class="form-control reg_email"  name="email" id="email" autocomplete="off" >
                        <span class="text-danger" id="error_dob"></span>
                    </div>
                    <div class="form-group mb10">
                        <label><?php echo $this->lang->line('password'); ?></label><small class="req"> *</small>
                        <input type="password"  class="form-control reg_password"  name="password" id="password" autocomplete="off" >
                        <span class="text-danger" id="error_dob"></span>
                    </div>
                    <div id="load_signup_captcha"></div>
                </div>
                <div class="modal-footer">
                    <button type="button"  class="modalclosebtn btn  mdbtn" onclick="openmodal()"><?php echo $this->lang->line('login'); ?></button>
                    <button type="submit" id="signupformbtn" class="onlineformbtn mdbtn" ><?php echo $this->lang->line('signup'); ?> </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!---   Guest Login  --->
<div id="loginmodal" class="modal fade" role="dialog" tabindex="-1">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header modal-header-small">
                <button type="button" class="close closebtnmodal" data-dismiss="modal">&times;</button>
                <h4 class=><?php echo $this->lang->line('login') ?> </h4>
            </div>
            <form action="<?php echo site_url('course/guestlogin') ?>" method="post" class="loginform" id="loginform">
                <div class="modal-body">
                    <div class="form-group mb10">
                        <label><?php echo $this->lang->line('email_id'); ?></label><small class="req"> *</small>
                        <input type="text"  class="form-control login_email"  name="username" id="username" autocomplete="off">
                        <span class="text-danger" id="error_dob"></span>
                    </div>
                    <div class="form-group mb10">
                        <label><?php echo $this->lang->line('password'); ?></label><small class="req"> *</small>
                        <input type="password"  class="form-control login_password"  name="password" id="password" autocomplete="off">
                        <input type="hidden"  class="form-control"  name="checkout_status" id="checkout_status"  autocomplete="off" >
                        <span class="text-danger" id="error_dob"></span>
                    </div>
                    <div id="load_login_captcha"></div>
                </div>
                <div class="modal-footer">
                    <a href="#" class="pull-left forgotbtn" data-toggle="modal" data-target="#forgotmodal"><i class="fa fa-key"></i> <?php echo $this->lang->line('forgot_password'); ?></a>

                    <button type="button" class="signup modalclosebtn btn mdbtn" data-dismiss="modal"><?php echo $this->lang->line('signup'); ?> </button>
                    <button type="submit" id="loginformbtn" class="onlineformbtn mdbtn" ><?php echo $this->lang->line('submit'); ?></button>
                </div>
            </form>
            <form action="<?php echo site_url('course/user_submit_login') ?>" method="post" class="gauthenticate-form" id="gauthenticate-form">
                <div class="modal-body">
                   
                  <div class="form-group mb10">
                        <label>Verification Code</label><small class="req"> *</small>
                        <input type="text"  class="form-control gauth_code"  name="gauth_code" id="gauth_code" autocomplete="off" >
                       
                        <span class="text-danger" id="error_gauth_code"></span>
                    </div>
                    
                </div>
                <div class="modal-footer">

                    <a href="#" class="pull-left forgotbtn" data-toggle="modal" data-target="#forgotmodal"><i class="fa fa-key"></i> <?php echo $this->lang->line('forgot_password'); ?></a>

                    <button type="button" class="signup modalclosebtn btn mdbtn" data-dismiss="modal"><?php echo $this->lang->line('signup'); ?> </button>
                    <button type="submit" id="loginformbtn" class="onlineformbtn mdbtn" data-loading-text="<i class='fa fa-spinner fa-spin '></i> wait..."><?php echo $this->lang->line('submit'); ?></button>



                </div>
            </form>
        </div>
    </div>
</div>

<div id="forgotmodal" class="modal fade" role="dialog" tabindex="-1">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header modal-header-small">
                <button type="button" class="close closebtnmodal" data-dismiss="modal">&times;</button>
                <h4 class=><?php echo $this->lang->line('forgot_password'); ?></h4>
            </div>
            <form action="#" method="post" class="loginform" id="forgotform">
                <div class="modal-body">
                    <div class="form-group mb10">
                        <label><?php echo $this->lang->line('email_id'); ?></label><small class="req"> *</small>
                        <input type="email" class="form-control" name="username" id="email" autocomplete="off">
                        <span class="text-danger" id="error_email"></span>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button"  class="modalclosebtn btn  mdbtn" onclick="openmodal()"><?php echo $this->lang->line('login'); ?></button>
                    
                    <button type="submit" id="forgotformbtn" class="onlineformbtn mdbtn" ><?php echo $this->lang->line('submit'); ?></button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
$(document).ready(function () { 
    $('#myModal,#forgotmodal,#loginmodal').modal({
        backdrop: 'static',
        keyboard: false,
        show: false
    });
});
</script> 
<script>

$(document).on('change','.currency_list',function(e){ 
    let currency_id=$(this).val();
    $.ajax({
        type: 'POST',
        url: base_url+'welcome/changeCurrencyFormat',
        data: {'currency_id':currency_id},
        dataType: 'json',
        beforeSend: function() {
             
        },
        success: function(data) {          
            window.location.reload();
        },
        error: function(xhr) { // if error occured
    
        },
        complete: function() {
            
        }
     
    });
});
</script>