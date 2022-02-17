<?php 

$serverName ="localhost:3307";
$userName ="root";
$password ="";
$dbname ="vote";




$connect = mysqli_connect($serverName, $userName,$password,$dbname) or die("connection fail");
if($connect)
{
    echo "connected";
}
else{
    echo "not connected";
}
?>
