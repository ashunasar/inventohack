<?php session_start();?>
<?php include "../index/db.php"?>
<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2",
	title:{
		text: "Report"
	},
	axisX:{
		valueFormatString: "DD MMM",
		crosshair: {
			enabled: true,
			snapToDataPoint: true
		}
	},
	axisY: {
		title: "",
		crosshair: {
			enabled: true
		}
	},
	toolTip:{
		shared:true
	},  

	data: [{
		type: "line",
		name: "Temperature",
        lineDashType: "dash",
//		markerType: "square",
//		xValueFormatString: "DD MMM, YYYY",
		color: "#ee5253",
		dataPoints: [
            
            
        <?php 
         $farmers_mobile = $_SESSION['farmers_mobile'];
      
          $first = $_GET['first'];
          $last = $_GET['last'];
           
       // Select * from farmers_data where farmers_mobile ='{$farmers_mobile}' ORDER BY date ASC LIMIT 0,5
        $query = "Select * from farmers_data where farmers_mobile ='{$farmers_mobile}' ORDER BY date ASC LIMIT $first,$last";
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
             
             echo"{ x: new Date({$date_year}, {$date_month}, {$date_day},{$hour},{$minutes},{$seconds}), y: {$temperature}},";
           
         }
        ?>    
            
            
            
            

		]
	},
	{
		type: "line",
		
		name: "Humidity",
		lineDashType: "dash",
        color:"#91b7b8",
		dataPoints: [
			 <?php 
         $farmers_mobile = $_SESSION['farmers_mobile'];
       // Select * from farmers_data where farmers_mobile ='{$farmers_mobile}' ORDER BY date ASC LIMIT 0,5
            $query = "Select * from farmers_data where farmers_mobile ='{$farmers_mobile}' ORDER BY date ASC LIMIT $first,$last";
            $result = mysqli_query($con,$query);
   
         while($row = mysqli_fetch_assoc($result)){
             
            $humidity = $row['humidity'];
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
             
             echo"{ x: new Date({$date_year}, {$date_month}, {$date_day},{$hour},{$minutes},{$seconds}), y: {$humidity}},";
           
         }
        ?>       
		]
	},
    {
		type: "line",
	
		name: "Soil Moisture",
		lineDashType: "dash",
        color: "#c39675",
		dataPoints: [
			        <?php 
         $farmers_mobile = $_SESSION['farmers_mobile'];
       // Select * from farmers_data where farmers_mobile ='{$farmers_mobile}' ORDER BY date ASC LIMIT 0,5
        $query = "Select * from farmers_data where farmers_mobile ='{$farmers_mobile}' ORDER BY date ASC LIMIT $first,$last";
        $result = mysqli_query($con,$query);
   
         while($row = mysqli_fetch_assoc($result)){
             
            $soil_moisture = $row['soil_moisture'];
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
             
             echo"{ x: new Date({$date_year}, {$date_month}, {$date_day},{$hour},{$minutes},{$seconds}), y: {$soil_moisture}},";
         }
        ?>   
		]
	},
           
           
               {
		type: "line",
	
		name: "Hydrogen",
		lineDashType: "dash",
        color: "#fd9644",
		dataPoints: [
			<?php 
         $farmers_mobile = $_SESSION['farmers_mobile'];
       // Select * from farmers_data where farmers_mobile ='{$farmers_mobile}' ORDER BY date ASC LIMIT 0,5
        $query = "Select * from farmers_data where farmers_mobile ='{$farmers_mobile}' ORDER BY date ASC LIMIT $first,$last";
        $result = mysqli_query($con,$query);
   
         while($row = mysqli_fetch_assoc($result)){
             
            $hydrogen = $row['hydrogen'];
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
             
             echo"{ x: new Date({$date_year}, {$date_month}, {$date_day},{$hour},{$minutes},{$seconds}), y: {$hydrogen}},";
         }
        ?>       
		]
	} ,
           
               {
		type: "line",

		name: "Carbon Monoxide",
		lineDashType: "dash",
        color: "#4b6584",
		dataPoints: [
			<?php 
         $farmers_mobile = $_SESSION['farmers_mobile'];
       // Select * from farmers_data where farmers_mobile ='{$farmers_mobile}' ORDER BY date ASC LIMIT 0,5
        $query = "Select * from farmers_data where farmers_mobile ='{$farmers_mobile}' ORDER BY date ASC LIMIT $first,$last";
        $result = mysqli_query($con,$query);
   
         while($row = mysqli_fetch_assoc($result)){
             
            $carbon_monoxide = $row['carbon_monoxide'];
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
             
             echo"{ x: new Date({$date_year}, {$date_month}, {$date_day},{$hour},{$minutes},{$seconds}), y: {$carbon_monoxide}},";
         }
        ?>       
		]
	} ,
               {
		type: "line",
	
		name: "NPK",
		lineDashType: "dash",
        color: "#2ed573",
		dataPoints: [
			<?php 
         $farmers_mobile = $_SESSION['farmers_mobile'];
       // Select * from farmers_data where farmers_mobile ='{$farmers_mobile}' ORDER BY date ASC LIMIT 0,5
        $query = "Select * from farmers_data where farmers_mobile ='{$farmers_mobile}' ORDER BY date ASC LIMIT $first,$last";
        $result = mysqli_query($con,$query);
   
         while($row = mysqli_fetch_assoc($result)){
             
            $npk = $row['npk'];
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
             
             echo"{ x: new Date({$date_year}, {$date_month}, {$date_day},{$hour},{$minutes},{$seconds}), y: {$npk}},";
         }
        ?>       
		]
	} 
          
    ]
});
chart.render();

function toogleDataSeries(e){
	if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
		e.dataSeries.visible = false;
	} else{
		e.dataSeries.visible = true;
	}
	chart.render();
}

}
</script>
</head>
<body>
<div id="chartContainer" style="height: 300px; width: 90%;"></div>

<script src="canvas.js"></script>
</body>
</html>
