<?php include "db.php"?>
<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
  animationEnabled: true,
  theme: "light2",
  title:{
    text: "Hydrogen"
  },
  axisX:{
    valueFormatString: "HH mm DD MMM",
    crosshair: {
      enabled: true,
      snapToDataPoint: true
    }
  },
  axisY: {
    title: " ",
    crosshair: {
      enabled: true
    }
  },
  toolTip:{
    shared:true
  },  
  legend:{
    cursor:"pointer",
    verticalAlign: "bottom",
    horizontalAlign: "left",
    dockInsidePlotArea: true,
    itemclick: toogleDataSeries
  },
  data: [
  {
    type: "line",
    showInLegend: true,
    name: "Hydrogen",
    lineDashType: "dash",
    dataPoints: [
        
        <?php 
         $farmers_mobile = $_GET['farmers_mobile'];
       // Select * from farmers_data where farmers_mobile ='{$farmers_mobile}' ORDER BY date DESC LIMIT 0,5
        $query = "Select * from farmers_data where farmers_mobile ='{$farmers_mobile}' ORDER BY date DESC LIMIT 0,10";
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
        
// example format of graph points 
//      { x: new Date(2017, 0, 4), y: 60 },

    ]
  }]
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
<div id="chartContainer" style="height: 300px; width: 100%;"></div>
<script src="canvas.js"></script>
</body>
</html>