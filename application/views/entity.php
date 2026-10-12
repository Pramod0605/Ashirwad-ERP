<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="#424242" />
        <title>Login : <?php echo $name; ?></title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="<?php echo base_url(); ?>backend/usertemplate/assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>backend/usertemplate/assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>backend/usertemplate/assets/css/form-elements.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>backend/usertemplate/assets/css/style.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>backend/usertemplate/assets/css/jquery.mCustomScrollbar.min.css">
    </head>

    <body>
        <!-- Top content -->
        <div class="top-content">

            <div class="inner-bg">

                <div class="container-fluid">
                    <div class="row">
                        <?php
 
$offset       = "";
$bgoffsetbg   = "bgoffsetbg";
$bgoffsetbgno = "";
if (empty($notice)) {
    // $empty_notice = 1;
    // $offset       = "col-md-offset-4";
    // $bgoffsetbg   = "";
    // $bgoffsetbgno = "bgoffsetbgno";
}
?>
                        <div class="<?php echo $bgoffsetbg; ?>">

                            <div class="col-lg-12 col-md-12 col-sm-12 nopadding <?php echo $bgoffsetbgno; ?> <?php echo $offset; ?>">
                                <div class="loginbg" style="margin-top:15%; margin-bottom:15%">
                                    <div class="form-top">
                                        <div class="form-top-left logowidth text-center">
                                            <img src="<?php echo base_url(); ?>uploads/school_content/admin_logo/<?php echo $this->setting_model->getAdminlogo();?>" />
                                        </div>
                                    </div>
                                    <div class="form-bottom">
                                        <h3 class="font-white"></h3>
                                        <?php
if (isset($error_message)) {
    echo "<div class='alert alert-danger'>" . $error_message . "</div>";
}
?>
                                        <?php
if ($this->session->flashdata('message')) {
    echo "<div class='alert alert-success'>" . $this->session->flashdata('message') . "</div>";
}
;
?>

                                        <form action="<?php echo site_url('entity/loadconfiguration') ?>" method="post">
                                            <?php echo $this->customlib->getCSRF(); ?>
                                            <div class="form-group has-feedback">
                                                <label></label>
                                                <input type="text" name="entity_code" value="" placeholder="Entity code" class="form-username form-control" id="entity_code">
                                                <span class="fa fa-database form-control-feedback"></span>
                                            </div>
                                            <button type="submit" class="btn">Load</button>
                                        </form>
                                
                                    </div>
                                </div>
                            </div>
                             
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="<?php echo base_url(); ?>backend/usertemplate/assets/js/jquery-1.11.1.min.js"></script>
        <script src="<?php echo base_url(); ?>backend/usertemplate/assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>backend/usertemplate/assets/js/jquery.backstretch.min.js"></script>
        <script src="<?php echo base_url(); ?>backend/usertemplate/assets/js/jquery.mCustomScrollbar.min.js"></script>
        <script src="<?php echo base_url(); ?>backend/usertemplate/assets/js/jquery.mousewheel.min.js"></script>
    </body>
</html>
<script type="text/javascript">
    $(document).ready(function () {
        $('.login-form input[type="text"], .login-form input[type="password"], .login-form textarea').on('focus', function () {
            $(this).removeClass('input-error');
        });
        
        $('.login-form').on('submit', function (e) {
            $(this).find('input[type="text"], input[type="password"], textarea').each(function () {
                if ($(this).val() == "") {
                    e.preventDefault();
                    $(this).addClass('input-error');
                } else {
                    $(this).removeClass('input-error');
                }
            });
        });
    });
</script>
<script type="text/javascript">
    function refreshCaptcha(){
        $.ajax({
            type: "POST",
            url: "<?php echo base_url('site/refreshCaptcha'); ?>",
            data: {},
            success: function(captcha){
                $("#captcha_image").html(captcha);
            }
        });
    }
</script>
<script>
    function copy(email, password)
    {
        document.getElementById("email").value = email;
        document.getElementById("password").value = password;
    }
</script>