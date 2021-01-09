<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$db['db_host']= 'localhost';
$db['db_user']= 'u689246864_inventohack';
$db['db_pass']= 'Inventohack@24';
$db['db_name']= 'u689246864_inventohack';
foreach($db as $key => $value){
    define(strtoupper($key), $value);
}
$con = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
if(!$con){
    die("error " .mysqli_error($con));
}
?>