<?php
 session_start();
 include "db.php";
// Fething all data 

   $mobile_number = $_SESSION['farmers_mobile'];
    
        $query = "select * from farmers where farmers_mobile = '{$mobile_number}'";
        $result = mysqli_query($con,$query);
 
        while($row = mysqli_fetch_assoc($result)){
            
            $farmers_name = $row['farmers_name']; 
            $farmers_mobile = $row['farmers_mobile'];
            $farmers_proof = $row['farmers_proof'];
            $farmers_image = $row['farmers_image'];
            $start_date = $row['start_date'];
            $test_conducted = $row['test_conducted'];
            $current_stage = $row['current_stage'];
            $no_of_report = $row['no_of_report'];
           
            
            $farmers_address = $row['farmers_address'];
            $farmers_patwari = $row['farmers_patwari'];
            $farmers_acres = $row['farmers_acres'];
            $farmers_soil_type = $row['farmers_soil_type'];
            $farmers_dist = $row['farmers_dist'];
            
        }

// codes for crop recomondation 
    $strJsonFileContents = file_get_contents("every.json");
    $array = json_decode($strJsonFileContents, true);
    $crop_name = " ";
    $crop_array=array();
    for($i = 0;$i<sizeof($array);$i++){
    if($array[$i]['district'] == $farmers_dist){
    $crop_array[$array[$i]['crop']] = $array[$i]['price'];
    }
    }
    arsort($crop_array);
    $crops = array();
    foreach($crop_array as $crop => $price){
 //   $crop_name .=  "<li>" .$crop . "</li>";
        array_push($crops,$crop);
    }
  //  echo $crop_name;
//    print_r($crops);
//        echo "<br>";
//        echo "<br>";
//        echo "<br>";
        $ph_array = array();
    for($i = 0;$i<sizeof($array);$i++){
    for($a=0;$a<sizeof($crops);$a++){
        
    if($array[$i]['crop'] ==$crops[$a]){
        
    $ph_array[$array[$i]['crop']] = $array[$i]['ph'];
    }
    }
    }
    arsort($ph_array);
     //  print_r($ph_array); 

    foreach($ph_array as $crop => $ph){
    $crop_name .=  "<li>" .$crop . "</li>";
        
    }






$query_to_get_tests  = "SELECT * FROM farmers_data WHERE farmers_mobile='{$farmers_mobile}' ORDER BY date DESC LIMIT 0,1";
$result_to_get_tests =mysqli_query($con,$query_to_get_tests);

   while($row2 = mysqli_fetch_assoc($result_to_get_tests)){
       
       $farmers_mobile  = $row2['farmers_mobile'];
       $temperature     = $row2['temperature'];
       $humidity        = $row2['humidity'];
       $soil_moisture   = $row2['soil_moisture'];
       $carbon_monoxide = $row2['carbon_monoxide'];
       $hydrogen        = $row2['hydrogen'];
       $npk             = $row2['npk'];
       
        if($npk < 208 ){
         
            $sugg = "Derisom";
        }
        else if($npk > 208 ){
        $sugg = " ";
        }
        if($npk ==  208 ){
        $sugg = "Derisom";
        }
       
   }
          


// codes for footness area data 

$footness_query = "SELECT * FROM `footness` WHERE farmers_mobile='$mobile_number'";
$footness_query_res = mysqli_query($con,$footness_query);

$foot = mysqli_fetch_assoc($footness_query_res)['footness'];





// Include the main TCPDF library (search for installation path).
require_once('tcpdf_include.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
//$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
////$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
//$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
//$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
// $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    require_once(dirname(__FILE__).'/lang/eng.php');
    $pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
//$pdf->SetFont('dejavusans', '', 10);

// add a page
$pdf->AddPage();

// writeHTML($html, $ln=true, $fill=false, $reseth=false, $cell=false, $align='')
// writeHTMLCell($w, $h, $x, $y, $html='', $border=0, $ln=0, $fill=0, $reseth=true, $align='', $autopadding=true)
$pdf->Image('Screenshot2.png', '', '', 180, 20, '', '', '', false, 300, '', false, false, 0, false, false, false);

// create some HTML content
$html = <<<EOF

<br>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style type="text/css">
    
#container{
    height: 10000px;
    margin-right: 200px;
    margin-left: 200px;
    border: solid;
}

.uper_info{
/*    border: solid 2px red;*/
    height: 200px;
}

.basic_sub{
    margin-left: 80px;font-weight: 900;
}


table{
        margin-left: 80px;
    width: 50%;
    height: 64%;
}

.tr_special{
       background-color: #4fb1ff;
       text-align: center;
}

.tr_normal{
      
       text-align: center;
}
    
