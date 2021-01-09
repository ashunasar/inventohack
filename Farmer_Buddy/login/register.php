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
  <link rel="stylesheet" href="../vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../images/inventohack.png" />
  
  <style>
  .custom-file-input::-webkit-file-upload-button {
  visibility: hidden;
}
.custom-file-input::before {
  content: 'Select some files';
  display: inline-block;
  background: linear-gradient(top, #f9f9f9, #e3e3e3);
  border: 1px solid #999;
  border-radius: 3px;
  padding: 5px 8px;
  outline: none;
  white-space: nowrap;
  -webkit-user-select: none;
  cursor: pointer;
  text-shadow: 1px 1px #fff;
  font-weight: 700;
  font-size: 10pt;
}
.custom-file-input:hover::before {
  border-color: black;
}
.custom-file-input:active::before {
  background: -webkit-linear-gradient(top, #e3e3e3, #f9f9f9);
}  
    
  </style>
  
  
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="main-panel">
        <div class="content-wrapper d-flex align-items-center auth px-0">
          <div class="row w-100 mx-0">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                <div class="brand-logo">
                  <center>
                  <img src="../images/Inventohack.png" alt="logo">
                  </center>
                </div>
                <h4>New here?</h4>
                <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
                <form class="pt-3" method="post" action="register.php" enctype="multipart/form-data">
                  <div class="form-group">
                    <input type="text" name="name" class="form-control form-control-lg" id="exampleInputUsername1" placeholder="Your Full Name">
                  </div>
                  <div class="form-group">
                    <input type="tel" name="mobile_number" maxlength="10" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Mobile No.">
                  </div>
                  <div class="form-group">
                    <input type="text" name="proof" class="form-control form-control-lg" id="exampleInputUsername1" placeholder="Aadhar Card or Voter Id">
                  </div>
                  <div class="form-group">
                    <input type="password" name="pass" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <select class="form-control form-control-lg" id="exampleFormControlSelect2" name="country">
                      <option>Country</option>
                      
                      <option>India</option>
                      
                    </select>
                  </div>
                  <div class="form-group">
                    <select class="form-control form-control-lg" id="exampleFormControlSelect2" name="state">
                    <option value="UK">Select Your State</option>
                    <option value="MP">Madhya Pradesh</option>
                    <option value="UK">Uttarakhand</option>
                      
                    </select>
                  </div>
                  <div class="form-group">
                    <select class="form-control form-control-lg" id="exampleFormControlSelect2" name="dist">
<option value="">Select Yourt Dist</option>
<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Madhya Pradesh-</i></font></option>
<option value="bhopal">Bhopal district</option>
<option value="raisen">Raisen district</option>
<option value="rajgarh">Rajgarh district</option>
<option value="sehore">Sehore district</option>
<option value="vidisha">Vidisha district</option>
<option value="morena">Morena district</option>
<option value="sheopur">Sheopur district</option>
<option value="bhind">Bhind district</option>
<option value="gwalior">Gwalior district</option>
<option value="ashoknagar">Ashoknagar district</option>
<option value="shivpuri">Shivpuri district</option>
<option value="datia">Datia district</option>
<option value="guna">Guna district</option>
<option value="alirajpur">Alirajpur district</option>
<option value="barwani">Barwani district</option>
<option value="burhanpur">Burhanpur district</option>
<option value="indore">Indore district</option>
<option value="dhar">Dhar district</option>
<option value="jhabua">Jhabua district</option>
<option value="khandwa">Khandwa district</option>
<option value="khargone">Khargone district</option>
<option value="balaghat">Balaghat district</option>
<option value="chhindwara">Chhindwara district</option>
<option value="jabalpur">Jabalpur district</option>
<option value="katni">Katni district</option>
<option value="mandla">Mandla district</option>
<option value="narsinghpur">Narsinghpur district</option>
<option value="seoni">Seoni district</option>
<option value="dindori">Dindori district</option>
<option value="betul">Betul district</option>
<option value="harda">Harda district</option>
<option value="hoshangabad">Hoshangabad district</option>
<option value="rewa">Rewa district</option>
<option value="satna">Satna district</option>
<option value="sidhi">Sidhi district</option>
<option value="singrauli">Singrauli district</option>
<option value="chhatarpur">Chhatarpur district</option>
<option value="damoh">Damoh district</option>
<option value="panna">Panna district</option>
<option value="sagar">Sagar district</option>
<option value="tikamgarh">Tikamgarh district</option>
<option value="niwari">Niwari district</option>
<option value="anuppur">Anuppur district</option>
<option value="shahdol">Shahdol district</option>
<option value="umaria">Umaria district</option>
<option value="agar_malwa">Agar Malwa district</option>
<option value="dewas">Dewas district</option>
<option value="mandsaur">Mandsaur district</option>
<option value="neemuch">Neemuch district</option>
<option value="ratlam">Ratlam district</option>
<option value="shajapur">Shajapur district</option>
<option value="ujjain">Ujjain district</option>
<option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Uttarakhand-</i></font></option>
<option value="almora">Almora</option>
<option value="bageshwar">Bageshwar</option>
<option value="chamoli">Chamoli</option>
<option value="champawat">Champawat</option>
<option value="dehradun">Dehradun</option>
<option value="haridwar">Haridwar</option>
<option value="nainital">Nainital</option>
<option value="pauri">Pauri Garhwal</option>
<option value="pithoragarh">Pithoragarh</option>
<option value="rudraprayag">Rudraprayag</option>
<option value="tehri_garwal">Tehri Garhwal</option>
<option value="udham_singh_nagar">Udham Singh Nagar</option>
<option value="uttarkashi">Uttarkashi</option>
                      
                    </select>
                  </div>
                  <div class="form-group">
    <label class="btn-bs-file btn btn-lg btn-success" style="background-color: #2196F3;border-radius: 7px;padding: 10px;height: 40px;font-size: 18px;color: white;">
                                Upload Your Image
                <input type="file" class="custom-file-input" name="image_file" style="display: none;">
                                </label>
                  
                         
                  </div>
                  
                  <div class="form-group" id="display_error" style='display:none;color:red;font-size: 14px;'>
                      
                  </div>
                  
                  <div class="mt-3">
                    <input type="submit" name="signup" id="signup" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" value="Register"/>
                  </div>
                  <div class="text-center mt-4 font-weight-light">
                    Already have an account? <a href="login.php" class="text-primary">Login</a>
                  </div>
                </form>
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
  <!-- endinject -->
</body>

</html>

<?php 
if(isset($_POST['signup'])){
   
    $name  =mysqli_real_escape_string($con,$_POST['name']);
    $mobile_number  =mysqli_real_escape_string($con,$_POST['mobile_number']);
    
    $proof     = mysqli_real_escape_string($con,$_POST['proof']);
    $country   = mysqli_real_escape_string($con,$_POST['country']);
    $state     = mysqli_real_escape_string($con,$_POST['state']);
    $dist      = mysqli_real_escape_string($con,$_POST['dist']);
    
    $pass  =mysqli_real_escape_string($con,$_POST['pass']);
    $user_image = mysqli_real_escape_string($con,$_FILES['image_file']['name']);
    
    $mobile_check ="select * from farmers where farmers_mobile = '{$mobile_number}' ";
    $mobile_check_result = mysqli_query($con,$mobile_check);
    $count_mobile = mysqli_num_rows($mobile_check_result);
    
    
    if(!empty($user_image)){
        if(strlen($pass) > 6){
                if($count_mobile !=1 ){   
                    
    $user_image_temp = $_FILES['image_file']['tmp_name'];   
    $ext = explode('.',$user_image);
    $image_name = $name . $ext[0] .'.'. $ext[1];
    $path = "../images/" . $image_name ;
    move_uploaded_file($user_image_temp ,$path);
    $query  = "Insert Into farmers(farmers_mobile,farmers_proof,farmers_country,farmers_states,farmers_dist,farmers_name,farmers_image,farmers_pass,start_date)";
    $query .= "Values ('{$mobile_number}','{$proof}','{$country}','{$state}','{$dist}','{$name}','{$path}','{$pass}',now())";
    
    $result = mysqli_query($con,$query);
    if(!$result){
        echo "<h1>error</h1>" . mysqli_error($con);  
    }
        if($result){
        $_SESSION['farmers_mobile']= $mobile_number;  
            header('Location:../dashboard');
        }
                }
                else{
            ?>
            <script>
            $('#display_error').css('display','block');
                $('#display_error').html('This Mobile Number Already Registered');
            </script>
            <?php
        }    

        }
        else{
            ?>
            <script>
            $('#display_error').css('display','block');
                $('#display_error').html('Password Should Be More Than 6 characters');
            </script>
            <?php
        }
        
        
 
}
    if(empty($user_image)){
        ?> 
            <script>
            $('#display_error').css('display','block');
                $('#display_error').html('Please Select Your Image');
            </script>
        <?php
    }
}
?>






