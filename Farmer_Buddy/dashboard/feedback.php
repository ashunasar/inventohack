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
                            <h5 class="card-title" style="color:#009688;font-size:25px;"> Thanks For Sending query</h5>
                            <br>
                            <div> We will Solve Your problem as soon as posible</div>



                            </div>


                            </div>


                            </div>
                            </div>
                        
                           
                        <div class="tab-content" id="query_section">
                            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                                <div class="main-card mb-3 card">
                                    <div class="card-body" >
                                       <h5 class="card-title"> Ask Any Query ?</h5>
                                        <form class="" action="" method="post">
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="position-relative form-group">
<!--
                                                    <label for="exampleEmail11" class="">Text</label>
                                                    <input name="text" id="exampleEmail11" placeholder="Enter The Text" type="text" class="form-control" required>
-->
                                                    <textarea name="text" placeholder="Enter Your Query Here . . . . " id="exampleEmail11" cols="30" rows="10" style="    width: 80%;
    border-radius: 15px;
    border: solid #2196F3 3px;" required></textarea>
                                                    </div>
                                                </div>

                                            </div>
                                            
                                            <input type="submit" class="mt-2 btn btn-primary" value="Submit" name="submit">
                                        </form>
                                    </div>
                                    
                                    
                                    <?php 
                                    
                                     if(isset($_POST['submit'])){
                                         $farmer_query_msg = $_POST['text'];
                                         $farmers_mobile = $_SESSION['farmers_mobile'];
                                         
                                         
                                         
                                         $query = "INSERT INTO farmer_query (farmer_query_id, farmer_number, farmer_query_msg) VALUES (NULL, '{$farmers_mobile}', '{$farmer_query_msg}');";
                                         $result = mysqli_query($con,$query);
                                         
                                         
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
