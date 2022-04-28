<?php 

$serverName ="localhost:3307";
$userName ="root";
$password ="";
$dbname ="system";

$connect = mysqli_connect($serverName, $userName,$password,$dbname) or die("connection fail");
?>
