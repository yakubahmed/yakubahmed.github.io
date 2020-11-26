<?php 

$host = "localhost";
$user = "id13045437_root";
$password = 'Yakub';
$db = "id13045437_covid19";

$con = mysqli_connect($host,$user,$password,$db);

if(!$con){
   echo "Database connectio failed";
}

function escape_string($val){
   global $con;
   mysqli_real_escape_string($con, $val);
}


?>