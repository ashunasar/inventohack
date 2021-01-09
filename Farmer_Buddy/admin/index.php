<?php 
session_start();
include "includes/header.php"?>

    <!-- partial -->
		<div class="container-fluid page-body-wrapper">

			<div class="main-panel">

				<div class="content-wrapper">

					<?php include "includes/middle.php"?>
					<div class="row">
					
					       <?php 
//        $mobile_number = $_SESSION['farmers_mobile'];
//    
//        $query = "select * from farmers where farmers_mobile = '{$mobile_number}'";
          $query = "select * from farmers";
        $result = mysqli_query($con,$query);
        $total_no_of_farmer = mysqli_num_rows($result);
  
         $total_no_of_test = 0;
         $total_no_of_report = 0;

        while($row = mysqli_fetch_assoc($result)){
            
            $farmers_name = $row['farmers_name'];
            $farmers_mobile = $row['farmers_mobile'];
            $farmers_proof = $row['farmers_proof'];
            $farmers_image = $row['farmers_image'];
            $start_date = $row['start_date'];
            $test_conducted = $row['test_conducted'];
            $current_stage = $row['current_stage'];
            $no_of_report = $row['no_of_report'];
            
            $total_no_of_test += $test_conducted;
            $total_no_of_report += $no_of_report;
            
        }
        ?>
					
						<div class="col-sm-8 flex-column d-flex stretch-card">
							<div class="row">
								<div class="col-lg-4 d-flex grid-margin stretch-card">
									<div class="card sale-visit-statistics-border">
										<div class="card-body">
											<h2 class="text-dark mb-2 font-weight-bold">Farmer</h2>
											<h4 class="card-title mb-2">Total no. farmers</h4>
											<small class="text-muted"><span style="font-size: 20px;"><?php echo $total_no_of_farmer; ?></span></small>
										</div>
									</div>
								</div>
								<div class="col-lg-4 d-flex grid-margin stretch-card">
									<div class="card sale-diffrence-border">
										<div class="card-body">
											<h2 class="text-dark mb-2 font-weight-bold">Tests</h2>
											<h4 class="card-title mb-2">Total Test Conducted</h4>
											<small class="text-muted"><span style="font-size: 20px;"><?php echo $total_no_of_test; ?></span></small>
										</div>
									</div>
								</div>
								<div class="col-lg-4 d-flex grid-margin stretch-card">
									<div class="card sale-visit-statistics-border">
										<div class="card-body">
											<h2 class="text-dark mb-2 font-weight-bold">Reports</h2>
											<h4 class="card-title mb-2">Total Report genreated</h4>
											<small class="text-muted"><span style="font-size: 20px;"><?php echo $total_no_of_report; ?></span></small>
										</div>
									</div>
								</div>


							</div>
							
						
				<!-- content-wrapper ends -->
				<!-- partial:partials/_footer.html -->
				<footer class="footer">
          
        </footer>
				<!-- partial -->
			</div>
      <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  
                  
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            Number
                          </th>
                          <th>
                            Name
                          </th>
                          <th>
                            District
                          </th>
                          <th>
                            Status
                          </th>
                          <th>
                            Action
                          </th>
                        </tr>
                      </thead>
                      <tbody>

                          <?php 
                                    
                                    $query = "SELECT * FROM farmers";
                                    $result = mysqli_query($con,$query);
                                    
                                     while($row = mysqli_fetch_assoc($result)){
                                         
                                       $farmers_mobile  = $row['farmers_mobile'];
                                       $farmers_dist    = $row['farmers_dist'];
                                       $current_stage   = $row['current_stage'];
                                       $farmers_name    = $row['farmers_name'];
                                       $farmers_image    = $row['farmers_image'];
                                         
                                         
                                         ?>

                        <tr>
                          <td class="py-1">
                            <?php echo $farmers_mobile?>
                          </td>
                          <td>
                            <img src="<?php echo $farmers_image?>" alt="image"/> <?php echo $farmers_name?>
                          </td>
                          <td>
                           <?php echo $farmers_dist?>
                          </td>
                          <td>
                            <label class="badge badge-danger"><?php echo $current_stage?></label>
                          </td>
                          <td>
                           <a href="farmer_detail.php?farmers_mobile=<?php echo $farmers_mobile?>">
                            <button class="btn btn-primary">Details</button></a>
                          </td>
                        </tr>
                            <?php
                            }
                            ?>

                        
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
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