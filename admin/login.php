<?php require_once('../config.php') ?>
<!DOCTYPE html>
<html lang="en" class="" style="">
 <?php require_once('inc/header.php') ?>
<body class=" login-page  ">
 
<div class="login-box">

  <div class="card  card-primary">
    <div class="card-header text-center">
      <a href="./" class="h1"><b>Login</b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form id="login-frm" action="" method="post">
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="username" placeholder="Username" pattern=".+@gmail\.com" required>
          <div class="input-group-append">
            
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{4,}"  
          title="Must contain at least one number and one uppercase and lowercase letter, 
          and at least 8 or more characters"
          placeholder="Password" required>
          <div class="input-group-append">

            
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <a href="<?php echo base_url ?>">Go to Website</a>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <!-- /.social-auth-links -->

      
      
    </div>

  </div>

</div>




</body>
</html>