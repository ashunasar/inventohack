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
                  <h4 class="card-title">Direct Sale</h4>
                  
                  <form class="forms-sample" action="directsa.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="exampleInputName1">Crop Name</label>
                      <input name="crop" type="text" class="form-control"  placeholder="Enter The Name of Crop"  id="exampleInputName1" placeholder="Crop">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Quantity</label>
                      <input type="number" class="form-control" name="quantity" id="exampleEmail11" placeholder="Enter The Quantity of biokit">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Unit</label>
                      <select name="unit" style="border-radius: 5px;margin-left: 10px;">
                      	<option>Kg</option>
                      	<option>Ton</option>
                      	<option>Quintal</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleTextarea1">Enter Your Address</label>
                      <textarea class="form-control" name="address" placeholder="Enter Your Address Here . . . . " id="exampleTextarea1" rows="4"></textarea>
                    </div>
                    <input type="submit" class="btn btn-primary mr-2" value="Submit" name="submit">
                  </form>
                </div>

            <?php 


            if(isset($_POST['submit'])){


            $crop = mysqli_real_escape_string($con, $_POST['crop']);
            $quantity = mysqli_real_escape_string($con, $_POST['quantity']);
            $unit = mysqli_real_escape_string($con, $_POST['unit']);
            $address=  mysqli_real_escape_string($con, $_POST['address']);
            $farmer_mobile = $_SESSION['farmers_mobile'];

            $query = "INSERT INTO `direct_sell` (`direct_sell_id`, `direct_sell_crop`, `direct_sell_quantity`, `direct_sell_unit`, `direct_sell_address`, `date`, `farmers_mobile`) VALUES (NULL, '{$crop}', '{$quantity}', '{$unit}', '{$address}', now(), '{$farmer_mobile}')";

            mysqli_query($con,$query);


            }

            ?>
                
                
                
                <div class="table-responsive pt-3">

                                     <?php      
                $farmers_mobile = $_SESSION['farmers_mobile'];
                $order_query = "SELECT * FROM `direct_sell` where farmers_mobile ='{$farmers_mobile}' ";
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
                                   <th>Crop</th>
                                   <th>Date</th>
                         
                               </tr>
                           </thead>
                           
                           <tbody>
          
                              
                              
            <?php
                 $farmers_mobile = $_SESSION['farmers_mobile'];
                $order_query = "SELECT * FROM `direct_sell` where farmers_mobile ='{$farmers_mobile}' ";
                $order_query_result  =mysqli_query($con,$order_query);
                 while($row = mysqli_fetch_assoc($order_query_result)){
                          
                      $farmers_mobile = $row['farmers_mobile'];
                      $address = $row['direct_sell_address'];
                      $quantity = $row['direct_sell_quantity'];
                      $unit = $row['direct_sell_unit'];
                      $crop = $row['direct_sell_crop'];
                      $date = $row['date'];
                    
                     echo "<tr>";
                    // echo "<td>$notification_id</td>";
                     echo "<td>$farmers_mobile</td>";
                     echo "<td> $address</td>";
                     echo "<td>$quantity  $unit</td>";
                     echo "<td>$crop</td>";
                     echo "<td>$date</td>";
                    
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
