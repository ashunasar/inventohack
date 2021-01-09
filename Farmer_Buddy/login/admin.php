<?php ob_start() ?>
<?php include "../db.php" ?>
    <?php session_start();?> 
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Inventohack</title>
  <!-- base:css -->
  <link rel="stylesheet" href="../../vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../images/favicon.png" />
</head>

<body>

  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="main-panel">
        
        <div class="content-wrapper d-flex align-items-center auth px-0">
          <div class="row w-100 mx-0">
            <div class="col-lg-4 mx-auto">
              <div id="particles-js">
              <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                <div class="brand-logo">
                  <center>
                  <img src="../images/Inventohack.png" alt="logo">
                  </center>
                </div>
                <h4>Hello! let's get started</h4>
                <h6 class="font-weight-light">Sign in to continue as Admin.</h6>
                <form class="pt-3" method="post" action="admin.php" enctype="multipart/form-data">
                  <div class="form-group">
                  <input type="tel" maxlength="10" name="mobile_number" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Mobile">
                  </div>
                  <div class="form-group">
                    <input type="password" name="your_pass" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <p class="form-group" id="mobile_error" style="font-size:14px;color:red;display:none;">Mobile Number Not registered!</p>
                    <p class="form-group" id="pass_error" style="font-size:14px;color:red;display:none;">Incorrect Password!</p>
                      
                  </div>
                  <div class="mt-3">
                   
                   <input type="submit" name="signin" id="signin" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" value="SIGN IN"/>
                   
              
                  </div>
                  </form>
                  <div class="my-2 d-flex justify-content-between align-items-center">
<!--
                    <div class="form-check">
                      <label class="form-check-label text-muted">
                        <input type="checkbox" class="form-check-input">
                        Keep me signed in
                      </label>
                    </div>
-->
<!--                    <a href="#" class="auth-link text-black">Forgot password?</a>-->
                  </div>
                  
<!--
                  <div class="text-center mt-4 font-weight-light">
                    Don't have an account? <a href="register.php" class="text-primary">Create</a>
                  </div>
-->
                
              </div>
            </div>
          </div>
          </div>
        </div>
        
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- base:js -->
  <script src="../vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="../js/template.js"></script>
  <script type="text/javascript" src="../particles.js"></script>
  <script type="text/javascript" src="../particles.min.js"></script>
<script type="text/javascript" src="../app.js"></script>
  <!-- endinject -->
</body>

</html>

   <?php      
            if(isset($_POST['signin'])){
            $mobile_number = mysqli_real_escape_string($con,$_POST['mobile_number']);
            $password = mysqli_real_escape_string($con,$_POST['your_pass']);
            $query ="SELECT * FROM admin WHERE admin_number = '{$mobile_number}' ";   
            $query_result = mysqli_query($con, $query);
                    
                $count = mysqli_num_rows($query_result);
                
                 if($count){
             while($row = mysqli_fetch_assoc($query_result)){
                $admin_number        = $row['admin_number'];
                $admin_password      = $row['admin_password'];
                
            }
            if($mobile_number ==$admin_number &&  $password ==$admin_password){
                       
              $_SESSION['admin_number']= $admin_number;  
            header('Location:../admin');
            }
                else{
                    ?>
                    <script>
                   document.getElementById("pass_error").style.display ='block';
                   </script>
                <?php
                }
                 }
                else {
                    
                ?>
                <script>
                    document.getElementById("mobile_error").style.display ='block';
                </script>
                <?php      
                }}?>


