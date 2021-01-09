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
            
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">

                  

                     <?php      
//                $farmers_mobile = $_SESSION['farmers_mobile'];
                $order_query = "SELECT * FROM `biokit_order`";
                $order_query_result  =mysqli_query($con,$order_query);
                $count = mysqli_num_rows($order_query_result);
                       
                       if($count >= 1 ){
                           
                           ?>
 
 
<div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          
                          <th>
                            Mobile No.
                          </th>
                          <th>
                            Address
                          </th>
                          <th>
                            Quantity
                          </th>
                          <th>
                            Crop
                          </th>
                          <th>
                            Date
                          </th>
                          
                        </tr>
                      </thead>
                     <tbody>
          
                              
                              
            <?php
                // $farmers_mobile = $_SESSION['farmers_mobile'];
                $order_query = "SELECT * FROM `direct_sell` ";
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
                  </div>
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