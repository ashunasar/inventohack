<?php  
session_start();
include "includes/header.php" ?>
                   
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card" style="width:100%;">
                <div class="card-body" style="width:100%;">
                  <h4 class="card-title">Report-1</h4>
                  <iframe id="iframe" src="../charts/full_report.php" frameborder="0" height="350px" width="100%"></iframe>
                </div>
                <div class="card-body" style="text-align: center;">
                
            <select id="options" onchange="show_report()" style="border-radius: 5px;width: 215px;height: 38px;">
                    <option  value='0-10'>Select test Number</option>
                    <?php
                        
                  //   $test_conducted  = 0;
                    $for = 10;    
                    if($test_conducted <= $for){
                     echo "<option  value='0-{$test_conducted}'>0-{$test_conducted}</option>";
                    }
                    else if($test_conducted > $for ){
                     $div_by10 = $test_conducted/$for;
                     $ceil = ceil($div_by10);
                    for($i=1; $i<$ceil;$i++){
                     $check = $i*$for;
                     $check2 = $check +$for;  
                    if($i == 1 ){
                        echo "<option  value='0-{$check}'>0-{$check}</option>"; 
                    }
                    if(($ceil)*$for == $check2){
                    break;
                    } 

                    echo "<option  value='{$check}-{$check2}'>{$check}-{$check2}</option>"; 

                    }
                    if(($ceil*$for - $test_conducted) <$for){
                    echo "<option value='{$check}-{$test_conducted}'>{$check}-{$test_conducted}</option>";  
                    }
                    }
                    ?>
                   
                       </select>
                                   
                        <script>
                        
                         function show_report(){
                            var str = document.getElementById("options").value;
                            //var str = "10-17";
                            var res = str.split("-");
                            
                            document.getElementById("iframe").src = "https://inventohack.com/Farmer_Buddy/charts/full_reportdy.php?first=" + res[0] +"&last="+res[1];
                             
                         } 
                         
                         </script>
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
