<?php  
session_start();
include "includes/header.php" ?>
        <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="main-panel">
        <div class="content-wrapper">
    
             <div class="app-main__outer">
                    <div class="app-main__inner">
   
                           
                            <div class="tab-content" id="thanks" style="display:none">
                            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                            <div class="main-card mb-3 card">
                            <div class="card-body"  style="text-align:center;">
                            <h5 class="card-title" style="color:#009688;font-size:25px;"> Your Profile has been Updated</h5>
                            <br>
<!--                            <div> We will Solve Your problem as soon as posible</div>-->



                            </div>


                            </div>


                            </div>
                            </div>
                            
                            
                            <div class="tab-content" id="error" style="display:none">
                            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                            <div class="main-card mb-3 card">
                            <div class="card-body"  style="text-align:center;">
                            <h5 class="card-title" style="color:#009688;font-size:25px;"> ERROR</h5>
                            <br>
                            <div>Please click <a href="data.php">Here</a> to try again </div>



                            </div>


                            </div>


                            </div>
                            </div>
                            
                            
                        
                           
                        <div class="tab-content" id="query_section">
                            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                                <div class="main-card mb-3 card">
                                    <div class="card-body" >
                                       <h5 class="card-title">Profile</h5>
                                        <form class="" action="" method="post">
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="position-relative form-group">
                                                    <label for="exampleEmail11" class="">My Number</label>
                                                    <input name="number" id="exampleEmail11" placeholder="Enter The Farmer Number" value="<?php echo $farmers_mobile?>" type="text" class="form-control" required>
                                                    </div>
                                                    
                                                    <div class="position-relative form-group">
                                                    <label for="exampleEmail11" class="">My Name</label>
                                                    <input name="name" id="exampleEmail11" placeholder="Enter The Farmer Number" value="<?php echo $farmers_name?>" type="text" class="form-control" required>
                                                    </div>
                                                    
                                                    <div class="position-relative form-group">
                                                    <label for="exampleEmail11" class="">My Adhaar or voter id card Number</label>
                                                    <input name="proof" id="exampleEmail11" placeholder="Enter The Farmer Number" value="<?php echo $farmers_proof?>" type="text" class="form-control" required>
                                                    </div>
                                                    <div class="position-relative form-group">
                                                    <label for="exampleEmail11" class="">My Adress</label>
                                                    <input name="address" id="exampleEmail11" placeholder="Enter The Farmer Number" value="<?php echo $farmers_address?>" type="text" class="form-control" required>
                                                    </div>
                                                    <div class="position-relative form-group">
                                                    <label for="exampleEmail11" class="">Patwari Number</label>
                                                    <input name="patwari" id="exampleEmail11" placeholder="Enter The Farmer Number" value="<?php echo $farmers_patwari?>" type="text" class="form-control" required>
                                                    </div>
                                                    <div class="position-relative form-group">
                                                    <label for="exampleEmail11" class="">Acres</label>
                                                    <input name="acres" id="exampleEmail11" placeholder="Enter The Farmer Number" value="<?php echo $farmers_acres?>" type="text" class="form-control" required>
                                                    </div>
                                                    <div class="position-relative form-group">
                                                    <label for="exampleEmail11" class="">Soil Type</label><br>
                                                    
                                                    <select name="soil_type" id="" style="width: 130px;border-radius: 5px;">
                                                        <option value="<?php echo $farmers_soil_type?>"><?php echo $farmers_soil_type?></option>
                                                        <option value="Clay Soil">Clay Soil</option>
                                                        <option value="Sandy Soil">Sandy Soil</option>
                                                        <option value="Silty Soil">Silty Soil</option>
                                                        <option value="Peaty Soil">Peaty Soil</option>
                                                        <option value="Chalky Soil">Chalky Soil</option>
                                                        <option value="Loamy Soil">Loamy Soil</option>
                                                    </select>
                                                    

                                                    </div>
                                                </div>

                                            </div>
                                            
                                            <input type="submit" class="mt-2 btn btn-primary" value="Update My profile" name="submit">
                                        </form>
                                    </div>
                                    
                                    
        <?php 

        if(isset($_POST['submit'])){
     
             
             

         $farmer_mobile = $_POST['number'];
         $name          = $_POST['name'];
         $proof         = $_POST['proof'];
         $address       = $_POST['address'];
         $patwari       = $_POST['patwari'];
         $acres         = $_POST['acres'];
         $soil_type       = $_POST['soil_type'];
         
             $update_profile ="UPDATE `farmers` SET `farmers_mobile`='{$farmer_mobile}',`farmers_proof`='{$proof}',`farmers_name`='{$name}',`farmers_address`='{$address}',`farmers_patwari`='{$patwari}',`farmers_acres`='{$acres}',`farmers_soil_type`='{$soil_type}' WHERE farmers_mobile = '{$mobile_number}'";
            
            mysqli_query($con,$update_profile);

  
            ?>
            <script>
            var el = document.getElementById("query_section");
            el.style.display = 'none';
            var el2 = document.getElementById("error");
            el2.style.display = 'none';
            var el1 = document.getElementById("thanks");
            el1.style.display = 'block';

            </script>
            <?php
                
                
            }

        ?>
                                    
                                    
               
   

                            </div>
                        </div>
                        
                        
                        
                        
                        

                        
                    </div>
          </div>

            </div>
            
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
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
  <script src="vendors/typeahead.js/typeahead.bundle.min.js"></script>
  <script src="vendors/select2/select2.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <script src="js/file-upload.js"></script>
  <script src="js/typeahead.js"></script>
  <script src="js/select2.js"></script>
  <!-- End custom js for this page-->
</body>

</html>
