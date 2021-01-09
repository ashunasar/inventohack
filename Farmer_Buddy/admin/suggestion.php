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
           
            <div class="tab-content" id="thanks" style="display:none">
            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
            <div class="main-card mb-3 card">
            <div class="card-body"  style="text-align:center;">
            <h5 class="card-title" style="color:#009688;font-size:25px;"> 
            
            Suggestions are Sent
            
            </h5>
            <br>
            <!--                            <div> We will Solve Your problem as soon as posible</div>-->



            </div>


            </div>


            </div>
            </div>
            
            <div class="col-lg-12 grid-margin stretch-card" id="query_section">
              <div class="card">
                <div class="card-body">
                  <label><h3>Send Suggestions</h3></label>
   <form method="post" action="suggestion.php" enctype="multipart/form-data">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Farmer Number</label>
      <input type="text" name="number" class="form-control" id="inputEmail4" placeholder="Enter The Farmer Number">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Days</label>
      <input type="number" name="days" value="20" onchange="change1()" class="form-control" id="days" placeholder="Enter The Number OF Days">
    </div>
  </div>
  <input type="submit" class="mt-2 btn btn-primary" value="Submit" name="submit">
</form>
</div>
             
             <script>
                 function change1(){
                var days=  document.getElementById('days').value;
                     if(days <20){
                        
                         document.getElementById('days').value = 20;
                        }
                     
                 } 
                 
                  </script>
             
              </div>
            </div>
            
          </div>
        </div>
        
                <?php 
date_default_timezone_set('Asia/Kolkata'); 
    
        if(isset($_POST['submit'])){

             $farmer_number = $_POST['number'];
             $days          = $_POST['days'];
               
             $derisom = round(300 / $days,1);
             $oxyrich = round(1 / $days,3);
            
            $derisomsugg   = "Derisom(purple) : " . $derisom . " KG per Acre ";
            $oxyrichsugg   = "Oxyrich(Blue) : " .$oxyrich . " KG per Acre";
            $soilbuddysugg = "10 gm per Acre ";
            $margsomesugg  = " 5 gm per Acre ";

             
            $test_date           = date('d-m-Y',time());
            $derisom_curdate     = time();
            $oxyrich_curdate     = time();
            $soilbuddy_curdate   = time();
            $margsom_curdate     = time();

            $derisom_nextdate    = time() + 86400;
            $oxyrich_nextdate    = time() + 86400;

            $soilbuddy_nextdate  = time() + 1296000;
            $margsom_nextdate    = time() + 1296000;
            
            $query_for_sugg = "INSERT INTO `suggestions` (`suggestions_id`, `farmer_number`, `derisomsugg`, `oxyrichsugg`, `soilbuddysugg`, `margsomesugg`, `test_date`, `derisom_curdate`, `oxyrich_curdate`, `soilbuddy_curdate`, `margsom_curdate`, `derisom_nextdate`, `oxyrich_nextdate`, `soilbuddy_nextdate`, `margsom_nextdate`) VALUES (NULL, '$farmer_number', '$derisomsugg', '$oxyrichsugg', '$soilbuddysugg', '$margsomesugg', '$test_date', '$derisom_curdate', '$oxyrich_curdate', '$soilbuddy_curdate', '$margsom_curdate', '$derisom_nextdate', '$oxyrich_nextdate', '$soilbuddy_nextdate', '$margsom_nextdate');";
            
            mysqli_query($con,$query_for_sugg);
            
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
        
        
<!--        Later used-->

       
        
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