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
                  
                 

<div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          
                          <th>
                            Farmer Mobile
                          </th>
                          <th>
                            Farmer Query
                          </th>
                          
                          <th>
                            Delete
                          </th>
                          
                        </tr>
                      </thead>
                           <tbody>
          
                              
                              
            <?php
    
                $farmer_query = "SELECT * FROM farmer_query";
                $farmer_query_result  =mysqli_query($con,$farmer_query);
                 while($row = mysqli_fetch_assoc($farmer_query_result)){
                     $query_id = $row['farmer_query_id'];
                     $farmer_number = $row['farmer_number'];
                     $farmer_query_msg = $row['farmer_query_msg'];
                     
                     echo "<tr>";
                    // echo "<td>$notification_id</td>";
                     echo "<td>$farmer_number</td>";
                     echo "<td>$farmer_query_msg</td>";
                     echo "<td><a onclick=\" javascript : return confirm('Are you sure want to delete this Query?')\" href='queryh.php?delete=$query_id'>Delete</a></td>";
                     echo "</tr>";
                     
                     
                     
                 }

            ?> 
                           </tbody>
                    </table>
                    
                    <?php 
                if(isset($_GET['delete'])){

                $$query_id    = $_GET['delete'] ; 
                $delete_query = "DELETE FROM `farmer_query` WHERE `farmer_query`.`farmer_query_id` = {$$query_id }";
                $delete_query_result = mysqli_query($con,$delete_query);
//                 $comments_count ="UPDATE post SET post_comment_count = post_comment_count - 1 where post_id = $comment_post_id";
//                    mysqli_query($con,$comments_count);
                ?>

                <script>
                window.location= 'queryh.php';
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