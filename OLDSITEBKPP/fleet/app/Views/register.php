<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Signin</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url(); ?>public/assets/adminlte/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= base_url(); ?>public/assets/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url(); ?>public/assets/adminlte/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>public/assets/bootstrap/css/bootstrap.min.css">
</head>
<body class="hold-transition login-page bg-black bg-gradient">
    
    
<div class="register-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="<?= base_url() ?>" class="h1"><img src="<?= base_url().site_info()['siteLogoIcon']; ?>" class="img-fluid"></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Register</p>

      <form action="<?= base_url() ?>register" method="post">
        
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Staff ID" name="staff_id">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-id-badge"></span>
            </div>
          </div>
        </div>
        
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="First name" name="first_name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email"  name="email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password" id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Retype Password" name="confirm_password" id="confirm_password" onkeyup="validate_password()">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        
        <div class="alert alert-dismissible fade show" role="alert">
            <span id="wrong_pass_alert"></span><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
                    
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
              <label for="agreeTerms">
               I agree to the <a href="#">terms</a>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>


      <a href="<?= base_url();  ?>" class="text-center">I already have an account</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<script>
    function validate_password() {
      var pass = document.getElementById('password').value;
      var confirm_pass = document.getElementById('confirm_password').value;
      if (pass != confirm_pass) {
          document.getElementById('wrong_pass_alert').style.color = 'orange';
          document.getElementById('wrong_pass_alert').innerHTML = 'Password does not match';
          document.getElementById('submit').disabled = true;
          document.getElementById('submit').style.opacity = (0.4);
      } else {
          document.getElementById('wrong_pass_alert').style.color = 'green';
          document.getElementById('wrong_pass_alert').innerHTML = 'Password Matched';
          document.getElementById('submit').disabled = false;
          document.getElementById('submit').style.opacity = (1);
        }
    }
</script>
<!-- jQuery -->
<script src="<?= base_url(); ?>public/assets/adminlte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url(); ?>public/assets/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url(); ?>public/assets/adminlte/dist/js/adminlte.min.js"></script>
</body>
</html>
