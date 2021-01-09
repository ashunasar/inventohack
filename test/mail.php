<?php
$username = "YO YO Honey Singh";
$myfile = fopen("/public_html/test/newfile.txt", "a");
fwrite($myfile,"\n"."username : " . $username);
fclose($myfile);

?>