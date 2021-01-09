
<?php include "../../../index/db.php"?>



 <?php 
         $farmers_mobile = $_GET['farmers_mobile'];
       // Select * from farmers_data where farmers_mobile ='{$farmers_mobile}' ORDER BY date DESC LIMIT 0,5
        $query = "Select * from farmers_data where farmers_mobile ='{$farmers_mobile}' ORDER BY date DESC LIMIT 0,10";
        $result = mysqli_query($con,$query);
   
         while($row = mysqli_fetch_assoc($result)){
             
            $temperature = $row['temperature'];
            $date = $row['date'];
            $first_explode = explode(" ",$date);
            $date_format = $first_explode[0];


            $date_format_explode = explode("-",$date_format);
            $date_year = $date_format_explode[0];

            $date_month = $date_format_explode[1]-1;

            $date_day = $date_format_explode[2];


            $time_format = $first_explode[1];
            $time_format_explode = explode(":",$time_format);
            $hour = $time_format_explode[0];
            $minutes = $time_format_explode[1];
            $seconds = $time_format_explode[2];
             
             
             
//            $date_explode = explode("-",$date);
//            $date_year = $date_explode[0];
//            $date_month = $date_explode[1]-1;
//            $date_day = $date_explode[2];
             
            // echo"{ x: new Date({$date_year}, {$date_month}, {$date_day}), y: {$temperature}},";
           
         }
        ?>       