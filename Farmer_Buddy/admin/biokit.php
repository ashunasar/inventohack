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
                //$farmers_mobile = $_SESSION['farmers_mobile'];
                $order_query = "SELECT * FROM `biokit_order` ";
                $order_query_result  =mysqli_query($con,$order_query);
                $count = mysqli_num_rows($order_query_result);
                       
                       if($count >= 1 ){
                           
                           ?>
                  
                  
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>
                         Id
                          </th>
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
                            Order Status
                          </th>
                          <th>
                            Order Date
                          </th>
                          <th>
                            Check
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                       
                       
                       
            <?php
                // $farmers_mobile = $_SESSION['farmers_mobile'];
                $order_query = "SELECT * FROM `biokit_order`";
                $order_query_result  =mysqli_query($con,$order_query);
                 while($row = mysqli_fetch_assoc($order_query_result)){
                     $biokit_id = $row['biokit_id'];
                     $farmer_number = $row['farmer_number'];
                     $farmer_address = $row['farmer_address'];
                     $biokit_quantity = $row['biokit_quantity'];
                     $order_status = $row['order_status'];
                     $order_date = $row['order_date'];
                    echo " <form action='biokit.php' method='post' enctype='multipart/form-data'>";
                     echo "<tr>";
                     echo "<td><input type='hidden' name='biokit_id' value='$biokit_id'>$biokit_id</td>";
                     echo "<td name='$farmer_number'>$farmer_number</td>";
                     echo "<td>$farmer_address</td>";
                     echo "<td>$biokit_quantity</td>";
                     
                     
                     echo "<td><select name='status'>
             <option value='$order_status'>$order_status</option>        
             <option value='delevered'>delevered</option>
             <option value='pending'>pending</option>
         </select></td>";

                     echo "<td>$order_date</td>";
                     echo "<td><input type='submit' class='mt-2 btn btn-primary' name='submit' value='OK'></td>";
                    
                     echo "</tr>";
                     echo "</form>";
                     
                     
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
            <h5 class="card-title" style="color:#009688;font-size:25px;">No Order Found</h5>
            <br>
            <div>No-one Ordered Yet </div>



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


          <?php 
             if(isset($_POST['submit'])){
                
               $status = $_POST['status'];
               $biokit_id = $_POST['biokit_id'];
$query = "UPDATE `biokit_order` SET `order_status`='{$status}' WHERE biokit_id = '{$biokit_id}'";
$result = mysqli_query($con,$query);
             
                 header('Location: biokit.php');
                 
             }


         ?>

