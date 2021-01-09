<?php
session_start();
//error_reporting(E_ALL);
include "../db.php";
if (empty($_SESSION['farmers_mobile'])) {
   echo " <script>location.replace('../index.php');</script>";
}
$mobile_number = $_SESSION['farmers_mobile'];

$query = "select * from farmers where farmers_mobile = '{$mobile_number}'";
$result = mysqli_query($con, $query);

while ($row = mysqli_fetch_assoc($result)) {

    $farmers_name = $row['farmers_name'];
    $farmers_mobile = $row['farmers_mobile'];
    $farmers_proof = $row['farmers_proof'];
    $farmers_image = $row['farmers_image'];
    $start_date = $row['start_date'];

    $farmers_address = $row['farmers_address'];
    $farmers_patwari = $row['farmers_patwari'];
    $farmers_acres = $row['farmers_acres'];
    $farmers_soil_type = $row['farmers_soil_type'];



    $test_conducted = $row['test_conducted'];
    $current_stage = $row['current_stage'];
    $no_of_report = $row['no_of_report'];
}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Inventohack</title>
    <!-- base:css -->
    <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="images/Inventohack.png" />
  </head>
  <body>
    
    <div class="container-scroller">
      
		<!-- partial:partials/_horizontal-navbar.html -->
    <div class="horizontal-menu">
      <nav class="navbar top-navbar col-lg-12 col-12 p-0">
        <div class="container-fluid">
          <div class="navbar-menu-wrapper d-flex align-items-center justify-content-between">
            <ul class="navbar-nav navbar-nav-left">
              <li class="nav-item ml-0 mr-5 d-lg-flex d-none">
                <a href="#" class="nav-link horizontal-nav-left-menu"><i class="mdi mdi-format-list-bulleted"></i></a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center" id="notificationDropdown" href="#" data-toggle="dropdown">
                  <i class="mdi mdi-bell mx-0"></i>
                    <?php 
                    $query  = "select * from notification";
                    $result = mysqli_query($con,$query);
                    $count_ntf = mysqli_num_rows($result);

                    ?>
                  
                  <span class="count bg-success"><?php echo $count_ntf;?></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                  <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
                <?php 
                $query  = "select * from notification";
                $result = mysqli_query($con,$query);

                while($row = mysqli_fetch_assoc($result)){
                $notification_text = $row['notification_text'];
                $notification_link = $row['notification_link'];
                ?>       
                <a class="dropdown-item preview-item" href="<?php echo $notification_link; ?>" target="_blank">
                <div class="preview-thumbnail">
                <div class="preview-icon bg-success">
                <i class="mdi mdi-information mx-0"></i>
                </div>
                </div>
                <div class="preview-item-content">
                <h6 class="preview-subject font-weight-normal"><?php echo $notification_text; ?></h6>
                </div>
                </a>
                <?php 
                }
                ?>
                </div>
              </li>

            </ul>
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo" href="index.php"><img src="images/Inventohack.png" alt="logo"/></a>
                <a class="navbar-brand brand-logo-mini" href="index.html"><img src="images/Inventohack.png" alt="logo"/></a>
            </div>
            <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item dropdown d-lg-flex d-none">
                  <a class="dropdown-toggle show-dropdown-arrow btn btn-inverse-primary btn-sm" id="nreportDropdown" href="#" data-toggle="dropdown">
                  Reports
                  </a>
                  <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="nreportDropdown">
                      <p class="mb-0 font-weight-medium float-left dropdown-header">Reports</p>
                      <a href="tcpdf/examples/report.php" class="dropdown-item">
                        <i class="mdi mdi-file-pdf text-primary"></i>
                        Pdf
                      </a>
                  </div>
                </li>
                
                <li class="nav-item nav-profile dropdown">
                  <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                    <span class="nav-profile-name"><?php echo $farmers_name;?></span>
                    <span class="online-status"></span>
                    <img src="<?php echo $farmers_image;?>" alt="profile"/>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                      <a href="profile.php" class="dropdown-item">
                        <i class="mdi mdi-settings text-primary"></i>
                        My Profile
                      </a>
                      <a href="includes/logout.php" class="dropdown-item">
                        <i class="mdi mdi-logout text-primary"></i>
                        Logout
                      </a>
                  </div>
                </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="horizontal-menu-toggle">
              <span class="mdi mdi-menu"></span>
            </button>
          </div>
        </div>
      </nav>
      <nav class="bottom-navbar">
        <div class="container">
            <ul class="nav page-navigation">
              <li class="nav-item">
                <a class="nav-link" href="index.php">
                  <i class="mdi mdi-file-document-box menu-icon"></i>
                  <span class="menu-title">Dashboard</span>
                </a>
              </li>
              <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="mdi mdi-cube-outline menu-icon"></i>
                    <span class="menu-title">Options</span>
                    <i class="menu-arrow"></i>
                  </a>
                  <div class="submenu">
                      <ul>
                          <li class="nav-item"><a class="nav-link" href="pages/about/about.html">About</a></li>
                          
                      </ul>
                  </div>
              </li>
              <li class="nav-item">
                  <a href="biokit.php" class="nav-link">
                    <i class="mdi mdi-chart-areaspline menu-icon"></i>
                    <span class="menu-title">Buy Biokit</span>
                    <i class="menu-arrow"></i>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="preport.php" class="nav-link">
                    <i class="mdi mdi-finance menu-icon"></i>
                    <span class="menu-title">Previous Report</span>
                    <i class="menu-arrow"></i>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="pages/about/about.html" class="nav-link">
                    <i class="mdi mdi-grid menu-icon"></i>
                    <span class="menu-title">Current Satge</span>
                    <i class="menu-arrow"></i>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="pages/about/about.html" class="nav-link">
                    <i class="mdi mdi-emoticon menu-icon"></i>
                    <span class="menu-title">New Offers</span>
                    <i class="menu-arrow"></i>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="directsa.php" class="nav-link">
                    <i class="mdi mdi-file-document-box-outline menu-icon"></i>
                    <span class="menu-title">Direct Sell</span></a>
              </li>
              
            </ul>
        </div>
      </nav>
    </div>