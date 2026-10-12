<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ONE2 DASH - Lite</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url() ?>public/assets/landing/img/favicon.png" rel="icon">
  <link href="<?= base_url() ?>public/assets/landing/img/favicon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url() ?>public/assets/landing/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?= base_url() ?>public/assets/landing/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>public/assets/landing/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url() ?>public/assets/landing/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>public/assets/landing/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>public/assets/landing/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?= base_url() ?>public/assets/landing/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url() ?>public/assets/landing/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="#"><span><img src="<?= base_url() ?>public/assets/landing/img/logo-light.png" class="img-fluid"></span></a></h1>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#features">Features</a></li>
          <li><a class="nav-link scrollto" href="<?= base_url() ?>public/login">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">

    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
          <div data-aos="zoom-out">
            <h1>Build Your Next Project with <span>ONE2 DASH</span></h1>
            <h2>ONE2 DASH is Admin Panel with multi dashboard.</h2>
            <div class="text-center text-lg-start">
              <a href="<?= base_url('login'); ?>" class="btn-get-started scrollto">Try Demo</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
          <img src="<?= base_url() ?>public/assets/landing/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">

          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" data-aos="fade-left">
            <h3>ONE2 DASH</h3>
            <p>ONE2 DASH is Admin Panel with multi dashboard, built with worlds famous AdminLTE theme and most advanced CodeIgniter Framework. Secured with CodeIgniter's Shield and AuthGuard Security features.</p>

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon"><i class="bi bi-filetype-php"></i></div>
              <h4 class="title"><a href="https://codeigniter.com/">CodeIgniter 4.4.3 & Php >= 7.4</a></h4>
              <p class="description">The small framework with powerful features. CodeIgniter is a powerful PHP framework with a very small footprint, built for developers who need a simple and elegant toolkit to create full-featured web applications.</p>
            </div>

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
              <div class="icon"><i class="bi bi-bootstrap-fill"></i></div>
              <h4 class="title"><a href="https://getbootstrap.com/">Bootstrap 5.3</a></h4>
              <p class="description">Powerful, extensible, and feature-packed frontend toolkit. Build and customize with Sass, utilize prebuilt grid system and components, and bring projects to life with powerful JavaScript plugins.</p>
            </div>

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
              <div class="icon"><i class="bi bi-shield-fill-check"></i></div>
              <h4 class="title">Shield</h4>
              <p class="description">Shield is the official authentication and authorization framework for CodeIgniter 4. While it does provide a base set of tools that are commonly used in websites, it is designed to be flexible and easily customizable.</p>
            </div>

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
              <div class="icon"><i class="bi bi-shield-lock-fill"></i></div>
              <h4 class="title">Authguard</h4>
              <p class="description">Authguard provide enhanced Security with custom before and after filters.</p>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Features</h2>
          <p>Check The Features</p>
        </div>

        <div class="row" data-aos="fade-left">
          <div class="col-lg-3 col-md-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="50">
              <i class="ri-fingerprint-line" style="color: #ffbb2c;"></i>
              <h3>Authentication</h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
              <i class="bi bi-database-fill" style="color: #5578ff;"></i>
              <h3>Roles</h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="150">
              <i class="bi bi-menu-button-wide-fill" style="color: #e80368;"></i>
              <h3>Module</h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
              <i class="bi bi-menu-button-fill" style="color: #e361ff;"></i>
              <h3>Sub-Modules</h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="250">
              <i class="bi bi-person-badge-fill" style="color: #47aeff;"></i>
              <h3>Profile</h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
              <i class="bi bi-sliders" style="color: #ffa76e;"></i>
              <h3>Application Settings</h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="350">
              <i class="bi bi-cloud-arrow-up-fill" style="color: #11dbcf;"></i>
              <h3>File Upload</h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="400">
              <i class="bi bi-shield-fill-check" style="color: #4233ff;"></i>
              <h3>User Permission</h3>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Features Section -->


    <!-- ======= Details Section ======= -->
    <section id="gallery" class="details">
      <div class="container">

        <div class="row content">
          <div class="col-md-4" data-aos="fade-right">
            <img src="<?= base_url() ?>public/assets/landing/img/details-1.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-4" data-aos="fade-up">
            <h3>Start building your Php project immediately.</h3>
            <p class="fst-italic" style="text-align:justify">
              The ONE2 DASH PHP CRUD application is a powerful tool that revolutionizes project development, allowing users to streamline their workflow and save valuable time. With a robust set of CRUD (Create, Read, Update, Delete) functionalities, this application empowers users to effortlessly manage project data, facilitating efficient project building. What sets ONE2 DASH apart is its integrated authentication features, ensuring a secure environment for users to handle sensitive project information. By providing a seamless authentication process, the application enhances data protection and user access control, creating a reliable foundation for collaborative project development. Whether you're a seasoned developer or a newcomer to project management, ONE2 DASH simplifies the process, allowing you to focus on innovation and productivity rather than dealing with complex data handling and security concerns.
            </p>
          </div>
        </div>

        <div class="row content">
          <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
            <img src="<?= base_url() ?>public/assets/landing/img/details-2.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
            <h3>Multi Dashboards</h3>
            <p class="fst-italic" style="text-align:justify">
              ONE2 DASH, built with the AdminLTE theme, stands as a comprehensive solution catering to a diverse range of administrative needs. The incorporation of the AdminLTE theme elevates the application by offering a sleek and responsive dashboard that is not only visually appealing but also highly functional. Designed to meet the demands of various administrative tasks, ONE2 DASH's dashboard covers a spectrum of functions, including finance, orders, users, accounts, and more. This user-friendly interface provides administrators with an intuitive platform to monitor and manage essential aspects of their projects or businesses efficiently. The integration of the AdminLTE theme enhances the overall user experience, offering a well-organized and aesthetically pleasing environment for administrators to navigate through different modules seamlessly. Whether tracking financial metrics, managing user accounts, or overseeing orders, ONE2 DASH with AdminLTE ensures a centralized and visually engaging hub for all administrative operations.
            </p>
          </div>
        </div>


      </div>
    </section><!-- End Details Section -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

  

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="credits">
       Presented by <a href="https://cycodetech.in/">CYCODE TECHNOLOGIES</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="<?= base_url() ?>public/assets/landing/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="<?= base_url() ?>public/assets/landing/vendor/aos/aos.js"></script>
  <script src="<?= base_url() ?>public/assets/landing/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url() ?>public/assets/landing/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?= base_url() ?>public/assets/landing/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?= base_url() ?>public/assets/landing/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url() ?>public/assets/landing/js/main.js"></script>

</body>

</html>