<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "myproject";

$connect = new mysqli($server,$username,$password,$database);

// if($connect->connect_error){
//     die("Connection Failed:".$connect->connect_error);
// }
// echo "Connected Successfully"

?>