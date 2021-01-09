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
            <h5 class="card-title" style="color:#009688;font-size:25px;"> Your data has been inserted</h5>
            <br>
            <!--                            <div> We will Solve Your problem as soon as posible</div>-->



            </div>


            </div>


            </div>
            </div>
            
            
            <div class="tab-content" id="error" style="display:none">
            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
            <div class="main-card mb-3 card">
            <div class="card-body"  style="text-align:center;">
            <h5 class="card-title" style="color:#009688;font-size:25px;"> ERROR</h5>
            <br>
            <div>Please click <a href="data.php">Here</a> to try again </div>



            </div>


            </div>


            </div>
            </div>
            
           
            
            <div class="col-lg-12 grid-margin stretch-card" id="query_section">
              <div class="card">
                <div class="card-body">
                  <label><h3>DATA INSERT</h3></label>
   <form method="post" action="datac.php" enctype="multipart/form-data">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Farmer Number</label>
      <input type="tel" name="number" class="form-control" id="inputEmail4" placeholder="Enter the Farmer Number">
    </div>
    
  </div>
  <input type="submit" class="mt-2 btn btn-primary" value="Submit" name="submit">
</form>
</div>
              </div>
            </div>
            
          </div>
        </div>
        
                <?php 

        if(isset($_POST['submit'])){

         
            
        $farmer_mobile = $_POST['number'];
            
             

        $strJsonFileContents = file_get_contents("https://api.thingspeak.com/channels/830582/feeds.json?api_key=XYCMVXCHHL9C2VXM&results=2");
        $array = json_decode($strJsonFileContents, true);
        //var_dump($array); // show contents

         $temp =   $array['feeds'][0]['field2'];
    
         $humidity =   $array['feeds'][0]['field1'];
        
         $soil_moisture =   $array['feeds'][0]['field3'];
        
         $carbon_monoxide =   $array['feeds'][0]['field4'];
        
         $hydrogen =   $array['feeds'][0]['field5'];
            
            $temp_round = round($temp);
            $humidity_round = round($humidity);

             
            if($temp_round == 0 && $humidity_round == 0 && $soil_moisture == 0 &&  $carbon_monoxide == 0 && $hydrogen == 0 ){
                 ?>
        <script>
        var el = document.getElementById("query_section");
        el.style.display = 'none';
        var el2 = document.getElementById("error");
        el2.style.display = 'block';
        var el1 = document.getElementById("thanks");
        el1.style.display = 'none';

        </script>
        <?php
                
            }
            else{
            $query = "INSERT INTO `farmers_data` (`entry_no`, `farmers_mobile`, `temperature`, `humidity`, `soil_moisture`, `carbon_monoxide`, `hydrogen`, `date`) VALUES (NULL, '{$farmer_mobile}', '{$temp}', '{$humidity}', '{$soil_moisture}', '{$carbon_monoxide}', '{$hydrogen}',CURRENT_TIMESTAMP()) ;";
            $result = mysqli_query($con,$query);
                if($result){
                    $update_test = "update farmers set test_conducted= test_conducted + 1 where farmers_mobile='{$farmer_mobile}'";
                    mysqli_query($con,$update_test);
                }
            if(!$result){
            echo "OPs" . mysqli_error($con); 
            }
                
            ?>
            <script>
            var el = document.getElementById("query_section");
            el.style.display = 'none';
            var el2 = document.getElementById("error");
            el2.style.display = 'none';
            var el1 = document.getElementById("thanks");
            el1.style.display = 'block';

            </script>
            <?php
                
                
            }


        }

        ?>
        
        
        
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