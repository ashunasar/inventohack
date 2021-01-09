<?php  
session_start();
include "includes/header.php" ?>
        <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Order BIOKIT</h4>
                  <p class="card-description">
                    Order a BIOKIT
                  </p>
                  <form class="forms-sample" action="biokit.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="exampleInputName1">Quantity</label>
                      <input type="number" name="quantity" class="form-control" id="exampleInputName1" placeholder="Enter The Quantity of biokit" required>
                    </div>
                    
                    <div class="form-group">
                      <label for="exampleTextarea1">Address</label>
                      <textarea class="form-control" name="address" id="exampleTextarea1" placeholder="Enter Your Address Here . . . . " rows="4" required></textarea>
                    </div>
                    
                    <input type="submit" class="mt-2 btn btn-primary" value="Submit" name="submit">
                  </form>
                </div>
                
            <?php 


            if(isset($_POST['submit'])){
            $address=  mysqli_real_escape_string($con, $_POST['address']);
            $quantity= $_POST['quantity'];
            $farmers_mobile = $_SESSION['farmers_mobile'];
            $query = "INSERT INTO `biokit_order` (`biokit_id`, `farmer_number`, `farmer_address`, `biokit_quantity`, `order_status`, `order_date`) VALUES (NULL, '{$farmers_mobile}', '{$address}', '{$quantity}', 'pending', now());";
            $result = mysqli_query($con,$query);

            }

            ?>

                
                
                <div class="table-responsive pt-3">
                                <?php      
                $farmers_mobile = $_SESSION['farmers_mobile'];
                $order_query = "SELECT * FROM `biokit_order` where farmer_number ='{$farmers_mobile}' ";
                $order_query_result  =mysqli_query($con,$order_query);
                $count = mysqli_num_rows($order_query_result);
                       
                       if($count >= 1 ){
                           
                           ?>
                           
                                           <table class="table table-bordered table-hover">
                           <thead>
                               <tr>
<!--                                   <th>ID</th>-->
                                   <th>Mobile Number</th>
                                   <th>Address</th>
                                   <th>Quantity</th>
                                   <th>Order Status</th>
                                   <th>Order date</th>
                         
                               </tr>
                           </thead>
                           
                           <tbody>
          
                              
                              
            <?php
                 $farmers_mobile = $_SESSION['farmers_mobile'];
                $order_query = "SELECT * FROM `biokit_order` where farmer_number ='{$farmers_mobile}' ";
                $order_query_result  =mysqli_query($con,$order_query);
                 while($row = mysqli_fetch_assoc($order_query_result)){
                     $biokit_id = $row['biokit_id'];
                     $farmer_number = $row['farmer_number'];
                     $farmer_address = $row['farmer_address'];
                     $biokit_quantity = $row['biokit_quantity'];
                     $order_status = $row['order_status'];
                     $order_date = $row['order_date'];
                    
                     echo "<tr>";
                    // echo "<td>$notification_id</td>";
                     echo "<td>$farmer_number</td>";
                     echo "<td>$farmer_address</td>";
                     echo "<td>$biokit_quantity</td>";
                     echo "<td>$order_status</td>";
                     echo "<td>$order_date</td>";
                    
                     echo "</tr>";
                     
                     
                     
                 }

            ?> 
                           </tbody>
                                
                       </table>
                           
                           
                           <?php
                           
                       }
                       
                       else{
                           
                           ?>
            <div class="card-body"  style="text-align:center;">
            <h5 class="card-title" style="color:#009688;font-size:25px;"> No Ordered Yet</h5>
            <br>
            <div>You have not done any order </div>



            </div>
                           <?php
                           
                       }
                       
                       
                       
                       ?>
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
