<?php
session_start();
 //error_reporting(E_ALL);
 ?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Inventohack</title>
  <link rel="stylesheet" href="./style.css">
  <link rel="stylesheet" href="net.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
<link rel="shortcut icon" href="images/Inventohack.png" />

</head>
<body>

<!-- partial:index.partial.html -->
<div class='cursor'>
  <div class='cursor_point'></div>
  <div class='cursor_outer'></div>
</div>
<div class='portfolio'>
  <div class='portfolio_home'>
    <div style='position: fixed; z-index: -99; width: 2320px; height: 180%; left: 0;top: -38%;'>
      <iframe frameborder="0" height="100%" width="100%" src="https://youtube.com/embed/tz8Puc4W5BM?autoplay=1&controls=0&showinfo=0&autohide=1&mute=1"></iframe>
    </div>
    
    <div class='portfolio_home__title'>
      <div class='logo'>
        <img class='first' src='farmer.png'>
        <img class='second' src='buddy.png'>
        <div class='page_portfolio'>
        	<script type="text/javascript" src="net.js"></script>
        	<div id="particles-js">
        		<center>
        		<a href="login/login.html"><button type="button" class="btn1">Login</button></a>
        <a href="login/register.html"><button type="button" class="btn1">Signup</button></a>
        </center>
          
          
          
        </div>
        </div>
      </div>
      <hr>
      <h1><div class="inve">
        We are Inventohack<br></div>
        <a href="login/login.php"><button type="button" class="btn1">Login</button></a>
        <a href="login/register.php"><button type="button" class="btn1">Signup</button></a>
        
      
    </div>
  </div>
</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script><script  src="./script.js"></script>
  <script type="text/javascript" src="particles.js"></script>
<script type="text/javascript" src="app.js"></script>


</body>
</html>