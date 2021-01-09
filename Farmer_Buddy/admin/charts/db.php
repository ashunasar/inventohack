<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$db['db_host']= 'localhost';
$db['db_user']= 'invens8g_invento';
$db['db_pass']= 'inventohack';
$db['db_name']= 'invens8g_inventohack';
foreach($db as $key => $value){
    define(strtoupper($key), $value);
}
$con = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
if(!$con){
    die("error " .mysqli_error($con));
}
?>