</style>
</head>
<body>
    <div id="container">

        <div style="width: 100%;text-align: center;text-decoration: none;">
            <h1 style="font-size:40px ">Soil Test Report</h1>
        </div><br><br>
        
         <h1 style="margin-left: 80px;font-weight: 900;">A. Basic Information</h1>
         <h2 class="basic_sub">Farmer id  : {$farmers_mobile}</h2>
         <h2 class="basic_sub">Address  : {$farmers_address}</h2>
         <h2 class="basic_sub">Patwari number : {$farmers_patwari}</h2>
         <h2 class="basic_sub">Test Number: {$test_conducted}</h2>
         <h2 class="basic_sub">Acres : {$farmers_acres}</h2>
         <h2 class="basic_sub">Soil Type : {$farmers_soil_type}</h2><br><br>
         
         <h1 style="margin-left: 80px;font-weight: 900;">B. Soil Test Results</h1>
         <h2 class="basic_sub">Table 1. Parameters and Nutrients level of soil</h2>
    

       
       
            
         <table border="1" style="margin-left: 80px; height: 400px;width: 80%;">
             <tr class="tr_special">
             <td rowspan="2">TEST NAME</td>
            <!-- <td colspan="2">PARAMETERS</td> -->
             <td>PARAMETERS</td>
             <td rowspan="2">RESULT <br><b>(High/Low)</b></td>
             </tr>
             
             <tr class="tr_special">
              <td>Current (%)</td> 
            <!--  <td>Goal    (%)</td>-->
           
             </tr>
            <tr class="tr_normal">
            <td>Soil Moisture </td> 
            <td>30.1%</td>
            <!--  <td>60%-80%</td>-->
            <td>Low</td>
            </tr>
            
            <tr class="tr_normal">
            <td>Humidity </td> 
            <td>64</td>
            <!-- <td>30-50</td>-->
            <td>high</td>
            </tr>
            
            <tr class="tr_normal">
            <td>Temperature </td> 
            <td>28</td>
            <!-- <td>20-30</td>-->
            <td>Normal</td>
            </tr>
            
            <tr class="tr_normal">
            <td>Nitrogen </td> 
            <td>50</td>
            <!--<td>100-150</td>-->
            <td>Low</td>
            </tr>
            
            <tr class="tr_normal">
            <td>Potassium </td> 
            <td>53.4</td>
            <!--<td>100-150</td>-->
            <td>Low</td>
            </tr>
            
            <tr class="tr_normal">
            <td>Phosphorus </td> 
            <td>3.98</td>
           <!-- <td>8-12</td>-->
            <td>Low</td>
            </tr>
            
            <tr class="tr_normal">
            <td>PH Value</td> 
            <td>7</td>
            <!--<td>7</td>-->
            <td>Ideal</td>
            </tr>
            
            <tr class="tr_normal">
            <td>Urea</td> 
            <td>35.6</td>
           <!-- <td>17-20</td>-->
            <td>High</td>
            </tr>
            
         </table>
            
            <br><br>
EOF;

// output the HTML content
$pdf->writeHTML($html, true, false, true, false, '');

// add a page
$pdf->AddPage();
$html = <<<EOF
  

  <h1 style="margin-left: 80px;font-weight: 900;">C. Fertilizer Recommendations </h1>
<table border="0" style="margin-left: 80px;width: 60%;">
             <tr class="tr_special">
             <td style="text-align: left"> <b>Agrilife</b> <br><b>Biokit Organic Fertilizer </b>
             </td>
             <td> <br><br><b>Natural Fertilizer</b></td>
             </tr>
            <tr class="tr_normal">
            <td>$sugg</td> 
            <td>Eggshells</td>
            </tr>
            
            <tr class="tr_normal">
            <td>Soilbuddy </td> 
            <td>BananaPeels</td>
            </tr>
            
            <tr class="tr_normal">
            <td>Margosom </td> 
            <td>Dung(Gobar)</td>
            </tr>
            
            <tr class="tr_normal">
            <td>  </td> 
            <td>CoconutHairs</td>
            </tr>

            
         </table>
            
            <br><br>
         <h1 style="margin-left: 80px;font-weight: 900;">D. Crop Recommendation </h1>
       <ol>
       $crop_name
       </ol>
            
                        <br><br>
         <h1 style="margin-left: 80px;font-weight: 900;">E.  Footnotes </h1>
          <ul style="list-style: circle;white-space: pre-line;">
          $foot
          </ul>
             
     
        
        
        
        
    </div>
</body>
</html>
EOF;

// output the HTML content
$pdf->writeHTML($html, true, false, true, false, '');

// - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

// reset pointer to the last page
$pdf->lastPage();

// ---------------------------------------------------------

//Close and output PDF document
$pdf->Output('Farmer Buddy Report.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
?>



