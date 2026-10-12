<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title></title>
    <!-- Stylesheet File -->
    <link rel="stylesheet" href="<?= base_url(); ?>public/style/css/vendor.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/style/css/style.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/style/css/responsive.css">
</head>

<body>

    <!-- preloader area start -->
    <div class="preloader" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div>
    <!-- preloader area end -->

    <div class="body-overlay" id="body-overlay"></div>
    <div class="search-popup" id="search-popup">
        <form action="https://www.s7template.com/tf/uikitpro/home.html" class="search-form">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search.....">
            </div>
            <button type="submit" class="submit-btn"><i class="fa fa-search"></i></button>
        </form>
    </div>
    <!-- //. search Popup -->

    <!-- header start -->
    <div class="header-area bg-base">
        <div class="container">
            <div class="header-top">
                <div class="row">
                    <div class="col-6">
                        <p>&nbsp;</p>
                    </div>
                    <div class="col-6 text-end">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 col-4 align-self-center">
                </div>
                <div class="col-sm-4 col-4 text-center align-self-center text-center">
                    <div class="page-name">Sign In</div>
                </div>
                <div class="col-sm-4 col-4 align-self-center text-end">
                </div>
            </div>
        </div>
    </div>
    <!-- header end -->

    <!-- singin-area start -->
    <div class="signin-area mg-top-90">
        <div class="container">
            <div class="signin-area-inner text-center">
                <img src="<?= base_url(); ?>public/style/img/other/2.svg" alt="img" style="width:60%">
                <h3>Let’s Sign In</h3>
                <div class="or">
                </div>
            </div>
            <form class="contact-form-inner"action="<?= base_url() ?>login" method="post" required>
                <label class="single-input-wrap">
                    <input type="text" placeholder="User email" name="email">
                </label>
                <label class="single-input-wrap">
                    <input type="password" placeholder="************" name="password" required>
                </label>
                <div class="form-check">
                </div>
                <button type="submit" class="btn-large btn-blue w-100" name="submit" id="submit" value="1">Sign In</button>
            </form>
        </div>
    </div>
    <!-- singin-area End -->

    <!-- back to top area start -->
    <div class="back-to-top">
        <span class="back-top"><i class="fa fa-angle-up"></i></span>
    </div>
    <!-- back to top area end -->


    <!-- All Js File here -->
    <script src="<?= base_url(); ?>public/style/js/vendor.js"></script>
    <script src="<?= base_url(); ?>public/style/js/main.js"></script>

</body>

</html>