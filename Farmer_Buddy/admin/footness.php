<?php 
session_start();
include "includes/header.php"?>

    <!-- partial -->
		<div class="container-fluid page-body-wrapper">

			<div class="main-panel">

				<div class="content-wrapper">

					<?php include "includes/middle.php"?>
        <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
           
            <div class="tab-content" id="thanks" style="display:none">
            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
            <div class="main-card mb-3 card">
            <div class="card-body"  style="text-align:center;">
            <h5 class="card-title" style="color:#009688;font-size:25px;"> 
            
            Footness  are Sent
            
            </h5>
            <br>
            <!--                            <div> We will Solve Your problem as soon as posible</div>-->



            </div>


            </div>


            </div>
            </div>
            
            <div class="col-lg-12 grid-margin stretch-card" id="query_section">
              <div class="card">
                <div class="card-body">
                  <label><h3>Send Suggestions</h3></label>
   <form method="post" action="footness.php" enctype="multipart/form-data">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Farmer Number</label>
      <input type="text" name="farmers_mobile" class="form-control" id="inputEmail4" placeholder="Enter The Farmer Number">
    </div>
    </div>
    
    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Footness</label>
      <input type="text" name="footness" class="form-control" id="days" placeholder="Enter footness seperated by *">
    </div>
  </div>
  <input type="submit" class="mt-2 btn btn-primary" value="Submit" name="submit">
</form>
</div>
             
              </div>
            </div>
            
          </div>
        </div>
        
                <?php 
 
                 if(isset($_POST['submit'])){
                     
                     $farmers_mobile = $_POST['farmers_mobile'];
                     $footness = mysqli_real_escape_string($con,$_POST['footness']);
                     
                     $footness_exp = explode("*",$footness);
                     $add_li = "";
                      for($i =0; $i<count($footness_exp); $i++){
                          
                          $add_li .= "<li>" .$footness_exp[$i]. "</li>";
                      }
                     
                     $check_query = "select * from footness where farmers_mobile='$farmers_mobile' ";
                     $check_query_res = mysqli_query($con,$check_query);
                     $count = mysqli_num_rows($check_query_res);
                     
                     if($count >= 1){
                         
                         $update_query = "UPDATE `footness` SET `footness`='$add_li' WHERE farmers_mobile = '$farmers_mobile'";
                         mysqli_query($con,$update_query);
                         
                     }else{
                         $query = "INSERT INTO `footness` (`footness_id`, `farmers_mobile`, `footness`) VALUES (NULL, '$farmers_mobile', '$add_li')"; 
                     mysqli_query($con,$query);
                     }
                     
                     
                     
              
            
    
    
    
    
            ?>
            <script>
            var el = document.getElementById("query_section");
            el.style.display = 'none';
            var el1 = document.getElementById("thanks");
            el1.style.display = 'block';
            </script>
            <?php
                 }
        ?>
        
        
<!--        Later used-->

       
        
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

    <!-- container-scroller -->
    <!-- base:js -->
    <script src="vendors/base/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="js/template.js"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <!-- End plugin js for this page -->
    <script src="vendors/chart.js/Chart.min.js"></script>
    <script src="vendors/progressbar.js/progressbar.min.js"></script>
    <script src="vendors/chartjs-plugin-datalabels/chartjs-plugin-datalabels.js"></script>
    <script src="vendors/justgage/raphael-2.1.4.min.js"></script>
    <script src="vendors/justgage/justgage.js"></script>
    <!-- Custom js for this page-->
    <script src="js/dashboard.js"></script>
    <script type="text/javascript" src="particles.js"></script>
<script type="text/javascript" src="app.js"></script>
    <!-- End custom js for this page-->
  </body>
</html>