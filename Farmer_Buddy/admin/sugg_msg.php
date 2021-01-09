<?php include "includes/db.php"?>
<?php
$query = "SELECT * FROM farmers";
$result = mysqli_query($con,$query);

 while($row = mysqli_fetch_assoc($result)){
     
     
       $farmers_mobile =  $row['farmers_mobile'];
     
 
$query_to_get_sugg  = "SELECT * FROM suggestions WHERE farmer_number='{$farmers_mobile}'";
$result_to_get_sugg =mysqli_query($con,$query_to_get_sugg);

   while($row2 = mysqli_fetch_assoc($result_to_get_sugg)){
       
       $farmer_number  = $row2['farmer_number'];
       $derisomsugg    = $row2['derisomsugg'];
       $oxyrichsugg    = $row2['oxyrichsugg'];
       $soilbuddysugg    = $row2['soilbuddysugg'];
       $margsomesugg    = $row2['margsomesugg'];
       $oxyrichsugg    = $row2['derisom_nextdate'];
       
       $derisom_nextdate    = $row2['derisom_nextdate'];
       $oxyrich_nextdate    = $row2['oxyrich_nextdate'];
       $soilbuddy_nextdate    = $row2['soilbuddy_nextdate'];
       $margsom_nextdate    = $row2['margsom_nextdate'];


       $cur_date = date('dmY',time()); 
       echo $cur_date . "<br>";
       echo date('dmY',$derisom_nextdate) . "<br>";
        if($cur_date == date('dmY',$derisom_nextdate)){
        //call function for message 
            $curdate = time();
            $nextdate = time() + 86400;
            echo "message sent for derisom" .$farmer_number ;
            
            // message Codes  
            
        $url="https://www.sms4india.com/api/v1/sendCampaign";
        $message = urlencode($derisomsugg);// urlencode your message
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_POST, 1);// set post data to true
        curl_setopt($curl, CURLOPT_POSTFIELDS, "apikey=DWLUU5YVYCNNV2CNZFKWC1D9PDPIZVOF&secret=O58M4LOSAAP6A9C6&usetype=stage&phone=$farmer_number&senderid=asimsiddiqui20172017@gmail.com&message=$message");// post data
        // query parameter values must be given without squarebrackets.
        // Optional Authentication:
        curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($curl);
        curl_close($curl);
        echo $result;
            
        //update the next date
        $derisom_query = "UPDATE `suggestions` SET derisom_curdate='$curdate',derisom_nextdate='$nextdate' WHERE farmer_number='$farmer_number'";
           $result =  mysqli_query($con,$derisom_query);
            if($result){
              echo "ERROR ";  
            }else{
               echo "ERROR 1" . mysqli_error($con);  
            }
        }
       else{
           echo "ops message sent for derisom";
       }
          
//        if($cur_date == date('dmY',$oxyrich_nextdate){
//        //call function for message 
//
//        //update the next date
//        }        
//        if($cur_date == date('dmY',$soilbuddy_nextdate){
//        //call function for message 
//
//        //update the next date
//        }       
//        if($cur_date == date('dmY',$margsom_nextdate){
//        //call function for message 
//
//        //update the next date
//        }
       
       
       
       
       
       
       
       
       
       
//       if($temperature < 90 ){
//          textMessage($farmers_mobile,"आफिस आये थे ..
//.
//.
//orange pack");
//          
//       }
       
//        if($humidity < 90 ){
//        textMessage($farmers_mobile,"message for humidity");
//        }
//        if($soil_moisture < 90 ){
//        textMessage($farmers_mobile,"message for soil_moisture");
//        }
//        if($carbon_monoxide < 90 ){
//        textMessage($farmers_mobile,"message for carbon_monoxide");
//        }
//        if($hydrogen < 90 ){
//        textMessage($farmers_mobile,"message for hydrogen");
//        }
//        if($npk < 90 ){
//        textMessage($farmers_mobile,"message for npk");
//        }
       
       
   }
     
     
     
 }

?>