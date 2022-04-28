<?php
session_start();

include("connect.php");
$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];

$check =mysqli_query($connect,"SELECT * FROM client WHERE username='$username' AND password='$password' AND role='$role' ");
if(mysqli_num_rows($check)>0)
{


$clientdata =mysqli_fetch_array($check);
$candidate =mysqli_query($connect,"SELECT * FROM client WHERE role=2");
$candidatedata =mysqli_fetch_all($candidate,MYSQLI_ASSOC);

$_SESSION['clientdata'] = $clientdata;
$_SESSION['candidatedata'] = $candidatedata;

echo '
    <script>
    
    window.location ="../routes/dashboard.php";
    </script>
    ';
}
else{
    echo '
    <script>
    alert("USER NOT FOUND ");
    window.location ="../";
    </script>
    ';
}

?>