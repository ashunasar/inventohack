
<?php

$con = mysqli_connect("Localhost","root","","inventohack");
$query = "SELECT * FROM farmers";
$result = mysqli_query($con,$query);

 while($row = mysqli_fetch_assoc($result)){
     
     
      echo $farmers_mobile =  $row['farmers_mobile'];
       echo '<br>';
 
$query_to_get_tests  = "SELECT * FROM farmers_data WHERE farmers_mobile='{$farmers_mobile}' ORDER BY date DESC LIMIT 0,1";
$result_to_get_tests =mysqli_query($con,$query_to_get_tests);

   while($row2 = mysqli_fetch_assoc($result_to_get_tests)){
       
       $farmers_mobile = $row2['farmers_mobile'];
       $temperature = $row2['temperature'];
       $humidity = $row2['humidity'];
       $soil_moisture= $row2['soil_moisture'];
       $carbon_monoxide = $row2['carbon_monoxide'];
       $hydrogen = $row2['hydrogen'];
       $npk = $row2['npk'];
       
       if($temperature < 90 ){
          textMessage($farmers_mobile,"आफिस आये थे ..
.
.
orange pack");
          
       }
       
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





 

 
//post

function textMessage($num,$msg){
    
    $url="https://www.sms4india.com/api/v1/sendCampaign";
$message = urlencode($msg);// urlencode your message
$curl = curl_init();
curl_setopt($curl, CURLOPT_POST, 1);// set post data to true
curl_setopt($curl, CURLOPT_POSTFIELDS, "apikey=DWLUU5YVYCNNV2CNZFKWC1D9PDPIZVOF&secret=O58M4LOSAAP6A9C6&usetype=stage&phone=$num&senderid=asimsiddiqui20172017@gmail.com&message=$message");// post data
// query parameter values must be given without squarebrackets.
 // Optional Authentication:
curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($curl);
curl_close($curl);
echo $result;
}

?>






