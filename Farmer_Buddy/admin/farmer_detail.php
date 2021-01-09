<?php 
session_start();
include "includes/header.php"?>
     

     

    <!-- partial -->
		<div class="container-fluid page-body-wrapper">

			<div class="main-panel">

				<div class="content-wrapper">

                 <?php include "includes/middle.php" ?>
					<div class="row" style="margin-top: 15px;">
						<div class="col-sm-8 flex-column d-flex stretch-card">

							<div class="row">
								<div class="col-sm-12 grid-margin d-flex stretch-card">
									<div class="card">
										<div class="card-body">
											<div class="d-flex align-items-center justify-content-between">
												<h4 class="card-title mb-2">Last 10 Tests Report</h4>

											</div>
											<div>
                   
                   
                   <?php   $mobile_number = $_GET['farmers_mobile'];?>
                   
                    <ul class="nav nav-tabs tab-no-active-fill" role="tablist">
                    <li class="nav-item">
                    <a class="nav-link active pl-2 pr-2" id="revenue-for-last-month-tab" data-toggle="tab" href="#temperature" role="tab" aria-controls="revenue-for-last-month" aria-selected="true">Temprature</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link pl-2 pr-2" id="server-loading-tab" data-toggle="tab" href="#humidity" role="tab" aria-controls="server-loading" aria-selected="false">Humidity</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link pl-2 pr-2" id="data-managed-tab" data-toggle="tab" href="#SoilMoisture" role="tab" aria-controls="data-managed" aria-selected="false">Soil Moisture</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link pl-2 pr-2" id="sales-by-traffic-tab" data-toggle="tab" href="#Hydrogen" role="tab" aria-controls="sales-by-traffic" aria-selected="false">Hydrogen</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link pl-2 pr-2" id="sales-by-traffic-tab" data-toggle="tab" href="#CarbonMonoxide" role="tab" aria-controls="sales-by-traffic" aria-selected="false">Carbon Monoxide</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link pl-2 pr-2" id="sales-by-traffic-tab" data-toggle="tab" href="#npk" role="tab" aria-controls="sales-by-traffic" aria-selected="false">NPK</a>
                    </li>
                    </ul>
                            <div class="tab-content tab-no-active-fill-tab-content">
                            <div class="tab-pane fade show active" id="temperature" role="tabpanel" aria-labelledby="revenue-for-last-month-tab">
                            <iframe src="charts/temp.php?farmers_mobile=<?php echo $mobile_number ?>" frameborder="0" height="350px" width="100%"></iframe>
                            </div>
                            <div class="tab-pane fade" id="humidity" role="tabpanel" aria-labelledby="server-loading-tab">
                            <iframe src="charts/humidity.php?farmers_mobile=<?php echo $mobile_number ?>" frameborder="0" height="350px" width="100%"></iframe>
                            </div>
                            <div class="tab-pane fade" id="SoilMoisture" role="tabpanel" aria-labelledby="data-managed-tab">
                            <iframe src="charts/soil_moisture.php?farmers_mobile=<?php echo $mobile_number ?>" frameborder="0" height="350px" width="100%"></iframe>
                            </div>

                            <div class="tab-pane fade" id="Hydrogen" role="tabpanel" aria-labelledby="data-managed-tab">
                            <iframe src="charts/hydrogen.php?farmers_mobile=<?php echo $mobile_number ?>" frameborder="0" height="350px" width="100%"></iframe>
                            </div>
                            <div class="tab-pane fade" id="CarbonMonoxide" role="tabpanel" aria-labelledby="data-managed-tab">
                            <iframe src="charts/carbon_monoxide.php?farmers_mobile=<?php echo $mobile_number ?>" frameborder="0" height="350px" width="100%"></iframe>
                            </div>
                            <div class="tab-pane fade" id="npk" role="tabpanel" aria-labelledby="data-managed-tab">
                            <iframe src="charts/npk.php?farmers_mobile=<?php echo $mobile_number ?>" frameborder="0" height="350px" width="100%"></iframe>
                            </div>

                            </div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-4 flex-column d-flex stretch-card">
							<div class="row flex-grow">
								<div class="col-sm-12 grid-margin stretch-card">
									<div class="card">
										<div class="card-body">
											<div class="row">
												<div class="col-lg-8">
													<h3 class="font-weight-bold text-dark">Bhopal, M.p</h3>
													<p class="text-dark">Monday 3.00 PM</p>
													<div class="d-lg-flex align-items-baseline mb-3">
														<h1 class="text-dark font-weight-bold">23<sup class="font-weight-light"><small>o</small><small class="font-weight-medium">c</small></sup></h1>
														<p class="text-muted ml-3">Partly cloudy</p>
													</div>
												</div>
												<div class="col-lg-4">
													<div class="position-relative">
														<img src="images/dashboard/live.png" class="w-100" alt="">
														<div class="live-info badge badge-success">Live</div>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-12 mt-4 mt-lg-0">
													<div class="bg-primary text-white px-4 py-4 card">
														<div class="row">
															<div class="col-sm-6 pl-lg-5">
																<h2>Season</h2>
																<p class="mb-0">Crop Season</p>
															</div>
															<div class="col-sm-6 climate-info-border mt-lg-0 mt-2">
																<h2>Mustard</h2>
																<p class="mb-0">Season</p>
															</div>
														</div>
													</div>
												</div>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-12 grid-margin stretch-card">
									<div class="card">
										<div class="card-body">
											<div class="row">
												<div class="col-sm-12">
													<div class="d-flex align-items-center justify-content-between">
														<h4 class="card-title mb-0">Soil Analysis</h4>
														<div class="dropdown">
															<a href="#" class="text-success btn btn-link  px-1"><i class="mdi mdi-refresh"></i></a>
															<a href="#" class="text-success btn btn-link px-1 dropdown-toggle dropdown-arrow-none" data-toggle="dropdown" id="profileDropdownvisittoday"><i class="mdi mdi-dots-horizontal"></i></a>
															<div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdownvisittoday">
																<a class="dropdown-item">
																	<i class="mdi mdi-grease-pencil text-primary"></i>
																	Edit
																</a>
																<a class="dropdown-item">
																	<i class="mdi mdi-delete text-primary"></i>
																	Delete
																</a>
															</div>
														</div>
													</div>
													<p class="mt-1">Soil Quality:</p>
													<div class="d-lg-flex align-items-center justify-content-between">
														<h1 class="font-weight-bold text-dark">Good</h1>

														
													</div>
													<div class="card">
								<div class="card-body">
									
									
										<div id="productorder-gage" class="gauge productorder-gage"></div>
									
								</div>
                <a href="suggestion.php"><button type="button" class="btn btn-success btn-block">Suggestions</button></a>
							</div>
												</div>
											</div>
										</div>
									</div>
								</div>
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